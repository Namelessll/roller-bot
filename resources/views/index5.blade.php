@extends('layouts.master')
@section('css')
<!-- News-Ticker css-->
<link href="{{URL::asset('assets/plugins/newsticker/newsticker.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Dashboard</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard 05</li>
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
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="js-conveyor-example">
										<ul class="news-crypto">
											<li>
											  <span><img src="{{URL::asset('assets/images/crypto-currencies/bitcoin.svg')}}" class="w-4 h-4 mr-2" alt="">$0.0215<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/cardano.svg')}}" class="w-4 h-4 mr-2" alt="">$425.25<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>+12.85% </span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/dash.svg')}}" class="w-4 h-4 mr-2" alt="">$2.786<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-02.25%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/eos.svg')}}" class="w-4 h-4 mr-2" alt="">$15.425<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/ethereum.svg')}}" class="w-4 h-4 mr-2" alt="">$5.125<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-11.85% </span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/euro.svg')}}" class="w-4 h-4 mr-2" alt="">$135.425<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/icon.svg')}}" class="w-4 h-4 mr-2" alt="">$34.625<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-0.32%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/iota.svg')}}" class="w-4 h-4 mr-2" alt="">$67.325<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/litecoin.svg')}}" class="w-4 h-4 mr-2" alt="">$7.525<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-1.42%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/monero.svg')}}" class="w-4 h-4 mr-2" alt="">$4.325<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/nem.svg')}}" class="w-4 h-4 mr-2" alt="">$5.525<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-1.32%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/neo.svg')}}" class="w-4 h-4 mr-2" alt="">$6.025<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/qtum.svg')}}" class="w-4 h-4 mr-2" alt="">0.0215<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-0.45%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/raiblocks.svg')}}" class="w-4 h-4 mr-2" alt="">$0.125<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/ripple.svg')}}" class="w-4 h-4 mr-2" alt="">$1.125<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-0.65%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/stellar.svg')}}" class="w-4 h-4 mr-2" alt="">$0.725<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.36%</span></span>
											</li>
											<li>
											   <span><img src="{{URL::asset('assets/images/crypto-currencies/tron.svg')}}" class="w-4 h-4 mr-2" alt="">0.0215<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-0.78%</span></span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<img src="{{URL::asset('assets/images/crypto-currencies/bitcoin.svg')}} " class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-1 text-muted fs-12">BTC / USDT</p>
												<h3 class="mb-0">$10513</h3>
											</div>
											<div class="ml-auto text-right">
												<p class=" mb-1">$0.04</p>
												<p class=" mb-0"><span class="text-muted">Vol:</span>(+2.33%)</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart" class="h-5 overflow-hidden"></canvas>
									</div>
									<div class="d-flex p-2">
										<div>
											<p class=" mb-0 fs-15">Bitcoin</p>
										</div>
										<div class="ml-auto">
											<p class="mb-0 fs-15 text-danger"><i class="ion-arrow-down-c mr-1"></i>-0.86%</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<img src="{{URL::asset('assets/images/crypto-currencies/nem.svg')}} " class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-1 text-muted fs-12">XEM / USDT</p>
												<h3 class="mb-0">$966</h3>
											</div>
											<div class="ml-auto text-right">
												<p class=" mb-1">$0.12</p>
												<p class=" mb-0"><span class="text-muted">Vol:</span>(-1.33%)</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart1" class="h-5 overflow-hidden"></canvas>
									</div>
									<div class="d-flex p-2">
										<div>
											<p class=" mb-0 fs-15">Nem</p>
										</div>
										<div class="ml-auto">
											<p class="mb-0 fs-15 text-danger"><i class="ion-arrow-down-c mr-1"></i>-0.12%</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<img src="{{URL::asset('assets/images/crypto-currencies/ripple.svg')}} " class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-1 text-muted fs-12">XRP / USDT</p>
												<h3 class="mb-0">$7,349</h3>
											</div>
											<div class="ml-auto text-right">
												<p class=" mb-1">$0.14</p>
												<p class=" mb-0"><span class="text-muted">Vol:</span> (+2.39%)</p>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart2" class="h-5 overflow-hidden"></canvas>
									</div>
									<div class="d-flex p-2">
										<div>
											<p class=" mb-0 fs-15">Ripple</p>
										</div>
										<div class="ml-auto">
											<p class="mb-0 fs-15 text-danger"><i class="ion-arrow-down-c mr-1"></i>-0.78%</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body p-3 pb-0">
										<div class="d-flex">
											<img src="{{URL::asset('assets/images/crypto-currencies/neo.svg')}}" class="w-7 h-7 mr-2" alt="img">
											<div>
												<p class=" mb-1 text-muted fs-12">NEO / USDT</p>
												<h3 class="mb-0">$5,563</h3>
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
									<div class="d-flex p-2">
										<div>
											<p class=" mb-0 fs-15">Neo</p>
										</div>
										<div class="ml-auto">
											<p class="mb-0 fs-15 text-danger"><i class="ion-arrow-down-c mr-1"></i>-0.34%</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-9 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Crypto Trading</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-3 col-lg-6 col-md-12 mb-5">
												<p class=" mb-0 "> Last price</p>
												<h2 class="mb-0">$21358.7</h2>
												<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.9%</span>last year</span>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12 mb-5">
												<p class=" mb-0 "> Daily change</p>
												<h2 class="mb-0">$197.2</h2>
												<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>0.15%</span>last year</span>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12 mb-5">
												<p class=" mb-0 "> Market cap</p>
												<h2 class="mb-0">$15,47,85,235</h2>
												<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>1.04%</span>last year</span>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12 mb-5">
												<p class=" mb-0 ">24th volume</p>
												<h2 class="mb-0">231456.06</h2>
												<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>2.08%</span>last year</span>
											</div>
										</div>
										<div id="echart1" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Trade History</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="">
										<div class="table-responsive">
											<table class="table  table-vcenter table-hover mb-0 text-nowrap">
												<thead>
													<tr>
														<th>Price</th>
														<th>Amount</th>
														<th>Date</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>$0.11923<i class="fa fa-arrow-up text-green ml-1"></i></td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/bitcoin.svg')}}" class="w-3 h-3 mr-2" alt="">0.0215</td>
														<td>05-01-19</td>
													</tr>
													<tr>
														<td>$0.07324<i class="fa fa-arrow-down text-danger ml-1"></i></td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/dash.svg')}}" class="w-3 h-3 mr-2" alt="">0.0112</td>
														<td>07-01-19</td>
													</tr>
													<tr>
														<td>$0.12645<i class="fa fa-arrow-up text-green ml-1"></i></td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/eos.svg')}}" class="w-3 h-3 mr-2" alt="">0.0214</td>
														<td>12-01-19</td>
													</tr>
													<tr>
														<td>$0.01153<i class="fa fa-arrow-down text-danger ml-1"></i></td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/ethereum.svg')}}" class="w-3 h-3 mr-2" alt="">0.0012</td>
														<td>20-01-19</td>
													</tr>
													<tr>
														<td>$0.08923<i class="fa fa-arrow-down text-danger ml-1"></i></td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/euro.svg')}}" class="w-3 h-3 mr-2" alt="">0.0015</td>
														<td>28-01-19</td>
													</tr>
													<tr>
														<td>$0.14915<i class="fa fa-arrow-up text-green ml-1"></i></td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/icon.svg')}}" class="w-3 h-3 mr-2" alt="">0.0312</td>
														<td>31-01-19</td>
													</tr>
													<tr>
														<td>$0.08923<i class="fa fa-arrow-down text-danger ml-1"></i></td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/iota.svg')}}" class="w-3 h-3 mr-2" alt="">0.0015</td>
														<td>28-01-19</td>
													</tr>
													<tr>
														<td>$0.14915<i class="fa fa-arrow-up text-green ml-1"></i></td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/nem.svg')}}" class="w-3 h-3 mr-2" alt="">0.0312</td>
														<td>31-01-19</td>
													</tr>

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Overview of Investiment Summary</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-3 col-lg-6 col-md-12 border-right dash2">
												<p class=" mb-0 "> Total Investiment</p>
												<h2 class="mb-2">$38925<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1 "></i> 0.78%</span> than last week</span></h2>
												<div class="progress progress-xs mb-0">
													<div class="progress-bar bg-primary" style="width: 78%"></div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12 border-right dash2">
												<p class=" mb-0 ">Overall Profit</p>
												<h2 class="mb-2">$1.6M<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1 "></i> 13%</span> than last week</span></h2>
												<div class="progress progress-xs mb-0">
													<div class="progress-bar bg-secondary" style="width: 58%"></div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12 border-right dash2">
												<p class=" mb-0 "> Total Transactions</p>
												<h2 class="mb-2">3,56,789<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-up ml-1 "></i> 0.78%</span> than last week</span></h2>
												<div class="progress progress-xs mb-0">
													<div class="progress-bar bg-warning" style="width: 73%"></div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12 dash2">
												<p class=" mb-0 "> Total Balance</p>
												<h2 class="mb-2">$2,45,789<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1 "></i> 12%</span> than last week</span></h2>
												<div class="progress progress-xs mb-0">
													<div class="progress-bar bg-success" style="width: 45%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Latest News</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="latest-timeline">
											<ul class="timeline mb-0">
												<li class="mt-0">
													<h6><a target="_blank" href="#" class="text-dark fs-17">Sed ut perspiciatis iste natus</a></h6>
													<span  class="text-muted fs-12">01 May, 2019</span>
													<p class="mt-1 fs-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nisi ut aliquip. </p>
												</li>
												<li>
													<h6><a href="#" class="text-dark fs-17">Nam libero tempore, cum soluta</a></h6>
													<span class="text-muted fs-12">29 Apr, 2019</span>
													<p class="mt-1 fs-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nisi ut aliquip. </p>
												</li>
												<li>
													<h6><a href="#" class="text-dark fs-17">Excepteur sint occaecat cupidatat</a></h6>
													<span class="text-muted fs-12">23 Apr, 2019</span>
													<p class="mt-1 fs-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nisi ut aliquip.</p>
												</li>
												<li class="mb-0">
													<h6><a href="#" class="text-dark fs-17">Neque porro quisquam est</a></h6>
													<span class="text-muted fs-12">25 Apr, 2019</span>
													<p class="mt-1 fs-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nisi ut aliquip . </p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Crypt Marketing Values</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="">
										<div class="table-responsive">
											<table class="table mb-0 table-vcenter table-hover text-nowrap">
												<thead>
													<tr>
														<th>No</th>
														<th>Icon</th>
														<th>Currency</th>
														<th>Price</th>
														<th>Market Cap</th>
														<th>Volume 1D</th>
														<th>Change % (1D)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/bitcoin.svg')}}" class="w-5 h-5" alt=""></td>
														<td>Bitcoin</td>
														<td>$ 10513.00</td>
														<td>$ 51,191,183,730</td>
														<td>$ 10,133,400,000</td>
														<td><span class="badge badge-primary"> 0.66%</span></td>

													</tr>
													<tr>
														<td>2</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/ethereum.svg')}}" class="w-5 h-5" alt=""></td>
														<td>Ethereum</td>
														<td>$ 425.25</td>
														<td>$ 4,48,308,110</td>
														<td>$ 193,430,000</td>
														<td><span class="badge  badge-success"> 0.64%</span></td>
													</tr>
													<tr>
														<td>3</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/ripple.svg')}}" class="w-5 h-5" alt=""></td>
														<td>Ripple</td>
														<td>$ 1.2029</td>
														<td>$ 7,63,80,043</td>
														<td>$ 42,677,430,000</td>
														<td><span class="badge  badge-warning"> 0.79%</span></td>
													</tr>
													<tr>
														<td>3</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/bitcoincash.svg')}}" class="w-5 h-5" alt=""></td>
														<td>Bitcoincash</td>
														<td>$ 1547.67</td>
														<td>$ 6,14,18,730</td>
														<td>$ 40,13,40,000</td>
														<td><span class="badge  badge-secondary"> 0.32%</span></td>
													</tr>
													<tr>
														<td>4</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/nem.svg')}}" class="w-5 h-5" alt=""></td>
														<td>Nem</td>
														<td>$ 723.48</td>
														<td>$ 19,07,67,295</td>
														<td>$ 17,99,90,000</td>
														<td><span class="badge  badge-success"> 6.26%</span></td>
													</tr>
													<tr>
														<td>5</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/neo.svg')}}" class="w-5 h-5" alt=""></td>
														<td>Neo</td>
														<td>$ 149.18</td>
														<td>$ 8,44,49,000</td>
														<td>$ 7,10,10,000</td>
														<td><span class="badge badge-info"> 36.98%</span></td>
													</tr>
													<tr>
														<td>6</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/qtum.svg')}}" class="w-5 h-5" alt=""></td>
														<td>Qtum</td>
														<td>$ 149.18</td>
														<td>$ 8,44,49,000</td>
														<td>$ 7,10,10,000</td>
														<td><span class="badge badge-danger"> 36.98%</span></td>
													</tr>
													<tr>
														<td>7</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/raiblocks.svg')}}" class="w-5 h-5" alt=""></td>
														<td>Raiblocks</td>
														<td>$ 149.18</td>
														<td>$ 8,44,49,000</td>
														<td>$ 7,10,10,000</td>
														<td><span class="badge badge-warning"> 36.98%</span></td>
													</tr>
													<tr>
														<td>8</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/iota.svg')}}" class="w-5 h-5" alt=""></td>
														<td>Iota</td>
														<td>$ 149.18</td>
														<td>$ 8,44,49,000</td>
														<td>$ 7,10,10,000</td>
														<td><span class="badge badge-success"> 36.98%</span></td>
													</tr>
													<tr>
														<td>9</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/dash.svg')}}" class="w-5 h-5" alt=""></td>
														<td>Dash</td>
														<td>$ 149.18</td>
														<td>$ 8,44,49,000</td>
														<td>$ 7,10,10,000</td>
														<td><span class="badge badge-secondary"> 36.98%</span></td>
													</tr>
													<tr>
														<td>10</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/tron.svg')}}" class="w-5 h-5" alt=""></td>
														<td>Tron</td>
														<td>$ 149.18</td>
														<td>$ 8,44,49,000</td>
														<td>$ 7,10,10,000</td>
														<td><span class="badge badge-primary"> 36.98%</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!--Chart js -->
<script src="{{URL::asset('assets/plugins/chart/chart.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/chart.extension.js')}}"></script>
<!-- ECharts js-->
<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>
<!--Newsticker js-->
<script src="{{URL::asset('assets/plugins/newsticker/newsticker.js')}}"></script>
<script src="{{URL::asset('assets/js/newsticker.js')}}"></script>
<!-- Index js-->
<script src="{{URL::asset('assets/js/index5.js')}}"></script>
@endsection