<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawai";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'nik', 'nama', 'tgl_lahir', 'jenis_kelamin', 'jabatan'
    ];
}
