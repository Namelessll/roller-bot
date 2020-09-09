@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Product Details</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">E-commerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Product Details</li>
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
							<div class="col-md-12 wrapper wrapper-content animated fadeInRight">
								<div class="ibox card">
									 <div class="card-header">
										<h3 class="card-title">Items in your cart</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="ibox-content">
											<div class="row">
												<div class="col-md-12 col-lg-5">
													<div class="cart-product-imitation bg-gray">
														<img src="{{URL::asset('assets/images/products/8.png')}}" alt="">
													</div>
												</div>
												<div class="col-md-12 col-lg-7">
													<div class="card-body p-5">
														<h3>
														<a href="#" class="text-navy">
															Sports Shoes
														</a>
														</h3>
														<p class="small">
															It is a long established fact that a reader will be distracted by the readable
															content of a page when looking at its layout. The point of using Lorem Ipsum is
														</p>
														<dl class="small m-b-none">
															<dt>Description lists</dt>
															<dd>A description list is perfect for defining terms.I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,
															the master-builder of human happiness There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't on the Internet tend to repeat predefined chunks as necessary</dd>
														</dl>
														<h4>$124</h4>
														<a href="" class="mt-2 btn btn-sm btn-pill btn-primary">Buy Now</a>
														<a href="" class="mt-2 btn btn-sm btn-pill btn-outline-secondary">Add to cart</a>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group m-0">
											<label class="form-label">Select Color</label>
											<div class="row gutters-xs">
												<div class="col-auto">
													<label class="colorinput">
														<input name="color" type="radio" value="red" class="colorinput-input" checked="">
														<span class="colorinput-color bg-red"></span>
													</label>
												</div>
												<div class="col-auto">
													<label class="colorinput">
														<input name="color" type="radio" value="indigo" class="colorinput-input">
														<span class="colorinput-color bg-indigo"></span>
													</label>
												</div>
												<div class="col-auto">
													<label class="colorinput">
														<input name="color" type="radio" value="purple" class="colorinput-input">
														<span class="colorinput-color bg-purple"></span>
													</label>
												</div>
												<div class="col-auto">
													<label class="colorinput">
														<input name="color" type="radio" value="pink" class="colorinput-input">
														<span class="colorinput-color bg-pink"></span>
													</label>
												</div>
											</div>
										</div>
										<h6 class="mt-6 font-weight-semibold">Product Details</h6>
										<table class="table table-striped table-bordered m-top20">
											<tbody>
												<tr>
													<th scope="row">Model:</th>
													<td>Model 2.3</td>
												</tr>
												<tr>
													<th scope="row">color:</th>
													<td>red</td>
												</tr>
												<tr>
													<th scope="row">features</th>
													<td>New Model ,High heals</td>
												</tr>
												<tr>
													<th scope="row">Advanced</th>
													<td>Feel Comfortability </td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="ibox-content card-footer text-right">
										<a href="shop.html" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
										<a href="cart.html" class="btn btn-primary"><i class="fa fa fa-shopping-cart"></i> Add to Cart</a>
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