










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
        <style>
            body{
       margin-top:20px;
       color: #1a202c;
       text-align: left;
       /* background-color: #e2e8f0; */
   }
   .main-body {
       padding: 15px;
   }
   .card {
       box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
   }

   .card {
       position: relative;
       display: flex;
       flex-direction: column;
       min-width: 0;
       word-wrap: break-word;
       background-color: #fff;
       background-clip: border-box;
       border: 0 solid rgba(0,0,0,.125);
       border-radius: .25rem;
   }

   .card-body {
       flex: 1 1 auto;
       min-height: 1px;
       padding: 1rem;
   }

   .gutters-sm {
       margin-right: -8px;
       margin-left: -8px;
   }

   .gutters-sm>.col, .gutters-sm>[class*=col-] {
       padding-right: 8px;
       padding-left: 8px;
   }
   .mb-3, .my-3 {
       margin-bottom: 1rem!important;
   }

   .bg-gray-300 {
       background-color: #e2e8f0;
   }
   .h-100 {
       height: 100%!important;
   }
   .shadow-none {
       box-shadow: none!important;
   }
       </style>
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
        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{ url('home') }}"><img class="main-logo" src="{{ url('public/frontend/img/logo/logo.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div> --}}
        @include('header')
        <!-- Static Table Start -->
        <div class="container-fluid">
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img class="img-circle" src="{{ asset('storage/app/'.$employee->image) }}" style="height: 170px; width: 170px" onerror="onImgErrorSmall(this)">
                            <div class="mt-5">
                                <br>
                              <h4>{{ $employee->fullname }}</h4>
                                <p class="text-muted font-size-sm">{{ $employee->address }}</p>
                              <button class="btn btn-primary">Follow</button>
                              <button class="btn btn-outline-primary">Message</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->fullname }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Father Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->fathername }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->email }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->address }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->phone }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">CNIC</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->cnic }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Department</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->department }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Salary</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->salary }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Gender</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->gender }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Status</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->status }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Education</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->education }}
                            </div>
                          </div>
                          <hr>

                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Experience</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->experience }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Religion</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $employee->religion }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-12">
                              <a class="btn btn-info" href="{{ route('employee.edit', $employee->id) }}">Edit</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="data-table-area mg-b-15">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="sparkline13-list">
                                        <div class="sparkline13-hd">
                                            <div class="main-sparkline13-hd">
                                                <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                            </div>
                                        </div>
                                        <div class="sparkline13-graph">
                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                <div id="toolbar">
                                                    <select class="form-control dt-tb">
                                                        <option value="">Export Basic</option>
                                                        <option value="all">Export All</option>
                                                        <option value="selected">Export Selected</option>
                                                    </select>
                                                </div>
                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="state" data-checkbox="true"></th>
                                                            <th data-field="id">ID</th>
                                                            <th data-field="name" data-editable="false">Task</th>
                                                            <th data-field="email" data-editable="false">Email</th>
                                                            <th data-field="phone" data-editable="false">Phone</th>
                                                            <th data-field="complete">Completed</th>
                                                            <th data-field="task" data-editable="false">Task</th>
                                                            <th data-field="date" data-editable="false">Date</th>
                                                            <th data-field="price" data-editable="false">Price</th>
                                                            <th data-field="action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td>1</td>
                                                            <td>Web Development</td>
                                                            <td>admin@uttara.com</td>
                                                            <td>+8801962067309</td>
                                                            <td class="datatable-ct"><span class="pie">1/6</span>
                                                            </td>
                                                            <td>10%</td>
                                                            <td>Jul 14, 2017</td>
                                                            <td>$5455</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>2</td>
                                                            <td>Graphic Design</td>
                                                            <td>fox@itpark.com</td>
                                                            <td>+8801762067304</td>
                                                            <td class="datatable-ct"><span class="pie">230/360</span>
                                                            </td>
                                                            <td>70%</td>
                                                            <td>fab 2, 2017</td>
                                                            <td>$8756</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td>Software Development</td>
                                                            <td>gumre@hash.com</td>
                                                            <td>+8801862067308</td>
                                                            <td class="datatable-ct"><span class="pie">0.42/1.461</span>
                                                            </td>
                                                            <td>5%</td>
                                                            <td>Seb 5, 2017</td>
                                                            <td>$9875</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>4</td>
                                                            <td>Woocommerce</td>
                                                            <td>kyum@frok.com</td>
                                                            <td>+8801962066547</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Oct 10, 2017</td>
                                                            <td>$3254</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>5</td>
                                                            <td>Joomla</td>
                                                            <td>jams@game.com</td>
                                                            <td>+8801962098745</td>
                                                            <td class="datatable-ct"><span class="pie">200,133</span>
                                                            </td>
                                                            <td>80%</td>
                                                            <td>Nov 20, 2017</td>
                                                            <td>$58745</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>6</td>
                                                            <td>Wordpress</td>
                                                            <td>flat@yem.com</td>
                                                            <td>+8801962254781</td>
                                                            <td class="datatable-ct"><span class="pie">0.42,1.051</span>
                                                            </td>
                                                            <td>30%</td>
                                                            <td>Aug 25, 2017</td>
                                                            <td>$789879</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>7</td>
                                                            <td>Ecommerce</td>
                                                            <td>hasan@wpm.com</td>
                                                            <td>+8801962254863</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>July 17, 2017</td>
                                                            <td>$21424</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>8</td>
                                                            <td>Android Apps</td>
                                                            <td>ATM@devep.com</td>
                                                            <td>+8801962875469</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>June 11, 2017</td>
                                                            <td>$78978</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>9</td>
                                                            <td>Prestashop</td>
                                                            <td>presta@Prest.com</td>
                                                            <td>+8801962067524</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>May 9, 2017</td>
                                                            <td>$45645</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>10</td>
                                                            <td>Game Development</td>
                                                            <td>Dev@game.com</td>
                                                            <td>+8801962067457</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>April 5, 2017</td>
                                                            <td>$4564545</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>11</td>
                                                            <td>Angular Js</td>
                                                            <td>gular@angular.com</td>
                                                            <td>+8801962067124</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Dec 1, 2017</td>
                                                            <td>$645455</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>12</td>
                                                            <td>Opencart</td>
                                                            <td>open@cart.com</td>
                                                            <td>+8801962067587</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Jan 6, 2017</td>
                                                            <td>$78978</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>13</td>
                                                            <td>Education</td>
                                                            <td>john@example.com</td>
                                                            <td>+8801962067471</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Feb 6, 2016</td>
                                                            <td>$456456</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>14</td>
                                                            <td>Construction</td>
                                                            <td>mary@example.com</td>
                                                            <td>+8801962012457</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Jan 6, 2016</td>
                                                            <td>$87978</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>15</td>
                                                            <td>Real Estate</td>
                                                            <td>july@example.com</td>
                                                            <td>+8801962067309</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Dec 1, 2016</td>
                                                            <td>$454554</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>16</td>
                                                            <td>Personal Regume</td>
                                                            <td>john@example.com</td>
                                                            <td>+8801962067306</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>May 9, 2016</td>
                                                            <td>$564555</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>17</td>
                                                            <td>Admin Template</td>
                                                            <td>mary@example.com</td>
                                                            <td>+8801962067305</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>June 11, 2016</td>
                                                            <td>$454565</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>18</td>
                                                            <td>FrontEnd</td>
                                                            <td>july@example.com</td>
                                                            <td>+8801962067304</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>May 9, 2015</td>
                                                            <td>$456546</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>19</td>
                                                            <td>Backend</td>
                                                            <td>john@range.com</td>
                                                            <td>+8801962067303</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Feb 9, 2014</td>
                                                            <td>$564554</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>20</td>
                                                            <td>Java Advance</td>
                                                            <td>lamon@ghs.com</td>
                                                            <td>+8801962067302</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>July 6, 2014</td>
                                                            <td>$789889</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>21</td>
                                                            <td>Jquery Advance</td>
                                                            <td>hasad@uth.com</td>
                                                            <td>+8801962067301</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Jun 6, 2013</td>
                                                            <td>$4565656</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>14</td>
                                                            <td>Construction</td>
                                                            <td>mary@example.com</td>
                                                            <td>+8801962012457</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Jan 6, 2016</td>
                                                            <td>$87978</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>15</td>
                                                            <td>Real Estate</td>
                                                            <td>july@example.com</td>
                                                            <td>+8801962067309</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Dec 1, 2016</td>
                                                            <td>$454554</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>16</td>
                                                            <td>Personal Regume</td>
                                                            <td>john@example.com</td>
                                                            <td>+8801962067306</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>May 9, 2016</td>
                                                            <td>$564555</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>17</td>
                                                            <td>Admin Template</td>
                                                            <td>mary@example.com</td>
                                                            <td>+8801962067305</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>June 11, 2016</td>
                                                            <td>$454565</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>18</td>
                                                            <td>FrontEnd</td>
                                                            <td>july@example.com</td>
                                                            <td>+8801962067304</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>May 9, 2015</td>
                                                            <td>$456546</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>19</td>
                                                            <td>Backend</td>
                                                            <td>john@range.com</td>
                                                            <td>+8801962067303</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Feb 9, 2014</td>
                                                            <td>$564554</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>20</td>
                                                            <td>Java Advance</td>
                                                            <td>lamon@ghs.com</td>
                                                            <td>+8801962067302</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>July 6, 2014</td>
                                                            <td>$789889</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>21</td>
                                                            <td>Jquery Advance</td>
                                                            <td>hasad@uth.com</td>
                                                            <td>+8801962067301</td>
                                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                                            </td>
                                                            <td>15%</td>
                                                            <td>Jun 6, 2013</td>
                                                            <td>$4565656</td>
                                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
    </div>
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






























{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="main-body">
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4>John Doe</h4>
                          <p class="text-secondary mb-1">Full Stack Developer</p>
                          <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                          <button class="btn btn-primary">Follow</button>
                          <button class="btn btn-outline-primary">Message</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          Kenneth Valdez
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          fip@jukmuh.al
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          (239) 816-9029
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          (320) 380-4539
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          Bay Area, San Francisco, CA
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> --}}



















{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>




    <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3">John Smith</h5>
                  <p class="text-muted mb-1">Full Stack Developer</p>
                  <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                  <div class="d-flex justify-content-center mb-2">
                    <button type="button" class="btn btn-primary">Follow</button>
                    <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                  </div>
                </div>
              </div>
              <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fas fa-globe fa-lg text-warning"></i>
                      <p class="mb-0">https://mdbootstrap.com</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                      <p class="mb-0">mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                      <p class="mb-0">@mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                      <p class="mb-0">mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                      <p class="mb-0">mdbootstrap</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Johnatan Smith</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">example@example.com</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">(097) 234-5678</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Mobile</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">(098) 765-4321</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                      <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                      </p>
                      <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                      <div class="progress rounded mb-2" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                      <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                      </p>
                      <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                      <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                      <div class="progress rounded mb-2" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> --}}
