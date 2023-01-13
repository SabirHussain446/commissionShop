<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Genus Form</title>
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
                                    <h1 class="text-center">Add New Genus</h1>
                                    <br>
                                    <form action="{{ route('genus.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                        @csrf
                                        <div class="form-group col-md-12">
                                            <label>Genus Image</label>
                                            <input type="file" class="form-control" name="genusimage" placeholder="Upload Genus Image">
                                            @error('genusimage')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label>Genus Name</label>
                                          <input type="text" class="form-control" name="genusname" value="{{ old('genusname') }}" placeholder="Enter genus name">
                                          @error('genusname')
                                          <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label>Date</label>
                                          <input type="date" class="form-control" name="date" value="{{ old('date') }}" placeholder="Select Date">
                                          @error('date')
                                          <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                        </div>
                                        <div class="text-center" style="padding: 15px">
                                        <button type="submit" class="btn btn-primary btn-block">Add Genus</button>
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
        {{-- <script src="{{ url('public/frontend/js/tawk-chat.js') }}"></script> --}}
</body>

</html>
