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
        Schema::table('tahun_akademik', function (Blueprint $table) {
            $table->string('tahun_awal')->after('id');
            $table->string('tahun_akhir')->after('id');
            $table->unsignedBigInteger('semester_id')->after('id');
            $table->foreign('semester_id')->references('id')->on('semester');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tahun_akademik', function (Blueprint $table) {
            $table->dropColumn('tahun_awal');
            $table->dropColumn('tahun_akhir');
            $table->dropForeign('tahun_akademik_semester_id_foreign');
            $table->dropColumn('semester_id');
        });
    }
};
