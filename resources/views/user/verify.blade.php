@extends('frontend.master')
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/contact_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/contact_responsive.css">
@section('title','Profile Page')

@section('mainContent')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">
                	<strong>{{ __('Verify Your Email Address') }}</strong>
            	</div>

                <div class="card-body" style="text-align: center;">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>
@endsection