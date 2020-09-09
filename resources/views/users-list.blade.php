@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">User List</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">User List</li>
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
						<div class="row flex-lg-nowrap">
							<div class="col">
								<div class="row flex-lg-nowrap">
									<div class="col mb-3">
										<div class="e-panel card">
											<div class="card-header">
												<h3 class="card-title">Users</h3>
												<div class="card-options ">
													<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
													<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
												</div>
											</div>
											<div class="card-body">
												<div class="e-table">
													<div class="table-responsive table-lg mt-3">
														<table class="table table-bordered border-top">
															<thead>
																<tr>
																	<th class="align-top">
																	</th>
																	<th>Photo</th>
																	<th class="max-width">Name</th>
																	<th class="sortable">Date</th>
																	<th> </th>
																	<th>Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-1">
																			<label class="custom-control-label" for="item-1"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																	</td>
																	<td class="text-nowrap align-middle">Nam Guy</td>
																	<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-2">
																			<label class="custom-control-label" for="item-2"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
																	</td>
																	<td class="text-nowrap align-middle">Tracy Lindahl</td>
																	<td class="text-nowrap align-middle"><span>26 Jan 2018</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-3">
																			<label class="custom-control-label" for="item-3"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
																	</td>
																	<td class="text-nowrap align-middle">Breana Millis</td>
																	<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-4">
																			<label class="custom-control-label" for="item-4"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
																	</td>
																	<td class="text-nowrap align-middle">Antwan Tramel</td>
																	<td class="text-nowrap align-middle"><span>20 Jan 2018</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-5">
																			<label class="custom-control-label" for="item-5"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																	</td>
																	<td class="text-nowrap align-middle">Geraldine Arpin</td>
																	<td class="text-nowrap align-middle"><span>13 Jan 2018</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-6">
																			<label class="custom-control-label" for="item-6"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></span>
																	</td>
																	<td class="text-nowrap align-middle">Clement Niehaus</td>
																	<td class="text-nowrap align-middle"><span>25 Jan 2018</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-7">
																			<label class="custom-control-label" for="item-7"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
																	</td>
																	<td class="text-nowrap align-middle">Melinda Mayers</td>
																	<td class="text-nowrap align-middle"><span>12 Jan 2018</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-8">
																			<label class="custom-control-label" for="item-8"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
																		</td>
																	<td class="text-nowrap align-middle">Willodean Monson</td>
																	<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-9">
																			<label class="custom-control-label" for="item-9"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
																	</td>
																	<td class="text-nowrap align-middle">Brenton Moncada</td>
																	<td class="text-nowrap align-middle"><span>12 Dec 2017</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-10">
																			<label class="custom-control-label" for="item-10"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
																	</td>
																	<td class="text-nowrap align-middle">Cyndy Kirschbaum</td>
																	<td class="text-nowrap align-middle"><span>10 Dec 2017</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-11">
																			<label class="custom-control-label" for="item-11"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
																	</td>
																	<td class="text-nowrap align-middle">Renna Spino</td>
																	<td class="text-nowrap align-middle"><span>03 Dec 2017</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="align-middle">
																		<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																			<input type="checkbox" class="custom-control-input" id="item-12">
																			<label class="custom-control-label" for="item-12"></label>
																		</div>
																	</td>
																	<td class="align-middle text-center">
																		<span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
																	</td>
																	<td class="text-nowrap align-middle">Freeman Kozlowski</td>
																	<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
																	<td class="text-center align-middle">
																		<label class="custom-switch">
																			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</td>
																	<td class="text-center align-middle">
																		<div class="btn-group align-top">
																			<button class="btn btn-sm btn-outline-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
																			<button class="btn btn-sm btn-outline-primary badge" type="button"><i class="fa fa-trash"></i></button>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="d-flex justify-content-center">
														<ul class="pagination mt-3 mb-0">
															<li class="disabled page-item"><a href="#" class="page-link">‹</a></li>
															<li class="active page-item"><a href="#" class="page-link">1</a></li>
															<li class="page-item"><a href="#" class="page-link">2</a></li>
															<li class="page-item"><a href="#" class="page-link">3</a></li>
															<li class="page-item"><a href="#" class="page-link">4</a></li>
															<li class="page-item"><a href="#" class="page-link">5</a></li>
															<li class="page-item"><a href="#" class="page-link">›</a></li>
															<li class="page-item"><a href="#" class="page-link">»</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-3 mb-3">
										<div class="card">
											<div class="card-body">
												<div class="text-center">
													<button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#user-form-modal">New User</button>
												</div>
												<div class="mt-4">
													<div class="form-group">
														<label>Date from - to:</label>
														<div>
															<input id="dates-range" class="form-control flatpickr-input" placeholder="01 Dec 17 - 27 Jan 18" type="text" readonly="readonly">
														</div>
													</div>
													<div class="form-group">
														<label>Search by Name:</label>
														<div><input class="form-control w-100" type="text" placeholder="Name" value=""></div>
													</div>
												</div>
												<div class="">
													<label>Status:</label>
													<div class="px-2">
														<div class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="user-status" id="users-status-disabled">
															<label class="custom-control-label" for="users-status-disabled">Disabled</label>
														</div>
													</div>
													<div class="px-2">
														<div class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="user-status" id="users-status-active">
															<label class="custom-control-label" for="users-status-active">Active</label>
														</div>
													</div>
													<div class="px-2">
														<div class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="user-status" id="users-status-any" checked="">
															<label class="custom-control-label" for="users-status-any">Any</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- User Form Modal -->
								<div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Create User</h5>
												<button type="button" class="close" data-dismiss="modal">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="py-1">
													<form class="form" novalidate="">
														<div class="row">
															<div class="col">
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>Full Name</label>
																			<input class="form-control" type="text" name="name" placeholder="John Smith" value="John Smith">
																		</div>
																	</div>
																	<div class="col">
																		<div class="form-group">
																			<label>Username</label>
																			<input class="form-control" type="text" name="username" placeholder="johnny.s" value="johnny.s">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>Email</label>
																			<input class="form-control" type="text" placeholder="user@example.com">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col mb-3">
																		<div class="form-group">
																			<label>About</label>
																			<textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12 col-sm-6 mb-3">
																<div class="mb-2"><b>Change Password</b></div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>Current Password</label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col">
																		<div class="form-group">
																			<label>New Password</label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																	<div class="col">
																		<div class="form-group">
																			<label>Confirm <span class="d-none d-xl-inline">Password</span></label>
																			<input class="form-control" type="password" placeholder="••••••">
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-12 col-sm-5 offset-sm-1 mb-3">
																<div class="mb-2"><b>Keeping in Touch</b></div>
																<div class="row">
																	<div class="col">
																	<label>Email Notifications</label>
																		<div class="custom-controls-stacked px-2">
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
																				<label class="custom-control-label" for="notifications-blog">Blog posts</label>
																			</div>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
																				<label class="custom-control-label" for="notifications-news">Newsletter</label>
																			</div>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
																				<label class="custom-control-label" for="notifications-offers">Personal Offers</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col d-flex justify-content-end">
															<button class="btn btn-primary" type="submit">Save Changes</button>
															</div>
														</div>
													</form>
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