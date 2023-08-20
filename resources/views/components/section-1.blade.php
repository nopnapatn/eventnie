<div class="flex item-center">

    <!-- search -->
    <div class="flex w-2/3 items-center">
        <span class="font-semibold text-4xl pr-4">Eventnie</span>
        <div class="h-10 w-2/5">

        </div>
    </div>

    <!-- user -->
    <div class="flex items-center w-1/3 justify-end">
        <div class="">
            @if (Route::has('login'))
            <div class="flex items-center">
                @auth
                <a href="{{ route('user.index') }}">
                    <div class="bg-gray-400 rounded-full h-10 w-10 mx-4 shadow-xl">
                        <img src="" alt="">
                    </div>
                </a>
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
        @auth
        <li>
            <a href="{{}}" class="text-gray-900 hover:underline">Certification</a>
        </li>
        @endauth
    </ul>
</div>