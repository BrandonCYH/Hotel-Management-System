<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/external_css_file/bootstrap.min.css">
    <!-- Bootstrap Icons (Optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    {{-- link with other css file --}}
    <link rel="stylesheet" href="/Admin_Page/Dashboard/dashboard.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Navigation Bar -->
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <!-- Navbar Brand (optional) -->
                    <a class="navbar-brand ms-3" href="#">Dashboard</a>
                    <!-- Sidebar Toggle Button -->
                    <button id="sidebarToggle" class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </nav>
            <!-- end of navigation bar -->

            <!-- start of the sidebar function -->
            <div class="d-flex">
                <div class="offcanvas offcanvas-start bg-dark text-light" id="sidebarOffcanvas" tabindex="-1"
                    aria-labelledby="sidebarOffcanvasLabel" style="width: 250px;">

                    <!-- Close Button in the Offcanvas Sidebar -->
                    <div class="offcanvas-header d-lg-none">
                        <h5 class="offcanvas-title" id="sidebarOffcanvasLabel">Profile</h5>
                        <button type="button" class="btn-close btn-close-white" id="sidebarClose" aria-label="Close"
                            data-bs-dismiss="offcanvas"></button>
                    </div>

                    <div class="offcanvas-body p-3 d-flex flex-column">
                        <div class="d-flex flex-column align-items-center mb-4">
                            <img src="img/user_image.png" id="profileImageDisplay" alt="User Profile"
                                class="rounded-circle img-fluid mb-2 object-fit-cover"
                                style="width: 80px; height: 80px;">
                            <h5 class="text-center mb-0 mt-2" id="user_name"></h5>
                        </div>

                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link text-white active d-flex align-items-center">
                                    <i class="bi bi-house-door-fill me-2"></i> Home
                                </a>
                            </li>
                            <li>
                                <a href="{{route('add-room')}}" class="nav-link text-white d-flex align-items-center">
                                    <i class="bi bi-patch-plus-fill me-2"></i> Add Room
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white d-flex align-items-center">
                                    <i class="bi bi-pencil-square me-2"></i> Edit Room
                                </a>
                            </li>
                            <li>
                                <a href="delete_expense.html" class="nav-link text-white d-flex align-items-center">
                                    <i class="bi bi-trash3 me-2"></i> Delete Expense
                                </a>
                            </li>
                            <li>
                                <a href="summary_expense.html" class="nav-link text-white d-flex align-items-center">
                                    <i class="bi bi-bar-chart-fill me-2"></i> View Summary
                                </a>
                            </li>
                            <li>
                                <a href="login.html" class="nav-link text-white d-flex align-items-center">
                                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                                </a>
                            </li>
                        </ul>

                        <!-- Light/Dark Mode Toggle -->
                        <div class="mt-auto text-center">
                            <div class="toolbar mb-3">
                                <button id="toggleMode" class="btn btn-sm btn-light-dark border border-light">
                                    <i id="modeIcon" class="fas fa-sun" style="color: orange;"></i> <span
                                        class="text-light mx-2">Light Mode</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of sidebar functions -->

            <!-- Main Content -->
            <div class="flex-grow-1 p-2 mt-3">
                <div class="container-fluid">
                    <!-- Stats Overview -->
                    <div class="row text-center mb-4">
                        <div class="col-md-4">
                            <div class="card p-3 bg-light">
                                <h5>Total Bookings</h5>
                                <p class="display-6">120</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 bg-light">
                                <h5>Total Guests</h5>
                                <p class="display-6">85</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 bg-light">
                                <h5>Available Rooms</h5>
                                <p class="display-6">15</p>
                            </div>
                        </div>
                    </div>

                    {{-- start of the dashboard chart --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">Revenue based on Rooms</div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <canvas id="roomRevenueChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    Today's Bookings
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Booking ID</th>
                                                    <th>Nights</th>
                                                    <th>Room Type</th>
                                                    <th>Guests</th>
                                                    <th>Paid</th>
                                                    <th>Cost</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="/images/ShaniaYan_5.jpg" alt="Avatar"
                                                                class="table-avatar me-2">
                                                            <div>
                                                                <span class="d-block fw-bold">Ram Kailash</span>
                                                                <small class="text-muted">9806569812</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>SDK89635</td>
                                                    <td>2</td>
                                                    <td>1 King Room</td>
                                                    <td>2 Guests</td>
                                                    <td><span class="badge bg-success">Paid</span></td>
                                                    <td>nrp.1500</td>
                                                    <td>
                                                        <button class="btn btn-outline-secondary btn-action">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="/images/ShaniaYan_5.jpg" alt="Avatar"
                                                                class="table-avatar me-2">
                                                            <div>
                                                                <span class="d-block fw-bold">Amit Thapa</span>
                                                                <small class="text-muted">9801234567</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>SDK89636</td>
                                                    <td>4</td>
                                                    <td>1 Queen Room</td>
                                                    <td>3 Guests</td>
                                                    <td><span class="badge bg-danger">Unpaid</span></td>
                                                    <td>nrp.3200</td>
                                                    <td>
                                                        <button class="btn btn-outline-secondary btn-action">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="/images/ShaniaYan_5.jpg" alt="Avatar"
                                                                class="table-avatar me-2">
                                                            <div>
                                                                <span class="d-block fw-bold">Amit Thapa</span>
                                                                <small class="text-muted">9801234567</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>SDK89636</td>
                                                    <td>4</td>
                                                    <td>1 Queen Room</td>
                                                    <td>3 Guests</td>
                                                    <td><span class="badge bg-danger">Unpaid</span></td>
                                                    <td>nrp.3200</td>
                                                    <td>
                                                        <button class="btn btn-outline-secondary btn-action">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="/images/ShaniaYan_5.jpg" alt="Avatar"
                                                                class="table-avatar me-2">
                                                            <div>
                                                                <span class="d-block fw-bold">Amit Thapa</span>
                                                                <small class="text-muted">9801234567</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>SDK89636</td>
                                                    <td>4</td>
                                                    <td>1 Queen Room</td>
                                                    <td>3 Guests</td>
                                                    <td><span class="badge bg-danger">Unpaid</span></td>
                                                    <td>nrp.3200</td>
                                                    <td>
                                                        <button class="btn btn-outline-secondary btn-action">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    {{-- end of the dashboard chart --}}

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    Manage Reservations
                                </div>
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">Hotel Revenue Chart</div>
                                <div class="card-body">
                                    <canvas id="revenueChart" width="400" height="200"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-header">
                                    Service Extra
                                </div>
                                <div class="card-body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Bootstrap JS (Optional) -->
<script src="/external_js_file/bootstrap.min.js"></script>
<script src="/external_js_file/chart.js"></script>
<script src="/external_js_file/jquery.min.js"></script>
<script src="/Admin_Page/Dashboard/dashboard.js"></script>

</html>
