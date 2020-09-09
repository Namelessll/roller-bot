@extends('layouts.master')
@section('css')
<!-- Gallery css -->
<link href="{{URL::asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Gallery</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
						<div class="row">
							<div class="col-md-12">
								<!-- begin gallery-list -->
								<div  class="card">
									<div class="card-header">
										<div class="card-title"> Normal Post Gallery</div>
									</div>
									<div  class="card-body">
										<ul class="gallery-list">
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Quisque a eleifend est, quis accumsan metus.</h5>
														<small class="text-muted">24/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Nunc posuere augue vitae mi egestas, in suscipit risus aliquet.</h5>
														<small class="text-muted">24/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Mauris erat odio, ullamcorper non lacus ac, pulvinar aliquet eros.</h5>
														<small class="text-muted">25/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Maecenas ornare, purus nec egestas dapibus, sem erat dapibus tellus.</h5>
														<small class="text-muted">25/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Sed nec justo condimentum, gravida massa id, elementum mauris.</h5>
														<small class="text-muted">27/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Donec eget velit quis libero congue blandit.</h5>
														<small class="text-muted">28/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/7.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Fusce suscipit suscipit nisi eu tempus.</h5>
														<small class="text-muted">28/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Cras interdum nisl ut lacus accumsan varius.</h5>
														<small class="text-muted">28/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Praesent quis porta sapien.</h5>
														<small class="text-muted">28/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/10.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Duis pulvinar est ac sem tincidunt dictum.</h5>
														<small class="text-muted">28/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/11.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Praesent tempor iaculis dolor.</h5>
														<small class="text-muted">28/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/12.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Pellentesque feugiat varius magna at rutrum.</h5>
														<small class="text-muted">28/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/13.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Fusce dictum nulla in nunc finibus.</h5>
														<small class="text-muted">28/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/14.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Duis pulvinar est ac sem tincidunt dictum.</h5>
														<small class="text-muted">28/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/15.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Phasellus consequat tortor vitae magna iaculis.</h5>
														<small class="text-muted">29/08/2018</small>
													</div>
												</div>
											</li>
											<li>
												<div class="image-container">
													<div class="image">
														<img src="{{URL::asset('assets/images/photos/16.jpg')}}" alt="">
													</div>
													<div class="btn-list">
														<a href="#" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
														<a href="#" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#">Download</a></li>
															<li><a href="#">Copy</a></li>
															<li><a href="#">Share to</a></li>
															<li class="divider"></li>
															<li><a href="#">View actucal Image</a></li>
														</ul>
													</div>
													<div class="info">
														<h5>Praesent pretium tempor ante sit amet finibus.</h5>
														<small class="text-muted">29/08/2018</small>
													</div>
												</div>
											</li>

										</ul>
										<!-- end gallery-list -->
									</div>
								</div>
							</div>
						</div>
						<div class="demo-gallery card">
							<div class="card-header">
								<div class="card-title">Light Gallery</div>
								<div class="card-options ">
									<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
									<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
								</div>
							</div>
							<div class="card-body">
								<ul id="lightgallery" class="list-unstyled row">
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/1.jpg')}}" data-src="{{URL::asset('assets/images/photos/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/2.jpg')}}" data-src="{{URL::asset('assets/images/photos/2.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/3.jpg')}}" data-src="{{URL::asset('assets/images/photos/3.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/4.jpg')}}" data-src="{{URL::asset('assets/images/photos/4.jpg')}}" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/5.jpg')}}" data-src="{{URL::asset('assets/images/photos/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/6.jpg')}}" data-src="{{URL::asset('assets/images/photos/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/7.jpg')}}" data-src="{{URL::asset('assets/images/photos/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/7.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/8.jpg')}}" data-src="{{URL::asset('assets/images/photos/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/9.jpg')}}" data-src="{{URL::asset('assets/images/photos/9.jpg')}}" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/10.jpg')}}" data-src="{{URL::asset('assets/images/photos/10.jpg')}}" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/10.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/11.jpg')}}" data-src="{{URL::asset('assets/images/photos/11.jpg')}}" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/11.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/12.jpg')}}" data-src="{{URL::asset('assets/images/photos/12.jpg')}}" data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/12.jpg')}}" alt="Thumb-2">
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!-- Gallery js -->
<script src="{{URL::asset('assets/plugins/gallery/picturefill.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lightgallery.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-pager.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-autoplay.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-fullscreen.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-zoom.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-hash.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-share.js')}}"></script>
<script src="{{URL::asset('assets/js/gallery.js')}}"></script>
@endsection