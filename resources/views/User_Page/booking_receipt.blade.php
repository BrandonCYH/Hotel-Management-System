<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/booking_receipt/style.css">

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
            <a style="text-decoration: none;" href="#" id="div1" class="col-md-2 mx-3">
                <span class="fa fa-house" style="color: black;"></span>
                <p class="text-dark">Room Registration</p>
            </a>
            <div class="col-md-2 mx-3">
                <span class="fa fa-info"></span>
                <p>Guest Information</p>
            </div>
            <div class="col-md-2 mx-3 activestep">
                <span class="fa fa-receipt"></span>
                <p>Booking Receipt</p>
            </div>
        </div>
    </div>
    {{-- end of progress bar --}}

    {{-- start of booking confirmation receipt --}}
    <div class="container mt-3">
        <div class="row">
            <form action="{{ route('booking-receipt') }}" method="POST">
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
                                <h5 name="booking-id">Booking ID: {{ $bookingId }}</h5>
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
                            <input type="submit" value="Confirm Booking" class="btn btn-success w-100 mt-3">
                        </div>
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </div>
    {{-- end of booking confirmation receipt --}}
</body>

</html>
