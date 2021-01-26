@extends('admin.layouts.app')
@section('title')
Edit University
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit University</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">University</a></li>
                         <li class="breadcrumb-item active">Edit University</li>
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
                              <h3 class="card-title">Update University</h3>
                         </div>
                         <form role="form" action="{{ route('admin.university.update',['id' => $university->id])  }}"
                              method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="countryid">Country Id:</label>
                                   <select class="form-select form-control" name="countryid"
                                        aria-label="Default select example">
                                        @foreach($countries as $country)
                                        <option value="{{ $country->id }}"
                                             {{ old('country_id', $university->country_id) == $country->id   ? 'selected' : '' }}>
                                             {{ $country->country }}</option>
                                        @endforeach
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="name">Name:</label>
                                   <input type="text" id="title" name="name" class="form-control"
                                        value="{{ $university->name }}">
                              </div>
                              <div class="form-group">
                                   <label for="logo">Logo:</label>
                                   <input type="file" name="logo" class="form-control">
                                   <img src="{{ asset('assets/images/university/logo/' . $university->logo) }}"
                                        alt="image" style="width: 150px; height:auto;">
                              </div>
                              <div class="form-group">
                                   <label for="image">Image*:</label>
                                   <input type="file" name="image" class="form-control">
                                   <img src="{{ asset('assets/images/university/' . $university->image) }}" alt="image"
                                        style="width: 150px; height:auto;">
                              </div>

                              <div class="form-group">
                                   <label for="website">Website:</label>
                                   <input type="url" name="website" class="form-control"
                                        value="{{ $university->website }}">
                              </div>

                              <button type="submit" class="btn btn-success">Update</button>
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