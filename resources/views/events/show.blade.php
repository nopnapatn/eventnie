@extends('layouts.main')

@section('content')
<section>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
        <!-- bar section -->
        <div class="py-4">
            <!-- photo section -->
            <div>
                <div class="items-center justify-center w-full h-96 rounded">
                    {{-- <img src="{{ asset($event->image) }}" alt="Event Image" class="w-10 h-10"> --}}
                    <img src="{{ asset('storage/' . $event->image_path) }}" alt="Event Image">
                </div>
            </div>

            <!-- tag section -->
            <div class="py-12">
                <div class="pb-4 flex items-center justify-between max-w-prose">
                    <span class="font-semibold text-2xl">tag</span>
                    {{-- <a href="">
                        <span class="text1xl text-gray-500">view all</span>
                    </a> --}}
                </div>
                <div class=" flex">
                    <div role="status" class=" max-w-prose w-full space-y-8 border border-gray-200 divide-y divide-gray-200 rounded shadow md:p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="h-2.5 rounded-full w-24 mb-2.5 font-bold">Type</div>
                                {{-- <div class="w-32 h-2 bg-gray-200 rounded-full"></div> --}}
                            </div>
                            <div class="h-2.5  rounded-full w-12"> {{ $event->type }}</div>
                        </div>
                        <div class="flex items-center justify-between pt-4">
                            <div>
                                <div class="h-2.5  rounded-full w-24 mb-2.5 font-bold">Contact</div>
                                {{-- <div class="w-32 h-2 rounded-full"></div> --}}
                            </div>
                            <div class="h-2.5  rounded-full w-12"> {{ $event->contact }}</div>
                        </div>
                        <div class="flex items-center justify-between pt-4">
                            <div>
                                <div class="h-2.5  rounded-full w-24 mb-2.5 font-bold">Start</div>
                                {{-- <div class="w-32 h-2 rounded-full"></div> --}}
                            </div>
                            <div class="h-2.5  rounded-full w-12">{{ $event->start_at }}</div>
                        </div>
                        <div class="flex items-center justify-between pt-4">
                            <div>
                                <div class="h-2.5  rounded-full w-24 mb-2.5 font-bold">End</div>
                                {{-- <div class="w-32 h-2 rounded-full"></div> --}}
                            </div>
                            <div class="h-2.5  rounded-full w-12">{{ $event->end_at }}</div>
                        </div>
                        <div class="flex items-center justify-between pt-4">
                            <div>
                                <div class="h-2.5  rounded-full w-24 mb-2.5 font-bold">Participated</div>
                                {{-- <div class="w-32 h-2 rounded-full"></div> --}}
                            </div>
                            <div class="h-2.5  rounded-full w-12">0 / {{ $event->max_attendees }}</div>
                        </div>

                        <span class="sr-only">Loading...</span>
                    </div>
                    <img src="" alt="">
                </div>
            </div>
        </div>

        <!-- infomation section -->
        <div class="lg:col-span-2 p-4">
            <h2 class="text-4xl font-extrabold ">{{ $event->title }}</h2>
            <p class="my-4 text-lg text-gray-500">{{  $event->description }}</p>
            <p class="my-4 text-lg text-gray-500">{{ $event->location }}</p>

            {{-- <p class="mb-4 text-lg font-normal text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem, unde animi labore deleniti numquam error quae ipsam quis officiis alias aliquid ipsum eveniet maiores voluptatem quam placeat porro hic. Veniam.</p> --}}
            <a href="{{ url('/skeletons/profile') }}">
                <button type="button" class="text-white bg-gray-800 hover:bg-black focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                    Join Event
                </button>
            </a>
        </div>
    </div>
</section>
@endsection