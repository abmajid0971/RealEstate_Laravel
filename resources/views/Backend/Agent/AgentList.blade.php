@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">


<form class="container">
@csrf
<div class="container mt-5">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Manage Agent
    <a href="{{('/agent')}}" class="btn btn-danger btn-sm float-right">
    Add Agent</a>
</h4>
</div>
<div class="card-body">

<table class="table table-hover">
  <thead>
    <tr>
      <td>Name</td>
      <td>Description</td>
      <td>Phone</td>
      <td>Email</td>
      
      
    </tr>
  </thead>
  <tbody>
@foreach($agent as $ag)
    <tr>
      <td>{{$ag->Name}}</td>
      <td>{{$ag->Description}}</td>
      <td>{{$ag->Phone}}</td>
      <td>{{$ag->Email}}</td>
      
      
      <td><a href='editagent/{{$ag->id}}' class="btn btn-primary">Edit</a></td>
      <td><a href='deleteAgent/{{$ag->id}}' class="btn btn-info">Delete</a></td>
      <td><a href='propertyAgent/{{$ag->id}}' class="btn btn-success">Show Detail</a></td>
    </tr>
  @endforeach  
  </tbody>
</table>
</form>
</div>
</div>

</div>

</div>

</div>
@endsection('content')
