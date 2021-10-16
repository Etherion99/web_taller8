<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();       
            $table->String('names',20);
            $table->String('last_names',20);    
            $table->foreignId('documentype_id');
            $table->String('document')->unique();
            $table->foreignId('residence_place',15);
            $table->date('birthdate');
            $table->String('email')->unique();
            $table->Integer('telephone');
            $table->String('user',10)->unique();
            $table->String('password',15);
            $table->timestamps();
            $table->foreign('residence_place')->references('id')->on('cities');
            $table->foreign('documentype_id')->references('id')->on('documenttypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
