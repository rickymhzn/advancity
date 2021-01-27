@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h1>Destinations >> {{ $country->country }} </h1>
     </div>
</section>

<div class="page-wrapper">
     <section class="container">
     <div class="row">
          <div class="col-md-12">
               <h4 class="main-title mx-auto">{{ $country->country }}</h4>
               <div class="row">               
                    <div class="col-12">
                  
                             {!! $country->description !!}
                    </div>
                   
               </div>
          </div>
     </div>
     </section>
</div>
@endsection