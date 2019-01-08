<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model {
	
	protected $table = 'aircraft';
	
	protected $fillable = ['description', 'designator', 'engine_count', 'engine_type',	'manufacturer',	'model', 'weight_class'];


}
