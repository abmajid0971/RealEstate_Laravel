@extends('Backend.layout.main')
@section('main-container')
<form class="container" method="post" action="{{url('updateproperty')}}">
  @csrf
  <div class="row">
  <div class="col-md-4 mb-2">
      <label for="txtPropertyTitle">ID:</label>
      <input type="text" class="form-control" id="txtID" name="txtID" readonly value="{{$property->id}}">
    </div>
  <div class="col-md-4 mb-2">
      
      <div class="form-group">
    <label for="Purpose">Purpose</label>
    <select class="form-control" id="Purpose" name="Purpose" value="{{$property->Purpose}}">
      <option>For Sale</option>
      <option>Rent</option>
      </select>
  </div>
  </div>
  <div class="col-md-4 mb-2">
      
      <div class="form-group">
    <label for="SubType1">Sub Type:</label>
    <select class="form-control" id="SubType1" name="SubType1" value="{{$property->PropertySubType}}">
      <option>House</option>
      <option>Flat</option>
      <option>Upper Portion</option>
      <option>Lower Portion</option>
      <option>Farm House</option>
      <option>Room</option>
      <option>Penthouse</option>
      </select>
  </div>
  </div>
  <div class="col-md-4 mb-2">
      
      <div class="form-group">
    <label for="SubType2">Sub Type:</label>
    <select class="form-control" id="SubType2" name="SubType2" value="{{$property->PropertySubType}}">
      <option>Residential Plot</option>
      <option>Commercial Plot</option>
      <option>Agricultural Plot</option>
      <option>Industrial Land</option>
      <option>Plot File</option>
      <option>Plot Form</option>
      </select>
  </div>
  </div>
  <div class="col-md-4 mb-2">
      
      <div class="form-group">
    <label for="SubType">Sub Type:</label>
    <select class="form-control" id="SubType" name="SubType" value="{{$property->PropertySubType}}">
      <option>Office</option>
      <option>Shop</option>
      <option>Warehouse</option>
      <option>Factory</option>
      <option>Building</option>
      <option>Other</option>
      </select>
  </div>
  </div>
  <div class="col-md-4 mb-2">
      
      <div class="form-group">
    <label for="PropertyType">Property Type:</label>
    <select class="form-control" id="PropertyType" name="PropertyType" value="{{$property->PropertyType}}">
      <option>Homes</option>
      <option>Plots</option>
      <option>Commercial</option>
      </select>
  </div>
  </div>
  <div class="col-md-4 mb-2">
      
      <div class="form-group">
    <label for="City">City</label>
    <select class="form-control" id="City" name="City" value="{{$property->City}}">
      <option>Lahore</option>
      <option>Karachi</option>
      <option>Peshawar</option>
      </select>
  </div>
  </div>
  <div class="col-md-4 mb-2">
      <label for="txtLocation">Location:</label>
      <input type="text" class="form-control" id="txtLocation" name="txtLocation"  value="{{$property->Location}}">
    </div>
    </div>
    <div class="row">

    <div class="col-md-4 mb-2">
      <label for="txtPropertyTitle">Property Title:</label>
      <input type="text" class="form-control" id="txtPropertyTitle" name="txtPropertyTitle" value="{{$property->PropertyTitle}}">
    </div>
    <div class="col-md-4 mb-2">
      <label for="txtDescription">Description:</label>
      <input type="text" class="form-control" id="txtDescription" name="txtDescription" value="{{$property->Description}}">
      
    
  </div>
  
  
    <div class="col-md-4 mb-2">
      <label for="txtPrice">All Inclusive Price: (PKR)</label>
      <input type="text" class="form-control" id="txtPrice" name="txtPrice" value="{{$property->Price}}">
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="txtPrice">Rental Price: </label>
      <input type="text" class="form-control" id="txtRentalPrice" name="txtRentalPrice"  value="{{$property->RentalPrice}}">
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="txtLandArea">Land Area:</label>
      <input type="text" class="form-control" id="txtLandArea" name="txtLandArea"  value="{{$property->LandArea}}">
      
    </div>
    <div class="col-md-4 mb-2">
    <div class="form-group">
    <label for="Unit">Unit:</label>
    <select class="form-control" id="Unit" name="Unit" value="{{$property->Unit}}">
      <option>Square Yards</option>
      <option>Square Meters</option>
      <option>Marla</option>
      <option>Kanal</option>
      </select>
  </div>
  </div>

  <div class="col-md-4 mb-2">
  <div class="form-group">
    <label for="Bedrooms">Bedrooms:</label>
    <select class="form-control" id="Bedrooms" name="Bedrooms" value="{{$property->Bedrooms}}">
    <option>Please Select</option>
      <option>Studio</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>10+</option>
      </select>
  </div>

  </div>
  <div class="col-md-4 mb-2">
  <div class="form-group">
    <label for="Bathrooms">Bathrooms:</label>
    <select class="form-control" id="Bathrooms" name="Bathrooms" value="{{$property->Bathrooms}}">
    <option>Please Select</option>
      
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      
      </select>
  </div>

  </div>
  <div class="col-md-4 mb-2">
    <div class="form-group">
    <label for="ExpiresAfter">Expires After:</label>
    <select class="form-control" id="ExpiresAfter" name="ExpiresAfter" value="{{$property->ExpiresAfter}}">
      <option>1 Month</option>
      <option>3 Months</option>
      <option>1 Months</option>
      
      </select>
  </div>
  </div>
    </div>
    <div class="col-md-2 mb-2">
  <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>


@endsection