<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Location')->unique();
            $table->timestamps();
        });

        Schema::create('video_location', function (Blueprint $table) {
            
            $table->integer('video_id');
            $table->integer('location_id');
            $table->primary(['video_id', 'location_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');

        Schema::dropIfExists('video_location');
    }
}
