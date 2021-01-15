@extends('admin.layouts.app')
@section('title')
Sliders
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Call TO Action</h1>
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
                              <a class="float-right btn btn-success" href="{{route('admin.slider.create')}}">Create</a>
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
                                             <th>Active</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                             <td>1</td>
                                             <td>Doe</td>
                                             <td>john@example.com</td>
                                             <td>john@example.com</td>
                                             <td>Doe</td>
                                             <td>john@example.com</td>
                                             <td>john@example.com</td>
                                        </tr>

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