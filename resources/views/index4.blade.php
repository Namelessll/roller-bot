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
									<li class="breadcrumb-item active" aria-current="page">Dashboard 04</li>
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
							<div class="col-xl-8 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Outpatients vs. Inpatients Trend</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="echart5" class="chartsh overflow-hidden"></div>
									</div>
									<div class="card-footer text-left">
										<div class="row">
											<div class="col-xl-3 col-lg-6 col-md-12">
												<h2 class="font-weight-normal text-dark mb-0">1,897</h2>
												<p class="text-muted mb-1 fs-13">Out-patients</p>
												<div class="progress progress-xs mb-2">
													<div class="progress-bar bg-primary" style="width: 30%"></div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<h2 class="font-weight-normal text-dark mb-0">3,785</h2>
												<p class="text-muted mb-1 fs-13">In-patients</p>
												<div class="progress progress-xs mb-2">
													<div class="progress-bar bg-secondary" style="width: 50%"></div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<h2 class="font-weight-normal text-dark mb-0">16,897</h2>
												<p class="text-muted mb-1 fs-13">Total patients</p>
												<div class="progress progress-xs mb-2">
													<div class="progress-bar bg-info" style="width: 40%"></div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<h2 class="font-weight-normal text-dark mb-0">567</h2>
												<p class="text-muted mb-1 fs-13">Total Departments</p>
												<div class="progress progress-xs mb-2">
													<div class="progress-bar bg-warning" style="width: 60%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="p-3">
										<h3 class="card-title mb-4">Avg Nurse Patient Ratio</h3>
										<div class="row widget-text">
											<div class="col-4">
												<h3 class="mb-0">1:3</h3>
												<p class=" mb-0 fs-13 text-muted">Day Shift</p>
											</div>
											<div class="col-4">
												<h3 class="mb-0">1:8</h3>
												<span class=" mb-0 fs-13 text-muted">Night Shift</span>
											</div>
											<div class="col-4">
												<h3 class="mb-0">1:2</h3>
												<span class=" mb-0 fs-13 text-muted">Evng Shift</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="p-3">
										<h3 class="card-title mb-4">Average Waiting Times</h3>
										<div class="row widget-text">
											<div class="col-4">
												<h3 class="mb-0">15 min</h3>
												<p class=" mb-0 fs-13 text-muted">Arrival to Bed</p>
											</div>
											<div class="col-4">
												<h3 class="mb-0">56 min</h3>
												<span class=" mb-0 fs-13 text-muted">To see a Doctor</span>
											</div>
											<div class="col-4">
												<h3 class="mb-0">75 min</h3>
												<span class=" mb-0  fs-13 text-muted">Get a Treatment</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card  overflow-hidden">
									<div class="card-body pb-0">
										<div class="clearfix">
											<div class="float-right list-icons mt-2">
												<span class="text-primary">
													<i class="fa fa-hospital-o fs-20"></i>
												</span>
											</div>
											<div class="float-left text-left">
												<span>Avg Length Of Stay</span>
												<h2 class="mb-1">24 days</h2>
												<p class="mb-0 text-muted fs-13"><span class="text-success"><i class="fa fa-arrow-up mr-1 fs-10"> 0.5%</i></span>than last month</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="AreaChart2" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="row mr-0 ml-0">
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<p class="mb-1">Total Patients Admitted</p>
									            <h2 class="mb-1">56,897</h2>
												<span class="mb-0 text-muted fs-13"><span class="text-success"><i class="fe fe-corner-left-up "></i> 0.7%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<p class="mb-1">Avg Treatment Costs</p>
									            <h2 class="mb-1">$8,476</h2>
									            <span class="mb-0 text-muted fs-13"><span class="text-success"><i class="fe fe-corner-left-up  "></i> 0.26%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<p class="mb-1">Avg ER Waiting Time</p>
									            <h2 class="mb-1">45 mins</h2>
									            <span class="mb-0 text-muted fs-13"><span class="text-danger"><i class="fe fe-corner-left-down  "></i> 12%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<p class="mb-1">Available Staff</p>
									            <h2 class="mb-1">784</h2>
									            <span class="mb-0 text-muted fs-13"><span class="text-success"><i class="fe fe-corner-left-up  "></i> 0.2%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
											<div class="card-body text-center">
												<p class="mb-1">Avg admission Rate</p>
									            <h2 class="mb-1">65.4%</h2>
									            <span class="mb-0 text-muted fs-13"><span class="text-danger"><i class="fe fe-corner-left-down  "></i> 1.2%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pr-0 pl-0">
											<div class="card-body text-center">
												<p class="mb-1">Avg Readmission Rate</p>
									            <h2 class="mb-1">35.19%</h2>
									            <span class="mb-0 text-muted fs-13"><span class="text-danger"><i class="fe fe-corner-left-down "></i> 0.6%</span> Last month</span>
									        </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row-->
						<div class="row">
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Costs By Payer & Type Of Stay</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="echart6" class="chart-height mb-4 overflow-hidden"></div>
										<p class="mb-2 text-dark">Overall of healthcare expenses,making hospitalization one of the most expensive types of health care treatments.</p>
										<div class="text-center">
											<div class="d-flex">
												<div class="w-3 h-3 bg-primary mr-2 mt-1 brround"></div>
												<div class="text-muted">Surgical Stays</div>
											</div>
											<div class="d-flex">
												<div class="w-3 h-3 bg-blue-light  mr-2 mt-1 brround"></div>
												<div class="text-muted">Maternal and Neonatal Stays</div>
											</div>
											<div class="d-flex">
												<div class="w-3 h-3 bg-blue-lighter mr-2 mt-1 brround"></div>
												<div class="text-muted">Medical Stays</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Department Wise Top Doctors</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body p-0 ">
										<div class="list-group list-lg-group list-group-flush">
											<div class="list-group-item list-group-item-action" >
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 text-dark">Lillian Blake</h5>
																<p class="mb-0  fs-13 text-muted">Dep: Cardiologist</p>
															</div>
															<small class="ml-auto">
																<a href="#" class="btn btn-outline-primary btn-sm">Get appointment</a>
															</small>
														</div>
													</div>
												</div>
											</div>
											<div class="list-group-item list-group-item-action">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/10.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 font-weight-normal text-dark">Tim	Gray</h5>
																<p class="mb-0 fs-13 text-muted">Dep: Neurologist </p>
															</div>
															<small class="ml-auto">
																<a href="#" class="btn btn-outline-primary btn-sm">Get appointment</a>
															</small>
														</div>
													</div>
												</div>
											</div>
											<div class="list-group-item list-group-item-action">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 font-weight-normal text-dark">Rose Nash</h5>
																<p class="mb-0 fs-13 text-muted">Dep: Gynecologist </p>
															</div>
															<small class="ml-auto">
																<a href="#" class="btn btn-outline-primary btn-sm">Get appointment</a>
															</small>
														</div>
													</div>
												</div>
											</div>
											<div class="list-group-item list-group-item-action br-br-7 br-bl-7">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/9.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 font-weight-normal text-dark">Justin Parr</h5>
																<p class="mb-0 fs-13 text-muted">Dep: Dentist</p>
															</div>
															<small class="ml-auto">
																<a href="#" class="btn btn-outline-primary btn-sm">Get appointment</a>
															</small>
														</div>
													</div>
												</div>
											</div>
											<div class="list-group-item list-group-item-action br-br-7 br-bl-7">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/4.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 font-weight-normal text-dark">Vanessa	Quinn</h5>
																<p class="mb-0 fs-13 text-muted">Dep: Ophthalmologist</p>
															</div>
															<small class="ml-auto">
																<a href="#" class="btn btn-outline-primary btn-sm">Get appointment</a>
															</small>
														</div>
													</div>
												</div>
											</div>
											<div class="list-group-item list-group-item-action br-br-7 br-bl-7" >
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 font-weight-normal text-dark">Rose Clark</h5>
																<p class="mb-0 fs-13 text-muted">Dep: Nephrologist</p>
															</div>
															<small class="ml-auto">
																<a href="#" class="btn btn-outline-primary btn-sm">Get appointment</a>
															</small>
														</div>
													</div>
												</div>
											</div>
											<div class="list-group-item list-group-item-action br-br-7 br-bl-7">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/9.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 font-weight-normal text-dark">Rose Clark</h5>
																<p class="mb-0 fs-13 text-muted">Dep: Gastroenterologist</p>
															</div>
															<small class="ml-auto">
																<a href="#" class="btn btn-outline-primary btn-sm">Get appointment</a>
															</small>
														</div>
													</div>
												</div>
											</div>
											<div class="list-group-item list-group-item-action br-br-7 br-bl-7">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/6.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<div>
																<h5 class="mb-0 font-weight-normal text-dark">Rose Clark</h5>
																<p class="mb-0 fs-13 text-muted">Dep: Anesthesiologist</p>
															</div>
															<small class="ml-auto">
																<a href="#" class="btn btn-outline-primary btn-sm">Get appointment</a>
															</small>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Patient Satisfaction</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="overflow-hidden">
											<canvas class="canvasDoughnut" height="237" width="310"></canvas>
										</div>
									</div>
									<div class="card-footer p-0">
										<table class="table  table-hover mb-0">
											<tbody>
												<tr class="border-bottom">
													<td class="p-2"><div class="w-3 h-3 bg-primary mr-2 mt-1 brround"></div></td>
													<td class="p-2">Excellent</td>
													<td class="p-2">4,678</td>
													<td class="p-2">68%</td>
												</tr>
												<tr class="border-bottom">
													<td class="p-2"><div class="w-3 h-3 bg-info mr-2 mt-1 brround"></div></td>
													<td class="p-2">Very Good</td>
													<td class="p-2">3,789</td>
													<td class="p-2">55%</td>
												</tr>
												<tr class="border-bottom">
													<td class="p-2"><div class="w-3 h-3 bg-warning mr-2 mt-1 brround"></div></td>
													<td class="p-2">Good</td>
													<td class="p-2">2,137</td>
													<td class="p-2">45%</td>
												</tr>
												<tr class="border-bottom">
													<td class="p-2"><div class="w-3 h-3 bg-teal mr-2 mt-1 brround"></div></td>
													<td class="p-2">Average</td>
													<td class="p-2">1,786</td>
													<td class="p-2">34%</td>
												</tr>
												<tr class="border-bottom">
													<td class="p-2"><div class="w-3 h-3 bg-orange mr-2 mt-1 brround"></div></td>
													<td class="p-2">Poor</td>
													<td class="p-2">897</td>
													<td class="p-2">27%</td>
												</tr>
												<tr>
													<td class="p-2"><div class="w-3 h-3 bg-secondary mr-2 mt-1 brround"></div></td>
													<td class="p-2">Bad</td>
													<td class="p-2">568</td>
													<td class="p-2">15%</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row-->
						<div class="row">
							<div class="col-xl-5 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Patients By Division</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="">
										<div class="table-responsive">
											<table class="table  table-vcenter  text-nowrap mb-0">
												<thead class="">
													<tr>
														<th></th>
														<th>Division</th>
														<th>In-patients</th>
														<th>Out-patients</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#01</td>
														<td>Surgery</td>
														<td>6,898</td>
														<td><i class="ion-arrow-up-c mr-1 text-success"></i> 8,785</td>
													</tr>
													<tr>
														<td>#02</td>
														<td>Gynaecology</td>
														<td><i class="ion-arrow-down-c mr-1 text-danger"></i>2,786</td>
														<td><i class="ion-arrow-up-c mr-1 text-success"></i> 3,916</td>
													</tr>
													<tr>
														<td>#03</td>
														<td>Dermatology</td>
														<td><i class="ion-arrow-up-c mr-1 text-success"></i>1,266</td>
														<td>3,678</td>
													</tr>
													<tr>
														<td>#04</td>
														<td>Neurology</td>
														<td>3,676</td>
														<td><i class="ion-arrow-down-c mr-1 text-danger"></i>2,786</td>
													</tr>
													<tr>
														<td>#05</td>
														<td>Oncology</td>
														<td><i class="ion-arrow-up-c mr-1 text-success"></i>3,786</td>
														<td><i class="ion-arrow-up-c mr-1 text-success"></i> 1,786</td>
													</tr>
													<tr>
														<td>#06</td>
														<td>Orthopaedics</td>
														<td><i class="ion-arrow-up-c mr-1 text-success"></i>2,786</td>
														<td><i class="ion-arrow-up-c mr-1 text-success"></i>3,897</td>
													</tr>
													<tr>
														<td>#07</td>
														<td>Cardiology</td>
														<td><i class="ion-arrow-up-c mr-1 text-success"></i>6,896</td>
														<td><i class="ion-arrow-up-c mr-1 text-success"></i> 5,378</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-7 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Staff Details</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-vcenter text-nowrap mb-0">
											<thead>
												<tr>
													<th>No</th>
													<th>Department</th>
													<th>Male</th>
													<th>Female</th>
													<th>Info</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>001</td>
													<td>Allergist</td>
													<td>34</td>
													<td>87</td>
													<td><a class="btn btn-sm btn-primary" href="#"> Active</a></td>
												</tr>
												<tr>
													<td>002</td>
													<td>Cardiologist</td>
													<td>34</td>
													<td>87</td>
													<td><a class="btn btn-sm btn-secondary" href="#">No account</a></td>
												</tr>
												<tr>
													<td>003</td>
													<td>Dermatologist</td>
													<td>34</td>
													<td>87</td>
													<td><a class="btn btn-sm btn-info" href="#"> In active</a></td>
												</tr>
												<tr>
													<td>004</td>
													<td>Neurologist</td>
													<td>34</td>
													<td>87</td>
													<td><a class="btn btn-sm btn-warning" href="#"> Pending</a></td>
												</tr>
												<tr>
													<td>005</td>
													<td>Pathologist</td>
													<td>34</td>
													<td>87</td>
													<td><a class="btn btn-sm btn-primary" href="#"> Active</a></td>
												</tr>
												<tr>
													<td>006</td>
													<td>Psychiatrist</td>
													<td>34</td>
													<td>87</td>
													<td><a class="btn btn-sm btn-info" href="#"> In active</a></td>
												</tr>
											</tbody>
										</table>
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
<!-- ECharts js-->
<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>
<!--Chart js -->
<script src="{{URL::asset('assets/plugins/chart/chart.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/chart.extension.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chartjs/chart.js')}}"></script>
<!-- Index js-->
<script src="{{URL::asset('assets/js/index4.js')}}"></script>
@endsection