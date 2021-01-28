@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
<div class="container">
     <h3>Apply form</h3>
</div>
</section>

<div class="page-wrapper">
      <div class="form-wrapper">
        <h3 style="text-align: center; color: #fff;">Apply Now</h3>
        <form>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputUniversity">Select University</label>
              <select id="inputUniversity" class="form-control">
                <option selected>Select University</option>
                <option>Select University</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="nameFull">Name</label>
              <input type="text" class="form-control" id="nameFull" >
            </div>
            <div class="form-group col-md-6">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address">
            </div>
          </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="phoneNo">Phone Number</label>
            <input type="number" class="form-control" id="phoneNo" >
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" >
          </div>
        </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputState">Last Qualification</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">Test Preparation</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="grade">Grade</label>
              <input type="text" class="form-control" id="grade" >
            </div>
            <div class="form-group col-md-6">
              <label for="score">Score </label>
              <input type="number" class="form-control" id="email" >
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group col-md-6">
              <label for="file">Choose File </label>
              <input type="file" class="form-control" id="file" >
            </div>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
</div>
@endsection