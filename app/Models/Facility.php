<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    //


    public function farmhouses(){
    	return $this->belongsToMany(Farmhouse::class);
    }
}
