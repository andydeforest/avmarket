<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prop_details', function (Blueprint $table) {
			$table->increments('id');
            $table->integer('listing_id')->unsigned();
			$table->foreign('listing_id')->references('id')->on('listings');
			$table->string('overhaul_time');
			$table->string('overhaul_type');
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
        Schema::dropIfExists('prop_details');
    }
}
