@extends('admin.layout')
@section('title' , 'Trainers')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Trainers</h6>
        <a href="{{ route('trainers.create') }}" class="btn btn-sm btn-info">Add New</a>
    </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">img</th>
                <th scope="col">name</th>
                <th scope="col">phone</th>
                <th scope="col">Specialization</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            @if($trainers)
            @foreach ($trainers as $trainer)
                <tr>
                    <th scope="row"> {{ $loop->iteration }} </th>
                    <td><img src="{{ asset('uploads/trainers/' . $trainer->img) }}" class="img-thumbnail" height="50px" width="50px" alt=""></td>
                     <td>{{ $trainer->name }}</td>
                     <td>@if ($trainer->phone) {{ $trainer->phone }}  @else Not Exist @endif</td>
                     <td>@if ($trainer->spec) {{ $trainer->spec }} @else Not Exist @endif</td>
                     <td>
                         <a href="{{ route('trainers.edit' , $trainer->id) }}" class="btn btn-sm btn-info">Edit</a>
                         <a href="{{ route('trainer.delete' , $trainer->id) }}" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                </tr>
            @endforeach
            @else
                <h6>No Trainers Yet</h6>
            @endif
            </tbody>
          </table>

@endsection
