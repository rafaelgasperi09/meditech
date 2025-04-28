<div class="col-12 col-md-12  col-xl-8">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a
                href="{{ url('appointments') }}" class="patient-views float-end">Show all</a>
        </div>
        <div class="card-body p-0 table-dash">
            <div class="table-responsive">
                <table class="table mb-0 border-0 datatable custom-table">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check check-tables">
                                    <input class="form-check-input" type="checkbox" value="something">
                                </div>
                            </th>
                            <th>No</th>
                            <th>Patient name</th>
                            <th>Doctor</th>
                            <th>Time</th>
                            <th>Disease</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $json = file_get_contents(public_path('../public/assets/json/admin-dashboard-appointments.json'));
                            $dashboards = json_decode($json, true);
                        @endphp
                        @foreach ($dashboards as $dashboard)
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something">
                                    </div>
                                </td>
                                <td>{{ $dashboard['No'] }}</td>
                                <td>{{ $dashboard['Patientname'] }}</td>
                                <td class="table-image appoint-doctor">
                                    <img width="28" height="28" class="rounded-circle"
                                        src="{{ URL::asset('/assets/img/profiles/' . $dashboard['Image']) }}"
                                        alt="">
                                    <h2>{{ $dashboard['Doctor'] }}</h2>
                                </td>
                                <td class="appoint-time"><span>{{ $dashboard['Date'] }} at
                                    </span>{{ $dashboard['Time'] }}</td>
                                <td><button
                                        class="custom-badge status-green ">{{ $dashboard['Disease'] }}</button>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="javascript:;" class="action-icon dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item"
                                                href="{{ url('edit-appointment') }}"><i
                                                    class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:;"
                                                data-bs-toggle="modal"
                                                data-bs-target="#delete_patient"><i
                                                    class="fa fa-trash-alt m-r-5"></i> Delete</a>
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