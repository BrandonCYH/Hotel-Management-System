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

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="/dashboard/css/sleek.css" />

    <!-- FAVICON -->
    <link href="/dashboard/img/favicon.png" rel="shortcut icon" />

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
                            <a class="sidenav-item-link" href="{{ route('admin-dashboard') }}" data-toggle="collapse"
                                data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
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
                    <div class="navbar-right ml-auto">
                        <ul class="nav navbar-nav">
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="dashboard/img/user/user.png" class="user-image" alt="User Image" />
                                    <span class="d-none d-lg-inline-block">Abdus Salam</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
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
                    <div class="card" style="margin: 20px;">
                        <div class="card-header">Add Room Promotion</div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="{{ route('add-room-process') }}" method="post"
                                            enctype="multipart/form-data">
                                            {!! csrf_field() !!}
                                            <label>Name Promotion</label>
                                            <input type="text" id="name_promotion" name="name_promotion"
                                                class="form-control"><br>

                                            <label>Original Price</label>
                                            <input type="text" id="original_price" name="original_price"
                                                class="form-control"><br>

                                            <label>Discount Price</label>
                                            <input type="text" id="discount_price" name="discount_price"
                                                class="form-control"><br>

                                            <label>Room Remaining</label>
                                            <input type="text" id="room_remaining" name="room_remaining"
                                                class="form-control"><br>

                                            <label>Room Image</label>
                                            <input class="form-control" name="photo" type="file"
                                                id="photo"><br>

                                            <input type="submit" value="Save"
                                                class="btn btn-success w-100"><br><br>
                                            <button type="button" onclick="getValue()"
                                                class="btn btn-primary w-100">Preview
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card d-none" id="output"
                                            style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, darkorchid) 1;">
                                            <div class="d-flex justify-content-center p-3">
                                                <p class="lead mb-0 text-center" id="promotion_title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                </p>
                                            </div>
                                            <img src="" id="room_image" class="card-img-top" />
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <p class="small">
                                                        <a href="#!"
                                                            style="color: #fff;
                                                        text-shadow: 3px 3px 20px #000000,
                                                            -2px 1px 30px #000000;">Original
                                                            Price</a>
                                                    </p>
                                                    <p class="small text-danger">
                                                        <s id="ori_price"></s>
                                                    </p>
                                                </div>

                                                <div class="d-flex justify-content-between mb-3">
                                                    <h5 class="mb-0 mt-3"
                                                        style="color: #fff;
                                                    text-shadow: 3px 3px 20px #000000,
                                                        -2px 1px 30px #000000;">
                                                        Promotion</h5>
                                                    <h5 class="mb-0 mt-3" style="color: #00ff00;" id="promotion">
                                                    </h5>
                                                </div>

                                                <div class="d-flex justify-content-between mb-2">
                                                    <p class="mb-0"
                                                        style="color: #fff;
                                                    text-shadow: 3px 3px 20px #000000,
                                                        -2px 1px 30px #000000;">
                                                        Available: <span class="fw-bold" style="color: #00ff00;"
                                                            id="remaining"></span></p>
                                                    <div class="ms-auto text-warning">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <script>
        function getValue() {
            let name_promotion = document.getElementById('name_promotion').value;
            let original_price = document.getElementById('original_price').value;
            let discount_price = document.getElementById('discount_price').value;
            let room_remaining = document.getElementById('room_remaining').value;
            let output = document.getElementById('output');

            document.getElementById('promotion_title').innerHTML = name_promotion;
            document.getElementById('ori_price').innerHTML = "$" + original_price + "/ Per Night";
            document.getElementById('promotion').innerHTML = "$" + discount_price;
            document.getElementById('remaining').innerHTML = room_remaining;
            output.classList.remove('d-none');
        }

        var fileTag = document.getElementById("photo"),
            preview = document.getElementById("room_image");

        fileTag.addEventListener("change", function() {
            changeImage(this);
        });

        function changeImage(input) {
            var reader;

            if (input.files && input.files[0]) {
                reader = new FileReader();

                reader.onload = function(e) {
                    preview.setAttribute('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>
