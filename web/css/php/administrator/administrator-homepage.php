<?php

  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  require "../connect.php";


  // CHARTS 
 // Fetch data from the database
$sql = "SELECT MONTHNAME(transactionDate) AS MONTH, SUM(amount) AS Amount FROM profitTable GROUP BY Month";
$result = $conn->query($sql);

$getMonthlyProfit = $conn->query("SELECT MONTHNAME(transactiondate) AS month, SUM(amount) AS total_amount FROM profitTable GROUP BY MONTHNAME(transactiondate)");
$monthlyProfitData = [];
while ($row = $getMonthlyProfit->fetch_assoc()) {
    $monthlyProfitData[] = $row;
}

// Fetch gender distribution data from the database
$genderSql = "SELECT gender, COUNT(*) AS count FROM demogTable GROUP BY gender";
$genderResult = $conn->query($genderSql);

$genderDistributionData = [];
while ($row = $genderResult->fetch_assoc()) {
    $genderDistributionData[] = $row;
}

// Fetch region population data from the database
$regionSql = "SELECT region, COUNT(*) AS population FROM demogTable GROUP BY region";
$regionResult = $conn->query($regionSql);

$regionPopulationData = [];
while ($row = $regionResult->fetch_assoc()) {
    $regionPopulationData[] = $row;
}

  $setHeader = "SELECT (SELECT COUNT(*) FROM bookingTable WHERE curdate() < deptDate) AS active, (SELECT COUNT(*) FROM bookingTable WHERE curdate() < deptDate AND returndate IS NOT NULL AND returndate > curdate()) AS current, (SELECT COUNT(*) FROM bookingTable) AS total";
  $getHeader=$conn->query($setHeader);
  $placeHeader=$getHeader->fetch_assoc();

  $showProfit = "SELECT YEAR(transactiondate) AS Year, MONTH(transactiondate) AS Month, SUM(amount) AS amount, CONCAT(ROUND((SUM(amount) / (SELECT SUM(amount) FROM profitTable) * 100), 2), '%') AS Percentage FROM profitTable GROUP BY YEAR(transactiondate), MONTH(transactiondate) ORDER BY Year DESC, Month DESC";
  $getProfit=$conn->query($showProfit);

  $showGender = "SELECT gender AS gender, COUNT(*) AS count, CONCAT(ROUND(COUNT(*) / (SELECT COUNT(*) FROM demogTable) * 100, 2), '%') AS percentage FROM demogTable GROUP BY gender ORDER BY count desc";
  $getGender=$conn->query($showGender);

  $showRegion = "SELECT region AS region, COUNT(*) AS count, CONCAT(ROUND(COUNT(*) / (SELECT COUNT(*) FROM demogTable) * 100, 2), '%') AS percentage FROM demogTable GROUP BY region ORDER BY count desc";
  $getRegion=$conn->query($showRegion);

  $showProvince = "SELECT province AS province, COUNT(*) AS count, CONCAT(ROUND(COUNT(*) / (SELECT COUNT(*) FROM demogTable) * 100, 2), '%') AS percentage FROM demogTable GROUP BY province ORDER BY count DESC";
  $getProvince=$conn->query($showProvince);

  $showCity = "SELECT city AS city, COUNT(*) AS count, CONCAT(ROUND(COUNT(*) / (SELECT COUNT(*) FROM demogTable) * 100, 2), '%') AS percentage FROM demogTable GROUP BY city ORDER BY count DESC";
  $getCity=$conn->query($showCity);

  $showCustomer = "SELECT * FROM usertable LEFT JOIN demogtable ON usertable.userID = demogtable.userID WHERE usertable.userrole = 2";
  $getCustomer=$conn->query($showCustomer);

  $showBooking = "SELECT CONCAT(YEAR(deptDate), '-', destination) AS Date, COUNT(*) AS Count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable) * 100), 2), '%') AS percentage FROM bookingtable GROUP BY Date ORDER BY Date Asc";
  $getBooking=$conn->query($showBooking);

  $reportHeadergender = "SELECT gender, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable) * 100), 2), '%') AS percentage FROM bookingTable INNER JOIN demogTable ON bookingTable.username = demogtable.username GROUP BY gender ORDER BY percentage DESC LIMIT 1";
  $getHeadergender=$conn->query($reportHeadergender);
  $placeHeadergender=$getHeadergender->fetch_assoc();

  $reportHeaderregion = "SELECT region, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable) * 100), 2), '%') AS percentage FROM bookingTable INNER JOIN demogTable ON bookingTable.username = demogtable.username GROUP BY region ORDER BY percentage DESC LIMIT 1";
  $getHeaderregion=$conn->query($reportHeaderregion);
  $placeHeaderregion=$getHeaderregion->fetch_assoc();

  $reportHeaderprovince = "SELECT province, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable) * 100), 2), '%') AS percentage FROM bookingTable INNER JOIN demogTable ON bookingTable.username = demogtable.username GROUP BY province ORDER BY percentage DESC LIMIT 1";
  $getHeaderprovince=$conn->query($reportHeaderprovince);
  $placeHeaderprovince=$getHeaderprovince->fetch_assoc();

  $reportHeadercity = "SELECT city, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable) * 100), 2), '%') AS percentage FROM bookingTable INNER JOIN demogTable ON bookingTable.username = demogtable.username GROUP BY city ORDER BY percentage DESC LIMIT 1";
  $getHeadercity=$conn->query($reportHeadercity);
  $placeHeadercity=$getHeadercity->fetch_assoc();

  $setGenderreport = "SELECT gender, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable) * 100), 2), '%') AS percentage FROM bookingTable INNER JOIN demogTable ON bookingTable.username = demogtable.username GROUP BY gender ORDER BY percentage DESC";
  $getGenderreport=$conn->query($setGenderreport);

  $setRegionreport = "SELECT region, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable) * 100), 2), '%') AS percentage FROM bookingTable INNER JOIN demogTable ON bookingTable.username = demogtable.username GROUP BY region ORDER BY percentage DESC";
  $getRegionreport=$conn->query($setRegionreport);

  $setProvincereport = "SELECT province, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable) * 100), 2), '%') AS percentage FROM bookingTable INNER JOIN demogTable ON bookingTable.username = demogtable.username GROUP BY province ORDER BY percentage DESC";
  $getProvincereport=$conn->query($setProvincereport);

  $setCityreport = "SELECT city, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable) * 100), 2), '%') AS percentage FROM bookingTable INNER JOIN demogTable ON bookingTable.username = demogtable.username GROUP BY city ORDER BY percentage DESC";
  $getCityreport=$conn->query($setCityreport);

  $setPromo = "SELECT travelType AS travelType, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable WHERE travelType IS NOT NULL) * 100), 2), '%') AS percentage FROM bookingTable WHERE travelType IS NOT NULL GROUP BY travelType";
  $getPromo = $conn->query($setPromo);

  $setPromocard = "SELECT travelType AS travelType, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable WHERE travelType IS NOT NULL) * 100), 2), '%') AS percentage FROM bookingTable WHERE travelType IS NOT NULL GROUP BY travelType ORDER BY percentage DESC LIMIT 1";
  $getPromocard = $conn->query($setPromocard);
  $placePromocard = $getPromocard->fetch_assoc();

  $setVehiclecard = "SELECT vehicleType AS vehicleType, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable WHERE travelType IS NOT NULL) * 100), 2), '%') AS percentage FROM bookingTable WHERE travelType IS NOT NULL GROUP BY vehicleType ORDER BY percentage DESC LIMIT 1";
  $getVehiclecard = $conn->query($setVehiclecard);
  $placeVehiclecard = $getVehiclecard->fetch_assoc();

  $setVehicle = "SELECT vehicleType AS vehicleType, COUNT(*) AS count, CONCAT(ROUND((COUNT(*)/(SELECT COUNT(*) FROM bookingTable WHERE travelType IS NOT NULL) * 100), 2), '%') AS percentage FROM bookingTable WHERE travelType IS NOT NULL GROUP BY vehicleType ORDER BY percentage DESC";
  $getVehicle=$conn->query($setVehicle);

  $setCB = "SELECT * FROM bookingTable";
  $getCB=$conn->query($setCB);

  $setAnalytics = "SELECT YEAR(transactiondate) AS Year, SUM(amount) AS amount, CONCAT(ROUND((SUM(amount) / (SELECT SUM(amount) FROM profitTable) * 100), 2), '%') AS Percentage FROM profitTable GROUP BY YEAR(transactiondate) ORDER BY Year";
  $getAnalytics=$conn->query($setAnalytics);

  $setTransactionData = "SELECT * FROM transactionTable WHERE approval IS NULL";
  $getTransactionData=$conn->query($setTransactionData);

   $setPromo = "SELECT * FROM postTable WHERE is_promo = true";
   $getPromodata=$conn->query($setPromo);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <!-- icons:  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="playground.css" />
    <!-- Chart  -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  

    <script src="chart.js"></script>
    
    <script src="other-chart.js"></script>
  </head>
  <body>
    <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div class="bg-white" id="sidebar-wrapper">
        <div
          class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom logo-text"
        >
          <i class="bi bi-airplane me-2"></i> Travel IQ
        </div>
        <div class="list-group list-group-flush my-3">
        <a
            href="#Sales"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-comment-dots me-2"></i>Sales Analytics
          </a>
          
          <a
            href="#Customer"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-project-diagram me-1"></i>Customer Analytics
          </a>
          <a
            href="#Sales-report"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-chart-line me-2"></i>Sales Report
          </a>
          <a
            href="#Reports"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-paperclip me-2"></i>Customer Reports
          </a>
          
          <a
            href="#Booking"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-gift me-2"></i>Booking Report
          </a>
          <a
            href="#Customer-Booking"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-gift me-2"></i>Customer Booking
          </a>
          <a
            href="#Transactions"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
          >
            <i class="fas fa-gift me-2"></i>Transactions
          </a>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4"
        >
          <div class="d-flex align-items-center">
            <i
              class="fas fa-align-left primary-text fs-4 me-3"
              id="menu-toggle"
            ></i>
            <h2 class="fs-2 m-0" id="page-title">Sales Analytics</h2>
          </div>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle second-text fw-bold"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="fas fa-user me-2"></i><?php echo $_SESSION["username"];?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="edit-profile-admin.php">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="../administrator-register.php">Register</a></li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- page content  -->
        <div class="container-fluid px-4">
          <div class="container-fluid">
         
            <!-- --------------------------Sales Analytics Section----------- -->
            <div class="row g-3 my-2 section" id="Sales">
              <div class="container-fluid px-4">
                <div class="row g-3 my-2 justify-content-center">
                  <div class="col-md-3">
                    <div
                      class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded"
                    >
                      <div>
                        <h3 class="fs-2"><?php echo $placeHeader["current"];?></h3>
                        <p class="fs-6">Current Bookings</p>
                      </div>
                      <i
                        class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"
                      ></i>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div
                      class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded"
                    >
                      <div>
                        <h3 class="fs-2"><?php echo $placeHeader["total"]?></h3>
                        <p class="fs-6">Total Bookings</p>
                      </div>
                      <i
                        class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"
                      ></i>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div
                      class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded"
                    >
                      <div>
                        <h3 class="fs-2"><?php echo $placeHeader["active"]?></h3>
                        <p class="fs-6">Active Booking</p>
                      </div>
                      <i
                        class="fas fa-book-open fs-1 primary-text border rounded-full secondary-bg p-3"
                      ></i>
                    </div>
                  </div>

                 
                </div>

                <!-- table  -->

                <!-- drop down filter  -->
                <!-- <div class="dropdown">
                 

                 <div style="width: 80%; margin: auto" class="chart">
                  <canvas
                    id="monthlySalesChart"
                    width="400"
                    height="200"
                  ></canvas>
                </div>
                </div> -->

                <div class="container mt-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3>Monthly Profit</h3>
                <canvas id="monthlyProfitChart"></canvas>
                <div id="monthlyProfitData" data-monthly-profit="<?php echo htmlspecialchars(json_encode($monthlyProfitData), ENT_QUOTES, 'UTF-8'); ?>"></div>
            </div>
        </div>
    </div>
              </div>
                <!-- <div class="row my-5">
                  <h3 class="fs-4 mb-3">Sales Report</h3>
                  <div class="col">
                  <div class="table-responsive">
                    <table class="table bg-white rounded shadow-sm table-hover">
                      <thead>
                        <tr>
                          <th scope="col" width="200">Year</th>
                          <th scope="col" width="200">Month</th>
                          <th scope="col">Total Sales</th>
                          <th scope="col">Percentage</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          while($row = $getProfit->fetch_assoc()){
                            if($row["Month"] == 1){
                              $row["Month"] = "January";
                            }
                            if($row["Month"] == 2){
                              $row["Month"] = "February";
                            }
                            if($row["Month"] == 3){
                              $row["Month"] = "March";
                            }
                            if($row["Month"] == 4){
                              $row["Month"] = "April";
                            }
                            if($row["Month"] == 5){
                              $row["Month"] = "May";
                            }
                            if($row["Month"] == 6){
                              $row["Month"] = "June";
                            }
                            if($row["Month"] == 7){
                              $row["Month"] = "July";
                            }
                            if($row["Month"] == 8){
                              $row["Month"] = "August";
                            }
                            if($row["Month"] == 9){
                              $row["Month"] = "September";
                            }
                            if($row["Month"] == 10){
                              $row["Month"] = "October";
                            }
                            if($row["Month"] == 11){
                              $row["Month"] = "November";
                            }
                            if($row["Month"] == 12){
                              $row["Month"] = "December";
                            }


                            echo "<tr><td>" .$row["Year"]."</td><td>".$row["Month"]."</td><td>".$row["amount"]."</td><td>".$row["Percentage"]."</td></tr>"; 
                          }
                        ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
                        </div> -->
              </div>
            </div>
            <!--------------------------- Customer Analytics Section ----------------------->
            <div class="row g-3 my-2 section" id="Customer">
              <!-- Customer content goes here -->
              
          <div class="container px-4" id="hanging-icons">
  <h2 class="border-bottom text-center">Monthly Reports</h2>
  <div class="overflow-auto">
    <div class="d-flex flex-nowrap gap-3 py-5">

      <div class="card-custom p-2 d-flex flex-column">
        <div class="d-flex align-items-center">
          <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <i class="bi bi-clipboard2-data"></i>
          </div>
          <?php
            echo "<span class='fs-4 text-body-emphasis pb-5'>".$placeHeadergender["percentage"]." of <span class='fw-bolder text-primary'>".$placeHeadergender["gender"]."</span></span>";
          ?>
        </div>
        <div class="mt-4 flex-grow-1">
        <?php
          echo "<p>Based on the booking data present in the system " . $placeHeadergender["percentage"] . " of the bookings made were from your " . $placeHeadergender["gender"] . " audience.
          
          Would you like to promote towards the demographic?<br />";
        ?>
        </div>
        <div class="mt-auto">
          <!-- eto yung nagana ng promote button  -->
          <a href="#" class="btn promote-button" data-target="#Booking">Promote</a>
        </div>
      </div>

      <div class="card-custom p-2 d-flex flex-column">
        <div class="d-flex align-items-center">
          <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <i class="bi bi-clipboard2-data"></i>
          </div>
          <?php
            echo "<span class='fs-4 text-body-emphasis pb-5'>".$placeHeaderregion["percentage"]." from <span class='fw-bolder text-primary'>".$placeHeaderregion["region"]."</span></span>";
          ?>
        </div>
        <div class="mt-4 flex-grow-1">
        <?php
          echo "<p>Based on the booking data present in the system " . $placeHeaderregion["percentage"] . " of the bookings made were from your " . $placeHeaderregion["region"] . " audience.
          
          Would you like to promote towards the demographic?<br />";
        ?>
        </div>
        <div class="mt-auto">
          <a href="#" class="btn promote-button" data-target="#Booking">Promote</a>
        </div>
      </div>

      <div class="card-custom p-2 d-flex flex-column">
        <div class="d-flex align-items-center">
          <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <i class="bi bi-clipboard2-data"></i>
          </div>
          <?php
            echo "<span class='fs-4 text-body-emphasis pb-5'>".$placeHeaderprovince["percentage"]." from <span class='fw-bolder text-primary'>" .$placeHeaderprovince["province"]."</span></span>";
          ?>
        </div>
        <div class="mt-4 flex-grow-1">
        <?php
          echo "<p>".$placeHeaderprovince["percentage"]." of the bookings present in the system came from the region: ".$placeHeaderprovince["province"].". Would you like to promote to this demographic?<br />";
        ?>
        </div>
        <div class="mt-auto">
          <a href="#" class="btn promote-button" data-target="#Booking">Promote</a>
        </div>
      </div>

      <div class="card-custom p-2 d-flex flex-column">
        <div class="d-flex align-items-center">
          <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <i class="bi bi-clipboard2-data"></i>
          </div>
          <?php
            echo "<span class='fs-4 text-body-emphasis pb-5'>".$placeHeadercity["percentage"]." from <span class='fw-bolder text-primary'>".$placeHeadercity["city"]."</span></span>";
          ?>
        </div>
        <div class="mt-4 flex-grow-1">
        <?php
          echo "<p>Our data shows that ".$placeHeadercity["city"]." of the bookings made are from the province of ".$placeHeadercity["city"].". Would you like to promote to this demographic? <br />";
        ?>
        </div>
        <div class="mt-auto">
          <a href="#" class="btn promote-button" data-target="#Booking">Promote</a>
        </div>
      </div>

      <div class="card-custom p-2 d-flex flex-column">
        <div class="d-flex align-items-center">
          <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <i class="bi bi-clipboard2-data"></i>
          </div>
          <span class="fs-5 text-body-emphasis">
            <?php echo $placePromocard["percentage"] ?> are <span class="fw-bolder text-primary"><?php echo $placePromocard["travelType"]; ?></span>
          </span>
        </div>
        <div class="mt-4 flex-grow-1">
          <?php
            echo "<p>Based on the total bookings".$placePromocard["percentage"]." of the bookings are from ".$placePromocard["travelType"]." travellers. Would you like to promote to the respective demographic?</p><br />";
          ?>
        </div>
        <div class="mt-auto">
          <a href="#" class="btn promote-button">Promote</a>
        </div>
      </div>

      <div class="card-custom p-2 d-flex flex-column">
        <div class="d-flex align-items-center">
          <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <i class="bi bi-clipboard2-data"></i>
          </div>
          <?php
            echo "<span class='fs-4 text-body-emphasis pb-5'>".$placeVehiclecard["percentage"]." from <span class='fw-bolder text-primary'>" .$placeVehiclecard["vehicleType"]."</span></span>";
          ?>
        </div>
        <div class="mt-4 flex-grow-1">
        <?php
          echo "<p>".$placeVehiclecard["percentage"]." of the bookings are to  ".$placeVehiclecard["vehicleType"]." travels. Would you like to promote to this demographic?<br />";
        ?>
        </div>
        <div class="mt-auto">
          <a href="#" class="btn promote-button">Promote</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Gender Distribution</h3>
            <canvas id="genderChart"></canvas>
            <div id="genderDistributionData" data-gender-distribution="<?php echo htmlspecialchars(json_encode($genderDistributionData), ENT_QUOTES, 'UTF-8'); ?>"></div>
        </div>
        <div class="col-md-6">
            <h3>Population by Region in the Philippines</h3>
            <canvas id="regionChart"></canvas>
            <div id="regionPopulationData" data-region-population="<?php echo htmlspecialchars(json_encode($regionPopulationData), ENT_QUOTES, 'UTF-8'); ?>"></div>
        </div>
    </div>
</div>

            

            </div>
            <!-- -------------------------Sales report section--------------------->
            <div class="row g-3 my-2 section" id="Sales-report">
              <!-- Analytics content goes here -->
              
    
              <div class="text-center">
                <h2 class="display-5 primary-text fw-bold text-uppercase">
                   sales report
                </h2>
                 <!-- table  -->
                 <div class="row my-5">
                 
                  <div class="col">
                  <div class="table-responsive">
                    <table class="table bg-white rounded shadow-sm table-hover">
                      <thead>
                        <tr>
                          <th scope="col" width="200">Year</th>
                          <th scope="col">Total Sales</th>
                          <th scope="col">Percentage</th>
                        </tr>
                        
                      </thead>
                      <tbody>
                        <?php
                          while($row = $getAnalytics->fetch_assoc()){
                            echo "<tr><td>".$row["Year"]."</td><td>".$row["amount"]."</td><td>".$row["Percentage"]."</td></tr>";
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                        </div>
              
            </div>
          </div>
          <!--------------------------------------------------- Customer Reports Section------------------------- -->
          <div class="row g-3 my-2 section" id="Reports">

    
              <!-- table  -->
              <div class="row">
                <h3
                  class="fs-4 mb-3 d-flex justify-content-between align-items-center"
                >
                  Gender
                </h3>
                <div class="col">
                <div class="table-responsive">
                  <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Gender</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Percentage</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while($row = $getGender->fetch_assoc()){
                          echo "<tr><td>".$row["gender"]."</td><td>".$row["count"]."</td><td>".$row["percentage"]."</td></tr>";
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
                      </div>
              </div>
              <!-- region  -->
              <div class="row">
                <h3
                  class="fs-4 mb-3 d-flex justify-content-between align-items-center"
                >
                  Region
                </h3>
                <div class="col">
                <div class="table-responsive">
                  <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Region</th>
                        <th scope="col">Total Sales</th>
                        <th scope="col">Percentage Rate</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while($row = $getRegion->fetch_assoc()){
                          echo "<tr><td>".$row["region"]."</td><td>".$row["count"]."</td><td>".$row["percentage"]."</td></tr>";
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
                      </div>
              </div>

              <!-- Province  -->
              <div class="row">
                <h3
                  class="fs-4 mb-3 d-flex justify-content-between align-items-center"
                >
                  Province
                </h3>
                <div class="col">
                <div class="table-responsive">
                  <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Province</th>
                        <th scope="col">Total Sales</th>
                        <th scope="col">Percentage Rate</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while($row = $getProvince->fetch_assoc()){
                          echo "<tr><td>".$row["province"]."</td><td>".$row["count"]."</td><td>".$row["percentage"]."</td></tr>";
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
                      </div>
              </div>
              <!-- City  -->
              <div class="row">
                <h3
                  class="fs-4 mb-3 d-flex justify-content-between align-items-center"
                >
                  City
                </h3>
                <div class="col">
                <div class="table-responsive">
                  <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Region</th>
                        <th scope="col">Total Sales</th>
                        <th scope="col">Percentage Rate</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while($row = $getCity->fetch_assoc()){
                          echo "<tr><td>".$row["city"]."</td><td>".$row["count"]."</td><td>".$row["percentage"]."</td></tr>";
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
                      </div>
              </div>
              <!-- Customer List  -->
              <!-- table  -->
              <div class="row">
                <h3
                  class="fs-4 mb-3 d-flex justify-content-between align-items-center"
                >
                  Customer List
                </h3>
                <div class="col">
                <div class="table-responsive">
                  <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Region</th>
                        <th scope="col">Province</th>
                        <th scope="col">City</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                          while($row = $getCustomer->fetch_assoc()){
                            echo "<tr><td>".$row["username"]."</td><td>".$row["gender"]."</td><td>".$row["region"]."</td><td>".$row["province"]."</td><td>".$row["city"]."</td></tr>";
                          }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
                        </div>
<!-- Table for Gender Distribution -->
<!-- <div class="row">
        <h3 class="fs-4 mb-3 d-flex justify-content-between align-items-center">Gender</h3>
        <div class="col">
            <div class="table-responsive">
                <table class="table bg-white rounded shadow-sm table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col" width="300">Category</th>
                            <th scope="col">Percentage rate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($row = $getGenderreport->fetch_assoc()){
                                echo "<tr><td>".$row["gender"]."</td><td>".$row["percentage"]."</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 -->

    <!-- Table for Region Distribution -->
    <!-- <div class="row">
        <h3 class="fs-4 mb-3 d-flex justify-content-between align-items-center">Region</h3>
        <div class="col">
            <div class="table-responsive">
                <table class="table bg-white rounded shadow-sm table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col" width="300">Category</th>
                            <th scope="col">Percentage rate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = $getRegionreport->fetch_assoc()){
                                echo "<tr><td>".$row["region"]."</td><td>".$row["percentage"]."</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
             <!-- Province  -->
             <!-- <div class="row">
              <h3
                class="fs-4 mb-3 d-flex justify-content-between align-items-center"
              >
                Province
              </h3>
              <div class="col">
              <div class="table-responsive">
                <table
                  class="table bg-white rounded shadow-sm table-hover text-center"
                >
                  <thead>
                    <tr>
                      <th scope="col" width="300">Category</th>
                      <th scope="col">Percentage rate</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      while($row = $getProvincereport->fetch_assoc()){
                        echo "<tr><td>".$row["province"]."</td><td>".$row["percentage"]."</td></tr>";
                      }
                    ?>
                    
                  </tbody>
                </table>
              </div>
                    </div>
            </div> -->
 <!-- city  -->
 <!-- <div class="row">
              <h3
                class="fs-4 mb-3 d-flex justify-content-between align-items-center"
              >
                City
              </h3>
              <div class="col">
              <div class="table-responsive">
                <table
                  class="table bg-white rounded shadow-sm table-hover text-center"
                >
                  <thead>
                    <tr>
                      <th scope="col" width="300">Category</th>
                      <th scope="col">Percentage rate</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      while($row = $getCityreport->fetch_assoc()){
                        echo "<tr><td>".$row["city"]."</td><td>".$row["percentage"]."</td></tr>";
                      }
                    ?>
                    
                  </tbody>
                </table>
              </div>
                    </div>
            </div> -->
            <!-- city  -->
 <div class="row">
              <h3
                class="fs-4 mb-3 d-flex justify-content-between align-items-center"
              >
                Mode of travel
              </h3>
              <div class="col">
              <div class="table-responsive">
                <table
                  class="table bg-white rounded shadow-sm table-hover text-center"
                >
                  <thead>
                    <tr>
                      <th scope="col" width="300">Category</th>
                      <th scope="col">Percentage rate</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      while($row = $getVehicle->fetch_assoc()){
                        echo "<tr><td>".$row["vehicleType"]."</td><td>".$row["percentage"]."</td></tr>";
                      }
                    ?>
                    
                  </tbody>
                </table>
              </div>
                    </div>
            </div>


             <!-- Travel type  -->
             <div class="row">
              <h3
                class="fs-4 mb-3 d-flex justify-content-between align-items-center"
              >
                Travel Type
              </h3>
              <div class="col">
                <table class="table bg-white rounded shadow-sm table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Travel Type</th>
                      <th scope="col">Total Availed</th>
                      <th scope="col">Percentage Rate</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      while($row = $getPromo->fetch_assoc()){
                        echo "<tr><td>".$row["travelType"]."</td><td>".$row["count"]."</td><td>".$row["percentage"]."</td></tr>";
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>


          </div>
        
          <!-- --------Booking Reports Section---------------- -->
          <div class="row g-3 my-2 section" id="Booking">


          <div class="row">
  <h3 class="fs-4 mb-3 d-flex justify-content-between align-items-center">Promo List 
   
  </h3>
  <div class="col">
  <div class="table-responsive">
    <table class="table bg-white rounded shadow-sm table-hover">
      <thead>
        <tr>
          <th scope="col">Promo Destination</th>
          <th scope="col">Start date </th>
          <th scope="col">End date</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($row = $getPromodata->fetch_assoc()){
            echo "<tr><td>".$row["destination"]."</td><td>".$row["startDate"]."</td><td>".$row["endDate"]."</td></tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
        </div>
</div>
<!-- Booking form  -->

 <!-- table  -->
<div class="row">
  <h3 class="fs-4 mb-3 d-flex justify-content-between align-items-center">Booking List
    <div>
      <button class="btn me-2" id="bookingAddButton" >Add</button>
      <button class="btn" id="bookingCancelButton">Cancel</button>
    </div>
  </h3>
  <div class="col">
  <div class="table-responsive">
    <table class="table bg-white rounded shadow-sm table-hover">
      <thead>
        <tr>
          <th scope="col">Country/Place</th>
          <th scope="col">Total Booking</th>
          <th scope="col">Total Percentage</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          while($row = $getBooking->fetch_assoc()){
            echo "<tr><td>".$row["Date"]."</td><td>".$row["Count"]."</td><td>".$row["percentage"]."</td></tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
        </div>
</div>
<!-- Booking form  -->

<form method="POST" action="function-booking.php" id="bookingForm">
  <!-- Checkbox container -->
  <div id="checkboxes" style="display: none;">
    <div class="mb-3">
      <label class="form-check-label">Travel Type</label><br />
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="economyCheckbox" name="type[]" value="Air" />
        <label class="form-check-label" for="economyCheckbox">Air</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="businessCheckbox" name="type[]" value="Sea" />
        <label class="form-check-label" for="businessCheckbox">Sea</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="firstCheckbox" name="type[]" value="Land" />
        <label class="form-check-label" for="firstCheckbox">Land</label>
      </div>
    </div>
    <button type="submit" class="btn" name="type_submit" id="chooseButton">Choose</button>
  </div>
</form>
          </div>
        </div>

        <!-- Customer Booking  -->
        <div class="row g-3 my-2 section" id="Customer-Booking">
 <!-- table  -->
 <div class="row my-5">
  <h3>Active Customer Bookings</h3>
  <div class="col">
    <div class="table-responsive">
      <table class="table bg-white rounded shadow-sm table-hover">
        <thead>
          <tr>
            <th scope="col" class="text-uppercase">Username</th>
            <th scope="col" class="text-uppercase">Travel Type</th>
            <th scope="col" class="text-uppercase">Vehicle Type</th>
            <th scope="col" class="text-uppercase">First Name</th>
            <th scope="col" class="text-uppercase">Middle Initial</th>
            <th scope="col" class="text-uppercase">Last Name</th>
            <th scope="col" class="text-uppercase">Suffix</th>
            <th scope="col" class="text-uppercase">Destination</th>
            <th scope="col" class="text-uppercase">Dept Date</th>
            <th scope="col" class="text-uppercase">Return Trip</th>
            <th scope="col" class="text-uppercase">Return Date</th>
            <th scope="col" class="text-uppercase">Class</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($row = $getCB->fetch_assoc()){
              if($row["travelType"] == ""){
                $row["travelType"] = "Companion";
              }
              if($row["middleinitial"] == ""){
                $row["middleinitial"] = "N/A";
              }
              if($row["suffix"] == "" || $row["suffix"] == "None"){
                $row["suffix"] = "N/A";
              }
              echo "<tr><td>".$row["username"]."</td><td>".$row["travelType"]."</td><td>".$row["vehicleType"]."</td><td>".$row["firstname"]."</td><td>".$row["middleinitial"]."</td><td>".$row["lastname"]."</td><td>".$row["suffix"]."</td><td>".$row["Destination"]."</td><td>".$row["deptDate"]."</td><td>".$row["returnTrip"]."</td><td>".$row["returnDate"]."</td><td>".$row["class"]."</td></tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

        </div>
         <!-- Transaction Section -->
         <div class="row g-3 my-2 section" id="Transactions">
         
 <!-- table  -->
 <div class="row my-5"> <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center pb-2">
            <h3>Transactions</h3>
            <button class="btn" id="paymentAdmin" onclick="location.href='payment.php'">For failed transactions</button>
        </div>
    </div>
  <div class="col">
    <div class="table-responsive">
      <table class="table bg-white rounded shadow-sm table-hover">
        <thead>
          <tr>
            <th scope="col" class="text-uppercase">#</th>
            <th scope="col" class="text-uppercase">Name</th>
            <th scope="col" class="text-uppercase">Mode of payment</th>
            <th scope="col" class="text-uppercase">Amount</th>
            <th scope="col" class="text-uppercase">Transaction ID</th>
            <th scope="col" class="text-uppercase"></th>
            
          </tr>
        </thead>
        <tbody>
          <?php
            while($row = $getTransactionData->fetch_assoc()){
              echo "<tr><td>".$row["controlNo"]."</td><td>".$row["username"]."</td><td>".$row["mop"]."</td><td>".$row["amount"]."</td><td>".$row["transactionID"]."</td><td><form action='function-approval.php' method='POST'><input type='hidden' name='id' value='".$row["controlNo"]."'><button type='submit' name='approve' class='btn approve-btn'>Approve</button><button type='submit' name='deny' class='btn deny-btn'>Deny</button></form></td></tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

        </div>
      </div>
    </div>

    <!-- hiding the form  -->
   
    
  </body>
</html>

<!-- sales analytics chart  -->
<script src="admin-playground.js"></script>