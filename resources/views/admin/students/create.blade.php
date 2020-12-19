@extends('admin.layout')
@section('title' , 'New Student')

@section('content')
   <div class="d-flex justify-content-between mb-3">
        <h6>Students / Add New</h6>
        <a href="{{ route('students.index') }}" class="btn btn-sm btn-info">Back</a>
   </div>

   @include('partials._errors')
   <form action="{{ route('students.store') }}" method="POST">
    @csrf
       <div class="form-group">
           <label for="">Name</label>
           <input type="text" name="name" class="form-control" placeholder="Add Student Name">
       </div>

       <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Add Student Email">
       </div>

       <div class="form-group">
        <label for="">specialty</label>
        <input type="text" name="spec" class="form-control" placeholder="Add Student specialty">
      </div>
       <button type="submit" class="btn btn-primary">Add</button>
   </form>
@endsection
