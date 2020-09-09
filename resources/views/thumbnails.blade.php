@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Thumbnails</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thumbnails</li>
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
										<h3 class="card-title">Basic Thumbnails</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-xs-6 col-md-3">
												<a href="#" class="thumbnail ">
													<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="thumb1" class="thumbimg">
												</a>
											</div>
											<div class="col-xs-6 col-md-3">
												<a href="#" class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="thumb1" class="thumbimg">
												</a>
											</div>
											<div class="col-xs-6 col-md-3">
												<a href="#" class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="thumb1" class="thumbimg">
												</a>
											</div>
											<div class="col-xs-6 col-md-3">
												<a href="#" class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="thumb1" class="thumbimg">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Thumbnails</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-4">
												<div class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="ALT NAME" class="img-responsive" />
													<div class="caption">
														<h4>Thumbnail label</h4>
														<p>Description</p>
														<p class="text-center"><a href="" class="btn btn-primary btn-block">Open</a>
														</p>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="ALT NAME" class="img-responsive" />
													<div class="caption">
														<h4>Thumbnail label</h4>
														<p>Description</p>
														<p class="text-center"><a href="" class="btn btn-primary btn-block">Open</a>
														</p>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="ALT NAME" class="img-responsive" />
													<div class="caption">
														<h4>Thumbnail label</h4>
														<p>Description</p>
														<p class="text-center"><a href="" class="btn btn-primary btn-block">Open</a>
														</p>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="ALT NAME" class="img-responsive" />
													<div class="caption">
														<h4>Thumbnail label</h4>
														<p>Description</p>
														<p class="text-center"><a href="" class="btn btn-primary btn-block">Open</a>
														</p>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="ALT NAME" class="img-responsive" />
													<div class="caption">
														<h4>Thumbnail label</h4>
														<p>Description</p>
														<p class="text-center"><a href="" class="btn btn-primary btn-block">Open</a>
														</p>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="ALT NAME" class="img-responsive" />
													<div class="caption">
														<h4>Thumbnail label</h4>
														<p>Description</p>
														<p class="text-center"><a href="" class="btn btn-primary btn-block">Open</a>
														</p>
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
										<h3 class="card-title">Custom content Thumbnails</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-xs-6 col-md-4">
												<div class="thumbnail">
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/19.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
														<p>
															<a href="#" class="btn btn-primary" role="button">Button</a>
															<a href="#" class="btn btn-secondary" role="button">Button</a>
														</p>
													</div>
												</div>
											</div>
											<div class="col-xs-6 col-md-4">
												<div class="thumbnail">
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/20.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
														<p>
															<a href="#" class="btn btn-primary" role="button">Button</a>
															<a href="#" class="btn btn-secondary" role="button">Button</a>
														</p>
													</div>
												</div>
											</div>
											<div class="col-xs-6 col-md-4">
												<div class="thumbnail">
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/21.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
														<p>
															<a href="#" class="btn btn-primary" role="button">Button</a>
															<a href="#" class="btn btn-secondary" role="button">Button</a>
														</p>
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
										<h3 class="card-title">Custom content Thumbnails</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-xs-12 col-md-6 col-lg-3">
												<div class="thumbnail">
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/22.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-md-6 col-lg-3">
												<div class="thumbnail">
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/23.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-md-6 col-lg-3">
												<div class="thumbnail">
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
													</div>
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/24.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
												</div>
											</div>
											<div class="col-xs-12 col-md-6 col-lg-3">
												<div class="thumbnail">
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
													</div>
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/25.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Video List Thumbnail</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="mt-4">
											<ul class="list-unstyled video-list-thumbs row">
												<li class="col-sm-12 col-lg-3 col-md-6 border-0">
													<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
														<img src="{{URL::asset('assets/images/photos/24.jpg')}}" alt="Barca" class="img-responsive"/>

														<span class="fa fa-play-circle-o"></span>
														<span class="duration">06:28</span>
													</a>
												</li>
												<li class="col-sm-12 col-lg-3 col-md-6 border-0">
													<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
														<img src="{{URL::asset('assets/images/photos/25.jpg')}}" alt="Barca" class="img-responsive" />
														<span class="fa fa-play-circle-o"></span>
														<span class="duration">06:28</span>
													</a>
												</li>
												<li class="ccol-sm-12 col-lg-3 col-md-6 border-0">
													<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
														<img src="{{URL::asset('assets/images/photos/20.jpg')}}" alt="Barca" class="img-responsive"  />
														<span class="fa fa-play-circle-o"></span>
														<span class="duration">06:28</span>
													</a>
												</li>
												<li class="col-sm-12 col-lg-3 col-md-6 border-0">
													<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
														<img src="{{URL::asset('assets/images/photos/22.jpg')}}" alt="Barca" class="img-responsive" />
														<span class="fa fa-play-circle-o"></span>
														<span class="duration">06:28</span>
													</a>
												</li>
											</ul>
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