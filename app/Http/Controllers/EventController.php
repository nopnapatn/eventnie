<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Gate::authorize('viewAny', Event::class);

        $events = Event::get();
        return view('events.index', [
            'events' => $events,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Gate::authorize('create', Event::class);

        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Gate::authorize('create', Event::class);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'type' => 'required|max:255',
            'description' => 'required',
            'location' => 'required|max:255',
            'contact' => 'required|max:255',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'max_attendees' => 'required|integer|min:0',
        ]);

        $validatedData['creator_id'] = auth()->id();

        Event::create($validatedData);

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        // Gate::authorize('view', $event);

        return view('events.show', [
            'event' => $event,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        // Gate::authorize('update', $event);

        return view('events.edit', [
            'event' => $event,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        Gate::authorize('update', $event);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'type' => 'required|max:255',
            'description' => 'required',
            'location' => 'required|max:255',
            'contact' => 'required|max:255',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'max_attendees' => 'required|integer|min:0',
        ]);

        $event->update($validatedData);

        return redirect()->route('events.show', $event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);

        Gate::authorize('delete', $event);

        $event->delete();

        return redirect()->route('events.index');
    }

    public function welcome()
    {
        // Gate::authorize('viewAny', Event::class);

        $events = Event::get();
        return view('welcome', [
            'events' => $events,
        ]);
    }
}
