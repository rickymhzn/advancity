<header>
     <div class="top-nav d-none d-xl-block">
          <div class="col-md-12 col-sm-12 col-lg-12">
               <div class="left">
                    <ul>
                         <li> <i class="fa fa-phone"></i> {{ $sitesetting->company_phone }}</li>
                         <li><a href="mailto:{{ $sitesetting->company_email }}"><i class="fa fa-envelope"></i> {{ $sitesetting->company_email }}</a></li>
                    </ul>
               </div>
               <div class="right">
                    <ul>
                         <li>
                              <a href="https://www.facebook.com/advansityedu/" target="_blank">
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
    
    <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
          <!-- Brand -->
          <a class="navbar-brand" href="{{ route('index') }}">
                              <img class="img-responsive header-logo"
                                   src="{{ asset('/assets/images/settings/'. $sitesetting->company_logo) }}" alt="logo">
                         </a>

          <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navbar links -->
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav ">
          <li>
                                        <a class="color-black" href="{{ route('index') }}">Home</a>
                                   </li>

                                   <li class="dropdown">
                                        <a class="dropbtn color-black">About &nbsp;<i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu" id="#dropdownmenu">
                                             <li><a href="{{route ('about')}}"
                                                       style="padding-left:15px; display:block;">Introduction</a></li>
                                                       <li><a href="{{route ('about.companyprofile')}}"
                                                       style="padding-left:15px; display:block;">Company Profile</a></li>
                                             <li><a href="{{route ('ourteam')}}" style="padding-left:15px; display:block;">Our
                                                       Team</a></li>
                                        </ul>
                                   </li>
                                   <li class="dropdown">
                                        <a class="dropbtn color-black" href="#">Our Services&nbsp;<i
                                                  class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu">
                                             @foreach($allServices as $service)
                                             <li><a href="{{ route('single.service',['slug'=>$service->slug]) }}"
                                                       style="padding-left:15px; display:block;">{{ $service->title }}</a></li>
                                             @endforeach
                                        </ul>
                                   </li>
                                   <li class="dropdown">
                                        <a class="dropbtn color-black" href="{{ route('destinations') }}">Study Abroad&nbsp;<i
                                                  class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu">
                                             @foreach($allCountries as $country)
                                             <li><a href="{{ route('single.destination',['slug'=>$country->slug]) }}"
                                                       style="padding-left:15px; display:block;">{{ $country->country}}</a></li>
                                             @endforeach
                                        </ul>
                                   </li>

                                   <li class="dropdown" class="active">
                                        <a class="dropbtn color-black" href="#">Our Courses&nbsp;<i
                                                  class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu">
                                             @foreach($allCourses as $course)
                                             <li><a href="{{ route('ourcourses',['slug'=> $course->slug]) }}"
                                                       style="padding-left:15px; display:block;">{{ $course->name }}</a>
                                             </li>
                                             @endforeach
                                        </ul>
                                   </li>
                                   <li class="dropdown">
                                        <a class="dropbtn color-black" href="{{ route('scholarship') }}">Scholarships&nbsp;<i
                                                  class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu">
                                        @foreach( $allScholarships as $scholarship)
                                             <li><a href="{{ route('single.scholarship',['country'=> $scholarship->country->slug]) }}" style="padding-left:15px">{{ $scholarship->title }}</a></li>
                                        @endforeach
                                        </ul>
                                   </li>
                                   <li class="dropdown dmenu">
                                        <a class="dropbtn color-black" href="{{route('contactus')}}">Contact Us</a>

                                   </li>
          </ul>
          </div>
          </div>
     </nav> 
     </div>
</header>