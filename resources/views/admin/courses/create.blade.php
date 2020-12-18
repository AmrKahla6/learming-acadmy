@extends('admin.layout')
@section('title' , 'New Trainer')

@section('content')
   <div class="d-flex justify-content-between mb-3">
        <h6>Courses / Add New</h6>
        <a href="{{ route('courses.index') }}" class="btn btn-sm btn-info">Back</a>
   </div>

   @include('partials._errors')
   <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
       <div class="form-group">
           <label for="">Name</label>
           <input type="text" name="name" class="form-control" placeholder="Course Name">
       </div>

       <div class="form-group">
        <label for="">Small Description</label>
        <input type="text" name="small_desc" class="form-control" placeholder="Write Small Description For Course">
       </div>

       <div class="form-group">
        <label for="">Description</label>
        <input type="text" name="desc" class="form-control" placeholder="Write Description For Course">
      </div>

      <div class="form-group">
        <label for="">Price</label>
        <input type="number" name="price" class="form-control" placeholder="Course Price">
      </div>

      <div class="form-group">
        <label for="">Categories</label>
        <select class="form-control" name="cat_id" id="">
            <option class="disable">Select Category</option>
            @if ($cats)
                @foreach ($cats as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
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
                    <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
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
