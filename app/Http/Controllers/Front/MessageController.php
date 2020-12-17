<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Newsletter;
use App\Message;
use App\Student;

class MessageController extends Controller
{
    public function Newsletter(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:191'
        ]);

        Newsletter::create($data);

        // session()->flash('success','Email Sent Successfuly');
        session()->flash('success','Email Sent Successfuly');
        return back();
    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:191',
            'email'   => 'required|email|max:191',
            'subject' => 'nullable|string|',
            'message' => 'required|min:4',
        ]);

        Message::create($data);
        session()->flash('success','Message Sent Successfuly');
        return back();
    }


public function enroll(Request $request)
{
    $data = $request->validate([
        'name'      => 'nullable|string|max:191',
        'email'     => 'required|email|max:191',
        'spec'      => 'nullable|string',
        'course_id' => 'required|exists:courses,id',
    ]);

    $student = Student::create([
        'name'  => $data['name'],
        'email' => $data['email'],
        'spec'  => $data['spec'],
    ]);

    $student_id = $student->id;

    DB::table('course_student')->insert([
        'course_id'  => $data['course_id'],
        'student_id' => $student_id,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    session()->flash('success','Student Enroll Successfuly');
    return back();
}
}
