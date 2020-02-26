<?php

namespace App\Http\Controllers;

use App\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        $matkul = Matkul::all();
        return view('matkul.index', compact('matkul'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nama_matkul' => 'required',
            'kode_matkul' => 'required',
            'sks' => 'required'
        ]);

        Matkul::create($data);

        return redirect()->route('matkul.index');
        
    }
}
