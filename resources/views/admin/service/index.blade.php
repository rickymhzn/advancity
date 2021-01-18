@extends('admin.layouts.app')
@section('title')
     Services
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Services</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">Services</li>
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
                              <h3 class="card-title">Services</h3>
                              <a class="float-right btn btn-success" href="{{route('admin.service.create')}}">Create</a>
                         </div>
                         <div class="card-body">
                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>SN</th>
                                             <th>Title</th>
                                             <th>Description</th>
                                             <th>Image</th>
                                             <th>Actions</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @foreach($services as $service)
                                        <tr>
                                             <td>{{$loop->iteration}}</td>
                                             <td>{{ $service->title }}</td>
                                             <td>{!! $service->description !!}</td>

                                             <td>
                                             <img src="{{ asset('assets/images/service/' . $service->image) }}" alt="{{ $service->title }}" style="width: 150px; height:auto;">
                                             </td>
                                            
                                             <td>
                                                  <a class="btn btn-sm btn-info" href="{{ route('admin.service.edit',['id' => $service->id]) }}">Edit</a>
                                                  <a class="btn btn-sm btn-danger" href="{{ route('admin.service.destroy',['id' => $service->id]) }}">Delete</a>
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