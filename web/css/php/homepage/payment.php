<?php
  session_start();

  require "../connect.php";

  $sql = "SELECT * FROM postTable WHERE controlNo = " . $_SESSION["controlNo"];
  $result = $conn->query($sql);
  $place=$result->fetch_assoc();

  $setPrice = "SELECT * FROM bookingTable ORDER BY controlNo DESC LIMIT 1";
  $getPrice = $conn->query($setPrice);
  $placePrice=$getPrice->fetch_assoc();

  //arrays
  $class = $place["class"];
  $class1 = $placePrice["class"];
  if($class[0] == "a"){
    $class = unserialize($class);
    $index = array_search($class1, $class);
  }
  $price = $place["price"];
  if($price[0] == "a"){
      $price = unserialize($price);

      $actPrice = $price[$index];
      $totalPrice = ($actPrice * $_SESSION["partycount"]);
  } else {
    $totalPrice = $_SESSION["partycount"] * $price;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Confirmation</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
  
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="text-center">Payment Form</h1>
        <form id="paymentForm" action="function-payment.php" method="POST" class="bg-light p-4">
        <div class="fw-medium display-6 pb-5">
    <strong>The total payment is:</strong>
    <span class="text-danger"><?php echo $totalPrice; ?></span>
</div>

          <div class="form-group">
            <label for="paymentMode">Mode of Payment</label>
            <select class="form-control" id="paymentMode" name="mode" required>
              <option value="E-Wallet">E-Wallet</option>
              <option value="Debit Card">Debit Card</option>
              <option value="Credit Card">Credit Card</option>
              <option value="Counter">Walk in</option>
            </select>
          </div>
          <!-- walk in  -->
          <div id="addressContainer" style="display: none;">
            <p><strong>Travel IQ's Gcash: </strong> 123 Main Street, City, Count </p>
          </div>
           <!-- E wallet  -->
          <div id="ewalletContainer" style="display: none;">
            <p><strong>Travel IQ Address: </strong> 091234566778y</p>
          </div>
           <!-- Credit card  -->
          <div id="creditContainer" style="display: none;">
            <p><strong>Travel IQ Bank Details: </strong> Bank Name: 
          Account name: 
        Account number:  </p>
          </div>
           <!-- Debit card  -->
          <div id="debitContainer" style="display: none;">
            <p><strong>Travel IQ Bank Details: </strong>Bank Name: 
          Account name: 
        Account number: </p>
          </div>
          <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" name="amount" id="amount" required>
          </div>
          <div class="form-group">
            <label for="transactionId">Reference Number:</label>
            <input type="text" name="transactionId" class="form-control" id="transactionId" required>
          </div>
          <button type="submit" name="submit" class="btn">
            Confirm
          </button>
        </form>

        <!-- Modal -->
        <!-- <div class="modal fade" id="paymentConfirmationModal" tabindex="-1" aria-labelledby="paymentConfirmationModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="paymentConfirmationModalLabel">Payment Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <p><strong>Mode of Payment:</strong> <span id="modalPaymentMode"></span></p>
                <div id="modalAddressContainer"></div>
                <p><strong>Amount:</strong> <span id="modalAmount"></span></p>
                <p><strong>Reference Number:</strong> <span id="modalTransactionId"></span></p>
                <p>Email us for your confirmation of your payment : <strong>Traveliq.2024@gmail.com </strong> <span id="modalTransactionId"></span></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn " data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz2z1Wl26tC0uFLpP0iF5AnTZAgUoPsmDzClzgJSLg7U" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-qaK6xA0kQWDLOiWbfu7URxK2wLMf29zkeKZh6PbuCb8tc1LZ/kWfE9BHL7KuefYk" crossorigin="anonymous"></script>

  <script src="../../js/bg-change.js"></script>
 
  <script>
    $(document).ready(function() {
      $("#paymentMode").change(function() {
        var selectedOption = $(this).val();
        if (selectedOption === "Counter") {
          $("#addressContainer").show();
          $("#ewalletContainer, #debitContainer, #creditContainer").hide();
          $("#modalAddressContainer").html($("#addressContainer").html());
        } else if (selectedOption === "E-Wallet") {
          $("#ewalletContainer").show();
          $("#addressContainer, #debitContainer, #creditContainer").hide();
          $("#modalAddressContainer").html($("#ewalletContainer").html());
        } else if (selectedOption === "Debit Card") {
          $("#debitContainer").show();
          $("#addressContainer, #ewalletContainer, #creditContainer").hide();
          $("#modalAddressContainer").html($("#debitContainer").html());
        } else if (selectedOption === "Credit Card") {
          $("#creditContainer").show();
          $("#addressContainer, #ewalletContainer, #debitContainer").hide();
          $("#modalAddressContainer").html($("#creditContainer").html());
        } else {
          $("#addressContainer, #ewalletContainer, #debitContainer, #creditContainer").hide();
          $("#modalAddressContainer").empty();
        }
      });

      $("#confirmButton").click(function(event) {
        event.preventDefault(); // prevent default form submission
        var isValid = $("#paymentForm")[0].checkValidity();
        if (isValid) {
          var name = $("#name").val();
          var paymentMode = $("#paymentMode").val();
          var amount = $("#amount").val();
          var transactionId = $("#transactionId").val();

          $("#modalName").text(name);
          $("#modalPaymentMode").text(paymentMode);
          $("#modalAmount").text("$" + amount);
          $("#modalTransactionId").text(transactionId);

          $("#paymentConfirmationModal").modal('show');
        } else {
          $("#paymentForm")[0].reportValidity();
        }
      });
    });
  </script>
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
