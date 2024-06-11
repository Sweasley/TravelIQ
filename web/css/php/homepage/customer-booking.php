<?php
    require "../connect.php";

    $controlNo = $_POST["controlNo"];
    $destination = $_POST["destination"];
    $vehicleType = $_POST["vehicleType"];

    $sql = "SELECT * FROM postTable WHERE controlNo = ".$controlNo;
    $result = $conn->query($sql);
    $place = $result->fetch_assoc();

    //arrays
    $price = $place["price"];
    if($price[0] == "a"){
        $price = unserialize($price);
    }
    $class = $place["class"];
    if($class[0] == "a"){
        $class = unserialize($class);
    }
    $travelTime = $place["traveltime"];
    if($travelTime[0] == "a"){
        $travelTime = unserialize($travelTime);
    }
    $flight = $place["flightNo"];
    if($flight[0] == "a"){
        $flight = unserialize($flight);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TravelIQ</title>

    <!-- Bootstrap CSS -->
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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/booking-styles.css" />
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
    
  <!-- Section: Design Block -->
  <section class="bg-reg">
    <!-- Jumbotron -->
    <div class="px-3 py-3 px-md-5 text-center text-sm-start ">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6  mb-lg-0">
            <div class="text-container">
              <h1 class="my-4 display-4 fw-bold offer-text">
                Ready for your <br />
                <span class=" fw-bold t">next <span class="fw-bold ">ADVENTURE?</span></span>
              </h1>
              <p class="parags fs-6 fw-medium">
                "Traveling ignites the spirit with the allure of discovery, the thrill of the unknown. It's a call to adventure, satisfying our wanderlust and fueling our desire to explore the wonders of the world."
              </p>
            </div>
          </div>
          <!-- Booking form -->
          <div class="col-lg-6 mb-lg-0">
            <div class="card">
              <p class="display-4 reg-text fw-bold text-center">TravelIQ</p>
              <div class="card-body py-5 px-md-5">
                <div class="container">
                  <!-- form  -->
                  <form method="POST" action="function-booking.php">
                <input type="hidden" value="<?php echo $controlNo; ?>" name="controlNo">
                <input type="hidden" value="<?php echo $destination; ?>" name="destination"><input type="hidden" value="<?php echo $vehicleType; ?>" name="vehicleType">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" placeholder="Firstname" autocorrect="off" class="form-control mb-4" required />
            </div>
            <div class="form-group">
                <label for="middlename">Middle Name:</label>
                <input type="text" id="middlename" name="middlename" placeholder="Middlename" autocorrect="off" class="form-control mb-4" required />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Lastname" autocorrect="off" class="form-control mb-4" required />
            </div>
            <div class="form-group">
                <label for="suffix">Suffix:</label>
                <input type="text" id="suffix" name="suffix" placeholder="Jr. II, I, III" autocorrect="off" class="form-control mb-4" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="bookdate">Book Date:</label>
                <input type="date" id="bookdate" name="bookdate" class="form-control mb-4" />
                <label for="return-date-input" id="return-date-label" hidden>Return Date:</label>
                <input type="date" name="return-date" id="return-date-input" class="form-control"  hidden>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Round trip?:</label><br />
                <input type="radio" name="return" value="Yes" id="return-yes" onchange="showDate()" />
                <label for="return-yes">Yes</label>
                <input type="radio" name="return" value="No" id="return-no" onchange="hideDate()" />
                <label for="return-no">No</label><br />
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="form-group">
                <label for="passengers" class="text-start">No. of passengers:</label>
                <select id="passengers" name="passengers" class="form-control mb-4">
                    <option selected disabled>Select Number of Passengers</option>
                    <option value="Solo">Solo</option>
                    <option value="Duo" >Duo</option>
                    <option value="Party" >Party</option>
                </select>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-group">
                <label for="class2" class="text-start">Class:</label>
                <input type="text" id="class2" name="class2" placeholder="Class" class="form-control mb-2" />
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-group">
                <label for="time" class="text-start">Time:</label>
                <input type="text" id="time" name="time" placeholder="Time" class="form-control mb-2" />
            </div>
        </div><span class="text-center text-danger">
         *Please put the exact details as written in the table below<br>
e.g. Economy ✓ economy X
         </span>
    </div>
    <br>
    </div><div class="row justify-content-center">
    <div class="col-sm-8 mb-4 text-center">
        <input type="submit" name="submit" value="Confirm" class="btn btn-block" />
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <h4>Details : </h4>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Field</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vehicle Type</td>
                        <td><?php echo $vehicleType; ?></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><?php if(is_array($price)){ echo implode(", ", $price); } else { echo $price;} ?></td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td><?php if(is_array($class)){ echo implode(", ", $class); } else { echo $class; }?></td>
                    </tr>
                    <tr>
                        <td>Travel Time</td>
                        <td><?php if(is_array($travelTime)){ echo implode(", ", $travelTime); } else { echo  $travelTime; }?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <h4>&nbsp;</h4> <!-- Added to align the headers of both tables -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Field</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Departure Details</td>
                        <td><?php echo $place["deptDetails"]; ?></td>
                    </tr>
                    <tr>
                        <td>Arrival Details</td>
                        <td><?php echo $place["arrivalDetails"]; ?></td>
                    </tr>
                    <tr>
                        <td>Flight No.</td>
                        <td><?php if(is_array($flight)){ echo implode(", ", $flight); } else { echo $flight; } ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</form>
                </div>
              </div>
            </div>
            <!-- End of form -->
          </div>
        </div>
      </div>
      <!-- Jumbotron -->
    </section>

    <!-- Bootstrap JS and other scripts -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <!-- Custom JS -->
    <script src="../../js/bg-change.js"></script>
    <script src="../../js/booking-change.js"></script>
  </body>
</html>
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
