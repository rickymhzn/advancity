@extends('admin.layouts.app')
@section('title')
Create Scholarship
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Scholarship</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Scholarships</a></li>
                         <li class="breadcrumb-item active">Create Scholarship</li>
                    </ol>
               </div><!-- /.col -->
          </div><!-- /.row -->
     </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
     <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
               <div class="col-12">
                    <div class="card card-primary">
                         <div class="card-header">
                              <h3 class="card-title">Create Scholarship</h3>
                         </div>
                         @include('admin.layouts.formerror')
                         <form role="form" action="{{ route('admin.scholarship.store') }}" method="post">
                              @csrf
                              <div class="form-group">
                                   <label for="countryid">Country Id:</label>
                                   <select class="form-select form-control" name="countryid" aria-label="Country">
                                        <option selected>Select Country</option>
                                        @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->country }}</option>
                                        @endforeach                        
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="universityid">University Id:</label>
                                   <select class="form-select form-control" name="universityid" aria-label="University">
                                        <option selected>Select University</option>
                                        @foreach($universities as $university)
                                        <option value="{{ $university->id }}">{{ $university->name }}</option>
                                        @endforeach                        
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="title">Title:</label>
                                   <input type="text" id="title" name="title" placeholder="Slider Title"
                                        class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="description">Description:</label>
                                   <textarea name="description" id="summernote" rows="5" class="form-control"></textarea>
                              </div>
                              <button type="submit" class="btn btn-success">Add</button>
                         </form>
                    </div>
               </div>
          </div>
          <!-- /.row -->
     </div>
     <!--/. container-fluid -->
</section>
<!-- /.content -->
@endsection