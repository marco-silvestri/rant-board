<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_locations', function (Blueprint $table) {
            $table->id();
            $table->string('ip', 45);
            $table->text('referer')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('country_code',5)->nullable();
            $table->string('language')->nullable();
            $table->string('city')->nullable();
            $table->double('latitude', 9,6)->nullable();
            $table->double('longitude', 9,6)->nullable();
            $table->string('timezone')->nullable();
            $table->string('isp')->nullable();
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
        Schema::dropIfExists('geo_locations');
    }
}
