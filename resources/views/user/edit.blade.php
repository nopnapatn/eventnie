@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- content -->
    <div class="px-40 w-full">
        <form action="{{ route('user.update', ['user' => $user]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 py-8">
                <div class="">
                    <div class="border-4 border-black h-64 w-64 shadow-xl">

                    </div>
                    <div class="bg-black h-10 w-64 rounded-lg my-8 shadow-xl flex justify-center items-center">
                        <button class="bg-black h-10 w-64 rounded-lg my-8 shadow-xl flex justify-center items-center">
                            <span class="text-white">Save</span>
                        </button>
                    </div>
                </div>
                <div class="lg:col-span-2">
                    <div class="flow-root">
                        <dl class="-my-3 divide-y divide-gray-100 text-sm">
                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Name</dt>
                                <input class="text-gray-700 sm:col-span-2 rounded-lg border border-black h-8" type="name" name="name" id="name">
                            </div>

                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Email</dt>
                                <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->email }}</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Student Id</dt>
                                <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->studentID }}</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Faculty</dt>
                                <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->faculty }}</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Major</dt>
                                <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->major }}</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Major</dt>
                                <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->major }}</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">College Year</dt>
                                <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->college_year }}</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Phone Number</dt>
                                <input class="text-gray-700 sm:col-span-2 rounded-lg border border-black h-8" type="phoneNumber" name="phoneNumber" id="phoneNumber">
                            </div>


                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Allergic Food</dt>
                                <input class="text-gray-700 sm:col-span-2 rounded-lg border border-black h-8" type="allergic_food" name="allergic_food" id="allergic_food">
                            </div>

                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">bio</dt>
                                <input class="text-gray-700 sm:col-span-2 rounded-lg border border-black h-8" type="bio" name="bio" id="bio">
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </form>

    </div>
</section>
@endsection