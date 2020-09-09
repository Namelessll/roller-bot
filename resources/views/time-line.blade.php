@extends('layouts.master')
@section('css')
<!-- Timeline css-->
<link href="{{URL::asset('assets/plugins/timeline/css/timelify.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">TimeLine</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">TimeLine</li>
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
								<div>
									<div class="card-body">
										<div class="timeline">
											<h2>2016</h2>
											<ul class="timeline-items">
												<li class="is-hidden timeline-item"> <!-- Normal block, positionned to the left -->
													<h3>Lorem ipsum dolor sit amet</h3>
													<hr>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga iste magni maxime</p>
													<hr>
													<p class="time">May 2016</p>
												</li>
											</ul>
											<h2>2017</h2>
											<ul class="timeline-items">
												<li class="is-hidden timeline-item inverted"> <!-- Normal block, positionned to the right  -->
													<h3>Lorem ipsum dolor sit amet</h3>
													<hr>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga iste magni maxime</p>
													<hr>
													<p class="time">March 2017</p>
												</li>
												<li class="is-hidden timeline-item centered"> <!-- Centered block, positionned in the middle -->
													<h3>Lorem ipsum dolor sit amet</h3>
													<hr>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aspernatur commodi consequuntur corporis dicta, distinctio enim eos expedita, id iste laborum maxime nesciunt quaerat sed temporibus veniam vero voluptatem.</p>

													<hr>
													<p class="time">May 2017</p>
												</li>

											</ul>
											<h2>2018</h2>
											<ul class="timeline-items">
												<li class="is-hidden timeline-item">
													<h3>Lorem ipsum dolor sit amet</h3>
													<hr>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga iste magni maxime</p>
													<hr>
													<p class="time">May 2018</p>
												</li>
												<li class="is-hidden timeline-item inverted">
													<h3>Lorem ipsum dolor sit amet</h3>
													<hr>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga iste magni maxime</p>
													<hr>
													<p class="time">August 2018</p>
												</li>
											</ul>
											<h2>2019</h2>
											<ul class="timeline-items">
												<li class="is-hidden timeline-item">
													<h3>Welcome to future</h3>
													<hr>
													<iframe class="w-100 border-0" height="315" src="https://www.youtube.com/embed/f3NWvUV8MD8"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
													<hr>
													<p class="time"> 21 March 2019</p>
												</li>
												<li class="is-hidden timeline-item inverted">
													<h3>Lorem ipsum dolor sit amet</h3>
													<hr>
													<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="">
													<hr>
													<p class="time">10 Apr 2019</p>
												</li>
												<li class="is-hidden timeline-item centered">
													<h3>Lorem ipsum dolor sit amet</h3>
													<hr>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga iste magni maxime</p>
													<hr>
													<p class="time">12 May 2019</p>
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
<!-- Timeline js -->
<script src="{{URL::asset('assets/plugins/timeline/js/jquery.timelify.js')}}"></script>
<script src="{{URL::asset('assets/js/timeline.js')}}"></script>
@endsection