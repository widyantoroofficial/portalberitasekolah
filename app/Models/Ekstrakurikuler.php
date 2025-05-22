<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Ekstrakurikuler extends Model
{
    // Tentukan tabel jika nama tabel tidak sesuai dengan nama model (opsional)
    protected $table = 'eskuls';  // Sesuaikan dengan nama tabel di database

    // Tentukan kolom yang dapat diisi (opsional)
    protected $fillable = ['name'];
}
