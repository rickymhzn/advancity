@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h1>Destinations >> </h1>
     </div>
</section>

<div class="page-wrapper">
     <section class="container">
     <div class="row">
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