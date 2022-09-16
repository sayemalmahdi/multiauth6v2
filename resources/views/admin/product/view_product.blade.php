@extends('admin.master')

@section('title',"VIEW-PRODUCT")

@section('dashboardContent')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">

  <div class="sl-mainpanel">
    <div class="sl-pagebody">
      
    <div class="card pd-20 pd-sm-40">
      
      @if(Auth::user()->product == 1)
        <h6 class="card-body-title"><a href="{{ route('admin.all.product') }}" class="btn btn-success btn-sm pull-right">All Product</a></h6>
      @else
        <h6 class="card-body-title"><a href="#" class="btn btn-danger btn-sm pull-right">You are not allow to access All Product</a></h6>
      @endif

         
          
          <div class="form-layout"><br>
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Product Name : <span class="tx-danger"></span></label>
                  <strong>{{ $product->product_name }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Product Code : <span class="tx-danger"></span></label>
                  <strong>{{ $product->product_code }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Quantity : <span class="tx-danger"></span></label>
                  <strong>{{ $product->product_quantity }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Category : <span class="tx-danger"></span></label>
                  <strong>{{ $product->category_name }}</strong>                  
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Sub Category : <span class="tx-danger"></span></label>
                  <strong>{{ $product->subcategory_name }}</strong>                  
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Brand : <span class="tx-danger"></span></label>
                  <strong>{{ $product->brand_name }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Product Size : <span class="tx-danger"></span></label>
                  <strong>{{ $product->product_size }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Product Color : <span class="tx-danger"></span></label>
                  <strong>{{ $product->product_color }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Selling Price : <span class="tx-danger"></span></label>
                  <strong>{{ $product->selling_price }}</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Product Details : <span class="tx-danger"></span></label>
                    <br>
                  <strong>{!! $product->product_details !!}</strong>
                </div>  
              </div>
              <div class="col-lg-12">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <label class="form-control-label">Video Link : <span class="tx-danger"></span></label>
                   <strong>{{ $product->video_link }}</strong>
                </div>  
              </div>

              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <lebel>Image One (Main Thumbnail)<span class="tx-danger"></span></lebel>
                    <label class="custom-file">
                      <img src="{{ URL::to($product->image_one) }}" style="height: 100px; width: 100px;">
                    </label>
                    <br><br><br>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <lebel> <span style="padding-left: 50px;">Image Two </span> <span class="tx-danger"></span></lebel>
                    <label class="custom-file">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                      <img src="{{ URL::to($product->image_two) }}" style="height: 100px; width: 100px;">
                    </label>
                    <br><br><br>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group" style="border: 1px solid darkorange; padding: 10px;">
                  <lebel><span style="padding-left: 50px;">Image Three </span> <span class="tx-danger"></span></lebel>
                    <label class="custom-file">
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <img src="{{ URL::to($product->image_three) }}" style="height: 100px; width: 100px;">
                    </label>
                    <br><br><br>
              </div>
              </div>
            </div><!-- row -->
            <br><hr>
            <div class="row">
              <div class="col-lg-4">
                <label class="">
              @if($product->main_slider == 1)
                &nbsp;&nbsp;<span class="badge badge-success">Active</span> |
              @else
                &nbsp;&nbsp;<span class="badge badge-danger">Inactive</span> |
              @endif
              <span>Main Slider</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="">
            @if($product->hot_deal == 1)
                &nbsp;&nbsp;<span class="badge badge-success">Active</span> |
              @else
                &nbsp;&nbsp;<span class="badge badge-danger">Inactive</span> |
              @endif
            <span>Hot Deal</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="">
            @if($product->best_rated == 1)
                &nbsp;&nbsp;<span class="badge badge-success">Active</span> |
              @else
                &nbsp;&nbsp;<span class="badge badge-danger">Inactive</span> |
              @endif
            <span>Best Rated</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="">
            @if($product->trend == 1)
                &nbsp;&nbsp;<span class="badge badge-success">Active</span> |
              @else
                &nbsp;&nbsp;<span class="badge badge-danger">Inactive</span> |
              @endif
            <span>Trend Product</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="">
            @if($product->mid_slider == 1)
                &nbsp;&nbsp;<span class="badge badge-success">Active</span> |
              @else
                &nbsp;&nbsp;<span class="badge badge-danger">Inactive</span> |
              @endif
            <span>Mid Slider</span>
          </label>
              </div>
              <div class="col-lg-4">
                <label class="">
                  @if($product->hot_new == 1)
                &nbsp;&nbsp;<span class="badge badge-success">Active</span> |
              @else
                &nbsp;&nbsp;<span class="badge badge-danger">Inactive</span> |
              @endif
                  <span>Hot New</span>
                </label>
              </div>

              <!-- <div class="col-lg-4">
                <label class="">
                  
                  <span>Buy One Get One</span>
                </label>
              </div> -->

            </div>
            <hr>
            <br><br>
            
          </div><!-- form-layout -->
         

          
    </div><!-- card -->



@endsection