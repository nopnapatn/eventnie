@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- content -->
    <div class="px-40 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-8 py-8">
            <div class="">
                <div class="bg-white border-4 border-black h-64 w-64 shadow-xl">

                </div>
                <a href="{{ route('user.edit') }}">
                    <div class="bg-black h-10 w-64 rounded-lg my-8 shadow-xl flex justify-center items-center">
                        <span class="text-white">Edit</span>
                    </div>
                </a>
            </div>
            <div class="lg:col-span-2 border-4 border-black">
                <div class="flow-root p-16">
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