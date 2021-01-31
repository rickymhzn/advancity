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
                         @if (count($errors) > 0)
                              <div class="alert alert-danger">
                                   <button type="button" class="close" data-dismiss="alert">×</button>
                                   <ul>
                                   @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                                   @endforeach
                                   </ul>
                              </div>
                              @endif
                              @if ($message = Session::get('success'))
                              <div class="alert alert-success alert-block">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                              </div>
                              @endif
                             <form class="form" method="post" action="{{ route('sendemail') }}">
                             @csrf
                             <div class="form-group">
                                   <label> Your name </label>
                                   <div class="input-group">
                                        <input  type="text" name="name" class="form-control"
                                             id="name" placeholder="Your name">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label>Your email</label>
                                   <div class="input-group mb-2 mb-sm-0">
                                        <input type="email" value="" name="email" class="form-control"
                                             id="email" placeholder="Email">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label>Subject</label>
                                   <div class="input-group mb-2 mb-sm-0">
                                        <input type="text" name="subject" class="form-control"
                                             id="subject" placeholder="Subject">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label>Contact Number</label>
                                   <div class="input-group mb-2 mb-sm-0">
                                        <input type="text" name="number" class="form-control"
                                             id="number" placeholder="Number">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label>Message</label>
                                   <textarea class="form-control" name="message"></textarea>
                                   
                              </div>
                              <div class="text-center">
                                   <input type="submit" name="submit" value="submit"
                                        class="btn btn-primary btn-block rounded-0 py-2">
                              </div>

                              </form>
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
                              <p> {{ $sitesetting->company_address }}</p>
                         </div>
                         <div class="col-md-4">
                              <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i
                                        class="fa fa-phone"></i></a>
                              <p>{{ $sitesetting->company_phone }} </p>
                              <p>{{ $sitesetting->company_mobile }}</p>
                         </div>
                         <div class="col-md-4">
                              <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i
                                        class="fa fa-envelope"></i></a>
                              <p>{{ $sitesetting->company_email }}</p>
                         </div>
                    </div>
               </div>
               <!--Grid column-->
          </div>
     </section>
</div>
@endsection