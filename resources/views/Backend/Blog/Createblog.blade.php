@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">

    <form class="container" method="post" action="{{url('SaveBlog')}}" enctype="multipart/form-data">
      @csrf
      <div class="container mt-5">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Add Blog
    <a href="{{('/BlogList')}}" class="btn btn-danger btn-sm float-right">
    Manage Blog</a>
</h4>
</div>
<div class="card-body">

      <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
      <div class="card-header">
          <h3 class="card-title">Add Blog</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <div class="card-body">
          <div class="col-md-4 mb-2">
            <label for="txtTitle">Title:</label>
            <input type="text" class="form-control" id="txtTitle" name="txtTitle" >
          </div>
          
          <div class="col-md-4 mb-2">
            <label for="txtDescription">Description:</label>
            <input type="text" class="form-control" id="txtDescription" name="txtDescription" >
          </div>
                  <div class="form-group">
                      <div class="col-md-6 mb-2">
                        <label for="imgfile">Choose file</label>
                        <input type="file" class="form-control" id="imgfile" name="imgfile">
                      </div>
                  </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          <!-- /.card -->
      </div>
    </form>
    </div>

    @endsection('content')
