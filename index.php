<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>TravelIQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <!-- link relationships -->
    <link rel="stylesheet" href="./web/css/styles.css" />

    <!-- Font Awesome Cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <!-- Font Awesome Cdn -->

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
    <script src="/web/js/index.js"></script>
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
            ></a
            >
            <!-- hamburger navbar  -->
            <button
              class="navbar-toggler bg-transparent"
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
                class="navbar-nav d-flex flex-column flex-lg-row align-items-center mx-auto mb- mb-lg-0"
              >
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#Home">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#Gallery">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#About">About</a>
                </li>
              </ul>
              <div
                class="d-flex flex-lg-row align-items-center justify-content-center nav-butts pt-auto pb-2"
              >
                <a
                  href="web/php/login.php"
                  class="text-white text-decoration-none mb-2 mb-lg-0 me-lg-3"
                  >Login</a
                >
                <a
                  href="web/php/register-page-1.php"
                  class="text-white text-decoration-none px-3 py-1 rounded-4"
                  style="background-color: pink; margin-left: 5px"
                  >Sign up</a
                >
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!-- navbar end -->

    <!-- Carousel -->
   
    <div>
      <div
        id="carouselExampleCaptions"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <!-- 1st carousel item  -->
        <div class="carousel-inner">
          <div class="carousel-item active c-item vh-100">
            <img src="../../../pics/boracay.png" class="d-block w-100 c-img" />
            <div class="carousel-caption top-0 d-flex flex-column justify-content-center align-items-center">
            <p class="fs-5 mt-5 ">Don't know where to go?</p>
            <h1 class="display-6 fw-semibold text-uppercase"> 
              <span class="text-warning">Boracay</span> is just few clicks away
</h1>
              
              
              <!-- Buttons for booking -->
              <div class="slider-btn">
        
                <a href="customer-booking.php" class="btn  px-4 py-2 fs-5 mt-5 book-btn">Take me</a>
                 
                
              </div>
              <div class="carousel-caption text-uppercase bottom-0">
      <p > Scroll down to see more</p>
    </div>
            </div>
          </div>
          <div class="carousel-item c-item vh-100">
            <img src="../../../pics/palawan.png" class="d-block w-100 c-img" />
            <div class="carousel-caption top-0 d-flex flex-column justify-content-center align-items-center">
            <p class="fs-5 mt-5 ">Don't know where to go?</p>
            <h1 class="display-6 fw-semibold text-uppercase"> 
              <span class="text-warning">Palawan</span> is just few clicks away
</h1>
              <!-- Buttons for booking -->
              <div class="slider-btn">
        
        <a href="customer-booking.php" class="btn  px-4 py-2 fs-5 mt-5 book-btn">Take me</a>
         
        
      </div>
              <div class="carousel-caption text-uppercase bottom-0">
      <p > Scroll down to see more</p>
    </div>
            </div>
          </div>
          <div class="carousel-item c-item vh-100">
            <img src="../../../pics/siargao.png" class="d-block w-100 c-img" />
            <div class="carousel-caption top-0 d-flex flex-column justify-content-center align-items-center">
            <p class="fs-5 mt-5 ">Don't know where to go?</p>
            <h1 class="display-6 fw-semibold text-uppercase"> 
              <span class="text-warning">Siargao</span> is just few clicks away
</h1>
              <!-- Buttons for booking -->
              <div class="slider-btn">
        
        <a href="customer-booking.php" class="btn  px-4 py-2 fs-5 mt-5 book-btn">Take me</a>
         
        
      </div>
              <div class="carousel-caption text-uppercase bottom-0">
      <p > Scroll down to see more</p>
    </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- Gallery  -->
    <section class="gallery pb-5 pt-5" id="Gallery">
      <div class="container mt-5 pb-5 gallery-bg">
        <div class="main-txt">
          <h1 class="text-center display-6 fw-medium text-capitalized h1-text">
            Popular Destinations
          </h1>
        </div>
        <!-- Gallery Photos  -->
        <div class="row" style="margin-top: 30px">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card card-gal">
              <a href="web/php/register-page-1.php">
                <div class="image-overlay"></div>
                <img src="pics/places/AMS.png" alt="" height="230px" />
                <div class="card-img-overlay card-img">
                  <h5 class="card-title fw-semibold">Amsterdam</h5>
                </div>
              </a>
            </div>
          </div>
          <!-- 2nd pic  -->
          <div class="col-md-4 py-3 py-md-0">
            <div class="card card-gal">
              <a href="web/php/register-page-1.php">
                <div class="image-overlay"></div>
                <img src="pics/places/FRN.png" alt="" height="230px" />
                <div class="card-img-overlay card-img">
                  <h5 class="card-title fw-semibold">France</h5>
                </div>
              </a>
            </div>
          </div>
          <!-- 3rd pic  -->
          <div class="col-md-4 py-3 py-md-0">
            <div class="card card-gal">
              <a href="web/php/register-page-1.php">
                <div class="image-overlay"></div>
                <img src="pics/places/JPN.png" alt="" height="230px" />
                <div class="card-img-overlay card-img">
                  <h5 class="card-title fw-semibold">Japan</h5>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- 4th pic  -->
        <div class="row" style="margin-top: 30px">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card card-gal">
              <a href="web/php/register-page-1.php">
                <div class="image-overlay"></div>
                <img src="pics/places/KOR.png" alt="" height="230px" />
                <div class="card-img-overlay card-img">
                  <h5 class="card-title fw-semibold">South Korea</h5>
                </div>
              </a>
            </div>
          </div>
          <!-- 5thpic  -->
          <div class="col-md-4 py-3 py-md-0">
            <div class="card card-gal">
              <a href="web/php/register-page-1.php">
                <div class="image-overlay"></div>
                <img src="pics/places/PLWN.png" alt="" height="230px" />
                <div class="card-img-overlay card-img">
                  <h5 class="card-title fw-semibold">Palawan</h5>
                </div>
              </a>
            </div>
          </div>
          <!-- 6th pic  -->
          <div class="col-md-4 py-3 py-md-0">
            <div class="card card-gal">
              <div class="image-overlay"></div>
              <a href="web/php/register-page-1.php">
                <img
                  src="pics/places/swz.jpeg"
                  class="card-img-top"
                  alt=""
                  height="230px"
                />
                <div class="card-img-overlay card-img">
                  <h5 class="card-title fw-semibold">Switzerland</h5>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About US -->
    <section class="about section-padding about-us" id="About">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img class="img-fluid img-item" src="pics/travel-iq.png" />
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5 mt-5 pb-5">
            <div class="about-text pt-5">
              <h2>
                We Provide the Best Quality<br />
                Services Ever
              </h2>
              <p>
                Welcome to Travel IQ, your ultimate destination for all things
                travel! Whether you're a seasoned globetrotter or planning your
                first adventure, Travel IQ is designed to provide you with
                everything you need to make your journey unforgettable.
              </p>
              <a class="btn" href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->

    <footer class="footer-bg text-center">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn btn-primary btn-floating m-1 i-icons"
            style="background-color: #3b5998"
            href="#!"
            role="button"
            ><i class="fab fa-facebook-f"></i>
          </a>

          <!-- Twitter -->
          <a
            class="btn btn-primary btn-floating m-1 i-icons"
            style="background-color: #55acee"
            href="#!"
            role="button"
            ><i class="fab fa-twitter"></i
          ></a>

          <!-- Google -->
          <a
            class="btn btn-primary btn-floating m-1 i-icons"
            style="background-color: #dd4b39"
            href="#!"
            role="button"
            ><i class="fab fa-google"></i
          ></a>

          <!-- Instagram -->
          <a
            class="btn btn-primary btn-floating m-1 i-icons"
            style="background-color: #ac2bac"
            href="#!"
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>
        </section>

        <!-- Section: Text -->

        <!-- Section: Text -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2024 Copyright:
        <a class="text-dark" href="#">TravelIQ</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
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

<!-- additional navbar  -->
<!-- Drop down menu  -->
<!-- <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> -->

<!-- Saerch bar  -->
<!-- <form class="d-flex" role="search">
                <input
                  class="form-control me-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form> -->
