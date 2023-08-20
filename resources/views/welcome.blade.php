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

        </div>

        <!-- section 4 -->
        <div></div>
    </div>
</section>
@endsection