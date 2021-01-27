<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Country extends Model
{
    use Sluggable;
    protected $fillable = ['country','slug','description','image','thumbnail','scholarship_detail'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'country'
            ]
        ];
    }
    public function countryinfos()
    {
        return $this->hasMany(\App\Models\CountryInfo::class, 'country_id');
    }
    public function universities()
    {
        return $this->hasMany(\App\Models\University::class, 'country_id');
    }
    public function scholarships()
    {
        return $this->hasMany(\App\Models\Scholarship::class, 'country_id');
    }
}
