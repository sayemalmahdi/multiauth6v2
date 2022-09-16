@extends('admin.master')

@section('title',"EDIT-BRAND")

@section('dashboardContent')
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <!-- <h5>Edit-brand Table</h5> -->
        </div>
  <div class="card pd-20 pd-sm-40">   
<!-- Edit-brand form -->
    <span>
    <a href="{{ route('admin.brands') }}" class="btn btn-sm btn-info" style="float:right;">All BRAND</a>
      
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
      <form method="post" action="{{ URL('admin/update/brand/'.$brand->id) }}" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <!-- Bootstrap Form -->
        
            <div class="form-group">
              <label for="exampleInputEmail1">Brand Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="brand_name" value="{{ $brand->brand_name }}" required="">
              <!-- <small id="emailHelp" class="form-text text-muted">Add a unique brand</small> -->
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">New Brand Logo</label>
              <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="brand_logo">
              <!-- <small id="emailHelp" class="form-text text-muted">Add a unique brand</small> -->
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Old Logo</label>
              <img src="{{ URL::to($brand->brand_logo) }}" style="height: 70px; width: 90px;">
              <input type="hidden" name="old_logo" value="{{ $brand->brand_logo }}">
            </div>
        
        <!-- End Bootstrap Form -->
        </div>


          <div style="padding:0px 0px 220px 190px;">
            <button style="width: 150px;" type="submit" class="btn btn-primary">Update</button>
          </div>
      </form>
    </div>
<!-- End Edit-brand form -->
       
  </div>



@endsection