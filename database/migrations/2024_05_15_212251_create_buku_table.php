<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('edisi')->nullable();
            $table->string('no_rak')->nullable();
            $table->unsignedSmallInteger('tahun_rilis');
            $table->string('penerbit');
            $table->string('penulis');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
