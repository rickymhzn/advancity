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
                              <a href="#">
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
                    <a class="view" type="button">View All</a>
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
          <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                         aria-controls="home" aria-selected="true">
                         <img class="image-responsive" src="./img/ilets.jpg" alt="">
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                         aria-controls="profile" aria-selected="false">
                         <img class="image-responsive" src="./img/tofel.png" alt="">
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                         aria-controls="contact" aria-selected="false">
                         <img class="image-responsive" src="./img/sat.jpg" alt="">
                    </a>
               </li>
          </ul>
          <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                         <div class="col-md-6">
                              <span>
                                   <h3>ILETS</h3>
                                   <p>Our IELTS classes are tailored to suit all types of trainees. Hence, we have
                                        successfully set the benchmark of regular score of band 7 and above. Our some
                                        students have score 8.5 which can be found
                                        online:https://www.youtube.com/watch?v=9Xd-q8pYkcI
                                        We believe in the philosophy of score and nothing less than that. Following this
                                        philosophy we have moved steps further from traditional IELTS class set up, for
                                        we have designed an additional lesson to help improve the non English background
                                        test takers to pull them up to the level of English background ones. This means
                                        we have developed an overall score growth program that all traditional centers
                                        lack. As one of the most prominent abroad study consultants, we are well aware
                                        of the fact what a 7.0+ score means to an abroad study aspirant. We also know
                                        that scoring 7.0+ in each band catapults a candidate’s possibilities in all
                                        academically prominent nations. Therefore, we have appointed instructors who
                                        have tremendous knowledge of the Test and have necessary training and
                                        certification.</p>
                              </span>
                         </div>
                         <div class="col-md-6">
                              <h3>The test at a glance: IELTS</h3>
                              <div class="detail-toggle">
                                   <div id="accordion">
                                        <div class="card">
                                             <div class="card-header" id="headingOne">
                                                  <h5 class="mb-0">
                                                       <button class="btn btn-link" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            Scholarships in Australia for International Students:
                                                       </button>
                                                  </h5>
                                             </div>

                                             <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                  data-parent="#accordion">
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
                                        <div class="card">
                                             <div class="card-header" id="headingTwo">
                                                  <h5 class="mb-0">
                                                       <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            Application Process
                                                       </button>
                                                  </h5>
                                             </div>
                                             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                  data-parent="#accordion">
                                                  <div class="card-body">
                                                       Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                       accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                       non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                       laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                                       bird on it squid single-origin coffee nulla assumenda shoreditch
                                                       et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                                       cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                       vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                       aesthetic synth nesciunt you probably haven't heard of them
                                                       accusamus labore sustainable VHS.
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="card">
                                             <div class="card-header" id="headingThree">
                                                  <h5 class="mb-0">
                                                       <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            Entry Requirements/Eligibility
                                                       </button>
                                                  </h5>
                                             </div>
                                             <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                  data-parent="#accordion">
                                                  <div class="card-body">
                                                       Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                       accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                       non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                       laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                                       bird on it squid single-origin coffee nulla assumenda shoreditch
                                                       et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                                       cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                       vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                       aesthetic synth nesciunt you probably haven't heard of them
                                                       accusamus labore sustainable VHS.
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
               <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <span>
                         <h3>TOEFL</h3>
                         <p>TOEFL (Test of English as a Foreign Language) is administered by ETS and is a major
                              requirement for non-native speakers of English who wish to pursue their Higher Studies
                              either Undergraduate or Graduate including the reseach in the US and some other
                              English-speaking countries. In Nepal, TOEFL test is administered by different test centers
                              as authorized by the ETS. Education Asia guides the students aspiring to pursue studies in
                              the English medium universities and the colleges to prepare for the TOEFL test. Education
                              Asia offers different versions of the TOEFL Test such as iBT (internet Based Test) & PBT
                              (Paper Based Test). TOEFL is a six-week course two hours a day including the instruction
                              and the lab work at Education Asia. Education Asia faculty closely mentor and facilitate
                              the learning and the lab work of the students so that they get acquainted with the
                              techniques and tactics to do excellent in the real test. Education Asia also helps the
                              students to register for the TOEFL Test and admission at American universities. Students
                              can take our TOEFL classes visiting our study center or online. Please call us for further
                              information. Helpline: 9801115600, 01-4267889
                              The TOEFL iBT test is scored on a scale of 0 to 120 points. Each of the four sections
                              (Reading, Listening, Speaking, Writing) receives a scaled score from 0 to 30. More than
                              11,000 universities & other institutions in over 150 countries accept TOEFL® scores.</p>
                    </span>
               </div>
               <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <span>
                         <h3>TOEFL</h3>
                         <p>TOEFL (Test of English as a Foreign Language) is administered by ETS and is a major
                              requirement for non-native speakers of English who wish to pursue their Higher Studies
                              either Undergraduate or Graduate including the reseach in the US and some other
                              English-speaking countries. In Nepal, TOEFL test is administered by different test centers
                              as authorized by the ETS. Education Asia guides the students aspiring to pursue studies in
                              the English medium universities and the colleges to prepare for the TOEFL test. Education
                              Asia offers different versions of the TOEFL Test such as iBT (internet Based Test) & PBT
                              (Paper Based Test). TOEFL is a six-week course two hours a day including the instruction
                              and the lab work at Education Asia. Education Asia faculty closely mentor and facilitate
                              the learning and the lab work of the students so that they get acquainted with the
                              techniques and tactics to do excellent in the real test. Education Asia also helps the
                              students to register for the TOEFL Test and admission at American universities. Students
                              can take our TOEFL classes visiting our study center or online. Please call us for further
                              information. Helpline: 9801115600, 01-4267889
                              The TOEFL iBT test is scored on a scale of 0 to 120 points. Each of the four sections
                              (Reading, Listening, Speaking, Writing) receives a scaled score from 0 to 30. More than
                              11,000 universities & other institutions in over 150 countries accept TOEFL® scores.</p>
                    </span>
               </div>
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
                    <a type="button">View Profile</a>
               </div>
          </div>
     </div>
     @endforeach
</div>
<!-- ourteam end -->
<!-- counter -->
<section class="counter-section">
     <div class="container">
          <div class="row">
               <div class="four col-md-3">
                    <div class="counter-box colored"> <i class="fa fa-university"></i> <span class="counter">200+</span>
                         <p>Institutions</p>
                    </div>
               </div>
               <div class="four col-md-3">
                    <div class="counter-box"> <i class="fa fa-group"></i> <span class="counter">2000+</span>
                         <p>Students</p>
                    </div>
               </div>
               <div class="four col-md-3">
                    <div class="counter-box"> <i class="fa fa-flag"></i> <span class="counter">8+</span>
                         <p>Countries</p>
                    </div>
               </div>
               <div class="four col-md-3">
                    <div class="counter-box"> <i class="fa fa-book"></i> <span class="counter">3000+</span>
                         <p>courses</p>
                    </div>
               </div>
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
                    <a href='{{ $university->website }}'>
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
               <a class="view" type="button">View All</a>
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
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                    <div class="carousel-item active">
                         <div class="testimonial4_slide">
                              <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown
                                   printer took a galley of type and scrambled it to make a type specimen book. </p>
                              <h4>Client 1</h4>
                         </div>
                    </div>
                    <div class="carousel-item">
                         <div class="testimonial4_slide">
                              <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown
                                   printer took a galley of type and scrambled it to make a type specimen book. </p>
                              <h4>Client 2</h4>
                         </div>
                    </div>
                    <div class="carousel-item">
                         <div class="testimonial4_slide">
                              <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                   has been the industry's standard dummy text ever since the 1500s, when an unknown
                                   printer took a galley of type and scrambled it to make a type specimen book. </p>
                              <h4>Client 3</h4>
                         </div>
                    </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
               </a>
          </div>
     </div>
</section>


@endsection