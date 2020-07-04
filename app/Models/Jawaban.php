<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $fillable = ['isi','jawaban_tepat'];
    public function pertanyaan()
    {
        return $this->belongsTo('App\Models\Pertanyaan', 'id_pertanyaan');
    }
}
