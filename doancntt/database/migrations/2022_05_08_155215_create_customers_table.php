<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->char('password', 61)->nullable();
            $table->char('mobile', 15)->nullable();
            $table->string('email')->nullable();

            $table->string('housenumber_street', 200)->nullable();
            $table->bigInteger('ward_id')->unsigned()->nullable();
            $table->foreign('ward_id')->references('id')->on('wards');

            $table->string('shipping_name', 200)->nullable();
            $table->string('shipping_mobile', 15)->nullable();

            $table->tinyInteger('is_active');

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
        Schema::dropIfExists('customers');
    }
}