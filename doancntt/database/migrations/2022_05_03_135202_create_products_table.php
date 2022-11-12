<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barcode', 150)->nullable();
            $table->string('name', 355);
            $table->double('weight')->nullable();
            $table->string('made_by', 255);
            $table->datetime('created_date');
            $table->bigInteger('price')->nullable();
            $table->bigInteger('sale_price')->nullable();
            $table->string('featured_image', 355);
            $table->integer('inventory_qty');
            $table->text('description', 255);
            $table->longText('description_details', 255);
            $table->text('use_tutorial', 255);
            $table->tinyInteger('featured')->comment("1. nổi bật");

            $table->integer('category_id')->unsigned();

            $table->foreign('category_id')
                ->references('id')
                ->on('sub_categories');

            $table->integer('brand_id')->unsigned();

            $table->foreign('brand_id')
                ->references('id')
                ->on('brands');

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
        Schema::dropIfExists('products');
    }
}