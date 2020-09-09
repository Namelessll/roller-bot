@extends('layouts.master')
@section('css')
<!-- Forn-wizard css-->
<link href="{{URL::asset('assets/plugins/forn-wizard/css/forn-wizard.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/formwizard/smart_wizard.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/formwizard/smart_wizard_theme_dots.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Form-wizard</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form-wizard</li>
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
						<!--row open-->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Form Wizard</h3>
									</div>
									<div class="card-body">
										<div id="smartwizard-3">
											<ul>
												<li><a href="#step-10">Login</a></li>
												<li><a href="#step-11">New User</a></li>
												<li><a href="#step-12">End</a></li>
											</ul>
											<div>
												<div id="step-10" class="">
													<form >
														<div class="form-group">
															<label>Email address</label>
															<input type="email" class="form-control" id="exampleInputEmail6" placeholder="Enter email address">
														</div>
														<div class="form-group">
															<label>Password</label>
															<input type="password" class="form-control" id="exampleInputPassword7" placeholder="Password">
														</div>
														<div class="checkbox">
															<div class="custom-checkbox custom-control">
																<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-9">
																<label class="custom-control-label">Check me Out</label>
															</div>
														</div>
													</form>
												</div>
												<div id="step-11" class="">
													<form >
														<div class="form-group">
															<label>User Name</label>
															<input type="text" class="form-control" id="inputtext" placeholder="Enter User Name">
														</div>
														<div class="form-group">
															<label>Email address</label>
															<input type="email" class="form-control" id="exampleInputEmail8" placeholder="Enter email address">
														</div>
														<div class="form-group">
															<label>Password</label>
															<input type="password" class="form-control" id="exampleInputPassword9" placeholder="Password">
														</div>
														<div class="checkbox">
															<div class="custom-checkbox custom-control">
																<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
																<label for="checkbox-3" class="custom-control-label">Check me Out</label>
															</div>
														</div>
													</form>
												</div>
												<div id="step-12" class="">
													<div class="checkbox">
														<div class="custom-checkbox custom-control">
															<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox2">
															<label for="checkbox2" class="custom-control-label">I agree terms & Conditions</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

						<!--row open-->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Accordion-Wizard-Form</h3>
									</div>
									<div class="card-body">
										<form id="form">
											<div class="list-group">
												<div class="list-group-item py-3" data-acc-step>
													<h5 class="mb-0" data-acc-title>Name &amp; Email</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label>Name:</label>
																<input type="text" name="name" class="form-control" />
															</div>
															<div class="form-group">
																<label>Email:</label>
																<input type="text" name="email" class="form-control" />
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item py-3" data-acc-step>
													<h5 class="mb-0" data-acc-title>Contact</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label>Telephone:</label>
																<input type="text" name="telephone" class="form-control" />
															</div>
															<div class="form-group">
																<label>Mobile:</label>
																<input type="text" name="mobile" class="form-control" />
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item py-3" data-acc-step>
													<h5 class="mb-0" data-acc-title>Payment</h5>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label>Credit card:</label>
																<input type="text" name="card" class="form-control">
															</div>
															<div class="form-group form-row">
																<div class="col-sm-4">
																	<label>Expiry:</label>
																	<input type="text" name="expiry" class="form-control">
																</div>
																<div class="col-sm-4">
																	<label>CVV:</label>
																	<input type="text" name="cvv" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!-- Forn-wizard js-->
<script src="{{URL::asset('assets/plugins/formwizard/jquery.smartWizard.js')}}"></script>
<script src="{{URL::asset('assets/plugins/formwizard/fromwizard.js')}}"></script>
<!--Accordion-Wizard-Form js-->
<script src="{{URL::asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js')}}"></script>
<script src="{{URL::asset('assets/js/form-wizard.js')}}"></script>
@endsection