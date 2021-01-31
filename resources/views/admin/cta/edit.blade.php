@extends('admin.layouts.app')
@section('title')
 Edit CTA
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit CTA</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">CTA</a></li>
                         <li class="breadcrumb-item active">Edit CTA</li>
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
                              <h3 class="card-title">Update CTA</h3>
                         </div>
                         @include('admin.layouts.formerror')
                         <form role="form" action="{{ route('admin.cta.update',['id' => $cta->id])  }}" method="post"
                              enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                   <label for="image">Image*:</label>
                                   <input type="file" name="image" class="form-control">
                                   <img src="{{ asset('assets/images/cta/' . $cta->image) }}" alt="image" style="width: 150px; height:auto;">
                              </div>
                              <div class="form-group">
                                   <label for="title">Title:</label>
                                   <input type="text" id="title" name="title" class="form-control" value="{{ $cta->title }}">
                              </div>
                              <div class="form-group">
                                   <label for="description">Description:</label>
                                   <textarea name="description" id="summernote" rows="5" class="form-control">
                                   {!! $cta->description !!}
                                   </textarea>
                              </div>
                              <div class="form-group">
                                   <label for="link1">Link1:</label>
                                   <input type="url" name="link1" class="form-control" value="{{ $cta->link1 }}">
                              </div>
                              <div class="form-group">
                                   <label for="link2">Link2:</label>
                                   <input type="url" name="link2" class="form-control" value="{{ $cta->link2 }}">
                              </div>
                              <div class="form-group">
                                   
                                   <div class="custom-control custom-switch">
                                   <input type="checkbox" class="custom-control-input" id="status" name="status" {{ $cta->status == 1 ? 'checked' : '' }}>
                                   <label class="custom-control-label" for="status">Status</label>
                                   </div>
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