@extends('admin.layout')
@section('title' , 'Courses')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Courses</h6>
        <a href="{{ route('courses.create') }}" class="btn btn-sm btn-info">Add New</a>
    </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">img</th>
                <th scope="col">name</th>
                <th scope="col">Category</th>
                <th scope="col">Trainer</th>
                {{-- <th scope="col">Description</th> --}}
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            @if($courses)
            @foreach ($courses as $course)
                <tr>
                    <th scope="row"> {{ $loop->iteration }} </th>
                    <td><img src="{{ asset('uploads/courses/' . $course->img) }}" class="img-thumbnail" height="50px" width="50px" alt=""></td>
                     <td> {{ $course->name }}</td>
                     <td> {{ $course->cat->name }}</td>
                     <td> {{ $course->trainer->name }}</td>
                     {{-- <td> {{ substr($course->small_desc , 0 , 20) }}</td> --}}
                     <td> ${{ $course->price }}</td>
                     <td>
                         <a href="{{ route('courses.edit' , $course->id) }}" class="btn btn-sm btn-info">Edit</a>
                         <a href="{{ route('courses.delete' , $course->id) }}" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                </tr>
            @endforeach
            @else
                <h6>No Courses Yet</h6>
            @endif
            </tbody>
        </table>

            {!! $courses->links() !!}


@endsection
