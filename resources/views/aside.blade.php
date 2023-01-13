
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{ url('home') }}"><img class="main-logo" src="{{ url('public/frontend/img/logo/download.jpg') }}" height="100px" width="100px" alt="" /></a>
            {{-- <strong><a href="index.html"><img src="{{ url('public/frontend/img/logo/logosn.png') }}" alt="" /></a></strong> --}}
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a href="{{ url('home') }}"
                        @if(session('tab')=='home')
                            style="background: #F5CF8E; color:black"
                        @endif
                        ><span class="educate-icon educate-home icon-wrap"></span><span class="mini-click-non">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ url('employee') }}"
                        @if(session('tab')=='employee_table')
                            style="background: #F5CF8E; color: black"
                        @endif
                        aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Employee Table</span></a>
                    </li>
                    <li>
                        <a href="{{ url('rooznamcha/show') }}"
                        @if(session('tab')=='rooznamcha')
                            style="background:  #F5CF8E; color: black"
                        @endif
                        aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span>
                        <span class="mini-click-non">Rooznamcha</span></a>
                    </li>
                    <li>
                        <a href="{{ url('genus') }}" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Genus</span></a>
                    </li>
                    <li>
                        <a href="{{ url('login') }}" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Login</span></a>
                    </li>
                    <li>
                        <a href="{{ url('register') }}" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Register</span></a>
                    </li>
                    <li>
                        <a href="{{ url('logout') }}" onclick="return logoutFunction();" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Logout</span></a>
                    </li>
                    <li>
                        <a href="{{ url('screenlock/show') }}" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">LockScreen</span></a>
                    </li>
                    <li>
                        <a href="{{ url('passwordrecovery') }}" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Forget Password</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<script>
    function logoutFunction() {
        if(!confirm("Are you sure you want to logout?"))
        event.preventDefault();
    }
</script>
