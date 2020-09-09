@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Главная</h4>
        </div>
        @include('includes.stats-head', ['visitors' => 1000, 'followers' => 1500])
    </div>
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
