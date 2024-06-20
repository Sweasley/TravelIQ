<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title> Booking Posting TravelIQ</title>
    <style>
        body {
            background-image: url("../../../pics/greece.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); 
            border-radius: 10px;
        }
        .no-spinner {
  -moz-appearance: textfield;
  appearance: textfield;
}
input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .btn {
  background-color:#ff724c;
  color:  hsl(0, 0%, 93%);
}
.btn:hover{
  background-color:#9bc1ee;
  color:  hsl(0, 0%, 93%);
}
        .navbar-logo {
  max-height: 40px; /* Adjust this value as needed */
  height: auto;
  width: auto;
}
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
        <a class="navbar-brand" ><img src="../../../pics/TravelIQ-Logo-text.png" alt="" srcset="" class="navbar-logo"></a
            >
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0">
                        <a class="btn my-2 my-sm-0" href="administrator-homepage.php" >Back to Dashboard</a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap JS and dependencies -->

    <div class="container mt-5">
        <h2 class="mb-4">Booking Details - Land</h2>
        <form id="promoForm" method="POST" action="function-booking.php" onsubmit="return validateForm()">
            <div class="mb-3">
                <label for="destination" class="form-label">Destination</label>
                <input type="text" class="form-control" id="destination" name="Destination" placeholder="Ex: Palawan" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control no-spinner" id="price" name="Price" placeholder="Ex: 5000" required>
            </div>
            <!-- Class -->
            <div class="mb-3">
                <label for="class" class="form-label">Class</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="economy" name="class[]" value="Economy">
                    <label class="form-check-label" for="economy">Economy</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="business" name="class[]" value="Business">
                    <label class="form-check-label" for="business">Business</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="first" name="class[]" value="First">
                    <label class="form-check-label" for="first">First Class</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Total Seats</label>
                <input type="number" class="form-control" id="totalSeats" name="totalSeats" placeholder="Ex: 1, 2, 3" required>
            </div>
            <!-- Promo or not? -->
            <div class="mb-3">
                <label for="class" class="form-label">Is this a promo or not?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="yesValue" name="promo" value="true">
                    <label class="form-check-label" for="promo">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="noValue" name="promo" value="false">
                    <label class="form-check-label" for="promo">No</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="text" class="form-control" id="time" name="Time" placeholder="Ex: 7:00, 8:00, 9:00" required>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date" required>
            </div>
            <div class="mb-3">
                <label for="dept_details" class="form-label">Departure Details</label>
                <textarea class="form-control" id="dept_details" name="deptDetails" required></textarea>
            </div>
            <div class="mb-3">
                <label for="arrival_details" class="form-label">Arrival Details</label>
                <textarea class="form-control" id="arrival_details" name="arrivalDetails" required></textarea>
            </div>
            <div class="mb-3">
                <label for="flight_nos" class="form-label">Flight Numbers</label>
                <input type="text" class="form-control" id="flight_nos" name="FlightNos" placeholder="Ex: Flight # 323, Flight # 425" required>
            </div>
            <div class="pt-1 pb-4">
                <button type="submit" name="bookpost" class="btn ">POST</button>
            </div>
        </form>
    </div>


<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- script checkbox validation  -->
    <script>
        function validateForm() {
            const checkboxes = document.querySelectorAll('input[name="class[]"]');
            let isChecked = false;
            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });

            if (!isChecked) {
                alert('Please select at least one option for the class or promo.');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
