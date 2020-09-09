@extends('layouts.master')
@section('css')
<!-- Notifications  Css -->
<link href="{{URL::asset('assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Notifications</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Notifications</li>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts Styles Notifications</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="example">
											<div class="btn-list">
												<button onclick="not1()" class="btn btn-primary">Default</button>
												<button onclick="not2()" class="btn btn-secondary">Center</button>
												<button onclick="not3()" class="btn btn-warning">Left</button>
												<button onclick="not4()" class="btn btn-info">Center Info</button>
												<button onclick="not5()" class="btn btn-danger">Center Error</button>
												<button onclick="not6()" class="btn btn-success">Center Warning</button>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Side Alerts Notifications</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="example">
											<div class="btn-list">
												<a href="#" class="btn btn-primary notice">Primary</a>
												<a href="#" class="btn btn-secondary warning">Warning</a>
												<a href="#" class="btn btn-info error">Danger</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts Popovers</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-primary btn-block " data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="alert sucess" data-content="Well done! You successfully read this important alert message..">
													Show success
												</button>
											</div>
											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-info btn-block" data-container="body" data-toggle="popover" data-popover-color="popinfo" data-placement="top" title="alert info" data-content="Heads up! This alert needs your attention, but it's not super important...">
													Show info
												</button>
											</div>
											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-warning " data-container="body" data-toggle="popover" data-popover-color="popwarning" data-placement="bottom" title="alert warning" data-content="Warning! Best check yo self, you're not looking too good..">
													Show warning
												</button>
											</div>
											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-secondary" data-container="body" data-toggle="popover" data-popover-color="popsecondary" data-placement="top" title="alert secondary" data-content="Error! Please Check u r emial id..">
													Show secondary
												</button>
											</div>
											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-danger" data-container="body" data-toggle="popover" data-popover-color="popdanger" data-placement="bottom" title="alert danger" data-content="Oh snap! Change a few things up and try submitting again.">
												Show danger
												</button>
											</div>
											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-info" data-container="body"  data-toggle="popover" data-popover-color="pop-primary" data-placement="top" title="alert primary" data-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
													Show primary
												</button>
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
<!-- popover js -->
<script src="{{URL::asset('assets/js/popover.js')}}"></script>
<!-- Notifications js -->
<script src="{{URL::asset('assets/plugins/notify/js/rainbow.js')}}"></script>
<script src="{{URL::asset('assets/plugins/notify/js/sample.js')}}"></script>
<script src="{{URL::asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
@endsection