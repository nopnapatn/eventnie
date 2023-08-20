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
        <div class="w-1/2 pb-8">
            <span class="text-6xl">Have a nice day.</span>
            <p class="py-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa ut totam ducimus! Nisi esse corporis provident quae atque, cumque iure, distinctio illo odit deserunt nesciunt, dicta eum magnam eaque pariatur.</p>
            <a href="{{ route('events.index') }}">
                <button class="bg-black rounded-lg h-10 w-24 mt-4 text-white">view</button>
            </a>
        </div>

        <!-- section 3 -->
        <div class="flex py-8 overflow-x-scroll h-1/2 max-w-6xl">
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

        <!-- section 4 -->
        <div></div>
    </div>
</section>
@endsection