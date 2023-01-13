<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/frontend/img/favicon.ico') }}">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/font-awesome.min.css') }}">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ url('public/frontend/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ url('public/frontend/css/owl.transitions.css') }}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/animate.css') }}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/normalize.css') }}">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/meanmenu.min.css') }}">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/main.css') }}">
        <!-- educate icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/educate-custon-icon.css') }}">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ url('public/frontend/css/metisMenu/metisMenu-vertical.css') }}">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/calendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ url('public/frontend/css/calendar/fullcalendar.print.min.css') }}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/style.css') }}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/responsive.css') }}">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Registration</h3>
				<p>This is the best app ever!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        @if (session('fail'))
                            <div class="alert alert-danger text-center">{{ session('fail') }}</div>
                        @endif
                        <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                            {{-- @method('POST') --}}
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" name="password"  class="form-control" required>
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" name="password_confirm" class="form-control" required>
                                    @error('password_confirm')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Email Address</label>
                                    <input type="email" name="email_confirm" value="{{ old('email_confirm') }}" class="form-control" required>
                                    @error('email_confirm')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn" type="submit"> Register</button>
                                <br>
                                Already a member <a style="text-decoration: none; background: none; color: blue; opacity: 0.7;" href="{{ url('login') }}"> Login</a>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2022. All rights reserved. by <a href="#">SBR</a></p>
			</div>
		</div>
    </div>
    <!-- jquery
		============================================ -->
        <script src="{{ url('public/frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/bootstrap.min.js') }}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/wow.min.js') }}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/counterup/jquery.counterup.min.js') }}') }}"></script>
        <script src="{{ url('public/frontend/js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ url('public/frontend/js/counterup/counterup-active.js') }}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ url('public/frontend/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ url('public/frontend/js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/morrisjs/raphael-min.js') }}"></script>
        <script src="{{ url('public/frontend/js/morrisjs/morris.js') }}"></script>
        <script src="{{ url('public/frontend/js/morrisjs/morris-active.js') }}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ url('public/frontend/js/sparkline/jquery.charts-sparkline.js') }}"></script>
        <script src="{{ url('public/frontend/js/sparkline/sparkline-active.js') }}"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/calendar/moment.min.js') }}"></script>
        <script src="{{ url('public/frontend/js/calendar/fullcalendar.min.js') }}"></script>
        <script src="{{ url('public/frontend/js/calendar/fullcalendar-active.js') }}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/plugins.js') }}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/main.js') }}"></script>
        <!-- tawk chat JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/tawk-chat.js') }}"></script>
</body>

</html>
