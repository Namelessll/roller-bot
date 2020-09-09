@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Colors</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Colors</li>
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
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual colors</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="row">
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-primary rounded mr-4"></div>
															<div>
																<strong>Primary</strong><br />
																<code>.bg-primary</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-info rounded mr-4"></div>
															<div>
																<strong>Info</strong><br />
																<code>.bg-info</code>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-secondary rounded mr-4"></div>
															<div>
																<strong>Secondary</strong><br />
																<code>.bg-secondary</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-warning rounded mr-4"></div>
															<div>
																<strong>Warning</strong><br />
																<code>.bg-warning</code>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-success rounded mr-4"></div>
															<div>
																<strong>Success</strong><br />
																<code>.bg-success</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-danger rounded mr-4"></div>
															<div>
																<strong>Danger</strong><br />
																<code>.bg-danger</code>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="highlight">
                        <pre>Example: <code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-2 mt-2"</span><span class="nt">&gt;</span>
			<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-primary rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
			<span class="nt">&lt;div&gt;</span>
				<span class="nt">&lt;strong&gt;</span>Primary<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
				<span class="nt">&lt;code&gt;</span>.bg-primary<span class="nt">&lt;/code&gt;</span>
			<span class="nt">&lt;/div&gt;</span>
		<span class="nt">&lt;/div&gt;</span>
			</code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Other colors</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="row">
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-blue rounded mr-4"></div>
															<div>
																<strong>Blue</strong><br />
																<code>.bg-blue</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-azure rounded mr-4"></div>
															<div>
																<strong>Azure</strong><br />
																<code>.bg-azure</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-indigo rounded mr-4"></div>
															<div>
																<strong>Indigo</strong><br />
																<code>.bg-indigo</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-purple rounded mr-4"></div>
															<div>
																<strong>Purple</strong><br />
																<code>.bg-purple</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-pink rounded mr-4"></div>
															<div>
																<strong>Pink</strong><br />
																<code>.bg-pink</code>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-red rounded mr-4"></div>
															<div>
																<strong>Red</strong><br />
																<code>.bg-red</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-orange rounded mr-4"></div>
															<div>
																<strong>Orange</strong><br />
																<code>.bg-orange</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-yellow rounded mr-4"></div>
															<div>
																<strong>Yellow</strong><br />
																<code>.bg-yellow</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-lime rounded mr-4"></div>
															<div>
																<strong>Lime</strong><br />
																<code>.bg-lime</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-green rounded mr-4"></div>
															<div>
																<strong>Green</strong><br />
																<code>.bg-green</code>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-teal rounded mr-4"></div>
															<div>
																<strong>Teal</strong><br />
																<code>.bg-teal</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-cyan rounded mr-4"></div>
															<div>
																<strong>Cyan</strong><br />
																<code>.bg-cyan</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-gray rounded mr-4"></div>
															<div>
																<strong>Gray</strong><br />
																<code>.bg-gray</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-gray-dark rounded mr-4"></div>
															<div>
																<strong>Dark gray</strong><br />
																<code>.bg-gray-dark</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-secondary rounded mr-4"></div>
															<div>
																<strong>Dark blue</strong><br />
																<code>.bg-secondary</code>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="highlight">
                        <pre>Example: <code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-2 mt-2"</span><span class="nt">&gt;</span>
			<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-blue rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
			<span class="nt">&lt;div&gt;</span>
				<span class="nt">&lt;strong&gt;</span>Blue<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
				<span class="nt">&lt;code&gt;</span>.bg-blue<span class="nt">&lt;/code&gt;</span>
			<span class="nt">&lt;/div&gt;</span>
		<span class="nt">&lt;/div&gt;</span>
			</code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Gradient colors</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">

											<div class="example">
												<div class="row">
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-gradient-primary rounded mr-4"></div>
															<div>
																<strong>Primary</strong><br />
																<code>.bg-gradient-primary</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-gradient-info rounded mr-4"></div>
															<div>
																<strong>Info</strong><br />
																<code>.bg-gradient-info</code>
															</div>
														</div>
													</div>
													<div class="col-md-4">

														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-gradient-warning rounded mr-4"></div>
															<div>
																<strong>Warning</strong><br />
																<code>.bg-gradient-warning</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-gradient-success rounded mr-4"></div>
															<div>
																<strong>Success</strong><br />
																<code>.bg-gradient-success</code>
															</div>
														</div>
													</div>
													<div class="col-md-4">

														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-gradient-danger rounded mr-4"></div>
															<div>
																<strong>Danger</strong><br />
																<code>.bg-gradient-danger</code>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="highlight">
                        <pre>Example: <code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-2 mt-2"</span><span class="nt">&gt;</span>
			<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-gradient-primary rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
			<span class="nt">&lt;div&gt;</span>
				<span class="nt">&lt;strong&gt;</span>Primary<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
				<span class="nt">&lt;code&gt;</span>.bg-gradient-primary<span class="nt">&lt;/code&gt;</span>
			<span class="nt">&lt;/div&gt;</span>
		<span class="nt">&lt;/div&gt;</span>
			</code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
@endsection