<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/User_Page/restaurant/restaurant.css">

    {{-- website icon --}}
    <link rel="icon" href="../images/ocean_heaven.png" type="image/x-icon">
    <link rel="shortcut icon" href="../images/ocean_heaven.png" type="image/x-icon">

    {{-- bootstrap CSS cdn --}}
    <link rel="stylesheet" href="/external_css_file/bootstrap.min.css">

    {{-- bootstrap font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Animation On Scroll CDN -->
    <link rel="stylesheet" href="/external_css_file/aos.css">

    <title>Hotel Restaurant</title>
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
                        <a class="nav-link active mx-2" style="" href="{{ route('hotel-restaurant') }}">Dining</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" style="" href="{{ route('exclusive-member') }}">Member</a>
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

    {{-- button to back to top --}}
    <button id="back-to-top" class="btn btn-info back-to-top-btn">
        <i class="fa-solid fa-angles-up"></i>
    </button>
    {{-- end of button back to top --}}

    {{-- banner --}}
    <div class="jumbotron p-5" id="banner">
        <div class="row">
            <div class="col-md-12 text-center d-none d-md-block" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="display-4 text-light">BlueWave Bistro & Grill</h1>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 col-md-12 d-none d-md-block" data-aos="zoom-in" data-aos-duration="1000"
                        data-aos-delay="1000">
                        <p class="lead text-light text-center">Welcome to BlueWave Bistro & Grill at Ocean Heaven Hotel.
                            We serve delicious dishes made with fresh local ingredients. Whether you prefer our indoor
                            or outdoor seating, our inviting atmosphere ensures a memorable dining experience. Our
                            friendly staff is here to make your visit special.</p>
                        <hr class="my-4 text-light">
                        <p class="text-light text-center">Savor the Symphony of Sea-Inspired Delights</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="col-sm-12 d-md-none" data-aos="zoom-in" data-aos-duration="1000">
            <div class="text-center mb-4">
                <h1 class="fs-1 display-4 text-light">BlueWave Bistro & Grill</h1>
            </div>
            <div class="col-sm-6 mx-auto">
                <p class="lead text-light text-center">Welcome to BlueWave Bistro & Grill at Ocean Heaven Hotel.
                    We serve delicious dishes made with fresh local ingredients. Whether you prefer our indoor
                    or outdoor seating, our inviting atmosphere ensures a memorable dining experience. Our
                    friendly staff is here to make your visit special.</p>
                <hr class="my-4 text-light">
                <p class="text-light text-center">Savor the Symphony of Sea-Inspired Delights</p>
            </div>
        </div>
        <!-- End of Mobile View -->
    </div>
    {{-- end of banner --}}

    {{-- greeting from the chef --}}
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;" data-aos="zoom-in"
                        data-aos-duration="1000">
                        Greeting From Head Chef Of Ocean Heaven Hotel
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <div class="col-md-8">
                    <div class="container-xl mt-4">
                        <div class="row">
                            <div class="col-md-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
                                <div class="d-flex justify-content-center">
                                    <div class="image_frame" style="background-image: url('../images/chef.jpg');">
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-7 d-none d-md-block" data-aos="fade-left" data-aos-duration="1000"
                                data-aos-delay="1000">
                                <h4 class="text-center">Welcome to Ocean Heaven Hotel</h4>
                                <p>
                                    Dear Esteemed Guests,

                                    A warm welcome to Ocean Heaven Hotel! I am honored to extend my heartfelt greetings
                                    to you. As the head chef, it is my pleasure to invite you on a culinary journey that
                                    embraces the rich flavors of the sea.

                                    At Ocean Heaven, our team takes great pride in curating a menu that reflects the
                                    finest ingredients and a passion for culinary excellence. Whether you're joining us
                                    for a casual dining experience or a special celebration, we strive to create
                                    memorable moments for you.

                                    Thank you for choosing Ocean Heaven Hotel. We are excited to have you with us and
                                    look forward to serving you delectable dishes that capture the essence of our
                                    coastal paradise.
                                    <br><br>
                                    Best,
                                    Brandon
                                    <br>
                                    Head Chef of Ocean Heaven Hotel
                                    <br><br>
                                    <i class="fa-solid fa-signature fs-3"></i>
                                </p>
                            </div>

                            {{-- mobile view --}}
                            <div class="col-12 d-md-none">
                                <h4 class="text-center">Welcome to Ocean Heaven Hotel</h4>
                                <p class="text-center">
                                    Dear Esteemed Guests,

                                    A warm welcome to Ocean Heaven Hotel! I am honored to extend my heartfelt greetings
                                    to you. As the head chef, it is my pleasure to invite you on a culinary journey that
                                    embraces the rich flavors of the sea.

                                    At Ocean Heaven, our team takes great pride in curating a menu that reflects the
                                    finest ingredients and a passion for culinary excellence. Whether you're joining us
                                    for a casual dining experience or a special celebration, we strive to create
                                    memorable moments for you.

                                    Thank you for choosing Ocean Heaven Hotel. We are excited to have you with us and
                                    look forward to serving you delectable dishes that capture the essence of our
                                    coastal paradise.
                                    <br><br>
                                    Best,
                                    Brandon
                                    <br>
                                    Head Chef of Ocean Heaven Hotel
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
    {{-- end of greeting from the chef --}}

    {{-- start of restaurant menu --}}
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" style="font-family: cursive;">
                        Discover the Flavors of the Sea, <br>
                        Where Every Dish is a Wave of Culinary Delight.
                    </h4>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <button type="button" class="btn btn-outline-dark btn-lg mx-3" data-bs-ripple-init
                        data-bs-ripple-color="light" id="btn_main_menu" onclick="show_mainMenu()">Foods</button>
                    <button type="button" class="btn btn-outline-dark btn-lg mx-3" data-bs-ripple-init
                        data-bs-ripple-color="light" id="btn_drinks_menu" onclick="show_drinksMenu()">Drinks</button>
                    <button type="button" class="btn btn-outline-dark btn-lg mx-3" data-bs-ripple-init
                        data-bs-ripple-color="light" onclick="">Wine</button>
                    {{-- <button type="button" class="btn btn-info mx-3" onclick="show_mainMenu()">Wine</button> --}}
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="container-xl mt-4">
                        <div class="row" id="main_menu" data-aos="fade-up" data-aos-duration="1000">
                            {{-- start of main menu --}}
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/burger.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    Burger</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $12.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Our burgers: Delicious, juicy, and made just
                                            right. Each
                                            bite is
                                            a burst of flavor.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/egg_omelette.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    Egg Omelette</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $11.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Simple, savory, and made your way — our
                                            omelettes, your perfect
                                            start to any day.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/french_toast.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    French Toast</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $11.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Golden slices of delight – our French Toast is
                                            a sweet start to
                                            your
                                            morning or a treat
                                            any time of day.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/pancake.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    Pancake</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $9.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Fluffy stacks of joy – our pancakes are a
                                            delightfully sweet way
                                            to
                                            start your day or
                                            indulge at any moment.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/vegie_omelette.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-8">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    Vegie Omelette</h5>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $12.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Wholesome goodness in every fold - our
                                            veggie omelette, a
                                            nutritious
                                            and flavorful way
                                            to kickstart your day.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/fried_chicken.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    Fried Chicken</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $14.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Crunchy, juicy perfection - our fried chicken
                                            is a delicious
                                            comfort
                                            that always hits
                                            the spot.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>

                        {{-- start of drink menu --}}
                        <div class="row d-none" id="drinks_menu">
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/coca_cola.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    Coca Cola</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $12.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Refreshing moments, fizzy delight - Coca-Cola,
                                            a timeless sip of happiness. Capturing boundless enjoyment.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/orange_fanta.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    Orange Fanta</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $12.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Bubbly sunshine - Orange Fanta, a burst
                                            of
                                            citrus
                                            refreshment in every sip. Making every moment refreshing.
                                        </p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/chocolate_juice.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-8">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    Chocolate Juice</h5>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $12.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Rich indulgence in every sip - Chocolate juice,
                                            a decadent
                                            twist on refreshment.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/green_tea.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    Green Tea</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $12.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Sip tranquility, embrace vitality - Green Tea,
                                            nature's
                                            elixir for a rejuvenating moment.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/lemonade.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    Lemonade</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $12.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Zesty and crisp, a sip of sunshine - Lemonade,
                                            the perfect
                                            thirst-quenching delight.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="../images/mocktails.jpg" alt="Card image cap">
                                    <div class="card-body bg-dark">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title"
                                                    style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                    Mocktails</h5>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="card-title"
                                                        style="color: #00ff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                                        $12.99</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-text text-light">Vibrant, alcohol-free joyrides - Mocktails,
                                            refreshing
                                            every celebration.</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    {{-- end of drink menu --}}
                </div>
            </div>
            {{-- end of main menu --}}
        </div>
    </div>
    </div>
    {{-- end of restaurant menu --}}

    {{-- reservation hotel hall --}}
    <div class="jumbotron p-5" id="hall_reservation">
        <div class="row">
            <div class="col-md-5">
                <h1 class="display-4 mt-5 text-light" id="hall_title">Wedding Hall</h1>
                <p class="lead text-light" id="hall_description">Crafting timeless memories, our wedding reception
                    service ensures every detail is perfect, from the grandest ballroom to the smallest detail. Entrust
                    us with your dream day, and let love's journey begin in elegance and joy.
                </p>
                <hr class="my-4 text-light">
                <p class="text-light">Memories: Treasured Moments That Last a Lifetime.</p>
            </div>
        </div>
    </div>
    {{-- end of reservation hotel hall --}}

    {{-- reviews from the customer --}}
    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-md-12" data-aos="zoom-in-down" data-aos-duration="1000">
                <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- First Set of Cards -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <!-- Card 1 -->
                                    <div class="col">
                                        <div class="testimonial-card">
                                            <img src="/images/ShaniaYan_5.jpg" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                                                dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">Shania Yan</p>
                                            <p>Company XYZ</p>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="col">
                                        <div class="testimonial-card">
                                            <img src="/images/ShaniaYan_5.jpg" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                                                dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">Shania Yan</p>
                                            <p>Company XYZ</p>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="col">
                                        <div class="testimonial-card">
                                            <img src="/images/ShaniaYan_5.jpg" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                                                dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">Shania Yan</p>
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
                                            <img src="/images/ShaniaYan_5.jpg" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                                                dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">Shania Yan</p>
                                            <p>Company XYZ</p>
                                        </div>
                                    </div>

                                    <!-- Card 6 -->
                                    <div class="col">
                                        <div class="testimonial-card">
                                            <img src="/images/ShaniaYan_5.jpg" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                                                dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">Shania Yan</p>
                                            <p>Company XYZ</p>
                                        </div>
                                    </div>

                                    <!-- Card 7 -->
                                    <div class="col">
                                        <div class="testimonial-card">
                                            <img src="/images/ShaniaYan_5.jpg" alt="Testimonial Image"
                                                class="testimonial-img">
                                            <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                                                dolore
                                                magna aliqua."</p>
                                            <p class="testimonial-name">Shania Yan</p>
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
    {{-- end of reviews from the customer --}}

    {{-- Gallery from the hall --}}
    <div class="container-fluid">
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
                                <img src="../images/wedding_memory_1.jpg" alt="..." class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/wedding_memory_2.jpg" alt="..." class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/birthday_memory_1.jpg" alt="..." class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/birthday_memory_2.jpg" alt="..." class="img-thumbnail"><br><br>
                            </div>
                        </div>
                        <div class="row mt-3" data-aos="fade-left" data-aos-duration="1000">
                            <div class="col-md-3">
                                <img src="../images/aniversary_memory_1.jpg" alt="..." class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/aniversary_memory_2.jpg" alt="..." class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/graduation_memory_1.jpg" alt="..." class="img-thumbnail"><br><br>
                            </div>
                            <div class="col-md-3">
                                <img src="../images/graduation_memory_2.jpg" alt="..." class="img-thumbnail"><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of the gallery from the hall --}}

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

{{-- jquery cdn --}}
<script src="/external_js_file/jquery.min.js"></script>

{{-- popper cdn --}}
<script src="/external_js_file/popper.min.js"></script>

{{-- bootstrap bundle cdn --}}
<script src="/external_js_file/bootstrap.bundle.min.js"></script>

{{-- bootstrap javascript cdn --}}
<script src="/external_js_file/bootstrap.min.js"></script>

{{-- link with other js file --}}
<script src="/User_Page/restaurant/restaurant.js"></script>

<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

</html>