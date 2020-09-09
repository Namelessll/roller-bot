@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">MediaObject</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">MediaObject</li>
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
							<div class="col-md-12 col-lg-12 ">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default MediaObject</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="media media-lg m-0">
											<div class="media-left">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/photos/media1.jpg')}}" alt="media1">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Media heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
											</div>
										</div>
										<div class="media media-lg">
											<div class="media-left">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/photos/media2.jpg')}}" alt="media1">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Media heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
												<div class="media">
													<div class="media-left">
														<a href="#">
															<img class="media-object" src="{{URL::asset('assets/images/photos/media3.jpg')}}" alt="media1">
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">Nested Media  heading</h4>
														Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
													</div>
												</div>
											</div>
										</div>
										<div class="media media-lg">
											<div class="media-body">
												<h4 class="media-heading">Media heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
											</div>
											<div class="media-right">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/photos/media4.jpg')}}" alt="media1">
												</a>
											</div>
										</div>
										<div class="media media-lg">
											<div class="media-body">
												<h4 class="media-heading">Media heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
											</div>
											<div class="media-right">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/photos/media2.jpg')}}" alt="media1">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Media alignment</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="media media-lg  m-0">
											<div class="media-left">
												<a href="#">
												<img class="media-object" src="{{URL::asset('assets/images/photos/media1.jpg')}}" alt="topmedia">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Top aligned media</h4>
												<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
												<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
											</div>
										</div>
										<div class="media media-lg">
											<div class="media-left mt-8">
												<a href="#">
												<img class="media-object" src="{{URL::asset('assets/images/photos/media2.jpg')}}" alt="topmedia">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Middle aligned media</h4>
												<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
												<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
												<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
											</div>
										</div>
										<div class="media media-lg">
											<div class="media-left mt-9">
												<a href="#">
												<img class="media-object" src="{{URL::asset('assets/images/photos/media3.jpg')}}" alt="topmedia">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Bottom aligned media</h4>
												<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
												<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
												<p>  web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Media List</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="media media-lg m-0">
											<div class="media-left">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/photos/media4.jpg')}}" alt="media1">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Media heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
												<div class="media media-lg">
													<div class="media-left">
														<a href="#">
															<img class="media-object" src="{{URL::asset('assets/images/photos/media3.jpg')}}" alt="media1">
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">Nested Media  heading</h4>
														Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
														<div class="media">
															<div class="media-left">
																<a href="#">
																	<img class="media-object" src="{{URL::asset('assets/images/photos/media4.jpg')}}" alt="media1">
																</a>
															</div>
															<div class="media-body">
																<h4 class="media-heading">Nested Media  heading</h4>
																Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
															</div>
														</div>
													</div>
												</div>
												<div class="media media-lg">
													<div class="media-left">
														<a href="#">
															<img class="media-object" src="{{URL::asset('assets/images/photos/media2.jpg')}}" alt="media1">
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">Nested Media  heading</h4>
														Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
													</div>
												</div>
											</div>
										</div>
										<div class="media media-lg">
											<div class="media-left">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/photos/media1.jpg')}}" alt="media1">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading"> Media  heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Media object Dropdown</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="">
											<div class="panel-group" id="media-accordion" role="tablist" >
												<div class="media media-lg">
													<div class="media-left media-middle">
														<a data-toggle="collapse" data-parent="#accordion" href="#media-collapse-1" aria-expanded="true" >
															<img class="media-object" src="{{URL::asset('assets/images/photos/media2.jpg')}}" alt="placeholder" title="Klick um mehr zu sehen" >
														</a>
													</div>
													<div class="media-body">
														<h4 class="panel-heading m-0 pt-0 pb-0">Media heading</h4>
														<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, architecto itaque dignissimos asperiores ea commodi nam consequatur corporis sequi iure! <br>
															<footer class="panel-footer text-right p-1 mt-1">
																<a data-toggle="collapse" data-parent="#media-accordion" href="#media-collapse-1" aria-expanded="true"  class="btn btn-sm btn-info">
																	Read More
																</a>
															</footer>
														</div>
													</div>
												</div>
												<div id="media-collapse-1" class="panel-collapse collapse" role="tabpanel" >
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
												<div class="media media-lg">
													<div class="media-left media-middle">
														<a data-toggle="collapse" data-parent="#accordion" href="#media-collapse-2" aria-expanded="true" >
															<img class="media-object" src="{{URL::asset('assets/images/photos/media1.jpg')}}" alt="placeholder" title="Klick um mehr zu sehen" >
														</a>
													</div>
													<div class="media-body">
														<h4 class="panel-heading m-0 pt-0 pb-0">Media heading</h4>
														<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, architecto itaque dignissimos asperiores ea commodi nam consequatur corporis sequi iure! <br>
															<footer class="panel-footer p-1 text-right mt-1">
																<a data-toggle="collapse" data-parent="#media-accordion" href="#media-collapse-2" aria-expanded="true"  class="btn btn-sm btn-info">
																	Read More
																</a>
															</footer>
														</div>
													</div>
												</div>
												<div id="media-collapse-2" class="panel-collapse collapse" role="tabpanel" >
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
												<div class="media media-lg">
													<div class="media-left media-middle">
														<a data-toggle="collapse" data-parent="#accordion" href="#media-collapse-3" aria-expanded="true" >
															<img class="media-object" src="{{URL::asset('assets/images/photos/media3.jpg')}}" alt="placeholder" title="Klick um mehr zu sehen" >
														</a>
													</div>
													<div class="media-body">
														<h4 class="panel-heading m-0 pt-0 pb-0">Media heading</h4>
														<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, architecto itaque dignissimos asperiores ea commodi nam consequatur corporis sequi iure! <br>
															<footer class="panel-footer p-1 text-right mt-1">
																<a data-toggle="collapse" data-parent="#media-accordion" href="#media-collapse-3" aria-expanded="true" class="btn btn-sm btn-info">
																	Read More
																</a>
															</footer>
														</div>
													</div>
												</div>
												<div id="media-collapse-3" class="panel-collapse collapse" role="tabpanel" >
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</div>
												</div>
											</div>
										</div>
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