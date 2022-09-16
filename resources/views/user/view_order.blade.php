@extends('frontend.master')
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/contact_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/contact_responsive.css">
@section('title','View Order')

@section('mainContent')

    <div class="sl-mainpanel">
      <!-- <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Order Section</span>
      </nav> -->
      <div class="sl-pagebody">

      	   
      <div class="col-lg-12">	
        
          <!-- <p class="mg-b-20 mg-sm-b-30">Order Details</p> -->
         
         <div class="row">
         	<div class="col-md-5 offset-1" >
               <br>
         	    <div class="card">
         	        <div class="card-header"><strong>Order</strong> Details</div>

         	        <div class="card-body">
         	    	<table class="table">
         	    		 <tr>
         	    		 	<th>Name: </th>
         	    		 	<th>{{ $order->name }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Phone: </th>
         	    		 	<th>{{ $order->phone }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Payment: </th>
         	    		 	<th>{{ $order->payment_type }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Payment ID: </th>
         	    		 	<th>{{ $order->payment_id }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Total :</th>
         	    		 	<th>{{ $order->total }} $</th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Month : </th>
         	    		 	<th>
         	    		 		  {{ $order->month }}
         	    		 	</th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Date: </th>
         	    		 	<th>{{ $order->date }}</th>
         	    		 </tr>
         	    	</table>  

         	        </div>
         	    </div>
         	</div>
         	<div class="col-md-5" >
               <br>
         	    <div class="card">
         	        <div class="card-header"><strong>Shipping</strong> Details</div>

         	        <div class="card-body">
         	    	<table class="table">
         	    		 <tr>
         	    		 	<th>Name: </th>
         	    		 	<th>{{ $shipping->ship_name }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Phone: </th>
         	    		 	<th>{{ $shipping->ship_phone }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Email: </th>
         	    		 	<th>{{ $shipping->ship_email }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Address: </th>
         	    		 	<th>{{ $shipping->ship_address }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>City :</th>
         	    		 	<th>{{ $shipping->ship_city }}</th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Status : </th>
         	    		 	<th>
         	    		 		    @if($order->status == 0)
         	    		 		     <span class="badge badge-warning">Pending</span>
         	    		 		    @elseif($order->status == 1)
         	    		 		    <span class="badge badge-info">Payment Accept</span>
         	    		 		    @elseif($order->status == 2) 
         	    		 		     <span class="badge badge-warning">Progress </span>
         	    		 		     @elseif($order->status == 3)  
         	    		 		     <span class="badge badge-success">Delevered </span>
         	    		 		     @else
         	    		 		     <span class="badge badge-danger">Cancel </span>
         	    		 		     @endif
         	    		 	</th>
         	    		 </tr>
         	    		  
         	    	</table>  

         	        </div>
         	    </div>
         	</div>
         </div>
          	<br><br><br><br>
         <div class="row">
         	<div class="card pd-20 pd-sm-40 col-lg-10 offset-1">
         	  <!-- <h6 class="card-body-title">Product Details </h6> -->
         	  <br>
         	  <div class="table-wrapper">
         	    <table id="datatable1"  class="table display responsive nowrap">
         	      <thead>
         	        <tr>
         	          <th class="wd-15p">Product ID</th>
         	          <th class="wd-15p">Product Name</th>
         	          <th class="wd-15p">Image</th>
         	          <th class="wd-15p">Color </th>
         	          <th class="wd-15p">Size</th>
         	          <th class="wd-15p">Quantity</th>
         	          <th class="wd-15p">Unit Price</th>
         	          <th class="wd-20p">Total</th>
         	        </tr>
         	      </thead>
         	      <tbody>
         	        @foreach($details as $row)
         	        <tr>
         	          <td>{{ $row->product_code }}</td>
         	          <td>{{ $row->product_name }}</td>
         	          <td><img src="{{ URL::to($row->image_one) }}" height="50px;" width="50px;"></td>
         	          <td>{{ $row->color }}</td>
         	          <td>{{ $row->size }}</td>
         	          <td>{{ $row->quantity }}</td>
         	          <td>
         	          	{{ $row->singleprice }} $
         	          	
         	          </td>
         	          <td>
         	          {{ $row->totalprice }} $
         	          	
         	          </td>
         	         
         	        </tr>
         	        @endforeach
         	      </tbody>
         	    </table>
         	  </div><!-- table-wrapper -->
         	</div><!-- card -->
         </div><br>

       	<!-- <a href="{{ url('admin/payment/accept/'.$order->id) }}" class="btn btn-info">Payment Accept</a>
   <a href="{{ url('admin/payment/cancel/'.$order->id) }}" class="btn btn-danger" id="delete">Cancel Order</a> -->
<div style="text-align: center;">
       	@if($order->status == 0)
            <h3 class="text-warning" style="text-align: center;"> PENDING </h3>

         @elseif($order->status == 1)
            <h3 class="text-info" style="text-align: center;"> PAYMENT ACCEPT </h3>

         @elseif($order->status == 2)      
            <h3 class="text-warning" style="text-align: center;"> PROGRESS </h3>

         @elseif($order->status == 3)
            <h3 class="text-success" style="text-align: center;">THIS PRODUCT ARE SUCCESSFULLY DELEVERED</h3>
            
         @else
            <h3 class="text-danger" style="text-align: center;">THIS ORDER ARE NOT VALID ITS CANCELED</h3>

         @endif
                 
</div>
   
</div>  

<br><br><br><br><br>


@endsection
