@extends('frontend.master')

<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/cart_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/cart_responsive.css">

@section('title','All Wishlist')

@section('mainContent')

<br>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 ">
					<div class="cart_container">
						<div class="cart_title" style="text-align: center;">All Wishlist</div><br>
<div class="card pd-20 pd-sm-40">        
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr style="text-align: center;">
                  <!-- <th class="wd-15p">ID</th>
                  <th class="wd-15p">Product Code</th> -->
                  <th class="wd-15p">Image</th>
                  <th class="wd-15p">Name</th>                  
                  <th class="wd-15p">Price</th>
                  <th class="wd-15p">Color</th>
                  <th class="wd-15p">Size</th>                  
                  <!-- <th class="wd-15p">Quantity</th>
                  <th class="wd-15p">Total</th> -->
                  <th class="wd-15p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
               @foreach($product as $row)
                <tr style="text-align: center;">
                  <!-- <td></td>
                  <td></td> -->
                  
                  <td><img src="{{ asset( $row->image_one) }}" height="50px;" width="50px;"></td>
                  <td>{{ $row->product_name }}</td>
                  <td>
                  	<!-- @if($row->discount_price == NULL)	              
		               <span style="color: #db5246;"> ${{ $row->selling_price }} </span>
		            @else                 
		              <span style="color: #db5246;"> ${{ $row->discount_price }} </span>                          	&nbsp;<strike><span style="color: rgba(0,0,0,0.5);">
		                     ${{ $row->selling_price }}   
		                    		  </span>
		                    </strike>             	
		             @endif -->

		             @if($row->discount_price == NULL)	              
		               <span style="color: #db5246;"> ${{ $row->selling_price }} </span>
		            @else                 
		              <span style="color: #28a745;"> ${{ $row->discount_price }} </span>
		             @endif
                  </td>
                  <td>
                  	@if($row->product_color == NULL)
                  	 <span class="badge badge-danger">No Color</span>
					@else
                  	{{ $row->product_color }}
                  	@endif
                  </td>
                  <td>
                  	@if($row->product_size == NULL)
                  	 <span class="badge badge-danger">No Size</span>
					@else
                  	{{ $row->product_size }}
                  	@endif
                  </td>
                  <!-- <td>
                    <form method="post" action="{{ route('update.cartitem') }}">
                      @csrf
                      <input type="hidden" name="productid" value="">

                    	<input type="number" name="qty" value="" style="width: 40px; height: 30px;">
          						<button type="submit" class="btn btn-success btn-sm">
          							<i class="fa fa-check-square"></i>
          						</button>
                    </form>
                  </td>
                  <td>
	                  	@if($row->discount_price == NULL)	              
			                ${{ $row->selling_price * $row->product_quantity }}
			            @else                 
			             	${{ $row->discount_price * $row->product_quantity }}               	
			            @endif
                  </td> -->
                  <td>
                  	
                  	 <span class="badge badge-success">Available</span>
                  	
                  	
                  	
                  </td>
                  <td>
                  	
                  	<a href="{{ url('remove/wishlist/item/'.$row->id.'/'.$row->product_name) }}" class="btn btn-sm btn-danger" title="Delete" ><i class="fa fa-trash"></i></a>
                  	<a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}" class="btn btn-sm btn-warning" title="View"><i class="fa fa-eye"></i></a>                	
                  </td>                 
                </tr>  
                @endforeach      
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
	  </div>
	  	<!-- Order Total -->
			<!-- <div class="order_total">
				<div class="order_total_content text-md-right">
					<div class="order_total_title">Order Total:</div>
					<div class="order_total_amount">${{ Cart::Subtotal() }}</div>
				</div>
			</div> -->

			<div class="cart_buttons">
				<a href="{{ url('/') }}" class="button cart_button_checkout">Home Page</a>
				<a href="{{ route('show.cart') }}" class="button cart_button_checkout">My Cart</a>
			</div>
	</div>
  </div>
</div>
	
<br><br><br>

@endsection