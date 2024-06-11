<?php
session_start();
$booking = $_SESSION['booking'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Confirmation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
  <style>
    body {
      background-color: #f8f9fa;
    }
    .confirmation-card {
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    .confirmation-title {
      font-weight: 700;
      color: #007bff;
      margin-bottom: 15px;
    }
    .confirmation-details p {
      margin-bottom: 0.5rem;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
  <link rel="stylesheet" href="../../css/booking-styles.css">
</head>
<body>
  
<header id="Home">
      <div class="container-fluid">
        <!-- Navigation bar  -->
        <nav class="navbar navbar-expand-lg navbar-light text-light fixed-top">
          <div class="container-fluid">
            <!-- put logo here  -->
            <a class="navbar-brand" href="#"
              ><span class="text-warning" id="d">Travel</span
              ><span class="iq-text">IQ</span></a
            >
            <!-- hamburger navbar  -->
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <!-- links  -->
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul
                class="navbar-nav d-flex flex-column flex-lg-row align-items-center mx-auto mb-lg-0"
              >
                <li class="nav-item">
                  <a
                    class="nav-link"
                    aria-current="page"
                    href="customer-homepage.php"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="customer-booking.php">Book</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="customer-selection-page.php"
                    >Gallery</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="customer-contact-us.php"
                    >Contact Us</a
                  >
                </li>
                <li class="nav-item d-lg-none">
                  <!-- Show only on smaller screens -->
                  <a href="#" class="nav-link text-warning">Account</a>
                </li>
                <li class="nav-item d-lg-none">
                  <!-- Show only on smaller screens -->
                  <a href="customer-overview.php" class="nav-link text-warning">Overview</a>
                </li>
                <li class="nav-item d-lg-none">
                  <!-- Show only on smaller screens -->
                  <a href="function-logout.php" class="nav-link text-warning"
                    >Logout</a
                  >
                </li>
              </ul>

              <!-- Move the icon to the right -->
              <ul class="navbar-nav align-items-center">
                <!-- Icon (or Account link) for larger screens -->

                <li class="nav-item d-none d-lg-block me-3">
                  <!-- Show only on larger screens -->
                  <div class="dropdown">
                    <a
                      class="nav-link text-warning fs-4 dropdown-toggle"
                      href="#"
                      role="button"
                      id="dropdownMenuLink"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <i class="bi text-warning bi-person-circle"></i>
                    </a>

                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuLink"
                    >
                      <li>
                        <a
                          class="dropdown-item"
                          href="customer-Account-Information.php"
                          >Profile</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="customer-overview.php"
                          >Overview</a
                        >
                      </li>
                      <li>
                        <a class="dropdown-item" href="function-logout.php"
                          >Logout</a
                        >
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

  <div class="text-center my-4 pt-5">
    <h2 class="text-primary fw-bold">Travel IQ</h2>
  </div>
  <div class="container mt-3 py-3 ">
    <div class="card confirmation-card mx-3 ">
      <div class="card-body">
        <h3 class="confirmation-title text-center">Booking Confirmation</h3>
        <p class="text-center">Please review your booking details below:</p>
      <div class="row confirmation-details">
    <div class="col-md-6">
        <h4>Personal Details:</h4>
        <p><strong>First Name:</strong> <?php echo htmlspecialchars($booking['firstname']); ?></p>
        <p><strong>Middle Name:</strong> <?php echo htmlspecialchars($booking['middlename']); ?></p>
        <p><strong>Last Name:</strong> <?php echo htmlspecialchars($booking['lastname']); ?></p>
        <p><strong>Suffix:</strong> <?php echo htmlspecialchars($booking['suffix']); ?></p>
    </div>
    <div class="col-md-6">
        <h4>Booking Details:</h4>
        <p><strong>Book Date:</strong> <?php echo htmlspecialchars($booking['bookdate']); ?></p>
        <p><strong>Return Date:</strong> <?php echo htmlspecialchars($booking['return-date']); ?></p>
        <p><strong>Round Trip:</strong> <?php echo htmlspecialchars($booking['return']); ?></p>
        <p><strong>No. of Passengers:</strong> <?php echo htmlspecialchars($booking['passengers']); ?></p>
        <p><strong>Travel Type (Class):</strong> <?php echo htmlspecialchars($booking['class2']); ?></p>
        <p><strong>Time:</strong> <?php echo htmlspecialchars($booking['time']); ?></p>
    </div>
</div>

        <div class="row justify-content-center mt-3">
          <div class="col-sm-6 text-center">
            <a href="payment.php" class="btn btn-block"><i class="fa-solid fa-credit-card"></i> Pay now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../js/bg-change.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script>
// for small screens
// Function to toggle the navbar background color class
function toggleNavbarBackground() {
  var navbar = document.querySelector(".navbar");
  navbar.classList.toggle("navbar-expanded");
}

// Add an event listener to the navbar toggle button
document
  .querySelector(".navbar-toggler")
  .addEventListener("click", function () {
    toggleNavbarBackground();
  });

    </script>