<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data['pertanyaans'] = Pertanyaan::all();
        return view('contents.tampil-pertanyaan', $data);
    }
    public function store(Request $request)
    {
        $new_pertanyaan = Pertanyaan::create($request->all());
        return redirect('pertanyaan');
    }
    public function create(Request $request)
    {
        return view('contents.tambah-pertanyaan');
    }
}
