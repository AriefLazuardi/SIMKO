<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $fillable = [
        'nama_prodi',
        'jurusan_id',
        'visi',
        'misi',
    ];
}
