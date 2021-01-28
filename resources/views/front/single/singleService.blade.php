@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h3>Our Services | {{ $service->title }}</h3>
     </div>
</section>

<div class="page-wrapper">
     <div class="row">
          <div class="col-md-10">
               <div class="carrer">
               {!! $service->description !!}
               </div>
          </div>
          <div class="col-md-2">
               <div class="counselling">
               <img class="img-fluid" src="{{ asset('assets/images/service/' . $service->image) }}" alt="{{ $service->title }}" >
               </div>
          </div>
     </div>
     <div class="related-link">
          <h3>Related Topics</h3>
          <div class="row">
               <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                         <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                              role="tab" aria-controls="v-pills-home" aria-selected="true">University Selection</a>
                         <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                              role="tab" aria-controls="v-pills-profile" aria-selected="false">Scholarship
                              Assistance</a>
                         <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                              role="tab" aria-controls="v-pills-messages" aria-selected="false">Application Process</a>
                         <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                              role="tab" aria-controls="v-pills-settings" aria-selected="false">Financial Guidlines &
                              GTE checks</a>
                    </div>
               </div>
               <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                         <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                              aria-labelledby="v-pills-home-tab">
                              <div class="row">
                                   <div class="col-md-7">
                                        <p>Our Counselors at Education Asia help the students to select the right
                                             universities after the career counselling based on their interest, academic
                                             profile and financial circustanes. Education Asia has direct tie -up with
                                             more 200 world class highly respected universities from the USA, UK,
                                             Australia, New Zealand, Canada, Germany, Netherlands and India</p>
                                   </div>
                                   <div class="col-md-5">
                                        <img class="img-responsive" src="./img/shs.jpg" alt="">
                                   </div>
                              </div>
                         </div>
                         <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                              aria-labelledby="v-pills-profile-tab">
                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                   aria-labelledby="v-pills-home-tab">
                                   <div class="row">
                                        <div class="col-md-7">
                                             <p>Education Asia has a team of highly experienced counselors who are
                                                  working around the clock to support our clients for different type of
                                                  scholarships from the USA, UK, Australia, New Zealand, Germany,
                                                  Netherlands and India. As per our official records, thousand of our
                                                  students have already received partial and full scholarships to study
                                                  in the country of their choice. I would like you to contact our
                                                  counselors for latest updates on scholarships. To qualify for
                                                  scholarships, you need to have strong academic profile, English
                                                  Proficiency, and competitive test such as SAT, GRE and GMAT with
                                                  satisfactory score. You also need to write strong Statement of Purpose
                                                  (SoP) under our counselor’s guideline. You can also check the
                                                  following links to find out scholarships in different countries which
                                                  current being offered by our partner universities:
                                                  http://www.educationasia.com/page/scholarships</p>
                                        </div>
                                        <div class="col-md-5">
                                             <img class="img-responsive" src="./img/121.png" alt="">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                              aria-labelledby="v-pills-messages-tab">
                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                   aria-labelledby="v-pills-home-tab">
                                   <div class="row">
                                        <div class="col-md-7">
                                             <p>Our Counselors at Education Asia help the students to select the right
                                                  universities after the career counselling based on their interest,
                                                  academic profile and financial circustanes. Education Asia has direct
                                                  tie -up with more 200 world class highly respected universities from
                                                  the USA, UK, Australia, New Zealand, Canada, Germany, Netherlands and
                                                  India</p>
                                        </div>
                                        <div class="col-md-5">
                                             <img class="img-responsive" src="./img/shs.jpg" alt="">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                              aria-labelledby="v-pills-settings-tab">
                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                   aria-labelledby="v-pills-home-tab">
                                   <div class="row">
                                        <div class="col-md-7">
                                             <p>Our Counselors at Education Asia help the students to select the right
                                                  universities after the career counselling based on their interest,
                                                  academic profile and financial circustanes. Education Asia has direct
                                                  tie -up with more 200 world class highly respected universities from
                                                  the USA, UK, Australia, New Zealand, Canada, Germany, Netherlands and
                                                  India</p>
                                        </div>
                                        <div class="col-md-5">
                                             <img class="img-responsive" src="./img/shs.jpg" alt="">
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

     </div>

</div>
@endsection