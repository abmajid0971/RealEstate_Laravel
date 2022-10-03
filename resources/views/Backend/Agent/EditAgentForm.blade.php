    @extends('admin.master')
    <!-- Content Wrapper. Contains page content -->
    @section('content')
    <div class="content-wrapper">

        <form class="container" method="post" action="{{url('updateagent')}}">
            @csrf
            <div class="container mt-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Agent
                                <a href="{{('/Allagents')}}" class="btn btn-danger btn-sm float-right">
                                    Back</a>
                            </h4>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <label for="txtPropertyTitle">ID</label>
                                    <input type="text" class="form-control" id="txtID" value="{{$agent->id}}"
                                        name="txID" />
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="txtName">Name</label>
                                    <input type="text" class="form-control" id="txtName" value="{{$agent->AName}}"
                                        name="txtName" />
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="txtDescription">Description:</label>
                                    <input type="text" class="form-control" id="txtDescription"
                                        value="{{$agent->Description}}" name="txtDescription" />


                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="txtLocation">Phone No.:</label>
                                    <input type="text" class="form-control" id="txtPhone" value="{{$agent->Phone}}"
                                        name="txtPhone" />
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="txtLocation">Email:</label>
                                    <input type="text" class="form-control" id="txtEmail" value="{{$agent->Email}} "
                                        name="txtEmail" />
                                </div>
                                <div class="col-md-2 mb-2">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </form>

    </div>

    @endsection('content')