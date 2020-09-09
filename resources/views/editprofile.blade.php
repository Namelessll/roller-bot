@extends('layouts.master')
@section('css')
<!-- Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">EditProfile</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">EditProfile</li>
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
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">My Profile</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<form>
											<div class="row mb-2">
												<div class="col-auto">
													<span class="avatar brround avatar-xl" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
												</div>
												<div class="col">
													<h3 class="mb-1 ">John Thomson</h3>
													<p class="mb-4 ">App Developer</p>
												</div>
											</div>
											<div class="form-group">
												<label class="form-label">Bio</label>
												<textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
											</div>
											<div class="form-group">
												<label class="form-label">Email-Address</label>
												<input class="form-control" placeholder="your-email@domain.com"/>
											</div>
											<div class="form-group">
												<label class="form-label">Password</label>
												<input type="password" class="form-control" value="password"/>
											</div>
											<div class="form-group">
												<label class="form-label">Website</label>
												<input class="form-control" placeholder="http://Clont.com"/>
											</div>
											<div class="form-footer">
												<button class="btn btn-primary btn-block">Save</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<form class="card">
									<div class="card-header">
										<h3 class="card-title">Edit Profile</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label class="form-label">Company</label>
													<input type="text" class="form-control"  placeholder="Company" >
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Username</label>
													<input type="text" class="form-control" placeholder="Username" >
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Email address</label>
													<input type="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" placeholder="First Name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Address</label>
													<input type="text" class="form-control" placeholder="Home Address" >
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">City</label>
													<input type="text" class="form-control" placeholder="City" >
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Postal Code</label>
													<input type="number" class="form-control" placeholder="ZIP Code">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label class="form-label">Country</label>
													<select class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Germany</option>
														<option value="2">Canada</option>
														<option value="3">Usa</option>
														<option value="4">Aus</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group mb-0">
													<label class="form-label">About Me</label>
													<textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-right">
										<button type="submit" class="btn btn-primary">Update Profile</button>
									</div>
								</form>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title ">Projects</h3>
										<div class="card-options">
											<button id="add__new__list" type="button" class="btn btn-sm btn-success " data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Add a new Project</button>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
											<thead>
												<tr>
													<th scope="col">ID</th>
													<th scope="col">Project Name</th>
													<th scope="col">Backend</th>
													<th scope="col">Deadline</th>
													<th scope="col">Team Members</th>
													<th scope="col">Edit Project Details </th>
													<th scope="col">list info</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>At vero eos et accusamus et iusto odio</td>
													<td>PHP</td>
													<td>15/11/2018</td>
													<td>15 Members</td>
													<td>
														<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
														<a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-trash"></i> Delete</a>
													</td>
													<td><a class="btn btn-sm btn-info" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>voluptatum deleniti atque corrupti quos</td>
													<td>Angular js</td>
													<td>25/11/2018</td>
													<td>12 Members</td>
													<td>
														<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
														<a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-trash"></i> Delete</a>
													</td>
													<td><a class="btn btn-sm btn-info" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>dignissimos ducimus qui blanditiis praesentium </td>
													<td>Java</td>
													<td>5/12/2018</td>
													<td>20 Members</td>
													<td>
														<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
														<a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-trash"></i> Delete</a>
													</td>
													<td><a class="btn btn-sm btn-info" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>deleniti atque corrupti quos dolores  </td>
													<td>Phython</td>
													<td>14/12/2018</td>
													<td>10 Members</td>
													<td>
														<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
														<a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-trash"></i> Delete</a>
													</td>
													<td><a class="btn btn-sm btn-info" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>et quas molestias excepturi sint occaecati</td>
													<td>Phython</td>
													<td>4/12/2018</td>
													<td>17 Members</td>
													<td>
														<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
														<a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-trash"></i> Delete</a>
													</td>
													<td><a class="btn btn-sm btn-info" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- End row -->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!--Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection