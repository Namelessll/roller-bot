@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Cards-Image</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cards-Image</li>
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
						<!--Row-->
						<div class="row">
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<img  src="{{URL::asset('assets/images/photos/12.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<img  src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<img  src="{{URL::asset('assets/images/photos/11.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
									</div>
									<img  src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="image">
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
									</div>
									<img  src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="image">
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
									</div>
									<img  src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="image">
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<img  src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
									</div>
									<div class="card-footer">card footer</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header"><div class="card-title">card header</div></div>
									<img  src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">card header</div>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up "></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<img  src="{{URL::asset('assets/images/photos/7.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-3">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<a href="javascript:void(0);" class="btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card overflow-hidden">
									<div class="row">
										<div class="col pr-0">
											<img  src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="image">
										</div>
										<div class="col p-0">
											<div class="card-body">
												<h5 class="card-title mb-3">Card title</h5>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												<a href="javascript:void(0);" class="btn btn-primary btn-sm">Read More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card overflow-hidden">
									<div class="row">

										<div class="col p-0">
											<div class="card-body">
												<h5 class="card-title mb-3">Card title</h5>
												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												<a href="javascript:void(0);" class="btn btn-primary btn-sm">Read More</a>
											</div>
										</div>
										<div class="col pl-0">
											<img  src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="image">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-xl-6">
								<div class="card card-blog-overlay1">
									<div class="card-body  text-white">
										<h3 class="card-title text-white">card-with image</h3>
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer  text-white z-index-10">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card card-blog-overlay2">
									<div class="card-body  text-white">
										<h3 class="card-title text-white">card-with image</h3>
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer text-white z-index-10">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card card-blog-overlay ">
									<div class="card-header z-index-10">
										<h3 class="card-title text-white">card-with image</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
										</div>
									</div>
									<div class="card-body  text-white">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">card-with image</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up "></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body  text-white card-blog-overlay1 h-9 w-100">
									</div>
									<div class="card-body p-4">
										Duis aute irure dolor
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card card-aside">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">Play Music</a></h4>
										<div class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's</div>
										<div class="d-flex align-items-center pt-5 mt-auto text-center ">
											<div class="text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-backward"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-play "></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-forward"></i></a>
											</div>
										</div>
									</div>
									<a href="#" class="card-aside-column br-tr-7 br-br-7 w-50" style="background-image: url({{URL::asset('assets/images/photos/2.jpg')}})"></a>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card card-aside bg-primary">
									<div class="card-body d-flex flex-column">
										<h4><a href="#" class="text-white">Play Music</a></h4>
										<div class="text-muted text-white">Some quick example text to build on the card title and make up the bulk of the card's </div>
										<div class="d-flex align-items-center pt-5 mt-auto text-center ">
											<div class="text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-backward text-white"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-play text-white "></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-forward text-white"></i></a>
											</div>
										</div>
									</div>
									<a href="#" class="card-aside-column br-tr-7 br-br-7 w-50" style="background-image: url({{URL::asset('assets/images/photos/20.jpg')}})"></a>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">Employee card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<img src="{{URL::asset('assets/images/users/16.jpg')}}" class="avatar avatar-xxl brround" alt="">
										<h4 class="h4 mb-0 mt-3">James Thomas</h4>
										<p class="card-text">Web designer</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">Employee card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<img src="{{URL::asset('assets/images/users/10.jpg')}}" class="avatar avatar-xxl brround" alt="">
										<h4 class="h4 mb-0 mt-3">Rebacca Thomas</h4>
										<p class="card-text">Web designer</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">Employee card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<img src="{{URL::asset('assets/images/users/8.jpg')}}" class="avatar avatar-xxl brround" alt="">
										<h4 class="h4 mb-0 mt-3"> Thomas symson</h4>
										<p class="card-text">Web designer</p>
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