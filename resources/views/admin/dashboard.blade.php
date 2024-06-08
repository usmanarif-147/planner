@extends('layouts.admin.app')

@section('content')
    <div class="container-xl">

        <h1 class="app-page-title">Charts</h1>
        <div class="row g-4 mb-4">
            <div class="col-12 col-lg-6">
                <div class="app-card app-card-chart h-100 shadow-sm">
                    <div class="app-card-header p-3 border-0">
                        <h4 class="app-card-title">Area Line Chart Demo</h4>
                    </div>
                    <div class="app-card-body p-4">
                        <div class="chart-container">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="chart-line" width="454" height="227"
                                style="display: block; width: 454px; height: 227px;"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="app-card app-card-chart h-100 shadow-sm">
                    <div class="app-card-header p-3 border-0">
                        <h4 class="app-card-title">Bar Chart Demo</h4>
                    </div>
                    <div class="app-card-body p-4">
                        <div class="chart-container">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="chart-bar" width="454" height="227"
                                style="display: block; width: 454px; height: 227px;"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="app-card app-card-chart h-100 shadow-sm">
                    <div class="app-card-header p-3 border-0">
                        <h4 class="app-card-title">Pie Chart Demo</h4>
                    </div>
                    <div class="app-card-body p-4">
                        <div class="chart-container">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="chart-pie" width="454" height="227"
                                style="display: block; width: 454px; height: 227px;"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="app-card app-card-chart h-100 shadow-sm">
                    <div class="app-card-header p-3 border-0">
                        <h4 class="app-card-title">Doughnut Chart Demo</h4>
                    </div>
                    <div class="app-card-body p-4">
                        <div class="chart-container">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="chart-doughnut" width="454" height="227"
                                style="display: block; width: 454px; height: 227px;"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
