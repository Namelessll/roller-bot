@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Badges</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Badges</li>
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
						<!-- Row-->
						<div class="row">
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Badges</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<h1>Heading 01 <span class="badge badge-default">New</span></h1>
										<h2>Heading 02 <span class="badge badge-default">New</span></h2>
										<h3>Heading 03 <span class="badge badge-default">New</span></h3>
										<h4>Heading 04 <span class="badge badge-default">New</span></h4>
										<h5>Heading 05 <span class="badge badge-default">New</span></h5>
										<h6>Heading 06<span class="badge badge-default">New</span></h6>
									</div>
								</div>
							</div>
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Colored Badges</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<h1 class="text-blue">Heading 01 <span class="badge badge-primary">New</span></h1>
										<h2  class="text-red">Heading 02 <span class="badge badge-danger">New</span></h2>
										<h3  class="text-yellow">Heading 03 <span class="badge badge-warning">New</span></h3>
										<h4  class="text-green">Heading 04 <span class="badge badge-success">New</span></h4>
										<h5  class="text-info">Heading 05 <span class="badge badge-info">New</span></h5>
										<h6  class="text-secondary">Heading 06<span class="badge badge-secondary">New</span></h6>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual variations</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<span class="badge badge-default mt-2">Default</span>
										<span class="badge badge-primary mt-2">Primary</span>
										<span class="badge badge-success mt-2">Success</span>
										<span class="badge badge-info mt-2">Info</span>
										<span class="badge badge-warning mt-2">Warning</span>
										<span class="badge badge-danger mt-2">Danger</span><br>
										<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span></code></pre></div>
									</div>
								</div>
							</div>
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pill Badges</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<span class="badge badge-pill badge-default mt-2">Default</span>
										<span class="badge badge-pill badge-primary mt-2">Primary</span>
										<span class="badge badge-pill badge-success mt-2">Success</span>
										<span class="badge badge-pill badge-info mt-2">Info</span>
										<span class="badge badge-pill badge-warning mt-2">Warning</span>
										<span class="badge badge-pill badge-danger mt-2">Danger</span>
										<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span></code></pre></div>
									</div>
								</div>
							</div>
						</div>

						<!-- Row-->
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<div class="offer offer-default">
									<div class="shape">
										<div class="shape-text">
											top
										</div>
									</div>
									<div class="offer-content">
										<h3 class="lead">
											Default badge
										</h3>
										<p class="mb-0">
											And a little description.
											<br> and so one
										</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<div class="offer offer-success">
									<div class="shape">
										<div class="shape-text">
											top
										</div>
									</div>
									<div class="offer-content">
										<h3 class="lead">
											Success badge
										</h3>
										<p class="mb-0">
											And a little description.
											<br> and so one
										</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<div class="offer offer-radius offer-primary">
									<div class="shape">
										<div class="shape-text">
											top
										</div>
									</div>
									<div class="offer-content">
										<h3 class="lead">
											Primary badge
										</h3>
										<p class="mb-0">
											And a little description.
											<br> and so one
										</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<div class="offer offer-info mb-6">
									<div class="shape">
										<div class="shape-text">
											top
										</div>
									</div>
									<div class="offer-content">
										<h3 class="lead">
											Info Badge
										</h3>
										<p class="mb-0">
											And a little description.
											<br> and so one
										</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<div class="offer offer-warning mb-6">
									<div class="shape">
										<div class="shape-text">
											top
										</div>
									</div>
									<div class="offer-content">
										<h3 class="lead">
											Warning badge
										</h3>
										<p class="mb-0">
											And a little description.
											<br> and so one
										</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<div class="offer offer-radius offer-danger mb-6">
									<div class="shape">
										<div class="shape-text">
											top
										</div>
									</div>
									<div class="offer-content">
										<h3 class="lead">
											Danger Badge
										</h3>
										<p class="mb-0">
											And a little description.
											<br> and so one
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
@endsection