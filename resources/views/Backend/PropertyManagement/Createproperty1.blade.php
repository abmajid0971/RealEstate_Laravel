@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">

<form class="container" method="post" action="{{url('SaveProperty')}}" enctype="multipart/form-data">
@csrf
<div class="container mt-5">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Manage Property
<a href="{{('/AllProperties')}}" class="btn btn-danger btn-sm float-right">Manage
Property</a>
</h4>
</div>
<div class="card-body">



<div class="col-md-12">
<!-- general form elements -->
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Add Property</h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<div class="card-body">
<div class="form-group">


<label for="txtTitle">Title:</label>
<input type="text" class="form-control" id="txtTitle" name="txtTitle">
</div>

<div class="form-group">
<label>Purpose</label>
<select class="form-control select2" style="width: 100%;" name="Purpose">
<option selected="selected">Buy</option>
<option>Sell</option>
<option>Rent</option>
</select>

</div>
<div class="form-group">


<label for="txDetail">Detail:</label>
<input type="text" class="form-control" id="txtDetail" name="txtDetail">
</div>
<div class="form-group">

<label for="txtPrice">Price:</label>
<input type="text" class="form-control" id="txtPrice" name="txtPrice">
</div>
<div class="form-group">

<label for="txtLocation">Location:</label>
<input type="text" class="form-control" id="txtLocation" name="txtLocation">
</div>
<div class="form-group">

<label for="txtKitchen">Kitchen:</label>
<input type="text" class="form-control" id="txtKitchen" name="txtKitchen">
</div>
<div class="form-group">

<label for="txtParking">Parking:</label>
<input type="text" class="form-control" id="txtParking" name="txtParking">
</div>
<div class="form-group">

<label for="txtLivingRoom">Living Room:</label>
<input type="text" class="form-control" id="txtLivingRoom" name="txtLivingRoom">
</div>
<div class="form-group">

<label for="txtBed">Bed:</label>
<input type="text" class="form-control" id="txtBed" name="txtBed">
</div>
<div class="form-group">

<label for="txtAddress">Address:</label>
<input type="text" class="form-control" id="txtAddress" name="txtAddress">
</div>
<div class="form-group">

<label for="txtAgent">Agent:</label>
<input type="text" class="form-control" id="txtAgent" name="txtAgent">
</div>
<div class="form-group">

<!-- checkbox -->
<div class="form-group">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox"
name="customCheckbox1" id="customCheckbox1" value="option1">
<label for="customCheckbox1" class="custom-control-label">Show on
Banner</label>
</div>
<div class="form-group">

<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox"
name="customCheckbox2" id="customCheckbox2" value="option1">
<label for="customCheckbox2" class="custom-control-label">Featured
Property</label>
</div>
<div class="form-group">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" name="customCheckbox3"
type="checkbox" id="customCheckbox3" value="option1">
<label for="customCheckbox3"
class="custom-control-label">Recommended</label>
</div>
</div>
<div class="form-group">

<label for="imgfile">Choose file</label>
<input type="file" class="form-control" id="imgfile" name="imgfile">

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
</div>
</div>

</div>

</div>

</div>


@endsection('content')