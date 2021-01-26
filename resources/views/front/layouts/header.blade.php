<header>
     <div class="top-nav d-none d-xl-block">
          <div class="col-md-12 col-sm-12 col-lg-12">
               <div class="left">
                    <ul>
                         <li>{{ $sitesetting->company_phone }}</li>
                         <li>{{ $sitesetting->company_email }}</li>
                    </ul>
               </div>
               <div class="right">
                    <ul>
                         <li>
                              <a href="">
                                   <i class="fa fa-facebook"></i>
                              </a>
                         </li>
                         <li>
                              <a href="">
                                   <i class="fa fa-twitter"></i>
                              </a>
                         </li>
                         <li>
                              <a href="">
                                   <i class="fa fa-instagram"></i>
                              </a>
                         </li>
                    </ul>
               </div>
          </div>
     </div>
     <div class="bottom-nav">
          <nav class="navbar navbar-expand-lg navbar-light ">
               <a class="navbar-brand" href="#">
                    <img class="img-responsive header-logo"
                         src="{{ asset('/assets/images/settings/'. $sitesetting->company_logo) }}" alt="logo">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav navbar-right">
                         <li>
                              <a class="color-black" href="{{ route('index') }}">Home</a>
                         </li>

                         <li class="dropdown">
                              <a class="dropbtn color-black">About &nbsp;<i class="fa fa-caret-down"></i></a>
                              <ul class="dropdown-menu" id="#dropdownmenu">
                                   <li><a href='{{route ('about')}}' style="padding-left:15px">Introduction</a></li>
                                   <li><a href='{{route ('ourteam')}}' style="padding-left:15px">Our Team</a></li>
                              </ul>
                         </li>
                         <li class="dropdown">
                              <a class="dropbtn color-black" href="#">Our Services&nbsp;<i
                                        class="fa fa-caret-down"></i></a>
                              <ul class="dropdown-menu">
                                   <li><a href='{{route('services')}}' style="padding-left:15px">Career
                                             Counselling</a></li>
                                   <li><a href="#" style="padding-left:15px">University Selection</a></li>
                                   <li><a href="#" style="padding-left:15px">Scholarship Assistance</a></li>
                                   <li><a href="#" style="padding-left:15px">Application Process</a></li>
                                   <li><a href="#" style="padding-left:15px">Financial Guidlines & GTE checks</a></li>
                                   <li><a href="#" style="padding-left:15px">Interview Preparation</a></li>
                                   <li><a href="#" style="padding-left:15px">Visa Application Lodgement</a></li>
                                   <li><a href="#" style="padding-left:15px">Pre-Departure Session</a></li>
                                   <li><a href="#" style="padding-left:15px">Accommodation & Airport Pick</a></li>
                                   <li><a href="#" style="padding-left:15px">University Transfer</a></li>
                                   <li><a href="#" style="padding-left:15px">VISA Extension</a></li>
                              </ul>
                         </li>
                         <li class="dropdown">
                              <a class="dropbtn color-black" href="#">Study Abroad&nbsp;<i
                                        class="fa fa-caret-down"></i></a>
                              <ul class="dropdown-menu">
                                   <li><a href='{{route('studyabroad')}}' style="padding-left:15px">Australia</a></li>
                                   <li><a href="#" style="padding-left:15px">New Zealand</a></li>
                                   <li><a href="#" style="padding-left:15px">UK</a></li>
                                   <li><a href="#" style="padding-left:15px">USA</a></li>
                                   <li><a href="#" style="padding-left:15px">Canada</a></li>
                                   <li><a href="#" style="padding-left:15px">Netherlands</a></li>
                                   <li><a href="#" style="padding-left:15px">Germany</a></li>
                                   <li><a href="#" style="padding-left:15px">India</a></li>
                              </ul>
                         </li>

                         <li class="dropdown" class="active">
                              <a class="dropbtn color-black" href="#">Our Courses&nbsp;<i
                                        class="fa fa-caret-down"></i></a>
                              <ul class="dropdown-menu">
                                   <li><a href='{{route('ourcourses')}}' style="padding-left:15px">Test Preparation</a>
                                   </li>
                                   <li><a href="#" style="padding-left:15px">English Language</a></li>
                                   <li><a href="#" style="padding-left:15px">Online Degree</a></li>
                              </ul>
                         </li>
                         <li class="dropdown">
                              <a class="dropbtn color-black" href="#">Scholarships&nbsp;<i
                                        class="fa fa-caret-down"></i></a>
                              <ul class="dropdown-menu">
                                   <li><a href='{{route('schoolarship')}}' style="padding-left:15px">Scholarships in
                                             USA</a></li>
                                   <li><a href="#" style="padding-left:15px">Scholarships in UK</a></li>
                                   <li><a href="#" style="padding-left:15px">Scholarships in Canada</a></li>
                                   <li><a href="#" style="padding-left:15px">Scholarships in New Zealand</a></li>
                                   <li><a href="#" style="padding-left:15px">Scholarships in Australia</a></li>
                                   <li><a href="#" style="padding-left:15px">Scholarships in Netherlands</a></li>
                                   <li><a href="#" style="padding-left:15px">Scholarships in India</a></li>
                              </ul>
                         </li>
                         <li class="dropdown dmenu">
                              <a class="dropbtn color-black" href='{{route('contactus')}}'>Contact Us</a>

                         </li>
                    </ul>

               </div>
          </nav>
     </div>
</header>