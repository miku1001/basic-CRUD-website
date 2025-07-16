@extends('layouts.frontend')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        @session('status')
        <div class="alert alert-success">
          {{session('status')}}
        </div>
        @endsession
        <div class="card">
          <div class="card-header">
            <h4>Student List
              <a href="{{url('category/create')}}" class="btn btn-primary float-end">Add Student</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-stiped table-bordered">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Grade</th>
                  <th>Remarks</th>
                  <th>Created Time</th>
                  <th>Updated Time</th>
                  <th>Action</th>
                </tr>
                <tbody>
                  @foreach ($categories as $category)
                  <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->grades}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                    <td>
                      <a href="{{route('category.edit', $category->id)}}" class="btn btn-success">Edit</a>
                      <a href="{{route('category.show', $category->id)}}" class="btn btn-info">Show</a>
                  </tr>
                  @endforeach
                </tbody>
              </thead>
            </table>
            {{$categories->links()}}
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>

@endsection