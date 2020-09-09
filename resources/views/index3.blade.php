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
									<li class="breadcrumb-item active" aria-current="page">Dashboard 03</li>
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
										<span class="mb-0 mt-1 mr-2">6,453</span><small class="mb-0"> ( Followers )</small>
									</span>
								</div>
							</div>
						</div>
						<!--End Page header-->
@endsection
@section('content')
						<!--Row-->
						<div class="row">
							<div class="col-xl-6 col-md-12 col-lg-12">
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="card">
											<div class="card-body">
												<p class=" mb-1 ">Income Budget</p>
												<h2 class="mb-1">4500,00<span class="fs-12 text-muted ml-1">this month</span></h2>
												<span class="mb-1 text-muted"><span class="text-danger"><i class="fa fa-caret-down  mr-1"></i> 43.2</span> vs $56,699 than last month</span>
												<div class="progress progress-xs mt-3">
													<div class="progress-bar bg-primary" style="width: 78%"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="card">
											<div class="card-body">
												<p class=" mb-1 ">Expense Budget</p>
												<h2 class="mb-1">5678,20<span class="fs-12 text-muted ml-1">this month</span></h2>
												<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  mr-1"></i> 19.8</span> vs $36,144 than last month</span>
												<div class="progress progress-xs mt-3">
													<div class="progress-bar bg-secondary" style="width: 58%"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="card overflow-hidden">
											<div class="card-body pb-0">
												<div class="row ">
													<div class="col-sm-12  col-md-3 col-lg-3 col-xl-3 border-right-1">
														<h5 class=" mb-1 card-text">Quick Ratio</h5>
														<h2 class="mb-0">0.57: 8</h2>
													</div>
													<div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 ">
														<p class="mb-0"><span>Quick ratio</span>  =  <span class="text-primary">Total current assest</span> - <span>Inventory - prepared expenses </span> / <span>current liabilities.</span></p>
													</div>
												</div>
											</div>
											<div class="chart-wrapper">
												<canvas id="quick-ratio" class="h-85 overflow-hidden"></canvas>
											</div>
										</div>
										<div class="card overflow-hidden">
											<div class="card-body pb-0">
												<div class="row ">
													<div class="col-sm-12  col-md-3 col-lg-3 col-xl-3 border-right-1">
														<h5 class=" mb-1 card-text">Current Ratio</h5>
														<h2 class="mb-0">1.7: 5</h2>
													</div>
													<div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 ">
														<p class="mb-0"><span>Current ratio</span>  =  <span class="text-primary">Current assest</span> / <span>current liabilities.</span></p>
													</div>
												</div>
											</div>
											<div class="chart-wrapper">
												<canvas id="current-ratio" class="h-85 overflow-hidden"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Cash Flow Balance</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 mb-4">
												<p class=" mb-0 ">This Year Available</p>
												<h3 class="mb-2">$43,451,678<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.9%</span>last year</span></h3>
												<p class="text-muted fs-12">Is a financial statement that shows how changes in balance sheet accounts <a href="#">View Changes..</a></p>
											</div>
											<div class="col-md-6 mb-4">
												<p class=" mb-0 ">This Year Pending</p>
												<h3 class="mb-2">$1,782,345<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.9%</span>last year</span></h3>
												<p class="text-muted fs-12">Is a financial statement that shows how changes in balance sheet accounts <a href="#">View Changes..</a></p>
											</div>
										</div>
										<div id="echart1" class="chartwidget"></div>
									</div>
								</div>
							</div>
						</div>
						<!--End row-->

						<!--Row-->
						<div class="row ">
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Income and Expenses</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div>
										<div class="table-responsive">
											<table class="table  table-vcenter  mb-0">
												<tbody>
													<tr>
														<td class="font-weight-semibold">Income</td>
														<td>$8,291</td>
														<td><i class="fa fa-caret-up text-success mr-1"></i>.01%</td>
														<td>
															<span class="sparkline_area"></span>
														</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Expenses</td>
														<td>$4,458</td>
														<td><i class="fa fa-caret-up text-success mr-1"></i>.97%</td>
														<td>
															<span class="sparkline_area"></span>
														</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Cost of Goods</td>
														<td>$7,716</td>
														<td><i class="fa fa-caret-up text-success mr-1"></i>.01%</td>
														<td>
															<span class="sparkline_area"></span>
														</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Net Profit</td>
														<td>$8,220</td>
														<td><i class="fa fa-caret-up text-success mr-1"></i>.04%</td>
														<td>
															<span class="sparkline_area"></span>
														</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Inventory</td>
														<td>$2,291</td>
														<td><i class="fa fa-caret-up text-success mr-1"></i>.06%</td>
														<td>
															<span class="sparkline_area"></span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-md-12 col-lg-12">
								<div class="row">
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card">
											<div class="card-body text-center">
												<p class="mb-1">Total Subscriptions</p>
									            <h2 class="mb-1">89,7654</h2>
									            <span class="mb-0 text-muted"><span class="text-danger"><i class="fa fa-caret-down  mr-1"></i> 0.89%</span> Last week</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card">
											<div class="card-body text-center">
												<p class="mb-1">Today Subscription</p>
									            <h2 class="mb-1">5,896</h2>
									            <span class="mb-0 text-muted"><span class="text-success"><i class="fa fa-caret-up  mr-1"></i> 1.98%</span> Last week</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card">
											<div class="card-body text-center">
												<p class="mb-1">Total Revenue</p>
									            <h2 class="mb-1">$24,986</h2>
									            <span class="mb-0 text-muted"><span class="text-danger"><i class="fa fa-caret-down  mr-1"></i> 1.6%</span> Last month</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-12 col-lg-6">
										<div class="card">
											<div class="card-body text-center">
												<p class="mb-1">Revenue Today</p>
									            <h2 class="mb-1">$1,678</h2>
									            <span class="mb-0 text-muted"><span class="text-success"><i class="fa fa-caret-up  mr-1"></i> 2.8%</span> Last month</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-md-12 col-lg-6">
										<div class="card overflow-hidden">
											<div class="card-body">
												<div class="d-flex">
													<div>
														<div class="text-left">
															<p class="mb-1">Gross Profit Margin</p>
															<h2 class="mb-1">78%</h2>
															<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1 "></i> 12%</span> since last week</span>
														</div>
													</div>
													<div class="ml-auto">
														<div class="chart-wrapper overflow-hidden">
															<span class="sparkline_bar31"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-md-12 col-lg-6">
										<div class="card overflow-hidden">
											<div class="card-body">
												<div class="d-flex">
													<div>
														<div class="text-left">
															<p class="mb-1">Operating Profit Margin</p>
															<h2 class="mb-1">78%</h2>
															<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1 "></i> 12%</span> since last week</span>
														</div>
													</div>
													<div class="ml-auto">
														<div class="chart-wrapper overflow-hidden">
															<span class="sparkline_bar32"></span>
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
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Users Activity</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="p-4">
										<div class="activity">
											<img src="{{URL::asset('assets/images/users/14.jpg')}}" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0">Adam Berry <span class="text-muted">Add a new projects </span> AngularJS Template</p>
													<small class="text-muted ">30 mins ago</small>
												</div>
											</div>
											<img src="{{URL::asset('assets/images/users/10.jpg')}}" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0">Irene Hunter <span class="text-muted"> Add a new projects </span>Free HTML Template</p>
													<small class="text-muted ">1 days ago</small>
												</div>
											</div>
											<img src="{{URL::asset('assets/images/users/4.jpg')}}" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0">John	Payne<span class="text-muted"> Add a new projects </span>Free PSD Template</p>
													<small class="text-muted ">3 days ago</small>
												</div>
											</div>
											<img src="{{URL::asset('assets/images/users/8.jpg')}}" alt="" class="img-activity">
											<div class="time-activity mb-0">
												<div class="item-activity mb-0">
													<p class="mb-0">Julia Hardacre<span class="text-muted"> Add a new projects </span>Free UI Template</p>
													<small class="text-muted ">5 days ago</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Customer Balance Summary</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body p-0 ">
										<div class="list-group list-lg-group list-group-flush">
											<a class="list-group-item list-group-item-action p-3" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 text-dark">Lillian Blake</h5>
																<p class="mb-0 fs-13 text-muted">Due Date:14-05-2020</p>
															</div>
															<div class="ml-auto">
																<span class="fs-13 text-muted">Amount Due:</span>
																<p class="mb-0 fs-14 text-dark">$48,908</p>
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action p-3" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/10.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 font-weight-normal text-dark">Tim	Gray</h5>
																<p class="mb-0 fs-13 text-muted">Due Date:14-05-2020</p>
															</div>
															<div class="ml-auto">
																<span class="fs-13 text-muted">Amount Due:</span>
																<p class="mb-0 fs-14 text-dark">$48,908</p>
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action p-3" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 font-weight-normal text-dark">Rose Nash</h5>
																<p class="mb-0 fs-13 text-muted">Due Date:14-05-2020</p>
															</div>
															<div class="ml-auto">
																<span class="fs-13 text-muted">Amount Due:</span>
																<p class="mb-0 fs-14 text-dark">$48,908</p>
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action p-3" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/9.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 font-weight-normal text-dark">Justin Parr</h5>
																<p class="mb-0 fs-13 text-muted">Due Date:14-05-2020</p>
															</div>
															<div class="ml-auto">
																<span class="fs-13 text-muted">Amount Due:</span>
																<p class="mb-0 fs-14 text-dark">$48,908</p>
															</div>
														</div>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action p-3" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/4.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 font-weight-normal text-dark">Vanessa	Quinn</h5>
																<p class="mb-0 fs-13 text-muted">Due Date:14-05-2020</p>
															</div>
															<div class="ml-auto">
																<span class="fs-13 text-muted">Amount Due:</span>
																<p class="mb-0 fs-14 text-dark">$48,908</p>
															</div>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Monthly Net Profit</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="morrisBar8" class="chart-tasks"></div>
									</div>
									<div class="card-footer">
										<div class="row">
											<div class="col text-center">
												<h5 class="font-weight-normal text-dark mb-0">$3,46,789</h5>
												<span class="text-muted">Total</span>
											</div>
											<div class="col text-center">
												<h5 class="font-weight-normal text-dark mb-0">$68,972</h5>
												<span class="text-muted">Cash In</span>
											</div>
											<div class="col text-center">
												<h5 class="font-weight-normal text-dark mb-0">$14,556</h5>
												<span class="text-muted">Cash Out</span>
											</div>
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
<!-- ECharts js -->
<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>
<!-- Chartjs js -->
<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>
<!--Morris Charts js-->
<script src="{{URL::asset('assets/plugins/morris/raphael-min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/morris/morris.js')}}"></script>
<!-- Index js-->
<script src="{{URL::asset('assets/js/index3.js')}}"></script>
@endsection