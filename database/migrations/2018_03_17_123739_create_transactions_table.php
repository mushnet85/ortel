<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('transaction_date');
            $table->integer('imei');
            $table->integer('sim_no');
            $table->integer('cus_tel_no');
            $table->integer('user_id');
            $table->char('sale_type',10);
            $table->char('return_type',10);
            $table->integer('data_allowance');
            $table->decimal('till_price', 10,2);
            $table->decimal('matrix_rrp', 10,2);
            $table->decimal('early_upgrade_fee', 10,2);
            $table->decimal('compass_discount_inc', 10,2);
            $table->decimal('compass_discount_exc', 10,2); //not on user view
            $table->decimal('ho_discount_inc', 10,2);
            $table->decimal('ho_discount_exc', 10,2); //not on user view
            $table->decimal('franchise_discount_exc', 10,2); //not on user view
            $table->decimal('franchise_discount_inc', 10,2);
            $table->decimal('customer_paid_ex_top_up', 10,2);
            $table->integer('store_id');
            $table->integer('handset_id');
            $table->integer('plan_id');
            $table->decimal('customer_paid_ex_vat', 10,2); //not on user view
            $table->decimal('gross_profit', 10,2); //not on user view
            $table->decimal('rebate_amount', 10,2); //not on user view
            $table->integer('input_user_id');
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
        Schema::dropIfExists('transactions');
    }
}
