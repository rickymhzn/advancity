<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Subject extends Model
{
    use Sluggable;
    protected $fillable = ['name','slug','description','image','thumbnail'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }
    public function subjectinfos()
    {
        return $this->hasMany(\App\Models\SubjectInfo::class, 'subject_id');
    }
}
