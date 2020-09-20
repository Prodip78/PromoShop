@extends('admin.layouts.master')
@section('admin_content')

    
<div id="content-wrapper">

      <div class="container-fluid">
        <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Banner Update</h5>
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


      <form method="post" action="{{URL::to('update/banner'.$banner->id)}}" enctype="multipart/form-data">
        @csrf
    <div class="modal-body">    
  
  <div class="form-group">
    <label class="control-label" for="date01">Image</label>
    <div class="controls">
      <input type="file" class="form-control"  name="banner_image">
    </div>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Old image</label>
    <img src="{{URL::to($banner->banner_image)}}" style="height: 50px;width: 80px;">
    <input type="hidden" class="form-control" value="{{$banner->banner_image}}" name="old_image">
  </div>

   <div class="form-group">
    <label for="textarea">Short Description</label>
    <div class="controls">
      <textarea class="cledito"  name="short_description"  rows="3">{{$banner->short_description}}</textarea>
    </div>
  </div>

   <div class="form-group">
    <label for="textarea">Long Description</label>
    <div class="controls">
      <textarea class="cledito" name="long_description" rows="3">{{$banner->long_description}}</textarea>
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