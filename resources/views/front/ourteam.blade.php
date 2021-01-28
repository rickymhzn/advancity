@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h3>Our Team</h3>
     </div>
</section>

<div class="page-wrapper">
     <div class="row">
     @foreach($teams as $team)
          <div class="col-md-3">
               <div class="our-teams">
                    <div class="card">
                         <div class="card-body">
                              <img class="img-fluid" src="{{ asset('assets/images/team/' . $team->image) }}" alt="{{ $team->name }}">
                         </div>
                         <div class="card-title">
                              <h4>{{ $team->name }}</h4>
                              <p>{{ $team->designation }}</p>
                              <a type="button" href="{{ route('single.team',['slug' => $team->slug ]) }}">View Profile</a>
                         </div>

                    </div>
               </div>
          </div>
          @endforeach
     </div>
</div>
@endsection