@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- menu bar -->
    <x-aside-bar></x-aside-bar>

    <!-- content -->
    <div class="pl-16 w-full">
        <!-- section 1 -->
        <x-section-1></x-section-1>

        <!-- section 2 -->
        <div class="grid grid-cols-3 gap-8 p-8">
            @foreach ($events as $event)
            <a href="{{ route('events.show', ['event' => $event]) }}">
                <div class="px-4">
                    <div class="border border-black rounded-lg h-96 w-80">
                        <div class="rounded-lg h-48">
                            <img src="{{ asset('storage/' . $event->image_path) }}" alt="Event Image" class="w-full h-full rounded-lg">
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between py-2">
                                <span class="text-ellipsis overflow-hidden font-semibold max-h-12 w-2/3">{{ $event->title }}</span>
                                <span class="text-red-400 text-xs">1 day left!</span>
                            </div>
                            <span class="">Mon, 27 Jan 2023</span>
                            <p class=" text-ellipsis overflow-hidden max-h-12 text-gray-500">{{ $event->description }}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection