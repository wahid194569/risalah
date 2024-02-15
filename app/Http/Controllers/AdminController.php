<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        // $students = Student::all();
        $data = [
            'admin' => DB::table('admin')->get(),
        ];
        return view('admin.index', $data); // titik itu seperti enter. kalau dibaca jadi masuk ke folder student cari file index didalamnya
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);        

        DB::table('admin')->insert($validatedData);
        
        return redirect('/admin'); // setiap redirect akan diarahkan ke route yang ada di web.php
    }

    public function show(Admin $admin)
    {
        //
    }

    public function form($id = null)
    {        
        if ($id == null){
            return view('admin.form');
        }

        // edit
        $edit = Admin::find($id); // select * from siswa where id = $id. semua data id akan diambil setelahnya.

        if ($edit) {
            return view('admin.edit', ['edit' => $edit]);
        } else {
            return redirect('/admin');
        }    
    }
    
    // $request for getting data from form, $id for getting data from url
    function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);        

        DB::table('admin')->where('id', $id)->update($validatedData);
        
        return redirect('/admin');
    }
    
    public function delete($id)
    {
        DB::table('admin')->where('id', $id)->delete();
        return redirect('/admin');
    }

}