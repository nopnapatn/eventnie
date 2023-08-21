@extends('layouts.main')

@section('content')
<section class="flex">

    <!-- content -->
    <div class="w-full">
        <!-- Other sections and content -->

        <!-- Join Event Section -->
        <div class="p-10 py-40 mx-32 mt-8">
            <div class="border-4 border-black p-6 bg-white shadow-xl">
                <h2 class="text-2xl font-semibold mb-4">Join Event</h2>

                @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                    <ul class="list-disc ml-4">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('event.join', ['event' => $event->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="description" class="block font-medium">Description</label>
                        <textarea name="description" id="description" rows="3" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="photo" class="block font-medium">Photo</label>
                        <input type="file" name="photo" id="photo" accept="image/*" class="w-full">
                    </div>
                    <div class="mb-4">
                        <label for="video_url" class="block font-medium">Video URL</label>
                        <input type="url" name="video_url" id="video_url" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                    </div>
                    <div>
                        <button type="submit" class="bg-black text-white px-4 py-2 rounded">Join Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection