<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../room/style.css">

    {{-- website icon --}}
    <link rel="icon" href="../images/ocean_heaven.png" type="image/x-icon">
    <link rel="shortcut icon" href="../images/ocean_heaven.png" type="image/x-icon">

    {{-- bootstrap CSS cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    {{-- bootstrap font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Animation On Scroll CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Hotel Room</title>
</head>

<body>
    {{-- start of nav bar --}}
    <div class="container-xl">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('main-page') }}"
                    style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Ocean
                    Heaven</a>
                <button class="navbar-toggler mx-1" style="background-color: white; border: 1px solid white;"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link mx-2" style="font-size: 17px;" href="{{ route('main-page') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" style="font-size: 17px;" href="{{ route('about-us') }}">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" style="font-size: 17px;"
                                href="{{ route('hotel-room') }}">Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" style="font-size: 17px;"
                                href="{{ route('hotel-restaurant') }}">Dining</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" style="font-size: 17px;"
                                href="{{ route('exclusive-member') }}">Member</a>
                        </li>
                        <!-- Add more items as needed -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{-- end of nav bar --}}

    {{-- intro of the hotel --}}
    <div class="jumbotron p-5" id="room_image">
        <div class="row">
            <div class="col-md-12 text-center" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="display-4 mt-5 text-light" id="room_title">Single Room</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
                    <p class="lead text-light text-center" id="room_description">Experience comfort and relaxation in
                        our cozy and
                        stylish hotel rooms designed for your most convenience. Providing modern amenities and a
                        welcoming
                        ambiance for a delightful stay.
                    </p>
                    <hr class="my-4 text-light">
                    <p class="text-light text-center">
                        Come, stay and enjoy your day.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- end of intro of the hotel --}}

    {{-- Each Hotel room description --}}
    <div class="container-fluid" id="filter">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;" data-aos="zoom-in"
                        data-aos-duration="1000">
                        Our Hotel Have Many Type Of Guest Room That Can Fufill Your Needs
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="container-xl mt-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" data-aos="fade-right" data-aos-duration="1000"
                                    data-aos-delay="1000">
                                    <div class="card-header">Choose Your Hotel Room</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="check_in_date">Check In Date:</label>
                                            <div class="input-group date mt-2">
                                                <input type="date" id="check_in_date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="check_out_date" class="mt-2">Check Out Date:</label>
                                            <div class="input-group date mt-1">
                                                <input type="date" id="check_out_date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label mt-2" for="typeNumber">Guest</label>
                                            <input type="number" id="guest" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="priceRange" class="mt-2">Price Range:</label>
                                            <div class="input-group mt-2">
                                                <input type="text" name="price_before" id="priceRange"
                                                    class="form-control" readonly>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">-</span>
                                                </div>
                                                <input type="text" name="price_after" id="priceMax"
                                                    class="form-control" readonly>
                                            </div>
                                            <input type="range" class="custom-range" id="priceSlider"
                                                min="0" max="1000" step="10" value="1000">
                                        </div>
                                        <input type="submit" id="hotel-selection" class="btn btn-success w-100 mt-2"
                                            value="Search Room"><br>
                                        <div id="pagination-links" class="pagination-links">
                                            @foreach ($room_data->links()->elements[0] as $page => $url)
                                                <a href="{{ $url }}"
                                                    class="page-link {{ $page == $room_data->currentPage() ? 'active' : '' }}">{{ $page }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-9" id="room_card">
                                {{-- start of single room card (desktop view) --}}
                                @foreach ($room_data as $room_d)
                                    <div class="card shadow p-3 bg-white rounded d-none d-md-block"
                                        data-aos="fade-left" data-aos-duration="1000">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="{{ asset('../images/' . $room_d->room_type_name . '.jpg') }}"
                                                    class="card-img-top" style="height: 100%;" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h3 class="card-title">
                                                                {{ $room_d->room_type_name }}
                                                            </h3>
                                                            <div class="row">
                                                                @php
                                                                    $available_count = 0;
                                                                @endphp
                                                                @foreach ($room_info as $room_i)
                                                                    @if ($room_d->room_type_name == $room_i->room_type_name)
                                                                        @if (strpos(strtolower($room_i->availability_status), 'available') !== false)
                                                                            @php
                                                                                $available_count++;
                                                                            @endphp
                                                                        @endif
                                                                    @endif
                                                                @endforeach
                                                                @if ($available_count > 0)
                                                                    <div class="col-7">
                                                                        <h5 style="font-size: 15px;">
                                                                            <i class="fa-solid fa-bell mt-1"
                                                                                style="color: crimson; font-size: 17px;"></i>
                                                                            Status : {{ $available_count }} Remains
                                                                        </h5>
                                                                    </div>
                                                                @else
                                                                    <div class="col-7">
                                                                        <h5 style="font-size: 15px;">
                                                                            <i class="fa-solid fa-bell mt-1"
                                                                                style="color: crimson; font-size: 17px;"></i>
                                                                            Status : Full
                                                                        </h5>
                                                                    </div>
                                                                @endif
                                                                <div class="col-5">
                                                                    <h5 style="font-size: 15px;">
                                                                        <i class="fa-solid fa-user mt-1"
                                                                            style="color: black; font-size: 17px;"></i>
                                                                        Guest : {{ $room_d->guest }}
                                                                    </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5 style="font-size: 15px;">
                                                                        <i class="fa-solid fa-tag mt-1"
                                                                            style="color: orange; font-size: 17px;"></i>
                                                                        Special Offer : <span
                                                                            class="text-success">Available</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-5">
                                                                    <h5 class="text-success" style="font-size: 15px;">
                                                                        <i class="fa-solid fa-check mt-1"
                                                                            style="font-size: 15px; color: green;"></i>
                                                                        Refundable
                                                                    </h5>
                                                                </div>
                                                                <hr>
                                                                <div class="col-12">
                                                                    <h5 style="font-size: 15px;">
                                                                        <i class="fa-solid fa-money-check-dollar mt-1"
                                                                            style="color: green; font-size: 17px;"></i>
                                                                        Payment : {{ $room_d->deposit }}%
                                                                        deposit required
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="d-flex justify-content-center">
                                                                <h2 class="card-title text-success">$
                                                                    {{ $room_d->price_per_night }}</h2>
                                                            </div>
                                                            <h5 class="text-secondary text-center fs-5"><i>per
                                                                    night</i>
                                                            </h5>
                                                            <div class="d-flex justify-content-center">
                                                                <i class="fa-solid fa-star"
                                                                    style="color: orange;"></i>
                                                                <i class="fa-solid fa-star"
                                                                    style="color: orange;"></i>
                                                                <i class="fa-solid fa-star"
                                                                    style="color: orange;"></i>
                                                                <i class="fa-solid fa-star"
                                                                    style="color: orange;"></i>
                                                                <i class="fa-solid fa-star"
                                                                    style="color: orange;"></i>
                                                            </div>
                                                            @if ($available_count > 0)
                                                                <div class="d-flex justify-content-center mt-4">
                                                                    <a href="{{ route('room-booking', ['room_type_name' => $room_d->room_type_name]) }}"
                                                                        type="button"
                                                                        class="btn btn-default text-light"
                                                                        style="background-color: #3b5998">Book
                                                                        Room</a>
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
                                    {{-- start of single room card (mobile view) --}}
                                    <div
                                        class="card border border-secondary shadow-lg shadow-light shadow-offset-down-sm shadow-intensity-lg bg-white rounded d-md-none">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="{{ asset('../images/' . $room_d->room_type_name . '.jpg') }}"
                                                    class="card-img-top" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="row d-flex">
                                                                <div class="col-6">
                                                                    <h3 class="card-title">
                                                                        {{ $room_d->room_type_name }}</h3>
                                                                </div>
                                                                <div class="col-6 d-flex justify-content-end">
                                                                    <h2 class="card-title text-success"
                                                                        style="font-size: 23px;">
                                                                        ${{ $room_d->price_per_night }} / <small
                                                                            class="text-dark">night</small>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-1">
                                                                @php
                                                                    $available_count = 0;
                                                                @endphp
                                                                @foreach ($room_info as $room_i)
                                                                    @if ($room_d->room_type_name == $room_i->room_type_name)
                                                                        @if (strpos(strtolower($room_i->availability_status), 'available') !== false)
                                                                            @php
                                                                                $available_count++;
                                                                            @endphp
                                                                        @endif
                                                                    @endif
                                                                @endforeach
                                                                @if ($available_count > 0)
                                                                    <div class="col-7">
                                                                        <h5 style="font-size: 15px;">
                                                                            <i class="fa-solid fa-bell mt-1"
                                                                                style="color: crimson; font-size: 17px;"></i>
                                                                            Status : {{ $available_count }} Remains
                                                                        </h5>
                                                                    </div>
                                                                @else
                                                                    <div class="col-7">
                                                                        <h5 style="font-size: 15px;">
                                                                            <i class="fa-solid fa-bell mt-1"
                                                                                style="color: crimson; font-size: 17px;"></i>
                                                                            Status : Full
                                                                        </h5>
                                                                    </div>
                                                                @endif
                                                                <div class="col-5">
                                                                    <h5 style="font-size: 15px;">
                                                                        <i class="fa-solid fa-user mt-1"
                                                                            style="color: black; font-size: 17px;"></i>
                                                                        Guest : {{ $room_d->guest }}
                                                                    </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5 style="font-size: 15px;">
                                                                        <i class="fa-solid fa-tag mt-1"
                                                                            style="color: orange; font-size: 17px;"></i>
                                                                        Special Offer : <span
                                                                            class="text-success">Available</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-5">
                                                                    <h5 class="text-success" style="font-size: 15px;">
                                                                        <i class="fa-solid fa-check mt-1"
                                                                            style="font-size: 15px; color: green;"></i>
                                                                        Refundable
                                                                    </h5>
                                                                </div>
                                                                <hr>
                                                                <div class="col-12">
                                                                    <h5 style="font-size: 15px;">
                                                                        <i class="fa-solid fa-money-check-dollar mt-1"
                                                                            style="color: green; font-size: 17px;"></i>
                                                                        Payment : {{ $room_d->deposit }}%
                                                                        deposit required
                                                                    </h5>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <h5 class="mr-2 mt-1">Rating:</h5>
                                                                        <div class="d-flex px-1">
                                                                            <i class="fa-solid fa-star"
                                                                                style="color: orange; font-size: 17px;"></i>
                                                                            <i class="fa-solid fa-star"
                                                                                style="color: orange; font-size: 17px;"></i>
                                                                            <i class="fa-solid fa-star"
                                                                                style="color: orange; font-size: 17px;"></i>
                                                                            <i class="fa-solid fa-star"
                                                                                style="color: orange; font-size: 17px;"></i>
                                                                            <i class="fa-solid fa-star"
                                                                                style="color: orange; font-size: 17px;"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @if ($available_count > 0)
                                                                    <div class="d-flex justify-content-center mt-4">
                                                                        <a href="{{ route('room-booking', ['room_type_name' => $room_d->room_type_name]) }}"
                                                                            type="button"
                                                                            class="btn btn-default text-light w-100"
                                                                            style="background-color: #3b5998">Book
                                                                            Room</a>
                                                                    </div>
                                                                @else
                                                                    <div class="d-flex justify-content-center mt-4">
                                                                        <a type="button" onclick="room_full()"
                                                                            class="btn btn-default bg-secondary w-100 text-light">Book
                                                                            Room</a>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    {{-- end of room card (mobile view) --}}
                                @endforeach
                                {{-- end of room card (desktop view) --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of hotel room description --}}

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white bg-dark">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Ocean Heaven Hotel
                        </h6>
                        <p>
                            Welcome to Ocean Heaven Hotel, a tranquil retreat by the sea.
                            Come experience the simplicity and luxury of Ocean Heaven Hotel for a
                            serene coastal getaway.
                        </p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
                        <p>
                            <a class="text-white" style="text-decoration: none;"
                                href="{{ route('main-page') }}">Home
                            </a>
                        </p>
                        <p>
                            <a class="text-white" style="text-decoration: none;"
                                href="{{ route('about-us') }}">About
                                Us</a>
                        </p>
                        <p>
                            <a class="text-white" style="text-decoration: none;"
                                href="{{ route('hotel-room') }}">Room</a>
                        </p>
                        <p>
                            <a class="text-white" style="text-decoration: none;"
                                href="{{ route('hotel-restaurant') }}">Dinning</a>
                        </p>
                        <p>
                            <a class="text-white" style="text-decoration: none;"
                                href="{{ route('exclusive-member') }}">Member</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i> Austin, Texas</p>
                        <p><i class="fas fa-envelope mr-3"></i> oceanHeaven231@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                        <!-- Facebook -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!"
                            role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!"
                            role="button"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!"
                            role="button"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                            role="button"><i class="fab fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!"
                            role="button"><i class="fab fa-linkedin-in"></i></a>
                        <!-- Github -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!"
                            role="button"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Copyright:
            <a class="text-white" href="https://github.com/BrandonCYH">Danny CYH</a>
        </div>
    </footer>
    {{-- end of footer --}}
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

<script src="../room/index.js"></script>

{{-- jquery cdn --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

{{-- start of navigation bar function --}}
<script>
    function room_full() {
        alert("Room Not Available...");
    }

    $(document).ready(function() {
        var priceSlider = document.getElementById('priceSlider');
        var priceRange = document.getElementById('priceRange');
        var priceMax = document.getElementById('priceMax');

        priceSlider.oninput = function() {
            var min = this.value;
            var max = parseInt(this.max);
            priceRange.value = '$' + min;
            priceMax.value = '$' + max;
        };
        // Get the current path of the URL
        var currentPath = window.location.pathname;

        // Add "active" class to the corresponding menu item
        $('.navbar-nav a[href="' + currentPath + '"]').addClass('active');

        // Handle click event to set "active" class
        $('.navbar-nav a').on('click', function() {
            $('.navbar-nav a').removeClass('active');
            $(this).addClass('active');
        });
    });

    $(document).on('click', '.page-link', function(event) {
        event.preventDefault();
        $('.page-link').removeClass('active');
        $(this).addClass('active');
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
    });

    function fetch_data(page) {
        $.ajax({
            url: "/hotel-room/fetch_data?page=" + page,
            success: function(data) {
                if (data.room_data !== undefined) {
                    // Convert data.room_data to an array if it's not already an array
                    if (!Array.isArray(data.room_data)) {
                        data.room_data = [data.room_data];
                        data.room_info = [data.room_info];
                    }

                    // Initialize an empty string to accumulate HTML content
                    var htmlContent = '';
                    var available = false;

                    data.room_data.forEach(function(room_d) {
                        var room_data_length = room_d.data.length;

                        for (let i = 0; i < room_data_length; i++) {
                            htmlContent +=
                                '<div class="card shadow p-3 bg-white rounded d-none d-md-block" data-aos="fade-left" data-aos-duration="1000">';
                            htmlContent += '<div class="row no-gutters">';
                            htmlContent += '<div class="col-md-4">';
                            htmlContent += '<img src="../images/' + room_d.data[i]
                                .room_type_name +
                                '.jpg" class="card-img-top" alt="...">';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-md-8">';
                            htmlContent += '<div class="card-body">';
                            htmlContent += '<div class="row">';
                            htmlContent += '<div class="col-8">';
                            htmlContent += '<h3 class="card-title">' +
                                room_d.data[i]
                                .room_type_name + '</h3>';
                            htmlContent += '<div class="row mt-1">';
                            data.room_info.forEach(function(room_i) {
                                var room_available_length = room_i.length;
                                var available_count = 0;

                                for (let j = 0; j < room_available_length; j++) {
                                    if (room_d.data[i].room_type_name == room_i[j]
                                        .room_type_name) {
                                        if (room_i[j].availability_status == 'Available') {
                                            available_count++;
                                        }
                                    }
                                }

                                if (available_count > 0) {
                                    htmlContent += '<div class="col-7">';
                                    htmlContent +=
                                        '<h5 style="font-size: 15px;">';
                                    htmlContent +=
                                        '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : ' +
                                        available_count + ' remains';
                                    htmlContent += '</h5>';
                                    htmlContent += '</div>';
                                } else {
                                    htmlContent += '<div class="col-7">';
                                    htmlContent +=
                                        '<h5 style="font-size: 15px;">';
                                    htmlContent +=
                                        '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : Full';
                                    htmlContent += '</h5>';
                                    htmlContent += '</div>';
                                }

                                htmlContent += '<div class="col-5">';
                                htmlContent +=
                                    '<h5 style="font-size: 15px;"><i class="fa-solid fa-user mt-1" style="color: black; font-size: 17px;"></i> Guest: ' +
                                    room_d.data[i].guest + '</h5>';
                                htmlContent += '</div>';
                                htmlContent += '<div class="col-7">';
                                htmlContent +=
                                    '<h5 style="font-size: 15px;"><i class="fa-solid fa-tag mt-1" style="color: orange; font-size: 17px;"></i> Special Offer: <span class="text-success">Available</span></h5>';
                                htmlContent += '</div>';
                                htmlContent += '<div class="col-5">';
                                htmlContent +=
                                    '<h5 class="text-success" style="font-size: 15px;"><i class="fa-solid fa-check mt-1" style="color: green; font-size: 17px;"></i> Refundable </h5>';
                                htmlContent += '</div>';
                                htmlContent += '<hr>';
                                htmlContent += '<div class="col-12">';
                                htmlContent += '<h5 style="font-size: 15px;">';
                                htmlContent +=
                                    '<i class="fa-solid fa-money-check-dollar mt-1" style="color: green; font-size: 17px;"></i> Payment : ' +
                                    room_d.data[i].deposit + '% deposit required';
                                htmlContent += '</h5>';
                                htmlContent += '</div>';
                                htmlContent += '</div>';
                                htmlContent += '</div>';
                                htmlContent += '<div class="col-4">';
                                htmlContent +=
                                    '<div class="d-flex justify-content-center">';
                                htmlContent +=
                                    '<h2 class="card-title text-success">$ ' + room_d.data[
                                        i]
                                    .price_per_night +
                                    '</h2>';
                                htmlContent += '</div>';
                                htmlContent +=
                                    '<h5 class="text-secondary text-center fs-5"><i>per night</i></h5>';
                                htmlContent +=
                                    '<div class="d-flex justify-content-center">';
                                htmlContent +=
                                    '<i class="fa-solid fa-star" style="color: orange;"></i>';
                                htmlContent +=
                                    '<i class="fa-solid fa-star" style="color: orange;"></i>';
                                htmlContent +=
                                    '<i class="fa-solid fa-star" style="color: orange;"></i>';
                                htmlContent +=
                                    '<i class="fa-solid fa-star" style="color: orange;"></i>';
                                htmlContent +=
                                    '<i class="fa-solid fa-star" style="color: orange;"></i>';
                                htmlContent += '</div>';
                                htmlContent +=
                                    '<div class="d-flex justify-content-center mt-4">';

                                var roomTypeUrl =
                                    "{{ route('room-booking', ['room_type_name' => 'REPLACEROOMTYPE']) }}";
                                roomTypeUrl = roomTypeUrl.replace('REPLACEROOMTYPE', room_d
                                    .data[i]
                                    .room_type_name);

                                if (available_count > 0) {
                                    htmlContent += '<a href="' + roomTypeUrl +
                                        '" class="btn btn-default text-light" style="background-color: #3b5998">Book Room </a>';
                                } else {
                                    htmlContent +=
                                        ' <a type="button" onclick="room_full()" class="btn btn-default bg-secondary text-light">Book Room</a>';
                                }
                            });
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '<br>';
                            // end of room card (desktop view)

                            // start of room card (mobile view)
                            htmlContent +=
                                '<div class="card border border-secondary shadow-lg shadow-light shadow-offset-down-sm shadow-intensity-lg bg-white rounded d-md-none">';
                            htmlContent += '<div class="row no-gutters">';
                            htmlContent += '<div class="col-md-4">';
                            htmlContent += '<img src="../images/' + room_d.data[i]
                                .room_type_name +
                                '.jpg" class="card-img-top" alt="...">';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-md-8">';
                            htmlContent += '<div class="card-body">';
                            htmlContent += '<div class="row">';
                            htmlContent += '<div class="col-md-8">';
                            htmlContent += '<div class="row d-flex">';
                            htmlContent += '<div class="col-6">';
                            htmlContent += '<h3 class="card-title">' + room_d.data[i]
                                .room_type_name +
                                '</h3>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-6 d-flex justify-content-end">';
                            htmlContent +=
                                '<h2 class="card-title text-success" style="font-size: 23px;">$' +
                                room_d.data[i].price_per_night +
                                ' / <small class="text-dark">night</small></h2>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="row mt-1">';
                            data.room_info.forEach(function(room_i) {
                                var room_available_length = room_i.length;
                                var available_count = 0;

                                for (let j = 0; j < room_available_length; j++) {
                                    if (room_d.data[i].room_type_name == room_i[j]
                                        .room_type_name) {
                                        if (room_i[j].availability_status == 'Available') {
                                            available_count++;
                                        }
                                    }
                                }

                                if (available_count > 0) {
                                    htmlContent += '<div class="col-7">';
                                    htmlContent +=
                                        '<h5 style="font-size: 15px;">';
                                    htmlContent +=
                                        '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : ' +
                                        available_count + ' remains';
                                    htmlContent += '</h5>';
                                    htmlContent += '</div>';
                                } else {
                                    htmlContent += '<div class="col-7">';
                                    htmlContent +=
                                        '<h5 style="font-size: 15px;">';
                                    htmlContent +=
                                        '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : Full';
                                    htmlContent += '</h5>';
                                    htmlContent += '</div>';
                                }
                                htmlContent += '<div class="col-5">';
                                htmlContent +=
                                    '<h5 style="font-size: 15px;"><i class="fa-solid fa-user mt-1" style="color: black; font-size: 17px;"></i> Guest: ' +
                                    room_d.data[i].guest + '</h5>';
                                htmlContent += '</div>';
                                htmlContent += '<div class="col-7">';
                                htmlContent +=
                                    '<h5 style="font-size: 15px;"><i class="fa-solid fa-tag mt-1" style="color: orange; font-size: 17px;"></i> Special Offer: <span class="text-success">Available</span></h5>';
                                htmlContent += '</div>';
                                htmlContent += '<div class="col-5">';
                                htmlContent +=
                                    '<h5 class="text-success" style="font-size: 15px;"><i class="fa-solid fa-check mt-1" style="color: green; font-size: 17px;"></i> Refundable </h5>';
                                htmlContent += '</div>';
                                htmlContent += '<hr>';
                                htmlContent += '<div class="col-12">';
                                htmlContent += '<h5 style="font-size: 15px;">';
                                htmlContent +=
                                    '<i class="fa-solid fa-money-check-dollar mt-1" style="color: green; font-size: 17px;"></i> Payment : ' +
                                    room_d.data[i].deposit + '% deposit required';
                                htmlContent += '</h5>';
                                htmlContent += '</div>';
                                htmlContent += '<div class="col-12">';
                                htmlContent += '<div class="d-flex align-items-center">';
                                htmlContent += '<h5 class="mr-2 mt-1">Rating:</h5>';
                                htmlContent += '<div class="d-flex px-1">';
                                htmlContent +=
                                    '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                                htmlContent +=
                                    '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                                htmlContent +=
                                    '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                                htmlContent +=
                                    '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                                htmlContent +=
                                    '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                                htmlContent += '</div>';
                                htmlContent += '</div>';
                                htmlContent += '</div>';
                                htmlContent +=
                                    '<div class="d-flex justify-content-center mt-4">';
                                var roomTypeUrl =
                                    "{{ route('room-booking', ['room_type_name' => 'REPLACEROOMTYPE']) }}";
                                roomTypeUrl = roomTypeUrl.replace('REPLACEROOMTYPE', room_d
                                    .data[i]
                                    .room_type_name);

                                if (available_count > 0) {
                                    htmlContent += '<a href="' + roomTypeUrl +
                                        '" class="btn btn-default text-light w-100" style="background-color: #3b5998">Book Room </a>';
                                } else {
                                    htmlContent +=
                                        ' <a type="button" onclick="room_full()" class="btn btn-default bg-secondary text-light">Book Room</a>';
                                }
                            });
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            // end of room card (mobile view)
                        }
                    });

                    // Update the #room_card element with the accumulated HTML content
                    $('#room_card').html(htmlContent);
                }
            }
        });
    }

    // query specific selection using ajax request
    $('#hotel-selection').click(function() {
        var check_in_date = $('#check_in_date').val();
        var check_out_date = $('#check_out_date').val();
        var price_min = $('#priceRange').val();
        var price_max = $('#priceMax').val();
        var guest = $('#guest').val();

        $.ajax({
            url: "{{ route('hotel-selection') }}",
            type: "POST",
            data: {
                "check_in_date": check_in_date,
                "check_out_date": check_out_date,
                "price_min": price_min, //get the data and store in variable
                "price_max": price_max, //get the data and store in variable
                "guest": guest,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                console.log(response);

                if (!Array.isArray(response.room_data)) {
                    response.room_data = [response.room_data];
                    response.room_info = [response.room_info];
                }

                var htmlContent = '';

                // Iterate over each item in the room_data array
                response.room_data.forEach(function(room_d) {
                    var room_data_length = room_d.data.length;

                    for (let i = 0; i < room_data_length; i++) {
                        // start of room card (desktop view)
                        htmlContent +=
                            '<div class="card shadow p-3 bg-white rounded d-none d-md-block" data-aos="fade-left" data-aos-duration="1000">';
                        htmlContent += '<div class="row no-gutters">';
                        htmlContent += '<div class="col-md-4">';
                        htmlContent += '<img src="../images/' + room_d.data[i]
                            .room_type_name +
                            '.jpg" class="card-img-top" alt="...">';
                        htmlContent += '</div>';
                        htmlContent += '<div class="col-md-8">';
                        htmlContent += '<div class="card-body">';
                        htmlContent += '<div class="row">';
                        htmlContent += '<div class="col-8">';
                        htmlContent += '<h3 class="card-title" id="room-name">' + room_d
                            .data[i]
                            .room_type_name + '</h3>';
                        htmlContent += '<div class="row mt-1">';
                        response.room_info.forEach(function(room_i) {
                            var room_available_length = room_i.length;
                            var available_count = 0;

                            for (let j = 0; j < room_available_length; j++) {
                                if (room_d.data[i].room_type_name == room_i[j]
                                    .room_type_name) {
                                    if (room_i[j].availability_status ==
                                        'Available') {
                                        available_count++;
                                    }
                                }
                            }

                            if (available_count > 0) {
                                htmlContent += '<div class="col-7">';
                                htmlContent +=
                                    '<h5 style="font-size: 15px;">';
                                htmlContent +=
                                    '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : ' +
                                    available_count + ' remains';
                                htmlContent += '</h5>';
                                htmlContent += '</div>';
                            } else {
                                htmlContent += '<div class="col-7">';
                                htmlContent +=
                                    '<h5 style="font-size: 15px;">';
                                htmlContent +=
                                    '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : Full';
                                htmlContent += '</h5>';
                                htmlContent += '</div>';
                            }

                            htmlContent += '<div class="col-5">';
                            htmlContent +=
                                '<h5 style="font-size: 15px;"><i class="fa-solid fa-user mt-1" style="color: black; font-size: 17px;"></i> Guest: ' +
                                room_d.data[i].guest + '</h5>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-7">';
                            htmlContent +=
                                '<h5 style="font-size: 15px;"><i class="fa-solid fa-tag mt-1" style="color: orange; font-size: 17px;"></i> Special Offer: <span class="text-success">Available</span></h5>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-5">';
                            htmlContent +=
                                '<h5 class="text-success" style="font-size: 15px;"><i class="fa-solid fa-check mt-1" style="color: green; font-size: 17px;"></i> Refundable </h5>';
                            htmlContent += '</div>';
                            htmlContent += '<hr>';
                            htmlContent += '<div class="col-12">';
                            htmlContent += '<h5 style="font-size: 15px;">';
                            htmlContent +=
                                '<i class="fa-solid fa-money-check-dollar mt-1" style="color: green; font-size: 17px;"></i> Payment : ' +
                                room_d.data[i].deposit + '% deposit required';
                            htmlContent += '</h5>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-4">';
                            htmlContent +=
                                '<div class="d-flex justify-content-center">';
                            htmlContent +=
                                '<h2 class="card-title text-success">$ ' + room_d
                                .data[i]
                                .price_per_night +
                                '</h2>';
                            htmlContent += '</div>';
                            htmlContent +=
                                ' <h5 class="text-secondary text-center fs-5"><i>per night</i></h5>';
                            htmlContent +=
                                '<div class="d-flex justify-content-center">';
                            htmlContent +=
                                '<i class="fa-solid fa-star" style="color: orange;"></i>';
                            htmlContent +=
                                '<i class="fa-solid fa-star" style="color: orange;"></i>';
                            htmlContent +=
                                '<i class="fa-solid fa-star" style="color: orange;"></i>';
                            htmlContent +=
                                '<i class="fa-solid fa-star" style="color: orange;"></i>';
                            htmlContent +=
                                '<i class="fa-solid fa-star" style="color: orange;"></i>';
                            htmlContent += '</div>';
                            htmlContent +=
                                ' <div class="d-flex justify-content-center mt-4">';
                            var roomTypeUrl =
                                "{{ route('room-booking', ['room_type_name' => 'REPLACEROOMTYPE']) }}";
                            roomTypeUrl = roomTypeUrl.replace('REPLACEROOMTYPE',
                                room_d.data[i].room_type_name);

                            if (available_count > 0) {
                                htmlContent += '<a href="' + roomTypeUrl +
                                    '" class="btn btn-default text-light" style="background-color: #3b5998">Book Room </a>';
                            } else {
                                htmlContent +=
                                    ' <a type="button" onclick="room_full()" class="btn btn-default bg-secondary text-light">Book Room</a>';
                            }
                        });
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '<br>';
                        // end of room card (desktop view)

                        // start of room card (mobile view)
                        htmlContent +=
                            '<div class="card border border-secondary shadow-lg shadow-light shadow-offset-down-sm shadow-intensity-lg bg-white rounded d-md-none">';
                        htmlContent += '<div class="row no-gutters">';
                        htmlContent += '<div class="col-md-4">';
                        htmlContent += '<img src="../images/' + room_d.data[i]
                            .room_type_name +
                            '.jpg" class="card-img-top" alt="...">';
                        htmlContent += '</div>';
                        htmlContent += '<div class="col-md-8">';
                        htmlContent += '<div class="card-body">';
                        htmlContent += '<div class="row">';
                        htmlContent += '<div class="col-md-8">';
                        htmlContent += '<div class="row d-flex">';
                        htmlContent += '<div class="col-6">';
                        htmlContent += '<h3 class="card-title">' + room_d.data[i]
                            .room_type_name +
                            '</h3>';
                        htmlContent += '</div>';
                        htmlContent += '<div class="col-6 d-flex justify-content-end">';
                        htmlContent +=
                            '<h2 class="card-title text-success" style="font-size: 23px;">$' +
                            room_d.data[i].price_per_night +
                            ' / <small class="text-dark">night</small></h2>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '<div class="row mt-1">';
                        response.room_info.forEach(function(room_i) {
                            var room_available_length = room_i.length;
                            var available_count = 0;

                            for (let j = 0; j < room_available_length; j++) {
                                if (room_d.data[i].room_type_name == room_i[j]
                                    .room_type_name) {
                                    if (room_i[j].availability_status ==
                                        'Available') {
                                        available_count++;
                                    }
                                }
                            }

                            if (available_count > 0) {
                                htmlContent += '<div class="col-7">';
                                htmlContent +=
                                    '<h5 style="font-size: 15px;">';
                                htmlContent +=
                                    '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : ' +
                                    available_count + ' remains';
                                htmlContent += '</h5>';
                                htmlContent += '</div>';
                            } else {
                                htmlContent += '<div class="col-7">';
                                htmlContent +=
                                    '<h5 style="font-size: 15px;">';
                                htmlContent +=
                                    '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : Full';
                                htmlContent += '</h5>';
                                htmlContent += '</div>';
                            }
                            htmlContent += '<div class="col-5">';
                            htmlContent +=
                                '<h5 style="font-size: 15px;"><i class="fa-solid fa-user mt-1" style="color: black; font-size: 17px;"></i> Guest: ' +
                                room_d.data[i].guest + '</h5>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-7">';
                            htmlContent +=
                                '<h5 style="font-size: 15px;"><i class="fa-solid fa-tag mt-1" style="color: orange; font-size: 17px;"></i> Special Offer: <span class="text-success">Available</span></h5>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-5">';
                            htmlContent +=
                                '<h5 class="text-success" style="font-size: 15px;"><i class="fa-solid fa-check mt-1" style="color: green; font-size: 17px;"></i> Refundable </h5>';
                            htmlContent += '</div>';
                            htmlContent += '<hr>';
                            htmlContent += '<div class="col-12">';
                            htmlContent += '<h5 style="font-size: 15px;">';
                            htmlContent +=
                                '<i class="fa-solid fa-money-check-dollar mt-1" style="color: green; font-size: 17px;"></i> Payment : ' +
                                room_d.data[i].deposit + '% deposit required';
                            htmlContent += '</h5>';
                            htmlContent += '</div>';
                            htmlContent +=
                                '<div class="d-flex align-items-center">';
                            htmlContent += '<h5 class="mr-2 mt-1">Rating:</h5>';
                            htmlContent += '<div class="d-flex px-1">';
                            htmlContent +=
                                '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                            htmlContent +=
                                '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                            htmlContent +=
                                '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                            htmlContent +=
                                '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                            htmlContent +=
                                '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent +=
                                '<div class="d-flex justify-content-center mt-4">';
                            var roomTypeUrl =
                                "{{ route('room-booking', ['room_type_name' => 'REPLACEROOMTYPE']) }}";
                            roomTypeUrl = roomTypeUrl.replace('REPLACEROOMTYPE',
                                room_d.data[i].room_type_name);

                            if (available_count > 0) {
                                htmlContent += '<a href="' + roomTypeUrl +
                                    '" class="btn btn-default w-100 text-light w-100" style="background-color: #3b5998">Book Room </a>';
                            } else {
                                htmlContent +=
                                    ' <a type="button" onclick="room_full()" class="btn btn-default w-100 bg-secondary text-light">Book Room</a>';
                            }
                        });
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        // end of room card (mobile view)
                    }
                });

                // Insert the generated HTML into the target element
                $('#room_card').html(htmlContent);

                // applied pagination links to the query
                $('#pagination-links').html(response.pagination);
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
            }
        });
    });
</script>
{{-- end of navigation bar function --}}

{{-- aos library cdn --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

</html>
