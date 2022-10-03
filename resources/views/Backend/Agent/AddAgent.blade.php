@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">

<form class="container" method="post" action="{{url('SaveAgent')}}">
  @csrf
  <div class="container mt-5">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Add Agent
    <a href="{{('/Allagents')}}" class="btn btn-danger btn-sm float-right">
        Manage Agent</a>
</h4>
</div>
<div class="card-body">

  <div class="row">
  <div class="form-group">
  
      <label for="txtPropertyTitle">Name</label>
      <input type="text" class="form-control" id="txtName" name="txtName" >
    </div>
    
      <label for="txtDescription">Description:</label>
      <input type="text" class="form-control" id="txtDescription" name="txtDescription" >
      
    
  </div>
  
  <div class="form-group">
  
      <label for="txtLocation">Phone No.:</label>
      <input type="text" class="form-control" id="txtPhone" name="txtPhone">
    </div>
    <div class="form-group">
  
      <label for="txtLocation">Email:</label>
      <input type="text" class="form-control" id="txtEmail" name="txtEmail">
    </div>
    </div>
    <div class="form-group">
  
  <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

</div>
</div>

</div>

</div>

</div>
@endsection('content')

