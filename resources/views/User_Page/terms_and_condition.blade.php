<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- link to the css file --}}
    <link rel="stylesheet" href="/User_Page/terms_and_condition/terms_and_condition.css">

    {{-- website icon --}}
    <link rel="icon" href="../images/ocean_heaven.png" type="image/x-icon">
    <link rel="shortcut icon" href="../images/ocean_heaven.png" type="image/x-icon">

    {{-- bootstrap CSS cdn --}}
    <link rel="stylesheet" href="/external_css_file/bootstrap.min.css">

    {{-- bootstrap font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Animation On Scroll CDN -->
    <link rel="stylesheet" href="/external_css_file/aos.css">

    <title>Terms And Conditions</title>
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
                        <a class="nav-link active mx-2 dropdown-toggle" style="font-size: 17px;" href="#"
                            id="features_menu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu" aria-labelledby="features_menu">
                            <a class="dropdown-item" style="font-size: 17px;" href="{{ route('about-us') }}">About
                                Us</a>
                            <a class="dropdown-item" style="font-size: 17px; color: #000080; font-weight: bold;"
                                href="{{ route('terms-and-conditions') }}">Terms And Conditions</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" style="font-size: 17px;" href="#"
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
                        <a href="#" type="button" class="btn btn-primary rounded-pill text-light">Sign In</a>
                    </li>
                    <!-- Add more items as needed -->
                </ul>
            </div>
        </div>
    </nav>
    {{-- end of nav bar --}}

    {{-- button to back to top --}}
    <button id="back-to-top" class="btn btn-info back-to-top-btn">
        <i class="fa-solid fa-angles-up"></i>
    </button>
    {{-- end of button back to top --}}

    {{-- start of terms and conditions introduction --}}
    <div class="container-fluid">
        <div class="row mt-4">
            <h3 class="text-center">Legal terms & Conditions</h3>
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="container-xl mt-4">
                        <h5>For your Information</h5>

                        {{-- start of reservation details --}}
                        <h4 class="text-danger mt-4">1. Reservation Details</h4>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Check-in / Check-out Time:</b>
                            Specifies the time guests can check in and the time they must check out.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Reservation Guarantee:</b> Details on
                            how the reservation is confirmed, typically through a credit card.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Cancellation Policy: </b> Rules
                            regarding how
                            far in advance a booking can be canceled without a fee.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>No-Show Policy: </b> Information on
                            charges if the guest does not arrive without canceling.</p>
                        {{-- end of reservation details --}}

                        {{-- start of payment details --}}
                        <h4 class="text-danger mt-4">2. Payment Details</h4>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Payment Method: </b>
                            Accepted forms of payment (credit card, debit card, cash).</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Advance Payment: </b>
                            Whether a deposit or full payment is required at the time of booking.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Taxes And Fees: </b>
                            Additional charges such as local taxes, service charges, or resort fees.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Currency: </b>
                            The currency in which payment is required.</p>
                        {{-- end of payment details --}}

                        {{-- start of room occupancy --}}
                        <h4 class="text-danger mt-4">3. Room Occupancy</h4>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Maximum Occupancy: </b>
                            The maximum number of guests allowed in the room.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Extra Bed / Baby Cot Policy: </b>
                            Availability, Charges, and Policies related to additional bed or cribs.</p>
                        {{-- end of room occupancy --}}

                        {{-- start of guest responsibility --}}
                        <h4 class="text-danger mt-4">4. Guest Responsibility</h4>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Identification: </b>
                            Requirement to provide valid identification upon check in.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Damage To Property: </b>
                            Liability for any damage caused to the room or hotel property.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Noise and Conduct: </b>
                            Policies regarding noise levels and guest behavior.</p>
                        {{-- end of guest responsibility --}}

                        {{-- start of special request --}}
                        <h4 class="text-danger mt-4">5. Guest Responsibility</h4>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Non-Smoking Rooms: </b>
                            Availability and Policies for non-smoking rooms.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Accessbility Requests: </b>
                            Information on how to request accessbile rooms.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Special Amenties: </b>
                            Handling of requests for additional amenities like mini-fridges, microwaves, etc.</p>
                        {{-- end of special request --}}

                        {{-- start of hotel services and amenities --}}
                        <h4 class="text-danger mt-4">6. Hotel Services And Amenities</h4>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Breakfast / Meals: </b>
                            Information on whether breakfast or meals are included.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Wi-Fi and Internet Access: </b>
                            Availability and charges for internet access.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Parking: </b>
                            Details on parking availability, charges and valet services.</p>
                        <p><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;<b>Pet Policy: </b>
                            Whether pets are allowed and any associated fees.</p>
                        {{-- end of hotel services and amenities --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of terms and conditions introduction --}}

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
                            <a class="text-white" style="text-decoration: none;" href="{{ route('about-us') }}">About
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
            © 2025 Copyright:
            <a class="text-white" href="https://github.com/BrandonCYH">Brandon CYH</a>
        </div>
    </footer>
    {{-- end of footer --}}
</body>

{{-- aos library cdn --}}
<script src="/external_js_file/aos.js"></script>

{{-- Jquery cdn --}}
<script src="/external_js_file/jquery.min.js"></script>

{{-- Jquery popper cdn --}}
<script src="/external_js_file/popper.min.js"></script>

{{-- bootstrap bundle cdn --}}
<script src="/external_js_file/bootstrap.bundle.min.js"></script>

{{-- bootstrap javascript cdn --}}
<script src="/external_js_file/bootstrap.min.js"></script>

{{-- link with other js file --}}
<script src="/User_Page/terms_and_condition/terms_and_condition.js"></script>

<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

</html>
