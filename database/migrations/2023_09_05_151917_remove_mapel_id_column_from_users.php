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
        // Melepaskan kunci asing
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_mapel_id_foreign');
        });

        // Menghapus kolom 'mapel_id'
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('mapel_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
