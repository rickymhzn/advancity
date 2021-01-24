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
            </li><li>
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
          <img class="img-responsive header-logo" src="{{ asset('/assets/images/settings/'. $sitesetting->company_logo) }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="./index.html">Home</a>
        </li>
        
        <li class="dropdown">
          <a class="dropbtn">About &nbsp;<i class="fa fa-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="./about.html">Introduction</a></li>
            <li><a href="./ourteam.html">Our Team</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropbtn" href="#">Our Services&nbsp;<i class="fa fa-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="./careercounsiling.html">Career Counselling</a></li>
            <li><a href="#">University Selection</a></li>
            <li><a href="#">Scholarship Assistance</a></li>
            <li><a href="#">Application Process</a></li>
            <li><a href="#">Financial Guidlines & GTE checks</a></li>
            <li><a href="#">Interview Preparation</a></li>
            <li><a href="#">Visa Application Lodgement</a></li>
            <li><a href="#">Pre-Departure Session</a></li>
            <li><a href="#">Accommodation &  Airport Pick-up</a></li>
            <li><a href="#">University Transfer</a></li>
            <li><a href="#">VISA Extension</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropbtn" href="#">Study Abroad&nbsp;<i class="fa fa-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="./studyaustralia.html">Australia</a></li>
            <li><a href="#">New Zealand</a></li>
            <li><a href="#">UK</a></li>
            <li><a href="#">USA</a></li>
            <li><a href="#">Canada</a></li>
            <li><a href="#">Netherlands</a></li>
            <li><a href="#">Germany</a></li>
            <li><a href="#">India</a></li>
          </ul>
        </li>
        
        <li class="dropdown" class="active">
          <a class="dropbtn" href="#">Our Courses&nbsp;<i class="fa fa-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="./testpreparation.html">Test Preparation</a></li>
            <li><a href="#">English Language</a></li>
            <li><a href="#">Online Degree</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropbtn" href="#">Scholarships&nbsp;<i class="fa fa-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="././schoolarshipinusa.html">Scholarships in USA</a></li>
            <li><a href="#">Scholarships in UK</a></li>
            <li><a href="#">Scholarships in Canada</a></li>
            <li><a href="#">Scholarships in New Zealand</a></li>
            <li><a href="#">Scholarships in Australia</a></li>
            <li><a href="#">Scholarships in Netherlands</a></li>
            <li><a href="#">Scholarships in India</a></li>
          </ul>
        </li>
        <li class="dropdown dmenu">
          <a class="dropbtn" href="#">Contact Us&nbsp;<i class="fa fa-caret-down"></i></a>
          <ul class="dropdown-menu sm-menu">
            <li><a href="#">Mission</a></li>
            <li><a href="#">Vision</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </li>
      </ul>
          
  </div>
</nav>
</div>
  </header>