@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">About</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">About</li>
								</ol>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<div class="btn-group mb-0">
									<button type="button" class="btn btn-outline-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#"><i class="fa fa-plus mr-2"></i>Add new Page</a>
										<a class="dropdown-item" href="#"><i class="fa fa-eye mr-2"></i>View the page Details</a>
										<a class="dropdown-item" href="#"><i class="fa fa-edit mr-2"></i>Edit Page</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="fa fa-cog mr-2"></i> Settings</a>
									</div>
								</div>
								<div class="ml-3">
									<span class="sparkline_bar mr-2 float-left"></span>
									<span class="float-left border-">
										<span class="mb-0 mt-1 mr-2">2,978</span><small class="mb-0 mr-3">( Visitors )</small>
									</span>
									<span class="sparkline_bar1 mr-2 float-left"></span>
									<span class="float-left">
										<span class="mb-0 mt-1 mr-2">6,453</span><small class="mb-0">( Followers )</small>
									</span>
								</div>
							</div>
						</div>
						<!--End Page header-->
@endsection
@section('content')
						<!-- Row-->
						<div class="row ">
							<div class="col-md-4 features">
								<div class="card feature bg-primary">
									<div class="card-body text-center text-white">
										<h5>Employess</h5>
										<h2 class="counter">2569</h2>
									</div>
								</div>
							</div>
							<div class="col-md-4 features">
								<div class="card feature bg-secondary">
									<div class="card-body text-center text-white">
										<h5>Profit</h5>
										<h2 class="counter"> 2,56989.32</h2>
									</div>
								</div>
							</div>
							<div class="col-md-4 features">
								<div class="card feature bg-info">
									<div class="card-body text-center text-white">
										<h5>Growth</h5>
										<h2 class="counter">9,999,852</h2>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!--Row -->
						<div class="row">
							<div class="col-md-6 col-sm-12 col-lg-6">
								<div class="card">
									<div class="row">
										<div class="col-md-12 col-lg-6 pr-0 d-none d-lg-block">
											<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="img" class="br-tl-7 br-bl-7">
										</div>
										<div class="col-md-12 col-lg-6  pl-0 ">
											<div class="card-body p-4 about-con pabout">
												<h4 class="mb-4 font-weight-semibold">Why Clont?</h4>
												<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority
												</p>
												<a href="#" class="btn btn-sm btn-primary btn-lg ">View More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-lg-6">
								<div class="card">
									<div class="row">
										<div class="col-md-12 col-lg-6 pr-0 d-none d-lg-block">
											<img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="img" class="br-tl-7 br-bl-7">
										</div>
										<div class="col-md-12 col-lg-6  pl-0 ">
											<div class="card-body p-4 about-con pabout">
												<h4 class="mb-4 font-weight-semibold">What is Our Services?</h4>
												<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority
												</p>
												<a href="#" class="btn btn-sm btn-primary btn-lg ">View More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-lg-12">
								<div class="card">
									<div class="row">
										<div class="col-md-12 col-lg-5 pr-0 d-none d-lg-block">
											<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="img" class="br-tl-7 br-bl-7">
										</div>
										<div class="col-md-12 col-lg-7  pl-0 ">
											<div class="card-body p-7 about-con pabout">
												<h2 class="mb-4 font-weight-semibold">About Clont</h2>
												<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
												<p>If you are going to use a passage necessary, making this the first true generator on the Internet
												</p>
												<a href="#" class="btn  btn-primary btn-lg mt-1">View More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-6 col-sm-12 col-lg-6">
								<div class="card">
									<div class="row">
										<div class="col-md-12 col-lg-6 pr-0 d-none d-lg-block">
											<img src="{{URL::asset('assets/images/photos/17.jpg')}}" alt="img" class="br-tl-7 br-bl-7">
										</div>
										<div class="col-md-12 col-lg-6  pl-0 ">
											<div class="card-body p-4 about-con pabout">
												<h4 class="mb-4 font-weight-semibold">Position in Market</h4>
												<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority
												</p>
												<a href="#" class="btn btn-sm btn-primary btn-lg ">View More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-lg-6">
								<div class="card">
									<div class="row">
										<div class="col-md-12 col-lg-6 pr-0 d-none d-lg-block">
											<img src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="img" class="br-tl-7 br-bl-7 ">
										</div>
										<div class="col-md-12 col-lg-6  pl-0 ">
											<div class="card-body p-4 about-con pabout">
												<h4 class="mb-4 font-weight-semibold">Our Management</h4>
												<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority
												</p>
												<a href="#" class="btn btn-sm btn-primary btn-lg ">View More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End row-->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!--Counters js-->
<script src="{{URL::asset('assets/plugins/counters/counterup.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/counters/waypoints.min.js')}}"></script>
<script src="{{URL::asset('assets/js/counterup.js')}}"></script>
@endsection