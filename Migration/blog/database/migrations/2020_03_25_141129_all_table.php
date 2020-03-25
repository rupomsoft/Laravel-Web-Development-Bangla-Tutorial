<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_table',function(Blueprint $table){
           $table->bigIncrements('id');
           $table->bigInteger('votes');
           $table->binary('img');
           $table->boolean('confirmed');
           $table->char('name', 50);
           $table->dateTimeTz('created_at');
           $table->ipAddress('visitor');
           $table->longText('description');
           $table->string('city', 1000);
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
    }
}
