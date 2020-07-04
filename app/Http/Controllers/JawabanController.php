<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($id_pertanyaan)
    {
        $data['pertanyaan'] = Pertanyaan::find($id_pertanyaan);
        $data['jawabans'] = Pertanyaan::find($id_pertanyaan)->jawaban;
        return view('contents.tampil-jawaban', $data);
    }
    public function store(Request $request ,$id_pertanyaan)
    {
        $jawaban = new Jawaban;
        $jawaban->isi = $request->isi;
        $jawaban->id_pertanyaan = $id_pertanyaan;
        $jawaban->save();
        return redirect()->back();
    }
}
