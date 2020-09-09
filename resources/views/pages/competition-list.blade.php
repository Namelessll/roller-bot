@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Розыгрыши</h4>
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Розыгрыши</li>
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
                    <h3 class="card-title">Список всех розыгрышей</h3>
                    <div class="card-options ">
                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($competitions as $key => $competition)

                            <?
                            /** @var object $competition */
                            $percent = $competition->competition_now_tokens * 100 / $competition->competition_needle_tokens;
                            ?>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        @if($competition->competition_type_wins == 0)
                                            <p class=" mb-1 text-muted">Ручной способ розыгрыша</p>
                                        @else
                                            <p class=" mb-1 text-muted">Автоматический способ розыгрыша</p>
                                        @endif
                                        <h2 class="mb-1">#{{$key+1}} {{$competition->competition_name}}
                                            @if($competition->competition_status == 0)
                                                <span style="top: -3px; position: relative;" class="badge badge-warning fs-12 ml-1 mb-1">Waiting</span>
                                            @else
                                                <span style="top: -3px; position: relative;" class="badge badge-info fs-12 ml-1 mb-1">Complete</span>
                                            @endif
                                        </h2>
                                        <p>
                                            {{$competition->competition_description}}
                                        </p>
                                        <span class="mb-1 text-muted"><span class="@if($percent < 20) text-danger @elseif($percent>=20 && $percent < 70) text-warning @else text-success @endif">{{$competition->competition_now_tokens}}</span> из {{$competition->competition_needle_tokens}} токенов</span>
                                        <div class="progress progress-xs mt-3">
                                            <div class="progress-bar bg-primary" style="width:{{$percent}}%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
