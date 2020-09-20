@extends('admin.layouts.master')
@section('admin_content')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Banner</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Banner List
            <a href="" class="btn btn-warning" style="float: right;"  data-toggle="modal" data-target="#exampleModal">Add New</a>

        </div>

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

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                	
                  <tr>
                    <th> Id</th>
                    <th>Image</th>
                    <th>Short Description</th>
                    <th>Long Description</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                	@foreach($banner as $result)
                	<tr>
                		<td>{{$result->id}}</td>
                    
                    <td><img src="{{URL::to($result->banner_image)}}" style="height: 70px;width: 100px;"></td>
                    <td>{{$result->short_description}}</td>
                    <td>{{$result->long_description}}</td>
                    <td>{{$result->publication_status}}</td>
                      
                		<td>
                      <a href="{{URL::to('edit/banner'.$result->id)}}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{URL::to('delete/banner'.$result->id)}}" class="btn btn-sm btn-danger" id="#delate">Delete</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Banner title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>



      <form method="post" action="{{route('store.banner')}}" enctype="multipart/form-data">
      	@csrf
    <div class="modal-body">    
  
  <div class="form-group">
    <label class="control-label" for="date01">Image</label>
    <div class="controls">
      <input type="file" class="form-control"  name="banner_image">
    </div>
  </div>

  <div class="form-group">
    <label for="textarea">Short Description</label>
    <div class="controls">
      <textarea class="cledito" name="short_description" rows="3"></textarea>
    </div>
  </div>

   <div class="form-group">
    <label for="textarea">Long Description</label>
    <div class="controls">
      <textarea class="cledito" name="long_description" rows="3"></textarea>
    </div>
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