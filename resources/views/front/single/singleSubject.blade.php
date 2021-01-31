@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h3>Our Courses | {{ $course->name }} | {{ $subject->name }} </h3>
     </div>
</section>

<div class="page-wrapper">
     <section class="container">
     <div class="row">
          <div class="col-md-12">
               <h4 class="main-title mx-auto"></h4>
               <div class="row">               
                    <div class="col-12">
                         <h4>{{ $subject->name }}</h4>
                          {!! $subject->description !!} 
                          <div id="subjectaccordion">
                             @foreach($subjectinfos as $subjectinfo)
                             <div class="card">
                                   <div class="card-header bg-primary" id="heading-{{ $subjectinfo->id }}">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-{{ $subjectinfo->id }}" aria-expanded="true" aria-controls="collapse-{{ $subjectinfo->id }}">
                                             {{ $subjectinfo->title }}
                                        </button>
                                        </h5>
                                   </div>

                                   <div id="collapse-{{ $subjectinfo->id }}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading-{{ $subjectinfo->id }}" data-parent="#subjectaccordion">
                                        <div class="card-body">
                                       {!! $subjectinfo->description !!}
                                        </div>
                                   </div>
                              </div>
                             @endforeach
                         </div>
                          <img class="img-fluid" src="{{ asset('assets/images/subject/' . $subject->image) }}" alt="{{ $subject->name }}" > 
                    </div>
                   
               </div>
          </div>
     </div>
     </section>
</div>
@endsection