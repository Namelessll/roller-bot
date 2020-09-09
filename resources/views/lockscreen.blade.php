@extends('layouts.master2')
@section('css')
@endsection
@section('content')

		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="text-center mb-6">
								<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Clont logo">
								<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Clont logo">
							</div>
							<div class="card-group mb-0">
								<div class="card p-4">
									<div class="card-body">
										<div class="text-center mb-4 ">
											<span class="avatar avatar-xxl  brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
										</div>
										<span class="m-4 d-none d-lg-block text-center">
											<span class=""><strong>John Thomson</strong></span>
										</span>
										<div class="form-group">
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
										<a href="{{ url('/' . $page='index') }}" class="btn btn-primary btn-block">Unlock</a>
									</div>
								</div>
								<div class="card text-white bg-primary py-5 d-md-down-none ">
									<div class="card-body text-center align-items-center">
										<div>
											<h2>Welcome to plight</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.ed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
											<a href="{{ url('/' . $page='login') }}" class="btn btn-secondary active mt-0">send me back</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

@endsection
@section('js')
@endsection