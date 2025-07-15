@extends('layouts.frontend')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Show Student Student
              <a href="{{url('/')}}" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="">Name</label>
              <p>
                {{$category->name}}
              </p>
            </div>
            <div class="mb-3">
              <label for="">Remarks</label>
              <p>
                {{$category->description}}
              </p>
              
            </div>
            <div class="mb-3">
              <label for="">Grades</label>
              <p>
                {{$category->grades}}
              </p>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>

@endsection