<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/index/style.css">

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
                <button class="navbar-toggler mx-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link text-dark mx-2" style="font-size: 17px;"
                                href="{{ route('main-page') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark mx-2" style="font-size: 17px;"
                                href="{{ route('about-us') }}">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark mx-2" style="font-size: 17px;" href="#">Room</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark mx-2" style="font-size: 17px;" href="#">News</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark mx-2" style="font-size: 17px;" href="#">Contact</a>
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
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            Check In Date
                                        </div>
                                        <div class="card-body">
                                            <input type="date" class="form-control">
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
                                            <input type="date" class="form-control">
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
                                            <select class="form-control form-select">
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
                                            <select class="form-control form-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success w-100">Check
                                            Availability</button>
                                    </div>
                                </div>
                            </div>
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
                <h1 class="display-4 mt-5 text-light" id="room_title">Single Room</h1>
                <p class="lead text-light" id="room_description">Experience comfort and relaxation in our cozy and
                    stylish hotel rooms designed for your most convenience. Providing modern amenities and a welcoming
                    ambiance for a delightful stay.
                </p>
                <hr class="my-4 text-light">
                <p class="text-light">Come, stay and enjoy your day.</p>
            </div>
        </div>
    </div>
    {{-- end of intro of the hotel --}}

    {{-- testimonial --}}
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-6">
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
                        <button type="button" class="btn btn-info w-100 mt-3">Leave a comment</button><br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- First Set of Cards -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <!-- Card 1 -->
                                    <div class="col">
                                        <div class="card">
                                            <img src="https://via.placeholder.com/300" class="card-img-top"
                                                alt="Card Image 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 1</h5>
                                                <p class="card-text">Some text for Card 1.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="col">
                                        <div class="card">
                                            <img src="https://via.placeholder.com/300" class="card-img-top"
                                                alt="Card Image 2">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 2</h5>
                                                <p class="card-text">Some text for Card 2.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="col">
                                        <div class="card">
                                            <img src="https://via.placeholder.com/300" class="card-img-top"
                                                alt="Card Image 3">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 3</h5>
                                                <p class="card-text">Some text for Card 3.</p>
                                            </div>
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
                                        <div class="card">
                                            <img src="https://via.placeholder.com/300" class="card-img-top"
                                                alt="Card Image 5">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 5</h5>
                                                <p class="card-text">Some text for Card 5.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 6 -->
                                    <div class="col">
                                        <div class="card">
                                            <img src="https://via.placeholder.com/300" class="card-img-top"
                                                alt="Card Image 6">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 6</h5>
                                                <p class="card-text">Some text for Card 6.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 7 -->
                                    <div class="col">
                                        <div class="card">
                                            <img src="https://via.placeholder.com/300" class="card-img-top"
                                                alt="Card Image 7">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 7</h5>
                                                <p class="card-text">Some text for Card 7.</p>
                                            </div>
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

    {{-- hotel restaurant --}}
    <div class="container-fluid" id="restaurant">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h2 class="text-center text-light mt-4">
                        We provide a wonderful services for you
                    </h2>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-light mx-2" data-bs-ripple-init
                        data-bs-ripple-color="dark" onclick="show_mainMenu()">Food Menu</button>
                    <button type="button" class="btn btn-outline-light mx-2" data-bs-ripple-init
                        data-bs-ripple-color="dark" onclick="show_drinksMenu()">Drink Menu</button>
                    <button type="button" class="btn btn-info mx-2">Food Menu</button>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="container-xl mt-4">
                        <div class="row" id="main_menu">
                            {{-- start of first row of restaurant menu --}}
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/burger.jpg" style="object-fit: cover;"
                                                class="card-img-top w-100 h-100" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            Burger</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-text"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $12.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Our burgers: Delicious, juicy, and made just right. Each bite is
                                                    a
                                                    burst of flavor.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/egg_omelette.jpg" class="card-img h-100"
                                                style="object-fit: cover;" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            Egg Omelette</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-title"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $11.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Simple, savory, and made your way — our omelettes, your perfect
                                                    start to any day.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            {{-- end of first row of restaurant menu --}}

                            {{-- start of second row of restaurant menu --}}
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/french_toast.jpg" class="card-img h-100"
                                                style="object-fit: cover;" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            French Toast</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-title"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $11.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Golden slices of delight – our French Toast is a sweet start to
                                                    your
                                                    morning or a treat
                                                    any time of day.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/pancake.jpg" class="card-img h-100"
                                                style="object-fit: cover;" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            Pancake</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-title"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $9.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Fluffy stacks of joy – our pancakes are a delightfully sweet way
                                                    to
                                                    start your day or
                                                    indulge at any moment.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            {{-- end of second row of restaurant menu --}}

                            {{-- start of third row of restaurant menu --}}
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/vegie_omelette.jpg" class="card-img h-100"
                                                style="object-fit: cover;" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            Vegie Omelette</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-title"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $12.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Wholesome goodness in every fold - our veggie omelette, a
                                                    nutritious
                                                    and flavorful way
                                                    to kickstart your day.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/fried_chicken.jpg" class="card-img h-100"
                                                style="object-fit: cover;" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            Fried Chicken</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-title"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $14.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Crunchy, juicy perfection - our fried chicken is a delicious
                                                    comfort
                                                    that always hits
                                                    the spot.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            {{-- end of third row of restaurant menu --}}
                        </div>

                        {{-- start of drink menu --}}
                        <div class="row d-none" id="drinks_menu">
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/coca_cola.jpg" class="card-img h-100"
                                                style="object-fit: cover;" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            Coca Cola</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-title"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $12.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Refreshing moments, fizzy delight - Coca-Cola, a timeless
                                                    sip of happiness.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/orange_fanta.jpg" class="card-img h-100"
                                                style="object-fit: cover;" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            Orange Fanta</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-title"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $12.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Zesty, bubbly sunshine - Orange Fanta, a burst of citrus
                                                    refreshment in every sip.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/chocolate_juice.jpg" class="card-img h-100"
                                                style="object-fit: cover;" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            Chocolate Juice</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-title"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $12.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Rich indulgence in every sip - Chocolate juice, a decadent
                                                    twist on refreshment.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/green_tea.jpg" class="card-img h-100"
                                                style="object-fit: cover;" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            Green Tea</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-title"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $12.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Sip tranquility, embrace vitality - Green Tea, nature's
                                                    elixir for a rejuvenating moment.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/lemonade.jpg" class="card-img h-100"
                                                style="object-fit: cover;" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            Lemonade</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-title"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $12.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Zesty and crisp, a sip of sunshine - Lemonade, the perfect
                                                    thirst-quenching delight.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <div class="card"
                                    style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, #099fff) 1;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="../images/mocktails.jpg" class="card-img h-100"
                                                style="object-fit: cover;" alt="Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title"
                                                            style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            Mocktails</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="card-title"
                                                            style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                            $12.99</h5>
                                                    </div>
                                                </div>
                                                <p class="card-text text-light">
                                                    Vibrant, alcohol-free joyrides - Mocktails, refreshing
                                                    every celebration.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    {{-- end of drink menu --}}
                </div>
            </div>
        </div>
    </div>
    {{-- end of hotel restaurant --}}

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
                            <a class="text-white" href="{{ route('about-us') }}">About Us</a>
                        </p>
                        <p>
                            <a class="text-white">Room</a>
                        </p>
                        <p>
                            <a class="text-white">BrandFlow</a>
                        </p>
                        <p>
                            <a class="text-white">Bootstrap Angular</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
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
            <a class="text-white" href="#">Danny CYH</a>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

<script src="/index/index.js"></script>

{{-- aos library cdn --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

</html>
