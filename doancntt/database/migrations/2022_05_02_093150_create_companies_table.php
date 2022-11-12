<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo', 255);
            $table->string('favicon', 255);
            $table->string('name', 255);
            $table->string('email', 255)->unique();
            $table->char('hotline', 15);
            $table->char('advise_phone', 15);
            $table->longText('map', 255);
            $table->string('map_url', 255);
            $table->longText('facebook', 255);
            $table->string('facebook_url', 255);
            $table->string('google_url', 255);
            $table->string('twitter_url', 255);
            $table->string('youtube_url', 255);
            $table->text('shipping_commit', 255);
            $table->string('bank_account', 255);
            $table->string('website', 150);
            $table->string('housenumber_street', 355);

            $table->bigInteger('ward_id')->unsigned();
            $table->foreign('ward_id')
                ->references('id')
                ->on('wards')
                ->onDelete('cascade');

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
        Schema::dropIfExists('companies');
    }
}