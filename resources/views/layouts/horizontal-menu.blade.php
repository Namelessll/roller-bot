<!-- Horizontal-menu -->
				<div class="horizontal-main hor-menu clearfix">
					<div class="horizontal-mainwrapper container clearfix">
						<nav class="horizontalMenu clearfix">
							<ul class="horizontalMenu-list">
								<li aria-haspopup="true" class="sub-icon"><a href="{{ url('/') }}"><i class="fe fe-monitor hor-icon"></i> Главная</a></li>
								<li aria-haspopup="true" class="sub-icon"><a href="{{ route('apiPage') }}"><i class="fa fa-connectdevelop"></i> Настройки API</a></li>
								<li aria-haspopup="true" class="sub-icon"><a href="{{ route('settingsPage') }}" class=""><i class="fa fa-gears"></i> Настройки бота</a></li>
								<li aria-haspopup="true" class="sub-icon"><a href="{{ route('competitionListPage') }}"><i class="fa fa-weixin"></i> Розыгрыши</a></li>
								<li aria-haspopup="true" class="sub-icon"><a href="javascript:void(0);"><i class="fa fa-signal"></i> Реклама <i class="fa fa-angle-down horizontal-icon"></i></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="{{route('createAdvertisingPage')}}">Сделать рассылку</a></li>
                                        <li aria-haspopup="true"><a href="#2">Реклама при получении билетов</a></li>
                                        <li aria-haspopup="true"><a href="#3">Реклама в разделе заработка билетов</a></li>
                                    </ul>
                                </li>
								<li aria-haspopup="true" class="sub-icon"><a href="{{ url('/' . $page='#') }}"><i class="fa fa-shield"></i> Модерация <i class="fa fa-angle-down horizontal-icon"></i></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="#1">Рекламная рассылка</a></li>
                                        <li aria-haspopup="true"><a href="index2.html">Реклама при получении билетов</a></li>
                                    </ul>
                                </li>
								<li aria-haspopup="true"><a href="{{ url('/' . $page='#') }}"><i class="fa fa-line-chart"></i> Стастистика бота</a></li>
							</ul>
						</nav>
						<!--Nav end -->
					</div>
				</div>
				<!-- Horizontal-menu end -->
