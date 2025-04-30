<div class="row">
    <div class="col-12 col-md-12 col-xl-7">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-5">
                <div class="card top-departments">
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">Notes</h4>
                    </div>
                    <div class="card-body pt-1">
                        <div class="note-checkit">
                            <label class="custom_check">
                                <input type="checkbox" name="select_specialist" checked>
                                <span class="checkmark"></span> Take vitamin Tablet
                            </label>
                        </div>
                        <div class="note-checkit">
                            <label class="custom_check">
                                <input type="checkbox" name="select_specialist" checked>
                                <span class="checkmark"></span> Add Appoinment
                            </label>
                        </div>
                        <div class="note-checkit">
                            <label class="custom_check">
                                <input type="checkbox" name="select_specialist">
                                <span class="checkmark"></span> Set a goal
                            </label>
                        </div>
                        <div class="note-checkit">
                            <label class="custom_check mb-0">
                                <input type="checkbox" name="select_specialist">
                                <span class="checkmark"></span> Add new weight
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-7 d-flex">
                <div class="card wallet-widget general-health">
                    <div class="circle-bar circle-bar2">
                        <div class="circle-graph2" data-percent="66">
                            <b><img src="{{ URL::asset('/assets/img/icons/health-img.svg') }}"
                                    alt=""></b>
                        </div>
                    </div>
                    <div class="main-limit">
                        <p>General Health</p>
                        <h4>75%</h4>
                        <div class="income-value mt-2">
                            <p><span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span>
                                vs last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12  col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Medical History</h4> <a
                            href="{{ url('appointments') }}" class="patient-views float-end">Show all</a>
                    </div>
                    <div class="card-body p-0 table-dash">
                        <div class="table-responsive">
                            <table class="table mb-0 border-0 datatable custom-table patient-table">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox"
                                                   value="something">
                                        </div>
                                    </th>
                                    <th>Doctor name</th>
                                    <th>Diagnosis</th>
                                    <th>Date</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $json = file_get_contents(public_path('../public/assets/json/patient-dashboard.json'));
                                    $dashboards = json_decode($json, true);
                                @endphp
                                @foreach ($dashboards as $dashboard)
                                    <tr>
                                        <td>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox"
                                                       value="something">
                                            </div>
                                        </td>
                                        <td class="table-image">
                                            <img width="28" height="28" class="rounded-circle"
                                                 src="{{ URL::asset('/assets/img/profiles/' . $dashboard['Image']) }}"
                                                 alt="">
                                            <h2>{{ $dashboard['Doctorname'] }}</h2>
                                        </td>
                                        <td>{{ $dashboard['Diagnosis'] }}</td>
                                        <td>{{ $dashboard['Date'] }} </td>
                                        <td><button
                                                class="custom-badge status-gray re-shedule">{{ $dashboard['Status'] }}</button>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="javascript:;" class="action-icon dropdown-toggle"
                                                   data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item"
                                                       href="{{ url('edit-appointment') }}"><i
                                                            class="fa-solid fa-pen-to-square m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="javascript:;"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#delete_patient"><i
                                                            class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 col-xl-5">
        <div class="card flex-fill mb-2">
            <div class="card-body">
                <div id="calendar-doctor" class="calendar-container"></div>
            </div>
        </div>
        <div class="treat-box mb-2">
            <div class="user-imgs-blk">
                <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}" alt="">
                <div class="active-user-detail flex-grow-1">
                    <h4>General Health Check up</h4>
                    <p>Dr. Dianne Philips at 10:00-11:00 AM</p>
                </div>
            </div>
            <a href="javascript:;" class="custom-badge status-green">Active</a>
        </div>
        <div class="treat-box mb-2">
            <div class="user-imgs-blk">
                <img src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}" alt="">
                <div class="active-user-detail flex-grow-1">
                    <h4>Temporary Headache </h4>
                    <p>Dr. Jenny Smith at 05:00-06:00 PM</p>
                </div>
            </div>
            <a href="javascript:;" class="custom-badge status-orange">Pending</a>
        </div>
    </div>
</div>
