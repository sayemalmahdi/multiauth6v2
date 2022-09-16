@extends('frontend.master')

<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/cart_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/cart_responsive.css">
<script src="https://js.stripe.com/v3/"></script>
@section('title','Pay Now')

@section('mainContent')

<!-- Strip Form CSS Start -->
<style type="text/css">
/**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;

  height: 40px;
  width: 100%;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
</style>

<!-- Strip Form CSS End -->

@php  
  $setting=DB::table('settings')->first();
  $charge=$setting->shipping_charge;

  $cart=Cart::content();
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
      <div class="card">
        <div class="card-header" style="text-align: center;">
          <h4>{{ __('Pay Now') }}</h4>
        </div>

          <div class="card-body">
            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">
                        <!-- {{ __('Stripe') }} -->
              </label>

                <div class="col-lg-10 offset-lg-1">
                    <!-- <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                        name="" required autocomplete="email" autofocus placeholder="" > -->

                    <!-- Strip Form Start -->

                        <form action="{{ route('stripe.charge') }}" method="post" id="payment-form">
                          @csrf
                          <div class="form-row">
                            <!-- <label for="card-element">
                              Credit or debit card
                            </label> -->

                            <label for="email" class="col-md-8 col-form-label text-md-right">
                                <!-- {{ __('Credit or debit card') }} -->
                                {{ __('CREDIT OR DEBIT CARD') }}
                            </label>

                            <br>
                            <div id="card-element">
                              <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                          </div>

                          <br>

                            <!-- extra data -->
                        <input type="hidden" name="shipping" value="{{ $charge }}">
                        <input type="hidden" name="vat" value="0">
                        
                <!-- <input type="hidden" name="total" value="{{ Cart::Subtotal() + $charge }}"> -->
                  <!-- Done this code at tutorial 48 Start-->

                          @if(Session::has('coupon'))
                          <input type="hidden" name="total"
                              value="{{ Session::get('coupon')['balance'] + $charge }}">
                          @else
                          <input type="hidden" name="total"
                              value="{{ Cart::Subtotal() + $charge }}">
                          @endif
                                
                  <!-- Done this code at tutorial 48 end-->
                            <!-- shipping details pass -->
                        <input type="hidden" name="ship_name" value="{{ $data['name'] }}">
                        <input type="hidden" name="ship_email" value="{{ $data['email'] }}">
                        <input type="hidden" name="ship_phone" value="{{ $data['phone'] }}">
                        <input type="hidden" name="ship_address" value="{{ $data['address'] }}">
                        <input type="hidden" name="ship_city" value="{{ $data['city'] }}">
                        <input type="hidden" name="payment_type" value="{{ $data['payment'] }}">

                          <!-- <button>Submit Payment</button> -->
                        <div class="contact_form_button" style="text-align: center;">
                            <button type="submit" class="btn btn-info">Pay Now</button>
                        </div>

                      </form>

                     <!-- Strip Form End -->
                                    
                </div>
            </div>
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






<!-- Strip Form JS Start -->

<script type="text/javascript">
// Create a Stripe client.
var stripe = Stripe('pk_test_oaEUui855EDnLUUc1nTTdyBO00ovvgGGKM');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
</script>
<!-- Strip Form JS End -->


@endsection