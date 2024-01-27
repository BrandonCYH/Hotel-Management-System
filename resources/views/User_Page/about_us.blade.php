<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/about_us/style.css">

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
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"
                    style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Ocean
                    Heaven</a>
            </div>
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
                        <a class="nav-link text-dark mx-2" style="font-size: 17px;" href="{{ route('about-us') }}">About
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
        </nav>
    </div>
    {{-- end of nav bar --}}

    {{-- banner --}}
    <div class="jumbotron p-5" id="banner">
        <div class="row">
            <div class="col-md-12" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="display-4 mt-5 text-light text-center">Ocean Heaven Hotel</h1>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
                        <p class="lead text-light text-center">Where comfort meets personalized care, our hotel is a
                            sanctuary of
                            hospitality. From the warm welcome at arrival to the attentive service during your stay, we
                            strive
                            to create memorable experiences that linger long after you've departed.</p>
                        <hr class="my-4 text-light">
                        <p class="text-light text-center">Come, stay and enjoy your day.</p>
                        <p class="lead text-center">
                            <a href="{{ route('about-us') }}" type="button" class="btn btn-outline-light"
                                data-bs-ripple-init data-bs-ripple-color="dark">More About Us</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of banner --}}

    {{-- Greeting from CEO --}}
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;">
                        Greeting From CEO Of Ocean Heaven Hotel
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div class="col-md-8">
                    <div class="container-xl mt-4">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="d-flex justify-content-center">
                                    <div class="CEO"></div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-7">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of greeting from CEO --}}

    {{-- history of Ocean Heaven Hotel --}}
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-7">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-md-5">
                                <h4 class="text-center">History of Ocean Heaven Hotel</h4>
                                <p>
                                    In the early '80s, the Ocean Heaven Hotel started as a cozy coastal spot by Richard
                                    Waters. By the '90s, it grew into a fancy place with nice rooms and a spa. In the
                                    2000s, it got eco-friendly with solar panels and stuff. In the 2010s, they added
                                    cool tech but kept things friendly. When tough times hit in the 2020s, they stayed
                                    safe and helped the community.

                                    Now, Ocean Heaven is a classy, green, and strong hotel. It's not just posh; it cares
                                    about nature and neighbors. With waves at the door, it's a chill place to make your
                                    own stories.
                                </p>
                            </div>
                            <div class="col-md-7 col-12">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <div class="frame"
                                                style="background-image: url('../images/history_1.jpg')">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="frame"
                                                style="background-image: url('../images/history_2.jpg')"></div>
                                        </div>
                                        <div class="col-md-6 col-6 mt-3">
                                            <div class="frame"
                                                style="background-image: url('../images/history_3.jpg')"></div>
                                        </div>
                                        <div class="col-md-6 col-6 mt-3">
                                            <div class="frame"
                                                style="background-image: url('../images/ocean_heaven_hotel.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of history of Ocean Heaven Hotel --}}

    {{-- Certificate of Ocean Heaven Hotel --}}
    <div class="container-fluid" id="certificate">
        <div class="row mt-5">
            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-8">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center">
                                    <h4 class="text-center fs-3" style="font-family: cursive;">
                                        Awards Of Ocean Heaven Hotel
                                    </h4>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div id="certificateCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-md-6 mx-auto">
                                                    <div class="certificate bg-dark">
                                                        <h2>Certificate of Achievement</h2>
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
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-6 mx-auto">
                                                    <div class="certificate bg-dark">
                                                        <h2>Certificate of Achievement</h2>
                                                        <p>This is to certify that</p>
                                                        <h3 class="text-center">OCEAN HEAVEN HOTEL</h3>
                                                        <p>has successfully received an achievement of</p>
                                                        <h4 class="text-center">ENERGY STAR CERTIFICATION</h4>
                                                        <p>For outstanding achievements in promoting sustainability and
                                                            saving energy in the hospitality industry.</p>
                                                        <p>awarded on <b>25.09.2021</b></p>
                                                        <p>Signature: <i class="fa-solid fa-signature fs-4 mt-1"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#certificateCarousel" role="button"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#certificateCarousel" role="button"
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
    </div>
    {{-- end of certificate Ocean Heaven Hotel --}}
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

<script src="/about_us/about_us.js"></script>

{{-- aos library cdn --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

</html>
