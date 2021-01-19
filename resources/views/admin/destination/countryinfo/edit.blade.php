@extends('admin.layouts.app')
@section('title')
 Edit Country Info
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Country Info</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Country Info</a></li>
                         <li class="breadcrumb-item active">Edit Country Info</li>
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
                              <h3 class="card-title">Update Country Info</h3>
                         </div>
                         <form role="form" action="{{ route('admin.countryinfo.update',['id' => $countryinfo->id])  }}" method="post">
                              @csrf
                              <div class="form-group">
                                   <label for="countryid">Country Id:</label>
                                   <select class="form-select form-control" name="countryid" aria-label="Country">
                                      @foreach($countries as $country)
                                        <option value="{{ $country->id }}" {{ old('country_id', $countryinfo->country_id) == $country->id   ? 'selected' : '' }} >{{ $country->country }}</option>
                                      @endforeach
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="title">Title:</label>
                                   <input type="text" id="title" name="title" placeholder="Slider Title"
                                        class="form-control" value="{{ $countryinfo->title }}">
                              </div>
                              <div class="form-group">
                                   <label for="content">Content:</label>
                                   <textarea name="content" id="summernote" rows="5" class="form-control">
                                   {!! $countryinfo->content !!}
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