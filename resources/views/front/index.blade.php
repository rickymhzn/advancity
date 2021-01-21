@extends('front.layouts.app')
@section('content')
<!-- Slider Starts Here -->
<div id="mainCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mainCarousel" data-slide-to="1"></li>
    <li data-target="#mainCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  @foreach($sliders as $slider)
    <div class="item active">
      <img src="{{ asset('assets/images/sliders/' . $slider->image) }}" alt="slider">
     @endforeach
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#mainCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mainCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Slider Ends Here -->

@endsection