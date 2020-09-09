@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Pricing</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Pricing</li>
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
						<div class="row text-center">
							<div class="col-lg-3">
								<div class="card plan-card">
									<div class="card-block">
										<div class="pt-4 pb-4">
											<h1><i class="fa fa-plane plan-icon bg-primary"></i></h1>
											<h6 class="text-uppercase font-weight-semibold text-primary">Starter Pack</h6>
										</div>
										<div>
											<h1 class="plan-price padding-b-15 display-4 mb-0">$19<span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
											<div class="plan-div-border"></div>
										</div>
										<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
											<p><strong>2 </strong> FreeDomain Name</p>
											<p><strong>2</strong> One-Click Apps</p>
											<p><strong>1</strong>  Databases</p>
											<p><strong>Money</strong> BackGuarntee</p>
											<p><strong>24/7</strong> Support</p>
											<a href="#" class="btn btn-primary mt-4">Sign Up Now</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="card plan-card">
									<div class="card-block">
										<div class="pt-4 pb-4">
											<h1><i class="fa fa-trophy plan-icon bg-info"></i></h1>
											<h6 class="text-uppercase font-weight-semibold text-info">Professional Pack</h6>
										</div>
										<div>
											<h1 class="plan-price padding-b-15 display-4 mb-0">$29<span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
											<div class="plan-div-border"></div>
										</div>
										<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
											<p><strong>3 </strong> FreeDomain Name</p>
											<p><strong>5</strong> One-Click Apps</p>
											<p><strong>3</strong>  Databases</p>
											<p><strong>Money</strong> BackGuarntee</p>
											<p><strong>24/7</strong> Support</p>
											<a href="#" class="btn btn-info mt-4">Sign Up Now</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="card plan-card">
									<div class="card-block">
										<div class="pt-4 pb-4">
											<h1><i class="fa fa-umbrella plan-icon bg-pink"></i></h1>
											<h6 class="text-uppercase font-weight-semibold text-pink">Enterprise Pack</h6>
										</div>
										<div>
											<h1 class="plan-price padding-b-15 display-4 mb-0">$39<span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
											<div class="plan-div-border"></div>
										</div>
										<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
											<p><strong>10 </strong> FreeDomain Name</p>
											<p><strong>10</strong> One-Click Apps</p>
											<p><strong>8</strong>  Databases</p>
											<p><strong>Money</strong> BackGuarntee</p>
											<p><strong>24/7</strong> Support</p>
											<a href="#" class="btn btn-pink mt-4">Sign Up Now</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="card plan-card">
									<div class="card-block">
										<div class="pt-4 pb-4">
											<h1><i class="fa fa-cube plan-icon bg-teal"></i></h1>
											<h6 class="text-uppercase font-weight-semibold text-teal">Unlimited Pack</h6>
										</div>
										<div>
											<h1 class="plan-price padding-b-15 display-4 mb-0">$49<span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
											<div class="plan-div-border"></div>
										</div>
										<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
											<p><strong>12 </strong> FreeDomain Name</p>
											<p><strong>10</strong> One-Click Apps</p>
											<p><strong>6</strong>  Databases</p>
											<p><strong>Money</strong> BackGuarntee</p>
											<p><strong>24/7</strong> Support</p>
											<a href="#" class="btn btn-teal mt-4">Sign Up Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center pricing bg-primary">
										<div class="card-category">Basic</div>
										<div class="display-3 my-4">$10</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>2 </strong> FreeDomain Name</li>
											<li><strong>2</strong> One-Click Apps</li>
											<li><strong>1</strong>  Databases</li>
											<li><strong>Money</strong> BackGuarntee</li>
											<li><strong>24/7</strong> Support</li>
										</ul>
										<div class="text-center mt-5">
											<a href="#" class="btn btn-white btn-block">Buy Now</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center  pricing bg-primary ">
										<div class="card-category">Premium</div>
										<div class="display-3 my-4">$49</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>3 </strong> FreeDomain Name</li>
											<li><strong>5</strong> One-Click Apps</li>
											<li><strong>3</strong>  Databases</li>
											<li><strong>Money</strong> BackGuarntee</li>
											<li><strong>24/7</strong> Support</li>
										</ul>
										<div class="text-center mt-5">
											<a href="#" class="btn btn-white btn-block">Buy Now</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center pricing bg-secondary">
										<div class="card-category">Enterprise</div>
										<div class="display-3 my-4">$99</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>10 </strong> FreeDomain Name</li>
											<li><strong>10</strong> One-Click Apps</li>
											<li><strong>8</strong>  Databases</li>
											<li><strong>Money</strong> BackGuarntee</li>
											<li><strong>24/7</strong> Support</li>
										</ul>
										<div class="text-center mt-5">
											<a href="#" class="btn btn-white btn-block">Buy Now</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center  pricing bg-primary ">
										<div class="card-category">Unlimited</div>
										<div class="display-3 my-4">$139</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>12 </strong> FreeDomain Name</li>
											<li><strong>10</strong> One-Click Apps</li>
											<li><strong>6</strong>  Databases</li>
											<li><strong>Money</strong> BackGuarntee</li>
											<li><strong>24/7</strong> Support</li>
										</ul>
										<div class="text-center mt-5">
											<a href="#" class="btn btn-white btn-block">Buy Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#2d66f7" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Personal</text>
										</svg>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$15 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 2 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>3 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 1 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-right-0 border-left-0">
										<a class="btn btn-lg btn-primary btn-block" href="#">Purchase Now!</a>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#fdb901" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Premium</text>
										</svg>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$25 /</strong> month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 3 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>4 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-right-0 border-left-0">
										<a class="btn btn-lg btn-warning btn-block" href="#">Purchase Now!</a>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#28afd0" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Corporate</text>
										</svg>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$35 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 4 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>6 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-right-0 border-left-0">
										<a class="btn btn-lg btn-info btn-block" href="#">Purchase Now!</a>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-lg-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#f72d66" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Business</text>
										</svg>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$99 /</strong> month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 5 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>8 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-right-0 border-left-0">
										<a class="btn btn-lg btn-secondary btn-block" href="#">Purchase Now!</a>
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