<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHandsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handsets', function (Blueprint $table) {
            $table->increments('id');
            $table->char('manufacturer');
            $table->char('memory');
            $table->char('model');
            $table->char('color');
            $table->integer('product_code');      
            $table->char('type');
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
        Schema::dropIfExists('handsets');
    }
}
