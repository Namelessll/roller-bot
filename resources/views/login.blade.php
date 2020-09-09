@extends('layouts.master2')
@section('css')
@endsection
@section('content')

		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col mx-auto">
							<div class="text-center mb-6">
								<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Clont logo">
								<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Clont logo">
							</div>
							<div class="row justify-content-center">
								<div class="col-md-8">
									<div class="card-group mb-0">
										<div class="card p-4">
											<div class="card-body">
												<h1>Login</h1>
												<p class="text-muted">Sign In to your account</p>
												<div class="input-group mb-3">
													<span class="input-group-addon"><i class="fa fa-user"></i></span>
													<input type="text" class="form-control" placeholder="Username">
												</div>
												<div class="input-group mb-4">
													<span class="input-group-addon"><i class="fa fa-lock"></i></span>
													<input type="password" class="form-control" placeholder="Password">
												</div>
												<div class="row">
													<div class="col-12">
														<button type="button" class="btn btn-primary btn-block">Login</button>
													</div>
													<div class="col-12">
														<a href="{{ url('/' . $page='forgot-password') }}" class="btn btn-link box-shadow-0 px-0">Forgot password?</a>
													</div>
												</div>
											</div>
										</div>
										<div class="card text-white bg-primary py-5 d-md-down-none ">
											<div class="card-body text-center justify-content-center ">
												<h2>Sign up</h2>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.ed ut perspiciatis unde omnis iste natus error sit voluptatem  </p>
												<a href="{{ url('/' . $page='register') }}" class="btn btn-secondary mt-3">Register Now!</a>
											</div>
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