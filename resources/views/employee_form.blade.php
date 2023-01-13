<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employee Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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
        <!-- x-editor CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/editor/select2.css') }}">
        <link rel="stylesheet" href="{{ url('public/frontend/css/editor/datetimepicker.css') }}">
        <link rel="stylesheet" href="{{ url('public/frontend/css/editor/bootstrap-editable.css') }}">
        <link rel="stylesheet" href="{{ url('public/frontend/css/editor/x-editor-style.css') }}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ url('public/frontend/css/data-table/bootstrap-table.css') }}">
        <link rel="stylesheet" href="{{ url('public/frontend/css/data-table/bootstrap-editable.css') }}">
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
    <!-- Start Left menu area -->
    @include('aside')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{ url('home') }}"><img class="main-logo" src="{{ url('public/frontend/img/logo/logo.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        @include('header')
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright" style="padding: 30px">
                                    <h1 class="text-center">Add New Employee</h1>
                                    <br>
                                    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                        @csrf
                                        <div class="form-group col-md-6">
                                          <label>Full Name</label>
                                          <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" placeholder="Enter your fullname">
                                          @error('fullname')
                                          <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Father Name</label>
                                            <input type="text" class="form-control" name="fathername" value="{{ old('fathername') }}" placeholder="Enter your fathername">
                                            @error('fathername')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                                            @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter your address">
                                            @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phone</label>
                                            <input type="number" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number">
                                            @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>CNIC</label>
                                            <input type="number" class="form-control" name="cnic" value="{{ old('cnic') }}" placeholder="Enter your cnic">
                                            @error('cnic')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Department</label>
                                            <select name="department" class="form-control">
                                                <option selected disabled>Select Department</option>
                                                <option value="driver">Driver</option>
                                                <option value="clerk">Clerk</option>
                                                <option value="sweeper">Sweeper</option>
                                                <option value="wheat worker">Wheat Worker</option>
                                            </select>
                                                @error('department')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Salary</label>
                                            <input type="number" class="form-control" name="salary" value="{{ old('salary') }}" placeholder="Enter salary in rupees">
                                            @error('salary')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control">
                                                <option selected disabled>Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                            @error('gender')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option selected disabled>Select Status</option>
                                                <option value="married">Married</option>
                                                <option value="unmarried">UnMarried</option>
                                            </select>
                                            @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Education</label>
                                            <input type="text" class="form-control" name="education" value="{{ old('education') }}" placeholder="Enter your education">
                                            @error('education')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Experience</label>
                                            <input type="text" class="form-control" name="experience" value="{{ old('experience') }}" placeholder="Enter your experience">
                                            @error('experience')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6" style="padding-bottom: 20px">
                                            <label>Religion</label>
                                            <input type="text" class="form-control" name="religion" value="{{ old('religion') }}" placeholder="Enter your religion">
                                            @error('religion')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6" style="padding-bottom: 20px">
                                            <label>Image</label>
                                            <input type="file" class="form-control" name="image" placeholder="Upload your Image">
                                            @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="text-center" style="padding: 15px">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                        </div>
                                        <br><br>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ url('public/frontend/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ url('public/frontend/js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- data table JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/data-table/bootstrap-table.js') }}"></script>
        <script src="{{ url('public/frontend/js/data-table/tableExport.js') }}"></script>
        <script src="{{ url('public/frontend/js/data-table/data-table-active.js') }}"></script>
        <script src="{{ url('public/frontend/js/data-table/bootstrap-table-editable.js') }}"></script>
        <script src="{{ url('public/frontend/js/data-table/bootstrap-editable.js') }}"></script>
        <script src="{{ url('public/frontend/js/data-table/bootstrap-table-resizable.js') }}"></script>
        <script src="{{ url('public/frontend/js/data-table/colResizable-1.5.source.js') }}"></script>
        <script src="{{ url('public/frontend/js/data-table/bootstrap-table-export.js') }}"></script>
        <!--  editable JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/editable/jquery.mockjax.js') }}"></script>
        <script src="{{ url('public/frontend/js/editable/mock-active.js') }}"></script>
        <script src="{{ url('public/frontend/js/editable/select2.js') }}"></script>
        <script src="{{ url('public/frontend/js/editable/moment.min.js') }}"></script>
        <script src="{{ url('public/frontend/js/editable/bootstrap-datetimepicker.js') }}"></script>
        <script src="{{ url('public/frontend/js/editable/bootstrap-editable.js') }}"></script>
        <script src="{{ url('public/frontend/js/editable/xediable-active.js') }}"></script>
        <!-- Chart JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/chart/jquery.peity.min.js') }}"></script>
        <script src="{{ url('public/frontend/js/peity/peity-active.js') }}"></script>
        <!-- tab JS
            ============================================ -->
        <script src="{{ url('public/frontend/js/tab.js') }}"></script>
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
