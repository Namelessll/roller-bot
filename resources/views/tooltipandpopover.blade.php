@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Tooltip and Popover</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tooltip and Popover</li>
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
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Static Tooltip</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="bd-example bd-example-tooltip-static">
											<div class="tooltip tooltip-top" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the top
												</div>
											</div>
											<div class="tooltip tooltip-right" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the right
												</div>
											</div>
											<div class="tooltip tooltip-bottom" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the bottom
												</div>
											</div>
											<div class="tooltip tooltip-left" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the left
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<h3 class="card-title">Interactive Demo Tooltip</h3>
										<div class="bd-example tooltip-demo">
											<div class="bd-example-tooltips">
												<div class="row text-center">
													<div class="col-md-3 mt-2 mb-2">
														<button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
													</div>
													<div class="col-md-3 mt-2 mb-2">
														<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
													</div>
													<div class="col-md-3 mt-2 mb-2">
														<button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
													</div>
													<div class="col-md-3 mt-2 mb-2">
														<button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Popover</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row text-center">
											<div class="col-sm-6 col-lg-3 mt-2 mb-2">
												<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="Popover top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
													Popover top
												</button>
											</div><!-- col-3 -->
											<div class="col-sm-6 col-lg-3 mt-2 mb-2 ">
												<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="Popover bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
													Popover bottom
												</button>
											</div><!-- col-3 -->
											<div class="col-sm-6 col-lg-3 mt-2 mb-2">
												<button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="Popover left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
													Popover left
												</button>
											</div><!-- col-3 -->
											<div class="col-sm-6 col-lg-3 mt-2 mb-2">
												<button type="button" class="btn btn-warning" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="Popover right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
													Popover right
												</button>
											</div><!-- col-3 -->
										</div>
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
<!-- popover js -->
<script src="{{URL::asset('assets/js/popover.js')}}"></script>
@endsection