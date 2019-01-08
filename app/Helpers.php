<?php

namespace App;

use Illuminate\Http\Request;
use App\Market\Listing;

class Helpers {

	public static function randomFeatured() {
		$featured = Listing::where('is_featured', true)->get();
		$count = count($featured);
		if($count === 0) {
			return null;
		}
		return $featured[rand(0, $count - 1)];
	}

}
