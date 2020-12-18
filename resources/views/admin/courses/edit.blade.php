@extends('admin.layout')
@section('title' , 'Edit Trainer')

@section('content')
   <div class="d-flex justify-content-between mb-3">
        <h6>Courses / Edit</h6>
        <a href="{{ route('courses.index') }}" class="btn btn-sm btn-info">Back</a>
   </div>

   @include('partials._errors')
   <form action="{{ route('courses.update' ,$course->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
       <input type="hidden" name="id" value="{{ $course->id }}" >
       <div class="form-group">
           <label for="">Name</label>
           <input type="text" name="name" class="form-control" value = "{{ $course->name }}">
       </div>

       <div class="form-group">
        <label for="">Small Description</label>
        <input type="text" name="small_desc" class="form-control" value = "{{ $course->small_desc }}">
       </div>

       <div class="form-group">
        <label for="">Description</label>
        <input type="text" name="desc" class="form-control" value = "{{ $course->desc }}">
      </div>

      <div class="form-group">
        <label for="">Price</label>
        <input type="number" name="price" class="form-control" value = "{{ $course->price }}">
      </div>

      <div class="form-group">
        <label for="">Categories</label>
        <select class="form-control" name="cat_id" id="">
            <option class="disable">Select Category</option>
            @if ($cats)
                @foreach ($cats as $cat)
                    <option value="{{ $cat->id }}" @if ($course->cat_id == $cat->id) selected @endif>{{ $cat->name }}</option>
                @endforeach
            @else
                Add Categories First
            @endif
        </select>
      </div>

      <div class="form-group">
        <label for="">Trainers</label>
        <select class="form-control" name="trainer_id" id="">
            <option class="disable">Select Trainer</option>
            @if ($trainers)
                @foreach ($trainers as $trainer)
                    <option value="{{ $trainer->id }}" @if ($course->trainer_id == $trainer->id) selected @endif>{{ $trainer->name }}</option>
                @endforeach
            @else
                Add Trainers First
            @endif
        </select>
      </div>

      <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="img" class="form-control-file">
       </div>
       <button type="submit" class="btn btn-primary">Add</button>
   </form>
@endsection
