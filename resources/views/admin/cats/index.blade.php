@extends('admin.layout')
@section('title' , 'Categoroies')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Categories</h6>
        <a href="{{ route('cats.create') }}" class="btn btn-sm btn-info">Add New</a>
    </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            @if($cats)
            @foreach ($cats as $cat)
                <tr>
                    <th scope="row"> {{ $loop->iteration }} </th>
                     <td>{{ $cat->name }}</td>
                     <td>
                         <a href="{{ route('cats.edit' , $cat->id) }}" class="btn btn-sm btn-info">Edit</a>
                         <a href="{{ route('cat.delete' , $cat->id) }}" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                </tr>
            @endforeach
            @else
                <h6>No Categories Yet</h6>
            @endif
            </tbody>
          </table>

@endsection
