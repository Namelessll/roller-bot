@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Shopping Cart</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">E-commerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
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
							<div class="col-lg-12 col-md-12 col-sm-12 bootstrap snippets">
								<!-- Cart -->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Shopping Cart</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body ">
										<div class="table-responsive ">
											<table class="table table-bordered table-hover  text-nowrap">
												<thead class="border-top">
													<tr><th class="hidden-xs">Image</th>
														<th>Product Name</th>
														<th>Size</th>
														<th>Color</th>
														<th class="td-qty">Quantity</th>
														<th>Unit Price</th>
														<th>Sub Total</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="hidden-xs">
															<a href="#">
																<img src="{{URL::asset('assets/images/products/1.png')}}" alt="Metal Watch" title="" width="47" height="47">
															</a>
														</td>
														<td><a href="#">Office Chair</a>
														</td>

														<td>
															<div class="input-group bootstrap-touchspin">
																<span class="input-group-btn">
																	<button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button>
																</span>
																<span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
																<input type="text" name="product" value="1" class="input-qty form-control text-center" style="display: block;">
																<span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
																<span class="input-group-btn">
																	<button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button>
																</span>
															</div>
														</td>
														<td class="price">$ 122.21</td>
														<td>$ 122.21</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
																<i class="fa fa-trash-o" ></i>
															</a>
														</td>
														<td>$ 122.21</td>
													</tr>
													<tr>
														<td class="hidden-xs">
															<a href="#">
																<img src="{{URL::asset('assets/images/products/8.png')}}" alt="Model Ladies footwear" title="" width="47" height="47">
															</a>
														</td>
														<td><a href="#">Sports Shooe</a>
														</td>

														<td>
															<div class="input-group bootstrap-touchspin">
																<span class="input-group-btn">
																	<button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button>
																</span>
																<span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
																<input type="text" name="product" value="2" class="input-qty form-control text-center" style="display: block;">
																<span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
																<span class="input-group-btn">
																	<button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button>
																</span>
															</div>
														</td>
														<td class="price">$ 20.63</td>
														<td>$ 41.26</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
														<td>$ 41.26</td>
													</tr>
													<tr>
														<td class="hidden-xs">
															<a href="#">
																<img src="{{URL::asset('assets/images/products/9.png')}}" alt="Men Footwear" title="" width="47" height="47">
															</a>
														</td>
														<td><a href="#">Mobile</a>
														</td>

														<td>
															<div class="input-group bootstrap-touchspin">
																<span class="input-group-btn">
																	<button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button>
																</span>
																<span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
																<input type="text" name="product" value="1" class="input-qty form-control text-center" style="display: block;">
																<span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
																<span class="input-group-btn">
																	<button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button>
																</span>
															</div>
														</td>
														<td class="price">$ 40.63</td>
														<td>$ 40.63</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
														<td>$ 40.63</td>
													</tr>
													<tr>
														<td class="hidden-xs">
															<a href="#">
																<img src="{{URL::asset('assets/images/products/4.png')}}" alt="Fast Track Watch" title="" width="47" height="47">
															</a>
														</td>
														<td><a href="#">Leather Hand Bag</a>
														</td>

														<td>
															<div class="input-group bootstrap-touchspin">
																<span class="input-group-btn">
																	<button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button>
																</span>
																<span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
																<input type="text" name="product" value="1" class="input-qty form-control text-center" style="display: block;">
																<span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
																<span class="input-group-btn">
																	<button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button>
																</span>
															</div>
														</td>
														<td class="price">$ 60.63</td>
														<td>$ 60.63</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
														<td>$ 60.63</td>
													</tr>
													<tr>
														<td class="hidden-xs">
															<a href="#">
																<img src="{{URL::asset('assets/images/products/6.png')}}" alt="Nike Men Footwear" title="" width="47" height="47">
															</a>
														</td>
														<td><a href="#">Computer</a>
														</td>

														<td>
															<div class="input-group bootstrap-touchspin">
																<span class="input-group-btn">
																	<button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button>
																</span>
																<span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
																<input type="text" name="product" value="1" class="input-qty form-control text-center" style="display: block;">
																<span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
																<span class="input-group-btn">
																	<button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button>
																</span>
															</div>
														</td>
														<td class="price">$ 63,830.43</td>
														<td>$45,530.43</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
																<i class="fa fa-trash-o"></i>
															</a>
														</td>
														<td>$45,530.43</td>
													</tr>
													<tr>
														<td colspan="6" >Total</td>
														<td class="total font-weight-bold" >$45,795.16</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="float-left mt-2">
											<div class="row">
												<div class="col-8"><input class="productcart form-control" type="text" placeholder="Apply Coupon Code"></div>
												<div class="col-4"><a href="#" class="btn btn-primary btn-md">Apply</a></div>
											</div>
										</div>
										<div class=" float-right">
											<a href="shop.html" class="btn btn-info mt-2"><i class="fa fa-arrow-circle-left"></i> Continue Shopping</a>
											<a href="cart.html" class="btn btn-primary mt-2">Update Cart</a>
											<a href="#" class="btn btn-secondary mt-2">Checkout <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- End Cart -->
							</div>
						</div>
						<!-- End Row-->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
@endsection