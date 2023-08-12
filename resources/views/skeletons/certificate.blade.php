@extends('layouts.main')

@section('content')
<section>

    @if (FALSE)
    <div>

    </div>
    @else
    <!-- icon, name, email -->
    <div class="flex items-center">
        <svg class="w-12 h-12 text-gray-20000" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
        </svg>
        <div class="px-4">
            <span class="text-2xl font-semibold">Nopnapat Norasri</span><br>
            <span class="text-gray-500">nopnapat.n@ku.th</span>
        </div>
    </div>
    <!-- information section -->
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-[300px_1fr] lg:gap-8 py-8">
        <!-- bar section -->
        <div class="">
            <!-- public profile nav -->
            <div class="flex items-center py-2">
                <div class="px-4">
                    <div class="h-4 w-4 bg-black"></div>
                </div>
                <a href="{{  url('skeletons/profile') }}">
                    <span class="font-semibold">Public profile</span>
                </a>
            </div>
            <!-- certificate -->
            <div class="flex items-center py-2">
                <div class="px-4">
                    <div class="h-4 w-4 bg-black"></div>
                </div>
                <a href="{{ url('skeletons/certificate') }}">
                    <span class="font-semibold">Certificate</span>
                </a>
            </div>
            <!-- section 3 -->
            <div class="flex items-center py-2">
                <div class="px-4">
                    <div class="h-4 w-4 bg-black"></div>
                </div>
                <a href="#">
                    <span class="font-semibold">Section 3</span>
                </a>
            </div>
            <!-- section 4 -->
            <div class="flex items-center py-2">
                <div class="px-4">
                    <div class="h-4 w-4 bg-black"></div>
                </div>
                <a href="#">
                    <span class="font-semibold">Section 4</span>
                </a>
            </div>
            <!-- section 5 -->
            <div class="flex items-center py-2">
                <div class="px-4">
                    <div class="h-4 w-4 bg-black"></div>
                </div>
                <a href="#">
                    <span class="font-semibold">Section 5</span>
                </a>
            </div>
        </div>

        <!-- information section -->
        <div class="">

            <!-- public profile -->
            <div class="border-b border-gray-200 pb-4">
                <span class="text-2xl font-semibold py-4">Certificate</span>
            </div>

            <!-- personal record -->
            <div class="">



            </div>
        </div>
    </div>
    @endif
</section>
@endsection