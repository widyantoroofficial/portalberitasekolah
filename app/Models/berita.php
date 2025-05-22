<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;


class Berita extends Model
{
    protected $table = 'beritas';  // Nama tabel yang sesuai dengan nama model

    protected $fillable = ['title', 'description', 'image_path'];
}
