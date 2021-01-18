@extends('admin.layouts.app')
@section('title')
Universities
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Universities</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">Universities</li>
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
                              <h3 class="card-title">Universities</h3>
                              <a class="float-right btn btn-success" href="{{route('admin.university.create')}}">Create</a>
                         </div>
                         <div class="card-body">
                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>SN</th>
                                             <th>Name</th>
                                             <th>Country</th>
                                             <th>Logo</th>
                                             <th>Image</th>
                                             <th>Website</th>
          
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($universities as $univetsity)
                                        <tr>
                                             <td>{{ $loop->iteration }}</td>
                                             <td>{{ $univetsity->name }}</td>
                                             <td>{{ $univetsity->country->country }}</td>
                                             <td>
                                             <img src="{{ asset('assets/images/university/logo/' . $univetsity->logo) }}" alt="logo" style="width: 150px; height:auto;">
                                             </td>
                                             <td>
                                             <img src="{{ asset('assets/images/university/' . $univetsity->image) }}" alt="image" style="width: 150px; height:auto;">
                                             </td>
                                             <td>{{ $univetsity->website }}</td>
                                           
                                             <td>
                                                  <a class="btn btn-sm btn-info" href="{{ route('admin.university.edit',['id' => $univetsity->id]) }}">Edit</a>
                                                  <a class="btn btn-sm btn-danger" href="{{ route('admin.university.destroy',['id' => $univetsity->id]) }}">Delete</a>
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