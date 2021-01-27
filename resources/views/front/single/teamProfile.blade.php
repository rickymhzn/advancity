@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h1>Our Team >> {{ $team->name }}</h1>
     </div>
</section>

<div class="page-wrapper">
     <div class="row">
          <div class="col-12">
               <div class="our-team">
                              <img class="img-fluid" src="{{ asset('assets/images/team/' . $team->image) }}" alt="{{ $team->name }}">
                    
                              <h4>{{ $team->name }}</h4>
                              <p>Designation : {{ $team->designation }}</p>
                              <p>Contact : {{ $team->contact }}</p>
                              <p>Email : {{ $team->email }}</p>
                              <p>{!! $team->description !!}</p>
                            
                
               </div>
          </div>

     </div>
</div>
@endsection