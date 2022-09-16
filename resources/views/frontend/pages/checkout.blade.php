@extends('frontend.master')

<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/cart_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/cart_responsive.css">

@section('title','Checkout')

@section('mainContent')
@php  
  $setting=DB::table('settings')->first();
  $charge=$setting->shipping_charge;

@endphp
<br>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 ">
					<div class="cart_container">
						<div class="cart_title" style="text-align: center;">Checkout</div><br>
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
                    {{ $row->qty }}

                    <!-- <form method="post" action="{{ route('update.cartitem') }}">
                      @csrf
                      <input type="hidden" name="productid" value="{{ $row->rowId }}">

                    	<input type="number" name="qty" value="{{ $row->qty }}" style="width: 40px; height: 30px;">
          						<button type="submit" class="btn btn-success btn-sm">
          							<i class="fa fa-check-square"></i>
          						</button>
                    </form> -->
                  </td>
                  <td>${{ $row->price * $row->qty }}</td>
                  <td>
                  	
                  	 <span class="badge badge-success">Available</span>
                  	
                  	
                  	
                  </td>
                  <td>
                  	
                  	<a href="" class="btn btn-sm btn-danger" title="Delete" ><i class="fa fa-trash"></i></a>
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
      <!-- End Order Total -->

      <!-- Checkout Deatils -->
      <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5" >
            <div class="card">
                <div class="card-header" style="text-align: center;">
                  <h4>{{ __('Apply Coupons') }}</h4>
                </div>

                <div class="card-body">
                  @if(Session::has('coupon'))
                    <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Used Coupon') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name=""  required autocomplete="name" autofocus readonly
                            placeholder="{{   Session::get('coupon')['name'] }}" >   
                        </div>
                    </div>


                  @else

                    <form method="POST" action="{{ route('apply.coupon') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Coupon') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="coupon"  required autocomplete="name" autofocus>

                                
                            </div>
                        </div>



                      
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Apply') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
                    <!-- End Register col-md- -->

        <div class="col-lg-7 offset-lg-0" style="float: right;">
            <!-- <br><br>
 -->            <div class="card">
                <div class="card-header" style="text-align: center;">
                  <h4>{{ __('Checkout Details') }}</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                      @if(Session::has('coupon'))

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Order Total') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="" class="form-control @error('email') is-invalid @enderror" name="" value="" required autocomplete="email" autofocus readonly
                                  placeholder="$ {{ Cart::Subtotal() }}" 
                                >
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Applied Coupon') }}
                              <a href="{{ route('coupon.remove') }}" class="btn btn-danger btn-sm">x</a>
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="" value="" required autocomplete="email" autofocus readonly
                                placeholder="$ {{ Session::get('coupon')['discount'] }} &nbsp;&nbsp; Coupon: {{   Session::get('coupon')['name'] }}"
                                >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('SubTotal') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="" class="form-control @error('email') is-invalid @enderror" name="" value="" required autocomplete="email" autofocus readonly
                                  placeholder="$ {{ Session::get('coupon')['balance'] }}" 
                                >
                               
                            </div>
                        </div>

                        

                      @else

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Order Total') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="" class="form-control @error('email') is-invalid @enderror" name="" value="" required autocomplete="email" autofocus readonly
                                  placeholder="$ {{ Cart::Subtotal() }}" 
                                >
                               
                            </div>
                        </div>

                      @endif



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Shipping Charge') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="" class="form-control @error('email') is-invalid @enderror" name="" value="" required autocomplete="email" autofocus readonly
                                placeholder="$ {{ $charge }}"
                                >

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Vat') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="" class="form-control @error('email') is-invalid @enderror" name="" value="" required autocomplete="email" autofocus readonly
                                placeholder="$ 0"
                                >

                            </div>
                        </div>

                      @if(Session::has('coupon'))
                        <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="" class="form-control @error('email') is-invalid @enderror" name="" value="" required autocomplete="email" autofocus readonly
                                placeholder="$ {{ Session::get('coupon')['balance'] + $charge }}"
                                >
                            </div>
                        </div>
                      @else
                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="" class="form-control @error('email') is-invalid @enderror" name="" value="" required autocomplete="email" autofocus readonly
                                placeholder="$ {{ Cart::Subtotal() + $charge }} "
                                >
                            </div>
                        </div>
                      @endif

                    </form>
                
                </div>
            </div>
        </div>
        <!-- End Login col-md- -->


    </div>
</div>

      <!-- End Checkout Deatils -->

			<div class="cart_buttons">
				<a href="{{ route('show.cart') }}" class="button cart_button_checkout">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Back &nbsp;&nbsp;&nbsp;&nbsp;</a>&nbsp;
				<a href="{{ route('payment.step') }}" class="button cart_button_checkout">Final Step</a>
			</div>
	</div>
  </div>
</div>
	
<br><br><br>
@endsection