@extends('admin.layouts.master')
@section('admin_content')

    
<div id="content-wrapper">

      <div class="container-fluid">
     
<div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Update</h5>
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


      <form method="post" action="{{URL::to('update/product'.$product->id)}}" enctype="multipart/form-data">
        @csrf
    <div class="modal-body">    
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" class="form-control" value="{{$product->product_name}}" name="product_name">
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
      <textarea class="cledito"  name="product_short_description"  rows="3">{{$product->product_short_description}}</textarea>
    </div>
  </div>

   <div class="form-group">
    <label for="textarea">Long Description</label>
    <div class="controls">
      <textarea class="cledito" name="product_long_description" rows="3">{{$product->product_long_description}}</textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label" for="date01">Price</label>
    <div class="controls">
      <input type="number" class="form-control"  name="product_price" value="{{$product->product_price}}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label" for="date01">Image</label>
    <div class="controls">
      <input type="file" class="form-control"  name="product_image">
    </div>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Old image</label>
    <img src="{{URL::to($product->product_image)}}" style="height: 50px;width: 80px;">
    <input type="hidden" class="form-control" value="{{$product->product_image}}" name="old_image">
  </div>

<div class="form-group">
    <label class="control-label" for="date01">Quantity</label>
    <div class="controls">
      <input type="number" class="form-control"  name="quantity" value="{{$product->quantity}}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label" for="date01">Size</label>
    <div class="controls">
      <input type="text" class="form-control"  name="product_size" value="{{$product->product_size}}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label" for="date01">Color</label>
    <div class="controls">
      <input type="text" class="form-control"  name="product_color" value="{{$product->product_color}}">
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
  </div>
</div>



@endsection