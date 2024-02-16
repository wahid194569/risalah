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

    public function create(Request $request)
    {
        // dd($request->judul);
        $validatedData = $request->validate([
            'id_siswa' => 'required',
            'judul' => 'required',
            'pembimbing' => 'required',
            'pembimbing2' => 'required',
        ]);
        foreach ($request->judul as $value) {
            $validatedData['judul'] = $value;
            DB::table('pengajuan')->insert($validatedData);
        }

        return redirect('/pengajuan'); // setiap redirect akan diarahkan ke route yang ada di web.php
    }

    public function form($id = null)
    {

        if ($id == null) {

            $pembimbing = Tutor::get();
            $siswa = Student::get();
            return view('pengajuan.form', compact('pembimbing', 'siswa'));
        }

        // edit
        // $edit = Pengajuan::join('siswa', 'siswa.id = pengajuan.id_siswa', 'inner')->findAll(); // select * from siswa where id = $id. semua data id akan diambil setelahnya.
        // $edit = DB::table('pengajuan')->where('id_siswa', $id)->findAll();
        // $edit = Pengajuan::('Pengajuan')->paginate(2);
        // Pengajuan::join(tb_siswa, tb_siswa.id_siswa = tb_pengajuan.id_siswa, inner)

        $edit = Pengajuan::find($id);
        if ($edit) {
            return view('pengajuan.edit', ['edit' => $edit]);
        } else {
            return redirect('/pengajuan');
        }
    }

    // $request for getting data from form, $id for getting data from url
    function update(Request $request, $id)
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
