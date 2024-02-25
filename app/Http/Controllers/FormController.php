<<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan; // Import the Pengajuan model

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Get the form data from the request
        $nama = $request->input('nama');
        $judul = $request->input('judul');
        $pembimbing1 = $request->input('pembimbing1');
        $pembimbing2 = $request->input('pembimbing2');
        $keterangan = $request->input('keterangan');

        // Process the form submission
        // For example, you can save the data to the database
        // Replace the following code with your desired logic

        // Example: Saving data to the database
        Pengajuan::create([
            'nama' => $nama,
            'judul' => $judul,
            'pembimbing1' => $pembimbing1,
            'pembimbing2' => $pembimbing2,
            'keterangan' => $keterangan,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
