document.getElementById('agreeCheckbox').addEventListener('change', function () {
    let payButton = document.getElementById('payButton');
    payButton.classList.toggle('disabled', !this.checked);
});

document.getElementById("cancel-booking").addEventListener("click", function (event) {
    event.preventDefault();

    let bookingID = this.getAttribute("data-booking-id"); //get booking id
    let roomType = this.getAttribute("data-room-type"); //get room type

    Swal.fire({
        title: "Are you sure?",
        text: "Your booking will be permanently cancelled!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, cancel it!"
    }).then((result) => {
        if (result.isConfirmed) {
            fetch("/cancel-booking", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                body: JSON.stringify({ booking_id: bookingID })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire("Cancelled!", "Your booking has been cancelled.", "success");
                        setTimeout(() => window.location.href = "/hotel-room", 1500);
                    } else {
                        Swal.fire("Error!", "Something went wrong.", "error");
                    }
                })
                .catch(error => {
                    Swal.fire("Error!", "Failed to cancel booking.", "error");
                });
        }
    });
});
