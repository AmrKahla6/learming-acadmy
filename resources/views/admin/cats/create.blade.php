@extends('admin.layout')
@section('title' , 'New Categoroies')

@section('content')
   <div class="d-flex justify-content-between mb-3">
        <h6>Categories / Add New</h6>
        <a href="{{ route('cats.index') }}" class="btn btn-sm btn-info">Back</a>
   </div>

   @include('partials._errors')
   <form action="{{ route('cats.store') }}" method="POST">
    @csrf
       <div class="form-group">
           <label for="">Name</label>
           <input type="text" name="name" class="form-control">
       </div>
       <button type="submit" class="btn btn-primary">Add</button>
   </form>
@endsection
