@extends('Frontend.layout.main')
@section('main-container')

<div class="">
   <div id="slider" class="sl-slider-wrapper">
@php $i=1; @endphp
   @foreach($pro as $varpr)

      <div class="sl-slider {{$i=='1' ? 'active':''}}">
      @php $i++; @endphp

         <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
                    <div><img src="{{asset('uploads/'.$varpr->P_image)}}" alt="Slider Image" width=100% /></div>
               <h2><a href="#">{{$varpr->Title}}</a></h2>
               <blockquote>
                  <p class="location"><span class="glyphicon glyphicon-map-marker"></span>{{$varpr->Location}}</p>
                  <p>{{$varpr->Detail}}</p>
                  <cite>{{$varpr->Price}}</cite>
               </blockquote>
            </div>
         </div>
      </div>
      @endforeach  

      <!-- /sl-slider -->
      <nav id="nav-dots" class="nav-dots">
         <span class="nav-dot-current"></span>
         <span></span>
         <span></span>
         <span></span>
         <span></span>
      </nav>
   </div>
   <!-- /slider-wrapper -->
</div>
<div class="banner-search">
   <div class="container">
      <!-- banner -->
      <h3>Buy, Sale & Rent</h3>
      <div class="searchbar">
         <div class="row">
            <div class="col-lg-6 col-sm-6">
               <input type="text" class="form-control" placeholder="Search of Properties">
               <div class="row">
                  <div class="col-lg-3 col-sm-3 ">
                     <select class="form-control">
                        <option>Buy</option>
                        <option>Rent</option>
                        <option>Sale</option>
                     </select>
                  </div>
                  <div class="col-lg-3 col-sm-4">
                     <select class="form-control">
                        <option>Price</option>
                        <option>$150,000 - $200,000</option>
                        <option>$200,000 - $250,000</option>
                        <option>$250,000 - $300,000</option>
                        <option>$300,000 - above</option>
                     </select>
                  </div>
                  <div class="col-lg-3 col-sm-4">
                     <select class="form-control">
                        <option>Property</option>
                        <option>Apartment</option>
                        <option>Building</option>
                        <option>Office Space</option>
                     </select>
                  </div>
                  <div class="col-lg-3 col-sm-4">
                     <button class="btn btn-success"  onclick="window.location.href='buysalerent.php'">Find Now</button>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
               <p>Join now and get updated with all the properties deals.</p>
               <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        
            </div>
         </div>
      </div>
   </div>
</div>
<!-- banner -->
<div class="container">
   <div class="properties-listing spacer">
      <a href="/buy" class="pull-right viewall">View All Listing</a>
      <h2>Featured Properties</h2>
      <div id="owl-example" class="owl-carousel">
      @foreach($pro as $varpr)

         <div class="properties">
            <div class="image-holder">
               <img src="{{asset('uploads/'.$varpr->P_image)}}" class="img-responsive" alt="properties"/>
               <div class="status sold">{{$varpr->Status}}</div>
            </div>
            <h4><a href="/propertydetail/{{$varpr->id}}">{{$varpr->Title}}</a></h4>
            <p class="price">Price: {{$varpr->Price}}</p>
            <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">{{$varpr->Bed}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">{{$varpr->LivingRoom}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">{{$varpr->Parking}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">{{$varpr->Kitchen}}</span> </div>
            <a class="btn btn-primary" href="/propertydetail/{{$varpr->id}}">View Details</a>
         </div>
         
         @endforeach  
         
      </div>
   </div>
   <div class="spacer">
      <div class="row">
         <div class="col-lg-6 col-sm-9 recent-view">
            <h3>About Us</h3>
            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn More</a></p>
         </div>
         <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
            <h3>Recommended Properties</h3>
            <div id="myCarousel" class="carousel slide">
               <ol class="carousel-indicators">
      @foreach($pro as $varpr)

                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="3" class=""></li>
               </ol>
               <!-- Carousel items -->

               <div class="carousel-inner">

                  <div class="item active">

                     <div class="row">
                        
                     <div class="col-lg-4"><img src="{{asset('uploads/'.$varpr->P_image)}}" class="img-responsive" alt="properties"/></div>
                        <div class="col-lg-8">
                           <h5><a href="property-detail.php">{{$varpr->Title}}</a></h5>
                           <p class="price">{{$varpr->Price}}</p>
                           <a href="property-detail.php" class="more">More Detail</a> 
                           
                        </div>

                     </div>

                  </div>
                  
                  
               </div>
         @endforeach  

            </div>
         </div>
      </div>
   </div>
</div>
@endsection