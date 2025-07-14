@extends('layouts.frontend')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Category List
              <a href="{{url('category/create')}}" class="btn btn-primary float-end">Add Category</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-stiped table-bordered">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </thead>
            </table>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>

@endsection