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
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
            <div class="">
                <x-event-post-item></x-event-post-item>
                <x-event-post-item></x-event-post-item>
                <x-event-post-item></x-event-post-item>
            </div>
            <div class="">
                <x-event-post-item></x-event-post-item>
                <x-event-post-item></x-event-post-item>
                <x-event-post-item></x-event-post-item>
            </div>
            <div class="">
                <x-event-post-item></x-event-post-item>
                <x-event-post-item></x-event-post-item>
            </div>
        </div>
    </div>
</section>
@endsection