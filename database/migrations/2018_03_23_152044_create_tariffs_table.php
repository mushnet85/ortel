<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariffs', function (Blueprint $table) {
            $table->increments('id');
            $table->char('product_description');
            $table->decimal('mrc', 10,2);
            $table->integer('contract_tenure');
            $table->char('contract_type');
            $table->decimal('rate', 10,2);
            $table->decimal('upfront_cost', 10,2);
            $table->decimal('revenue_share', 10,2);
            $table->char('category');
            $table->char('type');
            $table->date('effective_from');
            $table->date('effective_to');                
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
        Schema::dropIfExists('tariffs');
    }
}
