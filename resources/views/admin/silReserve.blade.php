<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin dashboard</title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.4-web/css/all.min.css') }}">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>RÊVE HÔTEL</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3 style="font-size: 20px;">General</h3>
                            <ul class="nav side-menu">
                                <li style="font-size: 15px;"><a><i class="fa fa-home"></i> Home <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/admin/home">Users</a></li>
                                    </ul>
                                </li>

                                <li style="font-size: 15px;"><a><i class="fas fa-city"></i> City <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/ville">View</a></li>
                                    </ul>
                                </li>

                                <li style="font-size: 15px;"><a><i class="fa fa-hotel"></i> Hôtels <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li style="font-size: 15px;"><a><i class=""></i> Ouagadougou <span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/hotele">View</a></li>
                                            </ul>
                                        </li>

                                        <li style="font-size: 15px;"><a><i class=""></i> Bobo-Dioulasso <span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/hotele2">view</a></li>
                                            </ul>
                                        </li>

                                        <li style="font-size: 15px;"><a><i class=""></i> Koudougou <span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/hotele3">view</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li style="font-size: 15px;"><a><i class="fa fa-desktop"></i> Rooms <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li style="font-size: 15px;"><a><i class=""></i> Ouagadougou <span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/lancastar/lanListe">Lancastar Hôtel</a></li>
                                                <li><a href="/chambre/liste">Hôtel Silmande</a></li>
                                                <li><a href="/bravia/braListe">Bravia Hôtel</a></li>
                                            </ul>
                                        </li>

                                        <li style="font-size: 15px;"><a><i class=""></i> Bobo-Dioulasso <span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/chambre2/liste2">Iba Hôtel</a></li>
                                                <li><a href="/saby/sabyListe">Saby Hôtel</a></li>
                                                <li><a href="/pacific/pacListe">Pacific Hôtel</a></li>
                                            </ul>
                                        </li>

                                        <li style="font-size: 15px;"><a><i class=""></i> Koudougou <span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/chambre3/liste3">Splendide Hôtel</a></li>
                                                <li><a href="/pousga/pousListe">Pousga Hôtel</a></li>
                                                <li><a href="/dima/dimaListe">Dima Hôtel</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li style="font-size: 15px;"><a><i class="fa fa-edit"></i> Réservation <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li style="font-size: 15px;"><a><i class=""></i> Ouagadougou <span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/admin/reservation1">Lancastar Hôtel</a></li>
                                                <li><a href="/admin/reservation2">Hôtel Silmande</a></li>
                                                <li><a href="/admin/reservation3">Bravia Hôtel</a></li>
                                            </ul>
                                        </li>

                                        <li style="font-size: 15px;"><a><i class=""></i> Bobo-Dioulasso <span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/admin/reservation4">Iba Hôtel</a></li>
                                                <li><a href="/admin/reservation5">Saby Hôtel</a></li>
                                                <li><a href="/admin/reservation6">Pacific Hôtel</a></li>
                                            </ul>
                                        </li>

                                        <li style="font-size: 15px;"><a><i class=""></i> Koudougou <span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="/admin/reservation7">Splendide Hôtel</a></li>
                                                <li><a href="/admin/reservation8">Pousga Hôtel</a></li>
                                                <li><a href="/admin/reservation9">Dima Hôtel</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li style="font-size: 15px;"><a><i class="fa fa-table"></i> Contacts <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/contact/liste">view</a></li>
                                    </ul>
                                </li>
                        </div>

                    </div>
                    <!-- /sidebar menu -->




                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <i class="fab fa-facebook" style="color: #fff;"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <i class="fab fa-twitter" style="color: #fff;"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <i class="fab fa-linkedin" style="color: #fff;"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <i class="fab fa-github" style="color: #fff;"></i>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars" style="font-size: 20px;"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <h2 id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </h2>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Administration Dashboard</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="clearfix"></div>
                    <div>
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                    </div>

                    <div class="row" style="display: block;">

                        <div class="clearfix"></div>

                        <div class="col-md-12 col-sm-12  ">
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings">
                                            <th>
                                                <input type="checkbox" id="check-all" class="flat">
                                            </th>
                                            <th class="column-title">id</th>
                                            <th class="column-title">Nom</th>
                                            <th class="column-title">Prenom</th>
                                            <th class="column-title">Arriver</th>
                                            <th class="column-title">Depart</th>
                                            <th class="column-title">Statut</th>
                                            <th class="column-title no-link last"><span class="nobr">Action</span>
                                            </th>
                                            <th class="bulk-actions" colspan="7">
                                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions (
                                                    <span class="action-cnt">
                                                    </span> ) <i class="fa fa-chevron-down"></i></a>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($reservations as $reservation)
                                        @if($reservation['hotele_id'] == "2")
                                    <tbody>
                                        <tr class="even pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <td style="font-size: 15px"> {{ $reservation->id }} </td>
                                            <td style="font-size: 15px"> {{ $reservation->nom }} </td>
                                            <td style="font-size: 15px"> {{ $reservation->prenom }} </td>
                                            <td style="font-size: 15px"> {{ $reservation->dateArriver }} </td>
                                            <td style="font-size: 15px"> {{ $reservation->dateDepart }} </td>
                                            <td style="font-size: 15px"> {{ $reservation->statut }} </td>

                                            <td style="font-size: 15px">
                                                <form action="{{ route('approuver.reservation', $reservation->id) }}">
                                                    @csrf
                                                    <button type="submit">Approuver</button>
                                                </form>
                                                <a href="/reservatin/delete/{{ $reservation->id }}"><i
                                                        class='fas fa-trash m-2' style='color: red;'></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    aboubacar copyright september 2023
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>



    <script src="{{ asset('bootstrap-5.3.1-dist/js/bootstrap.min.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('i[data-target="#example2Modal"]').on('click', function () {
                var chambreId = $(this).data('id');

                $('#example2Modal input[name="id"]').val(chambreId);
            });
        });
    </script>

    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('fontawesome-free-5.15.4-web/js/all.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('build/js/custom.min.js') }}"></script>
</body>

</html>