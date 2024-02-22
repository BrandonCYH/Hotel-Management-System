<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/index/style.css">

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

    <title>Ocean Heaven Hotel</title>
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
                            <a class="nav-link active mx-2" style="font-size: 17px;"
                                href="{{ route('main-page') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" style="font-size: 17px;" href="{{ route('about-us') }}">About
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

    {{-- modal popup for leaving comment --}}
    <div class="modal fade" id="modal_leave_comment" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Leave Comment</h5>
                    <span aria-hidden="true"><i class="fa-solid fa-x" data-bs-dismiss="modal"
                            style="cursor: pointer;"></i></span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Write down your comment...</label>
                        <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="{{ route('google.login') }}" type="button" class="btn btn-success">Comment with Google</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end of modal popup for leaving comment --}}

    {{-- banner --}}
    <div class="jumbotron p-5" id="banner">
        <div class="row">
            <div class="col-md-12 text-center d-none d-md-block" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="display-4 mt-5 text-light">Ocean Heaven Hotel</h1>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-md-6 d-none d-md-block" data-aos="zoom-in" data-aos-duration="1000"
                        data-aos-delay="1000">
                        <p class="lead text-light text-center">Where comfort meets personalized care, our hotel is a
                            sanctuary of
                            hospitality. From the warm welcome at arrival to the attentive service during your stay, we
                            strive
                            to create memorable experiences that linger long after you've departed.</p>
                        <hr class="my-4 text-light">
                        <p class="text-light text-center">Come, stay and enjoy your day.</p>
                        <p class="lead text-center">
                            <a href="{{ route('about-us') }}" type="button" class="btn btn-outline-light btn-lg"
                                data-mdb-ripple-init data-mdb-ripple-color="dark">More About Us</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="col-sm-12 d-md-none" data-aos="zoom-in" data-aos-duration="1000">
            <div class="text-center mb-4">
                <h1 class="fs-1 display-4 mt-5 text-light">Ocean Heaven Hotel</h1>
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
                    <a href="{{ route('about-us') }}" type="button" class="btn btn-outline-light btn-lg"
                        data-mdb-ripple-init data-mdb-ripple-color="dark">More About Us</a>
                </p>
            </div>
        </div>
        <!-- End of Mobile View -->
    </div>
    {{-- end of banner --}}

    {{-- first content --}}
    <div class="container-fluid" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card mt-4">
                        <div class="card-body">
                            <form action="{{ route('room-availability') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-header text-center">
                                                Check In Date
                                            </div>
                                            <div class="card-body">
                                                <input type="date" name="checkInDate" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-header text-center">
                                                Check Out Date
                                            </div>
                                            <div class="card-body">
                                                <input type="date" id="check_out_date" name="checkOutDate"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-header text-center">
                                                Room
                                            </div>
                                            <div class="card-body">
                                                <select class="form-control form-select" name="roomType" required>
                                                    <option disabled selected></option>
                                                    <option>Single Room</option>
                                                    <option>Double Room</option>
                                                    <option>Residential Room</option>
                                                    <option>VIP Room</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-header text-center">
                                                Guest
                                            </div>
                                            <div class="card-body">
                                                <div class="dropright">
                                                    <input type="text" class="form-control dropdown-toggle"
                                                        required readonly data-bs-toggle="dropdown" id="guestDropdown"
                                                        placeholder="How many Guest?" aria-describedby="amount_guest">
                                                    <div class="dropdown-menu p-4" aria-labelledby="guestDropdown">
                                                        <div class="form-group">
                                                            <label for="adultsInput">Adults</label>
                                                            <input type="number"
                                                                class="form-control mt-1 guest-input-field"
                                                                id="adultsInput" required value="1"
                                                                min="1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="childrenInput" class="mt-2">Children</label>
                                                            <input type="number"
                                                                class="form-control mt-1 guest-input-field"
                                                                id="childrenInput" required value="0"
                                                                min="0">
                                                        </div>
                                                        <button type="button" class="btn btn-success w-100 mt-2"
                                                            id="applyGuestsBtn">Done</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success w-100">Check
                                            Availability</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of first content --}}

    {{-- start of services --}}
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;">
                        We provide a wonderful services for you
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="container-xl mt-4">
                        <div class="row" data-aos="zoom-out" data-aos-duration="1000">
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/gym_centre.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-center">Gym Workout</h5>
                                        <p class="card-text">Welcome to our hotel gym! Get ready to elevate your
                                            fitness journey during your stay with us. Enjoy your workout!</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/pet_accomodation.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-center">Pet Accomodation</h5>
                                        <p class="card-text">Welcome to our pet-friendly hotel! We're thrilled to have
                                            both you and your furry friend with us.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/spa.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-center">SPA Service</h5>
                                        <p class="card-text">We're delighted to have
                                            you here. Relax, rejuvenate, and indulge in our soothing spa services.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="row" data-aos="zoom-out" data-aos-duration="1000">
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/entertainment.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-center">Entertainment</h5>
                                        <p class="card-text">Whether you're in the mood for live music, gaming, or a
                                            delightful show, we've got it all.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/parking_lot.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-center">Secure Parking Lot</h5>
                                        <p class="card-text">Feel free to use our secure parking lot, ensuring a
                                            hassle-free and easy stay. Enjoys your time with us!</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/transportation.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="text-center">Car Service</h5>
                                        <p class="card-text">
                                            Our travelling team is here to ensure your journeys are
                                            seamless so you can focus on enjoying your stay.</p>
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
    {{-- end of services --}}

    {{-- intro of the hotel --}}
    <div class="jumbotron p-5" id="room_image">
        <div class="row">
            <div class="col-md-5">
                <h1 class="display-4 mt-2 text-light" id="room_title">Single Room</h1>
                <p class="lead text-light" id="room_description">Experience comfort and relaxation in our cozy and
                    stylish hotel rooms designed for your most convenience. Providing modern amenities and a welcoming
                    ambiance for a delightful stay.
                </p>
                <a href="{{ route('hotel-room') }}" type="button" class="btn btn-outline-light btn-lg"
                    data-mdb-ripple-init data-mdb-ripple-color="dark">View Room</a>
                <hr class="my-4 text-light">
                <p class="text-light">Come, stay and enjoy your day.</p>
            </div>
        </div>
    </div>
    {{-- end of intro of the hotel --}}

    {{-- testimonial --}}
    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-md-6" data-aos="fade-in" data-aos-duration="1000">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;">
                        Your FeedBack Are Valuable For Us
                    </h4>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-8 mt-3">
                        <h5 class="text-center">We believe in client satisfaction. Here are some testimonials by our
                            worthy clients.</h5>
                        <button type="button" class="btn btn-success w-100 mt-2">View Testimonial</button>
                        <button type="button" class="btn btn-info w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#modal_leave_comment">Leave a comment</button><br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-in-down" data-aos-duration="1000">
                <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- First Set of Cards -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <!-- Card 1 -->
                                    <div class="col">
                                        <div class="testimonial-card">
                                            <img src="https://via.placeholder.com/80" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">John Doe</p>
                                            <p>Company XYZ</p>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="col">
                                        <div class="testimonial-card">
                                            <img src="https://via.placeholder.com/80" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">John Doe</p>
                                            <p>Company XYZ</p>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="col">
                                        <div class="testimonial-card">
                                            <img src="https://via.placeholder.com/80" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">John Doe</p>
                                            <p>Company XYZ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second Set of Cards -->
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <!-- Card 5 -->
                                    <div class="col">
                                        <div class="testimonial-card">
                                            <img src="https://via.placeholder.com/80" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">John Doe</p>
                                            <p>Company XYZ</p>
                                        </div>
                                    </div>

                                    <!-- Card 6 -->
                                    <div class="col">
                                        <div class="testimonial-card">
                                            <img src="https://via.placeholder.com/80" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">John Doe</p>
                                            <p>Company XYZ</p>
                                        </div>
                                    </div>

                                    <!-- Card 7 -->
                                    <div class="col">
                                        <div class="testimonial-card">
                                            <img src="https://via.placeholder.com/80" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">John Doe</p>
                                            <p>Company XYZ</p>
                                        </div>
                                    </div>
                                    <!-- Add more cards as needed -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- end of testimonial --}}

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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="/index/index.js"></script>

<script>
    $(document).ready(function() {
        var adults = $('#adultsInput').val();
        var children = $('#childrenInput').val();

        adults = 1;
        children = 0;

        var guest_selected = "Adults: " + adults + ", Children: " + children;

        $('#guestDropdown').val(guest_selected);


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

    $(document).ready(function() {
        $('#applyGuestsBtn').click(function() {
            var adults = $('#adultsInput').val();
            var children = $('#childrenInput').val();

            var guest_selected = "Adults: " + adults + ", Children: " + children;

            $('#guestDropdown').val(guest_selected);
            // You can perform any action with the values here
        });
    });
</script>

{{-- aos library cdn --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

</html>
