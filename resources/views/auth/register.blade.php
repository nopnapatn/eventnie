@extends('layouts.main')

@section('content')
<section class="px-40 w-full">
    <div class="flex justify-center items-center h-screen py-8">
        <div class="h-fit p-16 px-20 border-4 border-black shadow-lg rounded-xl">
            <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Faculty -->
                <div>
                    <x-input-label for="faculty" :value="__('Faculty')" />
                    <x-text-input id="faculty" class="block mt-1 w-full" type="text" name="faculty" :value="old('faculty')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('faculty')" class="mt-2" />
                </div>
                <!-- StudentID -->
                <div>
                    <x-input-label for="StudentID" :value="__('StudentID')" />
                    <x-text-input id="StudentID" class="block mt-1 w-full" type="text" name="StudentID" :value="old('StudentID')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('StudentID')" class="mt-2" />
                </div>
                <!-- Year -->
                <div class="mt-4">
                    <x-input-label for="college_year" :value="__('Year')" />
                    <select id="college_year" class="block mt-1 w-full text-sm font-medium text-gray-800 border-gray-200 shadow-sm rounded-lg" type="text" name="college_year" :value="old('college_year')" required autofocus autocomplete="college_year">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <!-- <x-text-input id="college_year" class="block mt-1 w-full" type="text" name="college_year" :value="old('college_year')" required autofocus autocomplete="college_year" /> -->
                    <x-input-error :messages="$errors->get('college_year')" class="mt-2" />
                </div>
                <!-- phoneNumber -->
                <div>
                    <x-input-label for="phoneNumber" :value="__('phoneNumber')" />
                    <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber" :value="old('phoneNumber')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
                </div>
                <!-- images -->
                <div>
                    <x-input-label for="image_path" :value="__('Profile Picture')" />
                    <input type="file" name="image_path" id="image_path">
                    <x-input-error :messages="$errors->get('image_path')" class="mt-2" />
                </div>


                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>

                </div>
            </form>
        </div>
    </div>
</section>
@endsection