@extends('admin.master')

@section('title',"ALL PRODUCT LIST")

@section('dashboardContent')

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
              <!-- <a href="#" class="btn btn-sm btn-warning" style="float:right;" data-toggle="modal" data-target="#exampleModal">Add New</a> -->

              <h6 class="card-body-title">Product List Responsive DataTable<a href="{{ route('admin.add.product') }}" class="btn btn-success btn-sm pull-right">ADD Product</a></h6>

          </h6>
         
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Product Code</th>
                  <th class="wd-15p">Product Name</th>
                  <th class="wd-15p">Product Image</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-15p">Brand</th>
                  <th class="wd-15p">Quantity</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($product as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->product_code }}</td>
                  <td>{{ $row->product_name }}</td>
                  <td><img src="{{ URL::to($row->image_one) }}" height="50px;" width="50px;"></td>
                  <td>{{ $row->category_name }}</td>
                  <td>{{ $row->brand_name }}</td>
                  <td>{{ $row->product_quantity }}</td>
                  <td>
                  	@if($row->status == 1)
                  	 <span class="badge badge-success">Active</span>
                  	@else
                  	<span class="badge badge-danger">Inactive</span>
                  	@endif
                  </td>
                  <td>
                  	<a href="{{ URL::to('admin/edit/product/'.$row->id) }}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                  	<a href="{{ URL::to('admin/delete/product/'.$row->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                  	<a href="{{ URL::to('admin/view/product/'.$row->id) }}" class="btn btn-sm btn-warning" title="View"><i class="fa fa-eye"></i></a>

                  	@if($row->status == 1)
                  		<a href="{{ URL::to('admin/inactive/product/'.$row->id) }}" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                  	@else
                  		<a href="{{ URL::to('admin/active/product/'.$row->id) }}" class="btn btn-sm btn-success" title="Active"><i class="fa fa-thumbs-up"></i></a>
                  	@endif
                  	
                  </td>                 
                </tr>  
                @endforeach             
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

@endsection