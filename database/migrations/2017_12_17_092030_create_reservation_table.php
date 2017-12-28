<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {


            $table->increments('id');
            $table->string('name');
            $table->string('prenom');
            $table->string('email');
            $table->integer('Age');
            $table->string('telephone');
            $table->integer('nombre');
            //$table->string('Type_paye');
            $table->integer('verifie');
            $table->date('date_deb');
            $table->date('date_fin');
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
        Schema::dropIfExists('reservation');
    }
}
