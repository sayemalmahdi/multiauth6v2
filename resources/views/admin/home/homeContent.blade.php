@extends('admin.master')

@section('title',"Admin-Dashboard")

@section('dashboardContent')

@php
  $date=date("d-m-y");
  $month=date("F");
  $year=date('Y');

  $today=DB::table('orders')->where('date',$date)->sum('total');
  $todaydelevered=DB::table('orders')->where('date',$date)->where('status',3)->sum('total');
  $monthdelevered=DB::table('orders')->where('month',$month)->where('status',3)->sum('total');
  $yeardelevered=DB::table('orders')->where('year',$year)->where('status',3)->sum('total');

  $thismonthreturn=DB::table('orders')->where('month',$month)->where('return_order',2)->sum('total');
  $thisyearreturn=DB::table('orders')->where('year',$year)->where('return_order',2)->sum('total');

  $month=DB::table('orders')->where('month',$month)->sum('total');

  $year=DB::table('orders')->where('year',$year)->sum('total');

  $return=DB::table('orders')->where('return_order',2)->sum('total');
  $product=DB::table('products')->get();
  $brand=DB::table('brands')->get();
  $user=DB::table('users')->where('role_id',3)->get();
  $childadmin=DB::table('users')->where('role_id',1)->where('type',2)->get();

  $todayreturn=DB::table('orders')->where('date',$date)->where('return_order',2)->sum('total');
  
  
@endphp


	<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <!-- <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav> -->

      <div class="sl-pagebody">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Order</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $today }}</h3>
              </div><!-- card-body -->
              <!-- <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div> --><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Delevered</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $todaydelevered }}</h3>
              </div><!-- card-body -->
              <!-- <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div> --><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Order</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $month }}</h3>
              </div><!-- card-body -->
              <!-- <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div> --><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Order</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $year }}</h3>
              </div><!-- card-body -->
              <!-- <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div> --><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->


<!-- START 2ND ROW -->
    <br>
      <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Delevered</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $todaydelevered }}</h3>
              </div><!-- card-body -->
              <!-- <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div> --><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Delevered</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $todaydelevered }}</h3>
              </div><!-- card-body -->
              <!-- <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div> --><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Delevered</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $monthdelevered }}</h3>
              </div><!-- card-body -->
              <!-- <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div> --><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Delevered</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $yeardelevered }}</h3>
              </div><!-- card-body -->
              <!-- <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div> --><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

<!-- END 2ND ROW -->


<!-- START 3RD ROW -->

      <br>
       <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Return</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $return }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->

          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Return</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $todayreturn }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->

          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Return </h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $thismonthreturn }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->

          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Return</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $thisyearreturn }}</h3>
              </div><!-- card-body -->
            
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

<!-- END 3RD ROW -->


<!-- START 4RT ROW -->

      <br>
       <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Product</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($product) }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->

          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Brand</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($brand) }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->

          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">User </h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($user) }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->

          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Child Admin</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($childadmin) }}</h3>
              </div><!-- card-body -->
            
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

<!-- END 4RT ROW -->





@endsection
        
@section('dashboardContentExtra')
   <div class="row row-sm mg-t-20">
          <div class="col-xl-8">
            <div class="card overflow-hidden">
              <div class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
                <div class="mg-b-20 mg-sm-b-0">
                  <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">Profile Statistics</h6>
                  <span class="d-block tx-12">October 23, 2017</span>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="#" class="btn btn-secondary tx-12 active">Today</a>
                  <a href="#" class="btn btn-secondary tx-12">This Week</a>
                  <a href="#" class="btn btn-secondary tx-12">This Month</a>
                </div>
              </div><!-- card-header -->
              <div class="card-body pd-0 bd-color-gray-lighter">
                <div class="row no-gutters tx-center">
                  <div class="col-12 col-sm-4 pd-y-20 tx-left">
                    <p class="pd-l-20 tx-12 lh-8 mg-b-0">Note: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula...</p>
                  </div><!-- col-4 -->
                  <div class="col-6 col-sm-2 pd-y-20">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">6,112</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Views</p>
                  </div><!-- col-2 -->
                  <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">102</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Likes</p>
                  </div><!-- col-2 -->
                  <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">343</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Comments</p>
                  </div><!-- col-2 -->
                  <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">960</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Shares</p>
                  </div><!-- col-2 -->
                </div><!-- row -->
              </div><!-- card-body -->
              <div class="card-body pd-0">
                <div id="rickshaw2" class="wd-100p ht-200"></div>
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card pd-20 pd-sm-25 mg-t-20">
              <h6 class="card-body-title tx-13">Horizontal Bar Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <canvas id="chartBar4" height="300"></canvas>
            </div><!-- card -->

          </div><!-- col-8 -->
          <div class="col-xl-4 mg-t-20 mg-xl-t-0">

            <div class="card pd-20 pd-sm-25">
              <h6 class="card-body-title">Pie Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">Labels can be hidden if the slice is less than a given percentage of the pie.</p>
              <div id="flotPie2" class="ht-200 ht-sm-250"></div>
            </div><!-- card -->

            <div class="card widget-messages mg-t-20">
              <div class="card-header">
                <span>Messages</span>
                <a href=""><i class="icon ion-more"></i></a>
              </div><!-- card-header -->
              <div class="list-group list-group-flush">
                <a href="" class="list-group-item list-group-item-action media">
                  <img src="{{asset('public/admin/backend')}}/img/img10.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Mienard B. Lumaad</span>
                      <span>4:09am</span>
                    </div>
                    <p class="msg-summary">Many desktop publishing packages and web page editors now use...</p>
                  </div><!-- media-body -->
                </a><!-- list-group-item -->
                <a href="" class="list-group-item list-group-item-action media">
                  <img src="{{asset('public/admin/backend')}}/img/img9.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Isidore Dilao</span>
                      <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">On the other hand, we denounce with righteous indignation and dislike...</p>
                  </div><!-- media-body -->
                </a><!-- list-group-item -->
                <a href="" class="list-group-item list-group-item-action media">
                  <img src="{{asset('public/admin/backend')}}/img/img8.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Kirby Avendula</span>
                      <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">It is a long established fact that a reader will be distracted by the readable...</p>
                  </div><!-- media-body -->
                </a><!-- list-group-item -->
                <a href="" class="list-group-item list-group-item-action media">
                  <img src="{{asset('public/admin/backend')}}/img/img7.jpg" alt="">
                  <div class="media-body">
                    <div class="msg-top">
                      <span>Roven Galeon</span>
                      <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">Than the fact that climate change may be causing it to rapidly disappear... </p>
                  </div><!-- media-body -->
                </a><!-- list-group-item -->
              </div><!-- list-group -->
              <div class="card-footer">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-3"></i> Load more messages</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->           
@endsection