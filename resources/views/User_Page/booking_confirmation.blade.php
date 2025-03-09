<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/external_css_file/bootstrap.min.css">

    <!-- Bootstrap Icons (Optional) -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">

    {{-- link with other css file --}}
    <link rel="stylesheet" href="/User_Page/booking_confirmation/booking_confirmation.css">
</head>

<body>
    <div class="container">
        <div class="confirmation-card">
            <!-- Confirmation Message -->
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <i class="bi bi-check-circle-fill confirmation-icon"></i>
                    <h2 class="card-title mt-3">Booking Confirmed!</h2>
                    <p class="card-text">Thank you for booking with us. Your reservation has been successfully
                        completed.</p>
                    <a href="{{route('main-page')}}" class="btn btn-success mt-3">Back to Home</a>
                </div>
            </div>

            <!-- Booking Summary -->
            <div class="card shadow-sm summary-card">
                <div class="card-header">
                    <h5 class="mb-0">Booking Details</h5>
                </div>
                <div class="card-body">
                    @foreach ($guest_bookingInfo as $booking_info)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Booking ID:</strong> <span>{{$booking_info->booking_id}}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Guest Name:</strong> <span>{{$booking_info->guest_name}}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Room Type:</strong> <span>{{$booking_info->room_type_name}}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Room Number:</strong> <span>{{$booking_info->room_number}}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Check-in Date:</strong> <span>{{$booking_info->check_in_date}}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Check-out Date:</strong> <span>{{$booking_info->check_out_date}}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Total Price:</strong> <span>${{$booking_info->room_price}}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Payment Status:</strong> <span
                                class="badge bg-success">{{$booking_info->booking_status}}</span>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>

            <!-- Hotel Information -->
            <div class="card shadow-sm mt-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Ocean Heaven Hotel</h5>
                    <p class="card-text">Austin, Texas</p>
                    <p class="card-text">Phone: + 01 234 567 88</p>
                    <a href="#" class="btn btn-outline-secondary"><i class="bi bi-telephone"></i> Contact
                        Hotel</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="/external_js_file/bootstrap.bundle.min.js"></script>
</body>

</html>