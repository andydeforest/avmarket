<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExteriorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exterior_details', function (Blueprint $table) {
			$table->increments('id');
            $table->integer('listing_id')->unsigned();
			$table->foreign('listing_id')->references('id')->on('listings');
			$table->string('year_painted');
			$table->longText('description');
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
        Schema::dropIfExists('exterior_details');
    }
}
