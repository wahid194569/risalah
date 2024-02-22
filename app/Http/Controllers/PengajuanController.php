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
        $s = Student::all();
        $p1 = Tutor::all();
        $p2 = Tutor2::all();
        return view('pengajuan.form',   compact(['s', 'p1', 'p2']));

        // return redirect('/pengajuan'); // setiap redirect akan diarahkan ke route yang ada di web.php
    }

    public function store(Request $request)
    {
        // dd($request);

        // $request->validate([
        //     'id_siswa' => 'required',
        //     'judula' => 'required',
        //     'judulb' => 'required',
        //     'judulc' => 'required',
        //     'pembimbing' => 'required',
        //     'pembimbing2' => 'required'
        // ]);
        // $pengajuan = new Pengajuan;
        // $pengajuan->id_siswa = $request->nama;
        // $pengajuan->judul_a = $request->judula;
        // $pengajuan->judul_b = $request->judulb;
        // $pengajuan->judul_c = $request->judulc;
        // $pengajuan->id_pembimbing_a = $request->pembimbing;
        // $pengajuan->id_pembimbing_b = $request->pembimbing2;
        // $pengajuan->save();

        $pengajuan = Pengajuan::create([

            'id_siswa' => $request->nama,
            'judul_a' => $request->judula,
            'judul_b' => $request->judulb,
            'judul_c' => $request->judulc,
            'keterangan' => $request->ket,
            'id_pembimbing_a' => $request->pembimbing,
            'id_pembimbing_b' => $request->pembimbing2,
        ]);
        if ($pengajuan) {
            return redirect()->route('pengajuan')->with(['success' => 'Data Berhasil Ditambah']);
        } else {
            return redirect()->route('pengajuan.form')->with(['error' => 'Gagal Dihapus']);
        }
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

    public function autocomplete(Request $request)
    {
        $data = [];

        if ($request->filled('q')) {
            $data = Student::select("nama", "id", "kelas")
                ->where('nama', 'LIKE', '%' . $request->get('q') . '%')
                ->get();
        }
        return response()->json($data);
    }
}
