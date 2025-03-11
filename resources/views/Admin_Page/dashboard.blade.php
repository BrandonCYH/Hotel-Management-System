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
                    <a class="navbar-brand ms-3" href="{{route('admin-dashboard')}}">Dashboard</a>
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
                            <img src="../images/ShaniaYan_5.jpg" id="profileImageDisplay" alt="User Profile"
                                class="rounded-circle img-fluid mb-2 object-fit-cover"
                                style="width: 80px; height: 80px;">
                            <h5 class="text-center mb-0 mt-2">Shania Yan</h5>
                        </div>

                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a href="{{route('admin-dashboard')}}"
                                    class="nav-link text-white active d-flex align-items-center">
                                    <i class="bi bi-house-door-fill me-2"></i> Home
                                </a>
                            </li>
                            <li>
                                <a href="{{route('room-setting')}}"
                                    class="nav-link text-white d-flex align-items-center">
                                    <i class="bi bi-patch-plus-fill me-2"></i> Room Setting
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white d-flex align-items-center">
                                    <i class="fa fa-bookmark me-2"></i> Manage Reservations
                                </a>
                            </li>
                            <li>
                                <a href="delete_expense.html" class="nav-link text-white d-flex align-items-center">
                                    <i class="fa fa-user me-2"></i> Guest Management
                                </a>
                            </li>
                        </ul>
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
                                <p class="display-6">{{$total_booking_guest}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 bg-light">
                                <h5>Total Guests</h5>
                                <p class="display-6">{{$total_booking_guest}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 bg-light">
                                <h5>Available Rooms</h5>
                                <p class="display-6">{{$total_room_available}}</p>
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
                                                    <th>Guest ID</th>
                                                    <th>Room Type</th>
                                                    <th>Room Number</th>
                                                    <th>Paid</th>
                                                    <th>Cost</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($guest_bookingInfo as $bookingInfo)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="/images/ShaniaYan_5.jpg" alt="Avatar"
                                                                class="table-avatar me-2">
                                                            <div>
                                                                <span
                                                                    class="d-block fw-bold">{{$bookingInfo->guest_name}}</span>
                                                                <small
                                                                    class="text-muted">{{$bookingInfo->guest_phoneNumber}}</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$bookingInfo->booking_id}}</td>
                                                    <td>{{$bookingInfo->guest_id}}</td>
                                                    <td>{{$bookingInfo->room_type_name}}</td>
                                                    <td>{{$bookingInfo->room_id}}</td>
                                                    <td><span
                                                            class="badge bg-danger">{{$bookingInfo->booking_status}}</span>
                                                    </td>
                                                    <td class="text-success fw-bold">$ {{$bookingInfo->total_price}}
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-outline-secondary btn-action">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
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