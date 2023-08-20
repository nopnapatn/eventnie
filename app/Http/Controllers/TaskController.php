<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $tasks = auth()->user()->tasks; // ดึงรายการงานของผู้ใช้ปัจจุบัน
    return view('tasks.index', compact('tasks'));
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
   public function update(Request $request, Task $task)
{
    // ตรวจสอบว่าผู้ใช้ปัจจุบันเป็นเจ้าของงาน
    if (auth()->user()->email === $task->email) {
        $task->update($request->only('title', 'description'));
        return redirect()->route('tasks.index');
    }
    
    return redirect()->route('tasks.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
