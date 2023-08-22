@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- content -->
    <div class="p-8 w-full">
        <!-- section -->
        <section class="">
            <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8">
                <div class="items-end justify-between sm:flex">
                    <div class="max-w-xl">
                        <h2 class="text-4xl font-bold tracking-tight sm:text-5xl">
                            กิจกรรมของฉัน
                        </h2>

                        <p class="mt-8 max-w-lg text-gray-500">
                            แหล่งรวมกิจกรรมในมหาลัยต่างๆ ไม่ว่าจะเป็นเข้าค่าย ร้องเพลง เต้น หรือจะเป็นการอัพสกิลต่างๆ อยากให้ทุกเข้าร่วมกิจกรรมกันเยอะๆนะ
                        </p>
                    </div>

                    <!-- <a href="#" class="mt-8 inline-flex shrink-0 items-center gap-2 rounded-full border border-pink-600 px-5 py-3 font-medium text-pink-600 hover:bg-pink-600 hover:text-white sm:mt-0 lg:mt-8">
                        Read all reviews

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a> -->
                </div>

                <a href="{{ route('events.create') }}">
                    <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        <blockquote class="flex h-96 flex-col justify-center items-center bg-gray-100 rounded-xl p-12">
                            <span class="text-3xl">Create Event</span>
                        </blockquote>

                        @foreach ($ownedEvents as $event)
                        <div class="swiper-slide">
                            <a href="{{ route('staff.staffMembers', ['event' => $event]) }}" class="group relative block h-64 sm:h-80 lg:h-96 shadow-xl">
                                <span class="absolute inset-0 border-2 rounded-xl border-dashed border-black"></span>
                                <div class="relative flex h-full transform items-end rounded-xl border-4 border-black bg-black transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2 opacity-90">
                                    <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                        <img alt="Developer" src="{{ asset('storage/' . $event->image_path) }}" class="rounded-xl absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />
                                        <p class="text-sm font-medium uppercase tracking-widest text-white">End!! {{ date('d-m-Y', strtotime($event->end_at)) }}</p>
                                        <h2 class="mt-4 text-xl font-medium sm:text-2xl text-white">{{ $event->title }}</h2>
                                    </div>

                                    <div class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                                        <p class="text-sm font-medium uppercase tracking-widest text-red-400">End!! {{ date('d-m-Y', strtotime($event->end_at)) }}</p>
                                        <h3 class="mt-4 text-xl font-medium sm:text-2xl text-white text-ellipsis overflow-hidden line-clamp-4"" id=" demo">{{ $event->title }}</h3>

                                        <p class="mt-4 text-sm sm:text-base text-white text-ellipsis overflow-hidden line-clamp-4"">{{ $event->description }}</p>
    
                                        <p class=" mt-8 font-bold text-white">Read more</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </a>
            </div>
        </section>
    </div>
</section>
@endsection