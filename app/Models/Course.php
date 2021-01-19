<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name','description','image'];
    
    public function subjects()
    {
        return $this->hasMany(\App\Models\Subject::class, 'course_id');
    }
}
