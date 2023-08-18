<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rombel', function (Blueprint $table) {
            $table->id();
            $table->string('kelas', 100);
            $table->unsignedBigInteger('jurusan_id');
            $table->foreign('jurusan_id')->references('id')->on('jurusan');
            $table->string('nama_kelas', 100);
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
        Schema::dropIfExists('rombel');
    }
};
