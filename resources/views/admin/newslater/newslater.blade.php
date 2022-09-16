@extends('admin.master')

@section('title',"ALL-NEWSLATER-SUBSCRIBER")

@section('dashboardContent')
    <div class="sl-mainpanel">
      
      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Newslater Responsive DataTable</h6>
         
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Subscribing Time</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($newslater as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->email }}</td>
                  <td>{{ \Carbon\Carbon::parse ($row->created_at)->diffForhumans() }}</td>
                  <td>
                    <a href="{{ URL::to('admin/delete/newslater/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                  </td>
                </tr>  
                @endforeach             
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

@endsection