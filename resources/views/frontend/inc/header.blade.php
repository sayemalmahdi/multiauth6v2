@php
  $setting=DB::table('site_setting')->first();
@endphp

<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('public/frontend/images')}}/phone.png" alt=""></div>{{ $setting->phone_one }}</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('public/frontend/images')}}/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">
							{{ $setting->email }}</a></div>
						<div class="top_bar_content ml-auto">

							<!-- My order Tracking Start -->
							<div class="top_bar_menu">
	                            <ul class="standard_dropdown ">
	                                <li>
	                                    <a href="#" data-toggle="modal" data-target="#exampleModal">My Order Traking</a>  
	                                </li>         
	                            </ul>
	                        </div>&nbsp;&nbsp;&nbsp;
	                        <!-- My order Tracking End -->

							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<!-- @php 
                                        $language=session()->get('lang');
                                    @endphp -->
									<li>
										@if(session()->get('lang') == 'bangla')
										<a href="{{ route('language.english') }}">English<i class="fas fa-chevron-down"></i></a>
										@else
										<a href="{{ route('language.bangla') }}">Bangla<i class="fas fa-chevron-down"></i></a>
										@endif


									</li>
									
									@guest
									
									@else

									<li>
									<a href="{{ route('user.profile') }}">
										<div class="user_icon">
											<img src="{{asset('public/frontend/images')}}/user.svg" alt="">
										</div>

										@if(session()->get('lang') == 'bangla')
		                                    প্রোফাইল
		                                @else
		                                     Profile
		                                @endif

										<i class="fas fa-chevron-down"></i>
										
									</a>
										<ul>
											<li><a href="{{ URL::to('user/edit/profile/pic/'.Auth::user()->id) }}">@if(session()->get('lang') == 'bangla')
			                                    এডিট প্রোফাইল
			                                @else
			                                     Edit Profile
			                                @endif	
											</a></li>
											<li><a href="#">
												@if(session()->get('lang') == 'bangla')
			                                    	সেটিংস
				                                @else
				                                     Settings
				                                @endif
											</a></li>
											<li><a href="{{ route('user.logout') }}">
												@if(session()->get('lang') == 'bangla')
			                                    	লগ আউট
				                                @else
				                                     Logout
				                                @endif
											</a></li>
										</ul>
									</li>
									@endguest
									
								</ul>
							</div>

							<div class="top_bar_user">
								@guest
									<div class="user_icon"><img src="{{asset('public/frontend/images')}}/user.svg" alt=""></div>
									<div><a href="{{ route('register') }}">
										@if(session()->get('lang') == 'bangla')
		                                    রেজিস্টার
		                                @else
		                                     Register
		                                @endif
									</a></div>
									<div><a href="{{ route('login') }}">
										@if(session()->get('lang') == 'bangla')
		                                    লগইন
		                                @else
		                                     Sign in
		                                @endif
									</a></div>
								@else

								@endguest
								
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="{{ url('/') }}">
								@if(session()->get('lang') == 'bangla')
			                     	<!-- ওয়ান টেক -->
			                     	{{ $setting->company_name_bn }}
				                @else
				                    {{ $setting->company_name_en }}
				                @endif
							</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="{{ route('product.search') }}" method="post" class="header_search_form clearfix">
										@csrf
										<input type="search" name="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('public/frontend/images')}}/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							
							@guest
                            @else
                            @php 
                            $wishlist=DB::table('wishlists')->where('user_id',Auth::id())->get();
                            @endphp
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="{{asset('public/frontend/images')}}/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="{{ route('user.wishlist') }}">Wishlist</a></div>
									<div class="wishlist_count">{{ count($wishlist) }}</div>
								</div>
							</div>
							@endguest

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="{{asset('public/frontend/images')}}/cart.png" alt="">
										<div class="cart_count"><span>{{ Cart::count() }}</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="{{ route('show.cart') }}">Cart</a></div>
										<div class="cart_price">${{ Cart::Subtotal() }}</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->
@php
	$category=DB::table('categories')->get();
@endphp
		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
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
										<ul>
											
											@foreach($subcategory as $row)
											<li>
												<a href="{{ url('products/'.$row->id) }}">{{ $row->subcategory_name }}<i class="fas fa-chevron-right"></i></a>
											</li>
											@endforeach
										</ul>
									</li>
									@endforeach
									
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="{{ url('/') }}">
										@if(session()->get('lang') == 'bangla')
		                                    হোম 
		                                @else
		                                    Home
		                                @endif
										<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{ route('blog.post') }}">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="{{ route('blog.post') }}">
											@if(session()->get('lang') == 'bangla')
		                                    	ব্লগ 
			                                @else
			                                    Blog
			                                @endif
										<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="contact.html">
											@if(session()->get('lang') == 'bangla')
		                                    	যোগাযোগ 
			                                @else
			                                    Contact
			                                @endif
										<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('public/frontend/images')}}/phone_white.png" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{asset('public/frontend/images')}}/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>