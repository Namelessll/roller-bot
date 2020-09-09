@extends('layouts.master')
@section('css')
<!-- WYSIWYG Editor css -->
<link href="{{URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">WYSIWYG Editor</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">WYSIWYG Editor</li>
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
						<div class="row row-cards">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">WYSIWYG Editor style1</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<textarea class="content" name="example"></textarea>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">WYSIWYG Editor style2</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<textarea class="content2" name="example"></textarea>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
<!-- WYSIWYG Editor js -->
<script src="{{URL::asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
<script src="{{URL::asset('assets/js/form-editor.js')}}"></script>
@endsection