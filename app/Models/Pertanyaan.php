<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['judul', 'isi'];
    public function jawaban()
    {
        return $this->hasMany('App\Models\Jawaban', 'id_pertanyaan');
    }
}
