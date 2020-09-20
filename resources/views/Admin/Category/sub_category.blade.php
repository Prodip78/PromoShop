@extends('admin.layouts.master')
@section('admin_content')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">SubCategory</li>
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
          <div class="card-header">
            <i class="fas fa-table"></i>
            SubCategory List
            <a href="" class="btn btn-warning" style="float: right;"  data-toggle="modal" data-target="#exampleModal">Add New</a>

        </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                	
                  <tr>
                    <th>Id</th>
                    <th>SubCategory Name</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Publication Status</th>
                    <th>Action</th>                  
                  </tr>
                </thead>
                <tbody>
                	@foreach($sub_category_show as $view)
                	<tr>
                		<td>{{$view->sub_category_id}}</td>
                    <td> {{$view->sub_category_name}}</td>
                    <td>{{$view->category_name}}</td>
                    <td>{{$view->description}}</td>
                		<td>{{$view->publication_status}}</td>

                		<td>
                			<a href="{{URL::to('edit/sub_category'.$view->sub_category_id)}}" class="btn btn-sm btn-info">Edit</a>
                			<a  href="{{URL::to('delete/sub-category'.$view->sub_category_id)}}" class="btn btn-sm btn-danger" id="delate">Delete</a>
                		</td>
                	</tr>
                	@endforeach
                </tbody>
                
                </table>
            </div>
          </div>
{{-- <..modal..> --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Category title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


      <form method="post" action="{{URL::to('store.sub-category')}}">
      	@csrf
    <div class="modal-body">    
  <div class="form-group">
    <label for="exampleInputEmail1">SubCategory Name</label>
    <input type="text" class="form-control" placeholder="Category" name="sub_category_name">
  </div>
 <div class="form-group">
    <label class="control-label" for="selectError3"> Category</label>
    <option>Select Category</option>
<select name="category_id">
<?php
$category=DB::table('categories')
            

            ->get();


foreach ($category as $view) {?>

  <option value=" {{$view->category_id}}">{{$view->category_name}}</option>
  <?php } ?> 
</select>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Deascription</label>
    <input type="text" class="form-control" placeholder="Description" name="description">
  </div>
  

   <div class="form-group">
    <label for="exampleInputEmail1">Publication Status</label>
    <input type="checkbox" class="form-control"  name="publication_status" value="1" required="">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>


@endsection