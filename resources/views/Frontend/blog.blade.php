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
  <div class="col-lg-8 col-sm-12 ">
  @foreach($pro as $varpr)

  <!-- blog list -->
  <div class="row">
                            <div class="col-lg-4 col-sm-4 "><a href="/blogdetail/{{$varpr->id}}" class="thumbnail"><img src="{{asset('uploads/'.$varpr->B_image)}}" alt="blog title"></a></div>
                            <div class="col-lg-8 col-sm-8 ">
                            <h3><a href="/blogdetail/{{$varpr->id}}">{{$varpr->Title}}</a></h3>
                            <div class="info">Posted on: {{$varpr->created_at}}</div>                                               
                            <p>{{$varpr->Description}}</p>
                            <a href="/blogdetail/{{$varpr->id}}" class="more">Read More</a>
                            </div>
  </div>
  @endforeach  

  </div>
  <div class="col-lg-4 visible-lg">

  <!-- tabs -->
  
</div>
</div>
</div>

@endsection