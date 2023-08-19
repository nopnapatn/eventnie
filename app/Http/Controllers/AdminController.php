<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function showGrantPermissionForm()
    {
        return view('admin.add-user-permission');
    }

    public function grantPermission(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->get('email'))->first();

        if ($user != null) {
            $user->can_create_event = true;
            $user->save();
            return redirect()->route('admin.grant_permission')->with('success', 'Permission granted for' . $user->email);
        } else {
            return redirect()->route('admin.grant_permission')->with('error', 'User not found with the provided email.');
        }
    }


    public function showRevokePermissionForm()
    {
        return view('admin.revoke-user-permission');
    }

    public function revokePermission(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->can_create_event = false;
            $user->save();
            return redirect()->route('admin.grant_permission')->with('success', 'Permission revoked for' . $user->email);
        } else {
            return redirect()->route('admin.grant_permission')->with('error', 'User not found with the provided email.');
        }
    }
}
