@extends('admin.layouts.app')
@section('title')
 Edit Scholarship
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Scholarship</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Scholarships</a></li>
                         <li class="breadcrumb-item active">Edit Scholarship</li>
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
                              <h3 class="card-title">Update Scholarship</h3>
                         </div>
                         @include('admin.layouts.formerror')
                         <form role="form" action="{{ route('admin.scholarship.update',['id' => $scholarship->id])  }}" method="post">
                              @csrf
                              <div class="form-group">
                                   <label for="countryid">Country Id:</label>
                                   <select class="form-select form-control" name="countryid" aria-label="Country">
                                      @foreach($countries as $country)
                                        <option value="{{ $country->id }}" {{ old('country_id', $scholarship->country_id) == $country->id   ? 'selected' : '' }} >{{ $country->country }}</option>
                                      @endforeach
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="universityid">University Id:</label>
                                   <select class="form-select form-control" name="universityid" aria-label="University">
                                      @foreach($universities as $university)
                                        <option value="{{ $university->id }}" {{ old('university_id', $scholarship->university_id) == $university->id   ? 'selected' : '' }} >{{ $university->name }}</option>
                                      @endforeach
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="title">Title:</label>
                                   <input type="text" id="title" name="title" placeholder="Slider Title"
                                        class="form-control" value="{{ $scholarship->title }}">
                              </div>
                              <div class="form-group">
                                   <label for="description">Content:</label>
                                   <textarea name="description" id="summernote" rows="5" class="form-control">
                                   {!! $scholarship->description !!}
                                   </textarea>
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