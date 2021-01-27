@extends('front.layouts.app')
@section('content')
<!-- slidier -->
<div id="mainCarousel" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
          @foreach($sliders as $slider)
          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
               <img class="d-block w-100" src="{{ asset('/assets/images/sliders/'. $slider->image) }}"
                    alt="{{ $slider->title }}">
          </div>
          @endforeach
     </div>
     <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
     </a>
</div>
<!-- slider section end -->

<!-- find your course -->
<div class="findcourse">
     <div class="row">
          <!-- <div class="col-md-4">
          <div class="card">
            <div class="card-title mx-auto">
              <h4>Choose Your Course</h4>
            </div>
            <div class="card-body">
              <button class="find-button">Find your course</button>
              <br>
              <br>
              <select name="country" id="country">
                <option value="1" selected>select country</option>
                <option value="2" >Australia</option>
                <option value="3" >Newzeland</option>
                <option value="3" >USA</option>
                <option value="3" >Canada</option>
                <option value="3" >UK</option>
                <option value="4" >Netherland</option>
              </select>
              <br>
              <br>
              <select name="level" id="level">
                <option value="1" selected>Select Level</option>
                <option value="2" >Foundation</option>
                <option value="3" >Diploma</option>
                <option value="3" >Bachelor</option>
                <option value="3" >Master</option>
                <option value="3" >PHD</option>
              </select>
              <br>
              <br>
              <select class="scrollable-menu" name="category" id="category" >
                <option value="1" selected>Select Category</option>
                <option value="2" >Foundation</option>
                <option value="3" >Diploma</option>
                <option value="3" >Bachelor</option>
                <option value="3" >Master</option>
                <option value="3" >PHD</option>
                <option value="2" >Foundation</option>
                <option value="3" >Diploma</option>
                <option value="3" >Bachelor</option>
                <option value="3" >Master</option>
                <option value="3" >PHD</option>
                <option value="2" >Foundation</option>
                <option value="3" >Diploma</option>
                <option value="3" >Bachelor</option>
                <option value="3" >Master</option>
                <option value="3" >PHD</option>
              </select>
              <br><br>
              <button type="button" class="btn btn-primary">Search</button>
            </div>
          </div>
        </div> -->
          <div class="col-md-12">
               <h4 class="main-title mx-auto">Choose Your Destination</h4>
               <div class="row">
                    @foreach( $countries as $country)
                    <div class="col-md-4">
                         <div class="content">
                              <a href="{{ route('single.destination',['slug' => $country->slug]) }}">
                                   <div class="content-overlay"></div>
                                   <img class="content-image"
                                        src="{{ asset('assets/images/country/' . $country->image) }}" alt="">
                                   <div class="content-details fadeIn-bottom">
                                        <h6 class="content-title">Read More</h6>
                                   </div>
                                   <div class="bottom-left">{{ $country->country }}</div>
                              </a>
                         </div>
                    </div>
                    @endforeach
               </div>
               <div class="text-center view-all">
                    <a class="view" type="button" href="{{ route('destinations') }}">View All</a>
               </div>
          </div>
     </div>
</div>
<!-- find your course end -->
<!-- test preparation -->
<div class="testprepration">
     <div class="col-md-12 col-sm-12 col-lg-12">
          <h3>TEST PREPARATION</h3>
          <h6 class="test-prepare">Upstart your educational journey abroad with our test preparation classes
          </h6>
          <ul class="nav nav-tabs" id="testSubjectTab" role="tablist">
               @foreach($testSubjects as $testsubject)
               <li class="nav-item">
                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="subject-{{ $testsubject->id }}-tab" data-toggle="tab"
                         href="#subject-{{ $testsubject->id }}" role="tab" aria-controls="testSubject"
                         aria-selected="true">
                         <img class="image-fluid"
                              src="{{ asset('assets/images/subject/thumb/' . $testsubject->thumbnail) }}"
                              alt="{{ $testsubject->name }}">
                    </a>
               </li>
               @endforeach
          </ul>
          <div class="tab-content">
               @foreach($testSubjects as $testsubject)
               <div class="tab-pane fade {{ $loop->first ? 'active in show' : '' }}"
                    id="subject-{{ $testsubject->id }}" role="tabpanel" data-toggle="tab"
                    aria-labelledby="subject-{{ $testsubject->id }}-tab">
                    <div class="row">
                         <div class="col-md-6">
                              <span>
                                   <h3>{{ $testsubject->name }}</h3>
                                   {!! $testsubject->description !!}
                              </span>
                         </div>
                         <div class="col-md-6">
                              <h3>The test at a glance: {{ $testsubject->name }}</h3>
                              <div class="detail-toggle">
                                   <div id="testAccordion">
                                   @foreach($testSubjectInfos as $testSubjectInfo)
                                        @if( $testsubject->id == $testSubjectInfo->subject_id )
                                        <div class="card">
                                             <div class="card-header" id="{{ $testSubjectInfo->subject->name}}-{{ $testSubjectInfo->id }}">
                                                  <h5 class="mb-0">
                                                       <button class="btn btn-link" data-toggle="collapse"
                                                            data-target="#collapse-{{ $testSubjectInfo->subject->name}}-{{ $testSubjectInfo->id }}" aria-expanded="true"
                                                            aria-controls="collapse-{{ $testSubjectInfo->subject->name}}-{{ $testSubjectInfo->id }}">
                                                            Scholarships in Australia for International Students:
                                                       </button>
                                                  </h5>
                                             </div>

                                             <div id="collapse-{{ $testSubjectInfo->subject->name}}-{{ $testSubjectInfo->id }}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="{{ $testSubjectInfo->subject->name}}-{{ $testSubjectInfo->id }}"
                                                  data-parent="#testAccordion">
                                                  <div class="card-body">
                                                       There are many grants, scholarships and bursaries available to
                                                       assist International students financially in Australia. The
                                                       Australian Government has invested over a $300 million in
                                                       scholarships for international students. Please call us for more
                                                       information in this regard. You can also find more information
                                                       this link:
                                                       https://www.studyinaustralia.gov.au/English/Australian-Education/Scholarships
                                                  </div>
                                             </div>
                                        </div>
                                        @endif
                                       @endforeach
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
               @endforeach
          </div>
     </div>
</div>
<!-- test preparation end -->
<!-- ourteam -->
<div class="our-team">
     <h3>Meet our Team</h3>
</div>
<div class="for-team-slider multiple-items">
     @foreach($teams as $team)
     <div class="our-teams">
          <div class="card">
               <div class="card-body">
                    <img class="img-fluid" src="{{ asset('assets/images/team/' . $team->image) }}"
                         alt="{{ $team->name }}">
               </div>
               <div class="card-title">
                    <h4>{{ $team->name }}</h4>
                    <p>{{ $team->designation }}</p>
                    <a type="button" href="{{ route('single.team',['slug' => $team->slug]) }}">View Profile</a>
               </div>
          </div>

     </div>
     @endforeach

</div>
<div class="text-center mb-5">
     <a class="view" type="button" href="{{ route('ourteam') }}">View All</a>
</div>
<!-- ourteam end -->
<!-- counter -->
<section class="counter-section">
     <div class="container">
          <div class="row">

               @foreach($counters as $counter)
               <div class="four col">
                    <div class="counter-box colored"> <i class="{{ $counter->icon }}"></i> <span
                              class="counter">{{ $counter->value }}+</span>
                         <p>{{ $counter->title }}</p>
                    </div>
               </div>
               @endforeach

          </div>
     </div>
</section>
<!-- counterend -->
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
          <div class="text-center">
               <a class="view" type="button" href="{{ route('universities') }}">View All</a>
          </div>
     </div>

</div>
<!-- choose your universityend -->
<!-- testionmial -->
<section class="testimonial text-center">
     <div class="container">

          <div class="heading white-heading">
               Testimonial
          </div>
          <div id="testimonialSlider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                    @foreach($testimonials as $testimonial)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                         <div class="testimonial4_slide">
                              <img src="{{ asset('assets/images/testimonial/' . $testimonial->image) }}"
                                   class="img-circle img-fluid" alt="{{ $testimonial->name }}" />
                              {!! $testimonial->description !!}
                              <h4>{{ $testimonial->name }}</h4>
                              <p>{{ $testimonial->subtitle }}</p>
                         </div>
                    </div>
                    @endforeach
               </div>
               <a class="carousel-control-prev" href="#testimonialSlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#testimonialSlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
               </a>
          </div>
     </div>
</section>


@endsection