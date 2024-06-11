<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <link

      rel="stylesheet"

      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"

    />

    <!-- flat pick  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <link rel="stylesheet" href="../css/form-styles.css" />
    
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
        <img src="../../../pics/TravelIQ-Logo-text.png" alt="" srcset="" class="navbar-logo"></a
            >
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


    
    <!-- Section: Design Block -->
    <section class="bg-reg">
      <!-- Jumbotron -->
      <div class="px-4 py-5 px-md-5 text-center text-lg-start d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container">
          <div class="row gx-lg-5 align-items-center justify-content-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <!-- background  -->
              <div class="card ">
              <div class="card-header bg-transparent">
        <button class="btn" onclick="goBack()"><i class="bi bi-arrow-left"></i></button>
    </div>
                <p class="display-4 reg-text fw-bold text-center">Sign Up!</p>
                <!-- background  -->
                <div class="card-body py-5 px-md-6">
                  <!-- form  -->
                  <form method="POST" action="function-register.php" class="my-form">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="username" name="username" class="form-control" autocomplete="off" required />
                          <label class="form-label" for="username">Username</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
  <div data-mdb-input-init class="form-outline">
    <div class="input-group">
      <input
        type="password"
        id="password"
        name="password"
        class="form-control"
        autocomplete="off"
        required
      />
      <span
        class="input-group-text toggle-btn"
        onclick="togglePassword()"
      >
        <i class="bi bi-eye"></i>
      </span>
    </div>
    <label class="form-label" for="password">Password</label>
  </div>
</div>


                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" id="useremail" name="useremail" class="form-control" autocomplete="off" required />
                      <label class="form-label" for="useremail">Email address</label>
                    </div>
                    <!-- Birthdate input group -->
                    <div class="col-md-6 mb-4 ">
                      <div class="form-outline">
                        <input type="date" id="birthdate" name="birthdate" class="form-control" required>
                        <label class="form-label" for="birthdate">Birthdate</label>
                      </div>
                    </div>
                    <!-- Submit button -->
                    <div class="row justify-content-center align-items-center">
                      <div class="col-sm-8 mb-4 text-center">
                        <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-block mb-2" value="Next" name="page-submit-1" autocomplete="off" />
                      </div>
                    </div>
                  </form>
                  <!-- End of form -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Jumbotron -->32
    </section>
    <!-- End of Section: Design Block -->
  </body>
</html>

<script>
  flatpickr("#birthdate", {
      dateFormat: "Y-m-d",
      maxDate: new Date().fp_incr(-1) 
  });

  function goBack() {
      window.history.back();
  }
</script>
    <script src="../js/password-toggler.js"></script>