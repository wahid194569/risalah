<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\Http\Requests\StoreStudentRequest;
// use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{

    public function index()
    {
        // $students = Student::all();
        $data = [
            'siswa' => DB::table('siswa')->get(),
        ];
        return view('student.index', $data); // titik itu seperti enter. kalau dibaca jadi masuk ke folder student cari file index didalamnya
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);        

        DB::table('siswa')->insert($validatedData);
        
        return redirect('/student'); // setiap redirect akan diarahkan ke route yang ada di web.php
    }

    public function show(Student $student)
    {
        //
    }

    public function form($id = null)
    {        
        if ($id == null){
            return view('student.form');
        }

        // edit
        $edit = Student::find($id); // select * from siswa where id = $id. semua data id akan diambil setelahnya.

        if ($edit) {
            return view('student.edit', ['edit' => $edit]);
        } else {
            return redirect('/student');
        }    
    }
    
    // $request for getting data from form, $id for getting data from url
    function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);        

        DB::table('siswa')->where('id', $id)->update($validatedData);
        
        return redirect('/student');
    }
    
    public function delete($id)
    {
        DB::table('siswa')->where('id', $id)->delete();
        return redirect('/student');
    }

}
