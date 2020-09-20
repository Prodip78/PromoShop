
@extends('admin.layouts.master')
@section('admin_content')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Product</li>
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
            Product List
            <a href="" class="btn btn-warning" style="float: right;"  data-toggle="modal" data-target="#exampleModal">Add New</a>

        </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                	
                  <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Product Category</th>
                    <th>Product SubCategory</th>
                    
                    
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantuty</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                	@foreach($product as $result)
                	<tr>
                		<td>{{$result->id}}</td>
                    
                		<td>{{$result->product_name}}</td>
                    <td>{{$result->category_name}}</td>
                    <td>{{$result->sub_category_name}}</td >
                    
                    <td><img src="{{URL::to($result->product_image)}}" style="height: 70px;width: 100px;"></td>
                    <td>{{$result->product_price}}</td>
                    <td>{{$result->quantity}}</td>
                    <td>{{$result->product_size}}</td>
                    <td>{{$result->product_color}}</td>
                    <td>{{$result->publication_status}}</td>
                      
                		<td>
                			<a href="{{URL::to('edit/product'.$result->id)}}" class="btn btn-sm btn-info">Edit</a>
                      <br>
                			<a href="{{URL::to('delete/product'.$result->id)}}" class="btn btn-sm btn-danger" id="#delate">Delete</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Product title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>



      <form method="post" action="{{route('store.product')}}" enctype="multipart/form-data">
      	@csrf
    <div class="modal-body">    
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" class="form-control" placeholder="product" name="product_name">
  </div>

  <div class="form-group">
    <label class="control-label" for="selectError3">Product Category</label>
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
    <label class="control-label" for="selectError3">Product SubCategory</label>
    <option>Select SubCategory</option>
<select name="sub_category_id">
  <?php
$sub_category_show=DB::table('sub_categories')
                ->where('publication_status',1)
                ->get();


foreach ($sub_category_show as $value) {?>

  <option value="{{$value->sub_category_id}}">{{$value->sub_category_name}}</option>
  <?php } ?>
  
</select>
</div>

   <div class="form-group">
    <label for="textarea">Short Description</label>
    <div class="controls">
      <textarea class="cledito" name="product_short_description" rows="3"></textarea>
    </div>
  </div>

   <div class="form-group">
    <label for="textarea">Long Description</label>
    <div class="controls">
      <textarea class="cledito" name="product_long_description" rows="3"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label" for="date01">Price</label>
    <div class="controls">
      <input type="number" class="form-control"  name="product_price">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label" for="date01">Image</label>
    <div class="controls">
      <input type="file" class="form-control"  name="product_image">
    </div>
  </div>
<div class="form-group">
    <label class="control-label" for="date01">Quantity</label>
    <div class="controls">
      <input type="number" class="form-control"  name="quantity">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label" for="date01">Size</label>
    <div class="controls">
      <input type="text" class="form-control"  name="product_size">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label" for="date01">Color</label>
    <div class="controls">
      <input type="text" class="form-control"  name="product_color">
    </div>
  </div>



   <div class="form-group">
    <label for="exampleInputEmail1">Publication Status</label>
    <input type="checkbox" class="form-control"  name="publication_status" value="1">
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