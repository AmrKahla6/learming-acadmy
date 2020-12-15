<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Trainer;
use App\Student;

class Course extends Model
{
    protected $guarded=[];

     /**
     * Relation between Category & Course
     * One To Meny Relationship
     */

    public function cat()
    {
        return $this->belongsTo(Category::class);
    }// end relation between Category & Course

     /**
     * Relation between Trainer & Course
     * One To Meny Relationship
     */

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }// end relation between Trainer & Course

     /**
     * Relation between Student & Course
     * Meny To Meny Relationship
     */

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }// end relation between Student & Course
}
