<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <link rel="stylesheet" href="../../css/contact-us.css" />
    <script src="../../js/bg-change.js"></script>
    <title>TravelIQ</title>
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
   <!-- contact us -->
<div class="container pt-4 mt-4">
  <div class="container mt-5 pt-2 background-bg">
    <div class="row justify-content-center">
      <!-- contact us -->
      <div class="container col-md-12 pt-4 pb-5 ">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-10">
            <div class="mb-4">
              <div class="mb-3 text-primary"></div>
              <div>
                <h4 class="mb-2 title-text">
                  <i class="bi bi-geo-alt"></i> Office
                </h4>
                <p class="mb-2 text-descript">
                  Please visit us to have a discussion.
                </p>
                <hr class="w-50 mb-3 border-dark-subtle" />
                <a class="m-0 text-link">
                2210 Chino Roces Ave, Makati, Metro Manila
</a>
              </div>
            </div>
            <div class="row mb-sm-4 mb-md-5">
              <div class="col-12 col-sm-6">
                <div class="mb-4 mb-sm-0">
                  <div class="mb-3 text-primary"></div>
                  <div>
                    <h4 class="mb-2 title-text">
                      <i class="bi bi-telephone"></i> Phone
                    </h4>
                    <p class="mb-2 text-descript">
                      Please speak with us directly.
                    </p>
                    <hr class="w-75 mb-3 border-dark-subtle" />
                    <p class="mb-0">
                      <a class="text-decoration-none text-link">(+63) 912-345-6789</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="mb-4 mb-sm-0">
                  <div class="mb-3 text-primary"></div>
                  <div>
                    <h4 class="mb-2 title-text">
                      <i class="bi bi-envelope-at"></i> Email
                    </h4>
                    <p class="mb-2 text-descript">
                      Please write to us directly.
                    </p>
                    <hr class="w-75 mb-3 border-dark-subtle" />
                    <p class="mb-0">
                      <a class="text-decoration-none text-link">TravelIQ@gmail.com</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="mb-3 text-primary"></div>
              <div>
                <h4 class="mb-2 title-text">
                  <i class="bi bi-clock"></i> Opening Hours
                </h4>
                <p class="mb-2 text-descript">
                  Explore our business opening hours.
                </p>
                <hr class="w-50 mb-3 border-dark-subtle" />
                <div class="d-flex mb-1">
                  <p class="text-descript fw-bold mb-0 me-5">Mon - Fri</p>
                  <p class="text-descript mb-0">9am - 5pm</p>
                </div>
                <div class="d-flex">
                  <p class="text-descript fw-bold mb-0 me-5">Sat - Sun</p>
                  <p class="text-descript mb-0">9am - 2pm</p>
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