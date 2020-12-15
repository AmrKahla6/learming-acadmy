<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Student extends Model
{
    protected $guarded=[];

     /**
     * Relation between Student & Course
     * Meny To Meny Relationship
     */

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }// end relation between Student & Course
}
