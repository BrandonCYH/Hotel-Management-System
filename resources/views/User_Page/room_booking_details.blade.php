<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- link with other css file --}}
    <link rel="stylesheet" href="/room_booking/style.css">
    <link rel="stylesheet" href="/room_booking/classic.css">
    <link rel="stylesheet" href="/room_booking/classic.date.css">

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

    <!-- intl-tel-input CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">

    <!-- Animation On Scroll CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Room Booking Details</title>
</head>

<body>
    {{-- start of nav bar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="../images/ocean_heaven.png" class="logo-image">
            <a class="navbar-brand mt-2 " href="{{ route('main-page') }}">
                <h5 class="font-weight-bold" style="margin: 0px !important;">OCEAN HEAVEN</h5>
                <h5 class="font-weight-normal" style="font-size: 15px;">WORLD 1 FIRST CLASS HOTEL</h5>
            </a>
            <button class="navbar-toggler" style="background-color: white; border: 1px solid white;" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link mx-2" style="font-size: 17px;" href="{{ route('main-page') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" style="font-size: 17px;" href="#"
                            id="features_menu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu" aria-labelledby="features_menu">
                            <a class="dropdown-item" href="{{ route('about-us') }}">About
                                Us</a>
                            <a class="dropdown-item" style="font-size: 17px;" href="#">Gallery</a>
                            <a class="dropdown-item" style="font-size: 17px;"
                                href="{{ route('terms-and-conditions') }}">Terms And Conditions</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link active mx-2 dropdown-toggle" style="font-size: 17px;" href="#"
                            id="facilities_menu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Facilities
                        </a>
                        <div class="dropdown-menu" aria-labelledby="facilities_menu">
                            <a class="dropdown-item" style="font-size: 17px;" href="{{ route('hotel-room') }}">Our
                                Room</a>
                            <a class="dropdown-item" style="font-size: 17px;" href="#">Our Hall</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" style="font-size: 17px;"
                            href="{{ route('hotel-restaurant') }}">Dining</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" style="font-size: 17px;"
                            href="{{ route('exclusive-member') }}">Member</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary rounded-pill">Book Room</button>
                    </li>
                    <!-- Add more items as needed -->
                </ul>
            </div>
        </div>
    </nav>
    {{-- end of nav bar --}}

    {{-- hotel booking progress --}}
    <div class="container-fluid">
        <div class="row mt-4">
            @foreach ($room_data as $room_d)
                <div class="col-md-12 room-description" data-room-type="{{ $room_d->room_type_name }}">
                    <h2 class="text-center">{{ $room_d->room_type_name }}</h2>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-8">
                            <p class="room_description text-center"></p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <div class="col-lg-8 col-md-12">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <img src="{{ asset('../images/' . $room_d->room_type_name . '.jpg') }}"
                                        class="card-img-top" style="height: 100%;" alt="Single_Room image">
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="row">
                                        <div class="col-6 col-md-12 mb-md-3 mt-2 mt-md-0">
                                            <img src="{{ asset('../images/' . $room_d->room_type_name . '_1.jpg') }}"
                                                class="card-img-top" style="height: 100%;" alt="Single_Room image">
                                        </div>
                                        <div class="col-6 col-md-12 mt-2">
                                            <img src="{{ asset('../images/' . $room_d->room_type_name . '_2.jpg') }}"
                                                class="card-img-top" style="height: 100%;" alt="Single_Room image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7 room-overview"
                                    data-room-type="{{ $room_d->room_type_name }}">
                                    {{-- start of the overview introduction --}}
                                    <br>
                                    <div class="card">
                                        <div class="card-header">Overview</div>
                                        <div class="card-body">
                                            <p class="room_overview"></p>
                                        </div>
                                    </div>
                                    <br>
                                    {{-- end of the overview introduction --}}

                                    {{-- start of room features --}}
                                    <div class="card">
                                        <div class="card-header">Room Features</div>
                                        <div class="card-body">
                                            <div class="row">
                                                @foreach ($room_facilities as $r_f)
                                                    <div class="col-lg-4 col-md-6">
                                                        <p><i class="fa-solid fa-hand-point-right"
                                                                style="color: #dd4b39;"></i>
                                                            <span><b>{{ $r_f->facility_name }}</b></span>
                                                        </p>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    {{-- end of room features --}}

                                    {{-- start of booking policies --}}
                                    <div class="card">
                                        <div class="card-header">Booking Policies</div>
                                        <div class="card-body">
                                            <p>When booking a room at our hotel, we want to ensure that your
                                                experience is seamless and enjoyable. Here are some important
                                                details to keep in mind:
                                                <br>
                                                <span class="text-danger"><b>1. General
                                                        Policy</b></span><br>
                                                <i class="fa-solid fa-circle mt-1"
                                                    style="font-size: 9px; color: #333333;"></i>
                                                Guests must be at least 18 years old to book a room.<br>
                                                <i class="fa-solid fa-circle mt-1"
                                                    style="font-size: 9px; color: #333333;"></i>
                                                Check-in time is at 3:00 PM, and check-out time is at 11:00
                                                AM.<br>
                                                <span class="text-danger"><b>2. Cancellation
                                                        Policy</b></span><br>
                                                <i class="fa-solid fa-circle mt-1"
                                                    style="font-size: 9px; color: #333333;"></i>
                                                Reservations can be cancelled free of charge up to 24 hours
                                                before arrival.<br>
                                                <i class="fa-solid fa-circle mt-1"
                                                    style="font-size: 9px; color: #333333;"></i>
                                                Cancellations made within 24 hours of arrival will be
                                                subject to
                                                a one-night charge.<br>
                                                <span class="text-danger"><b>3. Refundable
                                                        Policy</b></span><br>
                                                <i class="fa-solid fa-circle mt-1"
                                                    style="font-size: 9px; color: #333333;"></i>
                                                Refunds are issued for cancellations made within the
                                                specified
                                                time frame.<br>
                                                <i class="fa-solid fa-circle mt-1"
                                                    style="font-size: 9px; color: #333333;"></i>
                                                Refunds may take up to 5-7 business days to process and
                                                reflect
                                                in your account.
                                            </p>
                                        </div>
                                    </div>
                                    <br>
                                    {{-- end of booking polices --}}
                                </div>

                                {{-- start of receipt overview --}}
                                <div class="col-lg-5 col-md-5">
                                    <br>
                                    <div class="card card-body">
                                        <h3 class="text-success text-center">$ {{ $room_d->room_price }} / <span
                                                class="text-secondary">night</span></h3>
                                        <div class="d-flex justify-content-center mt-2">
                                            <button type="button" style="font-size: 0.85rem;"
                                                class="btn btn-primary text-light w-100"
                                                onclick="call_checkAvailability_Form()">Check
                                                Availability</button>
                                            <button type="button" style="font-size: 0.85rem;"
                                                class="btn btn-secondary mx-2 w-100"
                                                onclick="call_directBooking_Form()">Direct
                                                Booking</button>
                                        </div>
                                        <div class="card mt-3" id="check_availability_form">
                                            <div class="card-header">Check Availability</div>
                                            <div class="card-body p-3">
                                                <div class="form-group">
                                                    <label for="full_name">Full Name</label>
                                                    <input type="text" class="form-control mt-1">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control mt-1">
                                                </div>
                                                <div class="form-group mt-2" style="position: relative;">
                                                    <label for="input_from">From</label>
                                                    <input type="text" class="form-control mt-1" id="input_from"
                                                        placeholder="Start Date">
                                                </div>
                                                <div class="form-group mt-2" style="position: relative;">
                                                    <label for="input_to">To</label>
                                                    <input type="text" class="form-control mt-1" id="input_to"
                                                        placeholder="End Date">
                                                    <br>
                                                </div>
                                                <a href="{{ route('booking-registration', ['room_type_name' => $room_d->room_type_name]) }}"
                                                    class="btn btn-success w-100">Inquiry</a>
                                            </div>
                                        </div>
                                        <div class="card mt-3" id="directBooking_form">
                                            <div class="card-header">Direct Booking</div>
                                            <div class="card-body p-3">
                                                <div class="form-group mt-2" style="position: relative;">
                                                    <label for="input_from">From</label>
                                                    <input type="text" class="form-control mt-1" id="input_from"
                                                        placeholder="Start Date">
                                                </div>
                                                <div class="form-group mt-2" style="position: relative;">
                                                    <label for="input_to">To</label>
                                                    <input type="text" class="form-control mt-1" id="input_to"
                                                        placeholder="End Date">
                                                    <br>
                                                </div>
                                                <a href="{{ route('booking-registration', ['room_type_name' => $room_d->room_type_name]) }}"
                                                    class="btn btn-success w-100">Book Room
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                {{-- end of receipt overview --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- end of hotel booking progress --}}

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
                            Come experience the simplicity and luxury of Ocean Heaven Hotel
                            for a
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
                        <p><i class="fas fa-envelope mr-3"></i> oceanHeaven231@gmail.com
                        </p>
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

{{-- bootstrap javascript cdn --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

{{-- Jquery CDN --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>

{{-- aos library cdn --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

{{-- Jquery pickadate cdn --}}
<script src="/room_booking/picker.js"></script>
<script src="/room_booking/picker.date.js"></script>

{{-- bootstrap datepicker cdn --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

{{-- link with other javascript file --}}
<script src="/room_booking/index.js"></script>
<script src="/room_booking/main.js"></script>

</html>
