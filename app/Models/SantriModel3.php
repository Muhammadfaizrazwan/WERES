<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantriModel3 extends Model
{
    use HasFactory;

    protected $table = 'santri'; // Ganti dengan nama tabel di database Anda
    protected $fillable = ['nama_santri', 'tmp_lahir', 'tgl_lahir', 'alamat', 'no_hp'];
}
