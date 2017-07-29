<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stuff extends Model
{
   public function admin() {
    	return $this->hasMany('App\admin','stuff.name');
    }
    
}
