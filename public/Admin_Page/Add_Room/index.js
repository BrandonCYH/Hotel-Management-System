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
                            htmlContent += '<div class="col-lg-7 col-md-7">';
                            htmlContent += '<h5 style="font-size: 15px;"><i class="fa-solid fa-circle-up mt-1" style="color: orange; font-size: 17px;"></i> Upgrade: <span class="text-success fw-bold">Available</span></h5>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-lg-5 col-md-5">';
                            htmlContent += '<h5 class="text-success" style="font-size: 15px;"><i class="fa-solid fa-check mt-1" style="color: green; font-size: 17px;"></i> Refundable </h5>';
                            htmlContent += '</div>';
                            htmlContent += '<hr>';
                            htmlContent += '<div class="col-lg-12 col-md-12">';
                            htmlContent += '<h5 style="font-size: 15px;">';
                            htmlContent += '<i class="fa-solid fa-money-check-dollar mt-1" style="color: green; font-size: 17px;"></i> Payment : ' + room_d.data[i].deposit + '% deposit required';
                            htmlContent += '</h5>';
                            htmlContent += '</div>';
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
                            htmlContent += '<div class="col-7">';
                            htmlContent += '<h5 style="font-size: 15px;"><i class="fa-solid fa-circle-up mt-1" style="color: orange; font-size: 17px;"></i> Upgrade: <span class="text-success"><b>Available</b></span></h5>';
                            htmlContent += '</div>';
                            htmlContent += '<div class="col-5">';
                            htmlContent += '<h5 class="text-success" style="font-size: 15px;"><i class="fa-solid fa-check mt-1" style="color: green; font-size: 17px;"></i> Refundable </h5>';
                            htmlContent += '</div>';
                            htmlContent += '<hr>';
                            htmlContent += '<div class="col-12">';
                            htmlContent += '<h5 style="font-size: 15px;">';
                            htmlContent += '<i class="fa-solid fa-money-check-dollar mt-1" style="color: green; font-size: 17px;"></i> Payment : ' + room_d.data[i].deposit + '% deposit required';
                            htmlContent += '</h5>';
                            htmlContent += '</div>';
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

document.addEventListener("DOMContentLoaded", function () {
    var updateRoomModal = document.getElementById("updateRoomModal");
    var facilitiesContainer = document.getElementById("roomFacilities");
    var list_facilitiesContainer = document.getElementById("list_roomFacilities");

    updateRoomModal.addEventListener("show.bs.modal", function (event) {
        var button = event.relatedTarget; // Button that triggered the modal
        var roomName = button.getAttribute("data-roomname"); // Get room name

        facilitiesContainer.innerHTML = ""; // Clear previous checkboxes
        list_facilitiesContainer.innerHTML = "";

        $.ajax({
            // url: "/hotel-room/fetch_room_data?page=" + page,
            url: "/add-room/" + roomName,
            success: function (response) {
                console.log(response);

                var existingFacilities = response.room_facilities.map(facility => facility.facility_name);

                response.room_data.forEach(function (room_info) {
                    document.getElementById("roomName").value = room_info.room_type_name;
                    document.getElementById("roomPrice").value = room_info.room_price;
                    document.getElementById("roomCapacity").value = room_info.room_guest;
                    document.getElementById("roomDescription").value = room_info.room_description;
                });

                response.room_facilities.forEach(function (room_facilities) {
                    var checkbox = `
                    <div class="form-check">
                        <input class="form-check-input editable" type="checkbox" checked disabled>
                        <label class="form-check-label">${room_facilities.facility_name}</label>
                    </div>
                    `;

                    facilitiesContainer.innerHTML += checkbox;
                })

                response.list_room_facilities.forEach(function (list_room_facilities) {
                    if (!existingFacilities.includes(list_room_facilities.facility_name)) {
                        var checkbox = `
                        <div class="form-check">
                            <input class="form-check-input editable" type="checkbox" value="${list_room_facilities.facility_name}">
                            <label class="form-check-label">${list_room_facilities.facility_name}</label>
                        </div>
                        `;

                        list_facilitiesContainer.innerHTML += checkbox;
                    }
                })
            }
        })
    });
});

document.getElementById("editButton").addEventListener("click", function () {
    // Enable all form fields
    document.querySelectorAll(".editable").forEach(el => {
        el.removeAttribute("readonly");
        el.removeAttribute("disabled");
    });

    // Show Save & Cancel buttons
    document.getElementById("saveButton").style.display = "inline-block";
    document.getElementById("cancelButton").style.display = "inline-block";
    document.getElementById("list_roomFacilities").style.display = "inline-block";

    // Hide Edit button
    this.style.display = "none";
});

document.getElementById("cancelButton").addEventListener("click", function () {
    // Revert fields to readonly/disabled
    document.querySelectorAll(".editable").forEach(el => {
        el.setAttribute("readonly", true);
        el.setAttribute("disabled", true);
    });

    // Hide Save & Cancel buttons
    document.getElementById("saveButton").style.display = "none";
    document.getElementById("list_roomFacilities").style.display = "none";
    this.style.display = "none";

    // Show Edit button again
    document.getElementById("editButton").style.display = "inline-block";
});

document.getElementById("roomForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent actual form submission

    alert("Room details updated successfully!");

    // Revert fields to readonly/disabled after saving
    document.querySelectorAll(".editable").forEach(el => {
        el.setAttribute("readonly", true);
        el.setAttribute("disabled", true);
    });

    // Hide Save & Cancel buttons
    document.getElementById("saveButton").style.display = "none";
    document.getElementById("cancelButton").style.display = "none";

    // Show Edit button again
    document.getElementById("editButton").style.display = "inline-block";
});