@extends('admin.layouts.app')
@section('title')
 Edit Subject Info
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Subject Info</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Subject Info</a></li>
                         <li class="breadcrumb-item active">Edit Subject Info</li>
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
                              <h3 class="card-title">Update Subject Info</h3>
                         </div>
                         @include('admin.layouts.formerror')
                         <form role="form" action="{{ route('admin.subjectinfo.update',['id' => $subjectinfo->id])  }}" method="post">
                              @csrf
                              <div class="form-group">
                                   <label for="subjectid">Subject Id:</label>
                                   <select class="form-select form-control" name="subjectid" aria-label="Subject">
                                      @foreach($subjects as $subject)
                                        <option value="{{ $subject->id }}" {{ old('subject_id', $subjectinfo->subject_id) == $subject->id   ? 'selected' : '' }} >{{ $subject->name }}</option>
                                      @endforeach
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="title">Title:</label>
                                   <input type="text" id="title" name="title" placeholder="Slider Title"
                                        class="form-control" value="{{ $subjectinfo->title }}">
                              </div>
                              <div class="form-group">
                                   <label for="description">Content:</label>
                                   <textarea name="description" id="summernote" rows="5" class="form-control">
                                   {!! $subjectinfo->description !!}
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