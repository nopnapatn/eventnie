<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function updatePosition(Request $request, Task $task)
    {
        // ดึงค่าตำแหน่งใหม่ที่ถูกส่งมาจากคำขอ
        $newPosition = $request->input('position');

        // อัพเดตตำแหน่งของ Task
        $task->update(['position' => $newPosition]);

        // ส่งคำตอบกลับว่าอัพเดตสำเร็จ
        return response()->json(['message' => 'Position updated successfully']);
    }
    public function index(Event $event)
    {
        // Get the staff members for the event
        $eventStaffs = $event->member()->get();

        $creator = User::where('id', $event->creator_id)->first();

        // Retrieve tasks for the authenticated user
        $tasks = auth()->user()->tasks;

        // Pass both $tasks, $event, and $staffs to the view
        return view('tasks.index', compact('tasks', 'event', 'eventStaffs', 'creator'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = Auth::user(); // ผู้ใช้ที่สร้าง Task

        $task = new Task([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'creator_email' => $user->email,
        ]);

        $task->save();

        // ...
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
    public function edit(Task $task)
    {
        if (auth()->user()->email === $task->email) {
            return view('tasks.edit', compact('task'));
        }
        return redirect()->route('tasks.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        // ตรวจสอบสิทธิ์การแก้ไข Task โดยตรวจสอบว่าผู้ใช้เป็นคนสร้างหรือแต่ละกัน
        if ($task->creator_email != Auth::user()->email) {
            return redirect()->back()->with('error', 'You do not have permission to edit this task.');
        }

        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'position' => $request->input('position'),
        ]);

        // ...
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
