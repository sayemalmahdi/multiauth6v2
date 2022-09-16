@extends('frontend.master')

<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/cart_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/cart_responsive.css">

@section('title','Cart Show')

@section('mainContent')
<br>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 ">
					<div class="cart_container">
						<div class="cart_title" style="text-align: center;">Shopping Cart</div><br>
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
                  <th class="wd-15p">Quantity</th>
                  <th class="wd-15p">Total</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
               @foreach($cart as $row)
                <tr style="text-align: center;">
                  <!-- <td></td>
                  <td></td> -->
                  
                  <td><img src="{{ asset( $row->options->image) }}" height="50px;" width="50px;"></td>
                  <td>{{ $row->name }}</td>
                  <td>${{ $row->price }}</td>
                  <td>
                  	@if($row->options->color == NULL)
                  	 <span class="badge badge-danger">No Color</span>
					@else
                  	{{ $row->options->color }}
                  	@endif
                  </td>
                  <td>
                  	@if($row->options->size == NULL)
                  	 <span class="badge badge-danger">No Size</span>
					@else
                  	{{ $row->options->size }}
                  	@endif
                  </td>
                  <td>
                    <form method="post" action="{{ route('update.cartitem') }}">
                      @csrf
                      <input type="hidden" name="productid" value="{{ $row->rowId }}">

                    	<input type="number" name="qty" value="{{ $row->qty }}" style="width: 40px; height: 30px;">
          						<button type="submit" class="btn btn-success btn-sm">
          							<i class="fa fa-check-square"></i>
          						</button>
                    </form>
                  </td>
                  <td>${{ $row->price * $row->qty }}</td>
                  <td>
                  	
                  	 <span class="badge badge-success">Available</span>
                  	
                  	
                  	
                  </td>
                  <td>
                  	
                  	<a href="{{ url('remove/cart/item/'.$row->rowId) }}" class="btn btn-sm btn-danger" title="Delete" ><i class="fa fa-trash"></i></a>
                  	<a href="" class="btn btn-sm btn-warning" title="View"><i class="fa fa-eye"></i></a>                	
                  </td>                 
                </tr>  
                @endforeach      
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
	  </div>
	  	<!-- Order Total -->
			<div class="order_total">
				<div class="order_total_content text-md-right">
					<div class="order_total_title">Order Total:</div>
					<div class="order_total_amount">${{ Cart::Subtotal() }}</div>
				</div>
			</div>

			<div class="cart_buttons">
				<button type="button" class="button cart_button_clear">All Cancel</button>
				<a href="{{ route('user.checkout') }}" class="button cart_button_checkout">Checkout</a>
			</div>
	</div>
  </div>
</div>
	
<br><br><br>
@endsection