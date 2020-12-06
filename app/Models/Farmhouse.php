<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmhouse extends Model
{	

    protected $table = 'farmhouses';
    
    /**
     * The Fillable that should be added by form requests
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class , 'owner_id' ,'id');
    }

    public function facilities()
    {
       return $this->belongsTo(Facility::class);
    }

    public function images()
    {
        return $this->morphMany('App\Models\Images', 'imageable');
    }

}
