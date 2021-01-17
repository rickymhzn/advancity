@extends('admin.layouts.app')
@section('title')
Country Info
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Country Info</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">Country Info</li>
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
                              <h3 class="card-title">Country Info</h3>
                              <a class="float-right btn btn-success" href="{{route('admin.countryinfo.create')}}">Create</a>
                         </div>
                         <div class="card-body">
                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>SN</th>
                                             <th>Country</th>
                                             <th>Title</th>
                                             <th>Content</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($countryinfos as $countryinfo)
                                        <tr>
                                             <td>{{$loop->iteration}}</td>
                                             <td>{{ $countryinfo->country->country }}</td>
                                             <td>{{ $countryinfo->title }}</td>
                                             <td>{!! $countryinfo->content !!}</td>
                                             <td>
                                                  <a class="btn btn-sm btn-info" href="{{ route('admin.countryinfo.edit',['id' => $countryinfo->id]) }}">Edit</a>
                                                  <a class="btn btn-sm btn-danger" href="{{ route('admin.countryinfo.destroy',['id' => $countryinfo->id]) }}">Delete</a>
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