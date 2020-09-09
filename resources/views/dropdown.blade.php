@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Dropdowns</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dropdowns</li>
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
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single button dropdowns</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded button dropdowns</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-default btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Split button dropdowns</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-default">Action</button>
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary">Action</button>
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success">Action</button>
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info">Action</button>
													<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning">Action</button>
													<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger">Action</button>
													<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded Split button dropdowns</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-default">Action</button>
													<button type="button" class="btn btn-pill btn-default dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-primary">Action</button>
													<button type="button" class="btn btn-pill btn-primary dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-success">Action</button>
													<button type="button" class="btn btn-pill btn-success dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-info">Action</button>
													<button type="button" class="btn btn-pill btn-info dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-warning">Action</button>
													<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-danger">Action</button>
													<button type="button" class="btn btn-pill btn-danger dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single Square outline button dropdowns</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded button dropdowns</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Split button dropdowns</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-primary">Action</button>
													<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-success">Action</button>
													<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-info">Action</button>
													<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-warning">Action</button>
													<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-outline-danger">Action</button>
													<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Rounded Split button dropdowns</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-primary">Action</button>
													<button type="button" class="btn btn-pill btn-outline-primary dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-success">Action</button>
													<button type="button" class="btn btn-pill btn-outline-success dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-info">Action</button>
													<button type="button" class="btn btn-pill btn-outline-info dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-warning">Action</button>
													<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-pill btn-outline-danger">Action</button>
													<button type="button" class="btn btn-pill btn-outline-danger dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Dropup variation</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dropup btn-group mt-2 mb-2">
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropup1
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">HTML</a></li>
												<li><a href="#">CSS</a></li>
												<li><a href="#">JavaScript</a></li>
												<li class="divider"></li>
												<li><a href="#">About Us</a></li>
											</ul>
										</div>

										<!-- Split dropup button -->
										<div class="dropup btn-group mt-2 mb-2">
											<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropup2
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">HTML</a></li>
												<li><a href="#">CSS</a></li>
												<li><a href="#">JavaScript</a></li>
												<li class="divider"></li>
												<li><a href="#">About Us</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon Drop Downs dropdowns</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-facebook btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-facebook"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-twitter btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-twitter"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-google btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-google"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-youtube btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-youtube "></i><span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-vimeo btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-vimeo"></i><span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-github btn-pill dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-github"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
@endsection