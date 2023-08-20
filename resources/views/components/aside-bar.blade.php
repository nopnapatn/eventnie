<aside class="border-r-4 border-black w-20 min-h-screen">
    <!-- logo -->
    <a href="{{ url('/') }}">
        <div class="bg-black rounded-full h-10 w-10">
        </div>
    </a>

    <!-- icon menu -->
    <div class="py-48">
        <div class="bg-black rounded-full h-10 w-10 my-4"></div>
        <div class="bg-black rounded-full h-10 w-10 my-4"></div>
        <div class="bg-black rounded-full h-10 w-10 my-4"></div>
        <div class="bg-black rounded-full h-10 w-10 my-4"></div>

    </div>

    <!-- setting icon -->
    <div class="">

        @if (Auth::check() && Auth::user()->can_create_event)
        <a href="{{ route('events.create') }}" class="">
            <div class="bg-black rounded-full h-10 w-10 my-4">
                <span class="text-white flex items-center justify-center">C</span>
            </div>
        </a>
        @endif

        <div class="bg-black rounded-lg h-10 w-10 my-4"></div>

        @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                <div class="bg-black rounded-lg h-10 w-10 my-4">
                    <span class="text-white flex items-center justify-center">L</span>
                </div>
            </x-dropdown-link>
        </form>
        @endauth

    </div>
</aside>