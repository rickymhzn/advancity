@extends('admin.layouts.app')
@section('title')
Scholarships
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Scholarships</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">Scholarships</li>
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
                              <h3 class="card-title">Scholarships</h3>
                              <a class="float-right btn btn-success" href="{{route('admin.scholarship.create')}}">Create</a>
                         </div>
                         <div class="card-body">
                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>SN</th>
                                             <th>Country</th>
                                             <th>University</th>
                                             <th>Title</th>
                                             <th>Description</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($scholarships as $scholarship)
                                        <tr>
                                             <td>{{$loop->iteration}}</td>
                                             <td>{{ $scholarship->country->country }}</td>
                                             <td>{{ $scholarship->university->name }}</td>
                                             <td>{{ $scholarship->title }}</td>
                                             <td>{!! $scholarship->description !!}</td>
                                             <td>
                                                  <a class="btn btn-sm btn-info" href="{{ route('admin.scholarship.edit',['id' => $scholarship->id]) }}">Edit</a>
                                                  <a class="btn btn-sm btn-danger" href="{{ route('admin.scholarship.destroy',['id' => $scholarship->id]) }}">Delete</a>
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