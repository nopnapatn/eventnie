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
        <div>
            <div class="py-2 border-t border-black"></div>
        </div>

        <!-- section 3 -->
        <div class="">
            <x-event-post-item></x-event-post-item>
            @foreach ($events as $event)
            <a href="{{ route('events.show', ['event' => $event]) }}">
                <div class="px-4">
                    <div class="border border-black rounded-lg h-96 w-80">
                        <div class="rounded-lg h-48">
                            <img src="{{ asset('storage/' . $event->image_path) }}" alt="Event Image" class="w-10 h-10">
                            <!-- <div class="bg-cover bg-center h-48 rounded-lg" style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/04dd3466-1f19-4b5e-8069-84a3ba2cf72d/ddp1xkg-ad372f63-d3db-42f5-a373-36d4da0ff0c2.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzA0ZGQzNDY2LTFmMTktNGI1ZS04MDY5LTg0YTNiYTJjZjcyZFwvZGRwMXhrZy1hZDM3MmY2My1kM2RiLTQyZjUtYTM3My0zNmQ0ZGEwZmYwYzIuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.IITRjHaetc65_PmhVke8bWihd0pnQ7_jMQlVx4SqfNU');"></div> -->
                        </div>
                        <div class="p-2">
                            <div class="flex justify-between items-center py-2">
                                <span class="font-semibold">{{ $event->title }}</span>
                                <span class="text-red-400 text-xs">1 day left!</span>
                            </div>
                            <span class="">Mon, 27 Jan 2023</span>
                            <p class="truncate text-gray-500">{{ $event->description }}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection