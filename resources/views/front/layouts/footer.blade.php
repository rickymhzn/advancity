<footer>
     <div class="important-link" style="background-image: url('');">
          <div class="row top-footer">
               <div class="col-md-3">
                    <h3>Head office</h3>
                    <ul>
                         <li>
                              <i class="fa fa-map-marker"></i>
                              <p>{{ $sitesetting->company_address }}</p>
                         </li>
                         <li>
                              <i class="fa fa-phone"></i>
                              <p>{{ $sitesetting->company_phone }}</p>
                         </li>
                         <li>
                              <i class="fa fa-whatsapp"></i>
                              <p>{{ $sitesetting->company_mobile }}</p>
                         </li>
                         <li>
                              <i class="fa fa-envelope"></i>
                              <p>{{ $sitesetting->company_email }}</p>
                         </li>
                    </ul>
               </div>
               <div class="col-md-3">
                    <h3>Quick Link</h3>
                    <ul>
                         <li>
                              <i class="fa fa-check"></i>
                              <a href="./index.html">
                                   <p>Home</p>
                              </a>
                         </li>
                         <li>
                              <i class="fa fa-check"></i>
                              <a href="./index.html">
                                   <p>About</p>
                              </a>
                         </li>
                         <li>
                              <i class="fa fa-check"></i>
                              <a href="./index.html">
                                   <p>Our Services</p>
                              </a>
                         </li>
                         <li>
                              <i class="fa fa-check"></i>
                              <a href="./index.html">
                                   <p>Study Abroad</p>
                              </a>
                         </li>
                         <li>
                              <i class="fa fa-check"></i>
                              <a href="./index.html">
                                   <p>Our Courses</p>
                              </a>
                         </li>
                         <li>
                              <i class="fa fa-check"></i>
                              <a href="./index.html">
                                   <p>Scholarship</p>
                              </a>
                         </li>
                    </ul>
               </div>
               <div class="col-md-3">
                    <h3>Find Us Here</h3>
                    <div style="width: 100%; background-color: #fff; padding: 10px;">
                         <iframe style="padding:10px" width="100%" height="270" frameborder="0" scrolling="no"
                              marginheight="0" marginwidth="0"
                              src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=cosmioinfotech+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                         </iframe>
                    </div>
               </div>
               <div class="col-md-3">
                    <h3>our facebook page</h3>
                    <div id="fb-root"></div>
                    <iframe
                         src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcosmioinfotech&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                         width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                         allowfullscreen="true"
                         allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
               </div>
          </div>
     </div>
     <div class="copyright">
          <div class="container">
               <div class="row bottom-footer">
                    <div class="col-md-6">
                         <span>{{ $sitesetting->copyright }}</span>
                    </div>
                    <div class="col-md-6">
                         <span>PoweredBy <a href="http://cosmioinfotech.com/" target="_blank">Cosmio Infotech</a>
                         </span>
                         <span style="display:none;">Developed by Ricky Maharjan</span>
                    </div>
               </div>
          </div>
     </div>
</footer>