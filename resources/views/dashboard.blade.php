<?php $page = 'index'; ?>
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
                    Admin Dashboard
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="good-morning-blk">
                <div class="row">
                    <div class="col-md-6">
                        <div class="morning-user">
                            <h2>Good Morning, <span>Daniel Bruk</span></h2>
                            <p>Have a nice day at work</p>
                        </div>
                    </div>
                    <div class="col-md-6 position-blk">
                        <div class="morning-img">
                            <img src="{{ URL::asset('/assets/img/morning-img-01.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $json = file_get_contents(public_path('../public/assets/json/admin-dashboard.json'));
                    $dashboards = json_decode($json, true);
                @endphp
                @foreach ($dashboards as $dashboard)
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <div class="dash-boxs comman-flex-center">
                                <img src="{{ URL::asset('/assets/img/icons/' . $dashboard['Image']) }}" alt="">
                            </div>
                            <div class="dash-content dash-count">
                                <h4>{{ $dashboard['type'] }}</h4>
                                @if ($dashboard['type'] === 'Earnings')
                                    <h2>$<span class="counter-up">{{ $dashboard['count'] }}</span></h2>
                                @else
                                    <h2><span class="counter-up">{{ $dashboard['count'] }}</span></h2>
                                @endif
                                <p><span class="{{ $dashboard['class'] }}"><i
                                            class="{{ $dashboard['arrowclass'] }}"></i>{{ $dashboard['change'] }}</span> vs
                                    last
                                    month</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-title patient-visit">
                                <h4>Patient Visit by Gender</h4>
                                <div>
                                    <ul class="nav chat-user-total">
                                        <li><i class="fa fa-circle current-users" aria-hidden="true"></i>Male 75%</li>
                                        <li><i class="fa fa-circle old-users" aria-hidden="true"></i> Female 25%</li>
                                    </ul>
                                </div>
                                <div class="form-group mb-0">
                                    @livewire('select-dashboard')
                                </div>
                            </div>
                            <div id="patient-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-3 d-flex">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-title">
                                <h4>Patient by Department</h4>
                            </div>
                            <div id="donut-chart-dash" class="chart-user-icon">
                                <img src="{{ URL::asset('/assets/img/icons/user-icon.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12  col-xl-4">
                    <div class="card top-departments">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Top Departments</h4>
                        </div>
                        <div class="card-body">
                            @php
                                $json = file_get_contents(public_path('../public/assets/json/admin-dashboard-departments.json'));
                                $departments = json_decode($json, true);
                            @endphp
                            @foreach ($departments as $department)
                                @if ($department['name'] === 'Opthomology')
                                    <div class="activity-top mb-0">
                                        @else
                                            <div class="activity-top">
                                                @endif
                                                <div class="activity-boxs comman-flex-center">
                                                    <img src="{{ URL::asset('/assets/img/icons/' . $department['icon']) }}" alt="">
                                                </div>
                                                <div class="departments-list">
                                                    <h4>{{ $department['name'] }}</h4>
                                                    <p>{{ $department['percentage'] }}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                    </div>
                        </div>
                    </div>
                    @livewire('admin-dashboard-appointments')
                </div>
                @livewire('admin-dashboard-patinets')
            </div>
            @component('components.notification-box')
            @endcomponent
        </div>
@endsection
