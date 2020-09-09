@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Widgets</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Widgets</li>
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
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1 ">
											  <i class="fa fa-line-chart mr-1"></i>
											  Total Sales
											</p>
											<h2 class="mb-0">4,786<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1 "></i> 12%</span> since last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar11"></span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1 ">
											  <i class="fa fa-usd mr-1"></i>
											  Total Profits
											</p>
											<h2 class="mb-0">$873<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1 "></i> 0.34%</span> since last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar12"></span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1 ">
											  <i class="fa fa-cart-arrow-down mr-1"></i>
											  Total Orders
											</p>
											<h2 class="mb-0">6,295<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1 "></i> 0.22%</span> since last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar13"></span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1">
											  <i class="fa fa-signal mr-1"></i>
											  Total Sales Revenue
											</p>
											<h2 class="mb-0">$356<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.82%</span> since last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar14"></span>
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
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<div>
												<p class=" mb-1 ">Bitcoin</p>
											</div>
											<div class="ml-auto">
												<p class="mb-1 fs-15 text-danger"><i class="ion-arrow-down-c mr-1"></i>-0.86%</p>
											</div>
										</div>
										<div class="d-flex">
											<img src="{{URL::asset('assets/images/crypto-currencies/bitcoin.svg')}} " class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-0">BTC / USDT</p>
												<h3 class="mb-1">$10513</h3>
											</div>
											<div class="ml-auto text-right">
												<p class=" mb-0">$0.04</p>
												<p class=" mb-0"><span class="text-muted">Vol:</span>(+2.33%)</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<div>
												<p class=" mb-1 ">Nem</p>
											</div>
											<div class="ml-auto">
												<p class="mb-1 fs-15 text-danger"><i class="ion-arrow-down-c mr-1"></i>-0.12%</p>
											</div>
										</div>
										<div class="d-flex">
											<img src="{{URL::asset('assets/images/crypto-currencies/nem.svg')}} " class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-0">XEM / USDT</p>
												<h3 class="mb-1">$966</h3>
											</div>
											<div class="ml-auto text-right">
												<p class=" mb-0">$0.12</p>
												<p class=" mb-0"><span class="text-muted">Vol:</span>(-1.33%)</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart1" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<div>
												<p class=" mb-1 ">Ripple</p>
											</div>
											<div class="ml-auto">
												<p class="mb-1 fs-15 text-danger"><i class="ion-arrow-down-c mr-1"></i>-0.78%</p>
											</div>
										</div>
										<div class="d-flex">
											<img src="{{URL::asset('assets/images/crypto-currencies/ripple.svg')}} " class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-0">XRP / USDT</p>
												<h3 class="mb-1">$7,349</h3>
											</div>
											<div class="ml-auto text-right">
												<p class=" mb-0">$0.14</p>
												<p class=" mb-0"><span class="text-muted">Vol:</span> (+2.39%)</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart2" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<div>
												<p class=" mb-1 ">Neo</p>
											</div>
											<div class="ml-auto">
												<p class="mb-1 fs-15 text-danger"><i class="ion-arrow-down-c mr-1"></i>-0.34%</p>
											</div>
										</div>
										<div class="d-flex">
											<img src="{{URL::asset('assets/images/crypto-currencies/neo.svg')}} " class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-0">NEO / USDT</p>
												<h3 class="mb-1">$5,563</h3>
											</div>
											<div class="ml-auto text-right">
												<p class=" mb-0">$0.06</p>
												<p class=" mb-0"><span class="text-muted">Vol:</span> (-1.25%)</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart3" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-12">
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
							<div class="col-xl-4 col-lg-4 col-md-12">
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
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-body">
										<p class=" mb-1 ">Gross Profit Margin</p>
										<h2 class="mb-1">78%<span class="fs-12 text-muted ml-1">since last week</span></h2>
										<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  mr-1"></i> 0.8%</span> vs 1.6% than last month</span>
										<div class="progress progress-xs mt-3">
											<div class="progress-bar bg-warning" style="width: 58%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card">
									<div class="card-body">
										<h2 class="mb-1">678</h2>
										<div class="text-muted">Visitors online</div>
										<div class="progress progress-sm mt-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary " style="width: 37%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card">
									<div class="card-body">
										<h2 class="mb-1">567</h2>
										<div class="text-muted">Total Sales</div>
										<div class="progress progress-sm mt-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 57%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card">
									<div class="card-body">
										<h2 class="mb-1">56</h2>
										<div class="text-muted">Total Projects</div>
										<div class="progress progress-sm mt-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 70%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card">
									<div class="card-body">
										<h2 class="mb-1">567</h2>
										<div class="text-muted ">Today Income</div>
										<div class="progress progress-sm mt-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 87%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Today Orders</span>
									  <h1 class=" mb-1 mt-1 text-dark">6532</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-danger"></i> <span class="">15%</span> Increase</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Today Sales</span>
									  <h1 class=" mb-1 mt-1 text-dark">5835</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-success"></i> <span class="">22%</span> Increase</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Today Profit</span>
									  <h1 class=" mb-1 mt-1 text-dark">$69588</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-success"></i> <span class="">32%</span> Increase</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Position in Market</span>
									  <h1 class=" mb-1 mt-1 text-dark">12</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-warning"></i> <span class=""></span> Increase from 20 to 12</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-body text-center list-icons">
										<i class="si si-basket-loaded text-primary"></i>
										<p class="card-text mt-3 mb-0">New Orders</p>
										<p class="h2 text-center  text-primary">262</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-body text-center list-icons">
										<i class="si si-eye text-secondary"></i>
										<p class="card-text mt-3 mb-0">Customer Visitis</p>
										<p class="h2 text-center text-secondary">2635</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-body text-center list-icons">
										<i class="si si-envelope text-danger"></i>
										<p class="card-text mt-3 mb-0">Mails</p>
										<p class="h2 text-center text-danger">245</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="h2 m-0"><i class="mdi mdi-account-multiple-outline text-primary"></i> 67</div>
										<div class="text-muted mb-0"> Customers</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="h2 m-0"><i class="mdi mdi-cash-multiple text-red"></i> 76</div>
										<div class="text-muted mb-0"> Total Sales</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="h2 m-0"><i class="mdi mdi-chart-line text-warning"></i>45</div>
										<div class="text-muted mb-0"> New Orders</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="h2 m-0"><i class="mdi mdi-account-outline text-info"></i> 38</div>
										<div class="text-muted mb-0"> Invoice</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3">
								<div class="card bg-primary">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">Invoices</h6>
												<h2 class="text-white m-0 ">625</h2>
											</div>
											<div class="ml-auto">
												<span class="text-white display-6"><i class="fa fa-file-text-o fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3">
								<div class="card bg-secondary">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">Sales</h6>
												<h2 class="text-white m-0 ">25k</h2>
											</div>
											<div class="ml-auto">
												<span class="text-white display-6"><i class="fa fa-signal fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3">
								<div class="card bg-warning">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">Profit</h6>
												<h2 class="text-white m-0 ">62K</h2>
											</div>
											<div class="ml-auto">
												<span class="text-white display-6"><i class="fa fa-usd fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3">
								<div class="card bg-info">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">News</h6>
												<h2 class="text-white m-0 ">542</h2>
											</div>
											<div class="ml-auto">
												<span class="text-white display-6"><i class="fa fa-newspaper-o fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End  Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-xl-4 col-sm-12">
								<div class="card  mb-5">
									<div class="card-body">
										<div class="media mt-0">
											<figure class="rounded-circle align-self-start mb-0">
												<img src="{{URL::asset('assets/images/users/1.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-md mr-3">
											</figure>
											<div class="media-body">
												<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Victoria</h5>
												New york, UK
											</div>
											<button class="btn btn-primary d-none d-sm-block mr-2"><i class="fa fa-comments"></i> </button>
											<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
										</div>
									</div>
									<div class="card-footer text-secondary border-top">
										Email: <span class="text-primary">victoriacott@Clont.com</span>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-sm-12">
								<div class="card mb-5">
									<div class="card-body">
										<div class="media mt-0">
											<figure class="rounded-circle align-self-start mb-0">
												<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-md mr-3">
											</figure>
											<div class="media-body">
												<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Thomas Jaim</h5>
												Spain, UN
											</div>
											<button class="btn btn-primary d-none d-sm-block mr-2"><i class="fa fa-comments"></i> </button>
											<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
										</div>
									</div>
									<div class="card-footer text-secondary border-top">
										Email: <span class="text-primary">thomasjaim@Clont.com</span>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-sm-12">
								<div class="card mb-5">
									<div class="card-body">
										<div class="media mt-0">
											<figure class="rounded-circle align-self-start mb-0">
												<img src="{{URL::asset('assets/images/users/3.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-md mr-3">
											</figure>
											<div class="media-body">
												<h5 class="time-title p-0 font-weight-semibold leading-normal mb-0">Rebbaca wisely</h5>
												Japan, UN
											</div>
											<button class="btn btn-primary d-none d-sm-block mr-2"><i class="fa fa-comments"></i> </button>
											<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
										</div>
									</div>
									<div class="card-footer text-secondary border-top">
										Email: <span class="text-primary">rebbacawisely@Clont.com</span>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-4 col-sm-12">
								<div class="card text-center">
									<div class="widget-line mt-5 ">
										<p>Shares</p>
										<h1>1452</h1>
									</div>
									<div class="mx-auto chart-circle chart-circle-md " data-value="0.67" data-thickness="20" data-color="#2d66f7">
										<div class="chart-circle-value fs"><i class="fa fa-random"></i></div>
									</div>
									<ul class="widget-line-list mt-5 mb-5">
										<li class="border-right">45% <br><span class="text-success"><i class="fa fa-hand-o-up"></i> Positive</span></li>
										<li>6% <br><span class="text-danger"><i class="fa fa-hand-o-down"></i> Negative</span></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-sm-12 p-l-0 p-r-0">
								<div class="card text-center">
									<div class="widget-line mt-5">
										<p>Projects</p>
										<h1>3265</h1>
									</div>
									<div class="mx-auto chart-circle chart-circle-md" data-value="0.55" data-thickness="20" data-color="#38a01e">
										<div class="chart-circle-value fs"><i class="fa fa-life-ring"></i></div>
									</div>
									<ul class="widget-line-list mt-5 mb-5">
										<li class="border-right">55% <br><span class="text-success"><i class="fa fa-hand-o-up"></i> Positive</span></li>
										<li>3% <br><span class="text-danger"><i class="fa fa-hand-o-down"></i> Negative</span></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-sm-12 p-l-0">
								<div class="card text-center">
									<div class="widget-line  mt-5">
										<p>Users</p>
										<h1>9562</h1>
									</div>
									<div class="mx-auto chart-circle chart-circle-md " data-value="0.67" data-thickness="20" data-color="#fc9197">
										<div class="chart-circle-value fs"><i class="fa fa-tags"></i></div>
									</div>
									<ul class="widget-line-list mt-5 mb-5">
										<li class="border-right">75% <br><span class="text-success"><i class="fa fa-hand-o-up"></i> Positive</span></li>
										<li>6% <br><span class="text-danger"><i class="fa fa-hand-o-down"></i> Negative</span></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<a href="#"><img class="card-img-top " src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="And this isn't my nose. This is a false one."></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="#">Best grow thing Company.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-default">Jevan Peters</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up mr-1"></i></a>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-message-square mr-1"></i></a>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-share-2 mr-1"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-md-12 col-sm-12 ">
								<div class="card" >
									<div class="card-header border-bottom">
										<h5 class="card-title">Employees</h5>
									</div>
									<div class="emp-tab">
										<div class="table-responsive">
											<table class="table  table-hover table-striped">
												<thead class="text-primary">
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Salary</th>
														<th>Country</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Bob Williams</td>
														<td>$23,566</td>
														<td>USA</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Mike Tyson</td>
														<td>$10,200</td>
														<td>Canada</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Tim Sebastian</td>
														<td>$32,190</td>
														<td>Netherlands</td>
													</tr>
													<tr>
														<td>4</td>
														<td>Philip Morris</td>
														<td>$31,123</td>
														<td>Korea, South</td>
													</tr>
													<tr>
														<td>5</td>
														<td>Minerva Hooper</td>
														<td>$23,789</td>
														<td>South Africa</td>
													</tr>
													<tr>
														<td>6</td>
														<td>Rebacca Weirer</td>
														<td>$23,789</td>
														<td>USA</td>
													</tr>
													<tr>
														<td>7</td>
														<td>James Rohn</td>
														<td>$23,789</td>
														<td>Canada</td>
													</tr>
													<tr>
														<td>8</td>
														<td>Rohn James </td>
														<td>32,145</td>
														<td>Russia</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Best Pictures for Today</h3>
									</div>
									<div class="card-body p-2">
										<div>
											<div class="row img-gallery">
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="facebook p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-facebook"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div><h3 class="font-medium">56k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ml-auto">
															<h3 class="font-medium">17k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="twitter p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-twitter"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div><h3 class="font-medium">86k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ml-auto">
															<h3 class="font-medium">20k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="linkedin p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-linkedin"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div><h3 class="font-medium">76k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ml-auto">
															<h3 class="font-medium">27k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="instagram p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-instagram"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div><h3 class="font-medium">36k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ml-auto">
															<h3 class="font-medium">10k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row -->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!--Chart js -->
<script src="{{URL::asset('assets/plugins/chart/chart.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/chart.extension.js')}}"></script>
<!-- Widgets js-->
<script src="{{URL::asset('assets/js/widgets.js')}}"></script>
@endsection