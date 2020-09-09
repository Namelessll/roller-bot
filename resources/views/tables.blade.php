@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Default Tables</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page">Default Tables</li>
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
										<h3 class="card-title">Basic Table</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap">
											<thead >
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Full color variations</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-primary" >
											<thead  class="bg-primary text-white">
												<tr >
													<th class="text-white">ID</th>
													<th class="text-white">Name</th>
													<th class="text-white">Position</th>
													<th class="text-white">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Full color variations2</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-warning" >
											<thead  class="bg-warning text-white">
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
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