<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

    <!-- theme meta -->
    <meta name="theme-name" content="sleek" />

    <title>Admin Dashboard</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="dashboard/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="dashboard/plugins/nprogress/nprogress.css" rel="stylesheet" />

    <!-- No Extra plugin used -->
    <link href='/dashboard/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='/dashboard/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>
    <link href='/dashboard/plugins/toastr/toastr.min.css' rel='stylesheet'>

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="/dashboard/css/sleek.css" />

    <!-- FAVICON -->
    <link href="/dashboard/img/favicon.png" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/dashboard/plugins/nprogress/nprogress.js"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="/index.html" title="Sleek Dashboard">
                        <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"
                            width="30" height="33" viewBox="0 0 30 33">
                            <g fill="none" fill-rule="evenodd">
                                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                            </g>
                        </svg>

                        <span class="brand-name text-truncate">Sleek Dashboard</span>
                    </a>
                </div>

                <!-- begin sidebar scrollbar -->
                <div class="" data-simplebar style="height: 100%;">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li class="has-sub active expand">
                            <a class="sidenav-item-link" href="{{ route('admin-dashboard') }}" data-bs-toggle="collapse"
                                data-bs-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="has-sub ">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#hotel-room" aria-expanded="false" aria-controls="hotel-room">
                                <i class="mdi mdi-pencil-box-multiple"></i>
                                <span class="nav-text">Hotel Room</span> <b class="caret"></b>
                            </a>

                            <ul class="collapse " id="hotel-room" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('add-room') }}">
                                            <span class="nav-text">Add Room</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('room-availability') }}">
                                            <span class="nav-text">Room Availability</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <!-- <li class="section-title">
                  UI Elements
                </li> -->

                        <li class="has-sub ">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#components" aria-expanded="false" aria-controls="components">
                                <i class="mdi mdi-folder-multiple-outline"></i>
                                <span class="nav-text">Components</span> <b class="caret"></b>
                            </a>

                            <ul class="collapse " id="components" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="alert.html">
                                            <span class="nav-text">Alert</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="badge.html">
                                            <span class="nav-text">Badge</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="breadcrumb.html">
                                            <span class="nav-text">Breadcrumb</span>

                                        </a>
                                    </li>

                                    <li class="has-sub ">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#buttons" aria-expanded="false" aria-controls="buttons">
                                            <span class="nav-text">Buttons</span> <b class="caret"></b>
                                        </a>

                                        <ul class="collapse " id="buttons">
                                            <div class="sub-menu">
                                                <li class="">
                                                    <a href="button-default.html">Button Default</a>
                                                </li>

                                                <li class="">
                                                    <a href="button-dropdown.html">Button Dropdown</a>
                                                </li>

                                                <li class="">
                                                    <a href="button-group.html">Button Group</a>
                                                </li>

                                                <li class="">
                                                    <a href="button-social.html">Button Social</a>
                                                </li>

                                                <li class="">
                                                    <a href="button-loading.html">Button Loading</a>
                                                </li>
                                            </div>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="card.html">
                                            <span class="nav-text">Card</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="carousel.html">
                                            <span class="nav-text">Carousel</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="collapse.html">
                                            <span class="nav-text">Collapse</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="list-group.html">
                                            <span class="nav-text">List Group</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="modal.html">
                                            <span class="nav-text">Modal</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="pagination.html">
                                            <span class="nav-text">Pagination</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="popover-tooltip.html">
                                            <span class="nav-text">Popover & Tooltip</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="progress-bar.html">
                                            <span class="nav-text">Progress Bar</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="spinner.html">
                                            <span class="nav-text">Spinner</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="switcher.html">
                                            <span class="nav-text">Switcher</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="tab.html">
                                            <span class="nav-text">Tab</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="has-sub ">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#icons" aria-expanded="false" aria-controls="icons">
                                <i class="mdi mdi-diamond-stone"></i>
                                <span class="nav-text">Icons</span> <b class="caret"></b>
                            </a>

                            <ul class="collapse " id="icons" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="material-icon.html">
                                            <span class="nav-text">Material Icon</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="flag-icon.html">
                                            <span class="nav-text">Flag Icon</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="has-sub ">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#forms" aria-expanded="false" aria-controls="forms">
                                <i class="mdi mdi-email-mark-as-unread"></i>
                                <span class="nav-text">Forms</span> <b class="caret"></b>
                            </a>

                            <ul class="collapse " id="forms" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="basic-input.html">
                                            <span class="nav-text">Basic Input</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="input-group.html">
                                            <span class="nav-text">Input Group</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="checkbox-radio.html">
                                            <span class="nav-text">Checkbox & Radio</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="form-validation.html">
                                            <span class="nav-text">Form Validation</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="form-advance.html">
                                            <span class="nav-text">Form Advance</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>


        <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">

            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">
                        <div class="input-group">
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="dashboard/img/user/user.png" class="user-image" alt="User Image" />
                                    <span class="d-none d-lg-inline-block">Abdus Salam</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <img src="dashboard/img/user/user.png" class="img-circle" alt="User Image" />
                                        <div class="d-inline-block">
                                            Abdus Salam <small class="pt-1">iamabdus@gmail.com</small>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="user-profile.html">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-email"></i> Message
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                                    </li>
                                    <li class="right-sidebar-in">
                                        <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>


            <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
            <div class="content-wrapper">
                <div class="content">

                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->


            <!-- Footer -->
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        Copyright &copy; <span id="copy-year"></span> a template by <a class="text-primary"
                            href="https://themefisher.com" target="_blank">Themefisher</a>.
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->


    <!-- <script type="module">
        import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

        const el = document.createElement('pwa-update');
        document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="/dashboard/plugins/jquery/jquery.min.js"></script>
    <script src="/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/dashboard/plugins/simplebar/simplebar.min.js"></script>

    <script src='/dashboard/plugins/charts/Chart.min.js'></script>
    <script src='/dashboard/js/chart.js'></script>

    <script src='/dashboard/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='/dashboard/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
    <script src='/dashboard/js/vector-map.js'></script>

    <script src='/dashboard/plugins/daterangepicker/moment.min.js'></script>
    <script src='/dashboard/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='/dashboard/js/date-range.js'></script>

    <script src='/dashboard/plugins/toastr/toastr.min.js'></script>

    <script src="/dashboard/js/sleek.js"></script>
    <link href="/dashboard/options/optionswitch.css" rel="stylesheet">
    <script src="/dashboard/options/optionswitcher.js"></script>
</body>

</html>
