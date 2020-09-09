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
												<h1>Register</h1>
												<p class="text-muted">Create New Account</p>
												<div class="input-group mb-3">
													<span class="input-group-addon"><i class="fa fa-user w-4"></i></span>
													<input type="text" class="form-control" placeholder="Entername">
												</div>
												<div class="input-group mb-4">
													<span class="input-group-addon"><i class="fa fa-envelope  w-4"></i></span>
													<input type="text" class="form-control" placeholder="Enetr Email">
												</div>
												<div class="input-group mb-4">
													<span class="input-group-addon"><i class="fa fa-lock  w-4"></i></span>
													<input type="password" class="form-control" placeholder="Password">
												</div>
												<div class="form-group">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" />
														<span class="custom-control-label">Agree the <a href="{{ url('/' . $page='terms') }}">terms and policy</a></span>
													</label>
												</div>
												<div class="row">
													<div class="col-12">
														<button type="button" class="btn btn-primary btn-block px-4">create a new account</button>
													</div>

												</div>
											</div>
										</div>
										<div class="card text-white bg-primary py-5 d-md-down-none">
											<div class="card-body text-center">
												<div>
													<h2>Already have account?</h2>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
													<a href="{{ url('/' . $page='login') }}" class="btn btn-secondary mt-3">Sign in</a>
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
		</div>

@endsection
@section('js')
@endsection