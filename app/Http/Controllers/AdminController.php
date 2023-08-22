<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function grantViewPermission(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // ทำการกำหนดสิทธิ์ให้ผู้ใช้เข้าถึง Task ด้วย email ของผู้ใช้
        $tasks = Task::where('assignee_email', $email)->get();

        foreach ($tasks as $task) {
            // ในตัวอย่างนี้เราจะใช้ column view_permission เป็น boolean
            $task->update(['view_permission' => true]);
        }

        return redirect()->back()->with('success', 'View permission granted successfully.');
    }

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
            return redirect()->route('admin.revoke_permission')->with('success', 'Permission revoked for' . $user->email);
        } else {
            return redirect()->route('admin.revoke_permission')->with('error', 'User not found with the provided email.');
        }
    }

    


    public function showEvent(Event $event)
    {
        $expenses = $event->expenses()->get();
        return view('admin.show-event', ['event' => $event, 'expenses' => $expenses]);
    }


    public function showUser(User $user)
    {
        return view('admin.show-user', ['user' => $user]);
    }

    public function revokePermission2(User $user)
{
    if ($user) {
        $user->can_create_event = false;
        $user->save();
        return redirect()->route('home')->with('success', 'Permission revoked for ' . $user->email);
    } else {
        return redirect()->route('home')->with('error', 'User not found with the provided email.');
    }
} 

}
