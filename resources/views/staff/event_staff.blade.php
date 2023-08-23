@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- content -->
    <div class="px-40 w-full p-8">
        <div class="flex justify-between py-2">
            <h2 class="font-semibold text-2xl mb-4">{{ $event->title }}</h2>
            <a href="{{ route('events.edit', ['event' => $event])}}" class="bg-black text-white p-3 rounded-lg">
                Edit Event
            </a>
        </div>
        <div class="w-full h-2 bg-black rounded-lg"></div>
        <div class="py-2"></div>
        <div class="mt-4 border-4 border-black rounded-lg p-8">
            <h2 class="font-semibold text-2xl mb-4">Event Attendees</h2>
            <p>{{ $event->attendees->count() }} / {{ $event->max_attendees }} Attendees</p>
            <ul>
                @foreach ($event->attendees as $attendee)
                <li>{{ $attendee->name }} ({{ $attendee->email }})</li>
                @endforeach
            </ul>
        </div>
        <div class="py-2"></div>
        <ul class="border-4 border-black rounded-lg p-8">
            <h2 class="font-semibold text-2xl mb-4">Event Members</h2>
            @foreach ($eventStaffs as $staffMember)
            <li class="">{{ $staffMember->name }} ({{ $staffMember->email }})</li>
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
        <div class="py-4"></div>
        <div class="w-full h-2 bg-black rounded-lg"></div>
        <div class="mt-4">
            <h2 class="font-semibold text-2xl mb-4">Expenses</h2>
            <ul>
                @foreach ($event->expenses as $expense)
                <li class="border-4 border-black rounded-lg p-8 my-4">
                    <strong class="py-4">Name: {{ $expense->title }}</strong>
                    <p class="py-4">Description: {{ $expense->description }}</p>
                    <a href="{{ route('expenses.download', ['expense' => $expense]) }}" target="_blank" class="bg-black text-white p-2 rounded-lg">Download Expense</a>
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