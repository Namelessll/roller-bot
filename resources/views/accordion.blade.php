@extends('layouts.master')
@section('css')
<!-- Accordion Css -->
<link href="{{URL::asset('assets/plugins/accordion/accordion.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Accordion</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Accordion</li>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Defalut Accordion</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="panel-group"  role="tablist" aria-multiselectable="true">
											<div class="panel panel-default active">
												<div class="panel-heading " role="tab" id="headingOne">
													<h4 class="panel-title">
														<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

															Collapsible Group Item #1
														</a>
													</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
													<div class="panel-body border-0">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingTwo">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

															Collapsible Group Item #2
														</a>
													</h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
													<div class="panel-body border-0">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
											<div class="panel panel-default mt-2">
												<div class="panel-heading" role="tab" id="headingThree">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

															Collapsible Group Item #3
														</a>
													</h4>
												</div>
												<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
													<div class="panel-body border-0">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
										</div><!-- panel-group -->
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Closed Accordion</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<!-- Accordion begin -->
										<ul class="demo-accordion accordionjs m-0" data-active-index="false">

											<!-- Section 1 -->
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<!-- Section 2 -->
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<!-- Section 3 -->
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Accordion Style 3</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<ul class="demo-accordion accordionjs m-0">
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 4</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Accordion style</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="panel-group1" id="accordion1">
											<div class="panel panel-default mb-4">
												<div class="panel-heading1 ">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false">Section 1</a>
													</h4>
												</div>
												<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
													<div class="panel-body">
														<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false">Section 2</a>
													</h4>
												</div>
												<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
													<div class="panel-body">
														<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
													</div>
												</div>
											</div>
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
<!-- Accordion js-->
<script src="{{URL::asset('assets/plugins/accordion/accordion.min.js')}}"></script>
<script src="{{URL::asset('assets/js/accordion.js')}}"></script>
@endsection