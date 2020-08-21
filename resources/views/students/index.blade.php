@extends('layouts.app')

@section('title')
    Naivasha TVC | All Students
@endsection

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header d-flex">
                    <h2 class="">Students </h2>
                </div>

                <div class="card-body">
                    @include('layouts.message')
                  <table class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>ID No</th>
                              <th>Email</th>
                              <th>Course</th>
                              <th>Guardian Name</th>
                              <!-- <th>Action</th> -->
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($students as $student)
                                <tr>
                                    <td><a href="{{ route('students.show', $student)}}">{{ $student->id }}</a></td>
                                    <td><a href="{{ route('students.show', $student)}}">{{ $student->name }}</a></td>
                                    <td><a href="{{ route('students.show', $student)}}">{{ $student->idNumber }}</a></td>
                                    <td><a href="{{ route('students.show', $student)}}">{{ $student->email }}</a></td>
                                    <td><a href="{{ route('students.show', $student)}}">{{ $student->course }}</a></td>
                                    <td><a href="{{ route('students.show', $student)}}">{{ $student->gname }}</a></td>
                                </tr>
                          @endforeach
                      </tbody>
                  </table>

                    <div class="d-flex justify-content-center">
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection