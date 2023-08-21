@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- content -->
    <div class="px-20 pb-20 w-full">
        <div class="py-4"></div>
        <!-- section -->
        <div class="">
            <span class="font-semibold text-6xl text-black">{{ $event->title }}</span>
            <div class="py-2"></div>
            <div class="bg-black h-10 w-full flex items-center shadow-xl rounded-lg">
                <span class="text-white">START {{ date('d-m-Y', strtotime($event->start_at)) }}</span>
                <span>\t</span>
                <span class="text-white">END {{ date('d-m-Y', strtotime($event->end_at)) }}</span>
                <span>\t</span>
                <span class="text-white">LOCATION {{ $event->location }}</span>
            </div>
            <div class="py-4"></div>
            <div class="flex">
                <div class="rounded-lg border-4 border-black h-96 w-2/3 shadow-xl">
                    <img src="{{ asset('storage/' . $event->image_path) }}" alt="Event Image" class="bg-cover bg-center h-full w-full">
                </div>
                <div class="h-96 w-1/3 p-4">
                    <span class="font-semibold text-4xl text-black">{{ $event->title }}</span><br><br>
                    <span class="text-black">LOCATION {{ $event->location }}</span><br><br>
                    <span class="text-black">START {{ date('d-m-Y', strtotime($event->start_at)) }}</span><br>
                    <span class="text-red-400 text-xs">END {{ date('d-m-Y', strtotime($event->end_at)) }}</span><br><br>

                    @auth
                    @if (!$userIsAttendee)
                    <a href="{{ route('events.join', ['event' => $event]) }}">
                        <button class="bg-black rounded-lg h-10 w-24 text-white shadow-xl">Join Event</button>
                    </a>
                    @else
                    <span>You have already joined this event.</span>
                    @endif
                    @else
                    <span>Please log in to join this event.</span>
                    @endauth

                </div>
            </div>
        </div>
        <div class="py-4"></div>
        <div class="bg-black h-1 w-full"></div>
        <div class="py-4"></div>
        <div class="flow-root">
            <dl class="text-lg w-2/3">
                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">กิจกรรม</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $event->title }}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">ประเภท</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $event->type }}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">สถานที่</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $event->location }}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">วันที่จัด</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ date('d-m-Y', strtotime($event->start_at)) }} ถึงวันที่
                        {{ date('d-m-Y', strtotime($event->end_at)) }}
                    </dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">คำอธิบาย</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $event->description }}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">ช่องทางการติดต่อ</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $event->contact }}</dd>
                </div>
            </dl>
        </div>
    </div>
</section>
@endsection