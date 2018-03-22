<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHandsetPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handset__prices', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('handset_id');
            $table->date('effective_from');
            $table->date('effective_to');
            $table->decimal('handset_price', 10,2);            
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
        Schema::dropIfExists('handset__prices');
    }
}
