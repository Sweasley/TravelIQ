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

    <link

      rel="stylesheet"

      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css"

    />

    <link

      rel="stylesheet"

      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"

    />

    <link rel="stylesheet" href="../css/login-styles.css" />
 

 

    <title>TravelIQ</title>

  </head>

  <body><header id="Home">
  <div class="container-fluid">
    <!-- Navigation bar  -->
    <nav class="navbar navbar-expand-lg navbar-light text-light fixed-top login-nav">
      <div class="container-fluid">
        <!-- put logo here  -->
        <a class="navbar-brand" href="#">
          <img src="../../../pics/TravelIQ-Logo-text.png" alt="" class="navbar-logo">
        </a>
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
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav d-flex flex-column flex-lg-row align-items-center">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="customer-homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customer-booking.php">Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customer-selection-page.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customer-contact-us.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>


    <div class="container-fluid ">

      <div class="row lg-me-5">

      <div class="col-lg-6 background-image ml-n3 d-flex align-items-center justify-content-center">

          <div class="text-container">

            <h1 class="my-5 display-3 fw-bold offer-text">Unlock Your Journey: Seamless Travel <br> Starts Here!</h1>

            <p class="parag">

            At our travel agency booking website login, we understand that your journey begins the moment you click that login button. That's why we've crafted an experience that not only simplifies the booking process but also unlocks a world of possibilities. Whether you're seeking adventure in exotic destinations or craving a relaxing retreat, our platform empowers you to curate your dream itinerary with ease. From flights, tours to activities, our comprehensive database ensures that every aspect of your trip is taken care of. So, why wait? Login now and embark on your next unforgettable adventure. Your journey awaits, and it all starts right here.

            </p>

          </div>

        </div>

        <div class="col-lg-6 form-container">

          <div class="form-content">

          <div class="d-flex justify-content-center mb-4">

            <img src="/pics/travel-iq.png" alt="TravelIQ3 Logo" class="logo">

          </div>

            <h2 class="display-4 reg-text fw-bold heading-center">Welcome!</h2>

            <h4 class="display-10 reg-text heading-center mb-5">

              Login to your account

            </h4>

            <form action="function-login.php" method="POST">

              <div class="mb-3">

                <label for="email" class="form-label">Email</label>

                <input

                  type="text"

                  id="email"

                  name="email"

                  class="form-control"

                  autocomplete="off"

                  required

                />

              </div>

              <div class="mb-3 position-relative">

                <label for="password" class="form-label">Password</label>

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

                    <i class="fas fa-eye me-3"></i>

                  </span>

                </div>

              </div>

              <div class="d-grid gap-2">

                <button type="submit" class="btn btn-primary" name="login">

                  LOGIN

                </button>

              </div>

              <div class="text-center mt-3">

                <a href="register-page-1.php">No account yet? Click here</a>

              </div>

            </form>

          </div>

        </div>

      </div>

    </div>

    <script src="../js/password-toggler.js"></script>

  </body>

</html>