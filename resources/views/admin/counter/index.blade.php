@extends('admin.layouts.app')
@section('title')
Counters
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Counters</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">Counters</li>
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
                              <h3 class="card-title">Counters</h3>
                              <a class="float-right btn btn-success" href="{{route('admin.counter.create')}}">Create</a>
                         </div>
                         <div class="card-body">
                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>SN</th>
                                             <th>Order</th>
                                             <th>Icon</th>
                                             <th>Title</th>
                                             <th>Value</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($counters as $counter)
                                        <tr>
                                             <td>{{$loop->iteration}}</td>
                                             <td>{{ $counter->order }}</td>
                                             <td><i class="{{ $counter->icon }}"></i></td>
                                             <td>{{ $counter->title }}</td>
                                             <td>{{ $slider->value }}</td>
                                             <td>
                                                  <a class="btn btn-sm btn-info" href="{{ route('admin.counter.edit',['id' => $counter->id]) }}">Edit</a>
                                                  <a class="btn btn-sm btn-danger" href="{{ route('admin.counter.destroy',['id' => $counter->id]) }}">Delete</a>
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