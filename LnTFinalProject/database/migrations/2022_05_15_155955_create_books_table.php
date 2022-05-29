<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table-> string("judul")->unique()->nullable();
            $table-> string("penulis")->nullable();
            $table-> string("jumlah")->nullable();
            $table-> string("terbit")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
