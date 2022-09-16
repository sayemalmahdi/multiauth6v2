@extends('frontend.master')

<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/blog_single_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles')}}/blog_single_responsive.css">

@section('title','Single Blog Post')

@section('mainContent')

	<!-- Single Blog Post -->

	<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="blog_image" style="background-image:url({{ URL::to($postsingle->post_image) }});height: 300px; width: 300px;"></div>
					<div class="single_post_title">
						@if(session()->get('lang') == 'bangla')
                            {{ $postsingle->post_title_bn }}
                        @else
                            {{ $postsingle->post_title_en }}
                        @endif
					</div>
					<div class="single_post_text">
						<p>
							@if(session()->get('lang') == 'bangla')
                                {!! $postsingle->details_bn !!}
                            @else
                                {!! $postsingle->details_en !!}
                            @endif
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Blog Posts -->
<!-- 	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">
						<div class="blog_post">
							<div class="blog_image" style="background-image:url(images/blog_4.jpg)"></div>
							<div class="blog_text">Etiam leo nibh, consectetur nec orci et, tempus tempus ex</div>
							<div class="blog_button"><a href="blog_single.html">Continue Reading</a></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div> -->
<!-- End Blog Posts -->

<br><br><br><br><br>

@endsection
