@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Avatars</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Avatars</li>
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
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Simple Square Avatar</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./{{URL::asset('assets/images/users/1.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/2.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/1.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/2.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/3.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Simple Round Avatar</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar  brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar  brround" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
													<span class="avatar  brround" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
													<span class="avatar  brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar  brround" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar  brround"</span> <span class="na">style=</span><span class="s">"background-image: url(./{{URL::asset('assets/images/users/12.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar  brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/13.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar  brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/11.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar  brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/12.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar  brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/14.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Simple Radius Avatar</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
												</div>
											</div>
											<div class="highlight">
						<pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url(./{{URL::asset('assets/images/users/1.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/2.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/1.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/2.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/3.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!--Row-->
						<div class="row">
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Avatar Size</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar avatar-sm" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
													<span class="avatar avatar-md" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
													<span class="avatar avatar-lg" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
													<span class="avatar avatar-xl" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
													<span class="avatar avatar-xxl" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-sm"</span> <span class="na">style=</span><span class="s">"background-image: url(./{{URL::asset('assets/images/users/4.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./{{URL::asset('assets/images/users/3.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-md"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/6.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-lg"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/6.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xl"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/4.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xxl"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/7.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Rounded Avatar Size</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar avatar-sm brround" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
													<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
													<span class="avatar avatar-lg brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
													<span class="avatar avatar-xl brround" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
													<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-sm brround"</span> <span class="na">style=</span><span class="s">"background-image: url(./{{URL::asset('assets/images/users/15.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span> <span class="na">style=</span><span class="s">"background-image: url(./{{URL::asset('assets/images/users/13.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-md brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/16.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-lg brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/17.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xl brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/14.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xxl brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/18.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Radius Avatar Size</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar avatar-sm bradius" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
													<span class="avatar avatar-md bradius" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
													<span class="avatar avatar-lg bradius" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
													<span class="avatar avatar-xl bradius" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
													<span class="avatar avatar-xxl bradius" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-sm bradius"</span> <span class="na">style=</span><span class="s">"background-image: url(./{{URL::asset('assets/images/users/15.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url(./{{URL::asset('assets/images/users/13.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-md bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/16.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-lg bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/17.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xl bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/14.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xxl bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/18.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Avatar Status</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})">
														<span class="avatar-status"></span>
													</span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})">
														<span class="avatar-status bg-red"></span>
													</span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})">
														<span class="avatar-status bg-green"></span>
													</span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
														<span class="avatar-status bg-yellow"></span>
													</span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/8.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/5.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/9.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-red"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/6.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-green"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/7.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-yellow"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Rounded Avatar Status</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})">
														<span class="avatar-status"></span>
													</span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})">
														<span class="avatar-status bg-red"></span>
													</span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})">
														<span class="avatar-status bg-green"></span>
													</span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
														<span class="avatar-status bg-yellow"></span>
													</span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/19.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/15.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/20.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-red"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/16.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-green"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/17.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-yellow"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Radius Avatar Status</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})">
														<span class="avatar-status"></span>
													</span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})">
														<span class="avatar-status bg-red"></span>
													</span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})">
														<span class="avatar-status bg-green"></span>
													</span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
														<span class="avatar-status bg-yellow"></span>
													</span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/19.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/15.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/20.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-red"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/16.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-green"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/17.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-yellow"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Avatars List</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">

											<div class="example">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
													<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
													<span class="avatar">+8</span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"avatar-list avatar-list-stacked"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/10.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/8.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/9.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/10.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/11.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span><span class="nt">&gt;</span>+8<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Rounded Avatars List</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
													<span class="avatar brround">+8</span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"avatar-list avatar-list-stacked"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/12.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/21.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/29.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/2.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/34.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround"</span><span class="nt">&gt;</span>+8<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Radius Avatars List</h4>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
													<span class="avatar bradius">+8</span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"avatar-list avatar-list-stacked"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/12.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/21.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/29.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/2.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/34.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar bradius"</span><span class="nt">&gt;</span>+8<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
											</div>
										</div>
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