@extends('admin.layout')
@section('title' , 'New Trainer')

@section('content')
   <div class="d-flex justify-content-between mb-3">
        <h6>Trainers / Add New</h6>
        <a href="{{ route('trainers.index') }}" class="btn btn-sm btn-info">Back</a>
   </div>

   @include('partials._errors')
   <form action="{{ route('trainers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
       <div class="form-group">
           <label for="">Name</label>
           <input type="text" name="name" class="form-control" placeholder="Trainer Name">
       </div>

       <div class="form-group">
        <label for="">Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="Trainer Phone">
       </div>

       <div class="form-group">
        <label for="">Specialization</label>
        <input type="text" name="spec" class="form-control" placeholder="Trainer Specialization">
      </div>

      <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="img" class="form-control-file">
       </div>
       <button type="submit" class="btn btn-primary">Add</button>
   </form>
@endsection
