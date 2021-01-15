@extends('admin.layouts.app')
@section('title')
Create Slider
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add CTA</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">CTA</a></li>
                         <li class="breadcrumb-item active">Add CTA</li>
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
                              <h3 class="card-title">Add Country</h3>
                         </div>
                         <form role="form" action="{{ route('admin.slider.store') }}" method="post"
                              enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="image">Image*:</label>
                                   <input type="file" name="image" required class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="order">Title:</label>
                                   <input type="text" id="order" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="description">Description:</label>
                                   <textarea name="description" id="ckeditor" rows="5" class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                   <label for="link1">Link1:</label>
                                   <input type="text" name="link1" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="link2">Link2:</label>
                                   <input type="text" name="link2" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="active">Active:</label>
                                   <input type="checked-box" checked data-toggle="toggle" name="active"
                                        class="form-control">
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