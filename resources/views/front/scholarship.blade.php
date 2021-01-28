@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h3>Scholarship in {{ $country->country }}</h3>
     </div>
</section>

<div class="page-wrapper">
     <div class="schoolarship">
     @foreach( $scholarships as $scholarship )
         <div class="row">
           <div class="col-md-4">
             <img class="img-fluid" src="{{ asset('assets/images/university/logo/' . $scholarship->university->logo) }}" alt="">
           </div>
           <div class="col-md-8">
             <h4>{{ $scholarship->title }}</h4>
             <p>{!! $scholarship->description !!}</p>
             <a class="btn btn-danger" type="button" href="{{ route('apply.scholarship',['country'=> $country->slug ]) }}"><i class="fa fa-hand-o-right"></i> Apply Now</a>
           </div>
         </div>
         @endforeach
     </div>
</div>
@endsection