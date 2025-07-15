@extends('layouts.frontend')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Edit Student List
              <a href="{{url('/')}}" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">
            <form action="{{route("category.update", $category->id)}}" method="POST">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value ="{{$category->name}}">
                @error('name') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="mb-3">
                <label for="">Remarks</label>
                <textarea name="description" rows="3" class='form-control'>{{$category->description}}</textarea>
                @error('description') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="mb-3">
                <label for="">Grades</label>
                <input type="number" name="grades" step="0.01" class="form-control" value ="{{$category->grades}}"/>
                @error('grades') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <form action="{{route('category.destroy', $category->id)}}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </div>
            </form>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>

@endsection