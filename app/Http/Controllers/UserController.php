<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index', ['user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = Auth::user();
        return view('user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Gate::authorize('update', $user);

        $userTemp = Auth::user();
        $user = User::find($userTemp->id);

        $request->validate([
            'name' => 'nullable|string|max:255',
            'phoneNumber' => 'nullable|string|size:10',
            'allergic_food' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user->name = $request->get('name');
        $user->phoneNumber = $request->get('phoneNumber');
        $user->allergic_food = $request->get('allergic_food');
        $user->bio = $request->get('bio');
        if ($request->hasFile('image')) {
            $user->profile_picture = $request->file('image')->store('user_images', 'public');
        }

        $user_name = $request->get('name');
        if ($user_name == null) {
            $user->name = Auth::user()->name;
        }

        $user_phoneNumber = $request->get('phoneNumber');
        if ($user_phoneNumber == null) {
            $user->phoneNumber = Auth::user()->phoneNumber;
        }

        $user_allergic_food = $request->get('allergic_food');
        if ($user_allergic_food == null) {
            $user->allergic_food = Auth::user()->allergic_food;
        }

        $user_bio = $request->get('bio');
        if ($user_bio == null) {
            $user->bio = Auth::user()->bio;
        }

        $user_profile_picture = $request->get('profile_picture');
        if ($user_profile_picture == null) {
            $user->profile_picture = Auth::user()->profile_picture;
        }
        $user->save();

        return redirect()->route('user.index', $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
