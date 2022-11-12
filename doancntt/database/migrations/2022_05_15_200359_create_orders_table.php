<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('id', 255)->primary();
            $table->dateTime('created_date');

            $table->integer('order_status_id')->unsigned();
            $table->foreign('order_status_id')
                ->references('id')
                ->on('order_statuses');

            $table->integer('shipping_status_id')->unsigned();
            $table->foreign('shipping_status_id')
                ->references('id')
                ->on('shipping_statuses');

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');

            $table->string('shipping_fullname', 255);
            $table->char('shipping_mobile', 15);
            $table->string('shipping_email', 255);

            $table->string('shipping_housenumber_street', 355);

            $table->bigInteger('shipping_ward_id')->unsigned();
            $table->foreign('shipping_ward_id')
                ->references('id')
                ->on('wards')
                ->onDelete('cascade');

            $table->tinyInteger('payment_method')->comment("0. COD, 1. BANK");
            $table->bigInteger('shipping_fee');
            $table->date('delivered_date');

            $table->integer('discount_code_id')->unsigned()->nullable();
            $table->foreign('discount_code_id')
                ->references('id')
                ->on('discount_codes');

            $table->text('note')->nullable();

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
        Schema::dropIfExists('orders');
    }
}