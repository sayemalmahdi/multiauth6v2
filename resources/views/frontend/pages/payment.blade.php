@extends('frontend.master')

<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/cart_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/cart_responsive.css">

@section('title','Payment Process')

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
						<div class="cart_title" style="text-align: center;">Payment Process</div><br>
<div class="card pd-20 pd-sm-40">        
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr style="text-align: center;">
                  <th class="wd-15p">Image</th>
                  <th class="wd-15p">Name</th>                  
                  <th class="wd-15p">Price</th>
                  <th class="wd-15p">Color</th>
                  <th class="wd-15p">Size</th>                  
                  <th class="wd-15p">Quantity</th>
                  <th class="wd-15p">Total</th>
                  <th class="wd-15p">Status</th>
                
                </tr>
              </thead>
              <tbody>
               @foreach($cart as $row)
                <tr style="text-align: center;">
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
                  </td>
                  <td>${{ $row->price * $row->qty }}</td>
                  <td>
                  	 <span class="badge badge-success">Available</span>
                  </td>                                 
                </tr>  
                @endforeach      
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
	  </div>
	

      <!-- Checkout Deatils -->
      <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6" >
            <div class="card">
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
                    <!-- End Register col-md- -->

        <div class="col-lg-6 offset-lg-0" style="float: right;">
            <!-- <br><br>
 -->            <div class="card">
                <div class="card-header" style="text-align: center;">
                  <h4>{{ __('Shipping Address') }}</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('payment.process') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="name" required autocomplete="email" autofocus 
                                  placeholder="" 
                                >
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}
                              
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="phone" required autocomplete="email" autofocus 
                                placeholder=""
                                >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus 
                                  placeholder="" 
                                >
                               
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="address" required autocomplete="email" autofocus 
                                  placeholder="" 
                                >
                               
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="city" required autocomplete="email" autofocus 
                                placeholder=""
                                >

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Payment By') }}</label>

                        <div class="form-group">
                          <ul class="logos_list " >

                              <li><input type="radio" name="payment" value="stripe"> <img src="{{ asset('public/frontend/images/mastercard2.png') }}" style="width: 60px; height: 45px;" title="Stripe">
                              </li>

                               <li>
                                <input type="radio" name="payment" value="ideal"> <img src="{{ asset('public/frontend/images/mollie2.jpg') }}" style="width: 70px; height: 46px;" title="Ideal">
                              </li>

                              <li>
                                <input type="radio" name="payment" value="paypal"> <img src="{{ asset('public/frontend/images/paypal2.png') }}" style="width: 65px; height: 30px;" title="PayPal">
                              </li>
  
                          </ul>
                        </div>
  

                        </div>

                        <div class="contact_form_button" style="text-align: center;">
                                <button type="submit" class="btn btn-info">Pay Now</button>
                        </div>

                    </form>
                
                </div>
            </div>
        </div>
        <!-- End Login col-md- -->


    </div>
</div>

      <!-- End Checkout Deatils -->

			
	</div>
  </div>
</div>
	
<br><br><br>
@endsection