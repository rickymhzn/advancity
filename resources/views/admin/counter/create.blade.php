@extends('admin.layouts.app')
@section('title')
Create Counter
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Counter</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Counters</a></li>
                         <li class="breadcrumb-item active">Create Counter</li>
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
                              <h3 class="card-title">Create Counter</h3>
                         </div>
                         <form role="form" action="{{ route('admin.counter.store') }}" method="post"
                              enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="order">Order:</label>
                                   <input type="text" id="order" name="order" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="icon">Icon:</label>
                                   <input type="text" id="icon" name="icon" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="title">Title:</label>
                                   <input type="text" id="title" name="title" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="value">Value:</label>
                                   <input type="number" id="value" name="value" class="form-control">
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