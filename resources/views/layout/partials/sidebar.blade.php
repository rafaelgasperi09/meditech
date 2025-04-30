<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Menú</li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side">
                            <img  src="{{ URL::asset('/assets/img/icons/menu-icon-01.svg') }}" alt=""></span>
                            <span> Dashboard </span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('/dashboard', 'index') ? 'active' : '' }}" href="{{ url('/dashboard') }}">Admin Dashboard</a></li>
                        <li><a class="{{ Request::is('doctor-dashboard') ? 'active' : '' }}" href="{{ url('doctor-dashboard') }}">Doctor Dashboard</a></li>
                        <li><a class="{{ Request::is('patient-dashboard') ? 'active' : '' }}"  href="{{ url('patient-dashboard') }}">{{ __('patient.titles') }} Dashboard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon-08.svg') }}" alt=""></span>
                            <span> {{ __('client.titles') }} </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('clients') ? 'active' : '' }}" href="{{ route('client.index') }}">{{ __('generic.list') }} {{ __('client.titles') }}  </a></li>
                        <li><a class="{{ Request::is('clients/create') ? 'active' : '' }}"   href="{{ route('client.create') }}">{{ __('generic.create') }} {{ __('client.title') }}</a></li>
                        <li><a class="{{ Request::is('user/create') ? 'active' : '' }}"   href="{{ route('user.create',array('role_id'=>2)) }}">{{ __('generic.create') }} {{ __('user.doctor') }}</a></li>
                        <li><a class="{{ Request::is('user/create') ? 'active' : '' }}"   href="{{ route('user.create',array('role_id'=>5)) }}">{{ __('generic.create') }} {{ __('user.asistent') }}</a></li>
                        <li><a class="{{ Request::is('client/branch/create') ? 'active' : '' }}"   href="{{ route('client.branch.create') }}">{{ __('generic.create') }} {{ __('client.branch') }}</a></li>
                        <li><a class="{{ Request::is('client/room/create') ? 'active' : '' }}"   href="{{ route('client.room.create') }}">{{ __('generic.create') }} {{ __('client.room') }}</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side">
                        <img  src="{{ URL::asset('/assets/img/icons/menu-icon-03.svg') }}" alt=""></span>
                        <span>{{ __('patient.titles') }} </span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('patients') ? 'active' : '' }}"  href="{{ route('patient.index') }}">{{ __('generic.list') }} {{ __('patient.titles') }}</a></li>
                        <li><a class="{{ Request::is('patients/create') ? 'active' : '' }}"   href="{{ route('patient.create') }}">{{ __('generic.create') }} {{ __('patient.title') }}</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-04.svg') }}" alt=""></span>
                        <span>  {{ __('appointment.titles') }} </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('appointments') ? 'active' : '' }}" href="{{ url('appointments') }}">{{ __('generic.list') }} {{ __('appointment.titles') }}</a></li>
                        <li><a class="{{ Request::is('appointments/calendar') ? 'active' : '' }}" href="{{ route('appointment.calendar') }}">{{ __('Calendario') }} </a></li>
                    </ul>
                </li>
                {{--}}
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
                    <a href="javascript:;"><span class="menu-side">
                            <img src="{{ URL::asset('/assets/img/icons/setting-icon-01.svg') }}" alt=""></span>
                        <span> Configuraciones </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('settings/create_consultation_template') ? 'active' : '' }}"  href="{{ route('setting.create_template') }}">{{ __('Plantilla Consulta') }}</a></li>
                        <li><a class="{{ Request::is('settings/create_rapid_access') ? 'active' : '' }}"  href="{{ route('setting.create_rapid_access') }}">{{ __('Accesos Rapidos') }}</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side">
                            <img src="{{ URL::asset('/assets/img/icons/profile.svg') }}" alt=""></span>
                        <span> Usuarios </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('users') ? 'active' : '' }}"  href="{{ route('user.index') }}">{{ __('generic.list') }} {{ __('user.titles') }}</a></li>
                        <li><a class="{{ Request::is('users/create') ? 'active' : '' }}"  href="{{ route('user.create') }}">{{ __('generic.create') }} {{ __('user.title') }}</a></li>
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
