@extends('Backend.layout.main')
@section('main-container')
<form class="container" action="{{url('/newproperty')}}" method="POST">
@csrf
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Proptery Name</th>
      <th scope="col">Address</th>
      <th scope="col">Starting Price</th>
      <th scope="col">Ending Price</th>
      <th scope="col">Agent</th>
      <th scope="col">Owner Name</th>
    </tr>
  </thead>
  <tbody>
@foreach($property as $varpr)
    <tr>
      <th scope="row">1</th>
      <td>{{$varpr->Proptery_Name}}</td>
      <td>{{$varpr->Address}}</td>
      <td>{{$varpr->Starting_Price}}</td>
      <td>{{$varpr->Ending_Price}}</td>
      <td>{{$varpr->Agent}}</td>
      <td>{{$varpr->Owner_Name}}</td>
    </tr>
    
  </tbody>
</table>
</form>
@endsection