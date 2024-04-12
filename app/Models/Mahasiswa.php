<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim','foto', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'alamat', 'no_telp', 'email'
    ];
}
