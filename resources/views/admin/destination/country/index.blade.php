@extends('admin.layouts.app')
@section('title')
     Country
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Country</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">Countries</li>
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
                              <h3 class="card-title">Countries</h3>
                              <a class="float-right btn btn-success" href="{{route('admin.country.create')}}">Create</a>
                         </div>
                         <div class="card-body">
                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>SN</th>
                                             <th>Country</th>
                                             <th>Description</th>
                                             <th>Image</th>
                                             <th>Thumbnail</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @foreach($countries as $country)
                                        <tr>
                                             <td>{{$loop->iteration}}</td>
                                             <td>{{ $country->country }}</td>
                                             <td>
                                             <img src="{{ asset('assets/images/country/' . $country->image) }}" alt="{{ $country->country }}" style="width: 150px; height:auto;">
                                             </td>
                                             <td>
                                             <img src="{{ asset('assets/images/country/' . $country->thumbnail) }}" alt="{{ $country->country }}" style="width: 150px; height:auto;">
                                             </td>
                                             <td>
                                                  <a class="btn btn-sm btn-info" href="{{ route('admin.country.edit',['id' => $country->id]) }}">Edit</a>
                                                  <a class="btn btn-sm btn-danger" href="{{ route('admin.country.destroy',['id' => $country->id]) }}">Delete</a>
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