<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Prestasi extends Model
{
    // Tentukan tabel jika nama tabel tidak sesuai dengan nama model
    protected $table = 'prestasis';  // Nama tabel yang sesuai dengan nama model

    // Tentukan kolom yang dapat diisi (opsional)
    protected $fillable = ['date', 'name', 'description', 'student_name', 'image_path'];
}
