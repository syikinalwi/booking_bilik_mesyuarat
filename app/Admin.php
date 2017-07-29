<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
     public function department(){
    	// "belongto" means that all data in department was call by id, but if the name in main table used for store all data named did not use i.e department_id.. we needs to define as the column name in table i.e department_name
		return $this->belongsTo('App\department','department_name');
	}

	 public function room(){
		return $this->belongsTo('App\room','title');
	}

	 public function stuff(){
		return $this->belongsTo('App\stuff','stuff_name');
	}
}
