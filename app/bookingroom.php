<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookingroom extends Model
{
    public function department(){
		return $this->belongsTo('App\department');
	}

	public function room(){
		return $this->belongsTo('App\room');
	}
}
