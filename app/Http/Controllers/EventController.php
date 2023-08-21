<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Gate::authorize('viewAny', Event::class);

        if (Auth::user() != null) {
            $user = Auth::user();

            // Get the IDs of events the user has attended
            $attendedEventIds = $user->attendedEvents->pluck('id');

            // Retrieve events that the user hasn't attended yet
            $events = Event::whereNotIn('id', $attendedEventIds)->get();

            return view('events.index', [
                'events' => $events,
            ]);
        }

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
        Gate::authorize('create', Event::class);

        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'type' => 'required|max:255',
            'description' => 'required',
            'location' => 'required|max:255',
            'contact' => 'required|max:255',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'max_attendees' => 'required|integer|min:1',
        ]);

        // if ($request->withErrors()) {
        //     return redirect()->back()->withErrors($validatedData);
        // }

        // Handle the uploaded image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('event_images', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        // Add the creator_id to the validated data
        // $validatedData['creator_id'] = auth()->id();

        // Create the event
        $event = new Event();
        $event->title = $request->title;
        $event->type = $request->type;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->contact = $request->contact;
        $event->max_attendees = $request->max_attendees;
        $event->creator_id = auth()->id();
        $event->start_at = $request->start_at;
        $event->end_at = $request->end_at;
        $event->image_path = $validatedData['image_path'];

        $event->save();

        $user = User::findOrFail(auth()->id());
        $user->ownedEvents()->save($event);

        return redirect()->route('events.index');
    }


    /** 
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        // Gate::authorize('view', $event);
        if (Auth::user() != null) {
            $user = Auth::user();
            $userIsAttendee = $event->attendees()->where('user_id', $user->id)->exists();
            return view('events.show', [
                'event' => $event,
                'userIsAttendee' => $userIsAttendee, // Pass the variable to the view
            ]);
        }

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
        $events_welcome = Event::take(5)->get();
        $users = User::get();
        if (Gate::allows('isAdmin', auth()->user())) {
            return view('/admin/index', [
                'events' => $events,
                'users' => $users,
            ]);
        } else {
            return view('welcome', [
                'events' => $events_welcome,
            ]);
        }
    }

    public function showJoinEventForm(Event $event)
    {
        return view('events.join-event', [
            'event' => $event,
        ]);
    }

    public function joinEvent(Request $request, Event $event)
    {
        if (Gate::denies('join-event')) {
            abort(403, 'You must be logged in to join an event.');
        }

        $user = Auth::user();

        // Check if the user is already an attendee
        $userIsAttendee = $event->attendees()->where('user_id', $user->id)->exists();

        if (!$userIsAttendee) {
            $data = [
                'description' => $request->input('description'),
                'img_url' => $this->uploadImageAndGetUrl($request->file('photo')),
                'video_url' => $request->input('video_url'),
            ];
            $event->attendees()->attach($user, $data);
        }

        return redirect()->route('events.index', ['event' => $event->id])
            ->with('success', 'You have successfully joined the event.');
    }

    protected function uploadImageAndGetUrl($image)
    {
        if ($image) {
            $imagePath = $image->store('attendee-images', 'public');
            return Storage::url($imagePath);
        }

        return null;
    }

    public function userEvents()
    {
        // Gate::authorize('view-user-events');

        $user = User::findOrFail(auth()->id());

        // $user = Auth::user();
        $attendedEvents = $user->attendedEvents()->get();

        return view('events.user-events', compact('attendedEvents'));
    }

    public function myEvents()
    {
        $user = User::findOrFail(auth()->id());
        $ownedEvents = $user->ownedEvents()->get();

        return view('events.created-event', compact('ownedEvents'));
    }

    public function showStaffMembers(Event $event)
    {
        // // Make sure the user is the event owner before showing staff members
        // if ($ownedEvent->creator_id != auth()->id()) {
        //     abort(403, strval($ownedEvent->creator_id));
        // }

        $eventStaffs = $event->member()->get();

        return view('staff.event_staff', compact('event', 'eventStaffs'));
    }

    public function addStaffMember(Request $request, Event $event)
{
    // Validate the incoming data
    $validatedData = $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    // Find the user based on the provided email
    $user = User::where('email', $validatedData['email'])->first();

    if (!$user) {
        return redirect()->back()->withErrors(['email' => 'User with this email not found.']);
    }

    // Check if the user is already a staff member
    if ($event->member->contains($user->id)) {
        return redirect()->back()->withErrors(['email' => 'User is already a staff member.']);
    }

    // Add the user as a staff member to the event
    $event->member()->attach($user);

    return redirect()->route('staff.staffMembers', ['event' => $event])
        ->with('success', 'Staff member added successfully.');
}

}
