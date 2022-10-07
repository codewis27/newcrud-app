@extends('Theme.default')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title Buku</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}" required>
                  </div>
                  <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" name="category" id="category"  value="{{$data->category}}" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                   <a href="/"> <button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
              </form>
            </div>
@endsection