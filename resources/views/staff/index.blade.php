@extends('layouts.main')

@section('content')
    <section>
        <div class="max-w-4xl mx-auto p-2">
            <h2 class="text-4xl font-extrabold mb-4 py-8">I'm a staff in . . .</h2>

            @if ($associatedEvents->isEmpty())
                <p class="text-gray-500">You are not associated with any events as a staff or creator.</p>
            @else
                <ul class="grid grid-cols-1 gap-4 py-8">
                    @foreach ($associatedEvents as $event)
                        <a href="{{ route('tasks.index', ['event' => $event]) }}">
                            <li class="border-2 border-black rounded shadow-md p-4 hover:bg-gray-50 transition duration-300">
                                <h3 class="text-lg font-semibold mb-2">{{ $event->title }}</h3>
                                <p class="text-sm text-gray-500">{{ $event->description }}</p>
                            </li>
                        </a>
                    @endforeach
                </ul>
            @endif
        </div>
    </section>
@endsection
