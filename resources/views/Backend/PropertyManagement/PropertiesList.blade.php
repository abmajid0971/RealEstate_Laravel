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
                        <h4>Manage Property
                            <a href="{{('/property')}}" class="btn btn-danger btn-sm float-right">Add
                                Property</a>
                        </h4>
                    </div>
                    <div class="card-body">
<div class="container px-4">
  @if(session('status'))
  <h5 class='alert alert-success'>{{session('status')}}</h5>
  @endif

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <td>Title</td>
      <td>Price</td>
      <td>Kitchen</td>
      <td>Parking</td>
      <td>Living Room</td>
      <td>Bed</td>
      <td>Agent</td>
      <td>Image</td>
      <td>Status</td>
    </tr>
  </thead>
  <tbody>
@foreach($pro as $varpr)
    <tr>
      <td>{{$varpr->Title}}</td>
      <td>{{$varpr->Price}}</td>
      <td>{{$varpr->Kitchen}}</td>
      <td>{{$varpr->Parking}}</td>
      <td>{{$varpr->LivingRoom}}</td>
      <td>{{$varpr->Bed}}</td>
      <td>{{$varpr->Agent}}</td>
      <td>
        <img src="{{asset('uploads/'.$varpr->P_image)}}" alt="Slider Image" height=100px width=100px />
      </td>
      <td>@if($varpr->ShowonBanner=='1')
                hidden
          @else
                visible
          @endif
        </td>

      
      
      <td><a href='editproperty/{{$varpr->id}}' class="btn btn-success btn-sm">Edit</a></td>
      <td><a href='deleteprop/{{$varpr->id}}' class="btn btn-info">Delete</a></td>
      <td><a href='viewpropertyy/{{$varpr->id}}' class="btn btn-success">Show Detail</a></td>
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
