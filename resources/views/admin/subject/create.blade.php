@extends('admin.layouts.app')
@section('title')
Create Subject
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Subject</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Subjects</a></li>
                         <li class="breadcrumb-item active">Create Subject</li>
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
                              <h3 class="card-title">Create Subject</h3>
                         </div>
                         @include('admin.layouts.formerror')
                         <form role="form" action="{{ route('admin.subject.store') }}" method="post"
                              enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="courseid">Course :</label>
                                   <select class="form-select form-control" name="courseid" aria-label="Course">
                                        <option selected>Select Course</option>
                                        @foreach($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                        @endforeach                        
                                   </select>
                              </div>
                              
                              <div class="form-group">
                                   <label for="name">Name:</label>
                                   <input type="text" id="name" name="name" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="description">Description:</label>
                                   <textarea name="description" id="summernote" rows="5" class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                   <label for="image">Image:</label>
                                   <input type="file" name="image" required class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="thumbnail">Thumbnail:</label>
                                   <input type="file" name="thumbnail" required class="form-control">
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