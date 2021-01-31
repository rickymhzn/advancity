@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h3>Our Services | {{ $service->title }}</h3>
     </div>
</section>

<div class="page-wrapper">
    <div class="row">
         <div class="col-md-9">
        
          
               <div class="carrer">
               {!! $service->description !!}
               </div>
         
          
               <div class="counselling">
               <img class="img-fluid" src="{{ asset('assets/images/service/' . $service->image) }}" alt="{{ $service->title }}" >
               </div>
  
          </div>
          <div class="col-md-3">
          <div class="related-link">
                    <h3>Related Topics</h3>
                    @foreach( $allservices as $services)
                    <p><a href="{{ route('single.service',['slug'=>$services->slug]) }}"> {{ $services->title }} </a></p>
                    @endforeach
               </div>
          </div>
     </div>

</div>
@endsection