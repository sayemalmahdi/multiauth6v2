@extends('admin.master')

@section('title',"EDIT POST CATEGORY")

@section('dashboardContent')

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <!-- <h5>Edit-Category Table</h5> -->
        </div>


        <div class="card pd-20 pd-sm-40">
          
<!-- Edit-category form -->

    <span>
      <a href="{{ route('admin.post.category') }}" class="btn btn-sm btn-info" style="float:right;">All Post Category</a>
      
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
      <form method="post" action="{{ url('admin/update/post/category/'.$postCategory->id) }}">
        @csrf
      <div class="modal-body">
        <!-- Bootstrap Form -->
        
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name (English)</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_name_en" value="{{ $postCategory->category_name_en }}">
              <!-- <small id="emailHelp" class="form-text text-muted">Add a unique category</small> -->
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Category Name (Bangla)</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_name_bn" value="{{ $postCategory->category_name_bn }}">
              <!-- <small id="emailHelp" class="form-text text-muted">Add a unique category</small> -->
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