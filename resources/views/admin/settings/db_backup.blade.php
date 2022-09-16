@extends('admin.master')

@section('title',"ALL BACKUP LIST")

@section('dashboardContent')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <!-- <div class="sl-page-title">
          <h5>Admin Table</h5>
        </div> -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">All Backup List
          	<a href="{{ route('admin.backup.now') }}" class="btn btn-sm btn-warning" style="float: right;" >Backup Now</a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p" style="text-align: center;">File Name</th>
                  <th class="wd-15p" style="text-align: center;">Size</th>
                  <th class="wd-15p" style="text-align: center;">Path</th>
                  <th class="wd-20p" style="text-align: center;">Download</th>
                  <th class="wd-20p" style="text-align: center;">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($files as $row)
                <tr style="text-align: center;">
                  <td>{{ $row->getFilename() }}</td>
                  <td>{{ $row->getsize() }}</td>
                  <td>{{ $row->getpath() }}</td>
                  
                  <td class="center">
                  	<a href="{{ url('admin/download/database/'.$row->getFilename()) }}" class="btn btn-sm btn-info" title="Download"><i class="fa fa-download"></i></a>
                  	
                  </td>

                  <td>
                  	
                  	<a href="{{ url('admin/delete/database/'.$row->getFilename()) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
                  </td>
                 
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      



@endsection