<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PreimenujKolonuUTabeliRacuns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('racuns', function (Blueprint $table) {
            $table->renameColumn('adresa','adresaLokala');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('racuns', function (Blueprint $table) {
            $table->renameColumn('adresaLokala','adresa');
       });
    }
}
