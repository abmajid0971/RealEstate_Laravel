@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">

<form class="container" method="post" action="{{url('updateproperty')}}" enctype="multipart/form-data">
@csrf
<div class="container mt-5">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Edit Property
<a href="{{('/AllProperties')}}" class="btn btn-danger btn-sm float-right">
Back</a>
</h4>
</div>
<div class="card-body">

<div class="form-group">

<!-- general form elements -->
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Edit Property</h3>
</div>
<!-- /.card-header -->
<!-- form start -->

<div class="card-body">
<div class="form-group">

<label for="txID">ID</label>
<input type="text" class="form-control" id="txtID" value="{{$pro->id}}"
    name="txID" />
</div>
<div class="form-group">

<label for="txtTitle">Title:</label>
<input type="text" class="form-control" id="txtTitle" name="txtTitle"
value="{{$pro->Title}}">

</div>

<div class="form-group">
<label>Purpose</label>
<select class="form-control select2" style="width: 100%;"
value="{{$pro->Purpose}}">
<option selected="selected">Buy</option>
<option>Sell</option>
<option>Rent</option>
</select>
</div>


<div class="form-group">

<label for="txDetail">Detail:</label>
<input type="text" class="form-control" id="txtDetail" name="txtDetail"
value="{{$pro->Detail}}">

</div>
<div class="form-group">

<label for="txtPrice">Price:</label>
<input type="text" class="form-control" id="txtPrice" name="txtPrice"
value="{{$pro->Price}}">

</div>

<div class="form-group">

<label for="txtLocation">Location:</label>
<input type="text" class="form-control" id="txtLocation" name="txtLocation"
value="{{$pro->Location}}">

</div>
<div class="form-group">

<label for="txtKitchen">Kitchen:</label>
<input type="text" class="form-control" id="txtKitchen" name="txtKitchen"
value="{{$pro->Kitchen}}">

</div>
<div class="form-group">

<label for="txtParking">Parking:</label>
<input type="text" class="form-control" id="txtParking" name="txtParking"
value="{{$pro->Parking}}">

</div>
<div class="form-group">

<label for="txtLivingRoom">Living Room:</label>
<input type="text" class="form-control" id="txtLivingRoom" name="txtLivingRoom"
value="{{$pro->LivingRoom}}">

</div>
<div class="form-group">

<label for="txtBed">Bed:</label>
<input type="text" class="form-control" id="txtBed" name="txtBed"
value="{{$pro->Bed}}">

</div>
<div class="form-group">

<label for="txtAddress">Address:</label>
<input type="text" class="form-control" id="txtAddress" name="txtAddress"
value="{{$pro->Address}}">

</div>
<div class="form-group">

<label for="txtAgent">Agent:</label>
<input type="text" class="form-control" id="txtAgent" name="txtAgent"
value="{{$pro->Agent}}">

</div>
<div class="form-group">

<!-- checkbox -->
<div class="form-group">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox1"
value="option1" {{$pro->ShowonBanner=='1' ? 'checked':''}}>
0=visible, 1=hidden
<label for="customCheckbox1" class="custom-control-label">Show on
Banner</label>
</div>
</div>

<div class="form-group">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox"
id="customCheckbox2" value="option1" {{$pro->Featured=='1' ? 'checked':''}}>
<label for="customCheckbox2" class="custom-control-label">Featured
Property</label>
</div>
</div>

<div class="form-group">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox"
id="customCheckbox3" value="{{$pro->Recommended}}" {{$pro->Recommended=='1' ? 'checked':''}}>
<label for="customCheckbox3"
class="custom-control-label">Recommended</label>
</div>
</div>


<div class="form-group">


<label for="imgfile">Choose file</label>

<input type="file" class="form-control" id="imgfile"
name="imgfile" onclick="imageupload(imgfile)">
<img src="{{asset('uploads/'.$pro->P_image)}}"
alt="Slider Image" height=100px width=100px />
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