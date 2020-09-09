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
                            @include('includes.stats-head', ['visitors' => 1000, 'followers' => 1500])
						</div>
						<!--End Page header-->
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Настройка API подключения</h3>
                    <div class="card-options ">
                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('saveSetting')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="domain_url">Введите домен</label>
                            <input type="hidden" name="setting_name" value="domain_url">
                            <input id="domain_url" type="text" class="form-control" name="domain_url" placeholder="https://localhost:8000" value="{{$setting->setting_value ?? ""}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Сохранить URL</button>
                        </div>
                    </form>
                    <hr>
                    <div class="form-group" style="display: flex;">
                        <form action="#" method="POST" enctype="multipart/form-data" style="margin-right: 5px;">
                            @csrf
                            <button type="submit" class="btn btn-success">Установить веб-хук</button>
                        </form>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn btn-danger">Удалить веб-хук</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
