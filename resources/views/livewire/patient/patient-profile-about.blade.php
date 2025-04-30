<div class="col-lg-4">
    <div class="doctor-personals-grp">
        <div class="card">
            <div class="card-body">
                <div class="heading-detail ">
                    <h4 class="mb-3">About me</h4>
                    <p>Hello I am Smith Bruklin a Gynaecologist in Sanjivni Hospital Surat. I love
                        to work with all my hospital staff and seniour doctors.</p>
                </div>
                <div class="about-me-list">
                    <ul class="list-space">
                        <li>
                            <h4>{{__('patient.gender')}}</h4>
                            <span>{{$data->gender}}</span>
                        </li>
                        <li>
                            <h4>{{__('patient.birthdate')}}</h4>
                            <span>{{$data->birthdate}}</span>
                        </li>
                        <li>
                            <h4>{{__('patient.email')}}</h4>
                            <span>{{$data->email}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="doctor-personals-grp">
        <div class="card">
            <div class="card-body">
                <div class="heading-detail">
                    <h4>Skills:</h4>
                </div>
                <div class="skill-blk">
                    <div class="skill-statistics">
                        <div class="skills-head">
                            <h5>Heart Beat</h5>
                            <p>45%</p>
                        </div>
                        <div class="progress mb-0">
                            <div class="progress-bar bg-operations" role="progressbar"
                                style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-statistics">
                        <div class="skills-head">
                            <h5>Haemoglobin</h5>
                            <p>85%</p>
                        </div>
                        <div class="progress mb-0">
                            <div class="progress-bar bg-haemoglobin" role="progressbar"
                                style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-statistics">
                        <div class="skills-head">
                            <h5>Blood Pressure </h5>
                            <p>65%</p>
                        </div>
                        <div class="progress mb-0">
                            <div class="progress-bar bg-statistics" role="progressbar"
                                style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-statistics">
                        <div class="skills-head">
                            <h5>Sugar </h5>
                            <p>90%</p>
                        </div>
                        <div class="progress mb-0">
                            <div class="progress-bar bg-visit" role="progressbar" style="width: 90%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
