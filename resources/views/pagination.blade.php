@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Pagination</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Pagination</li>
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
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic pagination</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="pagination-wrapper">
											<nav aria-label="Page navigation">
												<ul class="pagination mb-0">
													<li class="page-item active">
														<a class="page-link" href="#">1</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">2</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">3</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">4</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">5</a>
													</li>
													<li class="page-item">
														<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
													</li>
												</ul>
											</nav>
										</div>
										<!-- pagination-wrapper -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic pagination</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<ul class="pagination ">
											<li class="page-item page-prev disabled">
												<a class="page-link" href="#" tabindex="-1">Prev</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item page-next">
												<a class="page-link" href="#">Next</a>
											</li>
										</ul>
										<!-- pagination-wrapper -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Model Pagination</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body ">
										<ul class="pagination mg-b-0 page-0 ">
											<li class="page-item">
												<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
											</li>
											<li class="page-item">
												<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
											</li>

											<li class="page-item">
												<a class="page-link" href="#">2</a>
											</li>
											<li class="page-item active">
												<a class="page-link" href="#">3</a>
											</li>
											<li class="page-item">
												<a class="page-link hidden-xs-down" href="#">4</a>
											</li>

											<li class="page-item">
												<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
											</li>
											<li class="page-item">
												<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
											</li>
										</ul>
									</div>
									<!-- pagination-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Model Pagination2</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<nav aria-label="Page navigation">
											<ul class="pagination pagination-success mb-0">
												<li class="page-item page-0">
													<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
												</li>
												<li class="page-item active">
													<a class="page-link" href="#">4</a>
												</li>
												<li class="page-item disabled"><span class="page-link">...</span></li>
												<li class="page-item">
													<a class="page-link" href="#">10</a>
												</li>
												<li class="page-item page-0">
													<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
												</li>
											</ul>
										</nav>
										<!-- pagination-wrapper -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Model Pagination2</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<nav aria-label="Page navigation example">
											<ul class="pagination">
												<li class="page-item">
													<a class="page-link" href="#" aria-label="Previous">
														<i class="fa fa-angle-left"></i>
														<span class="sr-only">Previous</span>
													</a>
												</li>
												<li class="page-item"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item">
													<a class="page-link" href="#" aria-label="Next">
														<i class="fa fa-angle-right"></i>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pagination left alignment</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<nav aria-label="Page navigation example">
											<ul class="pagination ">
												<li class="page-item disabled">
													<a class="page-link" href="#" tabindex="-1">
														<i class="fa fa-angle-left"></i>
														<span class="sr-only">Previous</span>
													</a>
												</li>
												<li class="page-item"><a class="page-link" href="#">1</a></li>
												<li class="page-item active"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item">
													<a class="page-link" href="#">
														<i class="fa fa-angle-right"></i>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pagination center alignment</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<nav aria-label="Page navigation example">
											<ul class="pagination justify-content-center">
												<li class="page-item disabled">
													<a class="page-link" href="#" tabindex="-1">
														<i class="fa fa-angle-left"></i>
														<span class="sr-only">Previous</span>
													</a>
												</li>
												<li class="page-item"><a class="page-link" href="#">1</a></li>
												<li class="page-item active"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item">
													<a class="page-link" href="#">
														<i class="fa fa-angle-right"></i>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pagination Right Alignment</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body ">
										<nav aria-label="Page navigation example">
											<ul class="pagination justify-content-end">
												<li class="page-item disabled">
													<a class="page-link" href="#" tabindex="-1">
														<i class="fa fa-angle-left"></i>
														<span class="sr-only">Previous</span>
													</a>
												</li>
												<li class="page-item"><a class="page-link" href="#">1</a></li>
												<li class="page-item active"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item">
													<a class="page-link" href="#">
														<i class="fa fa-angle-right"></i>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
						<!-- End  Row -->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
@endsection