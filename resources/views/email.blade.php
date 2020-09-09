@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Email Inbox</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Email Inbox</li>
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
						<div class="row">
							<div class="col-lg-3 col-md-12 col-sm-12">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox">
										<div class="mt-4 mb-4 ml-4 mr-4 text-center">
											<a href="#" class="btn btn-primary btn-lg btn-block">Compose</a>
										</div>
										<a href="emailservices.html" class="list-group-item list-group-item-action d-flex align-items-center active">
											<span class="icon mr-3"><i class="fe fe-inbox"></i></span>Inbox <span class="ml-auto badge badge-success">14</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-send"></i></span>Sent Mail
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-alert-circle"></i></span>Important <span class="ml-auto badge badge-danger">3</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-star"></i></span>Starred
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-file"></i></span>Drafts
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-tag"></i></span>Tags
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-trash-2"></i></span>Trash
										</a>
									</div>
								</div>
								<div class="card">
									<div class="online-status d-flex justify-content-between align-items-center mt-4 mb-2 ml-2">
										<h5 class="chat">Chats</h5>
										<div class="status offline online"> <h6 class="online text-right">online</h6></div>
									</div>
                                    <ul class="mail-chats">
                                        <li class="chat-persons">
                                            <a href="#">
                                                <span class="pro-pic"><img src="{{URL::asset('assets/images/users/8.jpg')}}" alt=""></span>
                                                <div class="user">
                                                    <p class="u-name">David</p>
                                                    <p class="u-designation">Python Developer</p>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- list person -->
                                        <li class="chat-persons">
                                            <a href="#">
                                                <span class="pro-pic"><img src="{{URL::asset('assets/images/users/2.jpg')}}" alt=""></span>
                                                <div class="user">
                                                    <p class="u-name">Stella Johnson</p>
                                                    <p class="u-designation">SEO Expert</p>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- list person -->
                                        <li class="chat-persons">
                                            <a href="#">
                                                <span class="pro-pic"><img src="{{URL::asset('assets/images/users/7.jpg')}}" alt=""></span>
                                                <div class="user">
                                                    <p class="u-name">Marina Michel</p>
                                                    <p class="u-designation">Business Development</p>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- list person -->
                                        <li class="chat-persons">
                                            <a href="#">
                                                <span class="pro-pic"><img src="{{URL::asset('assets/images/users/2.jpg')}}" alt=""></span>
                                                <div class="user">
                                                    <p class="u-name">Edward Fletcher</p>
                                                    <p class="u-designation">UI/UX Designer</p>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- list person -->
                                    </ul>
                                    <!-- CHAT -->
								</div>
							</div>
							<div class="col-lg-9 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Compose new message</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<form >
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-2">To</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-2">Subject</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row ">
													<label class="col-sm-2">Message</label>
													<div class="col-sm-10">
														<textarea rows="10" class="form-control"></textarea>
													</div>
												</div>
											</div>
											<div class="btn-list mt-4 text-right">
												<button type="button" class="btn btn-secondary btn-space">Cancel</button>
												<button type="submit" class="btn btn-primary btn-space">Send message</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
@endsection