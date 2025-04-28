<div class="settings-menu-links">
    <ul class="nav nav-tabs menu-tabs">
        <li class="nav-item {{ Request::is('settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('settings') }}">General Settings</a>
        </li>
        <li class="nav-item {{ Request::is('localization-details') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('localization-details') }}">Localization</a>
        </li>
        <li class="nav-item {{ Request::is('payment-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('payment-settings') }}">Payment Settings</a>
        </li>
        <li class="nav-item {{ Request::is('email-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('email-settings') }}">Email Settings</a>
        </li>
        <li class="nav-item {{ Request::is('social-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('social-settings') }}">Social Media Login</a>
        </li>
        <li class="nav-item {{ Request::is('social-links') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('social-links') }}">Social Links</a>
        </li>
        <li class="nav-item {{ Request::is('seo-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('seo-settings') }}">SEO Settings</a>
        </li>
        <li class="nav-item {{ Request::is('theme-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('theme-settings') }}">Theme Settings</a>
        </li>
        <li class="nav-item {{ Request::is('change-password') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('change-password') }}">Change Password</a>
        </li>
        <li class="nav-item {{ Request::is('others-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('others-settings') }}">Others</a>
        </li>
    </ul>
</div>