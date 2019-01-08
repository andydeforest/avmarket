<?php

use Illuminate\Database\Seeder;
use App\Market\Listing;
use App\Market\Image;
use App\Market\EngineDetail;
use App\Market\PropDetail;
use App\Data\Category;

class ListingTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		$faker = Faker\Factory::create();

		for($x = 0; $x < 200; $x++) {
			$year = rand(1965, 2019);

			$pist_single = Category::where('name', 'Piston Single Aircraft')->first();

			$cond = $year === 2019 ? 'New' : 'Used';

			$airport = 'K';
			$airport .= chr(rand(65,90));
			$airport .= chr(rand(65,90));
			$airport .= chr(rand(65,90));

			$aircraft = [
				[
					'manufacturer' => 'Cessna',
					'model' => 'C172M Skyhawk',
					'category_id' => $pist_single->id,
					'serial_number' => rand(1250, 12350),
					'registration' => strtoupper('N'.rand(1, 999).substr(md5(microtime()),rand(0,26),1).chr(rand(65,90))),
					'year' => rand(1976, 1978),
					'condition' => 'Used',
					'airport_location' => $airport,
					'total_time' => (2019 - 1977) * rand(50, 200),
					'seat_count' => 4,
					'engine' => 'Lycoming O-360-D2J',
					'avionics_description' => $faker->paragraph,
					'additional_equipment' => rand(1, 3) === 2 ? $faker->paragraph : null,
					'inspection_status' => rand(1, 3) === 2 ? 'Annual completed '.rand(1, 12).'/2018' : null,
					'base_price' => 75000,
					'image' => 'images/aircraft/C172M.jpg',
					'engine_count' => 1
				],
				[
					'manufacturer' => 'Cessna',
					'model' => 'C172N Skyhawk',
					'category_id' => $pist_single->id,
					'serial_number' => rand(1250, 12350),
					'registration' => strtoupper('N'.rand(1, 999).substr(md5(microtime()),rand(0,26),1).chr(rand(65,90))),
					'year' => rand(1977, 1980),
					'condition' => 'Used',
					'airport_location' => $airport,
					'total_time' => (2019 - 1979) * rand(50, 200),
					'seat_count' => 4,
					'engine' => 'Lycoming O-360-D2J',
					'avionics_description' => $faker->paragraph,
					'additional_equipment' => rand(1, 3) === 2 ? $faker->paragraph : null,
					'inspection_status' => rand(1, 3) === 2 ? 'Annual completed '.rand(1, 12).'/2018' : null,
					'base_price' => 80000,
					'image' => 'images/aircraft/C172N.jpg',
					'engine_count' => 1
				],
				[
					'manufacturer' => 'Cessna',
					'model' => 'C172S',
					'category_id' => $pist_single->id,
					'serial_number' => rand(1250, 12350),
					'registration' => strtoupper('N'.rand(1, 999).substr(md5(microtime()),rand(0,26),1).chr(rand(65,90))),
					'year' => rand(1998, 2019),
					'condition' => 'Used',
					'airport_location' => $airport,
					'total_time' => (2019 - rand(1998, 2019)) * rand(50, 200),
					'seat_count' => 4,
					'engine' => 'Lycoming IO-360-L2A',
					'avionics_description' => $faker->paragraph,
					'additional_equipment' => rand(1, 3) === 2 ? $faker->paragraph : null,
					'inspection_status' => rand(1, 3) === 2 ? 'Annual completed '.rand(1, 12).'/2018' : null,
					'base_price' => 120000,
					'image' => 'images/aircraft/C172S.jpg',
					'engine_count' => 1
				],
				[
					'manufacturer' => 'Piper',
					'model' => 'PA-28R-201 Arrow III',
					'category_id' => $pist_single->id,
					'serial_number' => rand(1250, 12350),
					'registration' => strtoupper('N'.rand(1, 999).substr(md5(microtime()),rand(0,26),1).chr(rand(65,90))),
					'year' => rand(1976, 1984),
					'condition' => 'Used',
					'airport_location' => $airport,
					'total_time' => (2019 - rand(1976, 1984)) * rand(50, 200),
					'seat_count' => 4,
					'engine' => 'Lycoming IO-360-C1C6',
					'avionics_description' => $faker->paragraph,
					'additional_equipment' => rand(1, 3) === 2 ? $faker->paragraph : null,
					'inspection_status' => rand(1, 3) === 2 ? 'Annual completed '.rand(1, 12).'/2018' : null,
					'base_price' => 65000,
					'image' => 'images/aircraft/Arrow.jpg',
					'engine_count' => 1

				],
				[
					'manufacturer' => 'Mooney',
					'model' => 'M20J 201',
					'category_id' => $pist_single->id,
					'serial_number' => rand(1250, 12350),
					'registration' => strtoupper('N'.rand(1, 999).substr(md5(microtime()),rand(0,26),1).chr(rand(65,90))),
					'year' => rand(1977, 1987),
					'condition' => 'Used',
					'airport_location' => $airport,
					'total_time' => (2019 - rand(1977, 1987)) * rand(50, 200),
					'seat_count' => 4,
					'engine' => 'Lycoming IO-360-A6B6',
					'avionics_description' => $faker->paragraph,
					'additional_equipment' => rand(1, 3) === 2 ? $faker->paragraph : null,
					'inspection_status' => rand(1, 3) === 2 ? 'Annual completed '.rand(1, 12).'/2018' : null,
					'base_price' => 75000,
					'image' => 'images/aircraft/M20J.jpg',
					'engine_count' => 1
				],
				[
					'manufacturer' => 'Mooney',
					'model' => 'M20K 231',
					'category_id' => $pist_single->id,
					'serial_number' => rand(1250, 12350),
					'registration' => strtoupper('N'.rand(1, 999).substr(md5(microtime()),rand(0,26),1).chr(rand(65,90))),
					'year' => rand(1979, 1985),
					'condition' => 'Used',
					'airport_location' => $airport,
					'total_time' => (2019 - rand(1979, 1985)) * rand(50, 200),
					'seat_count' => 4,
					'engine' => 'Lycoming TSIO-360-A6B6',
					'avionics_description' => $faker->paragraph,
					'additional_equipment' => rand(1, 3) === 2 ? $faker->paragraph : null,
					'inspection_status' => rand(1, 3) === 2 ? 'Annual completed '.rand(1, 12).'/2018' : null,
					'base_price' => 85000,
					'image' => 'images/aircraft/M20K.jpg',
					'engine_count' => 1
				],
			];


			$ac = $aircraft[rand(0, count($aircraft) - 1)];

			$val = $ac['base_price'] + ($ac['base_price'] * (rand(3000, 25000) / 100000));


			$listing = new Listing;
			$listing->user_id = 1;
			$listing->address = $faker->streetAddress;
			$listing->city = $faker->city;
			$listing->country = 'United States';
			$listing->state = $faker->stateAbbr;
			$listing->postal_code = $faker->postcode;
			$listing->currency = 'USD';
			$listing->is_for_sale = true;
			$listing->price = $val * 100;
			$listing->is_for_lease = false;
			$listing->lease_price = null;
			$listing->is_for_charter = false;
			$listing->hourly_price = null;
			$listing->is_fractional_ownership = false;
			$listing->fractional_price = null;
			$listing->fractional_percentage = null;
			$listing->is_featured = rand(1, 5) === 3;
			$listing->flight_rules = rand(1,5) > 2 ? 'IFR' : 'VFR';
			$listing->weight_units = 'LBS';
			$listing->manufacturer = $ac['manufacturer'];
			$listing->model = $ac['model'];
			$listing->category_id = $ac['category_id'];
			$listing->serial_number = $ac['serial_number'];
			$listing->registration = $ac['registration'];
			$listing->year = $ac['year'];
			$listing->condition = $ac['condition'];
			$listing->airport_location = $ac['airport_location'];
			$listing->total_time = (2019 - $ac['year']) * rand(50, 200);
			$listing->seat_count = $ac['seat_count'];
			$listing->engine = $ac['engine'];
			$listing->engine_count = $ac['engine_count'];
			$listing->description = $faker->paragraphs(5, true);
			$listing->avionics_description = $ac['avionics_description'];
			$listing->additional_equipment_description = $ac['additional_equipment'];

			$listing->interior_description = rand(1, 3) === 3 ? $faker->paragraphs(rand(1, 3), true) : null;
			$listing->exterior_description = rand(1, 3) === 3 ? $faker->paragraphs(rand(1, 3), true) : null;
			$listing->mod_details = rand(1, 3) === 2 ? $faker->paragraphs(rand(1, 3), true) : null;
			$listing->inspection_status = $ac['inspection_status'];
			$listing->save();

			$i = new Image;
			$i->listing_id = $listing->id;
			$i->is_primary = true;
			$i->location = $ac['image'];
			$i->save();

			for($y = 0; $y < $ac['engine_count']; $y++) {
				// create prop and engine times for each engine
				$ed = new EngineDetail;
				$ed->listing_id = $listing->id;
				$ed->overhaul_time = rand(1, 2000);
				$ed->overhaul_type = rand(1, 2) === 2 ? 'SMOH' : 'SFRM';
				$ed->save();
				$pd = new PropDetail;
				$pd->listing_id = $listing->id;
				$pd->overhaul_time = rand(1, 2000);
				$pd->overhaul_type = rand(1, 2) === 2 ? 'SMOH' : 'SFRM';
				$pd->save();
			}

		}
    }
}
