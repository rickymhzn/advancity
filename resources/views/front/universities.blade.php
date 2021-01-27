@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h1>Universities</h1>
     </div>
</section>

<div class="page-wrapper">
    <!-- choose your university -->
<div class="choose-university">
     <div class='container pd-container'>
          <h3 class='pd-title text-center'>Choose Your University</h3>
          <div class='row pd-row1'>
               @foreach( $universities as $university)
               <div class='pd-area col-md-4'>
                    <a href="{{ $university->website }}" target="_blank">
                         <div class='effect-bubba pd-rec'><img class='img-reponsive'
                                   src="{{ asset('assets/images/university/' . $university->image) }}"
                                   alt="{{ $university->name }}" />
                              <figcaption>

                              </figcaption>
                         </div>
                    </a>
                    <div class='pd-des pd-sq-des text-center'>
                         <span>{{ $university->name }}</span>
                    </div>
               </div>
               @endforeach
          </div>
     </div>

</div>
<!-- choose your universityend -->
</div>
@endsection