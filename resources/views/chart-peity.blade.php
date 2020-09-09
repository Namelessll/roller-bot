@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Pie Charts</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">Pie Charts</li>
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
						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pie Chart</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#2d66f7", "#1d2846"]}'>1/5</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#f72d66", "#1d2846"]}'>226/360</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#f7be2d", "#1d2846"]}'>0.52/1.561</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#2dcbf7", "#1d2846"]}'>1,4</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#f7592d", "#1d2846"]}'>226,134</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#66f72d", "#1d2846"]}'>0.52,1.041</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Donut Charts</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#13DAFE", "#1d2846"]}'>1/5</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#f72d66", "#1d2846"]}'>226/360</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#f7be2d", "#1d2846"]}'>0.52/1.561</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#2dcbf7", "#1d2846"]}'>1,4</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#f7592d", "#1d2846"]}'>226,134</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#66f72d", "#1d2846"]}'>0.52,1.041</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Charts</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="peity-line" data-width="100%">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar Charts</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="bar" data-peity='{ "fill": ["#2d66f7", "#f72d66"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="bar" data-peity='{ "fill": ["#2d66f7", "#f7be2d"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="bar" data-peity='{ "fill": ["#2dcbf7", "#2d66f7"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Data attributes</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#13DAFE", "#1d2846"],    "innerRadius": 10, "radius": 40 }'>1/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#f72d66", "#1d2846"], "innerRadius": 14, "radius": 36 }'>2/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#f7be2d", "#1d2846"], "innerRadius": 16, "radius": 32 }'>3/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#2dcbf7", "#1d2846"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#f7592d", "#1d2846"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["indigo", "#1d2846"], "innerRadius": 18, "radius": 20 }'>6/7</span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Setting Colours Dynamically</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="pie-colours-2">5,3,9,6,5</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Updating Charts</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<span class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!-- Peitychart js-->
<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>
@endsection