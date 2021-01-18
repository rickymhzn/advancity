<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['country','description','image','thumbnail'];

    public function countryinfos()
    {
        return $this->hasMany(\App\Models\CountryInfo::class, 'country_id');
    }
    public function universities()
    {
        return $this->hasMany(\App\Models\University::class, 'country_id');
    }
}
