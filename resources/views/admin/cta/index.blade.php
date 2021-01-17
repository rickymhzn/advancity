@extends('admin.layouts.app')
@section('title')
Call To Action
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Call To Action</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">Call To Action</li>
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
                              <h3 class="card-title">Call To Action</h3>
                              <a class="float-right btn btn-success" href="{{route('admin.cta.create')}}">Create</a>
                         </div>
                         <div class="card-body">
                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>SN</th>
                                             <th>Image</th>
                                             <th>Title</th>
                                             <th>Description</th>
                                             <th>link1</th>
                                             <th>link2</th>
                                             <th>Status</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($ctas as $cta)
                                        <tr>
                                             <td>{{ $loop->iteration }}</td>
                                             <td>
                                             <img src="{{ asset('assets/images/cta/' . $cta->image) }}" alt="image" style="width: 150px; height:auto;">
                                             </td>
                                             <td>{{ $cta->title }}</td>
                                             <td>{{ $cta->description }}</td>
                                             <td>{{ $cta->link1 }}</td>
                                             <td>{{ $cta->link2 }}</td>
                                             <td>{{ $cta->status == 1 ? 'Active' : 'Inactive' }}</td>
                                             <td>
                                                  <a class="btn btn-sm btn-info" href="{{ route('admin.cta.edit',['id' => $cta->id]) }}">Edit</a>
                                                  <a class="btn btn-sm btn-danger" href="{{ route('admin.cta.destroy',['id' => $cta->id]) }}">Delete</a>
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