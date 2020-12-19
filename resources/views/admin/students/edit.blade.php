@extends('admin.layout')
@section('title' , 'Edit Students')

@section('content')
   <div class="d-flex justify-content-between mb-3">
        <h6>Students / Edit</h6>
        <a href="{{ route('students.index') }}" class="btn btn-sm btn-info">Back</a>
   </div>

   @include('partials._errors')
   <form action="{{ route('students.update' , $student->id) }}" method="POST">
    @csrf
    @method('PUT')
       <div class="form-group">
           <label for="">Name</label>
           <input type="text" name="name" value="{{ $student->name }}" class="form-control">
       </div>

       <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" value="{{ $student->email }}" class="form-control">
       </div>

       <div class="form-group">
        <label for="">Specialty</label>
        <input type="text" name="spec" value="{{ $student->spec }}" class="form-control">
       </div>

       <button type="submit" class="btn btn-primary">Edit</button>
   </form>
@endsection
