@extends('Frontend.layout.main')

@section('main-container')
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="index.php">Home</a> / Buy, Sale & Rent</span>
        <h2>Buy, Sale & Rent</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="properties-listing spacer">

        <div class="row">
            <div class="col-lg-3 col-sm-4 ">

                <div class="search-form">
                    <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
                    <input type="text" class="form-control" placeholder="Search of Properties">
                    <div class="row">
                        <div class="col-lg-5">
                            <select class="form-control">
                                <option>Buy</option>
                                <option>Rent</option>
                                <option>Sale</option>
                            </select>
                        </div>
                        <div class="col-lg-7">
                            <select class="form-control">
                                <option>Price</option>
                                <option>$150,000 - $200,000</option>
                                <option>$200,000 - $250,000</option>
                                <option>$250,000 - $300,000</option>
                                <option>$300,000 - above</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <select class="form-control">
                                <option>Property Type</option>
                                <option>Apartment</option>
                                <option>Building</option>
                                <option>Office Space</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary">Find Now</button>

                </div>



                <div class="hot-properties hidden-xs">
                    <h4>Hot Properties</h4>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                class="img-responsive img-circle" alt="properties"></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                class="img-responsive img-circle" alt="properties"></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                class="img-responsive img-circle" alt="properties"></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                class="img-responsive img-circle" alt="properties"></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p>
                        </div>
                    </div>

                </div>


            </div>

            <div class="col-lg-9 col-sm-8">
                <div class="sortby clearfix">
                    <div class="pull-left result">Showing: 12 of 100 </div>
                    <div class="pull-right">
                        <select class="form-control">
                            <option>Sort by</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                    </div>

                </div>

                <div class="row">
                    @foreach($pr as $varpr)

                    <!-- properties -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="properties">
                            <div class="image-holder">
                                <img class="img-responsive" alt="properties"
                                    src="{{asset('uploads/'.$varpr->P_image)}}">
                                <div class="status sold">{{$varpr->Purpose}}</div>
                            </div>
                            <h4><a href="property-detail.php">{{$varpr->Title}}</a></h4>
                            <p class="price">Price: {{$varpr->Price}}</p>
                            <div class="listing-detail">
                                <span data-toggle="tooltip" data-placement="bottom"
                                    data-original-title="Bed Room">{{$varpr->Bed}}</span> <span data-toggle="tooltip"
                                    data-placement="bottom"
                                    data-original-title="Living Room">{{$varpr->LivingRoom}}</span> <span
                                    data-toggle="tooltip" data-placement="bottom"
                                    data-original-title="Parking">{{$varpr->Parking}}</span> <span data-toggle="tooltip"
                                    data-placement="bottom" data-original-title="Kitchen">{{$varpr->Kitchen}}</span>
                            </div>

                            <a class="btn btn-primary" href="property-detail.php">View Details</a>

                        </div>
                    </div>
                    @endforeach



                </div>

            </div>
        </div>
    </div>
</div>

@endsection