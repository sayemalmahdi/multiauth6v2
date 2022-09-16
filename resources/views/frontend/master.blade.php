<!DOCTYPE html>
<html lang="en">
<head>
<title>
	@yield('title')
</title>
<meta name="csrf" value="{{ csrf_token() }}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/bootstrap4/bootstrap.min.css">
<link href="{{asset('public/frontend/plugins')}}/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins')}}/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins')}}/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins')}}/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins')}}/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/responsive.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

</head>

<body>

<div class="super_container">
	
<!-- Header -->
	
	@include('frontend.inc.header')

<!-- End Header -->




	
	@yield('mainContent')







<!-- Footer -->
	
	@include('frontend.inc.footer')
	
<!-- End Footer -->

</div>





<!-- Order Tracking Modal Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Your Status Code</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <div style="padding-left: 20px;padding-right: 20px;">
            <form method="post" action="{{ route('order.tracking') }}">
                @csrf
                <div class="form-row">
                    <label>Status Code</label>
                       <input type="text" name="code" required="" class="form-control" placeholder="Your Order Status Code">
                </div><br>
                <button class="btn btn-danger" type="submit">Track Now</button><br><br>                
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- Order Tracking Modal End -->

<script src="{{asset('public/frontend/js')}}/jquery-3.3.1.min.js"></script>
<script src="{{asset('public/frontend/styles')}}/bootstrap4/popper.js"></script>
<script src="{{asset('public/frontend/styles')}}/bootstrap4/bootstrap.min.js"></script>
<script src="{{asset('public/frontend/plugins')}}/greensock/TweenMax.min.js"></script>
<script src="{{asset('public/frontend/plugins')}}/greensock/TimelineMax.min.js"></script>
<script src="{{asset('public/frontend/plugins')}}/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{asset('public/frontend/plugins')}}/greensock/animation.gsap.min.js"></script>
<script src="{{asset('public/frontend/plugins')}}/greensock/ScrollToPlugin.min.js"></script>
<script src="{{asset('public/frontend/plugins')}}/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{asset('public/frontend/plugins')}}/slick-1.8.0/slick.js"></script>
<script src="{{asset('public/frontend/plugins')}}/easing/easing.js"></script>
<script src="{{asset('public/frontend/js')}}/custom.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script src="{{asset('public/frontend/js')}}/product_custom.js"></script>
<script src="{{asset('public/frontend/js')}}/cart_custom.js"></script>
<script src="{{asset('public/frontend/js')}}/blog_custom.js"></script>

    <script>
        @if(Session::has('message'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('message') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('message') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
          }
        @endif
     </script>  

     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>
<!--End Sweetalert -->
</body>

</html>