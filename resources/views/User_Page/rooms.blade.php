<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../User_Page/rooms/rooms.css">

    {{-- website icon --}}
    <link rel="icon" href="../images/ocean_heaven.png" type="image/x-icon">
    <link rel="shortcut icon" href="../images/ocean_heaven.png" type="image/x-icon">

    {{-- bootstrap CSS cdn --}}
    <link rel="stylesheet" href="/external_css_file/bootstrap.min.css">

    {{-- bootstrap font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet" href="/external_css_file/bootstrap-datepicker.min.css">

    <!-- Animation On Scroll CDN -->
    <link rel="stylesheet" href="/external_css_file/aos.css">

    {{-- sweet alert css cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css">

    <title>Hotel Room</title>
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
                        <a class="nav-link mx-2 dropdown-toggle" style="font-size: 17px;" href="#"
                            id="features_menu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu" aria-labelledby="features_menu">
                            <a class="dropdown-item" style="font-size: 17px;" href="{{ route('about-us') }}">About
                                Us</a>
                            <a class="dropdown-item" style="font-size: 17px;"
                                href="{{ route('terms-and-conditions') }}">Terms And Conditions</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link active mx-2 dropdown-toggle" style="font-size: 17px;" href="#"
                            id="facilities_menu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Facilities
                        </a>
                        <div class="dropdown-menu" aria-labelledby="facilities_menu">
                            <a class="dropdown-item" style="font-size: 17px; color: #000080; font-weight: bold;"
                                href="{{ route('hotel-room') }}">Our
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
                        <a href="{{ route('hotel-room') }}" type="button"
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

    {{-- intro of the hotel --}}
    <div class="jumbotron p-4 p-md-5" id="room_image">
        <div class="row">
            <div class="col-md-12 text-center" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="display-4 text-light" id="room_title">Single Room</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-lg-5 col-md-9" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
                    <p class="lead text-light text-center" id="room_description"
                        style="font-size: clamp(1rem, 1.2vw, 1.5rem);">Experience comfort and relaxation in
                        our cozy and stylish hotel rooms designed for your most convenience. Providing modern amenities
                        and a welcoming ambiance for a delightful stay.
                    </p>
                    <hr class="my-4 text-light">
                    <p class="text-light text-center" style="font-size: clamp(1rem, 1.2vw, 1.5rem);">
                        Come, stay and enjoy your day.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- end of intro of the hotel --}}

    {{-- Each Hotel room description --}}
    <div class="container-fluid">
        <div class="row mt-3 mt-md-5">
            <div class="col-lg-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-center fs-3" data-aos="zoom-in" data-aos-duration="1000">
                        Our Hotel Have Many Type Of Guest Room That Can Fufill Your Needs
                    </h4>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="container-xl mt-lg-5 mt-md-3 mt-3">
                        <div class="row">
                            {{-- start of filter hotel room form --}}
                            <div class="col-lg-3 col-md-12">
                                <div class="card" data-aos="fade-right" data-aos-duration="1000"
                                    data-aos-delay="1000">
                                    <div class="card-header">Choose Your Hotel Room</div>
                                    <div class="card-body">
                                        {{-- start of list services --}}
                                        <div class="row">
                                            @php
                                                $added_facilities = []; // Store added facilities
                                            @endphp

                                            @foreach ($room_data as $room_d)
                                                @foreach ($room_facilities->where('room_type_name', $room_d->room_type_name) as $list_facilities)
                                                    @if (!in_array($list_facilities->facility_name, $added_facilities))
                                                        <div class="col-12 mb-1">
                                                            <input class="form-check-input mx-1" type="checkbox"
                                                                value="{{ $list_facilities->facility_name }}"
                                                                id="flexCheckDefault" name="facilities[]">
                                                            <label class="form-check-label"
                                                                for="{{ $list_facilities->facility_name }}">
                                                                {{ $list_facilities->facility_name }}
                                                            </label>
                                                        </div>
                                                        @php
                                                            // Add to list to prevent duplicate
                                                            $added_facilities[] = $list_facilities->facility_name;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                        <hr>
                                        {{-- end of list services --}}

                                        {{-- start of guest capacity --}}
                                        <label for="guest-capacity">Guest Capacity</label>
                                        <div class="input-group mt-2">
                                            <button class="btn btn-outline-secondary" type="button"
                                                id="button-decrement">-</button>
                                            <input type="number" class="form-control text-center" id="number"
                                                value="0" min="0" max="100" name="room_guest">
                                            <button class="btn btn-outline-secondary" type="button"
                                                id="button-increment">+</button>
                                        </div>
                                        {{-- end of guest capacity --}}

                                        {{-- start of price range --}}
                                        <div class="form-group">
                                            <label for="priceRange" class="mt-2">Price Range:</label>
                                            <div class="input-group mt-2">
                                                <input type="text" name="price_before" id="priceRange"
                                                    class="form-control" readonly>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">-</span>
                                                </div>
                                                <input type="text" name="price_after" id="priceMax"
                                                    class="form-control" readonly>
                                            </div>
                                            <input type="range" class="custom-range" id="priceSlider"
                                                min="0" max="1000" step="10" value="1000">
                                        </div>
                                        {{-- end of price range --}}

                                        <input type="submit" id="btn_filterRoom" class="btn btn-success w-100 mt-2"
                                            value="Search Room"><br>
                                        <div id="pagination-links" class="pagination-links">
                                            @foreach ($room_data->links()->elements[0] as $page => $url)
                                                <a href="{{ $url }}"
                                                    class="page-link {{ $page == $room_data->currentPage() ? 'active' : '' }}">{{ $page }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            {{-- end of filter hotel room form --}}

                            <div class="col-lg-9 col-md-12" id="room_card">
                                {{-- start of room card (desktop mobile view) --}}
                                @foreach ($room_data as $room_d)
                                    <div class="card shadow p-md-3 bg-white rounded" data-aos="fade-left"
                                        data-aos-duration="1000">
                                        <div class="row no-gutters">
                                            <div class="col-lg-4 col-md-4">
                                                <img src="{{ asset('../images/' . $room_d->room_type_name . '.jpg') }}"
                                                    class="card-img-top" alt="{{ $room_d->room_type_name }}">
                                            </div>
                                            <div class="col-lg-8 col-md-8">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-12">
                                                            <h3>{{ $room_d->room_type_name }}</h3>
                                                            <div class="row">
                                                                @php
                                                                    $available_count = 0;
                                                                @endphp

                                                                @foreach ($room_info as $room_i)
                                                                    @if ($room_d->room_type_name == $room_i->room_type_name)
                                                                        @if (strpos(strtolower($room_i->availability_status), 'available') == false)
                                                                            @php
                                                                                $available_count++;
                                                                            @endphp
                                                                        @endif
                                                                    @endif
                                                                @endforeach

                                                                <div class="col-lg-6 col-7">
                                                                    <h5 style="font-size: 15px;">
                                                                        <i class="fa-solid fa-bell mt-1"
                                                                            style="color: crimson; font-size: 17px;"></i>
                                                                        Status :
                                                                        {{ $available_count > 0 ? "$available_count Remains" : 'Full' }}
                                                                    </h5>
                                                                </div>
                                                                <div class="col-lg-6 col-5">
                                                                    <h5 style="font-size: 15px;">
                                                                        <i class="fa-solid fa-user mt-1"
                                                                            style="color: black; font-size: 17px;"></i>
                                                                        Guest : {{ $room_d->room_guest }}
                                                                    </h5>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <h5 style="font-size: 15px;">
                                                                        <i class="fa-solid fa-money-check-dollar mt-1"
                                                                            style="color: green; font-size: 17px;"></i>
                                                                        Payment : {{ $room_d->deposit }}% deposit
                                                                        required
                                                                    </h5>
                                                                </div>
                                                                <hr>

                                                                <h5 style="font-size: 15px;"
                                                                    class="text-primary fw-bold d-md-none">Facility
                                                                    Include: </h5>
                                                                @foreach ($room_facilities->where('room_type_name', $room_d->room_type_name) as $room_f)
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <h5 style="font-size: 15px;">
                                                                            <i class="fa-solid fa-check-square mt-1"
                                                                                style="color: rgb(81, 81, 202); font-size: 17px;"></i>
                                                                            {{ $room_f->facility_name }}
                                                                        </h5>
                                                                    </div>
                                                                @endforeach
                                                                <hr class="d-md-none">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="d-flex justify-content-center">
                                                                <h2 class="text-success d-none d-md-block">$
                                                                    {{ $room_d->room_price }}</h2>
                                                            </div>
                                                            <h5
                                                                class="text-secondary text-center fs-5 d-none d-md-block">
                                                                per night</h5>

                                                            <div class="d-none d-md-block">
                                                                <div class="d-flex justify-content-center">
                                                                    <i class="fa-solid fa-star"
                                                                        style="color: orange;"></i>
                                                                    <i class="fa-solid fa-star"
                                                                        style="color: orange;"></i>
                                                                    <i class="fa-solid fa-star"
                                                                        style="color: orange;"></i>
                                                                    <i class="fa-solid fa-star"
                                                                        style="color: orange;"></i>
                                                                    <i class="fa-solid fa-star"
                                                                        style="color: orange;"></i>
                                                                </div>
                                                            </div>

                                                            <h5 class="text-success d-md-none"
                                                                style="font-size: 15px;">
                                                                <i class="fa-solid fa-money-bill-1 mt-1"
                                                                    style="color: green; font-size: 17px;"></i>
                                                                <b>Price : $ {{ $room_d->room_price }}</b>
                                                                / <small class="text-dark">per night</small>
                                                            </h5>

                                                            <div class="d-flex align-items-center d-md-none">
                                                                <h5 class="mr-2 mt-2">Rating:</h5>
                                                                <div class="d-flex px-1">
                                                                    <i class="fa-solid fa-star"
                                                                        style="color: orange; font-size: 17px;"></i>
                                                                    <i class="fa-solid fa-star"
                                                                        style="color: orange; font-size: 17px;"></i>
                                                                    <i class="fa-solid fa-star"
                                                                        style="color: orange; font-size: 17px;"></i>
                                                                    <i class="fa-solid fa-star"
                                                                        style="color: orange; font-size: 17px;"></i>
                                                                    <i class="fa-solid fa-star"
                                                                        style="color: orange; font-size: 17px;"></i>
                                                                </div>
                                                            </div>
                                                            @if ($available_count > 0)
                                                                <div
                                                                    class="d-flex justify-content-center mt-md-4 mt-2">
                                                                    <a href="{{ route('room-booking-details', ['room_type_name' => $room_d->room_type_name]) }}"
                                                                        class="btn btn-default text-light w-100"
                                                                        style="background-color: #3b5998">
                                                                        Book Room
                                                                    </a>
                                                                </div>
                                                            @else
                                                                <div
                                                                    class="d-flex justify-content-center mt-md-4 mt-2">
                                                                    <a type="button"
                                                                        onclick="room_full('{{ $room_d->room_type_name }}')"
                                                                        class="btn btn-default bg-secondary text-light w-100">Book
                                                                        Room</a>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    {{-- end of room card (desktop mobile view) --}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of hotel room description --}}

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

<!-- Bootstrap bundle JS -->
<script src="/external_js_file/bootstrap.bundle.min.js"></script>

<!-- Bootstrap JS -->
<script src="/external_js_file/bootstrap.min.js"></script>

{{-- sweet alert js cdn --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>

{{-- link with other js file --}}
<script src="../User_Page/rooms/rooms.js"></script>

{{-- start of navigation bar function --}}
<script>
    AOS.init({
        disable: 'mobile'
    });

    $(document).ready(function() {
        var priceSlider = document.getElementById('priceSlider');
        var priceRange = document.getElementById('priceRange');
        var priceMax = document.getElementById('priceMax');

        priceSlider.oninput = function() {
            var min = this.value;
            var max = parseInt(this.max);
            priceRange.value = '$' + min;
            priceMax.value = '$' + max;
        };
    });

    $(document).on('click', '.page-link', function(event) {
        event.preventDefault();
        $('.page-link').removeClass('active');
        $(this).addClass('active');
        var page = $(this).attr('href').split('page=')[1];
        fetch_room_data(page);
    });
</script>
{{-- end of navigation bar function --}}

</html>
