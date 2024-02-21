<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\Tutor2;
// use App\Models\Tutor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{

    public function index()
    {
        // $students = Student::all();
        // $data = [
        //     'pengajuan' => DB::table('pengajuan')->get(),
        // ];



        $pengajuan = Pengajuan::with(['siswa', 'pembimbing', 'pembimbing2'])->get();


        // $pengajuan = Pengajuan::with('pembimbing')->get();
        // dd($pengajuan);
        return view('pengajuan.index', compact('pengajuan'));
        // return view('pengajuan.index', $data); // titik itu seperti enter. kalau dibaca jadi masuk ke folder student cari file index didalamnya
    }

    public function create()
    {
        $pengajuan = Pengajuan::with(['siswa', 'pembimbing', 'pembimbing2'])->get();

        return view('pengajuan.index', compact('pengajuan'));

        // return redirect('/pengajuan'); // setiap redirect akan diarahkan ke route yang ada di web.php
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'id_siswa' => 'required'
        ]);
        return route('pengajuan');
    }

    public function edit($id)
    {

        $pengajuan = Pengajuan::with(['pembimbing', 'pembimbing2'])->get();

        return view('pengajuan.index', compact('pengajuan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_siswa' => 'required',
            'judul' => 'required',
        ]);

        DB::table('pengajuan')->where('id', $id)->update($validatedData);

        return redirect('/pengajuan');
    }

    public function delete($id)
    {
        DB::table('pengajuan')->where('id_siswa', $id)->delete();
        return redirect('/pengajuan');
    }
}
