<?php $page = 'doctor-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Dashboard
                @endslot
                @slot('li_1')
                    Doctor Dashboard
                @endslot
            @endcomponent
            <!-- /Page Header -->

            <div class="good-morning-blk">
                <div class="row">
                    <div class="col-md-6">
                        <div class="morning-user">
                            <h2>Good Morning, <span>Dr.Smith Wayne</span></h2>
                            <p>Have a nice day at work</p>
                        </div>
                    </div>
                    <div class="col-md-6 position-blk">
                        <div class="morning-img">
                            <img src="{{ URL::asset('/assets/img/morning-img-02.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="doctor-list-blk">
                <div class="row">
                    @php
                        $json = file_get_contents(public_path('../public/assets/json/doctor-dashboard.json'));
                        $dashboards = json_decode($json, true);
                    @endphp
                    @foreach ($dashboards as $dashboard)
                        <div class="col-xl-3 col-md-6">
                            <div class="doctor-widget border-right-bg">
                                <div class="doctor-box-icon flex-shrink-0">
                                    <img src="{{ URL::asset('/assets/img/icons/' . $dashboard['icon']) }}" alt="">
                                </div>
                                <div class="doctor-content dash-count flex-grow-1">
                                    <h4>
                                        @if($dashboard['title'] === 'Earnings')
                                        $<span
                                            class="counter-up">{{ $dashboard['count'] }}</span>
                                            @else
                                        <span
                                            class="counter-up">{{ $dashboard['count'] }}</span>
                                            @endif<span>{{ $dashboard['total'] }}</span><span
                                            class="{{ $dashboard['class'] }}">{{ $dashboard['percentageChange'] }}</span>
                                    </h4>
                                    <h5>{{ $dashboard['title'] }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-title patient-visit mb-0">
                                <h4>Income</h4>
                                <div class="income-value">
                                    <h3><span>$</span> 20,560</h3>
                                    <p><span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span> vs
                                        last month</p>
                                </div>
                                <div class="form-group mb-0">
                                   @livewire('doctor.select-dashboard')
                                </div>
                            </div>
                            <div id="apexcharts-area"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-3 d-flex">
                    <div class="card">
                        <div class="card-body">
                            <div id="radial-patients"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-2 d-flex">
                    <div class="struct-point">
                        <div class="card patient-structure">
                            <div class="card-body">
                                <h5>New Patients</h5>
                                <h3>56<span class="status-green"><img
                                            src="{{ URL::asset('/assets/img/icons/sort-icon-01.svg') }}" alt=""
                                            class="me-1">60%</span></h3>
                            </div>
                        </div>
                        <div class="card patient-structure">
                            <div class="card-body">
                                <h5>Old Patients</h5>
                                <h3>35<span class="status-pink"><img
                                            src="{{ URL::asset('/assets/img/icons/sort-icon-02.svg') }}" alt=""
                                            class="me-1">-20%</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <livewire:doctor.dashboard/>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
