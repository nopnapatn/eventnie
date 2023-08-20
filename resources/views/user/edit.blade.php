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
        <form action="{{ route('user.update', ['user' => $user]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex py-8">
                <div class="w-1/3 flex justify-center">
                    <div class="rounded-full w-64 h-64 shadow-xl">
                        <img src="https://scontent.fbkk4-1.fna.fbcdn.net/v/t39.30808-6/357806304_180748388309861_5021864088639850251_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeG0KmTwrIoOG8pw7Cpk9SF8u8yoMob_FdO7zKgyhv8V07hKoza2S15NuzVGOto_wga84r5PfVt-xHrnrE8kkVuf&_nc_ohc=dtXW92rZ_bwAX_1g818&_nc_zt=23&_nc_ht=scontent.fbkk4-1.fna&oh=00_AfDT-iaL_palWFHoPmbCGkG_JjUaLylINwLw5SfkGRUJtA&oe=64E75B6E" alt="" class="w-full h-full rounded-full">
                        <button class="bg-gray-300 h-10 w-64 rounded-lg my-8 shadow-xl flex justify-center items-center">
                            <span>Save</span>
                        </button>
                    </div>
                </div>

                <div class="w-2/3">
                    <dl class="divide-y divide-gray-300 text-sm w-full">
                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Name</dt>
                            <input class="text-gray-700 sm:col-span-2 rounded-lg border border-black h-8" type="name" name="name" id="name">
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Email</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ auth::user()->email }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Faculty</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ auth::user()->faculty }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Major</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ auth::user()->major }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Year</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ auth::user()->year }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Student ID</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ auth::user()->studentID }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Phone Number</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ auth::user()->phoneNumber }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Allergic Food</dt>
                            <input class="text-gray-700 sm:col-span-2 rounded-lg border border-black h-8" type="allergic_food" name="allergic_food" id="allergic_food">
                        </div>

                        <div class=" grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Bio</dt>
                            <input class="text-gray-700 sm:col-span-2 rounded-lg border border-black h-8" type="bio" name="bio" id="bio">
                        </div>
                    </dl>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection