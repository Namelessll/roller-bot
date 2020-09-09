@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Email Services</h4>
								<ol class="breadcrumb pl-0">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Email Services</li>
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
							<div class="col-md-12 col-lg-3">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox">
										<div class="mt-4 mb-4 ml-4 mr-4 text-center">
											<a href="email.html" class="btn btn-primary btn-lg btn-block">Compose</a>
										</div>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
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
                                                <span class="pro-pic"><img src="{{URL::asset('assets/images/users/9.jpg')}}" alt=""></span>
                                                <div class="user">
                                                    <p class="u-name">David</p>
                                                    <p class="u-designation">Python Developer</p>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- list person -->
                                        <li class="chat-persons">
                                            <a href="#">
                                                <span class="pro-pic"><img src="{{URL::asset('assets/images/users/1.jpg')}}" alt=""></span>
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
							<div class="col-md-12 col-lg-9">
								<div class="card">
									<div class="card-body p-6">
										<div class="inbox-body">
											<div class="mail-option">
												<div class="chk-all">
													<input type="checkbox" class="mail-checkbox mail-group-checkbox">
													<div class="btn-group">
														<a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
															All
															<i class="fa fa-angle-down "></i>
														</a>
														<ul class="dropdown-menu">
															<li><a href="#"> None</a></li>
															<li><a href="#"> Read</a></li>
															<li><a href="#"> Unread</a></li>
														</ul>
													</div>
												</div>
												<div class="btn-group">
													<a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
														<i class=" fa fa-refresh"></i>
													</a>
												</div>
												<div class="btn-group hidden-phone">
													<a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
														More
														<i class="fa fa-angle-down "></i>
													</a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
														<li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
													</ul>
												</div>
												<ul class="unstyled inbox-pagination">
													<li><span>1-50 of 234</span></li>

													<li>
														<a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
													</li>
												</ul>
											</div>
											<div class="table-responsive">
												<table class="table table-inbox table-hover">
													<tbody>

														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">Tim Reid, S P N</td>
															<td class="view-message">Boost Your Website Traffic</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">April 01</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="view-message dont-show">Freelancer.com </td>
															<td class="view-message">Stop wasting your visitors </td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">May 23</td>
														</tr>
														<tr class="unread">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message  dont-show">PHPClass</td>
															<td class="view-message ">Added a new class: Login Class Fast Site</td>
															<td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message  text-right">9:27 AM</td>
														</tr>

														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">Facebook</td>
															<td class="view-message view-message">Somebody requested a new password </td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">June 13</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">Skype</td>
															<td class="view-message view-message">Password successfully changed</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 24</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="view-message dont-show">Google+</td>
															<td class="view-message">alireza, do you know</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 09</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="view-message dont-show">WOW Slider </td>
															<td class="view-message">New WOW Slider v7.8 - 67% off</td>
															<td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message text-right">March 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="view-message dont-show">LinkedIn Pulse</td>
															<td class="view-message">The One Sign Your Co-Worker Will Stab</td>
															<td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message text-right">Feb 19</td>
														</tr>
														<tr class="unread">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">Google Webmaster </td>
															<td class="view-message">Improve the search presence of WebSite</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">JW Player</td>
															<td class="view-message">Last Chance: Upgrade to Pro for </td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">Drupal Community</td>
															<td class="view-message view-message">Welcome to the Drupal Community</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 04</td>
														</tr>

														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="dont-show">Zoosk </td>
															<td class="view-message">7 new singles we think you'll like</td>
															<td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message text-right">May 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">LinkedIn </td>
															<td class="view-message">Alireza: Nokia Networks, System Group and </td>
															<td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message text-right">February 25</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="dont-show">Facebook</td>
															<td class="view-message view-message">Your account was recently logged into</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">March 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">Twitter</td>
															<td class="view-message">Your Twitter password has been changed</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">April 07</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">InternetSeer Website Monitoring</td>
															<td class="view-message">Performance Report</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">July 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">Bertina </td>
															<td class="view-message">IMPORTANT: Don't lose your domains!</td>
															<td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message text-right">June 16</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="view-message dont-show">Laura Gaffin, S P N </td>
															<td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">August 10</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">Facebook</td>
															<td class="view-message view-message">Alireza Zare Login faild</td>
															<td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message text-right">feb 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="view-message dont-show">AddMe.com</td>
															<td class="view-message">Submit Your Website to the AddMe Business Directory</td>
															<td class="view-message inbox-small-cells"></td>
															<td class="view-message text-right">August 10</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show">Terri Rexer, S P N</td>
															<td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
															<td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
															<td class="view-message text-right">April 14</td>
														</tr>

													</tbody>
												</table>

											</div>
										</div>
									</div>
								</div>
								<ul class="pagination ">
									<li class="page-item page-prev disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item page-next">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div><!-- end app-content-->
			</div>
@endsection
@section('js')
@endsection