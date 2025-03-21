<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- link with other css file --}}
    <link rel="stylesheet" href="/User_Page/booking_registration/booking_registration.css">

    {{-- website icon --}}
    <link rel="icon" href="../images/ocean_heaven.png" type="image/x-icon">
    <link rel="shortcut icon" href="../images/ocean_heaven.png" type="image/x-icon">

    {{-- bootstrap CSS cdn --}}
    <link rel="stylesheet" href="/external_css_file/bootstrap.min.css">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    {{-- bootstrap font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Animation On Scroll CDN -->
    <link href="/external_css_file/aos.css" rel="stylesheet">

    <title>Booking Registration</title>
</head>

<body>
    {{-- start of nav bar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="../images/ocean_heaven.png" class="logo-image">
            <a class="navbar-brand mt-2 mx-2" href="{{ route('main-page') }}">
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
                        <a class="nav-link mx-2 dropdown-toggle" style="font-size: 17px;" href="#" id="features_menu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link mx-2 dropdown-toggle active" style="font-size: 17px;" href="#"
                            id="facilities_menu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Facilities
                        </a>
                        <div class="dropdown-menu" aria-labelledby="facilities_menu">
                            <a class="dropdown-item" style="font-size: 17px; color: #000080; font-weight: bold;"
                                href="{{ route('hotel-room') }}">Our
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
                        <button type="button" class="btn btn-primary rounded-pill">Sign In</button>
                    </li>
                    <!-- Add more items as needed -->
                </ul>
            </div>
        </div>
    </nav>
    {{-- end of nav bar --}}

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    {{-- start of booking registration form --}}
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="d-flex justify-content-center mt-3">
                <div class="col-lg-9 col-md-12">
                    <div class="container-xl">
                        @foreach ($room_data as $room_d )
                        <form
                            action="{{ route('booking-payment', ['room_type_name' => $room_d->room_type_name]) }}"
                            method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="card">
                                        <div class="card-header">Guest Information</div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <label for="first_name">First Name</label>
                                                    <input type="text" name="first_name" class="form-control mt-1"
                                                        required autocomplete="off">
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control mt-1"
                                                        required autocomplete="off">
                                                </div>
                                                <div class="col-lg-6 col-md-12 mt-2">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control mt-1" required
                                                        autocomplete="off">
                                                </div>
                                                <div class="col-lg-6 col-md-12 mt-2">
                                                    <label for="phone_number">Phone Number</label>
                                                    <input type="tel" name="phone_number" class="form-control mt-1"
                                                        required autocomplete="off" id="phone_number">
                                                </div>
                                                <div class="col-lg-6 col-md-12 mt-2">
                                                    <label for="states">Country</label>
                                                    <select name="country"
                                                        class="selectpicker countrypicker form-select form-control mt-1"
                                                        required>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-12 mt-2">
                                                    <label for="city">City</label>
                                                    <input type="text" name="city" class="form-control mt-1" required
                                                        autocomplete="off">
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <label for="special_request">Special Request</label>
                                                    <textarea class="form-control mt-2" name="special_request"
                                                        placeholder="Feel free to tell us your needs..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    {{-- end of guest information --}}

                                    {{-- start of service and any request form --}}
                                    <div class="card">
                                        <div class="card-header">Service And Request</div>
                                        <div class="card-body">
                                            <h5>Room Facilities</h5>
                                            <hr>
                                            <div class="row">
                                                @foreach ($room_facilities as $room_f)
                                                <div class="col-lg-4 col-md-4">
                                                    <p><i class="fa-solid fa-circle-check" style="color: green;"></i>
                                                        {{ $room_f->facility_name }}</p>
                                                </div>
                                                @endforeach
                                            </div>

                                            <h5 class="mt-2">Additional Facilities And Service
                                                Request</h5>
                                            <hr>
                                            <div class="row align-items-center" id="service-row">
                                                <div class="col-12 col-md-8">
                                                    <div class="d-flex justify-content-between d-sm-block">
                                                        <h5 style="font-size: clamp(1.1rem, 1.2vw, 1.5rem)"
                                                            class="mt-1 mb-0" data-service-name="Car Park"
                                                            data-service-price="5.00">1. Car Park</h5>
                                                        <span class="text-success text-end d-sm-none"><b>$5.00</b> /
                                                            each</span>
                                                    </div>
                                                    <!-- Desktop View: Price below the text -->
                                                    <span class="text-success d-none d-sm-block"><b>$5.00</b> /
                                                        each</span>
                                                </div>
                                                <div class="col-12 col-md-4 mt-2 mt-sm-0">
                                                    <div class="input-group">
                                                        <button class="btn btn-outline-secondary button-decrement"
                                                            type="button">-</button>
                                                        <input type="number"
                                                            class="form-control text-center number-input" value="0"
                                                            min="0" max="100" name="services[Car Park][quantity]">
                                                        <button class="btn btn-outline-secondary button-increment"
                                                            type="button">+</button>
                                                    </div>
                                                    <input type="hidden" name="services[Car Park][price]" value="5.00">
                                                </div>
                                                <div class="col-12 col-md-8 mt-2">
                                                    <div class="d-flex justify-content-between d-sm-block">
                                                        <h5 style="font-size: clamp(1rem, 1.2vw, 1.5rem)"
                                                            class="mt-1 mb-0" data-service-name="Spa Service"
                                                            data-service-price="10.00">2. Spa Service
                                                        </h5>
                                                        <span class="text-success text-end d-sm-none"><b>$10.00</b> /
                                                            each</span>
                                                    </div>
                                                    <!-- Desktop View: Price below the text -->
                                                    <span class="text-success d-none d-sm-block"><b>$10.00</b> /
                                                        each</span>
                                                </div>
                                                <div class="col-12 col-md-4 mt-2 mt-sm-0">
                                                    <div class="input-group">
                                                        <button class="btn btn-outline-secondary button-decrement"
                                                            type="button">-</button>
                                                        <input type="number"
                                                            class="form-control text-center number-input" value="0"
                                                            min="0" max="100" name="services[Spa Service][quantity]">
                                                        <button class="btn btn-outline-secondary button-increment"
                                                            type="button">+</button>
                                                    </div>
                                                    <input type="hidden" name="services[Spa Service][price]"
                                                        value="10.00">
                                                </div>
                                                <div class="col-12 col-md-8 mt-2">
                                                    <div class="d-flex justify-content-between d-sm-block">
                                                        <h5 style="font-size: clamp(1rem, 1.2vw, 1.5rem)"
                                                            class="mt-1 mb-0" data-service-name="Pet Accommodation"
                                                            data-service-price="5.00">3. Pet Accommodation
                                                        </h5>
                                                        <span class="text-success text-end d-sm-none"><b>$10.00</b> /
                                                            each</span>
                                                    </div>
                                                    <!-- Desktop View: Price below the text -->
                                                    <span class="text-success d-none d-sm-block"><b>$5.00</b> /
                                                        each</span>
                                                </div>
                                                <div class="col-12 col-md-4 mt-2 mt-sm-0">
                                                    <div class="input-group">
                                                        <button class="btn btn-outline-secondary button-decrement"
                                                            type="button">-</button>
                                                        <input type="number"
                                                            class="form-control text-center number-input" value="0"
                                                            min="0" max="100"
                                                            name="services[Pet Accommodation][quantity]">
                                                        <button class="btn btn-outline-secondary button-increment"
                                                            type="button">+</button>
                                                    </div>
                                                    <input type="hidden" name="services[Pet Accommodation][price]"
                                                        value="5.00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    {{-- end of service and any request form --}}
                                </div>

                                <div class="col-lg-5 col-md-12">
                                    {{-- start of receipt overview --}}
                                    <div class="card">
                                        <img src="{{ asset('../images/' . $room_d->room_type_name . '.jpg') }}"
                                            class="card-img-top" alt="{{$room_d->room_type_name}}">
                                        <div class="card-body">
                                            <p>Check In: <span class="fw-bold">{{$checkIn_date}}</span></p>
                                            <p>Check Out: <span class="fw-bold">{{$checkOut_date}}</span></p>
                                            <hr>
                                            <h5>Price Details</h5>
                                            <h5 style="font-size: 15px;">Room Price
                                                (Include Tax) : <span class="text-success fw-bold">$
                                                    {{$room_d->room_price}}</span>
                                            </h5>
                                            <h5 style="font-size: 15px;">Room Deposit :
                                                <span class="text-success fw-bold">
                                                    {{$room_d->deposit}}%</span>
                                            </h5>
                                            <hr>
                                            <h5>Additional Facilities And Service
                                                Request</h5>
                                            <div class="row">
                                                <div class="col-9 col-md-9">
                                                    <h5 class="text-danger" id="output">No Service Selected</h5>
                                                    <h5 id="service_name"></h5>
                                                </div>
                                                <div class="col-3 col-md-3">
                                                    <h5 id="service_price"></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    {{-- end of receipt overview --}}

                                    <input type="submit" class="btn btn-primary w-100" value="Check Out">

                                    <a href="{{ route('room-booking-details', ['room_type_name' => $room_d->room_type_name]) }}"
                                        class="btn btn-danger w-100 mt-3 mb-3">Cancel Booking</a>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of booking registration form --}}
</body>

{{-- jquery cdn --}}
<script src="/external_js_file/jquery.min.js"></script>

{{-- bootstrap popper cdn --}}
<script src="/external_js_file/popper.min.js"></script>

{{-- bootstrap select country javascript cdn --}}
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>

{{-- bootstrap bundle cdn --}}
<script src="/external_js_file/bootstrap.bundle.min.js"></script>

{{-- bootstrap javascript cdn --}}
<script src="/external_js_file/bootstrap.min.js"></script>

{{-- link with other js file --}}
<script src="/User_Page/booking_registration/booking_registration.js"></script>

</html>