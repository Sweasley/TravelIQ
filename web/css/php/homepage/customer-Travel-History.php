<?php
    session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelIQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- local css -->
    <link rel="stylesheet" href="../../css/account-styles.css" />
    

    <!-- boostrap icon  -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <style>
        body{

            background-image: url("../../../pics/greece.png");
            
        }
        /* for small screens:  */
        .navbar.navbar-expanded {
  background-color: #091d36;
}

     </style>

</head>
<body>


<header id="Home">
    <div class="container-fluid">
        <!-- Navigation bar  -->
        <nav class="navbar navbar-expand-lg navbar-light text-light fixed-top ">

            <div class="container-fluid">
                <!-- put logo here  -->
                <a class="navbar-brand" href="#"><span class="text-warning" id="d">Travel</span><span class="iq-text">IQ</span></a>
                <!-- hamburger navbar  -->
                <button class="navbar-toggler bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- links  -->
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav d-flex flex-column flex-lg-row align-items-center mx-auto  mb-lg-0 ">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="customer-homepage.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="customer-booking.php">Book</a>    
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#Gallery">Gallery</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="customer-contact-us.php">Contact Us</a>
        </li>
        <li class="nav-item d-lg-none"> <!-- Show only on smaller screens -->
            <a href="customer-Account-Information.php" class="nav-link text-warning ">Account</a>
        </li>
        <li class="nav-item d-lg-none"> <!-- Show only on smaller screens -->
            <a href="customer-overview.php" class="nav-link text-warning ">Overview</a>
        </li>
        <li class="nav-item d-lg-none"> <!-- Show only on smaller screens -->
            <a href="function-logout.php" class="nav-link text-warning ">Logout</a>
        </li>
    </ul>

    <!-- Move the icon to the right -->
    <ul class="navbar-nav align-items-center">
    <!-- Icon (or Account link) for larger screens -->
    <li class="nav-item d-none d-lg-block"> <!-- Show only on larger screens -->
        <div class="dropdown">
            <a class="nav-link text-warning fs-3 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi text-warning bi-person-circle "></i>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="customer-Account-Information.php">Profile</a></li>
                <li><a class="dropdown-item" href="customer-overview.php">Overview</a></li>
                <li><a class="dropdown-item" href="function-logout.php">Logout</a></li>
            </ul>
        </div>
    </li>
</ul>

</div>

            </div>
        </nav>
    </div>
</header>

<h1 class="display-5 fw-bold text-center pt-5">Travel IQ</h1>

        <!-- travel History  -->
        <div class="container">
    <h1 class="mt-5 mb-4">Mr. Zhao's Travel History</h1>
    
    <form id="sortForm" method="POST" action="function-Travel-History.php">
        <div class="row mb-3">
            <label for="sortBy" class="col-sm-2 col-form-label">Sort By:</label>
            <div class="col-sm-4">
                <select class="form-select" id="sortBy" name="sort">
                    <option selected disabled>--Select--</option>
                    <option value="complete">All</option>
                    <option value="incoming">Booked Travels</option>
                    <option value="departure">Completed Travels</option>
                    <option value="complete">Cancelled Travels</option>
                    
                </select>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn">Submit</button>
            </div>
        </div>
    </form>
    
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Suffix</th>
                <th scope="col">No. Of persons</th>
                <th scope="col">Destination</th>
                <th scope="col">Departure Date</th>
                <th scope="col">Return Trip</th>
                <th scope="col">Return Date</th>
                <th scope="col">Travel Type</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Wesley</td>
                <td></td>
                <td>Kim</td>
                <td></td>
                <td>1</td>
                <td>New York</td>
                <td>2024-05-15</td>
                <td>Yes</td>
                <td>2024-05-20</td>
                <td>Air(Economy)</td>
            </tr>
            <tr>
                <td>Jung Sook</td>
                <td></td>
                <td>Lee</td>
                <td></td>
                <td>5</td>
                <td>London</td>
                <td>2024-06-10</td>
                <td>No</td>
                <td></td>
                <td>Land</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
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

</body>
</html>
