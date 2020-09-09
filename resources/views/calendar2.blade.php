@extends('layouts.master')
@section('css')
<!-- Fullcalendar css-->
<link href="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.css')}}" rel='stylesheet' />
<link href="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.print.min.css')}}" rel='stylesheet' media='print' />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Full Calender</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Full Calender</li>
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
									<div class="card-body">
										 <div id='calendar1'></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- End Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										 <div id='calendar'></div>
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
<!-- Full-calendar js-->
<script src="{{URL::asset('assets/plugins/fullcalendar/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{URL::asset('assets/js/fullcalendar.js')}}"></script>
@endsection