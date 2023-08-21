@extends('layouts.main')

@section('content')
    <section>
        <div class="max-w-4xl mx-auto p-2">
            <h2 class="text-4xl font-extrabold mb-4 py-8">User Information</h2>

            <div class="mb-8 border border-gray-200 rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold mb-4">User Information</h2>
                <p class="mb-2"><strong>Name:</strong> {{ $user->name }}</p>
                <p class="mb-2"><strong>Email:</strong> {{ $user->email }}</p>
                <p class="mb-2"><strong>Faculty:</strong> {{ $user->faculty }}</p>
                <p class="mb-2"><strong>Student ID:</strong> {{ $user->studentID }}</p>
                <p class="mb-2"><strong>Phone Number:</strong> {{ $user->phoneNumber }}</p>
                <p class="mb-2"><strong>Major:</strong> {{ $user->major }}</p>
                <p class="mb-2"><strong>College Year:</strong> {{ $user->college_year }}</p>
                <p class="mb-2"><strong>Allergic Food:</strong> {{ $user->allergic_food }}</p>
                <p class="mb-2"><strong>Bio:</strong> {{ $user->bio }}</p>
                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture"
                    class="w-32 h-32 rounded-full mt-4">
            </div>

            {{-- <a href="{{ route('admin.revoke_permission') }}"
                class="flex items-center justify-center bg-red-400 text-white rounded-lg p-4">
                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                </svg>
                Revoke Permission
            </a> --}}

            <form action="{{ route('admin.revoke_permission2', $user) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit"class="flex items-center justify-center bg-red-400 text-white rounded-lg p-4">
                    Revoke Permission
                </button>
            </form>

            {{-- {{ $user }} --}}
        </div>
    </section>
@endsection
