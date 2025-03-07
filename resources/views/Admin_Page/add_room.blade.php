<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Settings</title>

    <link rel="stylesheet" href="/Admin_Page/Add_Room/add_room.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/external_css_file/bootstrap.min.css">

    <!-- Bootstrap Icons (Optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    {{-- bootstrap font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Animation On Scroll CDN -->
    <link rel="stylesheet" href="/external_css_file/aos.css">
</head>

<body>
    {{-- start of list available facilities --}}
    <div class="modal fade" id="listFacilities_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">List Facilities Available</h5>
                </div>
                <div class="modal-body">
                    {{-- start of list services --}}
                    <div class="row">
                        @foreach ($room_facilities as $room_f)
                        <div class="col-6">
                            <p>
                                <i class="fa-solid fa-circle-check" style="color: green;"></i>
                                {{ $room_f->facility_name }}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end of list available facilities --}}

    <!-- Start of edit Room Modal -->
    <div class="modal fade" id="updateRoomModal" tabindex="-1" aria-labelledby="updateRoomModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateRoomModalLabel">Hotel Room Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="roomForm">
                        <!-- Room Name -->
                        <div class="mb-3">
                            <label for="roomName" class="form-label">Room Name</label>
                            <input type="text" class="form-control editable" id="roomName" readonly>
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <label for="roomPrice" class="form-label">Price per Night (RM)</label>
                            <input type="number" class="form-control editable" id="roomPrice" readonly>
                        </div>

                        <!-- Room Capacity -->
                        <div class="mb-3">
                            <label for="roomCapacity" class="form-label">Room Capacity</label>
                            <input type="number" class="form-control editable" id="roomCapacity" readonly>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="roomDescription" class="form-label">Description</label>
                            <textarea class="form-control editable" id="roomDescription" rows="3" readonly></textarea>
                        </div>

                        <!-- Amenities -->
                        <div class="mb-3">
                            <label class="form-label">Amenities</label>

                            <div id="roomFacilities"></div> <!-- Checkboxes will be inserted here -->
                            <div id="list_roomFacilities" style="display: none">

                            </div>
                        </div>

                        <!-- Edit Button -->
                        <div class="d-flex justify-content-end mb-2">
                            <button type="button" class="btn btn-warning w-100" id="editButton">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                        </div>

                        <!-- Save & Cancel Buttons (Hidden by Default) -->
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-2" id="cancelButton"
                                style="display: none;">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="saveButton" style="display: none;">Save
                                Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end of edit room modal --}}

    <div class="container-fluid">
        <div class="row">
            <!-- Navigation Bar -->
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <!-- Navbar Brand (optional) -->
                    <a class="navbar-brand ms-3" href="#">Room Settings</a>
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
                            <img src="#" id="profileImageDisplay" alt="User Profile"
                                class="rounded-circle img-fluid mb-2 object-fit-cover"
                                style="width: 80px; height: 80px;">
                            <h5 class="text-center mb-0 mt-2" id="user_name"></h5>
                        </div>

                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a href="{{route('admin-dashboard')}}"
                                    class="nav-link text-white active d-flex align-items-center">
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
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
                                <div class="card-header">List Operation Available</div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#listFacilities_modal">View
                                        All Facilities</button>
                                    <button type="button" class="btn btn-primary w-100 mt-3">Add New Facilities</button>
                                </div>
                            </div>
                            <br>

                            {{-- start of list page pagination --}}
                            <div class="card" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
                                <div class="card-header">
                                    List Page Pagination
                                </div>
                                <div class="card-body">
                                    <h5 class="text-center">Currently in page ---</h5>
                                    <div id="pagination-links" class="pagination-links">
                                        @foreach ($room_data->links()->elements[0] as $page => $url)
                                        <a href="{{ $url }}"
                                            class="page-link {{ $page == $room_data->currentPage() ? 'active' : '' }}">{{
                                            $page }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            {{-- end of list page pagination --}}
                        </div>
                        <div class="col-lg-9 col-md-12" id="room_card">
                            @foreach ($room_data as $room_d)
                            <div class="card shadow p-3 bg-white rounded" data-aos="fade-left" data-aos-duration="1000">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 col-md-4">
                                        <img src="{{ asset('../images/' . $room_d->room_type_name . '.jpg') }}"
                                            class="card-img-top" alt="{{ $room_d->room_type_name }}">
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="card card-body border border-white">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-8">
                                                    <h3>{{ $room_d->room_type_name }}</h3>
                                                    <div class="row">
                                                        @php
                                                        $available_count = 0;
                                                        @endphp
                                                        @foreach ($room_info as $room_i)
                                                        @if ($room_d->room_type_name == $room_i->room_type_name)
                                                        @if (strpos(strtolower($room_i->availability_status),
                                                        'available') !== false)
                                                        @php
                                                        $available_count++;
                                                        @endphp
                                                        @endif
                                                        @endif
                                                        @endforeach
                                                        @if ($available_count > 0)
                                                        <div class="col-lg-7 col-md-7">
                                                            <h5 style="font-size: 15px;">
                                                                <i class="fa-solid fa-bell mt-1"
                                                                    style="color: crimson; font-size: 17px;"></i>
                                                                Status : {{ $available_count }} Remains
                                                            </h5>
                                                        </div>
                                                        @else
                                                        <div class="col-lg-7 col-md-7">
                                                            <h5 style="font-size: 15px;">
                                                                <i class="fa-solid fa-bell mt-1"
                                                                    style="color: crimson; font-size: 17px;"></i>
                                                                Status : Full
                                                            </h5>
                                                        </div>
                                                        @endif
                                                        <div class="col-lg-5 col-md-5">
                                                            <h5 style="font-size: 15px;">
                                                                <i class="fa-solid fa-user mt-1"
                                                                    style="color: black; font-size: 17px;"></i>
                                                                Guest : {{ $room_d->room_guest }}
                                                            </h5>
                                                        </div>
                                                        <div class="col-lg-7 col-md-7">
                                                            <h5 style="font-size: 15px;">
                                                                <i class="fa-solid fa-circle-up mt-1"
                                                                    style="color: orange; font-size: 17px;"></i>
                                                                Upgrade: <span
                                                                    class="text-success"><b>Available</b></span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5">
                                                            <h5 class="text-success" style="font-size: 15px;">
                                                                <i class="fa-solid fa-check mt-1"
                                                                    style="font-size: 15px; color: green;"></i>
                                                                Refundable
                                                            </h5>
                                                        </div>
                                                        <hr>
                                                        <div class="col-lg-12 col-md-12">
                                                            <h5 style="font-size: 15px;">
                                                                <i class="fa-solid fa-money-check-dollar mt-1"
                                                                    style="color: green; font-size: 17px;"></i>
                                                                Payment : {{ $room_d->deposit }}%
                                                                deposit required
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="d-flex justify-content-center">
                                                        <h2 class="text-success">$
                                                            {{ $room_d->room_price }}</h2>
                                                    </div>
                                                    <h5 class="text-secondary text-center fs-5"><i>per
                                                            night</i>
                                                    </h5>
                                                    <div class="d-flex justify-content-center">
                                                        <i class="fa-solid fa-star" style="color: orange;"></i>
                                                        <i class="fa-solid fa-star" style="color: orange;"></i>
                                                        <i class="fa-solid fa-star" style="color: orange;"></i>
                                                        <i class="fa-solid fa-star" style="color: orange;"></i>
                                                        <i class="fa-solid fa-star" style="color: orange;"></i>
                                                    </div>
                                                    @if ($available_count > 0)
                                                    <div class="d-flex justify-content-center mt-4">
                                                        <button type="button" class="btn btn-default text-light"
                                                            data-roomname="{{ $room_d->room_type_name }}"
                                                            data-bs-toggle="modal" data-bs-target="#updateRoomModal"
                                                            style="background-color: #3b5998">Edit
                                                            Room</button>
                                                    </div>
                                                    @else
                                                    <div class="d-flex justify-content-center mt-4">
                                                        <a type="button" onclick="room_full()"
                                                            class="btn btn-default bg-secondary text-light">Book
                                                            Room</a>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            {{-- end of room card (desktop view) --}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

{{-- aos library cdn --}}
<script src="/external_js_file/aos.js"></script>

{{-- jquery cdn --}}
<script src="/external_js_file/jquery.min.js"></script>

<!-- Bootstrap JS (Optional) -->
<script src="/external_js_file/bootstrap.min.js"></script>

{{-- link with other js file --}}
<script src="/Admin_Page/Add_Room/add_room.js"></script>

<script>
    AOS.init({
        disable: 'mobile'
    });

$(document).on('click', '.page-link', function (event) {
    event.preventDefault();
    $('.page-link').removeClass('active');
    $(this).addClass('active');
    var page = $(this).attr('href').split('page=')[1];
    fetch_room_data(page);
});
</script>

</html>