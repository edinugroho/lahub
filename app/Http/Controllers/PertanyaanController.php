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
    public function detail($id_pertanyaan)
    {
        $data['pertanyaan'] = Pertanyaan::find($id_pertanyaan);
        $data['jawabans'] = Pertanyaan::find($id_pertanyaan)->jawaban;
        return view('contents.detail-pertanyaan', $data);
    }
    public function edit($id_pertanyaan)
    {
        $data['pertanyaan'] = Pertanyaan::find($id_pertanyaan);
        return view('contents.edit-pertanyaan', $data);
    }
    public function update(Request $request,$id_pertanyaan)
    {
        $pertanyaan = Pertanyaan::find($id_pertanyaan);
        $pertanyaan->judul = $request->judul;
        $pertanyaan->isi = $request->isi;
        $pertanyaan->save();
        return redirect('pertanyaan/'.$id_pertanyaan);
    }
    public function delete($id_pertanyaan)
    {
        $pertanyaan = Pertanyaan::find($id_pertanyaan)->delete();
        return redirect('pertanyaan');
    }
}
