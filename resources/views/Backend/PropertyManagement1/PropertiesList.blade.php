@extends('Backend.layout.main')
@section('main-container')
<form class="container">
@csrf
<table class="table table-hover">
  <thead>
    <tr>
      <td>Purpose</td>
      <td>Property Type</td>
      <td>Property Sub Type</td>
      <td>Rental Price</td>
      <td>Bedrooms</td>
      <td>Bathrooms</td>
      <td>City</td>
      <td>Location</td>
      <td>Property Title</td>
      <td>Description</td>
      <td>Price</td>
      <td>Land Area</td>
      <td>Unit</td>
      <td>Image</td>
      <td>Expires After</td>
      
    </tr>
  </thead>
  <tbody>
@foreach($property as $varpr)
    <tr>
      <td>{{$varpr->Purpose}}</td>
      <td>{{$varpr->PropertyType}}</td>
      <td>{{$varpr->PropertySubType}}</td>
      <td>{{$varpr->RentalPrice}}</td>
      <td>{{$varpr->Bedrooms}}</td>
      <td>{{$varpr->Bathrooms}}</td>
      <td>{{$varpr->City}}</td>
      <td>{{$varpr->Location}}</td>
      <td>{{$varpr->PropertyTitle}}</td>
      <td>{{$varpr->Description}}</td>
      <td>{{$varpr->Price}}</td>
      <td>{{$varpr->LandArea}}</td>
      <td>{{$varpr->Unit}}</td>
      <td>{{$varpr->Image}}</td>
      <td>{{$varpr->ExpiresAfter}}</td>
      
      <td><a href='editproperty/{{$varpr->id}}' class="btn btn-primary">Edit</a></td>
      <td><a href='deleteproperty/{{$varpr->id}}' class="btn btn-info">Delete</a></td>
      <td><a href='propertydetail/{{$varpr->id}}' class="btn btn-success">Show Detail</a></td>
    </tr>
  @endforeach  
  </tbody>
</table>
</form>
@endsection