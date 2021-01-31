@extends('front.layouts.app')
@section('content')

<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h3>{{ $page->title }}</h3>
     </div>
</section>
<div class="page-wrapper">
          <div class="row">
               <div class="col-md-12">
                   {!! $page->description !!}
               </div>
          </div>
</div>
@endsection