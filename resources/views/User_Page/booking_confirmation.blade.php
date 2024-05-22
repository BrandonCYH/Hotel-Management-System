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

    <title>Booking Confirmation</title>
</head>

<body>
    {{-- progress bar --}}
    <div class="container" style="margin-top: 100px;">
        <div class="row step justify-content-center">
            <a style="text-decoration: none;"
                href="{{ route('room-booking', ['room_type_name' => $selected_roomName]) }}" id="div1"
                class="col-md-2 mx-3">
                <span class="fa fa-house" style="color: black;"></span>
                <p class="text-dark">Room Registration</p>
            </a>
            <div class="col-md-2 mx-3 activestep">
                <span class="fa fa-info"></span>
                <p>Guest Information</p>
            </div>
            <div class="col-md-2 mx-3">
                <span class="fa fa-receipt"></span>
                <p>Booking Receipt</p>
            </div>
        </div>
    </div>
    {{-- end of progress bar --}}

    {{-- start of booking confirmation receipt --}}
    <div class="container mt-3">

        <div class="row">
            <div class="col-md-7">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4>Ocean Heaven Hotel</h4>
                            <h5>Austin, Texas</h5>
                            <h5>+ 01 234 567 88</h5>
                        </div>
                        <div class="col-4">
                            <h4>Date: </h4>
                            <h5 id="booking-id">Booking ID: {{ $bookingId }}</h5>
                        </div>
                        <div class="col-12 mt-3">
                            <h5>Guest Name : {{ $guest_name }}</h5>
                            <h5>Guest Email : {{ $guest_email }}</h5>
                            <h5>Guest Phone : {{ $guest_phoneNumber }}</h5>
                        </div>
                        <hr>

                        <h5 class="text-center text-warning"><b>Room Service</b></h5>
                        @if (!empty($each_selectedServices))
                            <div class="row">
                                <div class="col-9">
                                    <h5>Item</h5>
                                    @foreach ($each_selectedServices as $services)
                                        <p><b>Room Service : {{ $services }}</b></p>
                                    @endforeach
                                </div>
                                <div class="col-3">
                                    <h5>Price</h5>
                                    @foreach ($each_selected_priceServices as $price_services)
                                        <p class="text-success"><b>$ {{ $price_services }}.00</b></p>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <p class="text-center">No service selected</p>
                        @endif
                        <hr>

                        <h5 class="text-center">Special Offer</h5>
                        @foreach ($each_selectedOffer as $offer)
                            @foreach ($each_selected_priceOffer as $price_offer)
                                @if (!empty($offer) && !empty($price_offer))
                                    <div class="row">
                                        <div class="col-9">
                                            <h5>Item</h5>
                                            <p><b>Special Offer: {{ $offer }}</b></p>
                                        </div>
                                        <div class="col-3">
                                            <h5>Price</h5>
                                            <p class="text-success"><b>$ {{ $price_offer }}</b></p>
                                        </div>
                                    </div>
                                @else
                                    <p class="text-center">No offer selected</p>
                                @endif
                            @endforeach
                        @endforeach
                        <hr>

                        <h5 class="text-center text-warning">Parking Services</h5>
                        @if (!empty($selectedParking))
                            <div class="row">
                                <div class="col-9">
                                    <h5>Item</h5>
                                    <p><b>Parking Type: {{ $selectedParking }}</b></p>
                                </div>
                                <div class="col-3">
                                    <h5>Parking Price</h5>
                                    @if ($selectedParking == 'Default')
                                        <p class="text-success"><b>Free of Charge</b></p>
                                    @else
                                        <p class="text-success"><b>$ {{ $selected_parkingPrice }}</b></p>
                                    @endif
                                </div>
                            </div>
                        @else
                            <p class="text-center">No parking selected</p>
                        @endif
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <img src="{{ asset('../images/' . $selected_roomName . '.jpg') }}" class="card-img-top"
                        style="height: 100%;" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Room Name : </h5>
                                <h5 class="card-title">Room Number : </h5>
                                <h5 class="card-title">Check In Date : </h5>
                                <h5 class="card-title">Check Out Date : </h5>
                                <h5 class="card-title">Total Price : </h5>
                            </div>
                            <div class="col-6">
                                <h5 class="text-success d-flex justify-content-end">{{ $selected_roomName }}</h5>
                                @foreach ($random_room_number as $random_roomNumber)
                                    <h5 class="text-success d-flex justify-content-end">
                                        {{ $random_roomNumber->room_number }}</h5>
                                @endforeach
                                <h5 class="text-success d-flex justify-content-end">{{ $guest_check_in_date }}</h5>
                                <h5 class="text-success d-flex justify-content-end">{{ $guest_check_out_date }}
                                </h5>
                                <h5 class="text-success d-flex justify-content-end">$ {{ $room_price }}</h5>
                            </div>
                        </div>
                        <button id="confirm-booking" class="btn btn-success w-100 mt-3">Confirm Booking</button>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    {{-- end of booking confirmation receipt --}}

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
                            <a class="text-white" style="text-decoration: none;" href="{{ route('main-page') }}">Home
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

</html>
