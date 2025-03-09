document.addEventListener("DOMContentLoaded", function () {
    const backToTopButton = document.getElementById('back-to-top');

    // Show or hide the button based on scroll position
    window.onscroll = function () {
        toggleBackToTopButton();
    };

    function toggleBackToTopButton() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            backToTopButton.style.display = "block";
        } else {
            backToTopButton.style.display = "none";
        }
    }

    // Scroll smoothly to the top when the button is clicked
    backToTopButton.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Initially hide the button
    backToTopButton.style.display = "none";
});

document.getElementById('button-increment').addEventListener('click', function () {
    let input = document.getElementById('number');
    let value = parseInt(input.value);
    if (value < input.max) {
        input.value = value + 1;
    }
});

document.getElementById('button-decrement').addEventListener('click', function () {
    let input = document.getElementById('number');
    let value = parseInt(input.value);
    if (value > input.min) {
        input.value = value - 1;
    }
});

const jumbotron = document.getElementById('room_image');
const room_title = document.getElementById('room_title');
const room_description = document.getElementById('room_description');

const list_room_title = ['Standard Room', 'Family Room', 'King Room', 'Residential Room', 'VIP Room', 'Deluxe Room', 'Executive Room', 'Couple Room', 'Single Room'];
const list_room_description = [
    "a comfy space with modern decor. It has a queen or twin beds, a private bathroom, and a work desk. It's a cozy spot for your stay, whether you're here for work or play.",
    "A family room in our hotel is a spacious, welcoming space designed to accommodate families comfortably. It offers ample room and amenities to ensure a pleasant stay for both adults and children.",
    " a spacious and luxurious option for guests seeking extra comfort during their stay. It features a stylish private bathroom with a shower or bathtub, and a cozy seating area for relaxation.",
    "A residential room in our hotel provides a homely atmosphere and essential amenities for a comfortable long-term stay, making it feel like a home away from home.",
    "The VIP room in our hotel is the pinnacle of luxury and comfort. The VIP room ensures an unforgettable experience, where every detail is curated to surpass expectations.",
    "Designed to exceed expectations, our Deluxe Rooms offer an unparalleled blend of elegance and comfort, ensuring an unforgettable stay for our esteemed guests.",
    "Crafted with discerning travelers in mind, embody refined luxury and unparalleled comfort. Immerse yourself in a world of exclusivity to meet your every need during your stay.",
    " where romance meets luxury. Nestled in a serene ambiance, our Couple Rooms offer the perfect sanctuary for you and your loved one to escape and create unforgettable memories together.",
    "Experience comfort and relaxation in our cozy and stylish hotel rooms designed for your most convenience. Providing modern amenities and a welcoming ambiance for a delightful stay."
];

const images = ['../images/Standard Room.jpg', '../images/Family Room.jpg', '../images/King Room.jpg', '../images/Residential Room.jpg',
    '../images/VIP Room.jpg', '../images/Deluxe Room.jpg', '../images/Executive Room.jpg', '../images/Couple Room.jpg', '../images/Single Room.jpg'
]; // Replace with your image URLs

let currentImageIndex = -1;
let currentTextIndex = -1;
let currentDescriptionIndex = -1;

function changeBackgroundImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    currentTextIndex = (currentTextIndex + 1) % list_room_title.length;
    currentDescriptionIndex = (currentDescriptionIndex + 1) % list_room_description.length;

    jumbotron.style.animation = "none"; // Reset animation to 'none'
    setTimeout(() => {
        jumbotron.style.backgroundImage =
            `linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3)),url('${images[currentImageIndex]}')`;
        jumbotron.style.animation = "fadeInUp 1s ease"; // Apply fade-in animation
        room_title.innerHTML = list_room_title[currentTextIndex];
        room_description.innerHTML = list_room_description[currentDescriptionIndex];
    }, 500); // Time to wait before changing the image (in sync with the transition duration)
}

setInterval(changeBackgroundImage, 5000); // Change image every 1000ms (1 second)

function room_full() {
    alert("Room Not Available...");
}

function fetch_room_data(page) {
    $.ajax({
        url: "/hotel-room/fetch_room_data?page=" + page,
        success: function (data) {
            if (data.room_data !== undefined) {
                // Convert data.room_data to an array if it's not already an array
                if (!Array.isArray(data.room_data)) {
                    data.room_data = [data.room_data];
                    data.room_info = [data.room_info];
                    data.room_facilities = [data.room_facilities];
                }

                // Initialize an empty string to accumulate HTML content
                var htmlContent = '';

                data.room_data.forEach(function (room_d) {

                    var room_data_length = room_d.data.length;

                    for (let i = 0; i < room_data_length; i++) {
                        //start of desktop view
                        htmlContent += '<div class="card shadow p-3 bg-white rounded d-none d-md-block" data-aos="fade-left" data-aos-duration="1000">';
                        htmlContent += '<div class="row no-gutters">';
                        htmlContent += '<div class="col-lg-4 col-md-4">';
                        htmlContent += '<img src="../images/' + room_d.data[i].room_type_name + '.jpg" class="card-img-top" alt="...">';
                        htmlContent += '</div>';
                        htmlContent += '<div class="col-lg-8 col-md-8">';
                        htmlContent += '<div class="card-body">';
                        htmlContent += '<div class="row">';
                        htmlContent += '<div class="col-lg-8 col-md-8">';
                        htmlContent += '<h3>' + room_d.data[i].room_type_name + '</h3>';
                        htmlContent += '<div class="row mt-1">';

                        data.room_info.forEach(function (room_i) {
                            var room_available_length = room_i.length;
                            var available_count = 0;

                            for (let j = 0; j < room_available_length; j++) {
                                if (room_d.data[i].room_type_name == room_i[j].room_type_name) {
                                    if (room_i[j].availability_status == 'Available') {
                                        available_count++;
                                    }
                                }
                            }

                            if (available_count > 0) {
                                htmlContent += '<div class="col-lg-7 col-md-7">';
                                htmlContent += '<h5 style="font-size: 15px;">';
                                htmlContent += '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : ' + available_count + ' remains';
                                htmlContent += '</h5>';
                                htmlContent += '</div>';
                            } else {
                                htmlContent += '<div class="col-lg-7 col-md-7">';
                                htmlContent += '<h5 style="font-size: 15px;">';
                                htmlContent += '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : Full';
                                htmlContent += '</h5>';
                                htmlContent += '</div>';
                            }

                            htmlContent += '<div class="col-lg-5 col-md-5">';
                            htmlContent += '<h5 style="font-size: 15px;"><i class="fa-solid fa-user mt-1" style="color: black; font-size: 17px;"></i> Guest: ' + room_d.data[i].room_guest + '</h5>';
                            htmlContent += '</div>';

                            htmlContent += '<div class="col-lg-12 col-md-12">';
                            htmlContent += '<h5 style="font-size: 15px;">';
                            htmlContent += '<i class="fa-solid fa-money-check-dollar mt-1" style="color: green; font-size: 17px;"></i> Payment : ' + room_d.data[i].deposit + '% deposit required';
                            htmlContent += '</h5>';
                            htmlContent += '</div>';
                            htmlContent += '<hr>';

                            data.room_facilities.forEach(function (room_f) {
                                for (let f = 0; f < room_f.length; f++) {
                                    if (room_d.data[i].room_type_name == room_f[f].room_type_name) {
                                        htmlContent += '<div class="col-lg-6 col-md-6">';
                                        htmlContent += '<h5 style="font-size: 15px;"><i class="fa-solid fa-check-square mt-1" style="color: rgb(81, 81, 202);; font-size: 17px;"></i> ' + room_f[f].facility_name + '</h5>';
                                        htmlContent += '</div>';
                                    }
                                }
                            });

                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-lg-4 col-md-4">';
                            htmlContent += '<div class="d-flex justify-content-center">';
                            htmlContent += '<h2 class="text-success">$ ' + room_d.data[i].room_price + '</h2>';
                            htmlContent += '</div>';
                            htmlContent += '<h5 class="text-secondary text-center fs-5"><i>per night</i></h5>';
                            htmlContent += '<div class="d-flex justify-content-center">';
                            htmlContent += '<i class="fa-solid fa-star" style="color: orange;"></i>';
                            htmlContent += '<i class="fa-solid fa-star" style="color: orange;"></i>';
                            htmlContent += '<i class="fa-solid fa-star" style="color: orange;"></i>';
                            htmlContent += '<i class="fa-solid fa-star" style="color: orange;"></i>';
                            htmlContent += '<i class="fa-solid fa-star" style="color: orange;"></i>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="d-flex justify-content-center mt-4">';

                            if (available_count > 0) {
                                htmlContent += '<a href="/room-booking/' + encodeURIComponent(room_d.data[i].room_type_name) + '" class="btn btn-default text-light" style="background-color: #3b5998">Book Room </a>';
                            } else {
                                htmlContent += '<a type="button" onclick="room_full()" class="btn btn-default bg-secondary text-light">Book Room</a>';
                            }
                        });

                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        // end of room card (desktop view)

                        // start of room card (mobile view)
                        htmlContent += '<div class="card border border-secondary shadow-lg shadow-light shadow-offset-down-sm shadow-intensity-lg bg-white rounded d-md-none">';
                        htmlContent += '<div class="row no-gutters">';
                        htmlContent += '<div class="col-md-4">';
                        htmlContent += '<img src="../images/' + room_d.data[i].room_type_name + '.jpg" class="card-img-top" alt="...">';
                        htmlContent += '</div>';
                        htmlContent += '<div class="col-md-8">';
                        htmlContent += '<div class="card-body">';
                        htmlContent += '<div class="row">';
                        htmlContent += '<div class="col-md-8">';
                        htmlContent += '<div class="row">';
                        htmlContent += '<div class="col-12">';
                        htmlContent += '<h3>' + room_d.data[i].room_type_name + '</h3>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '<div class="row mt-1">';

                        data.room_info.forEach(function (room_i) {
                            var room_available_length = room_i.length;
                            var available_count = 0;

                            for (let j = 0; j < room_available_length; j++) {
                                if (room_d.data[i].room_type_name == room_i[j].room_type_name) {
                                    if (room_i[j].availability_status == 'Available') {
                                        available_count++;
                                    }
                                }
                            }

                            if (available_count > 0) {
                                htmlContent += '<div class="col-7">';
                                htmlContent += '<h5 style="font-size: 15px;">';
                                htmlContent += '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : ' + available_count + ' remains';
                                htmlContent += '</h5>';
                                htmlContent += '</div>';
                            } else {
                                htmlContent += '<div class="col-7">';
                                htmlContent += '<h5 style="font-size: 15px;">';
                                htmlContent += '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : Full';
                                htmlContent += '</h5>';
                                htmlContent += '</div>';
                            }

                            htmlContent += '<div class="col-5">';
                            htmlContent += '<h5 style="font-size: 15px;"><i class="fa-solid fa-user mt-1" style="color: black; font-size: 17px;"></i> Guest: ' + room_d.data[i].room_guest + '</h5>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-12">';
                            htmlContent += '<h5 style="font-size: 15px;">';
                            htmlContent += '<i class="fa-solid fa-money-check-dollar mt-1" style="color: green; font-size: 17px;"></i> Payment : ' + room_d.data[i].deposit + '% deposit required';
                            htmlContent += '</h5>';
                            htmlContent += '</div>';
                            htmlContent += '<hr>';
                            htmlContent += '<h5 style="font-size: 15px;" class="text-primary fw-bold">Facility Include: </h5>';

                            data.room_facilities.forEach(function (room_f) {
                                for (let f = 0; f < room_f.length; f++) {
                                    if (room_d.data[i].room_type_name == room_f[f].room_type_name) {
                                        htmlContent += '<div class="col-lg-7 col-md-6">';
                                        htmlContent += '<h5 style="font-size: 15px;"><i class="fa-solid fa-check-square mt-1" style="color: rgb(81, 81, 202);; font-size: 17px;"></i> ' + room_f[f].facility_name + '</h5>';
                                        htmlContent += '</div>';
                                    }
                                }
                            });

                            htmlContent += '<hr>';
                            htmlContent += '<h5 class="text-success" style="font-size: 15px;"><i class="fa-solid fa-money-bill-1 mt-1" style="color: green; font-size: 17px;"></i><b> Price : $ ' + room_d.data[i].room_price + '</b> / <small class="text-dark">night</small></h5>';
                            htmlContent += '<div class="col-12">';
                            htmlContent += '<div class="d-flex align-items-center">';
                            htmlContent += '<h5 class="mr-2 mt-1">Rating:</h5>';
                            htmlContent += '<div class="d-flex px-1">';
                            htmlContent += '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                            htmlContent += '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                            htmlContent += '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                            htmlContent += '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                            htmlContent += '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="d-flex justify-content-center mt-2">';

                            if (available_count > 0) {
                                htmlContent += '<a href="/room-booking/' + encodeURIComponent(room_d.data[i].room_type_name) + '" class="btn btn-default text-light w-100" style="background-color: #3b5998">Book Room </a>';
                            } else {
                                htmlContent += '<a type="button" onclick="room_full()" class="btn btn-default bg-secondary text-light">Book Room</a>';
                            }
                        });

                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '<br>';
                        // end of room card (mobile view)
                    }
                });

                // Update the #room_card element with the accumulated HTML content
                $('#room_card').html(htmlContent);
                AOS.init();
            }
        }
    });
}

// query specific selection using ajax request
$('#btn_filterRoom').on("click", function () {
    var facilities = $('input[name="facilities[]"]:checked').map(function () {
        return $(this).val();
    }).get();
    var price_min = $('#priceRange').val();
    var price_max = $('#priceMax').val();
    var room_guest = $('#number').val();

    $.ajax({
        url: "/hotel-room-selection",
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            "facilities": facilities,
            "price_min": price_min, //get the data and store in variable
            "price_max": price_max, //get the data and store in variable
            "room_guest": room_guest,
        },
        success: function (response) {
            if (!Array.isArray(response.room_data)) {
                response.room_data = [response.room_data];
                response.room_info = [response.room_info];
                response.room_facilities = [response.room_facilities];
            }

            var htmlContent = '';

            // Iterate over each item in the room_data array
            response.room_data.forEach(function (room_d) {
                var room_data_length = room_d.data.length;

                for (let i = 0; i < room_data_length; i++) {
                    // start of room card (desktop view)
                    htmlContent += '<div class="card shadow p-3 bg-white rounded d-none d-md-block" data-aos="fade-left" data-aos-duration="1000">';
                    htmlContent += '<div class="row no-gutters">';
                    htmlContent += '<div class="col-lg-4 col-md-4">';
                    htmlContent += '<img src="../images/' + room_d.data[i].room_type_name + '.jpg" class="card-img-top" alt="...">';
                    htmlContent += '</div>';
                    htmlContent += '<div class="col-lg-8 col-md-8">';
                    htmlContent += '<div class="card-body">';
                    htmlContent += '<div class="row">';
                    htmlContent += '<div class="col-lg-8 col-md-8">';
                    htmlContent += '<h3>' + room_d.data[i].room_type_name + '</h3>';
                    htmlContent += '<div class="row mt-1">';

                    response.room_info.forEach(function (room_i) {
                        var room_available_length = room_i.length;
                        var available_count = 0;

                        for (let j = 0; j < room_available_length; j++) {
                            if (room_d.data[i].room_type_name == room_i[j]
                                .room_type_name) {
                                if (room_i[j].availability_status == 'Available') {
                                    available_count++;
                                }
                            }
                        }

                        if (available_count > 0) {
                            htmlContent += '<div class="col-lg-7 col-md-7">';
                            htmlContent += '<h5 style="font-size: 15px;">';
                            htmlContent += '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : ' + available_count + ' remains';
                            htmlContent += '</h5>';
                            htmlContent += '</div>';
                        } else {
                            htmlContent += '<div class="col-lg-7 col-md-7">';
                            htmlContent += '<h5 style="font-size: 15px;">';
                            htmlContent += '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : Full';
                            htmlContent += '</h5>';
                            htmlContent += '</div>';
                        }

                        htmlContent += '<div class="col-lg-5 col-md-5">';
                        htmlContent += '<h5 style="font-size: 15px;"><i class="fa-solid fa-user mt-1" style="color: black; font-size: 17px;"></i> Guest: ' + room_d.data[i].room_guest + '</h5>';
                        htmlContent += '</div>';
                        htmlContent += '<div class="col-lg-12 col-md-12">';
                        htmlContent += '<h5 style="font-size: 15px;">';
                        htmlContent += '<i class="fa-solid fa-money-check-dollar mt-1" style="color: green; font-size: 17px;"></i> Payment : ' + room_d.data[i].deposit + '% deposit required';
                        htmlContent += '</h5>';
                        htmlContent += '</div>';
                        htmlContent += '<hr>';

                        response.room_facilities.forEach(function (room_f) {
                            for (let f = 0; f < room_f.length; f++) {
                                if (room_d.data[i].room_type_name == room_f[f].room_type_name) {
                                    htmlContent += '<div class="col-lg-6 col-md-6">';
                                    htmlContent += '<h5 style="font-size: 15px;"><i class="fa-solid fa-check-square mt-1" style="color: rgb(81, 81, 202);; font-size: 17px;"></i> ' + room_f[f].facility_name + '</h5>';
                                    htmlContent += '</div>';
                                }
                            }
                        });

                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '<div class="col-lg-4 col-md-4">';
                        htmlContent += '<div class="d-flex justify-content-center">';
                        htmlContent += '<h2 class="card-title text-success">$ ' + room_d.data[i].room_price + '</h2>';
                        htmlContent += '</div>';
                        htmlContent += '<h5 class="text-secondary text-center fs-5"><i>per night</i></h5>';
                        htmlContent += '<div class="d-flex justify-content-center">';
                        htmlContent += '<i class="fa-solid fa-star" style="color: orange;"></i>';
                        htmlContent += '<i class="fa-solid fa-star" style="color: orange;"></i>';
                        htmlContent += '<i class="fa-solid fa-star" style="color: orange;"></i>';
                        htmlContent += '<i class="fa-solid fa-star" style="color: orange;"></i>';
                        htmlContent += '<i class="fa-solid fa-star" style="color: orange;"></i>';
                        htmlContent += '</div>';
                        htmlContent += '<div class="d-flex justify-content-center mt-4">';

                        if (available_count > 0) {
                            htmlContent += '<a href="/room-booking/' + encodeURIComponent(room_d.data[i].room_type_name) + '" class="btn btn-default text-light" style="background-color: #3b5998">Book Room </a>';
                        } else {
                            htmlContent += '<a type="button" onclick="room_full()" class="btn btn-default bg-secondary text-light">Book Room</a>';
                        }
                    });
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    // end of room card (desktop view)

                    // start of room card (mobile view)
                    htmlContent += '<div class="card border border-secondary shadow-lg shadow-light shadow-offset-down-sm shadow-intensity-lg bg-white rounded d-md-none">';
                    htmlContent += '<div class="row no-gutters">';
                    htmlContent += '<div class="col-md-4">';
                    htmlContent += '<img src="../images/' + room_d.data[i].room_type_name + '.jpg" class="card-img-top" alt="...">';
                    htmlContent += '</div>';
                    htmlContent += '<div class="col-md-8">';
                    htmlContent += '<div class="card-body">';
                    htmlContent += '<div class="row">';
                    htmlContent += '<div class="col-md-8">';
                    htmlContent += '<div class="row">';
                    htmlContent += '<div class="col-12">';
                    htmlContent += '<h3>' + room_d.data[i].room_type_name + '</h3>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '<div class="row mt-1">';

                    response.room_info.forEach(function (room_i) {
                        var room_available_length = room_i.length;
                        var available_count = 0;

                        for (let j = 0; j < room_available_length; j++) {
                            if (room_d.data[i].room_type_name == room_i[j]
                                .room_type_name) {
                                if (room_i[j].availability_status == 'Available') {
                                    available_count++;
                                }
                            }
                        }

                        if (available_count > 0) {
                            htmlContent += '<div class="col-7">';
                            htmlContent += '<h5 style="font-size: 15px;">';
                            htmlContent += '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : ' + available_count + ' remains';
                            htmlContent += '</h5>';
                            htmlContent += '</div>';
                        } else {
                            htmlContent += '<div class="col-7">';
                            htmlContent += '<h5 style="font-size: 15px;">';
                            htmlContent += '<i class="fa-solid fa-bell mt-1" style="color: crimson; font-size: 17px;"></i>  Status : Full';
                            htmlContent += '</h5>';
                            htmlContent += '</div>';
                        }

                        htmlContent += '<div class="col-5">';
                        htmlContent += '<h5 style="font-size: 15px;"><i class="fa-solid fa-user mt-1" style="color: black; font-size: 17px;"></i> Guest: ' + room_d.data[i].room_guest + '</h5>';
                        htmlContent += '</div>';
                        htmlContent += '<div class="col-12">';
                        htmlContent += '<h5 style="font-size: 15px;">';
                        htmlContent += '<i class="fa-solid fa-money-check-dollar mt-1" style="color: green; font-size: 17px;"></i> Payment : ' + room_d.data[i].deposit + '% deposit required';
                        htmlContent += '</h5>';
                        htmlContent += '</div>';
                        htmlContent += '<hr>';
                        htmlContent += '<h5 style="font-size: 15px;" class="text-primary fw-bold">Facility Include: </h5>';

                        response.room_facilities.forEach(function (room_f) {
                            for (let f = 0; f < room_f.length; f++) {
                                if (room_d.data[i].room_type_name == room_f[f].room_type_name) {
                                    htmlContent += '<div class="col-lg-7 col-md-6">';
                                    htmlContent += '<h5 style="font-size: 15px;"><i class="fa-solid fa-check-square mt-1" style="color: rgb(81, 81, 202);; font-size: 17px;"></i> ' + room_f[f].facility_name + '</h5>';
                                    htmlContent += '</div>';
                                }
                            }
                        });

                        htmlContent += '<hr>';
                        htmlContent += '<h5 class="text-success" style="font-size: 15px;"><i class="fa-solid fa-money-bill-1 mt-1" style="color: green; font-size: 17px;"></i> <b> Price : $ ' + room_d.data[i].room_price + '</b> / <small class="text-dark">night</small></h5>';
                        htmlContent += '<div class="col-12">';
                        htmlContent += '<div class="d-flex align-items-center">';
                        htmlContent += '<h5 class="mr-2 mt-1">Rating:</h5>';
                        htmlContent += '<div class="d-flex px-1">';
                        htmlContent += '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                        htmlContent += '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                        htmlContent += '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                        htmlContent += '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                        htmlContent += '<i class="fa-solid fa-star" style="color: orange; font-size: 17px;"></i>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '</div>';
                        htmlContent += '<div class="d-flex justify-content-center mt-2">';

                        if (available_count > 0) {
                            htmlContent += '<a href="/room-booking/' + encodeURIComponent(room_d.data[i].room_type_name) + '" class="btn btn-default text-light w-100" style="background-color: #3b5998">Book Room </a>';
                        } else {
                            htmlContent += '<a type="button" onclick="room_full()" class="btn btn-default w-100 bg-secondary text-light">Book Room</a>';
                        }
                    });

                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '</div>';
                    htmlContent += '<br>';
                    // end of room card (mobile view)
                }
            });

            // Insert the generated HTML into the target element
            $('#room_card').html(htmlContent);
            AOS.init();

            // applied pagination links to the query
            $('#pagination-links').html(response.pagination);
        },
        error: function (xhr, status, error) {
            // Handle error response
            console.error(xhr.responseText);
        }
    });
});