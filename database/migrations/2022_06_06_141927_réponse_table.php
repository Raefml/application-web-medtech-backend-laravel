<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RéponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //..
        schema::create('réponse',function(blueprint $table){
            $table->id();
           
            $table->text('qst');
            $table->integer('categorie_name');
           
           
            $table->text('rep');
           
            $table->timestamps();
            $table->foreign('qst_id')->references('id')->on('qst');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        schema::dropIfExists('Réponse');
    }
}
