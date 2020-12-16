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

    public function show($id , $c_id)
    {
        // $data['course']  = Course::where('id' , $c_id)->first();
        $data['course']  = Course::findOrFail($c_id);
        $data['cat']      = Category::findOrFail($id);
        return view('front.courses.show')->with($data);

    }
}
