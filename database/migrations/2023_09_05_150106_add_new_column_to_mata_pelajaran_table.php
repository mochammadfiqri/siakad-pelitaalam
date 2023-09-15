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
        Schema::table('mata_pelajaran', function (Blueprint $table) {
            $table->unsignedBigInteger('kelompok_id')->after('name');
            $table->foreign('kelompok_id')->references('id')->on('kelompok_pembelajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mata_pelajaran', function (Blueprint $table) {
            $table->dropForeign('mata_pelajaran_kelompok_id_foreign');
            $table->dropColumn('kelompok_id');
        });
    }
};
