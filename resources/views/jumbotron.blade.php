@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Jumbotron</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Jumbotron</li>
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
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Jumbotron</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="jumbotron">
											<h1 class="display-3">Hello, world!</h1>
											<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
											<hr class="my-4">
											<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
											<p class="lead m-0">
												<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
											</p>
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
										<h3 class="card-title">Jumbotron</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="jumbotron ">
											<div class="container">
												<h1 class="display-3">jumbotron</h1>
												<p class="lead m-0">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
											</div>
										</div>
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