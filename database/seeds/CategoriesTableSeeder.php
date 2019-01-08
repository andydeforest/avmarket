<?php

use Illuminate\Database\Seeder;
use App\Data\Category;

class CategoriesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		Category::create(['name' => 'Jet Aircraft', 'uri' => 'jets']);
		Category::create(['name' => 'Turboprop Aircraft', 'uri' => 'turboprops']);
		Category::create(['name' => 'Piston Single Aircraft', 'uri' => 'piston-single']);
		Category::create(['name' => 'Piston Twin Aircraft', 'uri' => 'piston-twin']);
		Category::create(['name' => 'Light Sport Aircraft', 'uri' => 'light-sport']);
		Category::create(['name' => 'Experimental/Homebuilt Aircraft', 'uri' => 'homebuilt']);
		Category::create(['name' => 'Piston Agricultural Aircraft', 'uri' => 'piston-agriculture']);
		Category::create(['name' => 'Turbine Agricultural Aircraft', 'uri' => 'turbine-agriculture']);
		Category::create(['name' => 'Piston Military Aircraft', 'uri' => 'piston-military']);
		Category::create(['name' => 'Turbine Military Aircraft', 'uri' => 'turbine-military']);
		Category::create(['name' => 'Piston Amphibious', 'uri' => 'piston-amphibious']);
		Category::create(['name' => 'Turbine Amphibious', 'uri' => 'turbine-amphibious']);
		Category::create(['name' => 'Piston Floatplanes', 'uri' => 'piston-float']);
		Category::create(['name' => 'Turbine Floatplanes', 'uri' => 'turbine-float']);
		Category::create(['name' => 'Piston Helicopters', 'uri' => 'piston-helicopter']);
		Category::create(['name' => 'Turbine Helicopters', 'uri' => 'turbine-helicopter']);
		Category::create(['name' => 'De-Ice Equipment', 'uri' => 'deice-equipment']);
		Category::create(['name' => 'Fire Trucks / Fire Equipment', 'uri' => 'fire-equipment']);
		Category::create(['name' => 'Fuel Tanks / Fuel Storage', 'uri' => 'fuel-equipment']);
		Category::create(['name' => 'Fuel Trucks', 'uri' => 'fuel-trucks']);
		Category::create(['name' => 'Ground Power Units', 'uri' => 'gpu']);
		Category::create(['name' => 'Hangars', 'uri' => 'hangars']);
		Category::create(['name' => 'Tow Bars', 'uri' => 'tow-bars']);
		Category::create(['name' => 'Tugs', 'uri' => 'tugs']);

    }
}
