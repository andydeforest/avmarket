<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$u = new User;
		$u->first_name = 'Andrew';
		$u->last_name = 'De Forest';
		$u->email = 'andydeforest@gmail.com';
		$u->password = bcrypt('andrew977');
		$u->save();
    }
}
