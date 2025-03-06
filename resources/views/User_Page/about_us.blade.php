<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- link with other css file --}}
    <link rel="stylesheet" href="/User_Page/about_us/about_us.css">

    {{-- website icon --}}
    <link rel="icon" href="../images/ocean_heaven.png" type="image/x-icon">
    <link rel="shortcut icon" href="../images/ocean_heaven.png" type="image/x-icon">

    {{-- bootstrap CSS cdn --}}
    <link href="/external_css_file/bootstrap.min.css" rel="stylesheet">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    {{-- bootstrap font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Animation On Scroll CDN -->
    <link href="/external_css_file/aos.css" rel="stylesheet">

    <title>About Us</title>
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
                            <a class="dropdown-item" style="font-size: 17px; color: #000080; font-weight: bold;"
                                href="{{ route('about-us') }}">About
                                Us</a>
                            <a class="dropdown-item" style="font-size: 17px;" href="#">Gallery</a>
                            <a class="dropdown-item" style="font-size: 17px;"
                                href="{{ route('terms-and-conditions') }}">Terms And Conditions</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" style="font-size: 17px;" href="#" id="facilities_menu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <button type="button" class="btn btn-primary rounded-pill">Book Room</button>
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

    {{-- Vision of Ocean Heaven Hotel --}}
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-12">
                <h4 class="text-center fs-3" style="font-family: cursive;" data-aos="zoom-in" data-aos-duration="1000">
                    Where Luxury Meets Ocean Conservation</h4>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-7">
                    <div class="container-xl" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="1000">
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
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of vision of Ocean Heaven Hotel --}}

    {{-- Features of the hotel --}}
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="container-xl">
                        <div class="card card-body border border-white">
                            <div class="row">
                                <!-- Accommodation Options (Image Left, Text Right on Desktop; Image First on Mobile) -->
                                <div class="col-md-6 order-1 order-md-1" data-aos="zoom-in-up" data-aos-duration="1000"
                                    data-aos-delay="1000">
                                    <img class="card-img-top img-fluid mt-4" src="../images/accommodation.jpg"
                                        alt="Accommodation Options">
                                </div>
                                <div class="col-md-6 order-2 order-md-2" data-aos="zoom-in-up" data-aos-duration="1000"
                                    data-aos-delay="1000">
                                    <br>
                                    <h3>Accommodation Options</h3>
                                    <p class="text-justify">Our hotel features a range of luxurious rooms and suites,
                                        each designed with comfort and style in mind. Whether you choose our Deluxe Room
                                        with city views or the opulent Presidential Suite, your stay promises to be
                                        nothing short of extraordinary.</p>
                                </div>

                                <!-- Dining Options (Image Left, Text Right on Desktop; Image First on Mobile) -->
                                <div class="col-md-6 order-4 order-md-3" data-aos="zoom-in-up" data-aos-duration="1000">
                                    <br>
                                    <h3>Dining Options</h3>
                                    <p class="text-justify">Savor culinary delights at our signature restaurant, The
                                        Vista Lounge, offering an eclectic menu of international and local cuisines. For
                                        a more casual setting, visit The Terrace Café, where you can enjoy a light meal
                                        with stunning ocean views.</p>
                                </div>
                                <div class="col-md-6 order-3 order-md-4" data-aos="zoom-in-up" data-aos-duration="1000">
                                    <br>
                                    <img class="card-img-top img-fluid" src="../images/dining.jpg" alt="Dining Options">
                                </div>

                                <!-- Swimming Pool (Image Left, Text Right on Desktop; Image First on Mobile) -->
                                <div class="col-md-6 order-5 order-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                                    <br>
                                    <img class="card-img-top img-fluid" src="../images/swimming_pool.jpg"
                                        alt="Swimming Pool">
                                </div>
                                <div class="col-md-6 order-6 order-last" data-aos="zoom-in-up" data-aos-duration="1000">
                                    <br>
                                    <h3>Leisure and Wellness</h3>
                                    <p class="text-justify">Unwind at our tranquil spa, complete with massage therapy,
                                        sauna, and steam rooms. Stay active in our fully equipped fitness center or take
                                        a dip in our rooftop infinity pool, offering breathtaking views of the city
                                        skyline.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of features of the hotel --}}

    {{-- start of archievement by hotel --}}
    <div class="container-fluid mt-3" id="archievement">
        <div class="row mt-4 ">
            <div class="col-md-12">
                <h4 class="text-center text-light mt-3 fs-3" style="font-family: cursive;">Achievement Of The Year
                </h4>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <div class="col-md-8">
                    <div class="container-xl">
                        <div class="row">
                            <h2 class="text-center text-light" style="font-size: 16px;">With over 100,000 positive
                                reviews and
                                multiple awards for our
                                outstanding service, we are dedicated to making every stay unforgettable.
                            </h2>
                            <div class="col-md-4 col-12 mt-2" data-aos="fade-up" data-aos-duration="1000">
                                <h4 class="text-center mt-2" style="color: antiquewhite;">Customer Satisfaction</h4>
                                <h5 class="text-center" style="color: chartreuse;">95%</h5>
                                <p class="text-center" style="color: azure;"><b>Sastifaction Over 50000 Guests</b></p>
                            </div>
                            <div class="col-md-4 col-12 mt-2" data-aos="fade-up" data-aos-duration="1000">
                                <h4 class="text-center mt-2" style="color: antiquewhite;">Guest Loyalty</h4>
                                <h5 class="text-center" style="color: chartreuse;">100,000</h5>
                                <p class="text-center" style="color: azure;"><b>Returning Guests Annually</b></p>
                            </div>
                            <div class="col-md-4 col-12 mt-2" data-aos="fade-up" data-aos-duration="1000">
                                <h4 class="text-center mt-2" style="color: antiquewhite;">Social Media</h4>
                                <h5 class="text-center" style="color: chartreuse;">100,000</h5>
                                <p class="text-center" style="color: azure;"><b>Followers On Instagram</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of archievement by hotel --}}

    {{-- start of connect with us --}}
    <div class="container-fluid mt-3">
        <div class="row mt-4 ">
            <div class="d-flex justify-content-center mt-2">
                <div class="col-md-8">
                    <div class="container-xl" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-stretch">
                                <img class="card-img-top img-fluid w-100 h-100" src="../images/reception.jpg"
                                    alt="receptionist" style="object-fit: cover;">
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center mt-3 mt-md-0">
                                <h3>Connect With Us</h3>
                                <p>We strive to meet all your needs and exceed your expectations during your stay.
                                    Please feel free to share any ideas or requests with us.</p>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="input-group mb-3">
                                    <textarea class="form-control"
                                        placeholder="Tell us your destination idea..."></textarea>
                                </div>
                                <button type="button" class="btn btn-primary w-100 mt-auto">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of connect with us --}}

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

{{-- aos library cdn --}}
<script src="/external_js_file/aos.js"></script>

{{-- jquery cdn --}}
<script src="/external_js_file/jquery.min.js"></script>

{{-- Jquery popper cdn --}}
<script src="/external_js_file/popper.min.js"></script>

{{-- bootstrap js cdn --}}
<script src="/external_js_file/bootstrap.min.js"></script>

{{-- link with other js file --}}
<script src="/User_Page/about_us/about_us.js"></script>

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

<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

</html>