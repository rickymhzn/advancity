<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Course extends Model
{
    use Sluggable;
    protected $fillable = ['name','slug','description','image'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function subjects()
    {
        return $this->hasMany(\App\Models\Subject::class, 'course_id');
    }

}
