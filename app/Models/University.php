<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = ['country_id','name','logo','image','website'];
    
    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class, 'country_id');
    }
}
