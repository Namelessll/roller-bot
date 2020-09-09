<!-- header -->
				<div class="header top-header">
					<div class="container">
						<div class="d-flex">
							<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a><!-- sidebar-toggle-->
							<a class="header-brand" href="{{ url('/' . $page='index') }}">
								<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Clont logo">
								<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Clont logo">
								<img src="{{URL::asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Clont logo">
								<img src="{{URL::asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Clont logo">
							</a>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="dropdown   header-fullscreen" >
									<a  class="nav-link icon full-screen-link"  id="fullscreen-button">
										<i class="fe fe-minimize"></i>
									</a>
								</div>
								<div class="dropdown    header-notify">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell"></i>
										<span class="pulse "></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fe fe-message-square"></i>
											</div>
											<div>
												<div>Message Sent.</div>
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-danger">
												<i class="fe fe-shopping-cart"></i>
											</div>
											<div>
												<div> Order Placed</div>
												<div class="small text-muted">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-success">
												<i class="fe fe-calendar"></i>
											</div>
											<div>
												<div> Event Started</div>
												<div class="small text-muted">45 mintues ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-warning">
												<i class="fe fe-airplay"></i>
											</div>
											<div>
												<div>Your Admin lanuched</div>
												<div class="small text-muted">1 daya ago</div>
											</div>
										</a>
										<div class=" text-center p-2 border-top">
											<a href="#" class="">View All Notifications</a>
										</div>
									</div>
								</div>
								<div class="dropdown ">
									<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span>
											<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="img" class="avatar avatar-md brround">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center user pb-0">John Thomson</a>
											<span class="text-center user-semi-title text-dark">App Developer</span>
											<div class="dropdown-divider"></div>
										</div>
										<a class="dropdown-item" href="{{ url('/' . $page='login') }}">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
