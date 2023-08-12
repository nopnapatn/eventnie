<!-- nav bar section 1 -->
<nav class="bg-white">
    <div class="flex flex-wrap items-center justify-between mx-auto max-w-screen-xl p-4">
        <!-- logo -->
        <div>
            <a href="{{ url('/') }}" class="flex items-center pr-4">
                <span class="self-center text-3xl font-semibold whitespace-nowrap text-black">Eventnie</span>
            </a>
        </div>

        <!-- search -->
        <!-- <div class="flex items-center w-4/6">
            <form class=" w-full">
                <label for="default-search" class="mb-2 text-sm font-medium text-black sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg class="h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-black focus:border-black" placeholder="Search Mockups, Logos..." required>
                </div>
            </form>
        </div> -->

        <!-- icon  -->
        <div>
            <a href="">
                <!-- if empty -->
                @if (FALSE)
                <div>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                        <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                    </svg>
                </div>
                @else
                <div>

                </div>
                @endif
            </a>
        </div>

        <!-- check Authenication -->
        <div class="">
            @if (Auth::check())
            <div>
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 mr-2 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                    Bonnie Green
                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div class="font-medium ">Pro User</div>
                        <div class="truncate">name@flowbite.com</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                    </div>
                </div>
            </div>
            @else
            <div>
                <a href="">
                    <span class="text-black pr-4">login</span>
                </a>
                <button type="button" class="h-12 text-white bg-gray-800 hover:bg-black focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 ">Get started</button>
            </div>
            @endif
        </div>
    </div>
</nav>

<!-- nav bar section 2 -->
<nav class="bg-white border-b border-gray-200">
    <div class="max-w-screen-xl px-4 py-4 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                <li>
                    <a href="{{ url('/') }}" class="text-gray-900 hover:underline" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('events.index') }}" class="text-gray-900 hover:underline">All Events</a>
                </li>
                <li>
                    <a href="{{ url('skeletons/certificate') }}" class="text-gray-900 hover:underline">Certificate</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 hover:underline">Section 3</a>
                </li>
            </ul>
        </div>
    </div>
</nav>