@extends('layouts.master')
@section('css')
<!-- Jvectormap css -->
<link href="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Vector Maps</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Vector Maps</li>
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
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">World Map</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="world-map-markers" class="worldh" style="height:400px;"></div>
									</div>
								</div>
							</div><!-- end col -->
						</div>
						<!-- End row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">USA Map</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="usa" class="stateh" style="height:400px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Canada Map</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="canada" class="stateh" style="height:400px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">UK Map</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="uk" class="stateh" style="height:400px;"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Australia Map</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="australia" class="stateh" style="height:400px;"></div>
									</div>
								</div>
							</div><!-- end col -->
						</div>
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!-- Vector js -->
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jvectormap/gdp-data.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-au-mill.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js')}}"></script>
<script src="{{URL::asset('assets/pages/jvectormap.init.js')}}"></script>
<script src="{{URL::asset('assets/js/jvectormap.js')}}"></script>
@endsection