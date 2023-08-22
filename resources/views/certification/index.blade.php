@extends('layouts.main')

@section('content')
<section>
    <div class="max-w-4xl mx-auto p-2">

        {{-- {{ $user->certification() }} --}}
        <h2 class="text-4xl font-extrabold mb-4 py-8">เกียรติบัตรของฉัน</h2>

        @if (!isset($user))
        <p class="text-gray-500">Please log in to view your certificates.</p>
        @elseif ($certifications->count() === 0)
        <p class="text-gray-500">You have no uploaded certificates.</p>
        @else
        <ul class="grid grid-cols-1 gap-4">
            @foreach ($certifications as $certificate)
            <li class="border-4 border-black rounded-xl shadow-md p-4 hover:bg-gray-50 transition duration-300">
                <h3 class="text-lg font-semibold mb-2">{{ $certificate->title }}</h3>
                <p class="text-sm text-gray-500 py-4">Uploaded on: {{ $certificate->created_at->format('M j, Y H:i A') }}</p>
                <a href="{{ route('certifications.download', ['certificate' => $certificate]) }}" target="_blank" class="bg-black text-white rounded-lg p-2">Download</a>
            </li>
            @endforeach
        </ul>
        @endif

        @auth
        <div class="mt-8 flex items-start">
            <form action="{{ route('certifications.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="certificate_name" class="block mb-2">Certificate Title:</label>
                <input type="text" name="certificate_name" id="certificate_name" class="mb-4 rounded-lg" required>
                <label for="certificate" class="block mb-2">Select Certificate File:</label>
                <input type="file" name="certificate" id="certificate" class="mb-4" required>
                <div class="py-4"></div>
                <button type="submit" class="bg-black text-white py-2 px-4 rounded-lg">Upload Certificate</button>
                <div class="py-4"></div>
            </form>
        </div>
        @endauth
    </div>
</section>
@endsection