<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pmks extends Model
{
    use HasFactory;
    protected $table = "pmks";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'nik', 'nama', 'jk', 'jenis_pmks', 'kota'
    ];
}
