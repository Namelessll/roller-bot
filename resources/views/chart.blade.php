@extends('layouts.master')
@section('css')
<!-- C3 Charts css-->
<link href="{{URL::asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Chart</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Chart</li>
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
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">c3 charts</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="">
											<div class="example example-bg">
												<div class="example-column example-column-2">
													<div class="card">
														<div class="card-header">
															<h3 class="card-title">Chart name</h3>
														</div>
														<div class="card-body">
															<div id="chart-combination" class="chartsh"></div>
														</div>
													</div>
												</div>
											</div>

											<div class="highlight">
<pre><code class="language-html" data-lang="html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Chart name<span class="nt">&lt;/h3&gt;</span>
	<span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"chart-combination"</span> <span class="na">class=</span><span class="s">"chartsh chart-dropshadow"</span><span class="nt">&gt;&lt;/div&gt;</span>
	<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;script&gt;</span>
	<span class="nx">$</span><span class="p">(</span><span class="nb">document</span><span class="p">).</span><span class="nx">ready</span><span class="p">(</span><span class="kd">function</span><span class="p">(){</span>
			<span class="kd">var</span> <span class="nx">chart</span> <span class="o">=</span> <span class="nx">c3</span><span class="p">.</span><span class="nx">generate</span><span class="p">({</span>
			<span class="na">bindto</span><span class="p">:</span> <span class="s1">'#chart-combination'</span><span class="p">,</span> <span class="c1">// id of chart wrapper</span>
			<span class="na">data</span><span class="p">:</span> <span class="p">{</span>
				<span class="na">columns</span><span class="p">:</span> <span class="p">[</span>
				<span class="c1">// each columns data</span>
					<span class="p">[</span><span class="s1">'data1'</span><span class="p">,</span> <span class="mf">100</span><span class="p">,</span> <span class="mf">130</span><span class="p">,</span> <span class="mf">150</span><span class="p">,</span><span class="mf">240</span><span class="p">,</span> <span class="mf">130</span><span class="p">,</span> <span class="mf">220</span><span class="p">],</span>
					<span class="p">[</span><span class="s1">'data2'</span><span class="p">,</span> <span class="mf">250</span><span class="p">,</span> <span class="mf">200</span><span class="p">,</span> <span class="mf">220</span><span class="p">,</span> <span class="mf">400</span><span class="p">,</span> <span class="mf">250</span> <span class="p">,</span> <span class="mf">350</span><span class="p">]'</span>
					<span class="p">[</span><span class="s1">'data3'</span><span class="p">,</span> <span class="mf">100</span><span class="p">,</span> <span class="mf">130</span><span class="p">,</span> <span class="mf">150</span><span class="p">,</span><span class="mf">240</span><span class="p">,</span> <span class="mf">130</span><span class="p">,</span> <span class="mf">220</span><span class="p">]</span>

				<span class="p">],</span>
				<span class="na">type</span><span class="p">:</span> <span class="s1">'bar'</span><span class="p">,</span> <span class="c1">// default type of chart</span>

				<span class="na">colors</span><span class="p">:</span> <span class="p">{</span>
					<span class="s1">'data1'</span><span class="p">:</span> <span class="nx">Clont</span><span class="p">.</span><span class="nx">colors</span><span class="p">[</span><span class="s2">"orange"</span><span class="p">],</span>
					<span class="s1">'data2'</span><span class="p">:</span> <span class="nx">Clont</span><span class="p">.</span><span class="nx">colors</span><span class="p">[</span><span class="s2">"pink"</span><span class="p">]</span>
					<span class="s1">'data3'</span><span class="p">:</span> <span class="nx">Clont</span><span class="p">.</span><span class="nx">colors</span><span class="p">[</span><span class="s2">"teal"</span><span class="p">]</span>
				<span class="p">},</span>
				<span class="na">names</span><span class="p">:</span> <span class="p">{</span>
				<span class="c1">// name of each serie</span>
					<span class="s1">'data1'</span><span class="p">:</span> <span class="s1">'Marketing'</span><span class="p">,</span>
					<span class="s1">'data2'</span><span class="p">:</span> <span class="s1">'Development'</span>
					<span class="s1">'data3'</span><span class="p">:</span> <span class="s1">'Sales'</span>
				<span class="p">}</span>
			<span class="p">},</span>
			<span class="na">axis</span><span class="p">:</span> <span class="p">{</span>
				<span class="na">x</span><span class="p">:</span> <span class="p">{</span>
				<span class="na">type</span><span class="p">:</span> <span class="s1">'category'</span><span class="p">,</span>
				<span class="c1">// name of each category</span>
				<span class="na">categories</span><span class="p">:</span> <span class="p">[</span><span class="s1">'2007-2008'</span><span class="p">,</span> <span class="s1">'2009-2010'</span><span class="p">,</span> <span class="s1">'2011-2012'</span><span class="p">,</span> <span class="s1">'2013-2014'</span><span class="p">,</span> <span class="s1">'2015-2016'</span><span class="p">,</span> <span class="s1">'2017-2018'</span><span class="p">]</span>
				<span class="p">},</span>
			<span class="p">},</span>
			<span class="na">bar</span><span class="p">:</span> <span class="p">{</span>
				<span class="na">width</span><span class="p">:</span> <span class="kc">50</span>
			<span class="p">},</span>
			<span class="na">legend</span><span class="p">:</span> <span class="p">{</span>
				<span class="na">show</span><span class="p">:</span> <span class="kc">false</span><span class="p">,</span> <span class="c1">//hide legend</span>
			<span class="p">},</span>
			<span class="na">padding</span><span class="p">:</span> <span class="p">{</span>
				<span class="na">bottom</span><span class="p">:</span> <span class="mi">0</span><span class="p">,</span>
				<span class="na">top</span><span class="p">:</span> <span class="mi">0</span>
			<span class="p">},</span>
		<span class="p">});</span>
	<span class="p">});</span>
<span class="nt">&lt;/script&gt;</span></code></pre>
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
<!-- c3 Charts js -->
<script src="{{URL::asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>
<script src="{{URL::asset('assets/js/charts.js')}}"></script>
@endsection