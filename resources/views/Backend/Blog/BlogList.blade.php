@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">

<form>
    @csrf
    <div class="container mt-5">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Manage Blog
    <a href="{{('/Addblog')}}" class="btn btn-danger btn-sm float-right">
    Add Blog</a>
</h4>
</div>
<div class="card-body">

    <div class="container px-4">
        @if(session('status'))
        <h5 class='alert alert-success'>{{session('status')}}</h5>
        @endif
        <div class="card mt-4">
            <div class="card-header">
                <h4>Blog List
                </h4>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>Title</td>
                                <td>Description</td>
                                <td>B_image</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pro as $varpr)
                            <tr>
                                <td>{{$varpr->Title}}</td>
                                <td>{{$varpr->Description}}</td>
                                <td>
                                    <img src="{{asset('uploads/'.$varpr->B_image)}}" alt="Slider Image" height=100px
                                        width=100px />
                                </td>
                                <td><a href='EditBlog/{{$varpr->id}}' class="btn btn-success btn-sm">Edit</a></td>
                                <td><a href='deleteBlog/{{$varpr->id}}' class="btn btn-info">Delete</a></td>
                                <td><a href='viewBlog/{{$varpr->id}}' class="btn btn-success">Show Detail</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
</div>

@endsection('content')
