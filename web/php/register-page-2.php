<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="../js/register-page-dropdown.js"></script>
    <link rel="stylesheet" href="../css/form-styles.css">

    <title>TravelIQ</title>
</head>
<body class="body">

<header id="Home">
  <div class="container-fluid">
    <!-- Navigation bar  -->
    <nav class="navbar navbar-expand-lg navbar-light text-light fixed-top">
      <div class="container-fluid">
        <!-- put logo here  -->
        <a class="navbar-brand" href="#">
        <img src="../../../pics/TravelIQ-Logo-text.png" alt="" srcset="" class="navbar-logo">
            
        </a>
        <!-- hamburger navbar  -->
        <button class="navbar-toggler bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <!-- links  -->
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav d-flex flex-column flex-lg-row align-items-center mx-auto ms-auto mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customer-booking.php">Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customer-selection-page.php">Gallery</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#customer-contact-us.php">Contact Us</a>
            </li>
          </ul>
          <!-- Ensure the login button remains aligned -->
          <div class="d-flex flex-lg-row align-items-center justify-content-center nav-butts pt-auto pb-2">
            <a href="web/php/login.php" class="text-white text-decoration-none mb-2 mb-lg-0 me-lg-2 text-decoration-none px-3 py-1 rounded-4" 
            style="background-color: pink; margin-left: 5px">Login</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>


<section class="p-5 bg-reg">
        <!-- Jumbotron -->
        <section class="bg-reg">
      <!-- Jumbotron -->
      <div class="px-4 py-5 px-md-5 text-center text-lg-start d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container">
          <div class="row gx-lg-5 align-items-center justify-content-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card ">
              <div class="card-header bg-transparent">
        <button class="btn" onclick="goBack()"><i class="bi bi-arrow-left"></i></button>
    </div>
                <p class="display-4 reg-text fw-bold text-center">Sign Up!</p>
                            <div class="card-body py-5 px-md-5">

                            <!-- form  --><form method="POST" action="function-register.php">
    <div class="row">
        <!-- Gender -->
        <div class="col-md-6 mb-4">
            <div data-mdb-input-init class="form-outline">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select" onchange="changeGender()" id="gender" required>
                    <option value="" selected disabled hidden>Choose one</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mb-4" id="genderOtherContainer" style="display: none;">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="genderOther">Enter your gender</label>
                <input type="text" name="genderOther" id="genderOther" class="form-control" autocomplete="off" required>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Region -->
        <div class="col-md-6 mb-4">
            <div data-mdb-input-init class="form-outline">
                <label for="select-region" class="form-label">Region</label>
                <select name="select-region" id="select-region" onchange="setProvince()" class="form-select" required>
                    <option value="" selected disabled hidden>-- Region --</option>
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
        </div>
        <!-- Province -->
        <div class="col-md-6 mb-4">
            <div data-mdb-input-init class="form-outline">
                <label for="select-province" class="form-label">Province</label>
                <select name="select-province" id="select-province" onchange="setCity()" class="form-select" required>
                    <option value="" selected disabled hidden>-- Province --</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- City -->
        <div class="col-md-6 mb-4">
            <div data-mdb-input-init class="form-outline">
                <label for="select-city" class="form-label">City</label>
                <select name="select-city" id="select-city" class="form-select" required>
                    <option value="" selected disabled hidden>-- City --</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Button -->
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-8 mb-4 text-center">
            <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-block mb-2" value="Register" name="page-submit-2" autocomplete="off">
        </div>
    </div>
</form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>

</body>
</html>