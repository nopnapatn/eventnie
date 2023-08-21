@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- content -->
    <div class="px-40 w-full">
        <div class="py-8">
            <!-- <div class="items-end justify-between sm:flex">
                <div class="max-w-xl p-8">
                    <h2 class="text-4xl font-bold sm:text-5xl">
                        พื้นที่ในการหากิจกรรมต่างๆในมหาวิทยาลัย
                    </h2>

                    <p class="mt-8 max-w-lg text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                        praesentium natus sapiente commodi. Aliquid sunt tempore iste
                        repellendus explicabo dignissimos placeat, autem harum dolore
                        reprehenderit quis! Quo totam dignissimos earum.
                    </p>
                </div>

                <a href="#" class="mt-8 inline-flex shrink-0 items-center gap-2 rounded-full border border-pink-600 px-5 py-3 font-medium text-pink-600 hover:bg-pink-600 hover:text-white sm:mt-0 lg:mt-8">
                    Read all reviews

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div> -->
        </div>

        <!-- section -->
        <div class="p-8 border-4 border-black h-fit w-full">
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

            <section class="bg-white shadow-xl">
                <div class="mx-auto max-w-[1340px] px-4 py-16 sm:px-6 sm:py-24 lg:me-0 lg:pe-0 lg:ps-8">
                    <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:items-center lg:gap-x-16">
                        <div class="max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                            <h2 class="text-3xl font-bold sm:text-4xl">
                                กำลังมองหากิจกรรมทำกันอยู่รึปล่าวที่นี่มีให้เลือกเยอะนะ
                            </h2>

                            <p class="mt-4 text-gray-500">
                                ลองกดลูกศรเลื่อนดูสิ เผื่อเจอกิจกรรมที่สนใจอยู่นะ กดเลยๆ
                            </p>

                            <div class="hidden lg:mt-8 lg:flex lg:gap-4 justify-center">
                                <button class="prev-button rounded-full border border-pink-600 p-3 text-pink-600 hover:bg-pink-600 hover:text-white">
                                    <span class="sr-only">Previous Slide</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 rtl:rotate-180">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                    </svg>
                                </button>

                                <button class="next-button rounded-full border border-pink-600 p-3 text-pink-600 hover:bg-pink-600 hover:text-white">
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
                                        <!-- <a href="{{ route('events.show', ['event' => $event]) }}">
                                            <div class="px-4 h-80">
                                                <a href="{{ route('events.show', ['event' => $event]) }}" class="group relative block bg-black">
                                                    <img alt="Developer" src="{{ asset('storage/' . $event->image_path) }}" class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

                                                    <div class="relative p-4 sm:p-6 lg:p-8">
                                                        <p class="text-sm font-medium uppercase tracking-widest text-pink-500">End!! {{ date('d-m-Y', strtotime($event->end_at)) }}</p>

                                                        <p class="text-xl font-bold text-white sm:text-2xl text-ellipsis overflow-hidden line-clamp-1">{{ $event->title }}</p>

                                                        <div class="mt-32 sm:mt-40 lg:mt-44">
                                                            <div class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100 text-ellipsis overflow-hidden line-clamp-2">
                                                                <p class="text-sm text-white">{{ $event->description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </a> -->
                                        <a href="{{ route('events.show', ['event' => $event]) }}" class="group relative block h-64 sm:h-80 lg:h-96 shadow-xl">
                                            <span class="absolute inset-0 border-2 border-dashed border-black"></span>
                                            <div class="relative flex h-full transform items-end border-2 border-black bg-black transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2 opacity-90">
                                                <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                                    <img alt="Developer" src="{{ asset('storage/' . $event->image_path) }}" class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />
                                                    <p class="text-sm font-medium uppercase tracking-widest text-white">End!! {{ date('d-m-Y', strtotime($event->end_at)) }}</p>
                                                    <h2 class="mt-4 text-xl font-medium sm:text-2xl text-white">{{ $event->title }}</h2>
                                                </div>

                                                <div class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                                                    <p class="text-sm font-medium uppercase tracking-widest text-red-400">End!! {{ date('d-m-Y', strtotime($event->end_at)) }}</p>
                                                    <h3 class="mt-4 text-xl font-medium sm:text-2xl text-white">{{ $event->title }}</h3>

                                                    <p class="mt-4 text-sm sm:text-base text-white">{{ $event->description }}</p>

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

        <div class="py-4"></div>
        <!-- section -->
        <div class="">

        </div>
    </div>
</section>
@endsection