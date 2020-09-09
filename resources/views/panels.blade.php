@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Panels</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Panels</li>
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
										<h3 class="card-title">Simple Panels</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="expanel expanel-default mt-4">
											<div class="expanel-body">
												Basic panel example
											</div>
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
										<h3 class="card-title">Panel with heading</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-md-6">
												<div class="expanel expanel-default">
													<div class="expanel-heading">Panel heading without title</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="expanel expanel-default">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
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
										<h3 class="card-title">Panel with footer</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="expanel expanel-default mt-4">
											<div class="expanel-body">
												Panel content
											</div>
											<div class="expanel-footer">Panel footer</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End  Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with color header</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-md-6">
												<div class="expanel expanel-primary">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="expanel expanel-secondary">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="expanel expanel-success">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="expanel expanel-danger">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel tabs</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="expanel expanel-primary">
													<div class="expanel-heading clearfix align-items-center">Panel title (with paragraphs inside)
														<div class="float-right">
															<button class="btn btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#collapse01"
																aria-expanded="false" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse01">
														<p>Paragraphs</p>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
															Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
															Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
															Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
													</div>
												</div>
												<div class="expanel expanel-info">
													<div class="expanel-heading clearfix">Panel title (with list-group inside)
														<div class="float-right">
															<button class="btn btn-sm btn-light" type="button" data-toggle="collapse" data-target="#collapse02"
																aria-expanded="false" aria-controls="collapse02"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse02">
														<p>Notice the padding inside.</p>
														<ul class="list-group">
															<li class="list-group-item"><a href="#" role="button" class="btn btn-default btn-block">Some action</a></li>
															<li class="list-group-item"><a href="#" role="button" class="btn btn-default btn-block">Another action</a></li>
														</ul>
													</div>
												</div>
												<div class="expanel expanel-default">
													<div class="expanel-heading clearfix">Panel title (with paragraphs)
														<div class="float-right">
															<button class="btn btn-sm btn-info" type="button" data-toggle="collapse" data-target="#collapse06"
																aria-expanded="false" aria-controls="collapse06"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse06">
														<p>Paragraphs</p>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
															Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
															Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
															Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="expanel expanel-success">
													<div class="expanel-heading clearfix">Panel title (with table inside)
														<div class="float-right">
															<button class="btn btn-sm btn-success" type="button" data-toggle="collapse" data-target="#collapse03"
																aria-expanded="false" aria-controls="collapse03"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse03">
														<table class="table">
															<thead>
															  <tr>
																<th>#</th>
																<th>First Name</th>
																<th>Last Name</th>
																<th>Username</th>
															  </tr>
															</thead>
															<tbody>
															  <tr>
																<th scope="row">1</th>
																<td>Mark</td>
																<td>Otto</td>
																<td>@mdo</td>
															  </tr>
															  <tr>
																<th scope="row">2</th>
																<td>Jacob</td>
																<td>Thornton</td>
																<td>@fat</td>
															  </tr>
															  <tr>
																<th scope="row">3</th>
																<td>Larry</td>
																<td>the Bird</td>
																<td>@twitter</td>
															  </tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="expanel expanel-warning">
													<div class="expanel-heading clearfix">Panel title (with paragraphs)
														<div class="float-right">
															<button class="btn btn-sm btn-warning" type="button" data-toggle="collapse" data-target="#collapse04"
																aria-expanded="false" aria-controls="collapse04"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse04">
														<p>Paragraphs</p>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
															Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
															Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
															Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
													</div>
												</div>
												<div class="expanel expanel-danger">
													<div class="expanel-heading clearfix">Panel title (with paragraphs)
														<div class="float-right">
															<button class="btn btn-sm btn-danger" type="button" data-toggle="collapse" data-target="#collapse05"
																aria-expanded="false" aria-controls="collapse05"><i class="fa fa-bars"></i></button>
														</div>
													</div>
													<div class="expanel-body collapse" id="collapse05">
														<p>Paragraphs</p>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
															Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
															Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
															Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
@endsection