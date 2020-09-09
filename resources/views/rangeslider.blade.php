@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Range Slider</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Range Slider</li>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Ranges</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<input id="range-1-1" type="range" min="0" max="100" value="30">
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Ranges slider2</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<input id="range-2-1" type="range" min="0" max="100" value="30">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Range Slider Models</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<input id="range-1-2" type="range" min="0" max="100" value="30">
										<input id="range-1-3" type="range" min="0" max="100" value="30">
										<input id="range-2-2" type="range" min="0" max="100" value="30">
										<label class="h4">Particular Value Range slider</label>
										<input id="range-3" type="range" min="0" max="100" value="30">
										<label class="h4">Fixed Range Slider</label>
										<input id="range-4-1" type="range" min="0" max="100" value="30">
										<input id="range-4-2" type="range" min="0" max="100" value="30">
										<label class="h4">2 values of Range Slider</label>
										<input id="range-5-1" type="range" min="0" max="100" value="30">
										<label class="h4">Value Not Visible Range Slider</label>
										<input id="range-6-1" type="range" min="0" max="100" value="30">
										<label class="h4">Date Range Slider</label>
										<input id="range-7-1" type="range" min="0" max="100" value="30">
										<label class="h4">0 to 100 Rage slider</label>
										<input id="range-8-1" type="range" min="0" max="100" value="30">
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
<!--Rang slider -->
<script src="{{URL::asset('assets/plugins/range/main.js')}}"></script>
<script src="{{URL::asset('assets/js/rangeslider.js')}}"></script>
@endsection