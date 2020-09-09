@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Chat</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Chat</li>
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
								<div class="container bootstrap snippet">
									<div class="tile tile-alt" id="messages-main">
										<div class="ms-menu">
											<div class="ms-user clearfix">
												<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="" class="avatar avatar-md brround float-left">
												<div>Signed in as <br> jhonthomson@gmail.com</div>
											</div>

											<div class="p-15">
												<div class="dropdown">
													<a class="btn btn-primary btn-block" href="" data-toggle="dropdown">Messages <i class="caret m-l-5"></i></a>
													<ul class="dropdown-menu dm-icon w-100">
														<li><a href=""><i class="fa fa-envelope"></i> Messages</a></li>
														<li><a href=""><i class="fa fa-users"></i> Contacts</a></li>
														<li><a href=""><i class="fa fa-format-list-bulleted"> </i>Todo Lists</a></li>
													</ul>
												</div>
											</div>

											<div class="list-group lg-alt">
												<a class="list-group-item media p-4 border-top mt-0" href="">
													<div class="float-left pr-2">
														<img src="{{URL::asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="list-group-item-heading text-default ">Davil Parnell</div>
														<small class="list-group-item-text text-muted">Fierent fastidii recteque ad pro</small>
													</div>
												</a>

												<a class="list-group-item media p-4 border-top mt-0" href="">
													<div class="float-left pr-2">
														<img src="{{URL::asset('assets/images/users/2.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="list-group-item-heading text-default ">Ann Watkinson</div>
														<small class="list-group-item-text text-muted">Cum sociis natoque penatibus </small>
													</div>
												</a>

												<a class="list-group-item media p-4 border-top mt-0" href="">
													<div class="float-left pr-2">
														<img src="{{URL::asset('assets/images/users/7.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="list-group-item-heading text-default ">Marse Walter</div>
														<small class="list-group-item-text text-muted">Suspendisse sapien ligula</small>
													</div>
												</a>

												<a class="list-group-item media p-4 border-top mt-0" href="">
													<div class="lv-avatar float-left pr-2">
														<img src="{{URL::asset('assets/images/users/3.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="list-group-item-heading text-default ">Jeremy Robbins</div>
														<small class="list-group-item-text text-muted">Phasellus porttitor tellus nec</small>
													</div>
												</a>

												<a class="list-group-item media p-4 border-top mt-0" href="">
													<div class="lv-avatar float-left pr-2">
														<img src="{{URL::asset('assets/images/users/9.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="list-group-item-heading text-default ">Reginald Horace</div>
														<small class="list-group-item-text text-muted">Quisque consequat arcu eget</small>
													</div>
												</a>

												<a class="list-group-item media p-4 border-top mt-0" href="">
													<div class="float-left pr-2">
														<img src="{{URL::asset('assets/images/users/6.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="list-group-item-heading text-default ">Shark Henry</div>
														<small class="list-group-item-text text-muted">Nam lobortis odio et leo maximu</small>
													</div>
												</a>

												<a class="list-group-item media p-4 border-top mt-0" href="">
													<div class="float-left pr-2">
														<img src="{{URL::asset('assets/images/users/7.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="list-group-item-heading text-default ">Paul Van Dack</div>
														<small class="list-group-item-text text-muted">Nam posuere purus sed velit auctor sodales</small>
													</div>
												</a>

												<a class="list-group-item media p-4 border-top mt-0" href="">
													<div class="lv-avatar float-left pr-2">
														<img src="{{URL::asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="list-group-item-heading text-default ">James Anderson</div>
														<small class="list-group-item-text text-muted">Vivamus imperdietsag</small>
													</div>
												</a>
											</div>
										</div>
										<div class="ms-body">
											<div class="action-header clearfix">
												<div class="" id="ms-menu-trigger">
													<i class="fa fa-bars"></i>
												</div>
												<div class="float-left hidden-xs d-flex ml-6">
													<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="" class="avatar avatar-md brround mr-2">
													<div class="align-items-center mt-2">
														<span>Jhon Thomson</span>
													</div>
												</div>
												<ul class="ah-actions actions align-items-center mt-3">
													<li>
														<a href="">
															<i class="fa fa-trash"></i>
														</a>
													</li>
													<li>
														<a href="">
															<i class="fa fa-check"></i>
														</a>
													</li>
													<li>
														<a href="">
															<i class="fa fa-clock-o"></i>
														</a>
													</li>
													<li class="dropdown">
														<a href="" data-toggle="dropdown" aria-expanded="true">
															<i class="fa fa-sort"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right">
															<li>
																<a href="">Latest</a>
															</li>
															<li>
																<a href="">Oldest</a>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="" data-toggle="dropdown" aria-expanded="true">
															<i class="fa fa-ellipsis-v"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right">
															<li>
																<a href="">Refresh</a>
															</li>
															<li>
																<a href="">Message Settings</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<div class="message-feed media">
												<div class="float-left pr-2">
													<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="" class="avatar avatar-md brround">
												</div>
												<div class="media-body">
													<div class="mf-content">
														Quisque consequat arcu eget odio cursus, ut tempor arcu vestibulum. Etiam ex arcu, porta a urna non, lacinia pellentesque orci. Proin semper sagittis erat, eget condimentum sapien viverra et.
													</div>
													<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2019 at 09:00</small>
												</div>
											</div>
											<div class="message-feed right">
												<div class="float-right pl-2">
													<img src="{{URL::asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
												</div>
												<div class="media-body">
													<div class="mf-content">
														Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.
													</div>
													<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2019 at 09:30</small>
												</div>
											</div>
											<div class="message-feed media">
												<div class="float-left pr-2">
													<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="" class="avatar avatar-md brround">
												</div>
												<div class="media-body">
													<div class="mf-content">
														Etiam ex arcumentum
													</div>
													<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2019 at 09:33</small>
												</div>
											</div>
											<div class="message-feed right">
												<div class="float-right pl-2">
													<img src="{{URL::asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
												</div>
												<div class="media-body">
													<div class="mf-content">
														Etiam nec facilisis lacus. Nulla imperdiet augue ullamcorper dui ullamcorper, eu laoreet sem consectetur. Aenean et ligula risus. Praesent sed posuere sem. Cum sociis natoque penatibus et magnis dis parturient montes,
													</div>
													<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2019 at 10:10</small>
												</div>
											</div>
											<div class="message-feed media">
												<div class="float-left pr-2">
													<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="" class="avatar avatar-md brround">
												</div>
												<div class="media-body">
													<div class="mf-content">
														Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ac tortor ut elit sodales varius. Mauris id ipsum id mauris malesuada tincidunt. Vestibulum elit massa, pulvinar at sapien sed, luctus vestibulum eros.
													</div>
													<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2019 at 10:24</small>
												</div>
											</div>
											<div class="msb-reply">
												<textarea placeholder="What's on your mind..."></textarea>
												<button><i class="fa fa-paper-plane-o"></i></button>
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