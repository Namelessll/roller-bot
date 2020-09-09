@extends('layouts.master2')
@section('css')
<!--- JQUERY-COUNTDOWN CSS -->
<link href="{{URL::asset('assets/plugins/jquery-countdown/jquery.countdown.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')

		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row text-center  mx-auto">
						<div class="col-lg-8 col-sm-12 center-block align-items-center construction  ">
							<div class="text-center mb-4">
								<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Clont logo">
								<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Clont logo">
							</div>
							<div class="construction-body">
								<div class="card-body ">
									<h2 class="display-5 mb-2"><strong>Under Construction</strong></h2>
									<h4>Our website is in Under construction</h4>
									<div id="launch_date"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
@section('js')
<!-- JQUERY-COUNTDOWN JS-->
<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-countdown/countdown.js')}}"></script>
@endsection