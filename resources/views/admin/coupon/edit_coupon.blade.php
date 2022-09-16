@extends('admin.master')

@section('title',"EDIT-COUPON")

@section('dashboardContent')
    <div class="sl-mainpanel">    
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <!-- <h5>Edit-Category Table</h5> -->
        </div>


        <div class="card pd-20 pd-sm-40">
          
<!-- Edit-category form -->

    <span>
      <a href="{{ route('admin.categories') }}" class="btn btn-sm btn-info" style="float:right;">All Category</a>
      
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
    <div style="padding-left: 200px;" class="col-md-9 ">
      <form method="post" action="{{ URL('admin/update/coupon/'.$coupon->id) }}">
        @csrf
      <div class="modal-body">
        <!-- Bootstrap Form -->
        
            <div class="form-group">
              <label for="exampleInputEmail1">Coupon</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="coupon" value="{{ $coupon->coupon }}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Coupon Discount %</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="discount" value="{{ $coupon->discount }}">
            </div>
        
        <!-- End Bootstrap Form -->
        </div>


          <div style="padding:0px 0px 220px 190px;">
            <button style="width: 150px;" type="submit" class="btn btn-primary">Update</button>
          </div>
      </form>
    </div>
<!-- End Edit-category form -->


         
        </div>



@endsection