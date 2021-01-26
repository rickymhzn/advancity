<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class University extends Model
{
    use Sluggable;
    protected $fillable = ['country_id','name','slug','logo','image','website'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class, 'country_id');
    }
  
}
