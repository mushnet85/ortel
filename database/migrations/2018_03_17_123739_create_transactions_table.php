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
            $table->int('imei');
            $table->int('sim_no');
            $table->int('cus_tel_no');
            $table->char('employee_trans_name', 50);
            $table->char('sale_type',10);
            $table->char('return_type',10);
            $table->char('device', 100);
            $table->char('plan', 100);
            $table->int('data_allowance');
            $table->decimal('till_price', 10,2);
            $table->decimal('matrix_rrp', 10,2);
            $table->decimal('early_upgrade_fee', 10,2);
            $table->decimal('compass_discount_inc', 10,2);
            $table->decimal('compass_discount_exc', 10,2);
            $table->decimal('ho_discount_inc', 10,2);
            $table->decimal('ho_discount_exc', 10,2);
            $table->decimal('franchise_discount_exc', 10,2);
            $table->decimal('customer_paid_ex_top_up', 10,2);
            $table->int('ho_discount_inc', 10,2);
            $table->int('store_id');
            $table->int('handset_id');
            $table->int('plan_id');
            $table->decimal('customer_paid_ex_vat', 10,2);
            $table->decimal('gross_profit', 10,2);
            $table->decimal('rebate_amount', 10,2);
            $table->int('user_id', 10,2);
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
