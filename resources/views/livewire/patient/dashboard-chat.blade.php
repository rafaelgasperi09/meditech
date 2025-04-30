<div class="row">
    <div class="col-12 col-md-6 col-xl-3 d-flex">
        <div class="card report-blk">
            <div class="card-body">
                <div class="report-head">
                    <h4><img src="{{ URL::asset('/assets/img/icons/report-icon-01.svg') }}" class="me-2"
                             alt="">Heart Rate</h4>
                </div>
                <div id="heart-rate"></div>
                <div class="dash-content">
                    <h5>110 <span>bpm</span></h5>
                    <p><span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span> vs last
                        month</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-3 d-flex">
        <div class="card report-blk">
            <div class="card-body">
                <div class="report-head">
                    <h4><img src="{{ URL::asset('/assets/img/icons/report-icon-02.svg') }}" class="me-2"
                             alt="">Temperature</h4>
                </div>
                <div id="temperature-chart"></div>
                <div class="dash-content">
                    <h5>38.6 <span>c</span></h5>
                    <p><span class="negative-view"><i class="feather-arrow-down-right me-1"></i>-20%</span> vs
                        last month</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-3 d-flex">
        <div class="card report-blk">
            <div class="card-body">
                <div class="report-head">
                    <h4><img src="{{ URL::asset('/assets/img/icons/report-icon-03.svg') }}" class="me-2"
                             alt="">Blood Pressure</h4>
                </div>
                <div id="pressure-chart"></div>
                <div class="dash-content">
                    <h5>120 <span>mm/Hg</span></h5>
                    <p><span class="negative-view"><i class="feather-arrow-down-right me-1"></i>-40%</span> vs
                        last month</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-3 d-flex">
        <div class="card report-blk">
            <div class="card-body">
                <div class="report-head">
                    <h4><img src="{{ URL::asset('/assets/img/icons/report-icon-04.svg') }}" class="me-2"
                             alt="">Sleep</h4>
                </div>
                <div id="sleep-chart"></div>
                <div class="dash-content">
                    <h5>7<span>h</span> 30 <span>m</span></h5>
                    <p><span class="negative-view"><i class="feather-arrow-down-right me-1"></i>-10%</span> vs
                        last month</p>
                </div>
            </div>
        </div>
    </div>
</div>
