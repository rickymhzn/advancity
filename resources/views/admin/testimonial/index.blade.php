@extends('admin.layouts.app')
@section('title')
Testimonials
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Testimonials</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">Testimonials</li>
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
                              <h3 class="card-title">Testimonials</h3>
                              <a class="float-right btn btn-success" href="{{route('admin.testimonial.create')}}">Create</a>
                         </div>
                         <div class="card-body">
                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>SN</th>
                                             <th>Image</th>
                                             <th>Name</th>
                                             <th>Subtitle</th>
                                             <th>Description</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($testimonials as $testimonial)
                                        <tr>
                                             <td>{{ $loop->iteration }}</td>
                                             <td>
                                             <img src="{{ asset('assets/images/testimonial/' . $testimonial->image) }}" alt="image" style="width: 150px; height:auto;">
                                             </td>
                                             <td>{{ $testimonial->name }}</td>
                                             <td>{{ $testimonial->subtitle }}</td>
                                             <td>{!! $testimonial->description !!}</td>
                                             <td>
                                                  <a class="btn btn-sm btn-info" href="{{ route('admin.testimonial.edit',['id' => $testimonial->id]) }}">Edit</a>
                                                  <a class="btn btn-sm btn-danger" href="{{ route('admin.testimonial.destroy',['id' => $testimonial->id]) }}">Delete</a>
                                             </td>
                                        </tr>
                                   @endforeach
                                   </tbody>
                              </table>
                         </div>

                    </div>
               </div>
          </div>
          <!-- /.row -->
     </div>
     <!--/. container-fluid -->
</section>
<!-- /.content -->
@endsection