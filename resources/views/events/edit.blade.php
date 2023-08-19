@extends('layouts.main')

@section('content')
<section>
    <div class="max-w-3xl mx-auto p-4">
        <h2 class="text-4xl font-extrabold mb-4">Edit Event</h2>

        <form action="{{ route('events.update', ['event' => $event]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="title" class="block text-lg font-semibold mb-2">Event Title</label>
                <input type="text" name="title" id="title" class="w-full p-2 border rounded" value="{{ $event->title }}" required>
            </div>

            <div class="mb-4">
                <label for="type" class="block text-lg font-semibold mb-2">Event Type</label>
                <input type="text" name="type" id="type" class="w-full p-2 border rounded" value="{{ $event->type }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-lg font-semibold mb-2">Event Description</label>
                <textarea name="description" id="description" rows="4" class="w-full p-2 border rounded" required>{{ $event->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="location" class="block text-lg font-semibold mb-2">Event Location</label>
                <input type="text" name="location" id="location" class="w-full p-2 border rounded" value="{{ $event->location }}" required>
            </div>

            <div class="mb-4">
                <label for="contact" class="block text-lg font-semibold mb-2">Contact Information</label>
                <input type="text" name="contact" id="contact" class="w-full p-2 border rounded" value="{{ $event->contact }}" required>
            </div>

            <div class="mb-4">
                <label for="start_at" class="block text-lg font-semibold mb-2">Event Start Date and Time</label>
                <input type="datetime-local" name="start_at" id="start_at" class="w-full p-2 border rounded" value="{{ date('Y-m-d\TH:i', strtotime($event->start_at)) }}" required>
            </div>

            <div class="mb-4">
                <label for="end_at" class="block text-lg font-semibold mb-2">Event End Date and Time</label>
                <input type="datetime-local" name="end_at" id="end_at" class="w-full p-2 border rounded" value="{{ date('Y-m-d\TH:i', strtotime($event->end_at)) }}" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-lg font-semibold mb-2">Event Image</label>
                <input type="file" name="image" id="image" class="p-2 border rounded" accept="image/*">
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-gray-800 text-white font-medium px-6 py-3 rounded hover:bg-black focus:ring-4 focus:ring-blue-300">
                    Update Event
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
