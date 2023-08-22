@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- content -->
    <div class="px-16 w-full">
        <div class="items-end justify-between sm:flex">
            <div class="max-w-xl py-8">
                <h2 class="text-4xl font-bold tracking-tight sm:text-5xl">
                    โปรไฟล์ของคุณ!
                </h2>
                <!-- <p class="mt-8 max-w-lg text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                    praesentium natus sapiente commodi. Aliquid sunt tempore iste
                    repellendus explicabo dignissimos placeat, autem harum dolore
                    reprehenderit quis! Quo totam dignissimos earum.
                </p>
               -->
            </div>

            <a href="{{ route('certifications.show') }}" class="mt-8 inline-flex shrink-0 items-center gap-2 rounded-full border border-pink-600 px-5 py-3 font-medium text-pink-600 hover:bg-pink-600 hover:text-white sm:mt-0 lg:mt-8">
                Certification

                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-8 py-8">
            <div class="">
                <div class="rounded-xl border-4 border-black h-64 w-64 shadow-xl">
                    <img class="rounded-lg border-2 border-black inset-0 h-full w-full object-cover" src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="">
                </div>
                <a href="{{ route('user.edit') }}">
                    <div class="bg-black h-10 w-64 rounded-lg my-8 shadow-xl flex justify-center items-center">
                        <span class="text-white">Edit</span>
                    </div>
                </a>
            </div>
            <div class="lg:col-span-2">
                <div class="flow-root">
                    <dl class="-my-3 divide-y divide-gray-100 text-sm">
                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Name</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->name }}</dd>
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
                            <dt class="font-medium text-gray-900">College Year</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->college_year }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Phone Number</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->phoneNumber }}</dd>
                        </div>


                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">Allergic Food</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->allergic_food }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">bio</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ Auth::user()->bio }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection