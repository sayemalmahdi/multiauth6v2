@extends('frontend.master')

<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/blog_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/blog_responsive.css">

@section('title','Blog Post')

@section('mainContent')

<!-- Home -->

	<!-- <div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Technological Blog</h2>
		</div>
	</div> -->

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">
						
					<!-- Blog post -->
					  @foreach($post as $row)
						<div class="blog_post">
							<div class="blog_image" style="background-image:url({{ asset($row->post_image) }})"></div>
							<div class="blog_text">
								<!-- {{ $row->post_title_en }} -->
								<!-- <p>{{ $row->details_en }}</p> -->

								@if(session()->get('lang') == 'bangla')
                                    {{ $row->post_title_bn }}
                                @else
                                    {{ $row->post_title_en }}
                                @endif

							</div>
							<div class="blog_button">
								<a href="{{ URL::to('blog/post/single/'.$row->id) }}">
									@if(session()->get('lang') == 'bangla')
			                            বিস্তারিত পড়ুন
			                        @else
			                            Continue Reading
			                        @endif
								</a>
							</div>
						</div>
					  @endforeach
					<!-- Blog post -->
						
					</div>
				</div>
					
			</div>
		</div>
	</div>

@endsection