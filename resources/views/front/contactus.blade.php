@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h3>Contact US</h3>
     </div>
</section>

<div class="page-wrapper">
     <section class="container mt-5">
          <!--Contact heading-->
          <div class="row">
               <!--Grid column-->
               <div class="col-sm-12 mb-4 col-md-5">
                    <!--Form with header-->
                    <div class="card border-primary rounded-0">
                         <div class="card-header p-0">
                              <div class="bg-primary text-white text-center py-2">
                                   <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                                   <p class="m-0">We’ll write rarely, but only the best content.</p>
                              </div>
                         </div>
                         <div class="card-body p-3">

                              <div class="form-group">
                                   <label> Your name </label>
                                   <div class="input-group">
                                        <input value="" type="text" name="data[name]" class="form-control"
                                             id="inlineFormInputGroupUsername" placeholder="Your name">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label>Your email</label>
                                   <div class="input-group mb-2 mb-sm-0">
                                        <input type="email" value="" name="data[email]" class="form-control"
                                             id="inlineFormInputGroupUsername" placeholder="Email">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label>Subject</label>
                                   <div class="input-group mb-2 mb-sm-0">
                                        <input type="text" name="data[subject]" class="form-control"
                                             id="inlineFormInputGroupUsername" placeholder="Subject">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label>Message</label>
                                   <div class="input-group mb-2 mb-sm-0">
                                        <input type="text" class="form-control" name="mesg">
                                   </div>
                              </div>
                              <div class="text-center">
                                   <input type="submit" name="submit" value="submit"
                                        class="btn btn-primary btn-block rounded-0 py-2">
                              </div>

                         </div>

                    </div>
               </div>
               <!--Grid column-->

               <!--Grid column-->
               <div class="col-sm-12 col-md-7">
                    <!--Google map-->
                    <div class="mb-4">
                         <iframe
                              src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=cosmioinfotech+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                              width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                              aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <!--Buttons-->
                    <div class="row text-center">
                         <div class="col-md-4">
                              <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i
                                        class="fa fa-map-marker"></i></a>
                              <p> Your Address ….. </p>
                         </div>
                         <div class="col-md-4">
                              <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i
                                        class="fa fa-phone"></i></a>
                              <p>+91- 90000000</p>
                         </div>
                         <div class="col-md-4">
                              <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i
                                        class="fa fa-envelope"></i></a>
                              <p> your@gmail.com</p>
                         </div>
                    </div>
               </div>
               <!--Grid column-->
          </div>
     </section>
</div>
@endsection