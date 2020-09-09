@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Создать рекламный пост</h4>
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Создать рекламный пост</li>
            </ol>
        </div>
        @include('includes.stats-head', ['visitors' => 1000, 'followers' => 1500])
    </div>
    <!--End Page header-->
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Мастер создания рассылки</h3>
                </div>
                <div class="card-body">
                    <form id="form">
                        <div class="list-group">
                            <div class="list-group-item py-3" data-acc-step>
                                <h5 class="mb-0" data-acc-title>Содержание</h5>
                                <div data-acc-content>
                                    <div class="my-3">
                                        <div class="form-group">
                                            <textarea name="email" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item py-3" data-acc-step>
                                <h5 class="mb-0" data-acc-title>Картинка</h5>
                                <div data-acc-content>
                                    <div class="my-3">

                                        <div class="dropify-wrapper" style="height: 192px;">
                                            <div class="dropify-message"><span class="file-icon"></span>
                                                <p>Drag and drop a file here or click</p>
                                                <p class="dropify-error">Ooops, something wrong appended.</p>
                                            </div>
                                            <div class="dropify-loader"></div>
                                            <div class="dropify-errors-container">
                                                <ul></ul>
                                            </div>
                                            <input type="file" class="dropify" data-height="180">
                                            <button type="button" class="dropify-clear">Remove</button>
                                            <div class="dropify-preview">
                                                    <span class="dropify-render"></span>
                                                <div class="dropify-infos">
                                                    <div class="dropify-infos-inner">
                                                        <p class="dropify-filename">
                                                            <span class="dropify-filename-inner"></span>
                                                        </p>
                                                        <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item py-3" data-acc-step>
                                <h5 class="mb-0" data-acc-title>Кнопка</h5>
                                <div data-acc-content>
                                    <div class="my-3">
                                        <div class="form-group">
                                            <label>Credit card:</label>
                                            <input type="text" name="card" class="form-control">
                                        </div>
                                        <div class="form-group form-row">
                                            <div class="col-sm-4">
                                                <label>Expiry:</label>
                                                <input type="text" name="expiry" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>CVV:</label>
                                                <input type="text" name="cvv" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="{{URL::asset('assets/plugins/formwizard/jquery.smartWizard.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/formwizard/fromwizard.js')}}"></script>

    <!--Accordion-Wizard-Form js-->
    <script src="{{URL::asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/form-wizard.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fileupload/js/dropify.js')}}"></script>
    <script src="{{URL::asset('assets/js/filupload.js')}}"></script>

    <!-- Apexchart js-->
    {{--<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>--}}
@endsection
