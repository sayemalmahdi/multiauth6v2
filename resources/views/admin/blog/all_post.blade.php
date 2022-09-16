@extends('admin.master')

@section('title',"ALL BLOG POST LIST")

@section('dashboardContent')

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
              <!-- <a href="#" class="btn btn-sm btn-warning" style="float:right;" data-toggle="modal" data-target="#exampleModal">Add New</a> -->

              <h6 class="card-body-title">Blog Post List Responsive DataTable<a href="{{ route('admin.add.blogpost') }}" class="btn btn-success btn-sm pull-right">ADD POST</a></h6>

          </h6>
         
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Post-Title</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($post as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->post_title_en }}</td>
                  <td>{{ $row->category_name_en }}</td>
                  <td><img src="{{ URL::to($row->post_image) }}" height="50px;" width="50px;"></td>
                  <td>
                  	<a href="{{ URL::to('admin/edit/post/'.$row->id) }}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                  	<a href="{{ URL::to('admin/delete/post/'.$row->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                  	<a href="" class="btn btn-sm btn-warning" title="View"><i class="fa fa-eye"></i></a>               	
                  </td>                 
                </tr>  
                @endforeach             
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

@endsection