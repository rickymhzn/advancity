<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $fillable = ['country_id','university_id','title','description'];
    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class, 'country_id');
    }
    public function university()
    {
        return $this->belongsTo(\App\Models\University::class, 'university_id');
    }
}
