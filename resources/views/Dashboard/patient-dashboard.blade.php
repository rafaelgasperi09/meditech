<?php $page = 'patient-dashboard'; ?>
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
                    Patient Dashboard
                @endslot
            @endcomponent
            <!-- /Page Header -->

            <div class="good-morning-blk">
                <div class="row">
                    <div class="col-md-6">
                        <div class="morning-user">
                            <h2>Good Morning, <span>Williams Sarah</span></h2>
                            <p>Have a nice day at work</p>
                        </div>
                    </div>
                    <div class="col-md-6 position-blk">
                        <div class="morning-img">
                            <img src="{{ URL::asset('/assets/img/morning-img-03.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-title patient-visit mb-0">
                                <h4>Static of your Health</h4>
                                <div class="income-value">
                                    <p><span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span> vs
                                        last month</p>
                                </div>
                                <div class="average-health">
                                    <h5>72bmp <span>Average</span></h5>
                                </div>
                                <div class="form-group mb-0">
                                    @livewire('select-dashboard')
                                </div>
                            </div>
                            <div id="health-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12 col-xl-5 d-flex">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-title patient-visit">
                                <h4>Body Mass index</h4>
                            </div>
                            <div class="body-mass-blk">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="weight-blk">
                                            <div class="center slider">
                                                <div>
                                                    <h4>68</h4>
                                                    <span>kg</span>
                                                </div>
                                                <div>
                                                    <h4>70</h4>
                                                    <span>kg</span>
                                                </div>
                                                <div>
                                                    <h4>72</h4>
                                                    <span>kg</span>
                                                </div>
                                                <div>
                                                    <h4>74</h4>
                                                    <span>kg</span>
                                                </div>
                                                <div>
                                                    <h4>76</h4>
                                                    <span>kg</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="weight-blk">
                                            <div class="center slider">
                                                <div>
                                                    <h4>160</h4>
                                                    <span>cm</span>
                                                </div>
                                                <div>
                                                    <h4>162</h4>
                                                    <span>cm</span>
                                                </div>
                                                <div>
                                                    <h4>164</h4>
                                                    <span>cm</span>
                                                </div>
                                                <div>
                                                    <h4>166</h4>
                                                    <span>cm</span>
                                                </div>
                                                <div>
                                                    <h4>168</h4>
                                                    <span>cm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress weight-bar">
                                    <div class="progress-bar progress-bar-success" role="progressbar"></div>
                                </div>
                                <ul class="weight-checkit">
                                    <li>Underweight</li>
                                    <li>Normal (45.5)</li>
                                    <li>Overweight</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <livewire:patient.dashboard-chat/>
            <livewire:patient.dashboard-history/>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
