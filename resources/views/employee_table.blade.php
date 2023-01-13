<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employee Table</title>
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
    <!-- Start Left menu area -->
    @include('aside')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{ url('home') }}"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        @include('header')
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Employee List</h4>
                            <div class="add-product">
                                <a href="{{ route('employee.create') }}">Add Employee</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr style="background: #F5CF8E">
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Department</th>
                                        <th>Salary</th>
                                        <th>Gender</th>
                                        {{-- <th>User Status</th> --}}
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Details</th>
                                    </tr>
                                    @foreach ($employee as $item)
                                    <tr>
                                        {{-- <td><img class="img-circle" src="{{ asset($item->image) }}" style="height: 60px; width: 60px" onerror="onImgErrorSmall(this)"></td> --}}
                                        <td><img class="img-circle" src="storage/app/{{ $item->image }}" style="height: 60px; width: 60px" onerror="onImgErrorSmall(this)"></td>
                                        <td>{{ $item->fullname }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->department }}</td>
                                        <td>{{ $item->salary }}</td>
                                        <td>{{ $item->gender }}</td>
                                        {{-- <td>
                                            <select name="">
                                                <option value="">
                                                    <button class="pd-setting">Active</button>
                                                </option>
                                                <option value="">
                                                    <button class="ps-setting">Paused</button>
                                                </option>
                                                <option value="">
                                                    <button class="ds-setting">Disabled</button>
                                                </option>
                                            </select>
                                        </td> --}}
                                        <td>
                                            <a href="{{ route('employee.edit', $item->id) }}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('employee.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button data-toggle="tooltip" type="submit" onclick="return destroyFunction();" title="Delete" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('employee.show', $item->id) }}"><button class="btn btn-primary" data-toggle="tooltip" title="Details">Details</button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            {{-- <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </div>
    <script>
        function destroyFunction() {
            if(!confirm("Are you sure you want to delete this record?"))
            event.preventDefault();
        }
    </script>
    <script>
        function onImgErrorSmall(source)
        {
        source.src = "https://www.portmelbournefc.com.au/wp-content/uploads/2022/03/avatar-1.jpeg";
        // disable onerror to prevent endless loop
        source.onerror = "";
        return true;
        }
        </script>
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
        {{-- <script src="{{ url('public/frontend/js/tawk-chat.js') }}"></script> --}}
</body>

</html>
