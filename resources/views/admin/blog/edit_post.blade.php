@extends('admin.master')

@section('title',"EDIT BLOG POST")

@section('dashboardContent')
@php
	$category=DB::table('post_category')->get();
@endphp

  <div class="sl-mainpanel">
    <div class="sl-pagebody">
      
    <div class="card pd-20 pd-sm-40">
      
      <h6 class="card-body-title">Add New Post <a href="{{ route('admin.all.blogpost') }}" class="btn btn-success btn-sm pull-right">All Post</a></h6>
          <!-- <p class="mg-b-20 mg-sm-b-30">New product add form</p> -->
          
          <form action="{{ url('admin/update/post/'.$post->id) }}" method="post" enctype="multipart/form-data">
            @csrf
          
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Post Title (English): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="post_title_en" value="{{ $post->post_title_en }}" >
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Post Title (Bangla): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="post_title_bn" value="{{ $post->post_title_bn }}" >
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select  class="form-control select2" data-placeholder="Choose Category" name="category_id">
                    <option label="Choose Category"></option>
                    @foreach($category as $row)
                    <option value="{{ $row->id }}" <?php if ($post->category_id == $row->id) {
                      echo "selected";
                    }?> >{{ $row->category_name_en }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
              
              
              

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details (English)<span class="tx-danger">*</span></label>
                   <textarea  class="form-control" id="summernote" name="details_en" value="{{ $post->details_en }}">
                      {{ $post->details_en}}
                   </textarea>
                </div>  
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details (Bangla)<span class="tx-danger">*</span></label>
                   <textarea  class="form-control" id="summernote1" name="details_bn" >
                    {{ $post->details_bn}}
                   </textarea>
                </div>  
              </div>
              
              <div class="col-lg-4">
                <lebel>Image One (Main Thumbnail) <span class="tx-danger">*</span></lebel>
                <label class="custom-file">
                <input type="file" id="file" class="custom-file-input" name="post_image" onchange="readURL(this);" accept="image">
                <span class="custom-file-control"></span>
                <input type="hidden" name="old_image" value="{{ $post->post_image }}">
                <img src="{{ URL::to($post->post_image) }}" style="height: 80px; width: 80px;" id="one" >
              </label>
              </div>
              
           
            

            <hr><br><br><br><br><br><br>
            
          </div>
        </div><!-- form-layout -->
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit </button>
            </div>
        </form>

          
    </div><!-- card -->



<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>


@endsection