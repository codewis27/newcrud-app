@extends('Theme.default')

@section('content')
  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil </strong>{{$message}}
    </div>
    @endif
<div class="card">
              <div class="card-header">
                <a href="/formtambahdata"><button type="button" class="btn btn-success">Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1
                    ?>
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$row->title}}</td>
                        <td>{{$row->category}}</td>
                        <td>
                            <a href="/formeditdata/{{$row->id}}" class="btn btn-primary">Edit</a>
                            <a href="/deletedata/{{$row->id}}" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            @endsection