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
                <span class="text-2xl font-semibold py-4">Public profile</span>
            </div>

            <!-- personal record -->
            <div class="">

                <form>
                    <div class="grid gap-6 mb-6 md:grid-cols-2 py-4">
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First name</label>
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required>
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last name</label>
                            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Doe" required>
                        </div>
                        <div>
                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Nick name</label>
                            <input type="text" id="Nack_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Jimmy" required>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone number</label>
                            <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                        </div>
                        <div>
                            <label for="website" class="block mb-2 text-sm font-medium text-gray-900">Faculty</label>
                            <input type="text" id="faculty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Science" required>
                        </div>
                        <div>
                            <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900">Major</label>
                            <input type="text" id="major" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Computer" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required>
                    </div>
                    <div class="mb-6">
                        <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                        <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required>
                    </div>
                    <button type="submit" class="text-white bg-gray-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endif
</section>
@endsection