@extends('frontend.master')

@section('title','Search Results')

@section('mainContent')

<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/shop_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/shop_responsive.css">
<div class="super_container">

	
	<!-- Home -->

	<!-- <div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">All Products</h2>
		</div>
	</div> -->

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
@php
	$category=DB::table('categories')->get();
@endphp
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<ul class="sidebar_categories">

							@foreach($category as $row)
								@php
								$subcategory=DB::table('subcategories')
													->where('category_id',$row->id)
													->get();
								@endphp

								<li class="hassubs">
										<a href="#">{{ $row->category_name }}
											@if(count($subcategory)>0)
											<i class="fas fa-chevron-right"></i></a>
											@endif
										
											
											@foreach($subcategory as $row)
											<br>&nbsp;
												<a href="{{ url('products/'.$row->id) }}" style="color: #dc3545 ;">{{ $row->subcategory_name }} <i class=""></i></a>
											
											@endforeach
									
									</li>
							@endforeach
								
								
							</ul>
						</div>
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
							<div class="sidebar_subtitle">Price</div>
							<div class="filter_price">
								<div id="slider-range" class="slider_range"></div>
								<p>Range: </p>
								<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle color_subtitle">Color</div>
							<ul class="colors_list">
								<li class="color"><a href="#" style="background: #b19c83;"></a></li>
								<li class="color"><a href="#" style="background: #000000;"></a></li>
								<li class="color"><a href="#" style="background: #999999;"></a></li>
								<li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
								<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
								<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
							</ul>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<ul class="brands_list">
								@foreach($brands as $row)
								   
								<li class="brand"><a href="#">{{ $row->brand_name}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>{{ $products->total() }}</span> products found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></i></span>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid row">
							<div class="product_grid_border"></div>

							@foreach($products as $row)
							
							<div class="product_item is_new ">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center">
								<a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">
									<img src="{{ asset($row->image_one) }}" style="height: 100px; width: 100px;">
								</a>
								</div>
								<div class="product_content">

									@if($row->discount_price == NULL)
									    <br><span class="text-danger"><b> ${{ $row->selling_price }} </b></span>
									@else
									 <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
									@endif
									{{-- <div class="product_price">$225</div> --}}


									<div class="product_name"><div><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}" tabindex="0">{{ $row->product_name }}</a></div></div>
								</div>
						

								<ul class="product_marks">
									 @if($row->discount_price == NULL)
									         <li class="product_mark product_new" style="background: #0e8ce4;">New</li>
									         @else
									        @php
									        $amount=$row->selling_price - $row->discount_price;
									        $discount=$amount/$row->selling_price * 100;
									        @endphp 
									         <li class="product_mark product_new" style="background: #df3b3b;">
									       
									       {{ intval($discount) }}%
									        </li>
									@endif

								</ul>
							</div>
							@endforeach



						</div>
						

						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							 {{   $products->links() }}
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ asset('public/frontend/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/shop_custom.js') }}"></script>
@endsection