<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {   
        
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        //     'faculty'=> ['required', 'string', 'max:255'],
        //     'major'=> ['required', 'string', 'max:255'],
        //     'year'=> ['required', 'string', 'max:255'],
        //     'studentID'=> ['required', 'string', 'max:255'],
        //     'pictureProfile'=> ['required', 'string', 'max:255'],
        //     'phoneNumber'=> ['required', 'string', 'max:255'],
        // ]);
        // dd($request);
        
        $path = '';
            if ($request->hasFile('image_path')) {
		// บันทึกไฟล์รูปภาพลงใน folder ชื่อ 'user_images' ที่ storage/app/public
		$path = $request->file('image_path')->store('images/profile', 'public');
            }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'faculty'=> $request->faculty,
            'year'=> $request->college_year,
            'studentID'=> $request->StudentID,
            'image_path'=> $path,
            'phoneNumber'=> $request->phoneNumber,
            
        ]);
        $user->image_path = $path;

        // $user->save();
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
