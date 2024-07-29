<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- css style --}}
    <link rel="stylesheet" href="/guest_info/style.css">

    {{-- bootstrap CSS cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Animation On Scroll CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Guest Info</title>
</head>

<body>
    {{-- navigation bar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand px-4" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto px-4">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('future-hotel-management-system') }}">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    {{-- end of navigation bar --}}

    {{-- start of form guest --}}
    <div class="container-xl" id="form">
        <div class="card">
            <div class="card-body w-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7">
                            <h2 class="text-center">Fill Your Information</h2>
                            <div class="form-group mt-4">
                                <label for="guest-name">Guest Name</label>
                                <input type="text" class="form-control mt-2">
                            </div>
                            <div class="form-group mt-4">
                                <label for="date-check-in">Date Check In</label>
                                <input type="date" class="form-control mt-2">
                            </div>
                            <div class="form-group mt-4">
                                <label for="date-check-out">Date Check Out</label>
                                <input type="date" class="form-control mt-2">
                            </div>
                            <div class="form-group mt-4">
                                <label for="phone-number">Phone Number</label>
                                <input type="number" class="form-control mt-2">
                            </div>
                            <div class="form-group mt-4">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <button type="button" class="btn btn-success w-100 mt-4">Book</button>
                        </div>
                        <div class="col-md-5">
                            <div class="card"
                                style="background-color:#000000; border-width: 4px; border-style: solid; border-image: linear-gradient(to right, #00ffff, darkorchid) 1;">
                                <div class="d-flex justify-content-center p-3">
                                    <p class="lead mb-0 text-center"
                                        style="color: #ffff00; text-shadow: 3px 3px 4px #000000, -2px 1px 4px #000000;">
                                        Single
                                        Room Promotion</p>
                                </div>
                                <img src="{{ $hotel_image }}" class="card-img-top" alt="Laptop" />
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small">
                                            <a href="#!"
                                                style="color: #fff;
                                            text-shadow: 3px 3px 20px #000000,
                                                -2px 1px 30px #000000;">Original
                                                Price</a>
                                        </p>
                                        <p class="small text-danger">
                                            <s>$99 / Per Night</s>
                                        </p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0"
                                            style="color: #fff;
                                        text-shadow: 3px 3px 20px #000000,
                                            -2px 1px 30px #000000;">
                                            Promotion</h5>
                                        <h5 class="mb-0" style="color: #00ff00;">$59</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="mb-0"
                                            style="color: #fff;
                                        text-shadow: 3px 3px 20px #000000,
                                            -2px 1px 30px #000000;">
                                            Available: <span class="fw-bold" style="color: #00ff00;">6</span></p>
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
                                            <a href="guest-info"
                                                style="font-size: 15px; background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);"
                                                class="btn btn-primary w-100">Book
                                                Room</a><br><br>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#"
                                                style="font-size: 15px; border-image: linear-gradient(to right, #00ffff, darkorchid) 1;"
                                                class="btn btn-default w-100 text-light">Learn More</a>
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
</body>

{{-- bootstrap JS CDN --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

{{-- aos library cdn --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

</html>
