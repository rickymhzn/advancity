@extends('admin.layouts.app')
@section('title')
Create Team Member
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Team Member</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Team</a></li>
                         <li class="breadcrumb-item active">Add Team Member</li>
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
                              <h3 class="card-title">Add Team Member</h3>
                         </div>
                         <form role="form" action="{{ route('admin.team.store') }}" method="post"
                              enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="image">Image*:</label>
                                   <input type="file" name="image" required class="form-control">
                              </div>
                     
                              <div class="form-group">
                                   <label for="name">Name:</label>
                                   <input type="text" id="name" name="name" required class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="designation">Designation:</label>
                                   <input type="text" name="designation" required class="form-control">
                              </div>
                              
                              <div class="form-group">
                                   <label for="contact">Contact:</label>
                                   <input type="text" name="contact" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="email">Email:</label>
                                   <input type="email" name="email" class="form-control">
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