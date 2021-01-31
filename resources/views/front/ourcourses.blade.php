@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h3>Our Courses | {{ $course->name }}</h3>
     </div>
</section>

<div class="page-wrapper">
     <div class="row">
          @foreach($subjects as $subject)
          <div class="col-md-4">
               <div class="content">
                    <a href="{{ route('single.subject',['slug' => $course->slug,'subject' => $subject->slug,'id' => $subject->id ]) }}">
                         <div class="content-overlay"></div>
                         <img class="content-image" src="{{ asset('assets/images/subject/' . $subject->image) }}"
                              alt="{{ $subject->name }}">
                         <div class="content-details fadeIn-bottom">
                              <h6 class="content-title">Read More</h6>
                         </div>
                         <div class="bottom-lefts">
                              <span class="test-title">{{ $subject->name }}</span>
                              
                         </div>
                    </a>
               </div>
          </div>
          @endforeach
     </div>
</div>
@endsection