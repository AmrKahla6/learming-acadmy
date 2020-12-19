<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = Student::select('id' , 'name' , 'email' , 'spec')->orderBy('id' , 'DESC')->paginate(10);
        return view('admin.students.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
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
            'name'  => 'nullable|string|max:191',
            'email' => 'required|email|unique:students',
            'spec'  => 'nullable|max:191'
        ]);

        Student::create($data);
        return redirect(route('students.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['student'] = Student::findOrFail($id);
        return view('admin.students.edit')->with($data);
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
            'name'  => 'nullable|string|max:191',
            'email' => 'required|email|unique:students',
            'spec'  => 'nullable|max:191'
        ]);

        Student::findOrFail($id)->update($request->all());
        return redirect(route('students.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Student::findOrFail($id)->delete();

        return redirect(route('students.index'));
    }

    public function showCourses($id)
    {
        $data['courses'] = Student::findOrFail($id)->courses;
        $data['student_id'] = $id;
        return view('admin.students.showCourses')->with($data);
    }

    public function approveCourses($id , $c_id)
    {
        DB::table('course_student')->where('student_id' , $id)->where('course_id' , $c_id)->update([
            'status' => 'approve'
        ]);

        return back();
    }

    public function rejectCourses($id , $c_id)
    {
        DB::table('course_student')->where('student_id' , $id)->where('course_id' , $c_id)->update([
            'status' => 'reject'
        ]);

        return back();
    }

    public function addCourses($id)
    {
        $data['student_id'] = $id;

        $data['courses'] = Course::select('id' , 'name')->orderBy('id' , 'DESC')->get();

        return view('admin.students.addCourse')->with($data);
    }

    public function storeCourses($id , Request $request)
    {
        $data = $request->validate([
            'course_id' => 'required|exists:courses,id'
        ]);

        DB::table('course_student')->insert([
            'student_id' => $id,
            'course_id' => $data['course_id']
        ]);

        return redirect(route('students.showCourses' , $id));
    }
}
