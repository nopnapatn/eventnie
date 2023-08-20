<div class="flex item-center">

    <!-- search -->
    <div class="flex w-2/3 items-center">
        <span class="font-semibold text-4xl pr-4">Eventnie</span>
        <div class="h-10 w-2/5">
            <form class="w-full">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg class="h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full pl-10 text-sm text-gray-900 rounded-lg bg-gray-50 focus:ring-black focus:border-black" placeholder="Search events.." required>
                </div>
            </form>
        </div>
    </div>

    <!-- user -->
    <div class="flex items-center w-1/3 justify-end">
        <div class="">
            @if (Route::has('login'))
            <div class="flex items-center">
                @auth
               
                <span class=" font-semibold">{{auth::user()->name}}</span>

                @else
                <a href="{{ route('login') }}" class="px-4">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="bg-black rounded-lg p-3 text-white">Sign Up!</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</div>

<div class="flex items-center py-4 pb-8">
    <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
        <li>
            <a href="{{ url('/') }}" class="text-gray-900 hover:underline" aria-current="page">Home</a>
        </li>
        <li>
            <a href="{{ route('events.index') }}" class="text-gray-900 hover:underline">All Events</a>
        </li>
    </ul>
</div>