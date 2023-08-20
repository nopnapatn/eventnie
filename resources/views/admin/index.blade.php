@extends('layouts.main')

@section('content')
<section>
    <div class="max-w-4xl mx-auto p-2">
        <h2 class="text-4xl font-extrabold mb-4 py-8">Admin: Progressing Events</h2>

        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
            @php
            // Mockup of progressing events
            $progressingEvents = [
            (object) [
            'title' => 'Conference 2023',
            'description' => 'Annual tech conference with workshops and talks.',
            'start_at' => now()
            ->addDays(5)
            ->setHour(9)
            ->setMinute(0),
            'end_at' => now()
            ->addDays(7)
            ->setHour(18)
            ->setMinute(0),
            ],
            (object) [
            'title' => 'Workshop Series: Web Development',
            'description' => 'A series of workshops covering modern web development.',
            'start_at' => now()
            ->addDays(10)
            ->setHour(14)
            ->setMinute(30),
            'end_at' => now()
            ->addDays(12)
            ->setHour(17)
            ->setMinute(0),
            ],
            (object) [
            'title' => 'Hackathon 2023',
            'description' => '24-hour coding competition for innovative solutions.',
            'start_at' => now()
            ->addDays(15)
            ->setHour(12)
            ->setMinute(0),
            'end_at' => now()
            ->addDays(16)
            ->setHour(12)
            ->setMinute(0),
            ],
            ];
            @endphp

            @foreach ($progressingEvents as $event)
            <!-- Event Card -->
            <div class="border border-gray-200 rounded shadow-md p-4 hover:bg-gray-50 transition duration-300">
                <h3 class="text-lg font-semibold mb-2">{{ $event->title }}</h3>
                <p class="text-sm text-gray-500">{{ $event->description }}</p>
                <div class="mt-4">
                    <span class="text-sm text-gray-600">Starts: {{ $event->start_at->format('M j, Y H:i A') }}</span>
                    <br>
                    <span class="text-sm text-gray-600">Ends: {{ $event->end_at->format('M j, Y H:i A') }}</span>
                </div>
                <!-- Add more event details you want to display -->
            </div>
            @endforeach

            @if (count($progressingEvents) === 0)
            <p class="text-gray-500">No progressing events.</p>
            @endif

            <!-- Event Creation Button -->

            <a href="{{ route('admin.grant_permission') }}" class="flex items-center justify-center bg-green-500 text-white rounded-lg p-4">
                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add Permission
            </a>

            <a href="{{ route('admin.revoke_permission') }}" class="flex items-center justify-center bg-red-400 text-white rounded-lg p-4">
                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                </svg>
                Revoke Permission
            </a>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}" class="flex items-center justify-center bg-slate-500 text-white rounded-lg p-4">
                @csrf
                <button type="submit">
                    <span class="sr-only">Logout</span>
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            <div class="bg-black rounded-lg h-10 w-10 my-4"></div>
                        </x-dropdown-link>
                    </form>
                    @endauth
                </button>
            </form>
        </div>
    </div>
</section>
@endsection