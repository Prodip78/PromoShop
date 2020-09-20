@extends('admin.layouts.master')
@section('admin_content')

    
<div id="content-wrapper">

      <div class="container-fluid">
     
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Category Update</h5>
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


      <form method="post" action="{{URL::to('update/category'.$category->category_id)}}" enctype="multipart/form-data">
      	@csrf
  <div class="modal-body pd-20">  
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" class="form-control" value="{{$category->category_name}}" name="category_name">  
  </div>
  <div class="form-group">
    <label class="control-label" for="date01">Image</label>
    <div class="controls">
      <input type="file" class="form-control"  name="category_image">
    </div>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Old image</label>
    <img src="{{URL::to($category->category_image)}}" style="height: 50px;width: 80px;">
    <input type="hidden" class="form-control" value="{{$category->category_image}}" name="old_image">
  </div>

          <button type="submit" class="btn btn-primary">Update</button>
  </div>
        
      </form>

    </div>
  </div>
</div>
  </div>



@endsection