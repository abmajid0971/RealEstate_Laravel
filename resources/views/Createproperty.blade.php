@extends('Backend.layout.main')
@section('main-container')
<form class="container" action="{{url('/Createproperty')}}" method="POST">
  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-2">
      <label for="validationCustom01">Proptery Name</label>
      <input type="text" class="form-control" id="txtProptery_Name" name="txtProptery_Name" required>
    </div>
    <div class="col-md-4 mb-2">
      <label for="validationCustom02">Address</label>
      <input type="text" class="form-control" id="txtAddress" name="txtAddress" required>
      
    
  </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-2">
      <label for="validationCustom03">Starting Price</label>
      <input type="number" class="form-control" id="txtStarting_Price" name="txtStarting_Price" required>
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="validationCustom03">Ending Price</label>
      <input type="number" class="form-control" id="txtEnding_Price" name="txtEnding_Price" required>
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="validationCustom03">Agent</label>
      <input type="text" class="form-control" id="txtAgent" name="txtAgent" required>
      
    </div>
    <div class="col-md-4 mb-2">
      <label for="validationCustom03">Owner Name</label>
      <input type="text" class="form-control" id="txtOwner" name="txtOwner" required>
      
    </div>
    
    </div>
    <div class="col-md-2 mb-2">
  <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

@endsection