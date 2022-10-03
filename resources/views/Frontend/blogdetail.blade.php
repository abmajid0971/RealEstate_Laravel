@extends('Frontend.layout.main')

@section('main-container')
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="#">Home</a> / Blogs</span>
        <h2>Blogs</h2>
    </div>
</div>
<!-- banner -->
<div class="container">
    <div class="spacer blog">
      
        <div class="row">
            <div class="col-lg-8">
                <!-- blog detail -->
                <h2>{{$pro->Title}}</h2>
                <div class="info">Posted on: {{$pro->created_at}}</div>
                <img src="{{asset('uploads/'.$pro->B_image)}}" class="thumbnail img-responsive" alt="blog title">
                <p>{{$pro->Description}}</p>
                <!-- blog detail -->
            </div>
        </div>
    </div>
</div>

@endsection