@extends('Backend.layout.main')
@section('main-container')
<form class="container" method="post" action="{{url('SaveAbout')}}" enctype="multipart/form-data">
  @csrf
  <div class="row">
  
    <div class="col-md-6 mb-2">
      <label for="txtBusinessBackground">Business Background:</label>
      <input type="text" class="form-control" id="txtBusinessBackground" name="txtBusinessBackground">
    </div>
    <div class="col-md-6 mb-2">
      <label for="txtCompanyProfile">Company Profile:</label>
      <input type="text" class="form-control" id="txtCompanyProfile" name="txtCompanyProfile">
    </div>
    <div class="form-group">
                      <div class="col-md-6 mb-2">
                        <label for="imgfile">Choose file</label>
                        <input type="file" class="form-control" id="imgfile" name="imgfile">
                      </div>
                  </div>
    </div>
    <div class="col-md-2 mb-2">
  <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>


@endsection