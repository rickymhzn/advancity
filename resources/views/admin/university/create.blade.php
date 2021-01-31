@extends('admin.layouts.app')
@section('title')
Create Univetsity
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Univetsity</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Univetsities</a></li>
                         <li class="breadcrumb-item active">Add Univetsity</li>
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
                              <h3 class="card-title">Add Univetsity</h3>
                         </div>
                         @include('admin.layouts.formerror')
                         <form role="form" action="{{ route('admin.university.store') }}" method="post"
                              enctype="multipart/form-data">
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
                                   <label for="name">Name*:</label>
                                   <input type="text" id="name" name="name" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="logo">Logo:</label>
                                   <input type="file" name="logo" class="form-control" required>
                              </div>
                              <div class="form-group">
                                   <label for="image">Image:</label>
                                   <input type="file" name="image" class="form-control" required>
                              </div>
                             
                              <div class="form-group">
                                   <label for="website">Website:</label>
                                   <input type="url" name="website" class="form-control">
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