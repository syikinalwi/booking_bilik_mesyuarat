<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public function bookingroom() {
    	return $this->hasMany('App\bookingroom','department.name');
    }

    public function admin() {
    	return $this->hasMany('App\admin','department.name');
    }
}
