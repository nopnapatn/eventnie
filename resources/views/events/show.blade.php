@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- menu bar -->
    <x-aside-bar></x-aside-bar>

    <!-- content -->
    <div class="px-16 w-full">
        <!-- section 1 -->
        <x-section-1></x-section-1>

        <!-- section 2 -->
        <div class="bg-black rounded-lg opacity-90 h-96 px-48">
            <div class="flex justify-around h-full w-full">
                <div class="flex h-full w-full">
                    <img src="{{ asset('storage/' . $event->image_path) }}" alt="Event Image" class="bg-cover bg-center">
                </div>
                <div class="h-full w-full px-8 py-8">
                    <span class="font-semibold text-4xl text-white">{{ $event->title }}</span><br><br>
                    <span class="text-white">Mon, 27 Jan 2023</span><br>
                    <span class="text-red-400 text-xs">1 day left!</span><br><br>
                    <button class="bg-white rounded-lg h-10 w-24">Join Event</button>
                </div>
            </div>
        </div>

        <!-- section 3 -->
        <div class="px-10 mx-32">
            <div class="">
                <div class="flex py-8 justify-between">
                    <span class="font-semibold text-lg">Information</span>
                </div>

                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                    <!-- section 1 -->
                    <div class="lg:col-span-2 border-r border-black">
                        <p>{{ $event->description }}</p><br>
                        <p>{{ $event->location }}</p><br>
                    </div>

                    <!-- section 2 -->
                    <div class="">
                        <div class="">{{ $event->type }}</div>
                        <div class="">{{ $event->contact }}</div>
                        <div class="">{{ $event->start_at }}</div>
                        <div class="">{{ $event->end_at }}</div>
                        <div class="">0 / {{ $event->max_attendees }}</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection