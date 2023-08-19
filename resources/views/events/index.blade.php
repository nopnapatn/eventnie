@extends('layouts.main')

@section('content')

<section class="">

    <div class="pb-4">
        <span class="font-semibold text-2xl">All Events</span>
    </div>
    <div class="grid md:grid-cols-3 gap-4">
        @foreach ($events as $event)
            <a href=" {{ route('events.show', ['event' => $event]) }} ">
                <div role="status" class="max-w-sm p-4 border border-gray-200 rounded shadow md:p-6">
                    <div class="flex items-center justify-center h-48 mb-4 bg-gray-300 rounded">
                        {{-- <img src="{{ asset($event->image) }}" alt="Event Image" class="w-10 h-10"> --}}
                        <img src="{{ asset('storage/' . $event->image_path) }}" alt="Event Image" class="w-10 h-10">
                    </div>
                    
                    <div class="h-2.5 bg-gray-200 rounded-full w-48 mb-4">{{ $event->title }}</div>
                    <div class="h-2 bg-gray-200 rounded-full mb-2.5">{{ $event->description }}</div>
                    {{-- <div class="h-2 bg-gray-200 rounded-full mb-2.5"></div>
                    <div class="h-2 bg-gray-200 rounded-full"></div> --}}
                    <div class="flex items-center mt-4 space-x-3">
                        <svg class="w-10 h-10 text-gray-20000" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg>
                        <div>
                            <div class="h-2.5 bg-gray-200 rounded-full w-32 mb-2"></div>
                            <div class="w-48 h-2 bg-gray-200 rounded-full"></div>
                        </div>
                    </div>
                    <span class="sr-only">Loading...</span>
                </div>
            </a>
        @endforeach
    </div>

</section>

@endsection