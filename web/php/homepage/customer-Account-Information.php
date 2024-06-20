<?php

    session_start();

    require "../connect.php";

    $sql = "SELECT * FROM usertable INNER JOIN demogTable ON demogTable.username = '".$_SESSION["username"]."' AND userTable.username = '".$_SESSION["username"]."'";
    $getSql=$conn->query($sql);
    $row=$getSql->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <!-- link relationships -->
    <link rel="stylesheet" href="../../css/account-styles.css" />

    <!-- Font Awesome Cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />
    <!-- Google Fonts -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
 

    <!-- <style>
        .navbar.navbar-expanded {
  background-color: #091d36;
}
    </style> -->
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
<!-- edit profile --><div class="container mt-5 pt-1">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                   
                    <!-- Dummy information -->
                    <div id="userInfo">
                    <h5 class="card-title text-center">Customer Information</h5>
                        <p><strong>Username: </strong><?php echo $row["username"]; ?></p>
                        <p><strong>Email: </strong><?php echo $row["email"]; ?></p>
                        <p><strong>Birthday: </strong><?php echo $row["birthday"]; ?></p>
                        <p><strong>Gender: </strong> <?php echo $row["gender"]; ?></p>
                        <p><strong>Region: </strong><?php echo $row["region"]; ?></p>
                        <p><strong>Province: </strong><?php if($row["region"] == "NCR"){ echo "Metro Manila";} else {echo $row["province"];} ?></p>
                        <p><strong>City: </strong><?php echo $row["city"]; ?></p>
                    </div>
                    <!-- Form for editing -->
                    <form method="POST" action="function-account-edit.php" id="editForm" style="display: none;">
                    <h5 class="card-title text-center">Edit Information</h5>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="Enter your new username" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Enter your new email" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Enter your new password" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input type="date" class="form-control form-control-lg" name="birthday" id="birthday" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select form-control-lg" id="gender" name="gender" onchange="changeGender()"> 
                                <option selected disabled>Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="select-region" class="form-label">Region</label>
                                <select class="form-select form-control-lg" id="select-region" name="region" onchange="setProvince()" >
                                    <option selected disabled>Region</option>
                                    <option value="NCR">NCR</option>
                                    <option value="CAR">CAR</option>
                                    <option value="Region-I">Region-I</option>
                                    <option value="Region-II">Region-II</option>
                                    <option value="Region-III">Region-III</option>
                                    <option value="Region-IV-A">Region-IV-A</option>
                                    <option value="Region-IV-B">Region-IV-B</option>
                                    <option value="Region-V">Region-V</option>
                                    <option value="Region-VI">Region-VI</option>
                                    <option value="Region-VII">Region-VII</option>
                                    <option value="Region-VIII">Region-VIII</option>
                                    <option value="Region-IX">Region-IX</option>
                                    <option value="Region-X">Region-X</option>
                                    <option value="Region-XI">Region-XI</option>
                                    <option value="Region-XII">Region-XII</option>
                                    <option value="Region-XIII">Region-XIII</option>
                                    <option value="BARMM">BARMM</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="select-province" class="form-label">Province</label>
                                <select class="form-select form-control-lg" id="select-province" name="province" onchange="setCity()">
                                    <option selected disabled>Province</option>
                                    <!-- Add province options here -->
                                </select>
                            </div>
                            <div class="col">
                                <label for="select-city" class="form-label">City</label>
                                <select class="form-select form-control-lg" id="select-city" name="city">
                                    <option selected disabled>City</option>
                                    <!-- Add city options here -->
                                </select>
                            </div>
                        </div>
                        <div class="text-center d-flex justify-content-center ">
                        <button type="button" class="btn btn-lg  " id="editModeBck" name="editbck" >Back</button>
    <button type="submit" class="btn b btn-lg mx-1" name="save">Save Changes</button>
   
</div>

                    </form>
                    <!-- Edit mode toggle button -->
                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-lg mx-auto" id="editModeBtn" name="edit" >Edit Profile</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>

<script src="../../js/register-page-dropdown.js"></script>
<script src="../../js/account-info.js"></script>

