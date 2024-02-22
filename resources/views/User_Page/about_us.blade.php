<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/about_us/style.css">

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

    <title>About Us</title>
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
                            <a class="nav-link mx-2 active" style="font-size: 17px;"
                                href="{{ route('about-us') }}">About
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

    {{-- banner --}}
    <div class="jumbotron p-5" id="banner">
        <div class="row">
            <div class="col-md-12 d-none d-md-block" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="display-4 mt-5 text-light text-center">About Us</h1>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-md-6 d-none d-md-block" data-aos="zoom-in" data-aos-duration="1000"
                        data-aos-delay="1000">
                        <p class="lead text-light text-center">
                            Welcome to Ocean Heaven Hotel! We're your cozy retreat by the sea. Since 2018, we've been
                            all about great stays and happy guests. Enjoy comfy rooms, tasty eats, and awesome views. We
                            care about the planet too! Thanks for considering us for your next trip. Come chill with
                            us!</p>
                        <hr class="my-4 text-light">
                        <p class="text-light text-center">Come, stay and enjoy your day.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="col-sm-12 d-md-none" data-aos="zoom-in" data-aos-duration="1000">
            <div class="text-center mb-4">
                <h1 class="fs-1 display-4 mt-5 text-light">About Us</h1>
            </div>
            <div class="col-sm-6 mx-auto">
                <p class="lead text-light text-center">Welcome to Ocean Heaven Hotel! We're your cozy retreat by the
                    sea. Since 2018, we've been
                    all about great stays and happy guests. Enjoy comfy rooms, tasty eats, and awesome views. We
                    care about the planet too! Thanks for considering us for your next trip. Come chill with
                    us!</p>
                <hr class="my-4 text-light">
                <p class="text-light text-center">Come, stay and enjoy your day.</p>
            </div>
        </div>
        <!-- End of Mobile View -->
    </div>
    {{-- end of banner --}}

    {{-- history of Ocean Heaven Hotel --}}
    <div class="container-fluid">
        <div class="row mt-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
            <div class="col-md-12">
                <h4 class="text-center fs-3" style="font-family: cursive;">Where Luxury Meets Ocean Conservation</h4>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-7">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/vision.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-center">Vision</h5>
                                        <p class="card-text">To become the preferred choice for travelers seeking
                                            exceptional hospitality and unforgettable experiences.</p>
                                    </div>
                                </div><br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/mission.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-center">Mission</h5>
                                        <p class="card-text">Our mission is to make guests feel warmly welcomed and
                                            cared for in a cozy atmosphere and unforgettable experiences.</p>
                                    </div>
                                </div><br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/charity_partnerships.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-center">Charity Partnerships</h5>
                                        <p class="card-text">Ocean Heaven Hotel partners with local charities to give
                                            back to the community and the environment.</p>
                                    </div>
                                </div><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of history of Ocean Heaven Hotel --}}

    {{-- Greeting from CEO --}}
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;">
                        Greeting From CEO Of Ocean Heaven Hotel
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div class="col-md-8">
                    <div class="container-xl mt-2">
                        <div class="row">
                            <div class="col-md-5" data-aos="fade-right" data-aos-duration="1000">
                                <div class="d-flex justify-content-center">
                                    <div class="CEO"></div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-7 d-none d-md-block" data-aos="fade-left" data-aos-duration="1000">
                                <h4 class="text-center">Welcome to Ocean Heaven Hotel</h4>
                                <p>
                                    Hi Everyone,

                                    I'm Danny, the CEO of Ocean Heaven Hotel. A big welcome to you!

                                    We're thrilled to have you on board as our customer. If there's anything you need or
                                    if you have questions, feel free to reach out. We're here to make your experience
                                    with us top-notch.

                                    Thanks for choosing our hotel. We look forward to serving you!
                                    <br><br>
                                    Best,
                                    Danny
                                    <br>
                                    CEO of Ocean Heaven Hotel
                                    <br><br>
                                    <i class="fa-solid fa-signature fs-3"></i>
                                </p>
                            </div>

                            {{-- mobile view --}}
                            <div class="col-12 d-md-none">
                                <h4 class="text-center">Welcome to Ocean Heaven Hotel</h4>
                                <p class="text-center">
                                    Hi Everyone,

                                    I'm Danny, the CEO of Ocean Heaven Hotel. A big welcome to you!

                                    We're thrilled to have you on board as our customer. If there's anything you need or
                                    if you have questions, feel free to reach out. We're here to make your experience
                                    with us top-notch.

                                    Thanks for choosing our hotel. We look forward to serving you!
                                    <br><br>
                                    Best,
                                    Danny
                                    <br>
                                    CEO of Ocean Heaven Hotel
                                    <i class="fa-solid fa-signature fs-3"></i>
                                </p>
                            </div>
                            {{-- end of mobile view --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of greeting from CEO --}}

    {{-- Certificate of Ocean Heaven Hotel --}}
    <div class="container-fluid" id="certificate">
        <div class="row mt-3">
            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-12">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center">
                                    <h4 class="text-center text-light fs-3" style="font-family: cursive;">
                                        Awards Of Ocean Heaven Hotel
                                    </h4>
                                </div>
                            </div>
                            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-carousel-init
                                data-aos="zoom-in-up" data-aos-duration="1000">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="certificate">
                                                    <h3>Certificate of Achievement</h3>
                                                    <p>This is to certify that</p>
                                                    <h3 class="text-center">OCEAN HEAVEN HOTEL</h3>
                                                    <p>has successfully received an achievement of</p>
                                                    <h4 class="text-center">HOSPITALITY ASSURED</h4>
                                                    <p>Recognizes hotels for excellence in service quality, business
                                                        processes, and
                                                        employee development.</p>
                                                    <p>awarded on <b>10.07.2019</b></p>
                                                    <p>Signature: <i class="fa-solid fa-signature fs-4 mt-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="certificate">
                                                    <h3>Certificate of Achievement</h3>
                                                    <p>This is to certify that</p>
                                                    <h3 class="text-center">OCEAN HEAVEN HOTEL</h3>
                                                    <p>has successfully received an achievement of</p>
                                                    <h4 class="text-center">EXCELLENCE OF SERVICES</h4>
                                                    <p>Recognizing outstanding reviews and ratings from guests on
                                                        platforms like TripAdvisor or Booking.com.</p>
                                                    <p>awarded on <b>23.10.2015</b></p>
                                                    <p>Signature: <i class="fa-solid fa-signature fs-4 mt-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="certificate">
                                                    <h3>Certificate of Achievement</h3>
                                                    <p>This is to certify that</p>
                                                    <h3 class="text-center">OCEAN HEAVEN HOTEL</h3>
                                                    <p>has successfully received an achievement of</p>
                                                    <h4 class="text-center">GUEST SATISFACTION AWARD</h4>
                                                    <p>Consistently receive positive feedback and high satisfaction
                                                        scores from guests.</p>
                                                    <p>awarded on <b>13.08.2017</b></p>
                                                    <p>Signature: <i class="fa-solid fa-signature fs-4 mt-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="certificate">
                                                    <h3>Certificate of Achievement</h3>
                                                    <p>This is to certify that</p>
                                                    <h3 class="text-center">OCEAN HEAVEN HOTEL</h3>
                                                    <p>has successfully received an achievement of</p>
                                                    <h4 class="text-center">GREEN CERTIFICATION</h4>
                                                    <p>Implementing environmentally friendly practices and
                                                        sustainability initiatives, such as energy conservation.</p>
                                                    <p>awarded on <b>13.03.2020</b></p>
                                                    <p>Signature: <i class="fa-solid fa-signature fs-4 mt-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="certificate">
                                                    <h3>Certificate of Achievement</h3>
                                                    <p>This is to certify that</p>
                                                    <h3 class="text-center">OCEAN HEAVEN HOTEL</h3>
                                                    <p>has successfully received an achievement of</p>
                                                    <h4 class="text-center">SOCIAL RESPONSIBILITY</h4>
                                                    <p>Recognizing efforts in community engagement, philanthropy, and
                                                        social responsibility initiatives.</p>
                                                    <p>awarded on <b>20.04.2023</b></p>
                                                    <p>Signature: <i class="fa-solid fa-signature fs-4 mt-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="certificate">
                                                    <h3>Certificate of Achievement</h3>
                                                    <p>This is to certify that</p>
                                                    <h3 class="text-center">OCEAN HEAVEN HOTEL</h3>
                                                    <p>has successfully received an achievement of</p>
                                                    <h4 class="text-center">SAFETY AND HYGIENE</h4>
                                                    <p>Demonstrating adherence to strict safety and hygiene protocols,
                                                        especially in hospitality industry.
                                                    </p>
                                                    <p>awarded on <b>13.12.2021</b></p>
                                                    <p>Signature: <i class="fa-solid fa-signature fs-4 mt-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more carousel items here -->
                                <a class="carousel-control-prev" href="#myCarousel" role="button"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of certificate Ocean Heaven Hotel --}}

    {{-- start of news of ocean heaven hotel --}}
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;">
                        Latest News from Ocean Heaven Hotel
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="container-xl mt-4">
                        <div class="row" data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../images/special_offer.jpg" class="card-img-top" alt="News Image">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">🌟 Limited Time Offer 🌟<br>Recieve Limited
                                            Gift From Us</h5>
                                        <p class="card-text">
                                            Receive a limited gift with your stay! Simply book directly with us to
                                            qualify. Make your stay at Ocean
                                            Heaven Hotel even more memorable!</p>
                                        <a href="#" class="btn btn-primary w-100">Read More</a>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../images/travel_tips.jpg" class="card-img-top" alt="News Image">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">🌟 Explore Like a Local: 🌟<br>Tips for Your
                                            Next
                                            Adventure!</h5>
                                        <p class="card-text">Looking to discover the hidden gems of our vibrant city?
                                            we've curated a
                                            list of must-visit spots that will make your stay unforgettable.</p>
                                        <a href="#" class="btn btn-primary w-100">Read More</a>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../images/charity_events.jpg" class="card-img-top" alt="News Image">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">🌟 Compassion in Action: 🌟<br>Waves of
                                            Change
                                        </h5>
                                        <p class="card-text">Our upcoming charity event
                                            will be joining hands with our guests and partners to make a positive
                                            impact in our local community. </p>
                                        <a href="#" class="btn btn-primary w-100">Read More</a>
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
    {{-- end og news of ocean heaven hotel --}}

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white bg-dark mt-4">
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
            © 2024 Copyright:
            <a class="text-white" href="https://github.com/BrandonCYH">Danny CYH</a>
        </div>
    </footer>
    {{-- end of footer --}}
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

<script src="/about_us/about_us.js"></script>

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
