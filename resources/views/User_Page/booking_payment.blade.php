<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    <link rel="stylesheet" href="/external_css_file/aos.css">

    {{-- sweet alert css cdn --}}
    <link rel="stylesheet" href="/external_css_file/sweetalert2.min.css">

    <title>Booking Payment</title>
</head>

<body>
    {{-- start of booking registration form --}}
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-9">
                    @foreach ($guest_bookingInfo as $info)
                        <form action="{{ route('booking-confirmation') }}" method="POST" id="stripe-form">
                            @csrf
                            <div class="container-xl">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h3>Booking Payment</h3>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="{{ route('cancel-booking', ['room_type_name' => $room_type_name]) }}"
                                            class="btn btn-danger w-100" id="cancel-booking"
                                            data-room-type="{{ $room_type_name }}"
                                            data-booking-id="{{ $info->booking_id }}">Cancel
                                            Booking
                                        </a>
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
                                                        <p>Full Name: <span class="fw-bold">
                                                                {{ $info->guest_name }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p>Email: <span class="fw-bold"> {{ $info->guest_email }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p>Phone Number: <span class="fw-bold">
                                                                {{ $info->guest_phoneNumber }}</span></p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p>Country: <span class="fw-bold">
                                                                {{ $info->guest_country }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p>City: <span class="fw-bold"> {{ $info->guest_city }}</span>
                                                        </p>
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
                                                        <input type="hidden" id="stripe-token" name="stripeToken">
                                                        <div id="card-element" class="form-control"></div>
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
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-7">
                                                        <h5>Room Name:</h5>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-5">
                                                        <span class="fw-bold d-flex justify-content-end"
                                                            style="font-size: clamp(0.9rem, 1.2vw, 1.5rem);">{{ $info->room_type_name }}
                                                        </span>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-8">
                                                        <h5>Room Number:</h5>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-4">
                                                        <span
                                                            class="fw-bold d-flex justify-content-end">{{ $info->room_id }}
                                                        </span>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-8">
                                                        <h5>Room Price:</h5>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-4">
                                                        <span class="text-success fw-bold d-flex justify-content-end">
                                                            $ {{ $info->room_price }}
                                                        </span>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-8">
                                                        <h5>Room Tax:</h5>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-4">
                                                        <span class="fw-bold d-flex justify-content-end">6%</span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Additional Service Price</h4>
                                                <div class="row">
                                                    @if ($guest_servicesInfo->isEmpty())
                                                        <div class="col-12">
                                                            <h5 class="text-danger fw-bold">No service selected</h5>
                                                        </div>
                                                    @else
                                                        @foreach ($guest_servicesInfo as $guest_serviceInfo)
                                                            <div class="col-9">
                                                                <h5 style="font-size: clamp(0.85rem, 1.1vw, 1.2rem)"
                                                                    id="service_name">
                                                                    <i class="fa-solid fa-circle-check"
                                                                        style="color: green;"></i>
                                                                    <span
                                                                        class="text-success">{{ $guest_serviceInfo->services_name }}
                                                                        X {{ $guest_serviceInfo->quantity }} </span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-3">
                                                                <h5 style="font-size: clamp(0.9rem, 1.2vw, 1.4rem)"
                                                                    id="service_price" class="text-success">$
                                                                    {{ number_format($guest_serviceInfo->total_price, 2) }}
                                                                </h5>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-8">
                                                        <h4>Total Price :</h4>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-4">
                                                        <h4 class="text-success fw-bold d-flex justify-content-end"
                                                            style="font-size: clamp(1.2rem, 1.2vw, 1.5rem);">
                                                            $ {{ $info->total_price }}
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        {{-- start of making payment agreement --}}
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="agreeCheckbox">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        By clicking this, you agree to the Ocean Heaven <span
                                                            class="text-primary fw-bold">Terms & Conditions</span> and
                                                        <span class="text-primary fw-bold">Privacy Policy</span>
                                                    </label>
                                                </div>
                                                <button class="btn btn-primary w-100 mt-3 disabled" id="payButton"
                                                    onclick="createToken()">Pay for My Booking</button>
                                            </div>
                                        </div>
                                        <br>
                                        {{-- end of making payment agreement --}}
                                    </div>
                                    {{-- end of summary --}}
                                </div>
                            </div>
                        </form>
                    @endforeach
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

<script src="https://js.stripe.com/v3/"></script>

{{-- sweet alert js cdn --}}
<script src="/external_js_file/sweetalert2.all.min.js"></script>

{{-- link with other js file --}}
<script src="/User_Page/booking_payment/booking_payment.js"></script>

<script type="text/javascript">
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');

    var elements = stripe.elements();
    var cardElement = elements.create('card');
    cardElement.mount('#card-element');

    function createToken() {
        stripe.createToken(cardElement).then(function(result) {
            if (result.token) {
                document.getElementById("stripe-token").value = result.token.id;
                document.getElementById("stripe-form").submit();
            }
        })
    }
</script>

</html>
