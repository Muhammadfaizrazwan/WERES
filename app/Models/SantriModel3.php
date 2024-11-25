<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantriModel3 extends Model
{
    use HasFactory;

    protected $table = 'menu'; // Ganti dengan nama tabel di database Anda
    protected $fillable = ['nama', 'jenis', 'harga',];
}
