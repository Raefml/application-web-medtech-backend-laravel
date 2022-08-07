<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qst', function (Blueprint $table) {
            $table->id();
           
            $table->text('qst');
            $table->text('type_qst');
            $table->text('rep');
            $table->text('checkbox_pro');
           
            $table->integer(' category_id');
            $table->integer('souscategory_id');
            $table->timestamps();
            $table->foreign('souscategory_id')->references('id')->on('souscategories');
            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qst');
    }
}
