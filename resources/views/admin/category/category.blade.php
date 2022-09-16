@extends('admin.master')

@section('title',"ALL-CATEGORY")

@section('dashboardContent')

   <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <!-- <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Add</a>
        <a class="breadcrumb-item" href="#">Edit</a>
        <span class="breadcrumb-item active">Delete</span>
      </nav> -->

      <div class="sl-pagebody">
        <!-- <div class="sl-page-title">
          <h5>Category Table</h5>
          <p>DataTables is a plug-in for the jQuery Javascript library.</p>
          <p>Add-Edit-Delete</p>
        </div> --><!-- sl-page-title -->

        <!-- <span style="text-align: center;">
          <h2 style="color: green;">{{ Session::get('message') }}</h2>
        </span> -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Category Responsive DataTable
              <a href="#" class="btn btn-sm btn-warning" style="float:right;" data-toggle="modal" data-target="#exampleModal">Add New</a>
          </h6>
          <!-- <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p> -->


          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Category Name</th>
                  <th class="wd-15p">Category Icon</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($category as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->category_name }}</td>
                  <td>
                    <img src="{{ URL::to($row->category_icon) }}" height="50px;" width="60px;">
                  </td>
                  <td>
                    <a href="{{ URL::to('admin/edit/category/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ URL::to('admin/delete/category/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                  </td>
                </tr>  
                @endforeach             
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->





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
      <form method="post" action="{{ route('admin.store.category') }}" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <!-- Bootstrap Form -->
        
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_name">
              <small id="emailHelp" class="form-text text-muted">Add a unique category</small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Category Icon</label>
              <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_icon">
              <small id="emailHelp" class="form-text text-muted">Add a unique icon</small>
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

@endsection