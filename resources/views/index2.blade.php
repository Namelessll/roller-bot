@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Dashboard</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard 02</li>
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
							<div class="col-xl-7 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Overview  Leads This month</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row ">
											<div class="col-md-4  text-left mb-4">
												<p class=" mb-0 ">Today Leads</p>
												<h3 class="mb-0">67<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.9%</span>last month</span></h3>
											</div>
											<div class="col-md-4  text-left mb-4">
												<p class=" mb-0 ">This month Leads</p>
												<h3 class="mb-0">1,367<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.9%</span>last month</span></h3>
											</div>
											<div class="col-md-4  text-left mb-4">
												<p class=" mb-0 ">Web Users(this month)</p>
												<h3 class="mb-0">14,789<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.9%</span>last month</span></h3>
											</div>
										</div>
										<div>
											<canvas id="leads" class="chartsh"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-md-12 col-lg-12">
								<div class="card">
									<div class="p-3">
										<h3 class="card-title mb-3">Key Conversion Metrics</h3>
										<div class="row widget-text">
											<div class="col-4">
												<h3 class="mb-0">8.56%</h3>
												<span class=" mb-0 fs-12 text-muted">Web User to Lead</span>
											</div>
											<div class="col-4 ">
												<h3 class="mb-0">36.12%</h3>
												<span class=" mb-0 fs-12 text-muted">Lead to Trial</span>
											</div>
											<div class="col-4 ">
												<h3 class="mb-0">9.74%</h3>
												<span class=" mb-0 fs-12 text-muted">Web User to Trial</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Lead Breakdown This Month</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="row mr-0 ml-0">
											<div class="col-md-12 border-bottom pr-0 pl-0">
												<div class="p-4">
													<div class="d-flex mb-2">
														<h3 class="mb-0">2,789</h3>
														<span class="fs-18 text-muted ml-auto">Trials</span>
													</div>
													<div class="row">
														<div class="col">
															<p class=" mb-0 ">Trials</p>
															<h4 class="mb-0">58%<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>0.9%</span>last month</span></h4>
														</div>
														<div class="col text-right">
															<div class="">
																<span class="sparkline_bar21"></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12 pr-0 pl-0">
												<div class="p-4">
													<div class="d-flex mb-2">
														<h3 class="mb-0">5,982</h3>
														<span class="fs-18 text-muted ml-auto">Leads</span>
													</div>
													<div class="row">
														<div class="col">
															<p class=" mb-0 ">Non-Trials</p>
															<h4 class="mb-0">63%<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>0.9%</span>last month</span></h4>
														</div>
														<div class="col text-right">
															<div class="">
																<span class="sparkline_bar22"></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex mb-1">
											<div class="">
												<h2 class="mb-0">$67,895</h2>
												<p class=" mb-0">Marketing Spend</p>
											</div>
											<div class="ml-auto">
												<img src="{{URL::asset('assets/images/photos/market.png')}}"  class="w-6" alt="img">
											</div>
										</div>
										<p class="mb-3 text-muted fs-12">It is a long established fact that a reader will be distracted by the .</p>
										<div id="echart1" class="chartwidget"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="widget text-center">
											<p class="mb-0">New Sessions(Avg)</p>
											<h2 class="text-primary mb-0">82.12%</h2>
											<span class="mb-0 text-muted "><i class="fa fa-caret-up text-success mr-1"></i> +2.56% vs last month (79.56%)</span>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="widget text-center">
											<p class="mb-0">Time On site(Avg)</p>
											<h2 class="text-danger mb-0">3m:40s</h2>
											<span class="mb-0 text-muted "><i class="fa fa-caret-down text-danger mr-1"></i> -0:50s vs last month (4m:30s)</span>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="widget text-center">
											<p class="mb-0">Page Views(Avg)</p>
											<h2 class="text-warning mb-0">5.12</h2>
											<span class="mb-0 text-muted "><i class="fa fa-caret-up text-success mr-1"></i>  1.12s vs last month (4m:30s)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-12 col-md-12">
								<div class="card">
									<div class="p-3">
										<h3 class="card-title mb-3">Today Quality of Trial Leads</h3>
										<div class="row widget-text">
											<div class="col-4">
												<h3 class="mb-0">3.78%</h3>
												<span class=" mb-0 text-muted fs-12">Active Trials</span>
											</div>
											<div class="col-4">
												<h3 class="mb-0">16.02%</h3>
												<span class=" mb-0 text-muted fs-12">High Demographic</span>
											</div>
											<div class="col-4">
												<h3 class="mb-0">1.63%</h3>
												<span class=" mb-0 text-muted fs-12">Working Sales</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-8">
												<span class=" mb-1">Campaign Budget</span>
												<h3 class="mb-3">$23,897<span class="fs-12 text-danger ml-1">last 6 months</span></h3>
												<p class="mb-0 fs-12 text-muted">It is a long established fact that a reader long established fact that a reader long established  will be distracted by the readable content of a page when looking at its layout.</p>
											</div>
											<div class="col-md-4 mt-4 mt-sm-0">
												<div class="chart-circle overflow-hiddene  mt-sm-0 mb-0 text-left" data-value="0.33" data-thickness="5" data-color="#f7be2d">
													<div class="chart-circle-value text-center "><h1 class="mb-0">$1350</h1><small>Campaign</small></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="p-3">
										<h3 class="card-title mb-2">Marketing Performance</h3>
										<div class="row">
											<div class="col-4 border-right">
												<p class=" mb-0 fs-12  text-muted">Acquisitions</p>
												<h3 class="mb-0">569</h3>
											</div>
											<div class="col-4 border-right ">
												<p class=" mb-0 fs-12 text-muted">Clicks</p>
												<h3 class="mb-0">67,895</h3>
											</div>
											<div class="col-4">
												<p class=" mb-0  fs-12 text-muted">Cost per Clicks</p>
												<h3 class="mb-0">$4.78</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="row mr-0 ml-0">
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<p class="mb-1">Visits</p>
									            <h2 class="mb-1">3,56,667</h2>
												<span class="mb-0 text-muted"><span class="text-success"><i class="fa fa-caret-up  mr-1"></i> 0.7%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<p class="mb-1">Avg visit Duration</p>
									            <h2 class="mb-1">39Sec</h2>
									            <span class="mb-0 text-muted"><span class="text-success"><i class="fa fa-caret-up  mr-1"></i> 0.26%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<p class="mb-1">Page Views</p>
									            <h2 class="mb-1">5,987</h2>
									            <span class="mb-0 text-muted"><span class="text-danger"><i class="fa fa-caret-down  mr-1"></i> 12%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<p class="mb-1">Bounce Rate</p>
									            <h2 class="mb-1">35.8%</h2>
									            <span class="mb-0 text-muted"><span class="text-success"><i class="fa fa-caret-up  mr-1"></i> 0.2%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<p class="mb-1">Pages per Visit</p>
									            <h2 class="mb-1">2.89</h2>
									            <span class="mb-0 text-muted"><span class="text-danger"><i class="fa fa-caret-down  mr-1"></i> 1.2%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0">
											<div class="card-body text-center">
												<p class="mb-1">Goal Conversion</p>
									            <h2 class="mb-1">12.7%</h2>
									            <span class="mb-0 text-muted"><span class="text-danger"><i class="fa fa-caret-down  mr-1"></i> 0.6%</span> Last month</span>
									        </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title">Marketing Values</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="mb-0">
										<div class="table-responsive">
											<table class="table  table-bordered border-left-0 border-right-0 text-nowrap border-bottom-0 mb-0">
												<thead>
													<tr>
														<th>NO</th>
														<th>ICON</th>
														<th>Currency</th>
														<th>Price</th>
														<th>Market Cap</th>
														<th>Volume 1D</th>
														<th>Change % (1D)</th>
														<th>Change % (1W)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/bitcoin.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Bitcoin</td>
														<td>$1.67</td>
														<td>$61,191,183,730</td>
														<td>$10,133,400,000</td>
														<td><span class="btn btn-sm btn-primary"><i class="fe fe-chevron-up"></i> 17.66%</span></td>
														<td><span class="btn btn-sm btn-secondary"><i class="fe fe-chevron-down"></i> -15.25%</span></td>

													</tr>
													<tr>
														<td>2</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/dash.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Dash</td>
														<td>$865.25</td>
														<td>$6,778,308,110</td>
														<td>$193,430,000</td>
														<td><span class="btn btn-sm  btn-primary"><i class="fe fe-chevron-up"></i> 30.80%</span></td>
														<td><span class="btn btn-sm btn-secondary"><i class="fe fe-chevron-down"></i> -16.40%</span></td>
													</tr>
													<tr>
														<td>3</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/euro.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Euro</td>
														<td>$0.70</td>
														<td>$17,633,890,043</td>
														<td>$1,677,430,000</td>
														<td><span class="btn btn-sm  btn-primary"><i class="fe fe-chevron-up"></i> 40.79%</span></td>
														<td><span class="btn btn-sm btn-secondary"><i class="fe fe-chevron-down"></i> -5.81%</span></td>
													</tr>
													<tr>
														<td>3</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/qtum.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Qtum</td>
														<td>$1.67</td>
														<td>$61,191,183,730</td>
														<td>$10,133,400,000</td>
														<td><span class="btn btn-sm  btn-primary"><i class="fe fe-chevron-up"></i> 17.66%</span></td>
														<td><span class="btn btn-sm btn-secondary"><i class="fe fe-chevron-down"></i> -15.25%</span></td>
													</tr>
													<tr>
														<td>4</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/ripple.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Ripple</td>
														<td>$11,723.48</td>
														<td>$179,078,267,295</td>
														<td>$17,959,900,000</td>
														<td><span class="btn btn-sm  btn-primary"><i class="fe fe-chevron-up"></i> 66.26%</span></td>
														<td><span class="btn btn-sm btn-secondary"><i class="fe fe-chevron-down"></i> -16.48%</span></td>
													</tr>
													<tr>
														<td>5</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/stellar.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Stellar</td>
														<td>$149.18</td>
														<td>$9,644,490,000</td>
														<td>$1,310,130,000</td>
														<td><span class="btn btn-sm  btn-primary"><i class="fe fe-chevron-up"></i> 36.98%</span></td>
														<td><span class="btn btn-sm btn-secondary"><i class="fe fe-chevron-down"></i> 31.09%</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End row-->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!-- Charts js-->
<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>
<!-- ECharts Plugin -->
<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>
<!-- Index js-->
<script src="{{URL::asset('assets/js/index2.js')}}"></script>
@endsection