<?php

    session_start();

    $username = $_SESSION["username"];

    require '../connect.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $sql = "SELECT * FROM bookingTable WHERE username = '" . $_SESSION["username"] . "'";
    $result=$conn->query($sql);

    $sql1 = "SELECT * FROM transactionTable WHERE username = '" . $_SESSION["username"] . "'";
    $result1=$conn->query($sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelIQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/booking-styles.css">
    <style>
        /* Custom CSS styles */
        body {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .email-text {
    color:#ffa500;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Adjusted shadow for visibility */
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
              ><img src="../../../pics/TravelIQ-Logo-text.png" alt="" srcset="" class="navbar-logo"></a
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
                  <a href="customer-Account-Information.php" class="nav-link text-warning">Account</a>
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
                      class="nav-link arrow-down fs-4 dropdown-toggle"
                      href="#"
                      role="button"
                      id="dropdownMenuLink"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <i class="bi bi-person-circle"></i>
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
  <div class="container pt-5">
    <h1 class="mt-3 text-light">Available Travel Options</h1>
    <div class="table-responsive mt-3">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Destination</th>
                    <th>Class</th>
                    <th>Book Date</th>
                    <th>Return Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $result->fetch_assoc()){
                        if($row["returnDate"] == "Invalid"){
                            $row["returnDate"] = "None";
                        }
                        echo "<tr><td>".$row["Destination"]."</td><td>".$row["class"]."</td><td>".$row["deptDate"]."</td><td>".$row["returnDate"]."</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container pt-5">
    <h1 class="mt-3 text-light">Transactions</h1>
<p class="fw-bolder  fs-5 email-text">For failed transactions, you can message us at TravelIQ@gmail.com</a>.</p>
<div class="table-responsive mt-3">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Reference Number</th>
                    <th>Amount</th>
                    <th>Approval</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $result1->fetch_assoc()){
                        if($row["approval"] == true){
                            $row["approval"] = "Approved";
                        } else if($row["approval"] == false && !is_null($row["approval"])){
                            $row["approval"] = "Denied";
                        }
                        echo "<tr><td>".$row["transactionID"]."</td><td>".$row["amount"]."</td><td>".$row["approval"]."</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
<script src="../../js/bg-change.js"></script>
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
