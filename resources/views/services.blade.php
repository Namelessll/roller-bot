@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Services</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Services</li>
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
							<div class="col-md-6 col-lg-4 features">
								<div class="card">
									<div class="card-body text-center">
										<div class="feature">
											<div class="fa-stack fa-lg fa-1x border bg-primary mb-3">
												<i class="fa fa-code fs-15 text-white"></i>
											</div>
											<h3>Web design</h3>
											<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 features">
								<div class="card">
									<div class="card-body text-center">
										<div class="feature">
											<div class="fa-stack fa-lg fa-1x border bg-secondary mb-3">
												<i class="fa fa-codepen fs-15 text-white"></i>
											</div>
											<h3> Web Development</h3>
											<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 features">
								<div class="card">
									<div class="card-body text-center">
										<div class="feature">
											<div class="fa-stack fa-lg fa-1x border bg-cyan mb-3">
												<i class="fa fa-wordpress fs-15 text-white"></i>
											</div>
											<h3>Wordpress</h3>
											<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 features">
								<div class="card">
									<div class="card-body text-center">
										<div class="feature">
											<div class="fa-stack fa-lg fa-1x border bg-blue mb-3">
												<i class="fa fa-camera fs-15 text-white"></i>
											</div>
											<h3>photography</h3>
											<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 features">
								<div class="card">
									<div class="card-body text-center">
										<div class="feature">
											<div class="fa-stack fa-lg fa-1x border bg-teal mb-3">
												<i class="fa fa-pencil-square-o fs-15 text-white"></i>
											</div>
											<h3>Development</h3>
											<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 features">
								<div class="card">
									<div class="card-body text-center">
										<div class="feature">
											<div class="fa-stack fa-lg fa-1x border bg-warning mb-3">
												<i class="fa fa-globe fs-15 text-white"></i>
											</div>
											<h3>Android</h3>
											<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Our services</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
											<div class="row mt-3">
												<div class="col-md-6">
													<label>Web Design</label>
													<div class="progress progress-md mb-3">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-teal" style="width: 55%">55%</div>
													</div>
												</div>
												<div class="col-md-6">
													<label>Web Development</label>
													<div class="progress progress-md mb-3">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 70%">70%</div>
													</div>
												</div>
												<div class="col-md-6">
													<label>Wordpress</label>
													<div class="progress progress-md mb-3">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-cyan" style="width: 80%">80%</div>
													</div>
												</div>
												<div class="col-md-6">
													<label>Photography</label>
													<div class="progress progress-md mb-3">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-orange" style="width: 75%">75%</div>
													</div>
												</div>
												<div class="col-md-6">
													<label>Development</label>
													<div class="progress progress-md mb-3">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 65%">65%</div>
													</div>
												</div>
												<div class="col-md-6">
													<label>Android</label>
													<div class="progress progress-md mb-3">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 69%">69%</div>
													</div>
												</div>
											</div>
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