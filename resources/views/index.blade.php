<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- link to the css file --}}
    <link rel="stylesheet" href="/index/style.css">
    <link rel="stylesheet" href="/index/classic.css">
    <link rel="stylesheet" href="/index/classic.date.css">

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

    {{-- bootstrap datepicker css cdn --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <title>Ocean Heaven Hotel</title>
</head>

<body>
    {{-- start of nav bar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="../images/ocean_heaven.png" class="logo-image">
            <a class="navbar-brand mt-2 " href="{{ route('main-page') }}">
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
                        <a class="nav-link active mx-2" style="font-size: 17px;"
                            href="{{ route('main-page') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" style="font-size: 17px;" href="#"
                            id="features_menu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu" aria-labelledby="features_menu">
                            <a class="dropdown-item" style="font-size: 17px;" href="{{ route('about-us') }}">About
                                Us</a>
                            <a class="dropdown-item" style="font-size: 17px;" href="#">Gallery</a>
                            <a class="dropdown-item" style="font-size: 17px;"
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

    {{-- banner --}}
    <div class="jumbotron p-5" id="banner">
        <div class="row">
            <div class="col-md-12 text-center d-none d-md-block" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="display-4 text-light">Ocean Heaven Hotel</h1>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 col-md-12 d-none d-md-block" data-aos="zoom-in" data-aos-duration="1000"
                        data-aos-delay="1000">
                        <p class="lead text-light text-center">Where comfort meets personalized care, our hotel is a
                            sanctuary of
                            hospitality. From the warm welcome at arrival to the attentive service during your stay, we
                            strive
                            to create memorable experiences that linger long after you've departed.</p>
                        <hr class="my-4 text-light">
                        <p class="text-light text-center">Book Your Room Now</p>
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
                <p class="lead text-light text-center" style="font-size: 18px;">Where comfort meets personalized care,
                    our hotel is a
                    sanctuary of
                    hospitality. From the warm welcome at arrival to the attentive service during your stay, we
                    strive
                    to create memorable experiences that linger long after you've departed.</p>
                <hr class="my-4 text-light">
                <p class="text-light text-center">Come, stay and enjoy your day.</p>
            </div>
        </div>
        <!-- End of Mobile View -->
    </div>
    {{-- end of banner --}}

    {{-- search room bar --}}
    <div class="container-xl">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card card-body" id="search_room_bar" data-aos="fade-down" data-aos-duration="1000"
                    data-aos-delay="1000">
                    <div class="search-bar">
                        <form class="form-inline justify-content-center">
                            <div class="row">
                                <div class="col-12 col-md-3 mb-3 mb-md-0">
                                    <div class="form-group" style="position: relative;">
                                        {{-- <label for="input_from" class="text-light">From</label> --}}
                                        <input type="text" class="form-control mt-1" id="input_from"
                                            placeholder="Start Date">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 mb-3 mb-md-0">
                                    <div class="form-group" style="position: relative;">
                                        {{-- <label for="input_from" class="text-light">To</label> --}}
                                        <input type="text" class="form-control mt-1" id="input_to"
                                            placeholder="End Date">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 mb-3 mb-md-0">
                                    <div class="form-group" style="position: relative;">
                                        {{-- <label for="guest" class="text-light">Guest</label> --}}
                                        <input type="number" class="form-control mt-1" placeholder="Guest">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <button type="button" class="btn btn-primary text-light w-100 mt-1">Check
                                        Availability</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of search room bar --}}

    {{-- start of services --}}
    <div class="container-fluid">
        <div class="row mt-2">
            <h4 class="text-center fs-3 mt-3" data-aos="zoom-in" data-aos-duration="1000"
                style="position: relative; z-index: -1;">
                We provide a wonderful services for you
            </h4>
            <div class="d-flex justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="container-xl mt-3">
                        <div class="row" style="position: relative; z-index: -1;" data-aos="zoom-out"
                            data-aos-duration="1000" data-aos-delay="1000">
                            <div class="col-lg-4 col-md-6">
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
                            <div class="col-lg-4 col-md-6">
                                <div class="card" style="position: relative; z-index; -10;">
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
                            <div class="col-lg-4 col-md-6">
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
                            <div class="col-lg-4 col-md-6">
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
                            <div class="col-lg-4 col-md-6">
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
                            <div class="col-lg-4 col-md-6">
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

    {{-- intro of the hotel room --}}
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="container-xl mt-4">
                        <div class="row" data-aos="fade-left" data-aos-duration="1000">
                            <div class="col-6">
                                <h3 class="mb-3">Our Room</h3>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a class="btn btn-primary mb-3 mx-1 mr-1" href="#carouselExampleIndicators2"
                                    role="button" data-bs-slide="prev">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button"
                                    data-bs-slide="next">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        {{-- start of the first row of the room introduction --}}
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card bg-light border border-dark">
                                                        <img class="card-img-top" alt="100%x280"
                                                            src="../images/Single Room.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Single Room</h4>
                                                            <h5 style="font-size: 13px;">Experience comfort and
                                                                relaxation in our cozy, stylish rooms, designed for your
                                                                convenience. Enjoy modern amenities and a welcoming
                                                                ambiance for a delightful stay.</h5>
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$119.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-bed"></i> 1 Bed</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-user"></i> 2 Adults</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                                        &radic;50
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-primary w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card bg-light border border-dark">
                                                        <img class="card-img-top" alt="100%x280"
                                                            src="../images/Standard Room.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Standard Room</h4>
                                                            <h5 style="font-size: 13px;">a comfy space with modern
                                                                decor. It has a queen or twin beds, a private bathroom,
                                                                and a work desk. It's a cozy spot for your stay, whether
                                                                you're here for work or play.</h5>
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$139.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-bed"></i> 2 Bed</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-user"></i> 4 Adults</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                                        &radic;70
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-primary w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card bg-light border border-dark">
                                                        <img class="card-img-top" alt="100%x280"
                                                            src="../images/Family Room.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Family Room</h4>
                                                            <h5 style="font-size: 13px;">Our family room is spacious
                                                                and inviting, designed to comfortably fit families. It
                                                                has plenty of space and amenities to make sure both
                                                                adults and children have a pleasant stay.
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$179.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-bed"></i> 4 Bed</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-user"></i> 6 Adults</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                                        &radic;100</h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-primary w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end of first row of the room introduction --}}

                                        {{-- start of second row of the room introduction --}}
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card bg-light border border-dark">
                                                        <img class="card-img-top" alt="100%x280"
                                                            src="../images/King Room.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">King Room</h4>
                                                            <h5 style="font-size: 13px;">A spacious and luxurious
                                                                choice for guests who want extra comfort. It includes a
                                                                stylish private bathroom with a shower or bathtub and a
                                                                cozy seating area for relaxation.</h5>
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$210.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-bed"></i> 1 Bed</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-user"></i> 2 Adults</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                                        &radic;80</h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-primary w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card bg-light border border-dark">
                                                        <img class="card-img-top" alt="100%x280"
                                                            src="../images/Residential Room.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Residential Room</h4>
                                                            <h5 style="font-size: 13px;">A residential room in our
                                                                hotel provides a homely atmosphere and essential
                                                                amenities for a comfortable long-term stay, making it
                                                                feel like a home away from home.</h5>
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$160.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-bed"></i> 2 Bed</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-user"></i> 4 Adults</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                                        &radic;70</h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-primary w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card bg-light border border-dark">
                                                        <img class="card-img-top" alt="100%x280"
                                                            src="../images/VIP Room.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">VIP Room</h4>
                                                            <h5 style="font-size: 13px;">The VIP room in our hotel is
                                                                the pinnacle of luxury and comfort. The VIP room ensures
                                                                an unforgettable experience, where every detail is
                                                                curated to surpass expectations.
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$199.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-bed"></i> 2 Bed</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-user"></i> 4 Adults</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                                        &radic;100</h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-primary w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end of second row of the room introduction --}}

                                        {{-- start of third row of the room introduction --}}
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card bg-light border border-dark">
                                                        <img class="card-img-top" alt="100%x280"
                                                            src="../images/Deluxe Room.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Deluxe Room</h4>
                                                            <h5 style="font-size: 13px;">Designed to exceed
                                                                expectations, our Deluxe Rooms offer an unparalleled
                                                                blend of elegance and comfort, ensuring an unforgettable
                                                                stay for our esteemed guests.</h5>
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$250.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-bed"></i> 2 Bed</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-user"></i> 4 Adults</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                                        &radic;120</h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-primary w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card bg-light border border-dark">
                                                        <img class="card-img-top" alt="100%x280"
                                                            src="../images/Executive Room.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Executive Room</h4>
                                                            <h5 style="font-size: 13px;">Designed for discerning
                                                                travelers, this option offers refined luxury and
                                                                unmatched comfort. Experience a world of exclusivity
                                                                that caters to your every need during your stay.
                                                            </h5>
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$270.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-bed"></i> 6 Bed</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa fa-user"></i> 12 Adults</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                                        &radic;180</h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-primary w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card bg-light border border-dark">
                                                        <img class="card-img-top" alt="100%x280"
                                                            src="../images/Couple Room.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Couple Room</h4>
                                                            <h5 style="font-size: 13px;">
                                                                Our Couple Rooms provide a serene escape for you and
                                                                your loved one.
                                                                Our Couple Rooms offer a tranquil retreat designed for
                                                                deep connections and lasting memories.
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$250.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 15px;"><i
                                                                            class="fa fa-bed"></i> 1 Bed</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 15px;"><i
                                                                            class="fa fa-user"></i> 2 Adults</h5>
                                                                </div>
                                                                <div class="col-4 col-lg-4 col-md-6">
                                                                    <h5 style="font-size: 15px;"><i
                                                                            class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                                        &radic;110</h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-primary w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end of third row of the room introduction --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of intro of the hotel --}}

    {{-- start of the hall introduction --}}
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="container-xl mt-4">
                        <div class="row" data-aos="fade-right" data-aos-duration="1000">
                            <div class="col-6">
                                <h3 class="mb-3">Our Hall</h3>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a class="btn btn-primary mb-3 mx-1 mr-1" href="#hall_intro" role="button"
                                    data-bs-slide="prev">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <a class="btn btn-primary mb-3" href="#hall_intro" role="button"
                                    data-bs-slide="next">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-12 col-md-12">
                                <div id="hall_intro" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        {{-- start of the first row of the room introduction (Banquet Hall) --}}
                                        <div class="carousel-item active">
                                            <div class="card bg-light border border-dark">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-5">
                                                            <img class="card-img-top" alt="banquet_hall"
                                                                src="../images/banquet_hall.jpg">
                                                        </div>
                                                        <div class="col-lg-6 col-md-7">
                                                            <h4 class="card-title mt-lg-0 mt-md-0 mt-2">Banquet Hall
                                                            </h4>
                                                            <h5 style="font-size: 13px;">Our spacious and beautiful
                                                                venue can host everything from small gatherings to large
                                                                celebrations. With modern facilities and a helpful team,
                                                                we make sure your event runs smoothly.
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$499.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-6 col-lg-4 col-md-4">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-square-parking"
                                                                            style="color: #dd4b39;"></i>
                                                                        Free Parking</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-3 col-md-3">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-chair"
                                                                            style="color: chocolate;"></i>&nbsp;200
                                                                        Seat
                                                                    </h5>
                                                                </div>
                                                                <div class="col-6 col-lg-5 col-md-5">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-volume-high"></i> Audio
                                                                        Equipment</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-4 col-md-4">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-lightbulb"
                                                                            style="color: orange;"></i>&nbsp;Stage
                                                                        Lighting</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-3 col-md-3">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-wifi"
                                                                            style="color: blue;"></i> Free WIFI</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-5 col-md-5">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-gear"></i> Technical
                                                                        Support</h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-info w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end of first row of the room introduction (Banquet Hall) --}}

                                        {{-- start of the second hall introduction (Birthday Hall) --}}
                                        <div class="carousel-item">
                                            <div class="card bg-light border border-dark">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-5">
                                                            <img class="card-img-top" alt="Birthday Hall Image"
                                                                src="../images/birthday_hall.jpg">
                                                        </div>
                                                        <div class="col-lg-6 col-md-7">
                                                            <h4 class="card-title mt-lg-0 mt-md-0 mt-2">Birthday Hall
                                                            </h4>
                                                            <h5 style="font-size: 13px;">The perfect venue for
                                                                unforgettable birthday parties. Whether
                                                                you're planning a small gathering or a big bash, we have
                                                                everything you need to make your birthday celebration
                                                                extra special.
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$250.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-6 col-lg-5 col-md-5">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-cake-candles"
                                                                            style="color: pink;"></i>&nbsp;&nbsp;Free
                                                                        Birthday Cake
                                                                    </h5>
                                                                </div>
                                                                <div class="col-6 col-lg-3 col-md-3">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-chair"
                                                                            style="color: chocolate;"></i> 100 Seat
                                                                    </h5>
                                                                </div>
                                                                <div class="col-6 col-lg-4 col-md-4">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-gifts"
                                                                            style="color: #dd4b39;"></i>
                                                                        Mysterious Gift</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-5 col-md-5">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-camera"></i> Free
                                                                        Photography</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-3 col-md-3">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-wifi"
                                                                            style="color: blue;"></i> Free WIFI</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-4 col-md-4">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-music"
                                                                            style="color: orange;"></i>&nbsp;Birthday
                                                                        Music</h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-info w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end of second hall introduction (Birthday Hall) --}}

                                        {{-- start of third hall introduction (Graduation Hall) --}}
                                        <div class="carousel-item">
                                            <div class="card bg-light border border-dark">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-5">
                                                            <img class="card-img-top" alt="graduation_hall"
                                                                src="../images/graduation_hall.jpg">
                                                        </div>
                                                        <div class="col-lg-6 col-md-7">
                                                            <h4 class="card-title mt-lg-0 mt-md-0 mt-2">Graduation Hall
                                                            </h4>
                                                            <h5 style="font-size: 13px;">The
                                                                perfect venue for your graduation ceremony or party.
                                                                Our hall offers a
                                                                comfortable space to honor this important milestone.
                                                                We provide everything you need to make your
                                                                event memorable.
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$400.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-6 col-lg-5 col-md-5">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-graduation-cap"
                                                                            style="color: purple;"></i>
                                                                        Graduation Gap</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-3 col-md-3">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-chair"
                                                                            style="color: chocolate;"></i> 300 Seat
                                                                    </h5>
                                                                </div>
                                                                <div class="col-6 col-lg-4 col-md-4">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-lightbulb"
                                                                            style="color: orange;"></i>&nbsp;Stage
                                                                        Lighting</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-5 col-md-5">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-camera"
                                                                            style="color: #dd4b39;"></i>
                                                                        Free Photography</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-3 col-md-3">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-wifi"
                                                                            style="color: blue;"></i> Free WIFI</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-4 col-md-4">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-person-booth"></i>
                                                                        Dressing Room</h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-info w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end of third hall introduction (Graduation Hall) --}}

                                        {{-- start of fourth hall introduction --}}
                                        <div class="carousel-item">
                                            <div class="card bg-light border border-dark">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-5">
                                                            <img class="card-img-top" alt="Private Hall Image"
                                                                src="../images/private_hall.jpg">
                                                        </div>
                                                        <div class="col-lg-6 col-md-7">
                                                            <h4 class="card-title mt-lg-0 mt-md-0 mt-2">Private Hall
                                                            </h4>
                                                            <h5 style="font-size: 13px;">Our private hall offers a cozy
                                                                and elegant space tailored to your needs. Whether you're
                                                                hosting a small party, a family celebration, or a
                                                                private meeting, we provide the ideal setting with
                                                                personalized service.
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$300.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-6 col-lg-5 col-md-5">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-person"></i>&nbsp;&nbsp;Dedicated
                                                                        Staff</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-4 col-md-3">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-chair"
                                                                            style="color: chocolate;"></i> 100 Seat
                                                                    </h5>
                                                                </div>
                                                                <div class="col-6 col-lg-4 col-md-4">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-shield"
                                                                            style="color: #0082ca;"></i>
                                                                        100% Secure</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-5 col-md-5">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-star"
                                                                            style="color: orange;"></i>&nbsp;Exclusive
                                                                        Use</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-3 col-md-3">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-wifi"
                                                                            style="color: blue;"></i> Free WIFI</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-4 col-md-4">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-music"></i> Free Music
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-info w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end of fourth hall introduction (Private Hall) --}}

                                        {{-- start of fifth hall introduction (Wedding Hall) --}}
                                        <div class="carousel-item">
                                            <div class="card bg-light border border-dark">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-5">
                                                            <img class="card-img-top" alt="Wedding Hall Image"
                                                                src="../images/wedding_hall.jpg">
                                                        </div>
                                                        <div class="col-lg-6 col-md-7">
                                                            <h4 class="card-title mt-lg-0 mt-md-0 mt-2">Wedding Hall
                                                            </h4>
                                                            <h5 style="font-size: 13px;">Celebrate your love story at
                                                                "The Truth Love Hall". Our elegant hall
                                                                provides a beautiful setting for weddings of all sizes.
                                                                With stunning decor, modern amenities, and a dedicated
                                                                team.
                                                            </h5>
                                                            <h5 style="font-size: 18px;">Only <span
                                                                    class="text-success"><b>$520.99</b></span> /
                                                                <small class="text-secondary">night</small>
                                                            </h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-6 col-lg-5 col-md-5">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-volume-high"></i>&nbsp;Audio
                                                                        Equipment</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-3 col-md-3">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-chair"
                                                                            style="color: chocolate;"></i>&nbsp;
                                                                        300 Seat
                                                                    </h5>
                                                                </div>
                                                                <div class="col-6 col-lg-4 col-md-4">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-square-parking"
                                                                            style="color: #dd4b39;"></i>
                                                                        Free Parking
                                                                </div>
                                                                <div class="col-6 col-lg-5 col-md-5">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-lightbulb"
                                                                            style="color: orange;"></i>&nbsp;Stage
                                                                        Lighting</h5>
                                                                </div>
                                                                <div class="col-6 col-lg-3 col-md-3">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-wifi"
                                                                            style="color: blue;"></i>&nbsp; Free WIFI
                                                                    </h5>
                                                                </div>
                                                                <div class="col-6 col-lg-4 col-md-4">
                                                                    <h5 style="font-size: 14px;"><i
                                                                            class="fa-solid fa-cake-candles"></i>&nbsp;Free
                                                                        Cake</h5>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                class="btn btn-info w-100 mt-2">View
                                                                Details</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end of fifth hall introduction (Wedding Hall) --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of the hall introduction --}}

    {{-- Gallery from the hall --}}
    {{-- <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;">
                        Where Creativity Unveils Timeless Stories – A Gallery Beyond Boundaries.
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div class="col-md-8">
                    <div class="container-xl mt-2">
                        <div class="row" data-aos="fade-right" data-aos-duration="1000">
                            <div class="col-md-3">
                                <img src="../images/wedding_memory_1.jpg" alt="..."
                                    class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/wedding_memory_2.jpg" alt="..."
                                    class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/birthday_memory_1.jpg" alt="..."
                                    class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/birthday_memory_2.jpg" alt="..."
                                    class="img-thumbnail"><br><br>
                            </div>
                        </div>
                        <div class="row mt-3" data-aos="fade-left" data-aos-duration="1000">
                            <div class="col-md-3">
                                <img src="../images/aniversary_memory_1.jpg" alt="..."
                                    class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/aniversary_memory_2.jpg" alt="..."
                                    class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/graduation_memory_1.jpg" alt="..."
                                    class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/graduation_memory_2.jpg" alt="..."
                                    class="img-thumbnail"><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- end of the gallery from the hall --}}

    {{-- start of the latest news of the hotel --}}
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" data-aos="fade-out" data-aos-duration="1000">
                        Latest News from Ocean Heaven Hotel
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="container-xl mt-4">
                        <div class="row" data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <img src="../images/special_offer.jpg" class="card-img-top" alt="News Image">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">🌟 Limited Time Offer
                                            🌟<br>Recieve Limited
                                            Gift From Us</h5>
                                        <p class="card-text">
                                            Receive a limited gift with your stay! Simply book directly
                                            with us to
                                            qualify. Make your stay at Ocean
                                            Heaven Hotel even more memorable!</p>
                                        <a href="#" class="btn btn-primary w-100">Read More</a>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <img src="../images/travel_tips.jpg" class="card-img-top" alt="News Image">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">🌟 Explore Like a Local:
                                            🌟<br>Tips for Your
                                            Next
                                            Adventure!</h5>
                                        <p class="card-text">Looking to discover the hidden gems of our
                                            vibrant city?
                                            we've curated a
                                            list of must-visit spots that will make your stay
                                            unforgettable.</p>
                                        <a href="#" class="btn btn-primary w-100">Read More</a>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <img src="../images/charity_events.jpg" class="card-img-top" alt="News Image">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">🌟 Compassion in Action:
                                            🌟<br>Waves of
                                            Change
                                        </h5>
                                        <p class="card-text">Our upcoming charity event
                                            will be joining hands with our guests and partners to make a
                                            positive
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
    {{-- end of the latest news of the hotel --}}

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white bg-dark">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
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
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i> Austin, Texas</p>
                        <p><i class="fas fa-envelope mr-3"></i> oceanHeaven231@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

{{-- Jquery cdn --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

{{-- Jquery popper cdn --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>

{{-- bootstrap js cdn --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

{{-- Jquery pickadate cdn --}}
<script src="/index/picker.js"></script>
<script src="/index/picker.date.js"></script>

{{-- bootstrap datepicker cdn --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

{{-- link with index.js file --}}
<script src="/index/main.js"></script>
<script src="/index/index.js"></script>

<script>
    AOS.init({
        disable: 'mobile'
    });

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

</html>
