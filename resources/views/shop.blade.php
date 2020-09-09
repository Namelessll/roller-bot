@extends('layouts.master')
@section('css')
<!-- Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Products</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">E-commerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Products</li>
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
							<div class="col-lg-9">
								<div class="row">
									<div class="col-lg-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/7.png')}}" alt="img" class="img-fluid">
												</div>
												<div class="card-body cardbody">
													<div class="cardtitle">
														<span>Garden</span>
														<a>Flowerwise pot</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough">$892</span>
														<span>$692</span>
													</div>
												</div>
											</div>
											<div class="text-center border-top">
												<a href="shop-des.html" class="btn btn-primary btn-sm mt-4 mb-4"><i class="fa fa-eye"></i> View More</a>
												<a href="cart.html" class="btn btn-secondary btn-sm mt-4 mb-4"><i class="fa fa-shopping-cart"></i> Add to cart</a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/1.png')}}" alt="img" class="img-fluid">
												</div>
												<div class="card-body cardbody ">
													<div class="cardtitle">
														<span>Furniture</span>
														<a>Offie Chair</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough">$1,457</span>
														<span>$986</span>
													</div>
												</div>
											</div>
											<div class="text-center border-top">
												<a href="shop-des.html" class="btn btn-primary btn-sm mt-4 mb-4"><i class="fa fa-eye"></i> View More</a>
												<a href="cart.html" class="btn btn-secondary btn-sm mt-4 mb-4"><i class="fa fa-shopping-cart"></i> Add to cart</a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/9.png')}}" alt="img" class="img-fluid">
												</div>
												<div class="card-body cardbody">
													<div class="cardtitle">
														<span>Electronics</span>
														<a>Mobile</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough">$18,967</span>
														<span>$12,724</span>
													</div>
												</div>
											</div>
											<div class="text-center border-top">
												<a href="shop-des.html" class="btn btn-primary btn-sm mt-4 mb-4"><i class="fa fa-eye"></i> View More</a>
												<a href="cart.html" class="btn btn-secondary btn-sm mt-4 mb-4"><i class="fa fa-shopping-cart"></i> Add to cart</a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/2.png')}}" alt="img" class="img-fluid">
												</div>
												<div class="card-body cardbody">
													<div class="cardtitle">
														<span>Clothes</span>
														<a>Men's T-shirt</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough">$720</span>
														<span>$538</span>
													</div>
												</div>
											</div>
											<div class="text-center border-top">
												<a href="shop-des.html" class="btn btn-primary btn-sm mt-4 mb-4"><i class="fa fa-eye"></i> View More</a>
												<a href="cart.html" class="btn btn-secondary btn-sm mt-4 mb-4"><i class="fa fa-shopping-cart"></i> Add to cart</a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/4.png')}}" alt="img" class="img-fluid">
												</div>
												<div class="card-body cardbody">
													<div class="cardtitle">
														<span>Accessories</span>
														<a>Handbag</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough">$1,285</span>
														<span>$938</span>
													</div>
												</div>
											</div>
											<div class="text-center border-top">
												<a href="shop-des.html" class="btn btn-primary btn-sm mt-4 mb-4"><i class="fa fa-eye"></i> View More</a>
												<a href="cart.html" class="btn btn-secondary btn-sm mt-4 mb-4"><i class="fa fa-shopping-cart"></i> Add to cart</a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/8.png')}}" alt="img" class="img-fluid">
												</div>
												<div class="card-body cardbody">
													<div class="cardtitle">
														<span>Fashion</span>
														<a>Sports Shooes</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough">$1,678</span>
														<span>$1,346</span>
													</div>
												</div>
											</div>
											<div class="text-center border-top">
												<a href="shop-des.html" class="btn btn-primary btn-sm mt-4 mb-4"><i class="fa fa-eye"></i> View More</a>
												<a href="cart.html" class="btn btn-secondary btn-sm mt-4 mb-4"><i class="fa fa-shopping-cart"></i> Add to cart</a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card item-card ">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/3.png')}}" alt="img" class="img-fluid">
												</div>
												<div class="card-body cardbody">
													<div class="cardtitle">
														<span>Accessories</span>
														<a>Leather Watch</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough">$2,498</span>
														<span>$1,967</span>
													</div>
												</div>
											</div>
											<div class="text-center border-top">
												<a href="shop-des.html" class="btn btn-primary btn-sm mt-4 mb-4"><i class="fa fa-eye"></i> View More</a>
												<a href="cart.html" class="btn btn-secondary btn-sm mt-4 mb-4"><i class="fa fa-shopping-cart"></i> Add to cart</a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/5.png')}}" alt="img" class="img-fluid">
												</div>
												<div class="card-body cardbody">
													<div class="cardtitle">
														<span>Kids wear</span>
														<a>Frock</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough">$2,678</span>
														<span>$1,489</span>
													</div>
												</div>
											</div>
											<div class="text-center border-top">
												<a href="shop-des.html" class="btn btn-primary btn-sm mt-4 mb-4"><i class="fa fa-eye"></i> View More</a>
												<a href="cart.html" class="btn btn-secondary btn-sm mt-4 mb-4"><i class="fa fa-shopping-cart"></i> Add to cart</a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="text-center">
													<img src="{{URL::asset('assets/images/products/6.png')}}" alt="img" class="img-fluid">
												</div>
												<div class="card-body cardbody">
													<div class="cardtitle">
														<span>Electronics</span>
														<a>Desktop computer</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough">$34,897</span>
														<span>$29,145</span>
													</div>
												</div>
											</div>
											<div class="text-center border-top">
												<a href="shop-des.html" class="btn btn-primary btn-sm mt-4 mb-4"><i class="fa fa-eye"></i> View More</a>
												<a href="cart.html" class="btn btn-secondary btn-sm mt-4 mb-4"><i class="fa fa-shopping-cart"></i> Add to cart</a>
											</div>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-end">
									<ul class="pagination mb-5">
										<li class="disabled page-item">
											<a class="page-link" href="#">‹</a>
										</li>
										<li class="active page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">4</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">5</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">›</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="row">
									<div class="col-md-12 col-lg-12">
										<form>
											<div class="card">
												<div class="row card-body p-3">
													<div class="col-sm-12 p-0">
														<div class="input-group">
															<input type="text" class="form-control" placeholder="Search ...">
															<span class="input-group-append">
																<button class="btn btn-primary" type="button">Search</button>
															</span>
														</div>
													</div>
												</div>
											</div>
										</form>
										<form class="shop__filter card">
											<div class="card-header">
												<h3 class="card-title">
													Colors
												</h3>
											</div>
											<div class="card-body">
												<div class="row gutters-xs">
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="azure" class="colorinput-input" checked="">
															<span class="colorinput-color bg-azure"></span>
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
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="red" class="colorinput-input">
															<span class="colorinput-color bg-red"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="orange" class="colorinput-input">
															<span class="colorinput-color bg-orange"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="yellow" class="colorinput-input">
															<span class="colorinput-color bg-yellow"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="lime" class="colorinput-input">
															<span class="colorinput-color bg-lime"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="green" class="colorinput-input">
															<span class="colorinput-color bg-green"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="teal" class="colorinput-input">
															<span class="colorinput-color bg-teal"></span>
														</label>
													</div>
												</div>
											</div>
										</form>
										<div class="card">
											<div class="card-header">
												<div class="card-title"> Categories</div>
											</div>
											<div class="card-body">
												<div class="form-group">
													<label class="form-label">Mens</label>
													<select name="beast" id="select-beast" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Foot wear</option>
														<option value="2">Top wear</option>
														<option value="3">Bootom wear</option>
														<option value="4">Men's Groming</option>
														<option value="5">Accessories</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Women</label>
													<select name="beast" id="select-beast1" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Western wear</option>
														<option value="2">Foot wear</option>
														<option value="3">Top wear</option>
														<option value="4">Bootom wear</option>
														<option value="5">Beuty Groming</option>
														<option value="6">Accessories</option>
														<option value="7">jewellery</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Baby & Kids</label>
													<select name="beast" id="select-beast2" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Boys clothing</option>
														<option value="2">girls Clothing</option>
														<option value="3">Toys</option>
														<option value="4">Baby Care</option>
														<option value="5">Kids footwear</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Electronics</label>
													<select name="beast" id="select-beast3" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Mobiles</option>
														<option value="2">Laptops</option>
														<option value="3">Gaming & Accessories</option>
														<option value="4">Health care Appliances</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Sport,Books & More </label>
													<select name="beast" id="select-beast4" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Stationery</option>
														<option value="2">Books</option>
														<option value="3">Gaming</option>
														<option value="4">Music</option>
														<option value="5">Exercise & fitness</option>
													</select>
												</div>
											</div>
										</div>

										<!-- Filter -->
										<form class="shop__filter card">
											<div class="card-header">
												<h3 class="card-title">
													Price
												</h3>
											</div>
											<div class="card-body">
												<div class="radio">
													<input type="radio" name="shop-filter__price" id="shop-filter-price_1" value="" checked="">
													<label for="shop-filter-price_1">Under $25</label>
												</div>
												<div class="radio">
													<input type="radio" name="shop-filter__price" id="shop-filter-price_2" value="">
													<label for="shop-filter-price_2">$25 to $50</label>
												</div>
												<div class="radio">
													<input type="radio" name="shop-filter__price" id="shop-filter-price_3" value="">
													<label for="shop-filter-price_3">$50 to $100</label>
												</div>
												<div class="radio">
													<input type="radio" name="shop-filter__price" id="shop-filter-price_4" value="specify">
													<label for="shop-filter-price_4">Other (specify)</label>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- End  Row -->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!--Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection