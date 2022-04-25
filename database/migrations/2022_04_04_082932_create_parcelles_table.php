<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelles', function (Blueprint $table) {
            $table->increments('Par_Idf');
            $table->string('Par_Nom');
            $table->string('Par_Lieu');
            $table->integer('Par_Superfecie');
            $table->integer('Par_Prop');
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
        Schema::dropIfExists('parcelles');
    }
}