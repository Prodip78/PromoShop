@extends('admin.layouts.master')
@section('admin_content')

    
<div id="content-wrapper">

      <div class="container-fluid">
     
<div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SubCategory Update</h5>
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


      <form method="post" action="{{URL::to('update/Sub-category'.$sub_category->sub_category_id)}}">
        @csrf
     <div class="modal-body pd-20">  
  <div class="form-group">
    <label for="exampleInputEmail1"> SubCategory Name</label>
    <input type="text" class="form-control" value="{{$sub_category->sub_category_name}}" name="sub_category_name">

    <div class="form-group">
    <label class="control-label" for="selectError3"> Category</label>

    

    <option >Select Category</option>
<select name="category_name">
<?php
$category=DB::table('categories')
            

            ->get();


foreach ($category as $view) {?>

  <option {{$view->category_id==$sub_category->sub_category_id? 'selected':''}} value=" {{$view->category_name}}">{{$view->category_name}}</option>
  
  <?php } ?> 


</select>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" value="{{$sub_category->description}}" name="description">
  </div>
  

   <div class="form-group">
    <label for="exampleInputEmail1">Publication Status</label>
    <input type="checkbox" class="form-control"  name="publication_status" value="{{$sub_category->publication_status}}" required="">
  </div>
    <br>

    <button type="submit" class="btn btn-primary">Update</button>
  </div>

  </div>
        
      </form>

    </div>
  </div>
</div>
  </div>



@endsection