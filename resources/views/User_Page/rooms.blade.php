<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../room/style.css">

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

    <title>Hotel Room</title>
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
                            <a class="nav-link mx-2" style="font-size: 17px;" href="{{ route('main-page') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" style="font-size: 17px;" href="{{ route('about-us') }}">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" style="font-size: 17px;"
                                href="{{ route('hotel-room') }}">Room</a>
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

    {{-- intro of the hotel --}}
    <div class="jumbotron p-5" id="room_image">
        <div class="row">
            <div class="col-md-12 text-center" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="display-4 mt-5 text-light" id="room_title">Single Room</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-5" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="1000">
                    <p class="lead text-light text-center" id="room_description">Experience comfort and relaxation in
                        our cozy and
                        stylish hotel rooms designed for your most convenience. Providing modern amenities and a
                        welcoming
                        ambiance for a delightful stay.
                    </p>
                    <hr class="my-4 text-light">
                    <p class="text-light text-center">
                        Come, stay and enjoy your day.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- end of intro of the hotel --}}

    {{-- Each Hotel room description --}}
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;" data-aos="zoom-in"
                        data-aos-duration="1000">
                        Our Hotel Have Many Type Of <br>Guest Room That Can Fufill Your Needs
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="container-xl mt-4">
                        <div class="row" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="1000">
                            <div class="col-md-4">
                                <div class="card">
                                    @php
                                        $data = 'FRP28192';
                                    @endphp
                                    <img src="../images/Single Room.jpg" class="card-img-top img-thumbnail rounded"
                                        alt="Image Frame">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5>Type</h5>
                                            <p class="small text-success"><b>Single Room</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-info">Price</h5>
                                            <p class="small text-danger"><b>$100 / Per Night</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="mb-0">
                                                <small>Ratings</small>
                                            </h5>
                                            <div class="ms-auto text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <a href="{{ route('guest-info', $data) }}"
                                                    class="btn btn-success w-100">Book
                                                    Room</a><br><br>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-info w-100 text-light">Learn
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    @php
                                        $data = 'FRP28192';
                                    @endphp
                                    <img src="../images/Family Room.jpg" class="card-img-top img-thumbnail rounded"
                                        alt="Image Frame">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5>Type</h5>
                                            <p class="small text-success"><b>Family Room</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-info">Price</h5>
                                            <p class="small text-danger"><b>$150 / Per Night</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="mb-0">
                                                <small>Ratings</small>
                                            </h5>
                                            <div class="ms-auto text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <a href="{{ route('guest-info', $data) }}"
                                                    class="btn btn-success w-100">Book
                                                    Room</a><br><br>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-info w-100 text-light">Learn
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    @php
                                        $data = 'FRP28192';
                                    @endphp
                                    <img src="../images/Residential Room.jpg"
                                        class="card-img-top img-thumbnail rounded" alt="Image Frame">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5>Type</h5>
                                            <p class="small text-success"><b>Residential Room</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-info">Price</h5>
                                            <p class="small text-danger"><b>$180 / Per Night</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="mb-0">
                                                <small>Ratings</small>
                                            </h5>
                                            <div class="ms-auto text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <a href="{{ route('guest-info', $data) }}"
                                                    class="btn btn-success w-100">Book
                                                    Room</a><br><br>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-info w-100 text-light">Learn
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    @php
                                        $data = 'FRP28192';
                                    @endphp
                                    <img src="../images/Couple Room.jpg" class="card-img-top img-thumbnail rounded"
                                        alt="Image Frame">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5>Type</h5>
                                            <p class="small text-success"><b>Couple Room</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-info">Price</h5>
                                            <p class="small text-danger"><b>$250 / Per Night</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="mb-0">
                                                <small>Ratings</small>
                                            </h5>
                                            <div class="ms-auto text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <a href="{{ route('guest-info', $data) }}"
                                                    class="btn btn-success w-100">Book
                                                    Room</a><br><br>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-info w-100 text-light">Learn
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    @php
                                        $data = 'FRP28192';
                                    @endphp
                                    <img src="../images/VIP Room.jpg" class="card-img-top img-thumbnail rounded"
                                        alt="Image Frame">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5>Type</h5>
                                            <p class="small text-success"><b>VIP Room</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-info">Price</h5>
                                            <p class="small text-danger"><b>$300 / Per Night</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="mb-0">
                                                <small>Ratings</small>
                                            </h5>
                                            <div class="ms-auto text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <a href="{{ route('guest-info', $data) }}"
                                                    class="btn btn-success w-100">Book
                                                    Room</a><br><br>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-info w-100 text-light">Learn
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    @php
                                        $data = 'FRP28192';
                                    @endphp
                                    <img src="../images/Deluxe Room.jpg" class="card-img-top img-thumbnail rounded"
                                        alt="Image Frame">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5>Type</h5>
                                            <p class="small text-success"><b>Deluxe Room</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-info">Price</h5>
                                            <p class="small text-danger"><b>$270 / Per Night</b></p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="mb-0">
                                                <small>Ratings</small>
                                            </h5>
                                            <div class="ms-auto text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <a href="{{ route('guest-info', $data) }}"
                                                    class="btn btn-success w-100">Book
                                                    Room</a><br><br>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-info w-100 text-light">Learn
                                                    More</a>
                                            </div>
                                        </div>
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
    {{-- end of hotel room description --}}

    {{-- special offer for guest --}}
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;">
                        Special Offer and Upgrade to get better experience
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="container-xl mt-4">
                        <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/ocean_view.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Experience the Ocean View</h5>
                                        <p class="card-text">You can enjoy sweeping views of the ocean from the
                                            comfort of your room. Simply choose the ocean view upgrade when booking to
                                            enhance your experience and make the most of your stay with us.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/discount.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Extended Stay Discounts</h5>
                                        <p class="card-text">Stay longer, save more! Enjoy discounted rates when you
                                            extend your stay with us. Take advantage of our extended stay discounts.
                                            Book now and unlock exclusive savings on
                                            your
                                            longer stay.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/romantic_room.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Special Occasion Packages</h5>
                                        <p class="card-text">Celebrate your special moments in style with our tailored
                                            Special Occasion Packages! Whether it's an anniversary, birthday, or
                                            romantic getaway, let us make your occasion unforgettable. </p>
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
    {{-- end of special offer for guest --}}

    {{-- special services for our guest --}}
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;">
                        We provide special services just for you
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="container-xl mt-4">
                        <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="col-md-4">
                                <div class="card custom-card mb-4">
                                    <img src="../images/food_services.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-overlay">
                                        <h5 class="card-title">Food Services</h5>
                                        <p class="card-text text-center" style="font-size: 14px;">Guests can order
                                            food and beverages to be <br>
                                            delivered to their room, allowing for convenient dining without leaving
                                            the
                                            comfort of their accommodation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card custom-card mb-4">
                                    <img src="../images/concierge_services.jpg" class="card-img-top"
                                        alt="Card Image">
                                    <div class="card-overlay">
                                        <h5 class="card-title">Concierge Services</h5>
                                        <p class="card-text text-center" style="font-size: 14px;">Concierge staff
                                            can
                                            assist guests with various <br>
                                            tasks such as booking tours and transportation, making restaurant
                                            reservations, arranging for tickets to events, and providing local
                                            recommendations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card custom-card mb-4">
                                    <img src="../images/turndown_service.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-overlay">
                                        <h5 class="card-title">Turndown Service</h5>
                                        <p class="card-text text-center" style="font-size: 14px;">In the evening,
                                            housekeeping staff may visit <br>
                                            guest rooms to prepare the bed for sleep, dim the lights, and provide
                                            additional amenities <br>such as chocolates or bottled water.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of special services for our guest --}}

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

<script src="../room/index.js"></script>

{{-- jquery cdn --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

{{-- start of navigation bar function --}}
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
</script>
{{-- end of navigation bar function --}}

{{-- aos library cdn --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

</html>
