@extends('admin.layout')
@section('title' , 'Edit Categoroies')

@section('content')
   <div class="d-flex justify-content-between mb-3">
        <h6>Categories / Edit</h6>
        <a href="{{ route('cats.index') }}" class="btn btn-sm btn-info">Back</a>
   </div>

   @include('partials._errors')
   <form action="{{ route('cats.update' , $cat->id) }}" method="POST">
    @csrf
    @method('PUT')
       <div class="form-group">
           <label for="">Name</label>
           <input type="text" name="name" value="{{ $cat->name }}" class="form-control">
       </div>
       <button type="submit" class="btn btn-primary">Edit</button>
   </form>
@endsection
