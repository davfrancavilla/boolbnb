<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Creazione tabella ponte tra apartments e sponsors
    public function up()
    {
        Schema::create('apartments_sponsors', function (Blueprint $table) {
            $table->id();
            $table->date('start-date');
            $table->date('end-date');

            //Realazione tramite apartment_id con la tabella apartments//
            $table->unsignedBigInteger('apartment_id');
            $table->foreign('apartment_id')->references('id')->on('apartments');
            
            //Realazione tramite sponsor_id con la tabella sponsors//
            $table->unsignedBigInteger('sponsor_id');
            $table->foreign('sponsor_id')->references('id')->on('sponsors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments_sponsors');
    }
}
