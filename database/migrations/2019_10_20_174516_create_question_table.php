<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('wzc1')->nullable();
            $table->string('wzc2')->nullable();
            $table->string('wzc3')->nullable();
            $table->string('wzc3a')->nullable();
            $table->string('wzc4')->nullable();
            $table->string('wzc5')->nullable();
            $table->string('wzc5a')->nullable();
            $table->string('fnl')->nullable();
            $table->string('fnl1')->nullable();
            $table->string('fnl2')->nullable();
            $table->string('fnl3')->nullable();
            $table->string('fnl4')->nullable();
            $table->string('fnl5')->nullable();
            $table->string('fnl6')->nullable();
            $table->string('fnl7')->nullable();
            $table->string('fnl8')->nullable();
            $table->string('fnl9')->nullable();
            $table->string('fnl10')->nullable();
            $table->string('fnl11')->nullable();
            $table->string('wzc6')->nullable();
            $table->string('wzc7')->nullable();
            $table->string('fnl12')->nullable();
            $table->string('fnl13')->nullable();
            $table->string('fnl14')->nullable();
            $table->string('fnl15')->nullable();
            $table->string('fnl16')->nullable();
            $table->string('wzc8')->nullable();
            $table->string('fnbd')->nullable();
            $table->string('fnbd1')->nullable();
            $table->string('fnl17')->nullable();
            $table->string('fnl18')->nullable();
            $table->string('wzc10')->nullable();
            $table->string('wzc11')->nullable(); 
            $table->string('wzc12')->nullable();
            $table->string('wzc13')->nullable();
            $table->string('wzc14')->nullable();
            $table->string('wzc15')->nullable();
            $table->string('wzc16')->nullable();
            $table->string('wzc17')->nullable();
            $table->string('wzc18')->nullable();
            $table->string('wzc19')->nullable();
            $table->string('wzc20')->nullable();
            $table->string('fnl19')->nullable();
            $table->string('wzc21')->nullable();
            $table->string('fnl20')->nullable();
            $table->string('wzc22')->nullable();
            $table->string('fnl21')->nullable();
            $table->string('fnl22')->nullable();
            $table->string('fnl23')->nullable();
            $table->string('fnl24')->nullable();
            $table->string('fnl25')->nullable();
            $table->string('fnl26')->nullable();
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
        Schema::dropIfExists('question');
    }
}
