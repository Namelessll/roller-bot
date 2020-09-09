@extends('layouts.master')
@section('css')
<!-- nvd3  Charts css-->
<link href="{{URL::asset('assets/plugins/charts-nvd3/nv.d3.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Nvd3 Charts</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">Nvd3 Charts</li>
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
										<h3 class="card-title">Bar Chart With Multiple colors</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="nvd3-chart1" class="" style="width: 100%; height: 400px;"> <svg></svg></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar Chart</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<svg id="nvd3-chart2" class="" style="width: 100%; height: 400px;"></svg>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart With Zooming Options</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="chartZoom">
											<a class="btn btn-outline-secondary btn-sm" id="zoomIn">+</a> <a  class="btn btn-outline-secondary btn-sm" id="zoomOut">-</a>
										</div>
										<div id="nvd3-chart3" class="with-transitions" style="width: 100%; height: 400px;" >
											<svg></svg>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!--Nvd3 Charts js -->
<script src="{{URL::asset('assets/plugins/charts-nvd3/d3.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/charts-nvd3/nv.d3.js')}}"></script>
<script src="{{URL::asset('assets/plugins/charts-nvd3/stream_layers.js')}}"></script>
<script src="{{URL::asset('assets/js/nvd3.js')}}"></script>
@endsection