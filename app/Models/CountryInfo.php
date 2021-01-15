<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryInfo extends Model
{
    protected $fillable = ['title','image','description'];

    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class, 'country_id');
    }
}
