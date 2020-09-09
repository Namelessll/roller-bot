@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Blog</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog</li>
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
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top  " src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="img" ></a>
									<div class="card-body d-flex flex-column">
										<div class="d-flex align-items-center pb-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-dark ">Lilly jaims</a>
												<small class="d-block text-muted">10 min ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top " src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<div class="d-flex align-items-center pb-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-dark ">Rohn jaims</a>
												<small class="d-block text-muted">10 min ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top " src="{{URL::asset('assets/images/photos/10.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<div class="d-flex align-items-center pb-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-dark ">Rohn jaims</a>
												<small class="d-block text-muted">10 min ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-lg-6">
								<div class="card card-aside">
									<a href="#" class="card-aside-column br-tl-7 br-bl-7" style="background-image: url({{URL::asset('assets/images/photos/7.jpg')}})"></a>
									<div class="card-body d-flex flex-column">
										<div class="d-flex align-items-center mb-5">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-dark ">Thomos Scott</a>
												<small class="d-block text-muted">1 day ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
										<h4><a href="#">Publishing packages</a></h4>
										<div class="text-muted ">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<div class="card-body d-flex flex-column">
										<div class="d-flex align-items-center mb-5">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-dark ">Irene	Scott</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
										<h4><a href="#">Nihil molestaturrgt.</a></h4>
										<div class="text-muted ">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a>
									</div>
									<a href="#" class="card-aside-column br-br-7 br-tr-7" style="background-image: url({{URL::asset('assets/images/photos/8.jpg')}})"></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<a href="#" class="card-aside-column br-tl-7 br-bl-7" style="background-image: url({{URL::asset('assets/images/photos/2.jpg')}})"></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="#">Generator on the Internet..</a></h4>
										<div class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-dark ">Anna Ogden</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">Nihil molestiae consequatur.</a></h4>
										<div class="text-muted">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-dark ">Irene	Scott</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
									<a href="#" class="card-aside-column br-br-7 br-tr-7" style="background-image: url({{URL::asset('assets/images/photos/18.jpg')}})"></a>
								</div>
							</div>
							<div class="col-sm-6 col-xl-3">
								<div class="card">
									<a href="#"><img class="card-img-top " src="{{URL::asset('assets/images/photos/13.jpg')}}" alt="And this isn&#39;t my nose. This is a false one."></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-dark ">Megan Peters</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xl-3">
								<div class="card">
									<a href="#"><img class="card-img-top " src="{{URL::asset('assets/images/photos/14.jpg')}}" alt="Well, I didn&#39;t vote for you."></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-dark ">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xl-3">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas</a></h4>
										<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-dark ">Carol Paige</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
									<a href="#"><img class="card-img-top " src="{{URL::asset('assets/images/photos/15.jpg')}}" alt="How do you know she is a witch?"></a>
								</div>
							</div>
							<div class="col-sm-6 col-xl-3">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas..</a></h4>
										<div class="text-muted">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut ..</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-dark ">Fiona Hodges</a>
												<small class="d-block text-muted">5 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
											</div>
										</div>
									</div>
									<a href="#"><img class="card-img-top " src="{{URL::asset('assets/images/photos/16.jpg')}}" alt="Shut up!"></a>
								</div>
							</div>
						</div>
						<!-- End row-->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
@endsection