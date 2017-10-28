<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravel​sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
         $table->increments('id');/*Acresentei um ID como chave estrangeira*/
         $table->string('Name', 128);
         $table->string('Phone', 16);
         $table->date('DateFrom');
         $table->date('DateTo');
         $table->string('Origin', 128);
         $table->string('Destination', 128);
         $table->integer('NumberPeople');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('travel​s');
    }
}
