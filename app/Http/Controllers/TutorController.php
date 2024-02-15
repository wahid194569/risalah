<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TutorController extends Controller
{

    public function index()
    {        
        $data = [
            'tutor' => DB::table('pembimbing')->get(),
        ];
        return view('tutor.index', $data); // titik itu seperti enter. kalau dibaca jadi masuk ke folder tutor cari file index didalamnya
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'spesialisasi' => 'required',
        ]);        

        DB::table('pembimbing')->insert($validatedData);
        
        return redirect('/tutor'); // setiap redirect akan diarahkan ke route yang ada di web.php
    }

    public function form($id = null)
    {        
        if ($id == null){
            return view('tutor.form');
        }

        // edit
        $edit = Tutor::find($id); // select * from pembimbing where id = $id. semua data id akan diambil setelahnya.

        if ($edit) {
            return view('tutor.edit', ['edit' => $edit]);
        } else {
            return redirect('/tutor');
        }    
    }
    
    // $request for getting data from form, $id for getting data from url
    function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'spesialisasi' => 'required',
        ]);        

        DB::table('pembimbing')->where('id', $id)->update($validatedData);
        
        return redirect('/tutor');
    }
    
    public function delete($id)
    {
        DB::table('pembimbing')->where('id', $id)->delete();
        return redirect('/tutor');
    }

}

