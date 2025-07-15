@extends('layouts.frontend')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Category List
              <a href="{{url('/')}}" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">
            <form action="{{url("category")}}" method="POST">
              @csrf

              <div class="mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
                @error('name') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="mb-3">
                <label for="">Description</label>
                <textarea name="description" rows="3" class='form-control'></textarea>
                @error('description') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="mb-3">
                <label for="">Grades</label>
                <input type="number" name="grades" step="0.01" class="form-control" />
                @error('grades') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>

@endsection