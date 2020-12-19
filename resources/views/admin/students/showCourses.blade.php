@extends('admin.layout')
@section('title' , 'Show Courses')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Students / Show Courses</h6>
        <div>
            <a href="{{ route('students.addCourses' , $student_id) }}" class="btn btn-sm btn-primary">Add To Course</a>
            <a href="{{ route('students.index') }}" class="btn btn-sm btn-info">Back</a>
        </div>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <th scope="row"> {{ $loop->iteration }} </th>
                    <td> {{$course->name}} </td>
                    <td> {{$course->pivot->status}} </td>
                    <td>
                        @if($course->pivot->status !== 'approve')
                            <a href="{{ route('students.approveCourse' , [$student_id , $course->id ]) }}" class="btn btn-sm btn-info">Approve</a>
                        @endif

                        @if($course->pivot->status !== 'reject')
                            <a href="{{ route('students.rejectCourse' ,  [$student_id ,  $course->id]) }}" class="btn btn-sm btn-danger">Reject</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
