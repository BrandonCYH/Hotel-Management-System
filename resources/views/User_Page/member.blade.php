<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/User_Page/member/member.css">

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

    <title>Exclusive Member</title>
</head>

<body>
    <!-- Modal form for becoming a member -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="fs-3">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end of form for becoming a member --}}

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
                        <a class="nav-link mx-2" href="{{ route('main-page') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="features_menu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu" aria-labelledby="features_menu">
                            <a class="dropdown-item" href="{{ route('about-us') }}">About
                                Us</a>
                            <a class="dropdown-item" href="{{ route('terms-and-conditions') }}">Terms And
                                Conditions</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="facilities_menu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Facilities
                        </a>
                        <div class="dropdown-menu" aria-labelledby="facilities_menu">
                            <a class="dropdown-item" href="{{ route('hotel-room') }}">Our
                                Room</a>
                            <a class="dropdown-item" href="#">Our Hall</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" style="" href="{{ route('hotel-restaurant') }}">Dining</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-2" style="" href="{{ route('exclusive-member') }}">Member</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('hotel-room')}}" type="button"
                            class="btn btn-primary rounded-pill text-light">Book
                            Room</a>
                    </li>
                    <!-- Add more items as needed -->
                </ul>
            </div>
        </div>
    </nav>
    {{-- end of nav bar --}}

    {{-- banner --}}
    <div class="jumbotron p-5" id="banner">
        <div class="row">
            <div class="col-md-12 text-center d-none d-md-block" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="display-4 text-light">Become Our Valueable Member</h1>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-md-6 d-none d-md-block" data-aos="zoom-in" data-aos-duration="1000"
                        data-aos-delay="1000">
                        <p class="lead text-light text-center">Join Ocean Heaven Hotel's membership program for
                            exclusive perks! Enjoy discounted rates, early check-in, late check-out, priority booking,
                            and personalized service. Earn points for rewards. Sign up now for a premium stay
                            experience!</p>
                        <hr class="my-4 text-light">
                        <p class="text-light text-center">Come, stay and enjoy your day.</p>
                        <p class="lead text-center">
                            <button class="btn btn-outline-light btn-lg" data-mdb-ripple-init data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-mdb-ripple-color="dark">Become Our Member</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="col-sm-12 d-md-none" data-aos="zoom-in" data-aos-duration="1000">
            <div class="text-center mb-4">
                <h1 class="fs-1 display-4 text-light">Ocean Heaven Hotel</h1>
            </div>
            <div class="col-sm-6 mx-auto">
                <p class="lead text-light text-center">Where comfort meets personalized care, our hotel is a
                    sanctuary of
                    hospitality. From the warm welcome at arrival to the attentive service during your stay, we
                    strive
                    to create memorable experiences that linger long after you've departed.</p>
                <hr class="my-4 text-light">
                <p class="text-light text-center">Come, stay and enjoy your day.</p>
                <p class="lead text-center">
                    <button class="btn btn-outline-light btn-lg" data-mdb-ripple-init data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-mdb-ripple-color="dark">Become Our Member</button>
                </p>
            </div>
        </div>
        <!-- End of Mobile View -->
    </div>
    {{-- end of banner --}}

    {{-- Membership Tiers --}}
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" data-aos="zoom-in" data-aos-duration="1000"
                        style="font-family: cursive;">
                        Membership Tiers
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="container-xl mt-4">
                        <div class="row" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/standard_tier.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/premium_tier.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/VIP_tier.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of Membership Tiers --}}

    {{-- benefit member --}}
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-8">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                                <div class="frame">
                                    <img src="../images/dining_voucher.jpg">
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                                <h4>Discounted Rates for our Valuable Guest In Our Hotel </h4>
                                <p>
                                    A discount rate is a special offer available exclusively to members of our hotel
                                    loyalty program. As a member, you can enjoy reduced prices on room bookings compared
                                    to non-members. These discounted rates are our way of showing appreciation for your
                                    loyalty and choosing to stay with us. Simply sign up for our loyalty program to
                                    unlock access to these exclusive savings on your future stays.
                                </p>
                            </div>
                            <div class="col-md-6 mt-4" data-aos="fade-right" data-aos-duration="1000">
                                <h4>Early Check-In and Late Check-Out </h4>
                                <p>
                                    Early check-in
                                    allows you to arrive at the hotel and access your room before the standard check-in
                                    time, giving you more flexibility to start your stay at your convenience. Similarly,
                                    late check-out lets you extend your stay by keeping your room for a longer period
                                    beyond the usual check-out time, allowing for a more relaxed departure. These
                                    benefits are our way of providing added convenience and flexibility to enhance your
                                    overall experience with us.
                                </p>
                            </div>
                            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                                <div class="frame">
                                    <img src="../images/check_in.jpg">
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                                <div class="frame">
                                    <img src="../images/priority_booking.jpg">
                                </div>
                            </div>
                            <div class="col-md-6 mt-4" data-aos="fade-left" data-aos-duration="1000">
                                <h4>Priority Booking and Waitlist Priority </h4>
                                <p>
                                    As a member, you gain exclusive access to priority booking privileges, allowing you
                                    to secure your preferred dates and accommodations ahead of non-members.
                                    Additionally, if your desired dates are fully booked, you'll receive priority
                                    placement on our waitlist, increasing your chances of securing a reservation should
                                    availability open up. These benefits ensure that your travel plans are prioritized
                                    and that you have the best possible experience with us.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of benefit member --}}

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white bg-dark mt-5">
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
                        <p><i class="fas fa-home mr-3"></i>Austin, Texas</p>
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

{{-- jquery cdn --}}
<script src="/external_js_file/jquery.min.js"></script>

{{-- popper cdn --}}
<script src="/external_js_file/popper.min.js"></script>

{{-- bootstrap bundle cdn --}}
<script src="/external_js_file/bootstrap.bundle.min.js"></script>

{{-- bootstrap javascript cdn --}}
<script src="/external_js_file/bootstrap.min.js"></script>

<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

</html>