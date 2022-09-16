<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>Sleek Login Form A Flat Responsive Widget Template :: W3layouts</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Sleek Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Style --> <link rel="stylesheet" href="{{ asset('public/admin/login/css') }}/style.css" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<!-- <h1>SLEEK LOGIN FORM</h1> -->

	<!-- <h1>MULTIAUTH LOGIN FORM</h1> -->
	

	<h1>Log in to your Account</h1>

	<div class="w3layoutscontaineragileits">
		<span style="color: darkorange">
			<strong>MULTIAUTH LOGIN FORM</strong>
		</span>
		<br>
		<br>
		<!-- <form action="#" method="post"> -->
			<form method="POST" action="{{ route('login') }}">
                        @csrf
			<div>
				<input type="text" name="email" placeholder="EMAIL" required="">
				@error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			</div>


			<div>
				<input type="password" Name="password" placeholder="PASSWORD" required="">
					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="LOGIN">
				<p><a href="{{ route('register') }}">REGISTER NEW ACCOUNT <span>→</span></a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>

	<!-- <div class="w3footeragile">
		<p> &copy; 2017 Sleek Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
	</div> -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="w3footeragile">
		<p> &copy; 2020 Login Form. All Rights Reserved | Design by Sayem</p>
	</div>
	

</body>
<!-- //Body -->

</html>