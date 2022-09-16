@extends('admin.master')

@section('title',"EDIT PRODUCT")

@section('dashboardContent')

@php
  $brand=DB::table('brands')->get();
  $category=DB::table('categories')->get();
  $subcategory=DB::table('subcategories')->get();
@endphp



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">

  <div class="sl-mainpanel">
    <div class="sl-pagebody">
      
    <div class="card pd-20 pd-sm-40">
      
          <!-- <p class="mg-b-20 mg-sm-b-30">New product add form</p> -->
          <form action="{{ url('admin/update/product/withoutphoto/'.$product->id) }}" method="post">
            @csrf
          
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_name" value="{{ $product->product_name }}" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_code" value="{{ $product->product_code }}" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Quantity <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_quantity" value="{{ $product->product_quantity }}" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                    <option label="Choose Category"></option>
                    @foreach($category as $row)
                    <option value="{{ $row->id }}" <?php if ($product->category_id == $row->id) {
                      echo "selected";
                    } ?> >{{ $row->category_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" name="subcategory_id">
                    @foreach($subcategory as $row)
                      <option value="{{ $row->id }}" <?php if ($product->subcategory_id == $row->id) {
                      echo "selected";
                    } ?> >{{ $row->subcategory_name }}</option>
                    @endforeach()
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="brand_id">
                    <option label="Choose Brand"></option>
                    @foreach($brand as $row)
                    <option value="{{ $row->id }}" <?php if ($product->brand_id == $row->id) {
                      echo "selected";
                    } ?>>{{ $row->brand_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label><br>
                  <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput" value="{{ $product->product_size }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label><br>
                  <input class="form-control lg-4" type="text" name="product_color" data-role="tagsinput" id="color" value="{{ $product->product_color }}" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Selling Price <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="selling_price"  placeholder="Selling Price" value="{{ $product->selling_price }}" >
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Discount Price <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="discount_price"  placeholder="Discount Price" value="{{ $product->discount_price }}" >
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote" name="product_details">
                      {{ $product->product_details}}
                   </textarea>
                </div>  
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Video Link<span class="tx-danger">*</span></label>
                   <input class="form-control" placeholder="video link" name="video_link" value="{{ $product->video_link }}">
                </div>  
              </div>

              
            </div><!-- row -->
            <hr>
            <div class="row">
              <div class="col-lg-4">
                <label class="ckbox">
            <input type="checkbox" name="main_slider" value="1" <?php if ($product->main_slider == 1) {
              echo "checked";
            } ?> >
            <span>Main Slider</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
            <input type="checkbox" name="hot_deal" value="1" <?php if ($product->hot_deal == 1) {
              echo "checked";
            } ?> >
            <span>Hot Deal</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
            <input type="checkbox" name="best_rated" value="1" <?php if ($product->best_rated == 1) {
              echo "checked";
            } ?> >
            <span>Best Rated</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
            <input type="checkbox" name="trend" value="1" <?php if ($product->trend == 1) {
              echo "checked";
            } ?> >
            <span>Trend Product</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
            <input type="checkbox" name="mid_slider" value="1" <?php if ($product->mid_slider == 1) {
              echo "checked";
            } ?> >
            <span>Mid Slider</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
                  <input type="checkbox" name="hot_new" value="1" <?php if ($product->hot_new == 1) {
              echo "checked";
            } ?> >
                  <span>Hot New</span>
                </label>
              </div>

              <div class="col-lg-4">
                <label class="ckbox">
                  <input type="checkbox" name="buyone_getone" value="1">
                  <span>Buy One Get One</span>
                </label>
              </div>

            </div>

            <hr><br>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Update </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>

          
    


    <!-- Extra Form For Multiple Image Update -->

    
     <br><br>
             
      <h6 class="card-body-title">Multiple Image Update </h6><br>
          <!-- <p class="mg-b-20 mg-sm-b-30">New product add form</p> -->
          <form action="{{ url('admin/update/product/photo/'.$product->id) }}" method="post" enctype="multipart/form-data">
            @csrf


          <div class="row mg-b-25">
           <div class="col-lg-4">
            <lebel>Image One (Main Thumbnail) <span class="tx-danger"></span></lebel>
             <label class="custom-file">
               <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);"  accept="image">
                <span class="custom-file-control"></span><br><br>
                <input type="hidden" name="old_one" value="{{ $product->image_one }}">
                <img src="{{ URL::to($product->image_one) }}" style="height: 80px; width: 80px;" id="one" >
              </label>
            </div>
            <div class="col-lg-4">
              <lebel>Image Two <span class="tx-danger"></span></lebel>
               <label class="custom-file">
                 <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL1(this);"  accept="image">
                 <span class="custom-file-control"></span><br><br>
                 <input type="hidden" name="old_two" value="{{ $product->image_two }}">
                 <img src="{{ URL::to($product->image_two) }}" style="height: 80px; width: 80px;" id="two" >
              </label>
            </div>
            <div class="col-lg-4">
              <lebel>Image Three <span class="tx-danger"></span></lebel>
                <label class="custom-file">
                 <input type="file" id="file" class="custom-file-input" name="image_three" onchange="readURL2(this);" accept="/image">
                <span class="custom-file-control"></span><br><br>
                <input type="hidden" name="old_three" value="{{ $product->image_three }}">
                 <img src="{{ URL::to($product->image_three) }}" style="height: 80px; width: 80px;" id="three" >
              </label>
              </div>
          </div>



        
            <!-- <br><br><hr> -->
            <br><hr>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Update Photo </button>
            </div><!-- form-layout-footer -->
         
          </form>

          
    
    </div>

    <!-- END Extra Form For Multiple Image Update -->

<!-- Modal Start-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <span>
        <h3 style="color: darkorange;text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add New Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
      </span>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <form method="post" action="{{ route('admin.store.category') }}">
        @csrf
      <div class="modal-body">
        <!-- Bootstrap Form -->
        
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_name">
              <small id="emailHelp" class="form-text text-muted">Add a unique category</small>
            </div>
        
        <!-- End Bootstrap Form -->
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Start-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>


<script type="text/javascript">
    $(document).ready(function() {
         $('select[name="category_id"]').on('change', function(){
             var category_id = $(this).val();
             if(category_id) {
                 $.ajax({
                     url: "{{  url('/admin/get/subcategory/') }}/"+category_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        var d =$('select[name="subcategory_id"]').empty();
                           $.each(data, function(key, value){

                               $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');

                           });
  
                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });

</script>


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
<script type="text/javascript">
  function readURL1(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#two')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
  function readURL2(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#three')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>

@endsection