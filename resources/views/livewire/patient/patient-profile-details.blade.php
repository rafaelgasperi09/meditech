<div class="col-lg-8">
    <div class="doctor-personals-grp">
        <div class="card">
            <div class="card-body">
                <div class="tab-content-set">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('patient-profile') }}" class="active"><span
                                    class="set-about-icon me-2"><img
                                        src="{{ URL::asset('/assets/img/icons/menu-icon-02.svg') }}"
                                        alt=""></span>About me</a>
                        </li>
                        <li>
                            <a href="{{ url('patient-setting') }}"><span
                                    class="set-about-icon me-2"><img
                                        src="{{ URL::asset('/assets/img/icons/menu-icon-16.svg') }}"
                                        alt=""></span>Settings</a>
                        </li>
                    </ul>
                </div>
                <div class="personal-list-out">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="detail-personal">
                                <h2>Full Name</h2>
                                <h3>Smith Bruklin</h3>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="detail-personal">
                                <h2>Mobile </h2>
                                <h3>264-625-2583</h3>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="detail-personal">
                                <h2>Email</h2>
                                <h3>smith@email.com</h3>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="detail-personal">
                                <h2>Location</h2>
                                <h3>USA</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hello-park">
                    <p>Completed my graduation in Gynaecologist Medicine from the well known and
                        renowned institution of India – SARDAR PATEL MEDICAL COLLEGE, BARODA in
                        2000-01, which was affiliated to M.S. University. I ranker in University
                        exams from the same university from 1996-01.</p>
                    <p>Worked as Professor and Head of the department ; Community medicine
                        Department at Sterline Hospital, Rajkot, Gujarat from 2023-2023</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title ">Medical History</h4>
            </div>
            <div class="card-body p-0 table-dash">
                <div class="table-responsive">
                    <table class="table mb-0 border-0 datatable custom-table patient-profile-table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox"
                                            value="something">
                                    </div>
                                </th>
                                <th>Date</th>
                                <th>Doctor</th>
                                <th>Treatment</th>
                                <th>Charges ($)</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox"
                                            value="something">
                                    </div>
                                </td>
                                <td>29/09/2023 </td>
                                <td>Dr.Jenny Smith</td>
                                <td>Check up</td>
                                <td>$ 60</td>
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
                                                    class="fa fa-trash-alt m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox"
                                            value="something">
                                    </div>
                                </td>
                                <td>19/09/2023 </td>
                                <td>Andrea Lalema</td>
                                <td>Blood Test </td>
                                <td>$ 50</td>
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
                                                    class="fa fa-trash-alt m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox"
                                            value="something">
                                    </div>
                                </td>
                                <td>20/09/2023 </td>
                                <td>Dr.William Stephin</td>
                                <td>Blood Pressure</td>
                                <td>$ 30</td>
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
                                                    class="fa fa-trash-alt m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>