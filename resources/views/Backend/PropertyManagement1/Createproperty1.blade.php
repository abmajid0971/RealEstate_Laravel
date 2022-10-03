@extends('Backend.layout.main')
@section('main-container')
<form class="container" method="post" action="{{url('SaveProperty')}}">
  @csrf
  <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="Title">Email address</label>
                    <input type="email" class="form-control" id="txtTitle" placeholder="Enter email">
                  </div>
                  <div class="col-md-4 mb-2">
      <label for="txtTitle">Detail:</label>
      <input type="text" class="form-control" id="txtDetail" name="txtDetail" >
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="txtPrice">Detail:</label>
      <input type="text" class="form-control" id="txtPrice" name="txtPrice" >
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="txtLocation">Location:</label>
      <input type="text" class="form-control" id="txtLocation" name="txtLocation" >
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="txtKitchen">Kitchen:</label>
      <input type="text" class="form-control" id="txtKitchen" name="txtKitchen" >
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="txtParking">Parking:</label>
      <input type="text" class="form-control" id="txtParking" name="txtParking" >
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="txtLivingRoom">Living Room:</label>
      <input type="text" class="form-control" id="txtLivingRoom" name="txtLivingRoom" >
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="txtBed">Bed:</label>
      <input type="text" class="form-control" id="txtBed" name="txtBed" >
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="txtAddress">Address:</label>
      <input type="text" class="form-control" id="txtAddress" name="txtAddress" >
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="txtAgent">Agent:</label>
      <input type="text" class="form-control" id="txtAgent" name="txtAgent" >
      
    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            

          </div>
      
    
</form>


@endsection