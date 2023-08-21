<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class CertificationController extends Controller
{
    public function showCertifications(Request $request)
    {
        $user = User::findOrFail(auth()->id());

        $certifications = $user->certification()->get();

        return view('certification.index', compact('user', 'certifications'));
    }

    public function uploadCertificate(Request $request)
    {
        $user = User::findOrFail(auth()->id());

        $uploadedFile = $request->file('certificate');
        $filePath = Storage::putFile('certificates', $uploadedFile); // Store the file in the "certificates" disk

        $certificate = new Certification([
            'file_path' => $filePath,
            'title' => $request->input('certificate_name') // Retrieve the certificate name from the form
        ]);

        $user->certification()->save($certificate);

        return redirect()->back()->with('success', 'Certificate uploaded successfully.');
    }

    public function download(Certification $certificate)
    {
        $filePath = storage_path('app/' . $certificate->file_path);

        // Get the original file name from the file path
        $fileName = pathinfo($filePath, PATHINFO_BASENAME);

        // Set the appropriate content type for the file
        $headers = [
            'Content-Type' => mime_content_type($filePath),
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];

        return Response::download($filePath, $fileName, $headers);
    }
}
