<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/room_booking/style.css">

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

    <title>Room Booking</title>
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
                            <a class="nav-link active mx-2" style="font-size: 17px;"
                                href="{{ route('main-page') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" style="font-size: 17px;" href="{{ route('about-us') }}">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" style="font-size: 17px;" href="{{ route('hotel-room') }}">Room</a>
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

    {{-- progress bar --}}
    <div class="container" style="margin-top: 100px;">
        <div class="row step justify-content-center">
            <div id="div1" class="col-md-2 mx-3 activestep">
                <span class="fa fa-house"></span>
                <p>Room Registration</p>
            </div>
            <div class="col-md-2 mx-3" style="pointer-events: none;">
                <span class="fa fa-info"></span>
                <p>Guest Information</p>
            </div>
            <div class="col-md-2 mx-3" style="pointer-events: none;">
                <span class="fa fa-receipt"></span>
                <p>Booking Receipt</p>
            </div>
        </div>
    </div>
    {{-- end of progress bar --}}

    {{-- hotel booking progress --}}
    <div class="container-fluid" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-md-10">
                    <form id="myForm" action="{{ route('booking-confirmation') }}" method="POST">
                        @csrf
                        <div class="card border-0 mt-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-9">
                                        @foreach ($room_data as $room_d)
                                            <div class="card shadow p-3 bg-white rounded d-none d-md-block"
                                                data-aos="fade-left" data-aos-duration="1000">
                                                <div class="card-body border border-default">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4">
                                                            <img src="{{ asset('../images/' . $room_d->room_type_name . '.jpg') }}"
                                                                class="card-img-top" style="height: 100%;"
                                                                alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-9">
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
                                                                                    Status : {{ $available_count }}
                                                                                    Remains
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
                                                                            <h5 class="text-success"
                                                                                style="font-size: 15px;">
                                                                                <i class="fa-solid fa-check mt-1"
                                                                                    style="font-size: 15px; color: green;"></i>
                                                                                Refundable
                                                                            </h5>
                                                                        </div>
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
                                                                <div class="col-3">
                                                                </div>
                                                                <hr>
                                                                <div class="col-12">
                                                                    <h5>Facility: </h5>
                                                                    <div class="row">
                                                                        @foreach ($room_facilities as $room_f)
                                                                            <div class="col-4">
                                                                                <h5 class="text-success"
                                                                                    style="font-size: 15px;">
                                                                                    <i class="fa-solid fa-check mt-1"
                                                                                        style="font-size: 15px; color: green;"></i>
                                                                                    {{ $room_f->facility_name }}
                                                                                </h5>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- start of hotel policy --}}
                                                <div class="container mt-4">
                                                    <h5 style="color: #3b5998;">For Your Information : </h5>
                                                    <p>When booking a room at our hotel, we want to ensure that your
                                                        experience is seamless and enjoyable. Here are some important
                                                        details to keep in mind: <a class="text-decoration-none"
                                                            data-bs-toggle="collapse" href="#collapseExample"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapseExample">
                                                            Learn More
                                                        </a><br>
                                                    <div class="collapse" id="collapseExample">
                                                        <span class="text-danger"><b>1. Booking
                                                                Rules</b></span><br>
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
                                                    </div>
                                                    </p>

                                                    <div class="card-body border border-default">
                                                        {{-- start of customer fill in information --}}
                                                        <h5 class="text-center">Please fill your Information</h5>
                                                        <div class="row mt-2">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Full Name</label>
                                                                    <input type="text" class="form-control mt-1"
                                                                        required name="guest_name">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Email
                                                                        address</label>
                                                                    <input type="email" class="form-control mt-1"
                                                                        required name="guest_email">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2">
                                                                <div class="form-group">
                                                                    <label for="phone_number" class="mb-1">Phone
                                                                        Number</label>
                                                                    <input type="tel" id="phone"
                                                                        class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Room</label>
                                                                    <select class="form-control form-select mt-1"
                                                                        name="guest_roomUnit" id="room-amount"
                                                                        onchange="calculateTotalPrice(selectedVehiclePrice,selectedParkingPrice,selectedServicePrice,selectedOfferPrice)">
                                                                        <option value="1">1 Room</option>
                                                                        <option value="2">2 Room</option>
                                                                        <option value="3">3 Room</option>
                                                                        <option value="4">4 Room</option>
                                                                        <option value="5">5 Room</option>
                                                                        <option value="6">6 Room</option>
                                                                        <option value="7">7 Room</option>
                                                                        <option value="8">8 Room</option>
                                                                        <option value="9">9 Room</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2">
                                                                <div class="form-group">
                                                                    <label for="country">Country</label>
                                                                    <select class="form-control form-select mt-1"
                                                                        required id="countrySelect"
                                                                        name="guest_country">
                                                                        <option value=""></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2">
                                                                <div class="form-group">
                                                                    <label for="check_in_date">Check In Date</label>
                                                                    <input type="date" class="form-control mt-1"
                                                                        id="check_in_date" required
                                                                        name="guest_checkIn_date">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2">
                                                                <div class="form-group">
                                                                    <label for="check_out_date">Check Out Date</label>
                                                                    <input type="date" class="form-control mt-1"
                                                                        id="check_out_date" required
                                                                        name="guest_checkOut_date">
                                                                </div>
                                                            </div>

                                                            {{-- this form would not be seen becuase it was used to pass the data to another page --}}
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Room Name</label>
                                                                    <input type="text" name="room-name"
                                                                        value="{{ $room_d->room_type_name }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="room_price">Room Price</label>
                                                                    <input type="text" name="room-price"
                                                                        id="form-room-price" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="room_price">Room include tax
                                                                        Price</label>
                                                                    <input type="text" name="room-total-price"
                                                                        id="room_include_tax" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="phoneNumber">Phone Number</label>
                                                                    <input type="text" name="guest_phoneNumber"
                                                                        id="country_phoneNumber">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Vehicle
                                                                        Type</label>
                                                                    <input type="text" id="form-vehicle-type"
                                                                        name="vehicle-type" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Vehicle
                                                                        Price</label>
                                                                    <input type="text" id="form-vehicle-price"
                                                                        name="vehicle-price" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Parking
                                                                        Type</label>
                                                                    <input type="text" id="form-parking-type"
                                                                        name="parking-type" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Parking
                                                                        Price</label>
                                                                    <input type="text" id="form-parking-price"
                                                                        name="parking-price" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="service-type">Service
                                                                        Type</label>
                                                                    <input type="text" id="form-service-type"
                                                                        name="service-type" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Service
                                                                        Price</label>
                                                                    <input type="text" id="form-service-price"
                                                                        name="service-price" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Offer Type</label>
                                                                    <input type="text" id="form-offer-type"
                                                                        name="offer-type" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2 d-none">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Offer price</label>
                                                                    <input type="text" id="form-offer-price"
                                                                        name="offer-price" value="">
                                                                </div>
                                                            </div>
                                                            {{-- end of the invisible form --}}
                                                        </div>
                                                    </div>
                                                    {{-- end of customer fill in information --}}

                                                    <h5 class="mt-3">We also provide a special service just for you
                                                    </h5>
                                                    {{-- start of parking service --}}
                                                    <div id="accordion">
                                                        <div class="card mt-3">
                                                            <div class="card-header" id="headingOne"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#parking-service" aria-expanded="true"
                                                                aria-controls="collapseOne" style="cursor: pointer;">
                                                                <h5 class="mb-0">
                                                                    <h5><i class="fa-solid fa-car fs-4"></i>
                                                                        Parking
                                                                        Service</h5>
                                                                </h5>
                                                            </div>

                                                            <div id="parking-service" class="collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordion">
                                                                <div class="card-body">
                                                                    <p class="text-secondary">Select Your
                                                                        Transportation
                                                                    </p>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <div class="card text-center"
                                                                                id="parking-vehicle-list"
                                                                                style="cursor: pointer;"
                                                                                data-value="Motorcycle 10"
                                                                                onclick="toggleSelect(this)">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Motorcycle
                                                                                    </h5>
                                                                                    <i
                                                                                        class="fa-solid fa-motorcycle fs-2"></i>
                                                                                    <h5 class="mt-3"><span
                                                                                            class="text-success"><b>$
                                                                                                10</b></span> / night
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <div class="card text-center"
                                                                                style="cursor: pointer;"
                                                                                id="parking-vehicle-list"
                                                                                data-value="Cars 15"
                                                                                onclick="toggleSelect(this)">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Car</h5>
                                                                                    <i
                                                                                        class="fa-solid fa-car fs-2"></i>
                                                                                    <h5 class="mt-3"><span
                                                                                            class="text-success"><b>$
                                                                                                15</b></span> / night
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <div class="card text-center"
                                                                                style="cursor: pointer;"
                                                                                id="parking-vehicle-list"
                                                                                data-value="Bus 30"
                                                                                onclick="toggleSelect(this)">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Bus</h5>
                                                                                    <i
                                                                                        class="fa-solid fa-bus fs-2"></i>
                                                                                    <h5 class="mt-3"><span
                                                                                            class="text-success"><b>$
                                                                                                30</b></span> / night
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p class="text-secondary mt-3">Select Your
                                                                            Parking Type
                                                                        </p>
                                                                        <div class="col-4">
                                                                            <div class="card text-center"
                                                                                id="parking-type-list"
                                                                                data-value="Default free 0"
                                                                                onclick="parking_type(this)"
                                                                                style="cursor: pointer;">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Default</h5>
                                                                                    <i class="fa-solid fa-square-parking fs-2"
                                                                                        style="color: crimson;"></i>
                                                                                    <h5 class="mt-3">Free
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <div class="card text-center"
                                                                                id="parking-type-list"
                                                                                data-value="VIP free 5"
                                                                                onclick="parking_type(this)"
                                                                                style="cursor: pointer;">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">VIP Parking
                                                                                    </h5>
                                                                                    <div
                                                                                        class="d-flex justify-content-center">
                                                                                        <i class="fa-solid fa-star fs-2 mx-1"
                                                                                            style="color: orange;"></i>
                                                                                        <i class="fa-solid fa-star fs-2 mx-1"
                                                                                            style="color: orange;"></i>
                                                                                        <i class="fa-solid fa-star fs-2 mx-1"
                                                                                            style="color: orange;"></i>
                                                                                    </div>
                                                                                    <h5 class="mt-3"><span
                                                                                            class="text-success"><b>
                                                                                                $ 5</b></span> / per
                                                                                        slot
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <div class="card text-center"
                                                                                id="parking-type-list"
                                                                                data-value="OKU free 0"
                                                                                onclick="parking_type(this)"
                                                                                style="cursor: pointer;">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Disabled
                                                                                        Parking
                                                                                    </h5>
                                                                                    <i
                                                                                        class="fa-brands fa-accessible-icon fs-2"></i>
                                                                                    <h5 class="mt-3">Free
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- end of parking service --}}

                                                    {{-- start of hotel service --}}
                                                    <div id="accordion">
                                                        <div class="card mt-3">
                                                            <div class="card-header" id="headingOne"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#hotel-service" aria-expanded="true"
                                                                aria-controls="collapseOne" style="cursor: pointer;">
                                                                <h5 class="mb-0">
                                                                    <h5 class="text-dark"><i
                                                                            class="fa-solid fa-door-closed fs-4"></i>
                                                                        Room
                                                                        Service</h5>
                                                                </h5>
                                                            </div>

                                                            <div id="hotel-service" class="collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordion">
                                                                <div class="card-body">
                                                                    <p class="text-secondary">Select Your Service
                                                                    </p>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <div class="card text-center"
                                                                                id="room-service-list"
                                                                                data-value="SPA Service 20"
                                                                                onclick="room_service(this)"
                                                                                style="cursor: pointer;">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">SPA Service
                                                                                    </h5>
                                                                                    <i
                                                                                        class="fa-solid fa-spa fs-2"></i>
                                                                                    <h5 class="mt-3"><span
                                                                                            class="text-success"><b>$
                                                                                                20</b></span> / time
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <div class="card text-center"
                                                                                id="room-service-list"
                                                                                data-value="Pet Accomodation 7"
                                                                                onclick="room_service(this)"
                                                                                style="cursor: pointer;">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">Pet
                                                                                        Accomodation
                                                                                    </h5>
                                                                                    <i
                                                                                        class="fa-solid fa-dog fs-2"></i>
                                                                                    <h5 class="mt-3"><span
                                                                                            class="text-success"><b>$
                                                                                                7</b></span> / each
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- end of hotel service --}}


                                                    {{-- start of special offer --}}
                                                    <div id="accordion">
                                                        <div class="card mt-3">
                                                            <div class="card-header" id="headingOne"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#special-offer" aria-expanded="true"
                                                                aria-controls="collapseOne" style="cursor: pointer;">
                                                                <h5 class="mb-0">
                                                                    <h5><i class="fa-solid fa-tag fs-4"></i>
                                                                        Special Offer</h5>
                                                                </h5>
                                                            </div>

                                                            <div id="special-offer" class="collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordion">
                                                                <div class="card-body">
                                                                    <p class="text-secondary">Special Offer Just For
                                                                        You
                                                                    </p>
                                                                    <div class="row">
                                                                        {{-- start of upgrade to ocean view offer --}}
                                                                        <div class="col-12">
                                                                            <div class="card"
                                                                                id="special-offer-list"
                                                                                data-value="Ocean View 5"
                                                                                onclick="special_offer(this)"
                                                                                style="cursor: pointer;">
                                                                                <div
                                                                                    class="card-body border border-default">
                                                                                    <div class="row no-gutters">
                                                                                        <div class="col-md-4">
                                                                                            <img class="card-img-top"
                                                                                                src="../images/ocean_view.jpg"
                                                                                                alt="Card image cap">
                                                                                        </div>
                                                                                        <div class="col-md-8">
                                                                                            <h3 class="card-title">
                                                                                                Experience the Ocean
                                                                                                View
                                                                                            </h3>
                                                                                            <p>You can enjoy sweeping
                                                                                                views of the ocean from
                                                                                                the
                                                                                                comfort of your room.
                                                                                                Simply choose the ocean
                                                                                                view upgrade when
                                                                                                booking to
                                                                                                enhance your experience
                                                                                                and make the most of
                                                                                                your stay with us</p>
                                                                                            <h5
                                                                                                style="font-size: 15px;">
                                                                                                <i class="fa-solid fa-money-check-dollar mt-1"
                                                                                                    style="color: green; font-size: 17px;"></i>
                                                                                                Add More <span
                                                                                                    class="text-success"><b>$
                                                                                                        5</b></span> to
                                                                                                experience it
                                                                                            </h5>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                        {{-- end of upgrade to ocean view --}}

                                                                        {{-- start of upgrade to romantic room --}}
                                                                        <div class="col-12">
                                                                            <div class="card"
                                                                                id="special-offer-list"
                                                                                data-value="Occasion Package 10"
                                                                                onclick="special_offer(this)"
                                                                                style="cursor: pointer;">
                                                                                <div
                                                                                    class="card-body border border-default">
                                                                                    <div class="row no-gutters">
                                                                                        <div class="col-md-4">
                                                                                            <img class="card-img-top"
                                                                                                src="../images/romantic_room.jpg"
                                                                                                alt="Card image cap">
                                                                                        </div>
                                                                                        <div class="col-md-8">
                                                                                            <h3 class="card-title">
                                                                                                Special Occasion
                                                                                                Packages
                                                                                            </h3>
                                                                                            <p>Celebrate your special
                                                                                                moments in
                                                                                                style with our tailored
                                                                                                Special Occasion
                                                                                                Packages!
                                                                                                Whether it's an
                                                                                                anniversary,
                                                                                                birthday, or
                                                                                                romantic getaway, let us
                                                                                                make
                                                                                                your occasion
                                                                                                unforgettable.
                                                                                            </p>
                                                                                            <h5
                                                                                                style="font-size: 15px;">
                                                                                                <i class="fa-solid fa-money-check-dollar mt-1"
                                                                                                    style="color: green; font-size: 17px;"></i>
                                                                                                Add More <span
                                                                                                    class="text-success"><b>$
                                                                                                        10</b></span> to
                                                                                                experience it
                                                                                            </h5>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                        {{-- end of upgrade to romantic room --}}

                                                                        {{-- start of upgrade extend stay  --}}
                                                                        <div class="col-12">
                                                                            <div class="card"
                                                                                id="special-offer-list"
                                                                                data-value="Extends Stay 4"
                                                                                onclick="special_offer(this)"
                                                                                style="cursor: pointer;">
                                                                                <div
                                                                                    class="card-body border border-default">
                                                                                    <div class="row no-gutters">
                                                                                        <div class="col-md-4">
                                                                                            <img class="card-img-top"
                                                                                                src="../images/discount.jpg"
                                                                                                alt="Card image cap">
                                                                                        </div>
                                                                                        <div class="col-md-8">
                                                                                            <h3 class="card-title">
                                                                                                Extended Stay Discounts
                                                                                            </h3>
                                                                                            <p>Stay longer, save more!
                                                                                                Enjoy
                                                                                                discounted rates when
                                                                                                you
                                                                                                extend your stay with
                                                                                                us.
                                                                                                Take
                                                                                                advantage of our
                                                                                                extended
                                                                                                stay
                                                                                                discounts.
                                                                                                Book now and unlock
                                                                                                exclusive
                                                                                                savings on
                                                                                                your
                                                                                                longer stay.</p>
                                                                                            <h5
                                                                                                style="font-size: 15px;">
                                                                                                <i class="fa-solid fa-tag mt-1"
                                                                                                    style="color: orange; font-size: 17px;"></i>
                                                                                                Extends More <span
                                                                                                    class="text-success"><b>
                                                                                                        4
                                                                                                        days</b></span>
                                                                                                to
                                                                                                get the 50 discount
                                                                                            </h5>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                        {{-- end of upgrade extends stay --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- end of hotel policy --}}
                                            </div>
                                            <br>
                                        @endforeach
                                    </div>
                                    {{-- end of desktop view --}}

                                    {{-- start of reservation of the hotel room --}}
                                    <div class="col-md-3">
                                        @foreach ($room_data as $room_d)
                                            <div class="card">
                                                <div class="card-header">
                                                    Reservations Summary
                                                </div>
                                                <div class="card-body">
                                                    <p>Check In Date: <span id="guest_checkInDate"></span></p>
                                                    <p>Check Out Date: <span id="guest_checkOutDate"></span></p>
                                                    <hr>
                                                    <p><b>Your Price Summary</b></p>
                                                    <div class="row">
                                                        <div class="col-8" id="room-price-amount">
                                                            Room Price (1):
                                                        </div>
                                                        <div class="col-4">
                                                            <h5 class="text-success" id="room-price"
                                                                style="font-size: 17px;">$
                                                                {{ $room_d->price_per_night }}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            Tax:
                                                        </div>
                                                        <div class="col-4">
                                                            <h5 class="text-success" id="service-tax"
                                                                style="font-size: 17px;">$
                                                                12.00</h5>
                                                        </div>
                                                    </div>
                                                    <div id="vehicle-type"></div>
                                                    <div id="parking-type"></div>
                                                    <div id="service-type"></div>
                                                    <div id="offer-type"></div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <span class="text-success"><b>Total Price:</b></span>
                                                        </div>
                                                        <div class="col-4">
                                                            <h5 class="text-success" id="total-price"
                                                                style="font-size: 17px;">
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <input type="submit"
                                                        class="btn btn-success mt-2 w-100 text-light"
                                                        value="Request Booking">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- end of reservation of the hotel room --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end of hotel room selection --}}

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>

<script src="/room_booking/index.js"></script>

<script>
    $(document).ready(function() {
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

    var phoneInput = $("#phone");

    phoneInput.intlTelInput({
        initialCountry: 'auto', // Automatically select the user's country based on their IP address
        separateDialCode: true, // Display the country dial code separately
        utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js' // Required for formatting and validation
    });

    $("#myForm").submit(function(event) {
        // Get the selected country dial code
        var countryCode = phoneInput.intlTelInput("getSelectedCountryData").dialCode;

        // Get the phone number entered by the user
        var phoneNumber = phoneInput.val();

        // Add the country code to the phone number
        var fullPhoneNumber = "+" + countryCode + phoneNumber;

        // Update the phone number field with the full phone number including the country code
        $('#country_phoneNumber').val(fullPhoneNumber);
    });
</script>

<script>
    var countrySelect = document.getElementById("countrySelect");

    // List of countries
    var countries = [
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia",
        "Australia", "Austria",
        "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
        "Bhutan",
        "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi",
        "Cabo Verde", "Cambodia",
        "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros",
        "Congo (Congo-Brazzaville)", "Costa Rica",
        "Croatia", "Cuba", "Cyprus", "Czechia (Czech Republic)", "Democratic Republic of the Congo", "Denmark",
        "Djibouti", "Dominica", "Dominican Republic", "Ecuador",
        "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini (fmr.  Swaziland )",
        "Ethiopia", "Fiji", "Finland", "France",
        "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea",
        "Guinea-Bissau",
        "Guyana", "Haiti", "Holy See", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq",
        "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait",
        "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania",
        "Luxembourg",
        "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania",
        "Mauritius", "Mexico",
        "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique",
        "Myanmar (formerly Burma)", "Namibia", "Nauru",
        "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia",
        "Norway", "Oman",
        "Pakistan", "Palau", "Palestine State", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines",
        "Poland", "Portugal",
        "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia",
        "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe",
        "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia",
        "Solomon Islands", "Somalia",
        "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden",
        "Switzerland", "Syria",
        "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia",
        "Turkey", "Turkmenistan",
        "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America",
        "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela",
        "Vietnam", "Yemen", "Zambia", "Zimbabwe"
    ];

    // Populate the dropdown with countries
    countries.forEach(function(country) {
        var option = document.createElement("option");
        option.text = country;
        countrySelect.add(option);
    });
</script>

<script>
    // check in date input field
    $("#check_in_date").change(function() {
        // Get the value of the date input field
        var selectedDate = $(this).val();

        // Display the selected date in the text input field
        $("#guest_checkInDate").text(selectedDate);
    });

    // check out date input field
    $("#check_out_date").change(function() {
        // Get the value of the date input field
        var selectedDate = $(this).val();

        // Display the selected date in the text input field
        $("#guest_checkOutDate").text(selectedDate);
    });

    var selectedVehiclePrice = 0; // Variable to store the selected vehicle price
    var selectedParkingPrice = 0;
    var selectedServicePrice = 0;
    var selectedOfferPrice = 0;

    var vehicle_price = 0;
    var service_price = 0;
    var parking_price = 0;
    var offer_price = 0;
    var total_price = 0;

    var room_price = $('#room-price').text();
    var room_service_tax = $('#service-tax').text();

    var roomPriceNumber = parseFloat(room_price.replace(/\D/g, '')) / 100;
    var roomServiceTax = parseFloat(room_service_tax.replace(/\D/g, '')) / 100;

    var room_total_price = roomPriceNumber + roomServiceTax;

    $('#form-room-price').val(roomPriceNumber + 12.00);
    $('#total-price').text("$ " + room_total_price);

    function calculateTotalPrice(vehicle_price, parking_price, service_price, special_offer) {
        var roomPriceText = $('#room-price').text();
        var roomServiceTaxText = $('#service-tax').text();

        var selectElement = document.getElementById("room-amount");
        var selectedValue = selectElement.value;

        var roomPriceAmount = $('#room-price-amount').text("Room Price (" + selectedValue + "): ");

        var roomPriceNumber = parseFloat(roomPriceText.replace(/\D/g, '')) / 100;
        var roomServiceTax = parseFloat(roomServiceTaxText.replace(/\D/g, '')) / 100;

        var roomTotalPrice = roomPriceNumber;

        // Convert parking_price to a number if it's not "free"
        if (parking_price === "free") {
            parking_price = 0;
        } else {
            parking_price = parseFloat(parking_price);
        }

        // Convert vehicle_price to a number
        vehicle_price = parseFloat(vehicle_price);
        service_price = parseFloat(service_price);
        offer_price = parseFloat(special_offer);

        // Update the selected vehicle price
        selectedVehiclePrice = vehicle_price;
        selectedParkingPrice = parking_price;
        selectedServicePrice = service_price;
        selectedOfferPrice = offer_price;

        // Calculate the total price
        total_price = roomTotalPrice * selectedValue + roomServiceTax + selectedVehiclePrice +
            selectedParkingPrice +
            selectedServicePrice + selectedOfferPrice;

        // Update the total price display
        $('#form-room-price').val(total_price);
        $('#total-price').text("$ " + total_price.toFixed(2));
    }

    function toggleSelect(card) {
        var cards = document.querySelectorAll('#parking-vehicle-list');

        cards.forEach(function(cardItem) {
            if (cardItem !== card) {
                cardItem.classList.remove('selected');
            }
        });

        card.classList.toggle('selected');

        if (card.classList.contains('selected')) {
            var htmlContent = '';
            var cardValue = card.getAttribute('data-value');
            var splitValues = cardValue.split(" ");
            var vehicleType = splitValues[0];
            vehicle_price = parseFloat(splitValues[1]);

            htmlContent += '<div class="row">';
            htmlContent += '<div class="col-8">';
            htmlContent += '<span>Vehicle: <b>' + vehicleType + '</b></span>';
            htmlContent += '</div>';
            htmlContent += '<div class="col-4">';
            htmlContent += '<h5 class="text-success" id="vehicle-price" style="font-size: 17px;">$ ' + vehicle_price +
                '.00 ' +
                '</h5>';
            htmlContent += '</div>';
            htmlContent += '</div>';

            calculateTotalPrice(vehicle_price, 0, 0, 0);

            $('#form-vehicle-type').val(vehicleType);
            $('#form-vehicle-price').val(selectedVehiclePrice);

            $('#vehicle-type').html(htmlContent);
        } else {
            $('#form-vehicle-type').val('');
            $('#vehicle-type').html('');
            calculateTotalPrice(0, 0, 0, 0);
        }
    }

    function parking_type(card) {
        var cards = document.querySelectorAll('#parking-type-list');
        cards.forEach(function(cardItem) {
            if (cardItem !== card) {
                cardItem.classList.remove('selected');
            }
        });

        card.classList.toggle('selected');

        if (card.classList.contains('selected')) {
            var htmlContent = '';
            var cardValue = card.getAttribute('data-value');
            var splitValues = cardValue.split(" ");
            var parkingType = splitValues[0];
            var parking_price_free = splitValues[1];
            parking_price = splitValues[2];

            htmlContent += '<div class="row">';
            htmlContent += '<div class="col-8">';
            htmlContent += '<span>Slot: <b>' + parkingType + '</b></span>';
            htmlContent += '</div>';
            htmlContent += '<div class="col-4">';
            if (parking_price == "free") {
                htmlContent += '<h5 class="text-success" style="font-size: 17px;">' + parking_price_free;
                calculateTotalPrice(vehicle_price, 0, 0, 0);
            } else {
                htmlContent += '<h5 class="text-success" style="font-size: 17px;">$ ' + parking_price + '.00 ' +
                    '</h5>';
                calculateTotalPrice(vehicle_price, parseFloat(parking_price), 0, 0);
            }
            htmlContent += '</div>';
            htmlContent += '</div>';

            $('#form-parking-type').val(parkingType)
            $('#parking-type').html(htmlContent);
        } else {
            $('#form-parking-type').val('')
            $('#parking-type').html('');
            calculateTotalPrice(vehicle_price, 0, 0, 0);
        }
    }

    // Initialize an empty array to store selected options
    var selectedServices = [];

    function room_service(card) {
        card.classList.toggle('selected');

        var cardValue = card.getAttribute('data-value');
        var splitValues = cardValue.split(" ");
        var room_service_type = splitValues[0];
        service_price = parseFloat(splitValues[2]);

        if (card.classList.contains('selected')) {
            // Add the selected option to the array
            selectedServices.push({
                type: room_service_type,
                price: service_price
            });
        } else {
            // Remove the deselected option from the array
            selectedServices = selectedServices.filter(function(service) {
                return service.type !== room_service_type;
            });
            calculateTotalPrice(selectedVehiclePrice, selectedParkingPrice, selectedServicePrice, selectedOfferPrice);
            $('#form-service-type').val('');
            $('#service-type').html('');
        }

        var htmlContent = '';
        selectedServices.forEach(function(service) {
            htmlContent += '<div class="row">';
            htmlContent += '<div class="col-8">';
            htmlContent += '<span>Room Service: <b>' + service.type + '</b></span>';
            htmlContent += '</div>';
            htmlContent += '<div class="col-4">';
            htmlContent += '<h5 class="text-success" style="font-size: 17px;">$ ' + service.price.toFixed(2) +
                '</h5>';
            htmlContent += '</div>';
            htmlContent += '</div>';
        });

        // Display the selected services
        $('#service-type').html(htmlContent);

        // Update the value of the form input
        var service_typeValues = selectedServices.map(function(service) {
            return service.type;
        }).join(", "); // Join selected service types with comma
        $('#form-service-type').val(service_typeValues);

        var service_priceValues = selectedServices.map(function(service) {
            return service.price;
        }).join(", "); // Join selected service types with comma
        $('#form-service-price').val(service_priceValues);

        // Calculate total price based on selected services
        var totalPrice = selectedServices.reduce(function(total, service) {
            return total + service.price;
        }, 0);

        calculateTotalPrice(selectedVehiclePrice, selectedParkingPrice, totalPrice, 0);
    }

    // Initialize an empty array to store selected options
    var selectedOffer = [];

    function special_offer(card) {
        card.classList.toggle('selected');

        var cardValue = card.getAttribute('data-value');
        var splitValues = cardValue.split(" ");
        var special_offer_type = splitValues[0] + " " + splitValues[1];
        offer_price = parseFloat(splitValues[2]);

        if (card.classList.contains('selected')) {
            // Add the selected option to the array
            selectedOffer.push({
                type: special_offer_type,
                price: offer_price
            });
        } else {
            // Remove the deselected option from the array
            selectedOffer = selectedOffer.filter(function(offer) {
                return offer.type !== special_offer_type;
            });
            calculateTotalPrice(selectedVehiclePrice, selectedParkingPrice, selectedServicePrice, 0);
            $('#offer-type').html('');
        }

        var htmlContent = '';
        selectedOffer.forEach(function(offer) {
            htmlContent += '<div class="row">';
            htmlContent += '<div class="col-8">';
            htmlContent += '<span>Offer: <b>' + offer.type + '</b></span>';
            htmlContent += '</div>';
            htmlContent += '<div class="col-4">';
            if (offer.price == 4) {
                htmlContent += '<h5 class="text-success" style="font-size: 17px;">' + offer.price +
                    ' days </h5>';
            } else {
                htmlContent += '<h5 class="text-success" style="font-size: 17px;">$ ' + offer.price +
                    '.00 </h5>';
            }
            htmlContent += '</div>';
            htmlContent += '</div>';
        });

        $('#offer-type').html(htmlContent);

        var offer_typeValues = selectedOffer.map(function(offer) {
            return offer.type;
        }).join(", "); // Join selected service types with comma
        $('#form-offer-type').val(offer_typeValues);

        var offer_priceValues = selectedOffer.map(function(offer) {
            return offer.price;
        }).join(", "); // Join selected service types with comma
        $('#form-offer-price').val(offer_priceValues);

        var totalPrice = selectedOffer.reduce(function(total, offer) {
            if (offer.price !== 4) {
                return total + offer.price;
            } else {
                return total;
            }
        }, 0);

        calculateTotalPrice(selectedVehiclePrice, selectedParkingPrice, selectedServicePrice, totalPrice);
    }
</script>

{{-- aos library cdn --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

</html>
