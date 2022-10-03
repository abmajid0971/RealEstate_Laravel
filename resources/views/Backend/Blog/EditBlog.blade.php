@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">

<form class="container" method="post" action="{{url('updateBlog')}}">
    @csrf
    <div class="container mt-5">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Edit Blog
    <a href="{{('/BlogList')}}" class="btn btn-danger btn-sm float-right">
    Back</a>
</h4>
</div>

<div class="card-body">

    <div class="row">
        <div class="col-md-4 mb-2">
            <label for="txtPropertyTitle">ID</label>
            <input type="text" class="form-control" id="txtID" value="{{$pro->id}}" name="txtID" />
        </div>
        <div class="col-md-4 mb-2">
            <label for="txtTitle">Title</label>
            <input type="text" class="form-control" id="txtTitle" value="{{$pro->Title}}" name="txtTitle" />
        </div>
        <div class="col-md-4 mb-2">
            <label for="txtDescription">Description:</label>
            <input type="text" class="form-control" id="txtDescription" value="{{$pro->Description}}"
                name="txtDescription" />
        </div>

        <div class="form-group">
            <div class="col-md-6 mb-2">
                <label for="imgfile">Choose file</label>
                <input type="file" class="form-control" id="imgfile" name="imgfile">
                <img src="{{asset('uploads/'.$pro->B_image)}}" alt="Slider Image" height=100px width=100px />
            </div>
        </div>

        <div class="col-md-2 mb-2">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </div>

</form>

</div>

@endsection('content')
