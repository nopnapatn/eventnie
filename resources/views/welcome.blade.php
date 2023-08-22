@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- content -->
    <div class="w-full">
        <!-- section -->
        <div class="pl-8 h-fit w-full">
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

            <section class="">
                <div class="mx-auto max-w-[1340px] px-4 py-16 sm:px-6 sm:py-24 lg:me-0 lg:pe-0 lg:ps-8">
                    <div class="bg-yellow-300 pl-20 py-20 rounded-xl shadow-xl border-4 border-black">
                        <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:items-center lg:gap-x-16">
                            <div class="max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                                <h2 class="text-3xl font-bold sm:text-4xl">
                                    กำลังมองหากิจกรรมทำกันอยู่รึเปล่า
                                    <br><br>ที่นี่มีให้เลือกเยอะนะ
                                </h2>

                                <p class="mt-4 text-gray-500">
                                    ลองกดลูกศรเลื่อนดูสิ เผื่อเจอกิจกรรมที่สนใจอยู่นะ กดเลยๆ
                                </p>

                                <div class="hidden lg:mt-8 lg:flex lg:gap-4 justify-center">
                                    <button class="prev-button rounded-full border border-black p-3 text-black hover:bg-black hover:text-white">
                                        <span class="sr-only">Previous Slide</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 rtl:rotate-180">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                        </svg>
                                    </button>

                                    <button class="next-button rounded-full border border-black p-3 text-black hover:bg-black hover:text-white">
                                        <span class="sr-only">Next Slide</span>
                                        <svg class="h-5 w-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="mx-6 lg:col-span-2 lg:mx-0">
                                <div class="swiper-container !overflow-hidden">
                                    <div class="swiper-wrapper">
                                        @foreach ($events as $event)
                                        <div class="swiper-slide">
                                            <a href="{{ route('events.show', ['event' => $event]) }}" class="group relative block h-64 sm:h-80 lg:h-96 shadow-xl">
                                                <span class="absolute inset-0 border-2 rounded-xl border-dashed border-black"></span>
                                                <div class="relative flex h-full transform items-end rounded-xl border-4 border-black bg-black transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2 opacity-90">
                                                    <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                                        <img alt="Developer" src="{{ asset('storage/' . $event->image_path) }}" class="rounded-xl absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />
                                                        <p class="text-sm font-medium uppercase tracking-widest text-white">End!! {{ date('M j, Y H:i A', strtotime($event->end_at)) }}</p>
                                                        <h2 class="mt-4 text-xl font-medium sm:text-2xl text-white">{{ $event->title }}</h2>
                                                    </div>

                                                    <div class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                                                        <p class="text-sm font-medium uppercase tracking-widest text-red-400">End!! {{ date('M j, Y H:i A', strtotime($event->end_at)) }}</p>
                                                        <h3 class="mt-4 text-xl font-medium sm:text-2xl text-white text-ellipsis overflow-hidden line-clamp-4">{{ $event->title }}</h3>

                                                        <p class=" mt-4 text-sm sm:text-base text-white text-ellipsis overflow-hidden line-clamp-4">{{ $event->description }}</p>

                                                        <p class="mt-8 font-bold text-white">Read more</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    new Swiper('.swiper-container', {
                        loop: true,
                        slidesPerView: 1,
                        spaceBetween: 32,
                        autoplay: {
                            delay: 8000,
                        },
                        breakpoints: {
                            640: {
                                centeredSlides: true,
                                slidesPerView: 1.25,
                            },
                            1024: {
                                centeredSlides: false,
                                slidesPerView: 1.5,
                            },
                        },
                        navigation: {
                            nextEl: '.next-button',
                            prevEl: '.prev-button',
                        },
                    })
                })
            </script>
        </div>

        <!-- section -->
        <div class="p-8">
            <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($events as $event)
                <!-- Event Card -->
                <a href="{{ route('events.show', ['event' => $event]) }}">
                    <div class="border-4 border-black rounded-xl shadow-md p-4 hover:bg-gray-200 transition">
                        <h3 class="text-lg font-semibold mb-2">{{ $event->title }}</h3>
                        <p class="text-sm text-gray-500">{{ $event->description }}</p>
                        <div class="mt-4">
                            {{-- <span class="text-sm text-gray-600">Starts: {{ $event->start_at->format('M j, Y H:i A') }}</span>
                            <br>
                            <span class="text-sm text-gray-600">Ends: {{ $event->end_at->format('M j, Y H:i A') }}</span> --}}
                        </div>
                    </div>
                </a>
                @endforeach
                <a class="group relative inline-block focus:outline-none focus:ring" href="{{ route('events.index') }}">
                    <span class="rounded-xl absolute h-12 w-40 inset-0 translate-x-1.5 translate-y-1.5 bg-yellow-300 transition-transform group-hover:translate-y-0 group-hover:translate-x-0"></span>

                    <span class="rounded-xl relative inline-block border-2 border-current px-8 py-3 text-sm font-bold uppercase tracking-widest text-black group-active:text-opacity-75">
                        All Event
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection