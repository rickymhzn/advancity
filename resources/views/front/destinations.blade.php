@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h3>Destinations</h3>
     </div>
</section>

<div class="page-wrapper">
     <section class="container">
     <div class="row">
          <!-- <div class="col-md-4">
          <div class="card">
            <div class="card-title mx-auto">
              <h4>Choose Your Course</h4>
            </div>
            <div class="card-body">
              <button class="find-button">Find your course</button>
              <br>
              <br>
              <select name="country" id="country">
                <option value="1" selected>select country</option>
                <option value="2" >Australia</option>
                <option value="3" >Newzeland</option>
                <option value="3" >USA</option>
                <option value="3" >Canada</option>
                <option value="3" >UK</option>
                <option value="4" >Netherland</option>
              </select>
              <br>
              <br>
              <select name="level" id="level">
                <option value="1" selected>Select Level</option>
                <option value="2" >Foundation</option>
                <option value="3" >Diploma</option>
                <option value="3" >Bachelor</option>
                <option value="3" >Master</option>
                <option value="3" >PHD</option>
              </select>
              <br>
              <br>
              <select class="scrollable-menu" name="category" id="category" >
                <option value="1" selected>Select Category</option>
                <option value="2" >Foundation</option>
                <option value="3" >Diploma</option>
                <option value="3" >Bachelor</option>
                <option value="3" >Master</option>
                <option value="3" >PHD</option>
                <option value="2" >Foundation</option>
                <option value="3" >Diploma</option>
                <option value="3" >Bachelor</option>
                <option value="3" >Master</option>
                <option value="3" >PHD</option>
                <option value="2" >Foundation</option>
                <option value="3" >Diploma</option>
                <option value="3" >Bachelor</option>
                <option value="3" >Master</option>
                <option value="3" >PHD</option>
              </select>
              <br><br>
              <button type="button" class="btn btn-primary">Search</button>
            </div>
          </div>
        </div> -->
          <div class="col-md-12">
               <h4 class="main-title mx-auto">Choose Your Destination</h4>
               <div class="row">
                    @foreach( $countries as $country)
                    <div class="col-md-4">
                         <div class="content">
                              <a href="#">
                                   <div class="content-overlay"></div>
                                   <img class="content-image"
                                        src="{{ asset('assets/images/country/' . $country->image) }}" alt="">
                                   <div class="content-details fadeIn-bottom">
                                        <h6 class="content-title">Read More</h6>
                                   </div>
                                   <div class="bottom-left">{{ $country->country }}</div>
                              </a>
                         </div>
                    </div>
                    @endforeach
               </div>
          </div>
     </div>
     </section>
</div>
@endsection