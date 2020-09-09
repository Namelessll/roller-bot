@extends('layouts.master')
@section('css')
<!---Sweetalert css-->
<link href="{{URL::asset('assets/plugins/sweet-alert/jquery.sweet-modal.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Sweet Alert</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sweet Alert</li>
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
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Forms Sweet-alert</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<table class="table card-table border">
											<tr>
												<td>Title</td>
												<td><input type='text' class="form-control" placeholder='Title text' id='title'></td>
											</tr>
											<tr>
												<td>Message</td>
												<td><input type='text' class="form-control" placeholder='Your message' id='message'></td>
											</tr>
											<tr>
												<td colspan='2' class="mt-5 text-center">
													<input type='button' class="btn btn-primary mt-2" value='Simple alert' id='but1'>&nbsp;
													<input type='button' class="btn btn-secondary mt-2" value='Alert with title' id='but2'>&nbsp;
													<input type='button' class="btn btn-info mt-2" value='Alert with image' id='but3'>&nbsp;
													<input type='button' class="btn btn-warning mt-2" value='With timer' id='but4'>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="card text-center">
									<div class="card-header">
										<h3 class="card-title">Alert Types</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<p>You can show following types of message box &#8211; You need to specify this in <code>type</code> property as value.</p>

										<input type='button' class="btn btn-primary mt-2" value='success alert' id='click'>
										<input type='button' class="btn btn-secondary mt-2" value='Warning alert' id='click1'>
										<input type='button' class="btn btn-info mt-2" value='Danger alert' id='click2'>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 ">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Prompt and confirm box Demo</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<table class="table card-table border">
											<tr>
												<td><input type='button' class="btn btn-secondary btn-block "  value='Prompt' id='prompt'></td>
												<td><input type='button' class="btn btn-primary btn-block" value='Confirm' id='confirm'></td>
											</tr>
										</table>
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
<!-- Popover js -->
<script src="{{URL::asset('assets/js/popover.js')}}"></script>
<!-- Sweet alert js -->
<script src="{{URL::asset('assets/plugins/sweet-alert/jquery.sweet-modal.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{URL::asset('assets/js/sweet-alert.js')}}"></script>
@endsection