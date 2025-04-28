<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <h4 class="card-title d-inline-block">Recent Patients </h4> <a href="{{ url('patients') }}"
                    class="float-end patient-views">Show all</a>
            </div>
            <div class="card-block table-dash">
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
                                <th>Age</th>
                                <th>Date of Birth</th>
                                <th>Diagnosis</th>
                                <th>Triage</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $json = file_get_contents(public_path('../public/assets/json/admin-dashboard-patients.json'));
                                $patients = json_decode($json, true);
                            @endphp
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox"
                                                value="something">
                                        </div>
                                    </td>
                                    <td>{{ $patient['No'] }}</td>
                                    <td class="table-image">
                                        <img width="28" height="28" class="rounded-circle"
                                            src="{{ URL::asset('/assets/img/profiles/' . $patient['Image']) }}"
                                            alt="">
                                        <h2>{{ $patient['Patientname'] }}</h2>
                                    </td>
                                    <td>{{ $patient['Age'] }}</td>
                                    <td>{{ $patient['DateofBirth'] }}</td>
                                    <td>{{ $patient['Diagnosis'] }}</td>
                                    <td><button
                                            class="{{ $patient['Class'] }}">{{ $patient['Triage'] }}</button>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="javascript:;" class="action-icon dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ url('edit-patient') }}"><i
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
</div>