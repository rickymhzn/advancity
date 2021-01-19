@extends('admin.layouts.app')
@section('title')
 Edit Subject
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Subject</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Subjects</a></li>
                         <li class="breadcrumb-item active">Edit Subject</li>
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
                              <h3 class="card-title">Update Subject</h3>
                         </div>
                         <form role="form" action="{{ route('admin.subject.update',['id' => $subject->id])  }}" method="post"
                              enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="courseid">Course:</label>
                                   <select class="form-select form-control" name="courseid" aria-label="Course">
                                      @foreach($courses as $course)
                                        <option value="{{ $course->id }}" {{ old('course_id', $subject->course_id) == $course->id   ? 'selected' : '' }} >{{ $course->name }}</option>
                                      @endforeach
                                   </select>
                              </div>
                             
                              <div class="form-group">
                                   <label for="name">Name:</label>
                                   <input type="text" id="name" name="name" placeholder="Subject name"
                                        class="form-control" value="{{ $subject->name }}">
                              </div>
                              <div class="form-group">
                                   <label for="description">Description:</label>
                                   <textarea name="description" id="summernote" rows="5" class="form-control">
                                   {{ $subject->description }}</textarea>
                              </div>
                              <div class="form-group">
                                   <label for="image">Image:</label>
                                   <input type="file" name="image" class="form-control">
                                   <img src="{{ asset('assets/images/subject/' . $subject->image) }}" alt="{{ $subject->name }}" style="width: 150px; height:auto;">
                              </div>
                              <div class="form-group">
                                   <label for="thumbnail">Thumbnail:</label>
                                   <input type="file" name="thumbnail" class="form-control">
                                   <img src="{{ asset('assets/images/subject/thumb/' . $subject->thumbnail) }}" alt="{{ $subject->name }}" style="width: 150px; height:auto;">
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