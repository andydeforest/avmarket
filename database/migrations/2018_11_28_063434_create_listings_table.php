<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
			$table->increments('id');
            $table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			// address information
			$table->string('address');
			$table->string('city');
			$table->string('country');
			$table->string('state');
			$table->string('postal_code');
			// sale information
			$table->string('currency');
			$table->boolean('is_for_sale');
			$table->integer('price')->nullable();
			$table->boolean('is_for_lease');
			$table->integer('lease_price')->nullable();
			$table->boolean('is_for_charter');
			$table->integer('hourly_price')->nullable();
			$table->boolean('is_fractional_ownership');
			$table->integer('fractional_price')->nullable();
			$table->integer('fractional_percentage')->nullable();
			$table->boolean('is_featured')->default(false);
			// aircraft information
			$table->string('flight_rules')->nullable();
			$table->string('weight_units');
			$table->string('manufacturer');
			$table->string('model');
            $table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->string('serial_number');
			$table->string('registration');
			$table->integer('year');
			$table->string('condition');
			$table->string('airport_location');
			$table->integer('total_time');
			$table->integer('seat_count');
			$table->integer('engine_count');
			$table->string('engine')->nullable();
			$table->longText('description')->nullable();
			$table->longText('avionics_description')->nullable();
			$table->longText('additional_equipment_description')->nullable();
			$table->longText('interior_description')->nullable();
			$table->longText('exterior_description')->nullable();
			$table->longText('inspection_status')->nullable();
			$table->longText('mod_details')->nullable();
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
        Schema::dropIfExists('listings');
    }
}
