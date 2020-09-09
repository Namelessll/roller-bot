@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Typography</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Typography</li>
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
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Heading Text</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
											<h1>h1. Heading</h1>
											<h2>h2. Heading</h2>
											<h3>h3. Heading</h3>
											<h4>h4. Heading</h4>
											<h5>h5. Heading</h5>
											<h6>h6. Heading</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Heading with color Text</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
											<h1 class="text-primary">h1. Heading</h1>
											<h2  class="text-secondary">h2. Heading</h2>
											<h3  class="text-success">h3. Heading</h3>
											<h4  class="text-danger">h4. Heading</h4>
											<h5  class="text-info">h5. Heading</h5>
											<h6  class="text-warning">h6. Heading</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End  Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Heading-Inverse</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using <code>heading-inverse</code> css</p>
											<h1 class="heading-inverse">h1. Heading</h1>
											<h2 class="heading-secondary">h2. Heading</h2>
											<h3 class="heading-inverse">h3. Heading</h3>
											<h4 class="heading-inverse">h4. Heading</h4>
											<h5 class="heading-inverse">h5. Heading</h5>
											<h6 class="heading-inverse">h6. Heading</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Heading primary to danger</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using <code>heading-primary</code> to <code>heading-danger</code> css</p>
											<h1 class="heading-primary">h1. Heading</h1>
											<h2 class="heading-secondary">h2. Heading</h2>
											<h3 class="heading-success">h3. Heading</h3>
											<h4 class="heading-info">h4. Heading</h4>
											<h5 class="heading-warning">h5. Heading</h5>
											<h6 class="heading-danger">h6. Heading</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Paragraph Text</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
											<p class="lead">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid. The former case isn’t worth discussing here, but the latter requires a closer look.</p>
											<p>You can use the mark tag to <mark>highlight</mark> text.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Text alignment</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Easily realign text to components with text alignment classes.</p>
											<div class="example">
												<p class="text-left">Left aligned text on all viewport sizes.</p>
												<p class="text-center">Center aligned text on all viewport sizes.</p>
												<p class="text-right">Right aligned text on all viewport sizes.</p>
												<p class="text-justify m-0">Both aligned text on all viewport sizes. Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Text transform</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Transform text in components with text capitalization classes.</p>
											<div class="example">
												<p class="text-lowercase">Lowercased text.</p>
												<p class="text-uppercase">Uppercased text.</p>
												<p class="text-capitalize m-0">Capitalized text.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Letter spacing</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Utilities for controlling the tracking (letter spacing) of an element.</p>
											<div class="example">
												<p class="tracking-tight">Lorem ipsum dolor sit amet. Tight letter spacing.</p>
												<p class="tracking-normal">Lorem ipsum dolor sit amet. Normal letter spacing.</p>
												<p class="tracking-wide m-0">Lorem ipsum dolor sit amet. Wide letter spacing.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Height</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Utilities for controlling the leading (line height) of an element.</p>
											<div class="example">
												<p class="leading-none">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-tight">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-normal">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-loose m-0">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Text-styles</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body pl-5 pr-5">
										<p>You can use the mark tag to
											<mark>highlight</mark> text.
										</p>
										<p>
											<del>This line of text is meant to be treated as deleted text.</del>
										</p>
										<p>
											<s>This line of text is meant to be treated as no longer accurate.</s>
										</p>
										<p>
											<ins>This line of text is meant to be treated as an addition to the document.</ins>
										</p>
										<p><u>This line of text will render as underlined</u></p>
										<p>
											<small>This line of text is meant to be treated as fine print.</small>
										</p>
										<p><strong>This line rendered as bold text.</strong></p>
										<p><em>This line rendered as italicized text.</em></p>
										<p><b>This line rendered as italicized text.</b></p>
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