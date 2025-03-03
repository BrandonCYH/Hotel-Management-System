<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- link with other css file --}}
    <link rel="stylesheet" href="/booking_registration/style.css">

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

    <!-- Animation On Scroll CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Booking Registration</title>
</head>

<body>
    {{-- start of booking registration form --}}
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-9">
                    <div class="container-xl">
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
                                                <p class="text-secondary">Full Name: {{$guest_fullName}}</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-secondary">Email: {{$guest_email}}</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-secondary">Phone Number: {{$guest_phoneNumber}}</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-secondary">Country: {{$guest_country}}</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-secondary">City: {{$guest_city}}</p>
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
                                        <h5 class="text-secondary">Room Name: {{$room_type_name}}</h5>
                                        <h5 class="text-secondary">Room Price: </h5>
                                        <h5 class="text-secondary">Room Tax: 6%</h5>
                                        <hr>
                                        <h4>Additional Service Price</h4>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

{{-- jquery cdn --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

{{-- bootstrap js cdn --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

{{-- link with other js file --}}
<script src="/booking_payment/booking_payment.js"></script>

</html>