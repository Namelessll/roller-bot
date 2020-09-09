@extends('layouts.master2')
@section('css')
@endsection
@section('content')

		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col  mx-auto">
							<div class="text-center mb-6">
								<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Clont logo">
								<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Clont logo">
							</div>
							<div class="row justify-content-center">
								<div class="col-md-8">
									<div class="card-group mb-0">
										<div class="card p-4">
											<div class="card-body">
												<h1>Forgot password</h1>
												<div class="input-group mb-4">
													<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
													<input type="password" class="form-control" placeholder="Email address">
												</div>
												<div class="row">
													<div class="col-12">
														<button type="button" class="btn btn-primary btn-block">Send</button>
													</div>
												</div>
											</div>
										</div>
										<div class="card text-white bg-primary py-5 d-md-down-none ">
											<div class="card-body text-center align-items-center">
												<div>
													<h2>Forget it</h2>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit aliqua.</p>
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
			</div>
		</div>

@endsection
@section('js')
@endsection