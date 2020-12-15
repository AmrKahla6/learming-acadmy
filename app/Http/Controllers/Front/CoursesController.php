<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Course;

class CoursesController extends Controller
{
    public function cat($id)
    {
        $data['cat']      = Category::findOrFail($id);
        $data['courses']  = Course::where('cat_id' , $id)->paginate(6);
        return view('front.courses.cat')->with($data);
    }
}
