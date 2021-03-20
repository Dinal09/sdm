<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Melancong Landing | {{ $tools['title'] }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/font/iconsmind-s/css/iconsminds.css') }}" />
    <link rel="stylesheet"
        href="{{ url('Html-Version/Source/src/font/simple-line-icons/css/simple-line-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/bootstrap.rtl.only.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/fullcalendar.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet"
        href="{{ url('Html-Version/Source/src/css/vendor/datatables.responsive.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/bootstrap-stars.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/quill.bubble.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/component-custom-switch.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/smart_wizard.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/bootstrap-float-label.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/bootstrap-tagsinput.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/component-custom-switch.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/jquery.contextMenu.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/vendor/bootstrap-float-label.min.css') }}" />
    <link rel="stylesheet" href="{{ url('Html-Version/Source/src/css/main.css') }}" />
    <link rel="stylesheet" href="{{ url('toastr/toastr.min.css') }}" />
</head>

<script src="{{ url('Html-Version/Source/src/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/perfect-scrollbar.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/Chart.bundle.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/chartjs-plugin-datalabels.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/moment.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/fullcalendar.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/datatables.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/perfect-scrollbar.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/progressbar.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/jquery.barrating.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/select2.full.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/nouislider.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/bootstrap-datepicker.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/Sortable.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/ckeditor5-build-classic/ckeditor.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/jquery.smartWizard.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/jquery.contextMenu.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/bootstrap-notify.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/mousetrap.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/vendor/glide.min.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/dore.script.js') }}"></script>
<script src="{{ url('Html-Version/Source/src/js/scripts.js') }}"></script>
<script src="{{ url('toastr/toastr.min.js') }}"></script>

<body id="app-container" class="menu-default">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <div class="search" data-search-path="Pages.Search.html?q=">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div>

        </div>

        <a class="navbar-logo" href="Dashboard.Default.html">
            <img class="card-img-top" src="{{ url('logo.jpg') }}" alt="Card image cap" style="width:200px">
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1"
                        data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>
                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Admin</span>
                    <span>
                        <img alt="Profile Picture" src="{{ url('Html-Version/Source/src/img/profiles/l-1.jpg') }}" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="{{ url('admin-user') }}">Account</a>
                    <a class="dropdown-item" href="{{ url('admin-logout') }}">Sign out</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    @if ($tools['menu'] == 1)
                        <li class="active">
                        @else
                        <li>
                    @endif
                    <a href="{{ url('admin') }}">
                        <i class="iconsminds-shop-4"></i>
                        <span>Dashboards</span>
                    </a>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="profile">
                    <ul class="list-unstyled inner-level-menu">
                        <li>
                            <a href="{{ url('about') }}">
                                <i class="simple-icon-people"></i> <span class="d-inline-block">About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('jumbotron') }}">
                                <i class="simple-icon-layers"></i> <span class="d-inline-block">Jumbotron</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('contact') }}">
                                <i class="simple-icon-envelope-letter"></i> <span class="d-inline-block">Contact</span>
                            </a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">ColoredStrategies 2019</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
