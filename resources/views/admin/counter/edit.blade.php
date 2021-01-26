@extends('admin.layouts.app')
@section('title')
Edit Counter
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Counter</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Counters</a></li>
                         <li class="breadcrumb-item active">Edit Counter</li>
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
                              <h3 class="card-title">Update Counter</h3>
                         </div>
                         <form role="form" action="{{ route('admin.counter.update',['id' => $counter->id])  }}" method="post"
                              enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="order">Order:</label>
                                   <input type="text" id="order" name="order" class="form-control" value="{{ $counter->order }}">
                              </div>
                              <div class="form-group">
                                   <label for="icon">Icon:</label>
                                   <input type="text" id="icon" name="icon" placeholder="Counter icon"
                                        class="form-control" value="{{ $counter->icon }}">
                              </div>
                              <div class="form-group">
                                   <label for="title">Title:</label>
                                   <input type="text" id="title" name="title" placeholder="Counter Title"
                                        class="form-control" value="{{ $counter->title }}">
                              </div>
                              <div class="form-group">
                                   <label for="value">Value:</label>
                                   <input type="number" id="value" name="value" placeholder="Counter Title"
                                        class="form-control" value="{{ $counter->value }}">
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