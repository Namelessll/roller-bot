@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Настройки API</h4>
                                <ol class="breadcrumb pl-0">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Настройки API</li>
                                </ol>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<div class="ml-3">
									<span class="sparkline_bar mr-2 float-left"></span>
									<span class="float-left border-">
										<span class="mb-0 mt-1 mr-2">2,978</span><small class="mb-0 mr-3">( Visitors )</small>
									</span>
									<span class="sparkline_bar1 mr-2 float-left"></span>
									<span class="float-left">
										<span class="mb-0 mt-1 mr-2">6,453</span><small class="mb-0"> ( Followers )</small>
									</span>
								</div>
							</div>
						</div>
						<!--End Page header-->
@endsection
@section('content')

@endsection
@section('js')
<!-- ECharts js -->
{{--<!--<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>-->--}}
<!-- Peitychart js-->
{{--<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>--}}
{{--<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>--}}
<!-- Index js-->
<script src="{{URL::asset('assets/js/index1.js')}}"></script>
<!-- Apexchart js-->
{{--<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>--}}
@endsection
