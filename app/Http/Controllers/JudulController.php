<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JudulController extends Controller
{
    public function index()
    {
        return view('judul.index');
    }
    public function create()
    {
        return route('judul.create');
    }
    public function store(Request $request)
    {
        return route('judul.store');
    }
    public function edit($id)
    {
        return route('judul.edit');
    }
    public function update(Request $request)
    {
        return route('judul.update');
    }
    public function delete()
    {
        return route('judul.delete');
    }
}
