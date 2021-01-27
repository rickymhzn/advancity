<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectInfo extends Model
{
    protected $fillable = ['subject_id','title','description'];
    public function subject()
    {
        return $this->belongsTo(\App\Models\Subject::class, 'subject_id');
    }
}
