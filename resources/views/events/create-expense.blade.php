@extends('layouts.main')

@section('content')
    <section class="flex">
        <!-- content -->
        <div class="px-40 w-full">
            <h2 class="font-semibold text-2xl mb-4">{{ $event->title }} - Add Expense</h2>
            
            <div class="mt-4">
                <form action="{{ route('expenses.upload', ['event' => $event]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-lg font-semibold mb-2">Expense Title</label>
                        <input type="text" name="title" id="title" class="w-full p-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-lg font-semibold mb-2">Expense Description</label>
                        <textarea name="description" id="description" rows="4" class="w-full p-2 border rounded" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="expense_file" class="block text-lg font-semibold mb-2">Expense File (PDF, Image, etc.)</label>
                        <input type="file" name="expense_file" id="expense_file" class="w-full p-2 border rounded" required>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Upload Expense</button>
                </form>
            </div>
        </div>
    </section>
@endsection
