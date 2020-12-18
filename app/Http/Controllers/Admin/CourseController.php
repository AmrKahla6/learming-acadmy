<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Course;
use App\Trainer;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['courses'] = Course::select('id' , 'name' , 'cat_id' , 'trainer_id' , 'price' , 'img')
        ->orderBy('id' , 'DESC')->paginate(5);

        return view('admin.courses.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['cats']     = Category::select('id' , 'name')->get();
        $data['trainers'] = Trainer::select('id' , 'name')->get();
        return view('admin.courses.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|min:2|max:191',
            'small_desc'  => 'required|string|max:191',
            'desc'        => 'required|string|',
            'price'       => 'required|integer',
            'cat_id'      => 'required|exists:categories,id',
            'trainer_id'  => 'required|exists:trainers,id',
            'img'         => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $new_img = $data['img']->hashName();
        Image::make($data['img'])->resize(970, 520)->save(public_path('uploads/courses/' . $new_img));
        $data['img'] = $new_img;
        Course::create($data);
        return redirect(route('courses.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['course'] = Course::findOrFail($id);
        $data['cats']     = Category::select('id' , 'name')->get();
        $data['trainers'] = Trainer::select('id' , 'name')->get();
        return view('admin.courses.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'        => 'required|string|min:2|max:191',
            'small_desc'  => 'required|string|max:191',
            'desc'        => 'required|string|',
            'price'       => 'required|integer',
            'cat_id'      => 'required|exists:categories,id',
            'trainer_id'  => 'required|exists:trainers,id',
            'img'         => 'nullable|image|mimes:png,jpg,jpeg',
        ]);


        $old_img = Course::find($request->id)->img;
        if($request->hasFile('img'))
        {
            Storage::disk('uploads')->delete('courses/' . $old_img);

            $new_img = $data['img']->hashName();
            Image::make($data['img'])->resize(970, 520)->save(public_path('uploads/courses/' . $new_img));
            $data['img'] = $new_img;
        }
        else
        {
            $data['img'] = $old_img;
        }

        Course::findOrFail($id)->update($data);
        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $img = Course::find($id)->img;

        Storage::disk('uploads')->delete('courses/' . $img);

        Course::findOrFail($id)->delete();

        return redirect(route('courses.index'));
    }
}
