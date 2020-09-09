@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Настройки бота</h4>
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Настройки Бота</li>
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
                    <h3 class="card-title">Настройка полей бота</h3>
                    <div class="card-options ">
                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('saveBotSetting')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="advertising_cost">Стоимость рекламной рассылки по всему боту:</label>
                            <input id="advertising_cost" type="text" class="form-control" name="advertising_cost" placeholder="1.0" required value="{{$settings[0]->advertising_cost ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="reward_once">Вознаграждения по реффке (Единоразово):</label>
                            <input id="reward_once" type="text" class="form-control" name="reward_once" placeholder="2.0" required value="{{$settings[0]->reward_once ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="reward_percent">Вознаграждения по реффке %, Процент от покупок:</label>
                            <input id="reward_percent" type="text" class="form-control" name="reward_percent" placeholder="0.15" required value="{{$settings[0]->reward_percent ?? ''}}">
                        </div>

                        <div class="form-group m-0">
                            <label class="form-label">Диапазон получения бесплатных токенов (от и до):</label>
                            <div class="row gutters-xs">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="range_from" placeholder="1.0" required value="{{$settings[0]->range_from ?? ''}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="range_to" placeholder="5.0" required value="{{$settings[0]->range_to ?? ''}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" style="width: 100%;">Сохранить</button>
                    </form>
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
