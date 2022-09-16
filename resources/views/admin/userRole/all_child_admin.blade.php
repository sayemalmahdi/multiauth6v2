@extends('admin.master')

@section('title',"ALL CHILD ADMIN")

@section('dashboardContent')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <!-- <div class="sl-page-title">
          <h5>Admin Table</h5>
        </div> -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">All Child Admin List
          	<a href="{{ route('admin.create.admin') }}" class="btn btn-sm btn-warning" style="float: right;" >Add New</a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Access</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($user as $row)
                <tr>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->phone }}</td>
                  <td>
                    @if($row->category == 1)
                  	     <span class="badge badge-danger">Category</span>
                      @else
                      @endif   
                       @if($row->coupon == 1)
                         <span class="badge badge-success">Coupon</span>
                      @else
                      @endif 

                      @if($row->product == 1)
                         <span class="badge badge-info">Product</span>
                      @else
                      @endif 

                      @if($row->blog == 1)
                         <span class="badge badge-warning">Blog</span>
                      @else
                      @endif 

                      @if($row->orders == 1)
                         <span class="badge badge-primary">Order</span>
                      @else
                      @endif

                      @if($row->other == 1)
                         <span class="badge badge-danger">Other</span>
                      @else
                      @endif

                      @if($row->report == 1)
                         <span class="badge badge-success">Report</span>
                      @else
                      @endif


                      <!-- For Stock -->
                      @if($row->stock == 1)
                         <span class="badge badge-danger">Stock</span>
                      @else
                      @endif



                      @if($row->user_role == 1)
                         <span class="badge badge-info">Role</span>
                      @else
                      @endif

                      @if($row->site_setting == 1)
                         <span class="badge badge-info">Site Setting</span>
                      @else
                      @endif

                      @if($row->returns == 1)
                         <span class="badge badge-warning">Return Order</span>
                      @else
                      @endif

                      @if($row->contact == 1)
                         <span class="badge badge-primary">Contact</span>
                      @else
                      @endif

                      @if($row->comment == 1)
                         <span class="badge badge-danger">Comment</span>
                      @else
                      @endif

                      @if($row->setting == 1)
                         <span class="badge badge-success">Setting</span>
                      @else
                      @endif

                      

                  </td>
                  <td>
                  	<a href="{{ URL::to('admin/edit/child/admin/'.$row->id) }}" class="btn btn-sm btn-info">edit</a>
                  	<a href="{{ URL::to('admin/delete/child/admin/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
                  </td>
                 
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      



@endsection