@extends('admin.layout')
@section('title' , 'Edit Students')

@section('content')
   <div class="d-flex justify-content-between mb-3">
        <h6>Students / Add Course</h6>
        <a href="{{ route('students.index') }}" class="btn btn-sm btn-info">Back</a>
   </div>

   @include('partials._errors')
   <form action="{{ route('students.storeCourses' , $student_id) }}" method="POST">
    @csrf
    {{-- @method('PUT') --}}
    <input type="hidden" name="id" value="{{$student_id}}">
    <div class="form-group">
        <label for="">Courses</label>
        <select class="form-control" name="course_id" id="">
            <option class="disable">Select Course</option>
            @if ($courses)
            @foreach ($courses as $course)
            <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            @else
                Add Trainers First
            @endif
        </select>
       </div>

       <button type="submit" class="btn btn-primary">Add</button>
   </form>
@endsection
