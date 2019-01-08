<?php

use Illuminate\Database\Seeder;
use App\Data\Aircraft;

class AircraftTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		if(($handle = fopen(base_path().DIRECTORY_SEPARATOR."database".DIRECTORY_SEPARATOR."seeds".DIRECTORY_SEPARATOR."aircraft_types.csv", "r")) !== FALSE) {
			while(($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$a = Aircraft::create([
					'description' => $data[0], 
					'designator' => $data[2], 
					'engine_count' => intval($data[3]), 
					'engine_type' => $data[4] ,	
					'manufacturer' => $data[5],	
					'model' => $data[6], 
					'weight_class' => $data[7]
				]);
			}
		}
    }
}
