@extends('layouts.main')

@section('content')
    <section>
        <div class="max-w-4xl mx-auto p-4">
            <h2 class="text-2xl font-semibold mb-4">Grant Event Creation Permission</h2>

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                    role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif


            <form action="{{ route('admin.grant_permission') }}" method="POST">
                @csrf
                @method('PUT')
                <label for="email" class="block mb-2 font-semibold">User Email:</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded mb-4" required>
                
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    Grant Permission
                </button>
            </form>

            {{ App\Models\User::find(1)->can_create_events }}
        </div>
    </section>
@endsection
