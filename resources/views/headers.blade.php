@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Headers</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Headers</li>
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
						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Search box with Navigation</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="">
										<div class="header py-4">
											<div class="container">
												<div class="d-flex">
													<a class="header-brand" href="{{ url('/' . $page='index') }}">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Clont logo">
														<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Clont logo">
													</a>
													<div class="d-flex order-lg-2 ml-auto">
														<div class="dropdown d-none d-md-flex mt-1" >
															<a  class="nav-link icon requestfullscreen">
																<i class="fe fe-maximize floating"></i>
															</a>
															<a  class="nav-link icon exitfullscreen" style="display: none">
																<i class="fe fe-minimize floating"></i>
															</a>
														</div>

														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon" data-toggle="dropdown">
																<i class="fe fe-bell floating"></i>
																<span class="nav-unread bg-danger"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg">
																		<i class="fe fe-message-square"></i>
																	</div>
																	<div>
																		<div>Message Sent.</div>
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-danger">
																		<i class="fe fe-shopping-cart"></i>
																	</div>
																	<div>
																		<div> Order Placed</div>
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-success">
																		<i class="fe fe-calendar"></i>
																	</div>
																	<div>
																		<div> Event Started</div>
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-warning">
																		<i class="fe fe-airplay"></i>
																	</div>
																	<div>
																		<div>Your Admin lanuched</div>
																		<div class="small text-muted">1 daya ago</div>
																	</div>
																</a>
																<div class=" text-center p-2 border-top">
																	<a href="#" class="">View All Notifications</a>
																</div>
															</div>
														</div>
														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon" data-toggle="dropdown">
																<i class="fe fe-mail floating"></i>
																<span class=" nav-unread badge badge-warning  badge-pill">2</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a href="#" class="dropdown-item text-center">2 New Messages</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																	<div>
																		<strong>Madeleine</strong> Hey! there I' am available....
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																	<div>
																		<strong>Anthony</strong> New product Launching...
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
																	<div>
																		<strong>Olivia</strong> New Schedule Realease......
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item text-center">See all Messages</a>
															</div>
														</div>
														<div class="dropdown ">
															<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center user pb-0">John Thomson</a>
																	<span class="text-center user-semi-title text-dark">App Developer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																</a>
																<a class="dropdown-item" href="{{ url('/' . $page='login') }}">
																	<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																</a>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse1">
													<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
										<div class="header collapse d-lg-flex p-0 border-bottom-0" id="headerMenuCollapse1">
											<div class="container">
												<div class="row align-items-center">
													<div class="col-lg order-lg-first">
														<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link " data-toggle="dropdown"><i class="fa fa-home"></i>DASHBOARD </a>
																<div class="dropdown-menu dropdown-menu-arrow" >
																	<a href="#" class="dropdown-item ">Dashboard 01</a>
																	<a href="#" class="dropdown-item ">Dashboard 02</a>
																	<a href="#" class="dropdown-item ">Dashboard 03</a>
																	<a href="#" class="dropdown-item ">Dashboard 04</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="#" class="nav-link "><i class="fa fa-window-restore"></i> WIDGETS</a>
															</li>
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-snowflake-o"></i>UI DESIGN</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Graph Charts</a>
																			<a href="#" class="dropdown-item ">line Charts</a>
																			<a href="#" class="dropdown-item ">Donut Charts</a>
																			<a href="#" class="dropdown-item ">Pie Charts</a>
																			<a href="#" class="dropdown-item ">Cards design</a>
																			<a href="#" class="dropdown-item ">Maps</a>
																			<a href="#" class="dropdown-item ">Sweet alert</a>
																		</div>
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Timeline</a>
																			<a href="#" class="dropdown-item ">Default Chat</a>
																			<a href="#" class="dropdown-item ">Counters</a>
																			<a href="#" class="dropdown-item ">Loaders</a>
																			<a href="#" class="dropdown-item ">Notifications</a>
																			<a href="#" class="dropdown-item ">Range slider</a>
																			<a href="#" class="dropdown-item ">Content Scroll bar</a>
																		</div>
																	</div>
																</div>
															</li>
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown"><i class="fa fa-pencil-square-o"></i>UI ElEMENTS</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Alerts</a>
																			<a href="#" class="dropdown-item ">Buttons</a>
																			<a href="#" class="dropdown-item ">Colors</a>
																			<a href="#" class="dropdown-item ">Sample Charts</a>
																			<a href="#" class="dropdown-item ">Avatars</a>
																			<a href="#" class="dropdown-item ">RoundAvatars</a>
																			<a href="#" class="dropdown-item ">RadiusAvatars</a>
																			<a href="#" class="dropdown-item ">Accordion</a>
																			<a href="#" class="dropdown-item ">Dropdown</a>
																			<a href="#" class="dropdown-item ">List</a>
																			<a href="#" class="dropdown-item ">Tags</a>
																			<a href="#" class="dropdown-item ">Pagination</a>
																		</div>
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Modal</a>
																			<a href="#" class="dropdown-item ">Navigation</a>
																			<a href="#" class="dropdown-item ">Progress</a>
																			<a href="#" class="dropdown-item ">Typography</a>
																			<a href="#" class="dropdown-item ">Tooltip & Popover</a>
																			<a href="#" class="dropdown-item ">Breadcrumbs</a>
																			<a href="#" class="dropdown-item ">Badges</a>
																			<a href="#" class="dropdown-item ">Jumbotron</a>
																			<a href="#" class="dropdown-item ">Panel</a>
																			<a href="#" class="dropdown-item ">Thumbnails</a>
																			<a href="#" class="dropdown-item ">Mediaobject</a>
																			<a href="#" class="dropdown-item ">Tabs</a>
																		</div>
																	</div>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-newspaper-o"></i>PAGES</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="#" class="dropdown-item ">Profile</a>
																	<a href="#" class="dropdown-item ">Edit Profile</a>
																	<a href="#" class="dropdown-item ">Login</a>
																	<a href="#" class="dropdown-item ">Register</a>
																	<a href="#" class="dropdown-item ">Forgot password</a>
																	<a href="#" class="dropdown-item ">Email</a>
																	<a href="#" class="dropdown-item ">Email Inbox</a>
																	<a href="#" class="dropdown-item ">Empty page</a>
																	<a href="#" class="dropdown-item ">Under Construction</a>
																	<a href="#" class="dropdown-item ">Lock screen</a>
																	<a href="#" class="dropdown-item ">400 error</a>
																	<a href="#" class="dropdown-item ">401 error</a>
																	<a href="#" class="dropdown-item ">403 error</a>
																	<a href="#" class="dropdown-item ">404 error</a>
																	<a href="#" class="dropdown-item ">500 error</a>
																	<a href="#" class="dropdown-item ">503 error</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-file-text-o"></i>FORMS</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="#" class="dropdown-item ">Form Elements</a>
																	<a href="#" class="dropdown-item ">form-wizard Elements</a>
																	<a href="#" class="dropdown-item ">Text Editor</a>
																</div>
															</li>
															<li class="text-right ">
																<form class="input-icon mt-2 mr-2 ">
																	<input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
																	<div class="input-icon-addon">
																		<i class="fe fe-search"></i>
																	</div>
																</form>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Navigation</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="">
										<div class="header py-4">
											<div class="container">
												<div class="d-flex">
													<a class="header-brand" href="{{ url('/' . $page='index') }}">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Clont logo">
														<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Clont logo">
													</a>
													<div class="d-flex order-lg-2 ml-auto">
														<div class="defaultheader">
															<form class="form-inline mt-2 mr-2">
																<div class="search-element">
																	<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
																	<button class="btn btn-primary-color" type="submit"><i class="fa fa-search text-dark"></i></button>
																</div>
															</form>
														</div>
														<div class="d-flex order-lg-2 ml-auto">
															<div class="dropdown d-none d-md-flex mt-1" >
																<a  class="nav-link icon requestfullscreen">
																	<i class="fe fe-maximize floating"></i>
																</a>
																<a  class="nav-link icon exitfullscreen" style="display: none">
																	<i class="fe fe-minimize floating"></i>
																</a>
															</div>
															<div class="dropdown d-none d-md-flex mt-1">
																<a class="nav-link icon" data-toggle="dropdown">
																	<i class="fe fe-bell floating"></i>
																	<span class="nav-unread bg-danger"></span>
																</a>
																<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																		<a href="#" class="dropdown-item d-flex pb-3">
																		<div class="notifyimg">
																			<i class="fe fe-message-square"></i>
																		</div>
																		<div>
																			<div>Message Sent.</div>
																			<div class="small text-muted">3 hours ago</div>
																		</div>
																	</a>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<div class="notifyimg bg-danger">
																			<i class="fe fe-shopping-cart"></i>
																		</div>
																		<div>
																			<div> Order Placed</div>
																			<div class="small text-muted">5  hour ago</div>
																		</div>
																	</a>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<div class="notifyimg bg-success">
																			<i class="fe fe-calendar"></i>
																		</div>
																		<div>
																			<div> Event Started</div>
																			<div class="small text-muted">45 mintues ago</div>
																		</div>
																	</a>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<div class="notifyimg bg-warning">
																			<i class="fe fe-airplay"></i>
																		</div>
																		<div>
																			<div>Your Admin lanuched</div>
																			<div class="small text-muted">1 daya ago</div>
																		</div>
																	</a>
																	<div class=" text-center p-2 border-top">
																		<a href="#" class="">View All Notifications</a>
																	</div>
																</div>
															</div>
															<div class="dropdown d-none d-md-flex mt-1">
																<a class="nav-link icon" data-toggle="dropdown">
																	<i class="fe fe-mail floating"></i>
																	<span class=" nav-unread badge badge-warning  badge-pill">2</span>
																</a>
																<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																	<a href="#" class="dropdown-item text-center">2 New Messages</a>
																	<div class="dropdown-divider"></div>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																		<div>
																			<strong>Madeleine</strong> Hey! there I' am available....
																			<div class="small text-muted">3 hours ago</div>
																		</div>
																	</a>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																		<div>
																			<strong>Anthony</strong> New product Launching...
																			<div class="small text-muted">5  hour ago</div>
																		</div>
																	</a>
																	<a href="#" class="dropdown-item d-flex pb-3">
																		<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
																		<div>
																			<strong>Olivia</strong> New Schedule Realease......
																			<div class="small text-muted">45 mintues ago</div>
																		</div>
																	</a>
																	<div class="dropdown-divider"></div>
																	<a href="#" class="dropdown-item text-center">See all Messages</a>
																</div>
															</div>
															<div class="dropdown ">
																<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
																	<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
																</a>
																<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
																	<div class="text-center">
																		<a href="#" class="dropdown-item text-center user pb-0">John Thomson</a>
																		<span class="text-center user-semi-title text-dark">App Developer</span>
																		<div class="dropdown-divider"></div>
																	</div>
																	<a class="dropdown-item" href="#">
																		<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
																	</a>
																	<a class="dropdown-item" href="#">
																		<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																	</a>
																	<a class="dropdown-item" href="#">
																		<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																	</a>
																	<a class="dropdown-item" href="#">
																		<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																	</a>
																	<a class="dropdown-item" href="{{ url('/' . $page='login') }}">
																		<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																	</a>
																</div>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse2">
													<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
										<div class="header collapse d-lg-flex p-0 border-bottom-0" id="headerMenuCollapse2">
											<div class="container">
												<div class="row align-items-center">
													<div class="col-lg order-lg-first">
														<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link " data-toggle="dropdown"><i class="fa fa-home"></i>DASHBOARD </a>
																<div class="dropdown-menu dropdown-menu-arrow" >
																	<a href="#" class="dropdown-item ">Dashboard 01</a>
																	<a href="#" class="dropdown-item ">Dashboard 02</a>
																	<a href="#" class="dropdown-item ">Dashboard 03</a>
																	<a href="#" class="dropdown-item ">Dashboard 04</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="#" class="nav-link "><i class="fa fa-window-restore"></i> WIDGETS</a>
															</li>
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-snowflake-o"></i>UI DESIGN</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Graph Charts</a>
																			<a href="#" class="dropdown-item ">line Charts</a>
																			<a href="#" class="dropdown-item ">Donut Charts</a>
																			<a href="#" class="dropdown-item ">Pie Charts</a>
																			<a href="#" class="dropdown-item ">Cards design</a>
																			<a href="#" class="dropdown-item ">Maps</a>
																			<a href="#" class="dropdown-item ">Sweet alert</a>
																		</div>
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Timeline</a>
																			<a href="#" class="dropdown-item ">Default Chat</a>
																			<a href="#" class="dropdown-item ">Counters</a>
																			<a href="#" class="dropdown-item ">Loaders</a>
																			<a href="#" class="dropdown-item ">Notifications</a>
																			<a href="#" class="dropdown-item ">Range slider</a>
																			<a href="#" class="dropdown-item ">Content Scroll bar</a>
																		</div>
																	</div>
																</div>
															</li>

															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown"><i class="fa fa-pencil-square-o"></i>UI ElEMENTS</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Alerts</a>
																			<a href="#" class="dropdown-item ">Buttons</a>
																			<a href="#" class="dropdown-item ">Colors</a>
																			<a href="#" class="dropdown-item ">Sample Charts</a>
																			<a href="#" class="dropdown-item ">Avatars</a>
																			<a href="#" class="dropdown-item ">RoundAvatars</a>
																			<a href="#" class="dropdown-item ">RadiusAvatars</a>
																			<a href="#" class="dropdown-item ">Accordion</a>
																			<a href="#" class="dropdown-item ">Dropdown</a>
																			<a href="#" class="dropdown-item ">List</a>
																			<a href="#" class="dropdown-item ">Tags</a>
																			<a href="#" class="dropdown-item ">Pagination</a>
																		</div>
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Modal</a>
																			<a href="#" class="dropdown-item ">Navigation</a>
																			<a href="#" class="dropdown-item ">Progress</a>
																			<a href="#" class="dropdown-item ">Typography</a>
																			<a href="#" class="dropdown-item ">Tooltip & Popover</a>
																			<a href="#" class="dropdown-item ">Breadcrumbs</a>
																			<a href="#" class="dropdown-item ">Badges</a>
																			<a href="#" class="dropdown-item ">Jumbotron</a>
																			<a href="#" class="dropdown-item ">Panel</a>
																			<a href="#" class="dropdown-item ">Thumbnails</a>
																			<a href="#" class="dropdown-item ">Mediaobject</a>
																			<a href="#" class="dropdown-item ">Tabs</a>

																		</div>
																	</div>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-newspaper-o"></i>PAGES</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="#" class="dropdown-item ">Profile</a>
																	<a href="#" class="dropdown-item ">Edit Profile</a>
																	<a href="#" class="dropdown-item ">Login</a>
																	<a href="#" class="dropdown-item ">Register</a>
																	<a href="#" class="dropdown-item ">Forgot password</a>
																	<a href="#" class="dropdown-item ">Email</a>
																	<a href="#" class="dropdown-item ">Email Inbox</a>
																	<a href="#" class="dropdown-item ">Empty page</a>
																	<a href="#" class="dropdown-item ">Under Construction</a>
																	<a href="#" class="dropdown-item ">Lock screen</a>
																	<a href="#" class="dropdown-item ">400 error</a>
																	<a href="#" class="dropdown-item ">401 error</a>
																	<a href="#" class="dropdown-item ">403 error</a>
																	<a href="#" class="dropdown-item ">404 error</a>
																	<a href="#" class="dropdown-item ">500 error</a>
																	<a href="#" class="dropdown-item ">503 error</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> FORMS</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="#" class="dropdown-item ">Form Elements</a>
																	<a href="#" class="dropdown-item ">form-wizard Elements</a>
																	<a href="#" class="dropdown-item ">Text Editor</a>
																</div>
															</li>
															<li class="nav-item">
																<a href="{{ url('/' . $page='gallery') }}" class="nav-link"><i class="fa fa-picture-o"></i> GALLERY</a>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-cubes"></i> COMPONENTS</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="#" class="dropdown-item ">Pricing tables</a>
																	<a href="#" class="dropdown-item ">Crypto-currencies</a>
																	<a href="#" class="dropdown-item ">User-list</a>
																	<a href="#" class="dropdown-item ">Icons</a>
																	<a href="#" class="dropdown-item ">Icons 2</a>
																	<a href="#" class="dropdown-item ">Tables</a>
																	<a href="#" class="dropdown-item ">Data Tables</a>
																	<a href="#" class="dropdown-item ">Store</a>
																	<a href="#" class="dropdown-item ">Blog</a>
																	<a href="#" class="dropdown-item ">Invoice</a>
																	<a href="#" class="dropdown-item ">Carousel</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">With Out Search Boxes And Notification</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="">
										<div class="header py-4">
											<div class="container">
												<div class="d-flex">
													<a class="header-brand" href="{{ url('/' . $page='index') }}">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Clont logo">
														<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Clont logo">
													</a>
													<div class="d-flex order-lg-2 ml-auto">

														<div class="dropdown ">
															<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center user pb-0">John Thomson</a>
																	<span class="text-center user-semi-title text-dark">App Developer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																</a>
																<a class="dropdown-item" href="{{ url('/' . $page='login') }}">
																	<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																</a>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse3">
														<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
										<div class="header collapse d-lg-flex p-0 border-bottom-0" id="headerMenuCollapse3">
											<div class="container">
												<div class="row align-items-center">
													<div class="col-lg order-lg-first">
														<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link " data-toggle="dropdown"><i class="fa fa-home"></i>DASHBOARD </a>
																<div class="dropdown-menu dropdown-menu-arrow" >
																	<a href="#" class="dropdown-item ">Dashboard 01</a>
																	<a href="#" class="dropdown-item ">Dashboard 02</a>
																	<a href="#" class="dropdown-item ">Dashboard 03</a>
																	<a href="#" class="dropdown-item ">Dashboard 04</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="#" class="nav-link "><i class="fa fa-window-restore"></i> WIDGETS</a>
															</li>
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-snowflake-o"></i>UI DESIGN</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Graph Charts</a>
																			<a href="#" class="dropdown-item ">line Charts</a>
																			<a href="#" class="dropdown-item ">Donut Charts</a>
																			<a href="#" class="dropdown-item ">Pie Charts</a>
																			<a href="#" class="dropdown-item ">Cards design</a>
																			<a href="#" class="dropdown-item ">Maps</a>
																			<a href="#" class="dropdown-item ">Sweet alert</a>
																		</div>
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Timeline</a>
																			<a href="#" class="dropdown-item ">Default Chat</a>
																			<a href="#" class="dropdown-item ">Counters</a>
																			<a href="#" class="dropdown-item ">Loaders</a>
																			<a href="#" class="dropdown-item ">Notifications</a>
																			<a href="#" class="dropdown-item ">Range slider</a>
																			<a href="#" class="dropdown-item ">Content Scroll bar</a>
																		</div>
																	</div>
																</div>
															</li>
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown"><i class="fa fa-pencil-square-o"></i>UI ElEMENTS</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Alerts</a>
																			<a href="#" class="dropdown-item ">Buttons</a>
																			<a href="#" class="dropdown-item ">Colors</a>
																			<a href="#" class="dropdown-item ">Sample Charts</a>
																			<a href="#" class="dropdown-item ">Avatars</a>
																			<a href="#" class="dropdown-item ">RoundAvatars</a>
																			<a href="#" class="dropdown-item ">RadiusAvatars</a>
																			<a href="#" class="dropdown-item ">Accordion</a>
																			<a href="#" class="dropdown-item ">Dropdown</a>
																			<a href="#" class="dropdown-item ">List</a>
																			<a href="#" class="dropdown-item ">Tags</a>
																			<a href="#" class="dropdown-item ">Pagination</a>
																		</div>
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Modal</a>
																			<a href="#" class="dropdown-item ">Navigation</a>
																			<a href="#" class="dropdown-item ">Progress</a>
																			<a href="#" class="dropdown-item ">Typography</a>
																			<a href="#" class="dropdown-item ">Tooltip & Popover</a>
																			<a href="#" class="dropdown-item ">Breadcrumbs</a>
																			<a href="#" class="dropdown-item ">Badges</a>
																			<a href="#" class="dropdown-item ">Jumbotron</a>
																			<a href="#" class="dropdown-item ">Panel</a>
																			<a href="#" class="dropdown-item ">Thumbnails</a>
																			<a href="#" class="dropdown-item ">Mediaobject</a>
																			<a href="#" class="dropdown-item ">Tabs</a>
																		</div>
																	</div>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-newspaper-o"></i>PAGES</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="#" class="dropdown-item ">Profile</a>
																	<a href="#" class="dropdown-item ">Edit Profile</a>
																	<a href="#" class="dropdown-item ">Login</a>
																	<a href="#" class="dropdown-item ">Register</a>
																	<a href="#" class="dropdown-item ">Forgot password</a>
																	<a href="#" class="dropdown-item ">Email</a>
																	<a href="#" class="dropdown-item ">Email Inbox</a>
																	<a href="#" class="dropdown-item ">Empty page</a>
																	<a href="#" class="dropdown-item ">Under Construction</a>
																	<a href="#" class="dropdown-item ">Lock screen</a>
																	<a href="#" class="dropdown-item ">400 error</a>
																	<a href="#" class="dropdown-item ">401 error</a>
																	<a href="#" class="dropdown-item ">403 error</a>
																	<a href="#" class="dropdown-item ">404 error</a>
																	<a href="#" class="dropdown-item ">500 error</a>
																	<a href="#" class="dropdown-item ">503 error</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> FORMS</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="#" class="dropdown-item ">Form Elements</a>
																	<a href="#" class="dropdown-item ">form-wizard Elements</a>
																	<a href="#" class="dropdown-item ">Text Editor</a>
																</div>
															</li>
															<li class="nav-item">
																<a href="#" class="nav-link"><i class="fa fa-picture-o"></i>GALLERY</a>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-cubes"></i> COMPONENTS</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="#" class="dropdown-item ">Pricing tables</a>
																	<a href="#" class="dropdown-item ">Crypto-currencies</a>
																	<a href="#" class="dropdown-item ">User-list</a>
																	<a href="#" class="dropdown-item ">Icons</a>
																	<a href="#" class="dropdown-item ">Icons 2</a>
																	<a href="#" class="dropdown-item ">Tables</a>
																	<a href="#" class="dropdown-item ">Data Tables</a>
																	<a href="#" class="dropdown-item ">Store</a>
																	<a href="#" class="dropdown-item ">Blog</a>
																	<a href="#" class="dropdown-item ">Invoice</a>
																	<a href="#" class="dropdown-item ">Carousel</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">With Out Navigation Icons</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="">
										<div class="header py-4">
											<div class="container">
												<div class="d-flex">
													<a class="header-brand" href="{{ url('/' . $page='index') }}">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Clont logo">
														<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Clont logo">
													</a>
													<div class="d-flex order-lg-2 ml-auto">
														<div class="dropdown ">
															<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center user pb-0">John Thomson</a>
																	<span class="text-center user-semi-title text-dark">App Developer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																</a>
																<a class="dropdown-item" href="{{ url('/' . $page='login') }}">
																	<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																</a>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse4">
													<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
										<div class="header collapse d-lg-flex p-0 border-bottom-0" id="headerMenuCollapse4">
											<div class="container">
												<div class="row align-items-center">
													<div class="col-lg order-lg-first">
														<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link " data-toggle="dropdown">DASHBOARD </a>
																<div class="dropdown-menu dropdown-menu-arrow" >
																	<a href="#" class="dropdown-item ">Dashboard 01</a>
																	<a href="#" class="dropdown-item ">Dashboard 02</a>
																	<a href="#" class="dropdown-item ">Dashboard 03</a>
																	<a href="#" class="dropdown-item ">Dashboard 04</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="#" class="nav-link ">WIDGETS</a>
															</li>
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">UI DESIGN</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Graph Charts</a>
																			<a href="#" class="dropdown-item ">line Charts</a>
																			<a href="#" class="dropdown-item ">Donut Charts</a>
																			<a href="#" class="dropdown-item ">Pie Charts</a>
																			<a href="#" class="dropdown-item ">Cards design</a>
																			<a href="#" class="dropdown-item ">Maps</a>
																			<a href="#" class="dropdown-item ">Sweet alert</a>
																		</div>
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Timeline</a>
																			<a href="#" class="dropdown-item ">Default Chat</a>
																			<a href="#" class="dropdown-item ">Counters</a>
																			<a href="#" class="dropdown-item ">Loaders</a>
																			<a href="#" class="dropdown-item ">Notifications</a>
																			<a href="#" class="dropdown-item ">Range slider</a>
																			<a href="#" class="dropdown-item ">Content Scroll bar</a>
																		</div>
																	</div>
																</div>
															</li>
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown">UI ElEMENTS</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Alerts</a>
																			<a href="#" class="dropdown-item ">Buttons</a>
																			<a href="#" class="dropdown-item ">Colors</a>
																			<a href="#" class="dropdown-item ">Sample Charts</a>
																			<a href="#" class="dropdown-item ">Avatars</a>
																			<a href="#" class="dropdown-item ">RoundAvatars</a>
																			<a href="#" class="dropdown-item ">RadiusAvatars</a>
																			<a href="#" class="dropdown-item ">Accordion</a>
																			<a href="#" class="dropdown-item ">Dropdown</a>
																			<a href="#" class="dropdown-item ">List</a>
																			<a href="#" class="dropdown-item ">Tags</a>
																			<a href="#" class="dropdown-item ">Pagination</a>
																		</div>
																		<div class="col-md-6">
																			<a href="#" class="dropdown-item ">Modal</a>
																			<a href="#" class="dropdown-item ">Navigation</a>
																			<a href="#" class="dropdown-item ">Progress</a>
																			<a href="#" class="dropdown-item ">Typography</a>
																			<a href="#" class="dropdown-item ">Tooltip & Popover</a>
																			<a href="#" class="dropdown-item ">Breadcrumbs</a>
																			<a href="#" class="dropdown-item ">Badges</a>
																			<a href="#" class="dropdown-item ">Jumbotron</a>
																			<a href="#" class="dropdown-item ">Panel</a>
																			<a href="#" class="dropdown-item ">Thumbnails</a>
																			<a href="#" class="dropdown-item ">Mediaobject</a>
																			<a href="#" class="dropdown-item ">Tabs</a>
																		</div>
																	</div>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">PAGES</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="#" class="dropdown-item ">Profile</a>
																	<a href="#" class="dropdown-item ">Edit Profile</a>
																	<a href="#" class="dropdown-item ">Login</a>
																	<a href="#" class="dropdown-item ">Register</a>
																	<a href="#" class="dropdown-item ">Forgot password</a>
																	<a href="#" class="dropdown-item ">Email</a>
																	<a href="#" class="dropdown-item ">Email Inbox</a>
																	<a href="#" class="dropdown-item ">Empty page</a>
																	<a href="#" class="dropdown-item ">Under Construction</a>
																	<a href="#" class="dropdown-item ">Lock screen</a>
																	<a href="#" class="dropdown-item ">400 error</a>
																	<a href="#" class="dropdown-item ">401 error</a>
																	<a href="#" class="dropdown-item ">403 error</a>
																	<a href="#" class="dropdown-item ">404 error</a>
																	<a href="#" class="dropdown-item ">500 error</a>
																	<a href="#" class="dropdown-item ">503 error</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">FORMS</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="#" class="dropdown-item ">Form Elements</a>
																	<a href="#" class="dropdown-item ">form-wizard Elements</a>
																	<a href="#" class="dropdown-item ">Text Editor</a>
																</div>
															</li>
															<li class="nav-item">
																<a href="#" class="nav-link">GALLERY</a>
															</li>
															<li class="nav-item">
																<a href="#" class="nav-link">PROFILE</a>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"> COMPONENTS</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="#" class="dropdown-item ">Pricing tables</a>
																	<a href="#" class="dropdown-item ">Crypto-currencies</a>
																	<a href="#" class="dropdown-item ">User-list</a>
																	<a href="#" class="dropdown-item ">Icons</a>
																	<a href="#" class="dropdown-item ">Icons 2</a>
																	<a href="#" class="dropdown-item ">Tables</a>
																	<a href="#" class="dropdown-item ">Data Tables</a>
																	<a href="#" class="dropdown-item ">Store</a>
																	<a href="#" class="dropdown-item ">Blog</a>
																	<a href="#" class="dropdown-item ">Invoice</a>
																	<a href="#" class="dropdown-item ">Carousel</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
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
@endsection