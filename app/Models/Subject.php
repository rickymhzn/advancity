<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name','description','image','thumbnail'];

    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }
}
