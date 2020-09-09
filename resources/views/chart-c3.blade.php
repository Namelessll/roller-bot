@extends('layouts.master')
@section('css')
<!-- C3 Charts css-->
<link href="{{URL::asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">C3 Charts</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">C3 Charts</li>
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
						<div class="row">
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar Chart</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-bar-stacked" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Multiple Bar chart</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-bar" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Horizontal Bar chart</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-bar-rotated" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Sales Growth in every Month</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-employment" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 1</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-sracked" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line chart 2</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-spline-rotated" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 3</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-temperature" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 4</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-area-spline-sracked" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 5 </h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-spline" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 6</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-area" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 7</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-area-spline" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart with step</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-area-step" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 8</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-step" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pie Chart</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-pie" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pie Chart with Multiple colors</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-pie2" class="chartsh "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Donut Chart</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-donut" class="chartsh donutShadow"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Donut Chart2</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chart-donut2" class="chartsh donutShadow"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!-- c3.js Charts js-->
<script src="{{URL::asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>
<script src="{{URL::asset('assets/js/charts.js')}}"></script>
@endsection