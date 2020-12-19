@extends('admin.layout')
@section('title' , 'Students')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Students</h6>
        <a href="{{ route('students.create') }}" class="btn btn-sm btn-info">Add New</a>
    </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Specialty</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            @if($students)
            @foreach ($students as $student)
                <tr>
                    <th scope="row"> {{ $loop->iteration }} </th>
                     <td>{{ $student->name }}</td>
                     <td>{{ $student->email }}</td>
                     <td>{{ $student->spec }}</td>
                     <td>
                         <a href="{{ route('students.edit' , $student->id) }}" class="btn btn-sm btn-info">Edit</a>
                         <a href="{{ route('students.delete' , $student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                </tr>
            @endforeach
            @else
                <h6>No Students Yet</h6>
            @endif
            </tbody>
          </table>

          {!! $students->links() !!}

@endsection
