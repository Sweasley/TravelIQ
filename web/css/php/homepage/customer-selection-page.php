<?php
  require "../connect.php";

  $sql = "SELECT * FROM postTable WHERE startDate <= CURDATE() AND endDate >= CURDATE()";
  $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelIQ</title>
    <link rel="stylesheet" href="../../css/selection.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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


    <!-- Carousel -->
    <div>
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <!-- 1st carousel item -->
            <div class="carousel-inner">
                <div class="carousel-item active c-item vh-100">
                    <img src="../../../pics/boracay.png" class="d-block w-100 c-img" />
                    <div class="carousel-caption top-0 d-flex flex-column justify-content-center align-items-center">
                        <p class="fs-5 mt-5">Don't know where to go?</p>
                        <h1 class="display-6 fw-semibold text-uppercase">
                            <span class="text-warning">Boracay</span> is just a few clicks away
                        </h1>
                        <!-- Buttons for booking -->
                        <div class="slider-btn">
                            <a href="customer-booking.php" class="btn px-4 py-2 fs-5 mt-5 book-btn">Take me</a>
                        </div>
                        <div class="carousel-caption text-uppercase bottom-0">
                            <p>Scroll down to see more</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item c-item vh-100">
                    <img src="../../../pics/palawan.png" class="d-block w-100 c-img" />
                    <div class="carousel-caption top-0 d-flex flex-column justify-content-center align-items-center">
                        <p class="fs-5 mt-5">Don't know where to go?</p>
                        <h1 class="display-6 fw-semibold text-uppercase">
                            <span class="text-warning">Palawan</span> is just a few clicks away
                        </h1>
                        <!-- Buttons for booking -->
                        <div class="slider-btn">
                            <a href="customer-booking.php" class="btn px-4 py-2 fs-5 mt-5 book-btn">Take me</a>
                        </div>
                        <div class="carousel-caption text-uppercase bottom-0">
                            <p>Scroll down to see more</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item c-item vh-100">
                    <img src="../../../pics/siargao.png" class="d-block w-100 c-img" />
                    <div class="carousel-caption top-0 d-flex flex-column justify-content-center align-items-center">
                        <p class="fs-5 mt-5">Don't know where to go?</p>
                        <h1 class="display-6 fw-semibold text-uppercase">
                            <span class="text-warning">Siargao</span> is just a few clicks away
                        </h1>
                        <!-- Buttons for booking -->
                        <div class="slider-btn">
                            <a href="customer-booking.php" class="btn px-4 py-2 fs-5 mt-5 book-btn">Take me</a>
                        </div>
                        <div class="carousel-caption text-uppercase bottom-0">
                            <p>Scroll down to see more</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
            <!-- Local  -->
    <h1 class="text-center mt-5 pb">Explore Our Local Destinations!</h1>
    <div class="container mt-5 pb-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Destination Cards -->
    <?php
      while($row = $result->fetch_assoc()){
        if($row["is_promo"] == true){
          echo "<div class='col'>
          <div class='card promo'>
            <img src='../../../pics/Destination/Locals/".$row["destination"].".jpg' class='card-img-top' alt='Baler Image'>
            <div class='card-body'>
              <h5 class='card-title'>".$row["destination"]."(".$row["vehicleType"].")</h5>
              <p class='card-text'>Explore ".$row["destination"]." Now.</p>
              <form action='customer-booking.php' method='POST'><input type='hidden' value='".$row["vehicleType"]."' name='vehicleType'> <input type='hidden' value='".$row["destination"]."' name='destination'><input type='hidden' value=".$row["controlNo"]." name='controlNo'><button type='submit' class='btn book-btn'>Take me</button></form>
            </div>
            <div class='promo-badge'>Special Offer!</div>
          </div>
        </div>";
        }
        echo "<div class='col'>
        <div class='card'>
      <img src='../../../pics/Destination/Locals/Albay.jpg' class='card-img-top' alt='Destination'>
      <div class='card-body'>
        <h5 class='card-title'>".$row["destination"]."(".$row["vehicleType"].")</h5>
        <p class='card-text'>Explore ".$row["destination"]." Now.</p>
        <form action='customer-booking.php' method='POST'><input type='hidden' value='".$row["vehicleType"]."' name='vehicleType'> <input type='hidden' value='".$row["destination"]."' name='destination'><input type='hidden' value=".$row["controlNo"]." name='controlNo'><button type='submit' class='btn book-btn'>Take me</button></form>
      </div>
    </div>
    </div>";
      }
    ?>

</div>
</div>
</div>

<!-- imnternational  -->
  </div>
  <h1 class="text-center mt-5 pb">Explore Our International Destinations!</h1>
    <div class="container mt-5 pb-5">
  <div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- Destination Cards -->
    
    <div class="col">
    <div class="card" >
  <img src="../../../pics/Destination/International/Hongkong.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hongkong</h5>
    <p class="card-text">Explore Hongkong for only $100.</p>
    <a href="#" class="btn book-btn">Take me</a>
  </div>
</div>
</div>
    

    <div class="col">
    <div class="card" >
  <img src="../../../pics/Destination/International/Japan.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Japan</h5>
    <p class="card-text">Explore Japan for only $100.</p>
    <a href="#" class="btn book-btn">Take me</a>
  </div>
</div>
</div>
    

    <div class="col">
    <div class="card">
  <img src="../../../pics/Destination/International/Malaysia.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Malaysia</h5>
    <p class="card-text">Explore Malaysia for only $100.</p>
    <a href="#" class="btn book-btn">Take me</a>
  </div>
</div>
</div>

<div class="col">
    <div class="card" >
  <img src="../../../pics/Destination/International/Singapore.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Singapore</h5>
    <p class="card-text">Explore Singapore for only $100.</p>
    <a href="#" class="btn book-btn">Take me</a>  </div>
</div>
</div>

<div class="col">
    <div class="card" >
  <img src="../../../pics/Destination/International/South Korea.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">South Korea</h5>
    <p class="card-text">Explore South Korea for only $100.</p>
    <a href="#" class="btn book-btn">Take me</a>  </div>
</div>
</div>
    

    <div class="col">
    <div class="card" >
  <img src="../../../pics/Destination/International/Taiwan.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Taiwan</h5>
    <p class="card-text">Explore Taiwan for only $100.</p>
    <a href="#" class="btn book-btn">Take me</a>  </div>
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

<script>
  //Nav Bar Scrolling

  const navEl = document.querySelector(".navbar");
  const textIQ = document.querySelector(".iq-text");

  window.addEventListener("scroll", () => {
    if (window.scrollY >= 2) {
      navEl.classList.add("navbar-scrolled");
      textIQ.classList.add("iq-texts");
    } else if (window.scrollY < 2) {
      navEl.classList.remove("navbar-scrolled");
      textIQ.classList.remove("iq-texts");
    }
  });
</script>
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
