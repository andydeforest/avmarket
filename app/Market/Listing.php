<?php

namespace App\Market;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model {
	
	protected $table = 'listings';

	public function category() {
		return $this->hasOne('App\Data\Category', 'id', 'category_id');
	}

	public function images() {
		return $this->hasMany('App\Market\Image', 'listing_id');
	}

	public function engine_details() {
		return $this->hasMany('App\Market\EngineDetail', 'listing_id');
	}

	public function prop_details() {
		return $this->hasMany('App\Market\PropDetail', 'listing_id');
	}

	public function truncated_description($max_char = 300) {
		if(strlen($this->description) <= $max_char) {
			return $this->description;
		}
		$words = explode(' ', substr($this->description, 0, $max_char));
		// remove last word
		array_pop($words);
		return implode(' ', $words).'...';
	}

	public function get_primary_image_location() {
		$images = $this->images;
		foreach($images as $i) {
			if($i->is_primary) {
				return $i->location;
			}
		}
		if(count($images) > 0) {
			return $images[0]->location;
		}
		return 'images/placeholder.jpg';
	}

}
