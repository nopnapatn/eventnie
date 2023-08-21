@extends('layouts.main')

@section('content')
    <section>
        <div class="max-w-4xl mx-auto p-2">

            {{-- {{ $user->certification() }} --}}
            <h2 class="text-4xl font-extrabold mb-4 py-8">User Certifications</h2>

            @if (!isset($user))
                <p class="text-gray-500">Please log in to view your certificates.</p>
            @elseif ($certifications->count() === 0)
                <p class="text-gray-500">You have no uploaded certificates.</p>
            @else
                <ul class="grid grid-cols-1 gap-4">
                    @foreach ($certifications as $certificate)
                        <li class="border border-gray-200 rounded shadow-md p-4 hover:bg-gray-50 transition duration-300">
                            <h3 class="text-lg font-semibold mb-2">{{ $certificate->title }}</h3>
                            <p class="text-sm text-gray-500">Uploaded on: {{ $certificate->created_at->format('M j, Y H:i A') }}</p>
                            <a href="{{ route('certifications.download', ['certificate' => $certificate]) }}" target="_blank">Download Certificate</a>
                        </li>
                    @endforeach
                </ul>
            @endif

            @auth
                <div class="mt-8">
                    <h3 class="text-lg font-semibold mb-2">Upload New Certificate</h3>
                    <form action="{{ route('certifications.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="certificate_name" class="block mb-2">Certificate Name:</label>
                        <input type="text" name="certificate_name" id="certificate_name" class="mb-4">
                        <label for="certificate" class="block mb-2">Select Certificate File:</label>
                        <input type="file" name="certificate" id="certificate" class="mb-4">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Upload Certificate</button>
                    </form>
                </div>
            @endauth
        </div>
    </section>
@endsection
