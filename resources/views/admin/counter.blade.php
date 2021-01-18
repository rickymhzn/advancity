@extends('admin.layouts.app')
@section('title')
  Counter
@endsection
@section('content')
 <!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Counter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Counter</li>
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
                <h3 class="card-title">Edit Counter</h3>
              </div>          
                <div class="card-body">
                <form role="form" class="form" action="{{ route('counter.update',['id' => $counter->id]) }}" method="post"
                              enctype="multipart/form-data">
                              @csrf
                <div class="form-group">
                                   <label for="background">Background:</label>
                                   <input type="file" name="background" class="form-control">
                               <img src="{{ asset('/assets/images/counter/'. $counter->background) }}" alt="image" style="width: 150px; height:auto;">
                              </div>
                                         
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $counter->title }}">
                  </div>
                  <div class="form-group">
                    <label for="subtitle">Subtitle</label>
                    <textarea name="subtitle" id="summernote" rows="5" class="form-control">
                                   {{ $counter->subtitle }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="name1">Name1</label>
                    <input type="text" class="form-control" name="name1" value="{{ $counter->name1 }}">
                  </div>
                  <div class="form-group">
                    <label for="value1">Value1</label>
                    <input type="number" class="form-control" name="value1" value="{{ $counter->value1 }}">
                  </div>
                  <div class="form-group">
                    <label for="name2">Name2</label>
                    <input type="text" class="form-control" name="name2" value="{{ $counter->name2 }}">
                  </div>
                  <div class="form-group">
                    <label for="value2">Value</label>
                    <input type="number" class="form-control" name="value2" value="{{ $counter->value2 }}">
                  </div>
                  <div class="form-group">
                    <label for="name3">Name</label>
                    <input type="text" class="form-control" name="name3" value="{{ $counter->name3 }}">
                  </div>
                  <div class="form-group">
                    <label for="value3">Value</label>
                    <input type="number" class="form-control" name="value3" value="{{ $counter->value3 }}">
                  </div>
                  <div class="form-group">
                    <label for="name4">Name</label>
                    <input type="text" class="form-control" name="name4" value="{{ $counter->name4 }}">
                  </div>
                  <div class="form-group">
                    <label for="value4">Value</label>
                    <input type="number" class="form-control" name="value4" value="{{ $counter->value4 }}">
                  </div>
                  
                  <button type="submit" class="btn btn-success">Update Counter</button>
                  </form> 
           </div>
          
          </div>
         </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection