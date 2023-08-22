@extends('layouts.main')

@section('content')
    <section>
        <div class="max-w-4xl mx-auto p-4">
            <h2 class="text-2xl font-semibold mb-4">Task Created Successfully</h2>

            <p>Your task has been successfully created.</p>

            <a href="{{ route('tasks.index') }}" class="text-blue-500 hover:underline">Back to Task List</a>
        </div>
    </section>
@endsection
