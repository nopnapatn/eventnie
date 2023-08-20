@extends('layouts.main')

@section('content')
<section class="">
    <div class="flex justify-center items-center h-screen">
        <div class="h-1/2 w-3/12">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Faculty -->
                <div>
                    <x-input-label for="faculty" :value="__('faculty')" />
                    <x-text-input id="faculty" class="block mt-1 w-full" type="text" name="faculty" :value="old('faculty')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('faculty')" class="mt-2" />
                </div>

                <!-- major -->
                <div>
                    <x-input-label for="major" :value="__('major')" />
                    <x-text-input id="major" class="block mt-1 w-full" type="text" name="major" :value="old('major')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('major')" class="mt-2" />
                </div>


                <!-- year -->
                <div>
                    <x-input-label for="year" :value="__('year')" />
                    <x-text-input id="year" class="block mt-1 w-full" type="text" name="year" :value="old('year')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('year')" class="mt-2" />
                </div>

                <!-- StudentID -->
                <div>
                    <x-input-label for="StudentID" :value="__('StudentID')" />
                    <x-text-input id="StudentID" class="block mt-1 w-full" type="text" name="StudentID" :value="old('StudentID')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('StudentID')" class="mt-2" />
                </div>

                <!-- phoneNumber -->
                <div>
                    <x-input-label for="phoneNumber" :value="__('phoneNumber')" />
                    <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber" :value="old('phoneNumber')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
                </div>

                <!-- socialMedia -->
                <div>
                    <x-input-label for="socialMedia" :value="__('socialMedia')" />
                    <x-text-input id="socialMedia" class="block mt-1 w-full" type="text" name="socialMedia" :value="old('socialMedia')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('socialMedia')" class="mt-2" />
                </div>

                <!-- allergicFood -->
                <div>
                    <x-input-label for="allergicFood" :value="__('allergicFood')" />
                    <x-text-input id="allergicFood" class="block mt-1 w-full" type="text" name="allergicFood" :value="old('allergicFood')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('allergicFood')" class="mt-2" />
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