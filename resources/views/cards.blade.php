@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Cards</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cards</li>
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
							<div class="col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header bg-primary ">
										<h3 class="card-title text-white">Basic color card-header</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic color card-footer</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer bg-info ">
										<div class="text-white">Basic card footer</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12 col-xl-4">
								<div class="card text-white bg-primary">
									<div class="card-header ">
										<h3 class="card-title ">primary card title</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
										</div>
									</div>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card text-white bg-secondary">
									<div class="card-header ">
										<h3 class="card-title ">Secondary card title</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
										</div>
									</div>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card text-white bg-success">
									<div class="card-header ">
										<h3 class="card-title ">Success card title</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
										</div>
									</div>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with custom buttons</h3>
										<div class="card-options">
											<a href="#" class="btn btn-primary btn-sm">Action 1</a>
											<a href="#" class="btn btn-secondary btn-sm ml-2">Action 2</a>
										</div>
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with search form</h3>
										<div class="card-options">
											<form >
												<div class="input-group">
													<input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
													<span class="input-group-btn ml-2">
														<button class="btn btn-sm btn-primary" type="submit">
															<span class="fe fe-search"></span>
														</button>
													</span>
												</div>
											</form>
										</div>
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with alert</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-alert alert alert-success mb-0">
										Adding action was successful
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with alert</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-alert alert alert-danger mb-0">
										Adding action failed
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with loader</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with loader</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner1">
											  <div class="double-bounce1"></div>
											  <div class="double-bounce2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with loader</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner2">
											  <div class="cube1"></div>
											  <div class="cube2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12  col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">fullscreen button</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with switch</h3>
										<div class="card-options">
											<label class="custom-switch m-0">
												<input type="checkbox" value="1" class="custom-switch-input" checked>
												<span class="custom-switch-indicator"></span>
											</label>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card card-collapsed">
									<div class="card-header">
										<h3 class="card-title">Initial collapsed card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Built card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-4">
								<div class="card">
									<div class="card-status bg-blue "></div>
									<div class="card-header">
										<h3 class="card-title">Card blue</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card">
									<div class="card-status card-status-left bg-red br-bl-7 br-tl-7"></div>
									<div class="card-header">
										<h3 class="card-title">Card status on left side</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
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
@endsection