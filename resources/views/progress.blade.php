@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Progress</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Progress</li>
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
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Progress</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-default" style="width: 7%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 20%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 40%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 60%"></div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar bg-primary" style="width: 80%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual Progress</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 7%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-green" style="width: 20%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-yellow" style="width: 40%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 60%"></div>
										</div>
										<div class="progress progress-md ">
											<div class="progress-bar bg-orange" style="width: 80%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Progress with label</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 7%">7%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 20%"> 20%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 40%"> 40%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 60%"> 60%</div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar bg-primary" style="width: 80%"> 80%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual Progress with label</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 7%"> 7%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-green" style="width: 20%">20%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-yellow" style="width: 40%">40%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 60%">60%</div>
										</div>
										<div class="progress progress-md ">
											<div class="progress-bar bg-orange" style="width: 80%"> 80%</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Progress Sizes</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="progress progress-xs mb-3">
											<div class="progress-bar bg-blue" style="width: 30%"></div>
										</div>
										<div class="progress progress-sm mb-3">
											<div class="progress-bar bg-blue" style="width: 60%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 70%">70%</div>
										</div>
										<div class="progress progress-lg">
											<div class="progress-bar bg-blue" style="width: 80%">80%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Mixed color Progress with Sizes</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="progress progress-xs mb-3">
											<div class="progress-bar bg-orange" style="width: 5%"></div>
											<div class="progress-bar bg-warning" style="width: 5%"></div>
											<div class="progress-bar bg-info" style="width: 5%"></div>
										</div>
										<div class="progress progress-sm mb-3">
											<div class="progress-bar bg-pink" style="width: 10%"></div>
											<div class="progress-bar bg-yellow" style="width: 15%"></div>
											<div class="progress-bar bg-teal" style="width: 15%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 18%"></div>
											<div class="progress-bar bg-blue" style="width: 20%"></div>
											<div class="progress-bar bg-cyan" style="width: 30%"></div>
										</div>

										<div class="progress progress-lg">
											<div class="progress-bar bg-green" style="width: 30%"></div>
											<div class="progress-bar bg-pink" style="width: 20%"></div>
											<div class="progress-bar bg-orange" style="width: 40%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Striped Progress</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-teal" style="width: 15%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 25%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow" style="width: 50%">50%</div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-green" style="width: 70%">40%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Animated Progress</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-pink" ></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-cyan"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-teal"></div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar progress-bar-indeterminate bg-purple"></div>
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
@endsection