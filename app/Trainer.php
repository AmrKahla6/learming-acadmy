<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Trainer extends Model
{
   protected $guarded=[];

    /**
     * Relation between Trainer & Course
     * One To Meny Relationship
     */

    public function courses()
    {
        return $this->hasMany(Course::class);
    }// end relation between Trainer & Course
}
