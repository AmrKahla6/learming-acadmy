@extends('admin.layout')
@section('title' , 'Edit Trainers')

@section('content')
   <div class="d-flex justify-content-between mb-3">
        <h6>Trainers / Edit</h6>
        <a href="{{ route('trainers.index') }}" class="btn btn-sm btn-info">Back</a>
   </div>

   @include('partials._errors')
   <form action="{{ route('trainers.update' , $trainer->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $trainer->id }}" >
       <div class="form-group">
           <label for="">Name</label>
           <input type="text" name="name" value="{{ $trainer->name }}" class="form-control">
       </div>

       <div class="form-group">
        <label for="">Phone</label>
        <input type="text" name="phone" value="{{ $trainer->phone }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Specialization</label>
        <input type="text" name="spec" value="{{ $trainer->spec }}" class="form-control">
    </div>

    <img class="img-fluid img-thumbnail" height="100px" src="{{ asset('uploads/trainers/' . $trainer->img) }}" alt="">
    <div class="form-group">
        <input type="file" name="img" class="form-control-file" >
    </div>
       <button type="submit" class="btn btn-primary">Edit</button>
   </form>
@endsection
