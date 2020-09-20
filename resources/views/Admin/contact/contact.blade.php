
@extends('admin.layouts.master')
@section('admin_content')


<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>

        @if (count($errors) > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</strong>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

        <!-- DataTables Example -->
        <div class="card mb-3">
         {{--  <div class="card-header">
            <i class="fas fa-table"></i>
            Order List
            <a href="" class="btn btn-warning" style="float: right;"  data-toggle="modal" data-target="#exampleModal">Add New</a>

        </div> --}}

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                	
                  <tr>
                    <th> Id</th>
                    <th>Contact Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>

                	@foreach($manage_contact as $result)
                	<tr>
                		<td>{{$result->id}}</td>
                    
                		<td>{{$result->name}}</td>
                    <td>{{$result->email}}</td>
                    <td>
                        
                      {{$result->subject}}
                       
                    </td >
                      
                        <td>{{$result->msg}}</td>



                		<td>
                			<a href="{{-- {{URL::to('view/order'.$result->order_id)}} --}}" class="btn btn-sm btn-info">View</a>
                			<a href="{{-- {{URL::to('delete/order'.$result->order_id)}} --}}" class="btn btn-sm btn-danger" id="#delate">Delete</a>
                		</td>
                	</tr>
                	@endforeach
                </tbody>
                
                </table>
            </div>
          </div>
{{-- <..modal..> --}}



@endsection