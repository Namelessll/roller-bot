@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Profile</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
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
							<div class="col-xl-3 col-lg-5 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div class="inner-all">
											<ul class="list-unstyled">
												<li class="text-center border-bottom-0">
													<img data-no-retina="" class="img-circle img-responsive img-bordered-primary" src="{{URL::asset('assets/images/users/16.jpg')}}" alt="John Doe">
												</li>
												<li class="text-center">
													<h4 class="text-capitalize mt-3 mb-0">John Thomson</h4>
													<p class="text-muted text-capitalize">App Developer</p>
												</li>
												<li>
													<a href="" class="btn btn-primary text-center btn-block">UserAccount</a>
												</li>
												<li><br></li>
												<li>
													<div class="btn-group-vertical btn-block border-top-0">
														<a href=""  class="btn btn-outline-primary"><i class="fe fe-upload mr-2"></i>Upload</a>
														<a href="" class="btn btn-primary"><i class="fe fe-settings mr-2"></i>Edit Account</a>
														<a href=""  class="btn btn-outline-primary"><i class="fe fe-alert-circle mr-2"></i>Logout</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card panel-theme rounded shadow">
									<div class="card-header">
										<div class="float-left">
											<h3 class="card-title">Contact</h3>
										</div>
										<div class="card-options text-right">
											<a href="#" class="btn btn-sm btn-primary mr-2"><i class="fa fa-facebook"></i></a>
											<a href="#" class="btn btn-sm btn-primary mr-2"><i class="fa fa-twitter"></i></a>
											<a href="#" class="btn btn-sm btn-primary"><i class="fa fa-google-plus"></i></a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="card-body no-padding rounded">
										<ul class="list-group no-margin">
											<li class="list-group-item"><i class="fa fa-envelope mr-4"></i> support@demo.com</li>
											<li class="list-group-item"><i class="fa fa-globe mr-4"></i> www.support.com</li>
											<li class="list-group-item"><i class="fa fa-phone mr-4"></i> +125 5826 3658 </li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-7 col-md-12">
								<div class="profile-cover card">
									<div class="cover shadow no-overflow">
										<div class="inner-cover">
											<!-- Start offcanvas btn group menu: This menu will take position at the top of profile cover (mobile only). -->
											<div class="btn-group cover-menu-mobile hidden-lg hidden-md">
												<button type="button" class="btn btn-theme btn-sm dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-bars"></i>
												</button>
												<ul class="dropdown-menu  dropdown-menu-right no-border" role="menu">
													<li class="active"><a href="#" class="pt-2 pb-2"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
													<li><a href="#" class="pt-2 pb-2"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
													<li><a href="#" class="pt-2 pb-2"><i class="fa fa-fw fa-photo"></i> <span>Photos</span> <small>(98)</small></a></li>
													<li><a href="#" class="pt-2 pb-2"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(23)</small></a></li>
													<li><a href="#" class="pt-2 pb-2"><i class="fa fa-fw fa-envelope"></i> <span>Messages</span> <small>(7 new)</small></a></li>
												</ul>
											</div>
											<img  src="{{URL::asset('assets/images/photos/about.jpg')}}" class="img-responsive full-width" alt="cover" style="max-height:300px;">
										</div>
										<ul class="list-unstyled no-padding hidden-sm hidden-xs cover-menu">
											<li class="active"><a href="#"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
											<li><a href="#"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
											<li><a href="#"><i class="fa fa-fw fa-photo"></i> <span>Photos</span> <small>(98)</small></a></li>
											<li><a href="#"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(23)</small></a></li>
										</ul>
									</div><!-- /.cover -->
								</div><!-- /.profile-cover -->
								<div class="card">
									<form class="card-body">
										<textarea class="form-control input-lg no-border" rows="2" placeholder="What are you doing?..."></textarea>
									</form>
									<div class="card-footer">
										<button class="btn btn-success pull-right">POST</button>
										<ul class="nav nav-pills">
											<li><a href="#"><i class="fa fa-user m-2"></i></a></li>
											<li><a href="#"><i class="fa fa-map-marker m-2"></i></a></li>
											<li><a href="#"><i class="fa fa-camera m-2"></i></a></li>
											<li><a href="#"><i class="fa fa-smile-o m-2"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="card">
											<div class="card-header pt-5 pb-5">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Message">
													<div class="input-group-append">
														<button type="button" class="btn btn-primary">
															<i class="fa fa-search" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
											<ul class="list-group card-list-group">
												<li class="list-group-item py-5">
													<div class="media m-0">
														<div class="media-object avatar brround avatar-md mr-4" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></div>
														<div class="media-body d-block">
															<div class="media-heading">
																<small class="float-right text-muted">4 min</small>
																<h5>George Mestayer</h5>
															</div>
															<div>
																Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
															</div>
															<ul class="media-list">
																<li class="media mt-4">
																	<div class="media-object brround avatar mr-4" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></div>
																	<div class="media-body">
																		Holley Corby:
																		I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you
																	</div>
																</li>

															</ul>
														</div>
													</div>
												</li>
												<li class="list-group-item py-5">
													<div class="media m-0">
														<div class="media-object avatar brround avatar-md mr-4" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></div>
														<div class="media-body">
															<div class="media-heading">
																<small class="float-right text-muted">34 min</small>
																<h5>George Mestayer</h5>
															</div>
															<div>
																 Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</div>
															<ul class="media-list">
																<li class="media mt-4">
																	<div class="media-object brround avatar mr-4" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></div>
																	<div class="media-body">
																		Art Langner:
																		master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<div class="card">
											<div class="card-body">
												<div class=" " id="profile-log-switch">
													<div class="fade show active " >
														<div class="table-responsive border ">
															<table class="table row table-borderless w-100 m-0 ">
																<tbody class="col-lg-6 p-0">
																	<tr>
																		<td><strong>Full Name :</strong> John Thomson </td>
																	</tr>
																	<tr>
																		<td><strong>Location :</strong> USA</td>
																	</tr>
																	<tr>
																		<td><strong>Languages :</strong> English, German, Spanish.</td>
																	</tr>
																</tbody>
																<tbody class="col-lg-6 p-0">
																	<tr>
																		<td><strong>Website :</strong> Clont.com</td>
																	</tr>
																	<tr>
																		<td><strong>Email :</strong> georgemestayer@Clont.com</td>
																	</tr>
																	<tr>
																		<td><strong>Phone :</strong> +125 254 3562 </td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="row mt-5 profie-img">
															<div class="col-md-12">
																<div class="media-heading">
																<h5><strong>Biography</strong></h5>
															</div>
															<p>
																 Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</p>
															<p >because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
															</div>
															<img class="img-fluid rounded w-25 h-25 m-2" src="{{URL::asset('assets/images/photos/8.jpg')}} " alt="banner image">
															<img class="img-fluid rounded w-25 h-25 m-2" src="{{URL::asset('assets/images/photos/10.jpg')}}" alt="banner image ">
															<img class="img-fluid rounded w-25 h-25 m-2" src="{{URL::asset('assets/images/photos/11.jpg')}}" alt="banner image ">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header">
												<h3 class="card-title">Recent Projects</h3>
												<div class="card-options ">
													<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
													<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
												</div>
											</div>
											<div class="card-body">
												<div class="table-responsive">
													<table class="table card-table table-vcenter border text-nowrap">
														<thead>
															<tr>
																<th>Project Name</th>
																<th>Date</th>
																<th>Status</th>
																<th>Price</th>
															</tr>
														</thead>
														<tbody>

															<tr>
																<td><a href="store.html" class="text-inherit">Untrammelled prevents </a></td>
																<td>28 May 2018</td>
																<td><span class="status-icon bg-success"></span> Completed</td>
																<td>$56,908</td>
															</tr>
															<tr>
																<td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
																<td>12 June 2018</td>
																<td><span class="status-icon bg-danger"></span> On going</td>
																<td>$45,087</td>
															</tr>
															<tr>
																<td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
																<td>12 July 2018</td>
																<td><span class="status-icon bg-warning"></span> Pending</td>
																<td>$60,123</td>
															</tr>
															<tr>
																<td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
																<td>14 June 2018</td>
																<td><span class="status-icon bg-warning"></span> Pending</td>
																<td>$70,435</td>
															</tr>
															<tr>
																<td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
																<td>25 June 2018</td>
																<td><span class="status-icon bg-success"></span> Completed</td>
																<td>$15,987</td>
															</tr>
														</tbody>
													</table>
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