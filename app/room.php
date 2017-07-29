<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
  public function admin() {
    	return $this->hasMany('App\admin','title');
    }
}
