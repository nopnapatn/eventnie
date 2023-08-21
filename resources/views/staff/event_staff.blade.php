@extends('layouts.main')

@section('content')
    <section class="flex">
        <!-- content -->
        <div class="px-40 w-full">
            <h2 class="font-semibold text-2xl mb-4">{{ $event->title }} - Staff Members</h2>
            
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
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Member</button>
                </form>
            </div>
        </div>
    </section>
@endsection
