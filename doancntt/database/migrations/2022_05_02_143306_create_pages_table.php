<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id')->comment("1. Hướng dẫn đặt hàng, 2. Phương thức đặt hàng, 3. Chính sách bán hàng, 4. Chính sách đổi trả hàng, 5. Phương thức vận chuyển, 6. Sâm núi hàn quốc");
            $table->string('title', 355);
            $table->longText('content');
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
        Schema::dropIfExists('pages');
    }
}