<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

    <title>Booking Payment</title>
</head>

<body>
    {{-- start of booking registration form --}}
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-9">
                    <div class="container-xl">
                        @foreach ($guest_bookingInfo as $info)
                        <div class="row">
                            <div class="col-lg-10">
                                <h3>Booking Payment</h3>
                            </div>
                            <div class="col-lg-2">
                                <a href="{{route('room-booking', ['room_type_name'=> $room_type_name])}}"
                                    class="btn btn-danger w-100">Cancel
                                    Booking</a>
                            </div>
                            <div class="col-lg-7">
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h4>Your Booking is Hold...</h4>
                                        <p>We hold your booking until 12.00 pm</p>
                                    </div>
                                </div>
                                <br>

                                {{-- Guest Information --}}
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Guest Information</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="text-secondary">Full Name: {{$info->guest_name}}</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-secondary">Email: {{$info->guest_email}}</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-secondary">Phone Number: {{$info->guest_phoneNumber}}</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-secondary">Country: {{$info->guest_country}}</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-secondary">City: {{$info->guest_city}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                {{-- end of guest information --}}

                                {{-- Payment Information --}}
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Payment Information</h4>
                                        <small>Please fill in the form below.</small>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="card-number">Card Number</label>
                                                <input type="text" class="form-control mt-1">
                                            </div>
                                            <div class="col-lg-4 mt-2">
                                                <label for="card-number">Expire Date</label>
                                                <input type="text" class="form-control mt-1">
                                            </div>
                                            <div class="col-lg-4 mt-2">
                                                <label for="card-number">Expire Date</label>
                                                <input type="text" class="form-control mt-1">
                                            </div>
                                            <div class="col-lg-4 mt-2">
                                                <label for="card-number">Expire Date</label>
                                                <input type="text" class="form-control mt-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end of payment information --}}
                            </div>

                            {{-- start of summary --}}
                            <div class="col-lg-5">
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <h4>Summary</h4>
                                        <hr>
                                        <h5 class="text-secondary">Room Name: </h5>
                                        <h5 class="text-secondary">Room Price: </h5>
                                        <h5 class="text-secondary">Room Tax: 6%</h5>
                                        <hr>
                                        <h4>Additional Service Price</h4>
                                        <div class="row">
                                            @foreach ($guest_servicesInfo as $guest_serviceInfo)
                                            <div class="col-9">
                                                <h5 id="service_name">{{$guest_serviceInfo->services_name}} x
                                                    {{$guest_serviceInfo->quantity}}</h5>
                                            </div>
                                            <div class="col-3">
                                                <h5 id="service_price">{{$guest_serviceInfo->price}}</h5>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <br>

                                {{-- start of making payment agreement --}}
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                By clicking this, you agree to the Ocean Heaven <span
                                                    class="text-primary fw-bold">Terms & Conditions</span> and <span
                                                    class="text-primary fw-bold">Privacy Policy</span>
                                            </label>
                                        </div>
                                        <a href="{{ route('booking-confirmation') }}" type="button"
                                            class="btn btn-primary w-100 mt-3">Pay for My
                                            Booking</a>
                                    </div>
                                </div>
                                {{-- end of making payment agreement --}}
                            </div>
                            {{-- end of summary --}}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

{{-- jquery cdn --}}
<script src="/external_js_file/jquery.min.js"></script>

{{-- bootstrap bundle cdn --}}
<script src="/external_js_file/bootstrap.bundle.min.js"></script>

{{-- bootstrap javascript cdn --}}
<script src="/external_js_file/bootstrap.min.js"></script>

</html>