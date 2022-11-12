<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDiscountCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_discount_codes', function (Blueprint $table) {
            $table->integer('discount_code_id')->unsigned();

            $table->foreign('discount_code_id')
                ->references('id')
                ->on('discount_codes');

            $table->integer('customer_id')->unsigned();

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');

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
        Schema::dropIfExists('customer_discount_codes');
    }
}