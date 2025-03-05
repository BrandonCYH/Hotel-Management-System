<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (Optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .confirmation-card {
            max-width: 600px;
            margin: 50px auto;
        }

        .confirmation-icon {
            font-size: 80px;
            color: #28a745;
        }

        .summary-card {
            margin-top: 20px;
        }

        .card-header {
            background-color: #28a745;
            color: white;
        }
    </style>
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
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Booking ID:</strong> <span>SDK12345</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Guest Name:</strong> <span>John Doe</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Room Type:</strong> <span>Deluxe King Room</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Check-in Date:</strong> <span>September 30, 2024</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Check-out Date:</strong> <span>October 3, 2024</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Total Nights:</strong> <span>3</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Total Price:</strong> <span>NRP 10,500</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Payment Status:</strong> <span class="badge bg-success">Paid</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Hotel Information -->
            <div class="card shadow-sm mt-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Hotel ABC</h5>
                    <p class="card-text">123 Street, Kathmandu, Nepal</p>
                    <p class="card-text">Phone: +977-123456789</p>
                    <a href="#" class="btn btn-outline-secondary"><i class="bi bi-telephone"></i> Contact
                        Hotel</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
