@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Tags</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tags</li>
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
										<h3 class="card-title">Default tag</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag">First tag</span>
													<span class="tag">Second tag</span>
													<span class="tag">Third tag</span>
												</div>
											</div>
											<div class="highlight">
						<pre>Example:
<code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>First tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Second tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Third tag<span class="nt">&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Link tag</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<a href="#" class="tag">First tag</a>
													<a href="#" class="tag">Second tag</a>
													<a href="#" class="tag">Third tag</a>
												</div>
											</div>
											<div class="highlight">
                        <pre>Example:
<code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>First tag<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Second tag<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Third tag<span class="nt">&lt;/a&gt;</span></code></pre>
											</div>
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
										<h3 class="card-title">Rounded tag</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-rounded">First tag</span>
													<span class="tag tag-rounded">Second tag</span>
													<span class="tag tag-rounded">Third tag</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color tag</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-blue">Blue tag</span>
													<span class="tag tag-azure">Azure tag</span>
													<span class="tag tag-indigo">Indigo tag</span>
													<span class="tag tag-purple">Purple tag</span>
													<span class="tag tag-pink">Pink tag</span>
													<span class="tag tag-red">Red tag</span>
													<span class="tag tag-orange">Orange tag</span>
													<span class="tag tag-yellow">Yellow tag</span>
													<span class="tag tag-lime">Lime tag</span>
													<span class="tag tag-green">Green tag</span>
													<span class="tag tag-teal">Teal tag</span>
													<span class="tag tag-cyan">Cyan tag</span>
													<span class="tag tag-gray">Gray tag</span>
													<span class="tag tag-gray-dark">Dark gray tag</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List of tags</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>You can create a list of tags with the <code class="highlighter-rouge">.tags</code> container.</p>
											<div class="example">
												<div class="tags">
													<span class="tag">First tag</span>
													<span class="tag">Second tag</span>
													<span class="tag">Third tag</span>
												</div>
											</div>
											<p class="mt-4">If the list is very long, it will automatically wrap on multiple lines, while keeping all tags evenly spaced.</p>
											<div class="example">
												<div class="tags">
													<span class="tag">One</span>
													<span class="tag">Two</span>
													<span class="tag">Three</span>
													<span class="tag">Four</span>
													<span class="tag">Five</span>
													<span class="tag">Six</span>
													<span class="tag">Seven</span>
													<span class="tag">Eight</span>
													<span class="tag">Nine</span>
													<span class="tag">Ten</span>
													<span class="tag">Eleven</span>
													<span class="tag">Twelve</span>
													<span class="tag">Thirteen</span>
													<span class="tag">Fourteen</span>
													<span class="tag">Fifteen</span>
													<span class="tag">Sixteen</span>
													<span class="tag">Seventeen</span>
													<span class="tag">Eighteen</span>
													<span class="tag">Nineteen</span>
													<span class="tag">Twenty</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Avatar tag</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag">
														<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
														Victoria
													</span>
													<span class="tag">
														<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
														Nathan
													</span>
													<span class="tag">
														<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
														Alice
													</span>
													<span class="tag">
														<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
														Rose
													</span>
													<span class="tag">
														<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
														Peter
													</span>
													<span class="tag">
														<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
														Wayne
													</span>
													<span class="tag">
														<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
														Michelle
													</span>
													<span class="tag">
														<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
														Debra
													</span>
												</div>
											</div>
											<div class="highlight">
                        <pre>Example: <code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
			<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-avatar avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/users/female/16.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
			Victoria
		<span class="nt">&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Tag remove</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag">
														One
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag">
														Two
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag">
														Three
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag">
														Four
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
												</div>
											</div>
											<div class="highlight">
                        <pre>Example: <code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tags"</span><span class="nt">&gt;</span>
			<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
				One
				<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag-addon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-x"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
			<span class="nt">&lt;/span&gt;</span>
		<span class="nt">&lt;/div&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Tag addons</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<div class="tag">
														npm
														<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
													</div>
													<div class="tag tag-danger">
														npm
														<span class="tag-addon"><i class="fe fe-activity"></i></span>
													</div>
													<div class="tag">
														bundle
														<span class="tag-addon tag-success">passing</span>
													</div>
													<span class="tag tag-dark">
														CSS gzip size
														<span class="tag-addon tag-warning">20.9 kB</span>
													</span>
												</div>
											</div>
											<div class="highlight">
                        <pre>Example:<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
			npm
			<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag-addon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-x"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
		<span class="nt">&lt;/div&gt;</span>
		</code></pre>
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