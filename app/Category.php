<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Category extends Model
{
    protected $guarded=[];

    /**
     * Relation between Category & Course
     * One To Meny Relationship
     */

     public function courses()
     {
         return $this->hasMany(Course::class);
     }// end relation between Category & Course
}
