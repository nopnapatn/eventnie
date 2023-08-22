@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- content -->
    <div class="px-40 w-full p-8">
        <h2 class="font-semibold text-2xl mb-4">{{ $event->title }}</h2>

        <div class="w-full h-2 bg-black rounded-lg"></div>
        <ul>
            @foreach ($eventStaffs as $staffMember)
            <li>{{ $staffMember->name }} ({{ $staffMember->email }})</li>
            @endforeach 
        </ul>

        <div class="mt-4">
            <h2 class="font-semibold text-2xl mb-4">Add New Staff Member</h2>
            <form action="{{ route('staff.addStaffMember', ['event' => $event]) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-lg font-semibold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-2 border rounded" required>
                </div>
                <button type="submit" class="bg-black text-white px-4 py-2 rounded">Add Member</button>
            </form>
        </div>

        <div class="mt-4">
            <h2 class="font-semibold text-2xl mb-4">Event Attendees</h2>
            <p>{{ $event->attendees->count() }} / {{ $event->max_attendees }} Attendees</p>
            <ul>
                @foreach ($event->attendees as $attendee)
                <li>{{ $attendee->name }} ({{ $attendee->email }})</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-4">
            <h2 class="font-semibold text-2xl mb-4">Expenses</h2>
            <ul>
                @foreach ($event->expenses as $expense)
                <li>
                    <strong>{{ $expense->title }}</strong>
                    <p>{{ $expense->description }}</p>
                    {{-- <a href="{{ asset($expense->file_path) }}" target="_blank">Download Expense</a> --}}
                    <a href="{{ route('expenses.download', ['expense' => $expense]) }}" target="_blank">Download Expense</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="py-8">
            <a href="{{ route('events.expenses.upload', ['event' => $event]) }}" class="bg-black text-white p-3 rounded-lg">Upload Expense</a>
        </div>
    </div>
</section>
@endsection