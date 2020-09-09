@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Navigation</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Navigation</li>
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
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Nav</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<ul class="nav1">
											<li class="nav-item1">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Nav Vertical</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<ul class="nav1 flex-column">
											<li class="nav-item1">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Nav</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills">
											<li class="nav-item m-2">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item dropdown m-2">
												<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Nav Tabs</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-text" role="tablist">
											<li class="nav-item">
												<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab"  aria-selected="false">UI/UX Design</a>
											</li>
											<li class="nav-item">
												<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-selected="false">Programming</a>
											</li>
											<li class="nav-item">
												<a class="nav-link mt-2 m-lg-0 border active show p-3" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab"  aria-selected="true">Graphic</a>
											</li>
											<li class="nav-item">
												<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-4-tab" data-toggle="tab" href="#tabs-text-4" role="tab" aria-selected="false">Developing</a>
											</li>
											<li class="nav-item">
												<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-5-tab" data-toggle="tab" href="#tabs-text-5" role="tab" aria-selected="false">Photoshop</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon With Title</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
											<li class="nav-item">
												<a class="nav-link border p-3 m-2" id="tab1" data-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border p-3 m-2" id="tab2" data-toggle="tab" href="#tabs_2_2" role="tab"  aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link p-3 border active show m-2" id="tab3" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="true">
													<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border p-3 m-2" id="tab4" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border p-3 m-2" id="tab5" data-toggle="tab" href="#tabs_2_4" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Icon Nav Bar</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills nav-pills-circle" id="tabs_3" role="tablist">
											<li class="nav-item">
												<a class="nav-link border w-8 h-8 text-center br-100 m-2" id="tab21" data-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="tab1" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border w-8 h-8 br-100 m-2" id="tab22" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="tab2" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border active show w-8 h-8 br-100 m-2" id="tab23" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab3" aria-selected="true">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border w-8 h-8 br-100 m-2" id="tab24" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab4" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border  w-8 h-8 br-100 m-2" id="tab25" data-toggle="tab" href="#tabs_2_4" role="tab" aria-controls="tab5" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image"></i> </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Nav</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<ul class="nav1 bg-primary">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-info mt-4">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-success mt-4">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-danger mt-4">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-secondary mt-4">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-yellow mt-4">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
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