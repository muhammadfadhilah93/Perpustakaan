<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    
    protected $table = 'buku';

    protected $fillable = ['judul', 'edisi', 'no_rak', 'tahun_rilis', 'penerbit', 'penulis'];

    public $timestamps = true;
}
