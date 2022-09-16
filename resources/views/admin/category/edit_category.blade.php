@extends('admin.master')

@section('title',"EDIT-CATEGORY")

@section('dashboardContent')

   <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <!-- <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Add</a>
        <a class="breadcrumb-item" href="#">Edit</a>
        <span class="breadcrumb-item active">Delete</span>
      </nav> -->

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <!-- <h5>Edit-Category Table</h5> -->
        </div>


        <div class="card pd-20 pd-sm-40">
          <!-- <h6 class="card-body-title">Edit Category Responsive DataTable</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p> -->


<!-- Edit-category form -->

    <span>
      <a href="{{ route('admin.categories') }}" class="btn btn-sm btn-info" style="float:right;">All Category</a>
      <!-- <h3 style="color: black;text-align: center;">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              EDIT-CATEGORY
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </h3> -->
      

      
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
      <form method="post" action="{{ URL('admin/update/category/'.$category->id) }}" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <!-- Bootstrap Form -->
        
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_name" value="{{ $category->category_name }}">
              <!-- <small id="emailHelp" class="form-text text-muted">Add a unique category</small> -->
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">New Category Icon</label>
              <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_icon">
              <!-- <small id="emailHelp" class="form-text text-muted">Add a unique category</small> -->
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Old Icon</label>
              <img src="{{ URL::to($category->category_icon) }}" style="height: 70px; width: 90px;">
              <input type="hidden" name="old_one" value="{{ $category->category_icon }}">
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