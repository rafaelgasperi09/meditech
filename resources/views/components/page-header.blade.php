<!-- Page Header -->
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    @if (
                        !Route::is([
                            'patients',
                            'add-patient',
                            'add-staff',
                            'doctor-dashboard',
                            'doctor-profile',
                            'doctor-setting',
                            'doctors',
                            'edit-doctor',
                            'edit-staff',
                            'index',
                            'patient-dashboard',
                            'patient-profile',
                            'edit-patient',
                            'patient-setting',
                            'staff-attendance',
                            'staff-holiday',
                            'staff-leave',
                            'staff-profile',
                            'staff-list',
                            'staff-setting',
                            'edit-leave',
                            'add-appointment',
                            'appointments',
                            'edit-appointment',
                            'add-schedule',
                            'schedule',
                            'edit-schedule',
                            'add-department',
                            'departments',
                            'edit-department',
                            'invoice-reports',
                            'invoice-view',
                            'invoices-cancelled',
                            'invoices-draft',
                            'invoices-grid',
                            'invoices-list',
                            'invoices-overdue',
                            'invoices-paid',
                            'invoices-recurring',
                            'invoices-settings',
                            'invoices',
                            'salary',
                            'salary-view',
                            'chat',
                            'voice-call',
                            'video-call',
                            'incoming-call',
                            'compose',
                            'inbox',
                            'mail-view',
                            'blog',
                            'blog-details',
                            'add-blog',
                            'edit-blog',
                            'asset',
                            'activities',
                            'localization-details',
                            'email-settings',
                            'social-settings',
                            'social-links',
                            'seo-settings',
                            'theme-settings',
                            'change-password',
                            'others-settings',
                            'uikit',
                            'typography',
                            'tables-datatables',
                            'tables-basic',
                            'tabs',
                            'gallery',
                            'form-vertical',
                            'form-input-groups',
                            'form-horizontal',
                            'form-basic-inputs',
                            'edit-tax',
                            'edit-salary',
                            'edit-profile',
                            'edit-expenses',
                            'expenses',
                            'expense-reports',
                            'edit-asset',
                            'create-invoice',
                            'blank-page',
                            'add-tax',
                            'add-salary',
                            'add-leave',
                            'add-expense',
                            'add-asset',
                            'taxes',
                            'tax-settings',
                            'settings',
                            'provident-fund',
                            'payments',
                            'payment-settings',
                            'edit-provident-fund',
                            'add-provident-fund',
                            'edit-payment',
                            'add-payment','edit-invoice','bank-settings'
                        ]))
                        <a href="{{ url('doctors') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['patients', 'add-patient', 'patient-profile', 'edit-patient', 'patient-setting']))
                        <a href="{{ url('patients') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['add-staff', 'edit-staff', 'add-leave']))
                        <a href="{{ url('staff-list') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is([
                            'doctor-dashboard',
                            'index',
                            'patient-dashboard',
                            'localization-details',
                            'email-settings',
                            'social-settings',
                            'social-links',
                            'seo-settings',
                            'theme-settings',
                            'change-password',
                            'others-settings',
                            'uikit',
                            'typography',
                            'tables-datatables',
                            'tables-basic',
                            'tabs',
                            'gallery',
                            'form-vertical',
                            'form-input-groups',
                            'form-horizontal',
                            'form-basic-inputs',
                            'edit-profile',
                            'blank-page',
                            'settings',
                            'payment-settings',
                        ]))
                        <a href="{{ url('/') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['doctor-profile', 'doctor-setting', 'doctors', 'edit-doctor']))
                        <a href="{{ url('doctors') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is([
                            'staff-attendance',
                            'staff-holiday',
                            'staff-leave',
                            'staff-profile',
                            'staff-list',
                            'staff-setting',
                            'edit-leave',
                        ]))
                        <a href="{{ url('staff-list') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['add-appointment', 'appointments', 'edit-appointment']))
                        <a href="{{ url('appointments') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['add-schedule', 'schedule', 'edit-schedule']))
                        <a href="{{ url('schedule') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['add-department', 'departments', 'edit-department']))
                        <a href="{{ url('departments') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['invoice-reports']))
                        <a href="{{ url('expense-report') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['invoice-view', 'invoices', 'create-invoice','edit-invoice']))
                        <a href="{{ url('invoices') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is([
                            'invoices-cancelled',
                            'invoices-draft',
                            'invoices-grid',
                            'invoices-list',
                            'invoices-overdue',
                            'invoices-paid',
                            'invoices-recurring',
                            'invoices-settings',
                            'bank-settings',
                            'tax-settings',
                        ]))
                        <a href="{{ url('invoice-list') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['salary', 'salary-view', 'edit-salary', 'add-salary']))
                        <a href="{{ url('salary') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['chat']))
                        <a href="{{ url('chat') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['voice-call', 'video-call', 'incoming-call']))
                        <a href="{{ url('voice-call') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['compose', 'inbox', 'mail-view']))
                        <a href="{{ url('inbox') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['blog', 'blog-details', 'add-blog', 'edit-blog']))
                        <a href="{{ url('blog') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['asset', 'edit-asset', 'add-asset']))
                        <a href="{{ url('asset') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['activities']))
                        <a href="{{ url('activites') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['edit-tax', 'add-tax', 'taxes']))
                        <a href="{{ url('taxes') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['edit-expenses', 'add-expense', 'expenses']))
                        <a href="{{ url('expenses') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['provident-fund', 'edit-provident-fund', 'add-provident-fund']))
                        <a href="{{ url('provident-fund') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['payments', 'edit-payment', 'add-payment']))
                        <a href="{{ url('payments') }}">{{ $title }} </a>
                    @endif
                    @if (Route::is(['expense-reports']))
                        <a href="{{ url('expense-report') }}">{{ $title }} </a>
                    @endif
                </li>
                <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                <li class="breadcrumb-item active">{{ $li_1 }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->
