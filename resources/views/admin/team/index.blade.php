@extends('admin.layouts.app')
@section('title')
Team
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Team</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">Team</li>
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
                              <h3 class="card-title">Team</h3>
                              <a class="float-right btn btn-success" href="{{route('admin.team.create')}}">Create</a>
                         </div>
                         <div class="card-body">
                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>SN</th>
                                             <th>Image</th>
                                             <th>Name</th>
                                             <th>Designation</th>
                                             <th>Description</th>
                                             <th>Contact</th>
                                             <th>Email</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($teams as $team)
                                        <tr>
                                             <td>{{ $loop->iteration }}</td>
                                             <td>
                                             <img src="{{ asset('assets/images/team/' . $team->image) }}" alt="{{ $team->name }}" style="width: 150px; height:auto;">
                                             </td>
                                             <td>{{ $team->name }}</td>
                                             <td>{{ $team->designation }}</td>
                                             <td>{!! $team->description !!}</td>
                                             <td>{{ $team->contact }}</td>
                                             <td>{{ $team->email }}</td>
                                             <td>
                                                  <a class="btn btn-sm btn-info" href="{{ route('admin.team.edit',['id' => $team->id]) }}">Edit</a>
                                                  <a class="btn btn-sm btn-danger" href="{{ route('admin.team.destroy',['id' => $team->id]) }}">Delete</a>
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