<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infopengaduan extends Model
{
    use HasFactory;
    protected $table = "Infopengaduan";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'judul_laporan', 'nama', 'nik', 'laporan'
    ];
}
