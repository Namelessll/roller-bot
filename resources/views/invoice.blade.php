@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Invoice</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Invoice</li>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">#INV-287</h3>
									</div>
									<div class="card-body">
										<div class="">
											<h4 class="mb-1">Hi <strong>Jessica Allen</strong>,</h4>
											This is the receipt for a payment of <strong>$450.00</strong> (USD) for your works
										</div>

										<div class="card-body pl-0 pr-0">
											<div class="row">
												<div class="col-sm-6">
													<span>Payment No.</span><br>
													<strong>INV23456-234</strong>
												</div>
												<div class="col-sm-6 text-right">
													<span>Payment Date</span><br>
													<strong>Aug 10, 2019 - 12:20 pm</strong>
												</div>
											</div>
										</div>
										<div class="dropdown-divider"></div>
										<div class="row pt-4">
											<div class="col-lg-6 ">
												<p class="h3">Client Inc</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													ltd@example.com
												</address>
											</div>
											<div class="col-lg-6 text-right">
												<p class="h3">Invoice To</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													ctr@example.com
												</address>
											</div>
										</div>
										<div class="table-responsive push">
											<table class="table table-bordered table-hover">
												<tr class=" ">
													<th class="text-center " style="width: 1%"></th>
													<th>Product</th>
													<th class="text-center" style="width: 1%">Qnt</th>
													<th class="text-right" style="width: 1%">Unit</th>
													<th class="text-right" style="width: 1%">Amount</th>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td>
														<p class="font-w600 mb-1">Logo Creation</p>
														<div class="text-muted">Logo and business cards design</div>
													</td>
													<td class="text-center">2</td>
													<td class="text-right">$60.00</td>
													<td class="text-right">$120.00</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>
														<p class="font-w600 mb-1">Online Store Design &amp; Development</p>
														<div class="text-muted">Design/Development for all popular modern browsers</div>
													</td>
													<td class="text-center">3</td>
													<td class="text-right">$80.00</td>
													<td class="text-right">$240.00</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>
														<p class="font-w600 mb-1">App Design</p>
														<div class="text-muted">Promotional mobile application</div>
													</td>
													<td class="text-center">1</td>
													<td class="text-right">$40.00</td>
													<td class="text-right">$40.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-w600 text-right">Subtotal</td>
													<td class="text-right">$400.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-w600 text-right">Vat Rate</td>
													<td class="text-right">20%</td>
												</tr>
												<tr>
													<td colspan="4" class="font-w600 text-right">Vat Due</td>
													<td class="text-right">$50.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-bold text-uppercase text-right">Total Due</td>
													<td class="font-weight-bold text-right">$450.00</td>
												</tr>
												<tr>
													<td colspan="5" class="text-right">
														<button type="button" class="btn btn-primary" onClick="javascript:window.print();"><i class="si si-wallet"></i> Pay Invoice</button>
														<button type="button" class="btn btn-secondary" onClick="javascript:window.print();"><i class="si si-paper-plane"></i> Send Invoice</button>
														<button type="button" class="btn btn-info" onClick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
													</td>
												</tr>
											</table>
										</div>
										<p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
									</div>
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