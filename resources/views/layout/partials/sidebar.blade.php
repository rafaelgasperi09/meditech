<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Menú</li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-01.svg') }}" alt=""></span>
                        <span> Dashboard </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('/', 'index') ? 'active' : '' }}" href="{{ url('/') }}">Admin
                                Dashboard</a></li>
                        <li><a class="{{ Request::is('doctor-dashboard') ? 'active' : '' }}"
                                href="{{ url('doctor-dashboard') }}">Doctor Dashboard</a></li>
                        <li><a class="{{ Request::is('patient-dashboard') ? 'active' : '' }}"
                                href="{{ url('patient-dashboard') }}">Patient Dashboard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-02.svg') }}" alt=""></span>
                        <span> Doctors </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('doctors') ? 'active' : '' }}" href="{{ route('client.index') }}">Doctor
                                List</a></li>
                        <li><a class="{{ Request::is('add-doctor') ? 'active' : '' }}"
                                href="{{ route('client.create') }}">Add Doctor</a></li>
                        <li><a class="{{ Request::is('doctor-profile', 'doctor-setting') ? 'active' : '' }}"
                                href="{{ url('doctor-profile') }}">Doctor Profile</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-03.svg') }}" alt=""></span>
                        <span>Patients </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('patients') ? 'active' : '' }}"
                                href="{{ url('patients') }}">Patients List</a></li>
                        <li><a class="{{ Request::is('add-patient') ? 'active' : '' }}"
                                href="{{ url('add-patient') }}">Add Patients</a></li>
                        <li><a class="{{ Request::is('edit-patient') ? 'active' : '' }}"
                                href="{{ url('edit-patient') }}">Edit Patients</a></li>
                        <li><a class="{{ Request::is('patient-profile', 'patient-setting') ? 'active' : '' }}"
                                href="{{ url('patient-profile') }}">Patients Profile</a></li>
                    </ul>
                </li>
                {{--}}
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-08.svg') }}" alt=""></span>
                        <span> Staff </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('staff-list') ? 'active' : '' }}"
                                href="{{ url('staff-list') }}">Staff List</a></li>
                        <li><a class="{{ Request::is('add-staff','edit-staff') ? 'active' : '' }}"
                                href="{{ url('add-staff') }}">Add Staff</a></li>
                        <li><a class="{{ Request::is('staff-profile','staff-setting') ? 'active' : '' }}"
                                href="{{ url('staff-profile') }}">Staff Profile</a></li>
                        <li><a class="{{ Request::is('staff-leave','add-leave','edit-leave') ? 'active' : '' }}"
                                href="{{ url('staff-leave') }}">Leaves</a></li>
                        <li><a class="{{ Request::is('staff-holiday') ? 'active' : '' }}"
                                href="{{ url('staff-holiday') }}">Holidays</a></li>
                        <li><a class="{{ Request::is('staff-attendance') ? 'active' : '' }}"
                                href="{{ url('staff-attendance') }}">Attendance</a></li>
                    </ul>
                </li>
                {{--}}
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-04.svg') }}" alt=""></span>
                        <span> Appointments </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('appointments') ? 'active' : '' }}"
                                href="{{ url('appointments') }}">Appointment List</a></li>
                        <li><a class="{{ Request::is('add-appointment') ? 'active' : '' }}"
                                href="{{ url('add-appointment') }}">Book Appointment</a></li>
                        <li><a class="{{ Request::is('edit-appointment') ? 'active' : '' }}"
                                href="{{ url('edit-appointment') }}">Edit Appointment</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-05.svg') }}" alt=""></span>
                        <span> Doctor Schedule </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('schedule') ? 'active' : '' }}"
                                href="{{ url('schedule') }}">Schedule List</a></li>
                        <li><a class="{{ Request::is('add-schedule') ? 'active' : '' }}"
                                href="{{ url('add-schedule') }}">Add Schedule</a></li>
                        <li><a class="{{ Request::is('edit-schedule') ? 'active' : '' }}"
                                href="{{ url('edit-schedule') }}">Edit Schedule</a></li>
                    </ul>
                </li>
                {{--}}
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-06.svg') }}" alt=""></span>
                        <span> Departments </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('departments') ? 'active' : '' }}"
                                href="{{ url('departments') }}">Department List</a></li>
                        <li><a class="{{ Request::is('add-department') ? 'active' : '' }}"
                                href="{{ url('add-department') }}">Add Department</a></li>
                        <li><a class="{{ Request::is('edit-department') ? 'active' : '' }}"
                                href="{{ url('edit-department') }}">Edit Department</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-07.svg') }}" alt=""></span>
                        <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('invoices','create-invoice','edit-invoice','invoice-view') ? 'active' : '' }}"
                                href="{{ url('invoices') }}">Invoices</a></li>
                        <li><a class="{{ Request::is('payments','add-payment','edit-payment') ? 'active' : '' }}"
                                href="{{ url('payments') }}">Payments</a></li>
                        <li><a class="{{ Request::is('expenses','add-expense','edit-expense') ? 'active' : '' }}"
                                href="{{ url('expenses') }}">Expenses</a></li>
                        <li><a class="{{ Request::is('taxes','add-tax','edit-tax') ? 'active' : '' }}"
                                href="{{ url('taxes') }}">Taxes</a></li>
                        <li><a class="{{ Request::is('provident-fund','add-provident-fund','edit-provident-fund') ? 'active' : '' }}"
                                href="{{ url('provident-fund') }}">Provident Fund</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-09.svg') }}" alt=""></span>
                        <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('salary','add-salary','edit-salary') ? 'active' : '' }}" href="{{ url('salary') }}">
                                Employee Salary </a></li>
                        <li><a class="{{ Request::is('salary-view') ? 'active' : '' }}"
                                href="{{ url('salary-view') }}"> Payslip </a></li>
                    </ul>
                </li>
                <li>
                    <a class="{{ Request::is('chat') ? 'active' : '' }}" href="{{ url('chat') }}"><span
                            class="menu-side"><img src="{{ URL::asset('/assets/img/icons/menu-icon-10.svg') }}"
                                alt=""></span>
                        <span>Chat</span></a>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-11.svg') }}" alt=""></span>
                        <span> Calls</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('voice-call') ? 'active' : '' }}"
                                href="{{ url('voice-call') }}">Voice Call</a></li>
                        <li><a class="{{ Request::is('video-call') ? 'active' : '' }}"
                                href="{{ url('video-call') }}">Video Call</a></li>
                        <li><a class="{{ Request::is('incoming-call') ? 'active' : '' }}"
                                href="{{ url('incoming-call') }}">Incoming Call</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-12.svg') }}" alt=""></span>
                        <span> Email</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('compose') ? 'active' : '' }}"
                                href="{{ url('compose') }}">Compose Mail</a></li>
                        <li><a class="{{ Request::is('inbox') ? 'active' : '' }}"
                                href="{{ url('inbox') }}">Inbox</a></li>
                        <li><a class="{{ Request::is('mail-view') ? 'active' : '' }}"
                                href="{{ url('mail-view') }}">Mail View</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-13.svg') }}" alt=""></span>
                        <span> Blog</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('blog') ? 'active' : '' }}" href="{{ url('blog') }}">Blog</a>
                        </li>
                        <li><a class="{{ Request::is('blog-details') ? 'active' : '' }}"
                                href="{{ url('blog-details') }}">Blog View</a></li>
                        <li><a class="{{ Request::is('add-blog') ? 'active' : '' }}"
                                href="{{ url('add-blog') }}">Add Blog</a></li>
                        <li><a class="{{ Request::is('edit-blog') ? 'active' : '' }}"
                                href="{{ url('edit-blog') }}">Edit Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a class="{{ Request::is('asset','add-asset','edit-asset') ? 'active' : '' }}" href="{{ url('asset') }}"><i
                            class="fa fa-cube"></i> <span>Assets</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('activities') ? 'active' : '' }}"
                        href="{{ url('activities') }}"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-14.svg') }}" alt=""></span>
                        <span>Activities</span></a>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><i class="fa fa-flag"></i> <span> Reports </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('expense-reports') ? 'active' : '' }}"
                                href="{{ url('expense-reports') }}"> Expense Report </a></li>
                        <li><a class="{{ Request::is('invoice-reports') ? 'active' : '' }}"
                                href="{{ url('invoice-reports') }}"> Invoice Report </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-15.svg') }}" alt=""></span>
                        <span> Invoice </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('invoices-list','invoices-cancelled','invoices-draft','invoices-overdue','invoices-paid','invoices-recurring') ? 'active' : '' }}"
                                href="{{ url('invoices-list') }}"> Invoices List </a></li>
                        <li><a class="{{ Request::is('invoices-grid') ? 'active' : '' }}"
                                href="{{ url('invoices-grid') }}"> Invoices Grid</a></li>
                        <li><a class="{{ Request::is('add-invoice') ? 'active' : '' }}"
                                href="{{ url('add-invoice') }}"> Add Invoices</a></li>
                        <li><a class="{{ Request::is('edit-invoices') ? 'active' : '' }}"
                                href="{{ url('edit-invoices') }}"> Edit Invoices</a></li>
                        <li><a class="{{ Request::is('view-invoice') ? 'active' : '' }}"
                                href="{{ url('view-invoice') }}"> Invoices Details</a></li>
                        <li><a class="{{ Request::is('invoices-settings', 'tax-settings', 'bank-settings') ? 'active' : '' }}"
                                href="{{ url('invoices-settings') }}"> Invoices Settings</a></li>
                    </ul>
                </li>

                <li>
                    <a class="{{ Request::is(
                        'settings',
                        'localization-details',
                        'email-settings',
                        'social-settings',
                        'social-links',
                        'seo-settings',
                        'theme-settings',
                        'change-password',
                        'others-settings',
                    )
                        ? 'active'
                        : '' }}"
                        href="{{ url('settings') }}"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-16.svg') }}" alt=""></span>
                        <span>Settings</span></a>
                </li>
                <li class="menu-title">UI Elements</li>
                <li class="submenu">
                    <a href="javascript:;"><i class="fa fa-laptop"></i> <span> Components</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('uikit') ? 'active' : '' }}" href="{{ url('uikit') }}">UI
                                Kit</a></li>
                        <li><a class="{{ Request::is('typography') ? 'active' : '' }}"
                                href="{{ url('typography') }}">Typography</a></li>
                        <li><a class="{{ Request::is('tabs') ? 'active' : '' }}"
                                href="{{ url('tabs') }}">Tabs</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><i class="fa fa-edit"></i> <span> Forms</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}"
                                href="{{ url('form-basic-inputs') }}">Basic Inputs</a></li>
                        <li><a class="{{ Request::is('form-input-groups') ? 'active' : '' }}"
                                href="{{ url('form-input-groups') }}">Input Groups</a></li>
                        <li><a class="{{ Request::is('form-horizontal') ? 'active' : '' }}"
                                href="{{ url('form-horizontal') }}">Horizontal Form</a></li>
                        <li><a class="{{ Request::is('form-vertical') ? 'active' : '' }}"
                                href="{{ url('form-vertical') }}">Vertical Form</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><i class="fa fa-table"></i> <span> Tables</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('tables-basic') ? 'active' : '' }}"
                                href="{{ url('tables-basic') }}">Basic Tables</a></li>
                        <li><a class="{{ Request::is('tables-datatables') ? 'active' : '' }}"
                                href="{{ url('tables-datatables') }}">Data Table</a></li>
                    </ul>
                </li>
                <li>
                    <a class="{{ Request::is('calendar') ? 'active' : '' }}" href="{{ url('calendar') }}"><i
                            class="fa fa-calendar"></i> <span>Calendar</span></a>
                </li>
                <li class="menu-title">Extras</li>
                <li class="submenu">
                    <a href="javascript:;"><i class="fa fa-columns"></i> <span>Pages</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('login') ? 'active' : '' }}" href="{{ url('login') }}">
                                Login </a></li>
                        <li><a class="{{ Request::is('register') ? 'active' : '' }}" href="{{ url('register') }}">
                                Register </a></li>
                        <li><a class="{{ Request::is('forgot-password') ? 'active' : '' }}"
                                href="{{ url('forgot-password') }}"> Forgot Password </a></li>
                        <li><a class="{{ Request::is('change-password2') ? 'active' : '' }}"
                                href="{{ url('change-password2') }}"> Change Password </a></li>
                        <li><a class="{{ Request::is('lock-screen') ? 'active' : '' }}"
                                href="{{ url('lock-screen') }}"> Lock Screen </a></li>
                        <li><a class="{{ Request::is('profile','edit-profile') ? 'active' : '' }}" href="{{ url('profile') }}">
                                Profile </a></li>
                        <li><a class="{{ Request::is('gallery') ? 'active' : '' }}" href="{{ url('gallery') }}">
                                Gallery </a></li>
                        <li><a class="{{ Request::is('error-404') ? 'active' : '' }}"
                                href="{{ url('error-404') }}">404 Error </a></li>
                        <li><a class="{{ Request::is('error-500') ? 'active' : '' }}"
                                href="{{ url('error-500') }}">500 Error </a></li>
                        <li><a class="{{ Request::is('blank-page') ? 'active' : '' }}"
                                href="{{ url('blank-page') }}"> Blank Page </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fa fa-share-alt"></i> <span>Multi Level</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Level 1</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><span>Level 1</span></a>
                        </li>
                    </ul>
                </li>
                {{--}}
            </ul>
            <div class="logout-btn">
                <a href="{{ url('login') }}"><span class="menu-side"><img
                            src="{{ URL::asset('/assets/img/icons/logout.svg') }}" alt=""></span>
                    <span>Logout</span></a>
            </div>
        </div>
    </div>
</div>
