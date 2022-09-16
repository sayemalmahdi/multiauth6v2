@extends('frontend.master')
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/contact_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/contact_responsive.css">
@section('title','Return Order')

@section('mainContent')


    <div class="contact_form">
        <div class="container">
            <div class="row">
               <div class="col-10 card">
                 <table class="table table-response">
                   <thead>
                     <tr style="text-align: center;">
                       <th scope="col">PaymentType</th>
                       <th scope="col">Return</th>
                       <th scope="col">Amount</th>
                       <th scope="col">Date</th>
                        <th scope="col">Status </th>
                        <th scope="col">Action</th>
                     </tr>
                   </thead>
                   <tbody>
                    @foreach($order as $row)
                     <tr style="text-align: center;">
                       <th >{{ $row->payment_type }}</th>
                       <td>
                       	     	@if($row->return_order == 0)
		                       	 <span class="badge badge-warning">No Request</span>
		                       	@elseif($row->return_order == 1)
		                       	<span class="badge badge-info">Pending</span>
		                       	@elseif($row->return_order == 2) 
		                       	 <span class="badge badge-info">Success </span>
		                       	@endif
                       </td>
                       <td>{{ $row->total }} $</td>
                       <td>{{ $row->date }}</td>
                       <td>
                       	@if($row->status == 0)
                       	 <span class="badge badge-warning">Pending</span>
                       	@elseif($row->status == 1)
                       	<span class="badge badge-info">Payment Accept</span>
                       	@elseif($row->status == 2) 
                       	 <span class="badge badge-info">Progress </span>
                       	 @elseif($row->status == 3)  
                       	 <span class="badge badge-success">Delevered </span>
                       	 @else
                       	 <span class="badge badge-danger">Cancel </span>
                       	 @endif
                       </td>
                       <td>
                       	<a href="{{ URL::to('user/view/order/'.$row->id) }}" class="badge badge-success">View Order</a> | 
                       	@if($row->return_order == 0)
                         <a href="{{ url('user/request/return/order/'.$row->id) }}" class="badge badge-danger" id="return">Return Order</a>
                         @elseif($row->return_order == 1)
		                       	<span class="badge badge-info">
		                       		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pending&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                        </span>
		                 @elseif($row->return_order == 2) 
		                       	<span class="badge badge-info"> 
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Success&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            </span>
                         @endif
                       </td>
                     </tr>
                    @endforeach
                   </tbody>
                 </table>
               </div>
               <div class="col-md-1 col-md-offset-1">
                 <div class="card" style="width: 16rem;">
                  <br>
                  <img src="{{ URL::to( Auth::user()->image ) }}" class="card-img-top" style="height: 90px; width: 90px; margin-left: 34%; margin-top: 10%; border-radius: 50%;" >
                  <div class="card-body">
                    <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <a href="{{ route('user.password.change') }}"> Password Change </a>
                    </li>
                    <li class="list-group-item">
                      <a href="{{ URL::to('user/edit/profile/pic/'.Auth::user()->id) }}"> Edit Profile </a>
                    </li>
                    <li class="list-group-item">
                      <a href="{{ route('user.success.orderlist') }}"> Return Order </a>
                    </li>
                  </ul>
                  <div class="card-body">
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                  </div>
                </div>
               </div>
            </div>
        </div>
    </div>
<br><br><br><br><br><br>

@endsection
