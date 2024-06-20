<?php
    session_start();

    require "../connect.php";

    $setDetails = "SELECT * FROM userTable WHERE username = '".$_SESSION["username"]."'";
    $getDetails = $conn->query($setDetails);
    $placeDetails = $getDetails->fetch_assoc();
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

    <style>
        body {
            background-image: url("../../../pics/greece.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            height: 100vh;
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
<!-- edit profile -->
<div class="container mt-5 pt-1">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <!-- Dummy information -->
                    <div id="userInfo">
                        <h5 class="card-title text-center">Customer Information</h5>
                        <p><strong>Username: </strong><?php echo $_SESSION["username"]; ?></p>
                        <p><strong>Email: </strong><?php echo $placeDetails["email"]; ?></p>
                        <p><strong>Security Code: </strong><?php echo $placeDetails["referralcode"]; ?></p>
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
                            <label for="password" class="form-label">Security Code</label>
                            <input type="password" class="form-control form-control-lg" name="refCode" id="refCode"  placeholder="<?php echo $placeDetails["referralcode"]; ?>" disabled>
                        </div>
                        <div class="text-center d-flex justify-content-center">
                            <button type="button" class="btn btn-lg" id="editModeBck" name="editbck">Back</button>
                            <button type="submit" class="btn b btn-lg mx-1" name="save">Save Changes</button>
                        </div>
                    </form>
                    <!-- Edit mode toggle button -->
                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-lg mx-auto" id="editModeBtn" name="edit">Edit Profile</button>
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
