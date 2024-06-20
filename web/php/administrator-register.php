<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelIQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/form-styles.css">
</head>
<body class="body">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
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
    

<div class="container ">
    <section class="vh-100">
        <div class="row h-90 justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header align-items-start bg-transparent ms-1 ">
                        <button class="btn" onclick="goBack()"><i class="bi bi-arrow-left"></i></button>
                    </div>
                    <span class="display-4 reg-text fw-bold mb-2 text-center ">Admin Sign up!</span> 
                    <div class="card-body px-md-5 text-center pb-5"> 
                       
                        <!-- form -->
                        <form method="POST" action="function-register.php">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="username" name="username" class="form-control" autocomplete="off" required>
                                        <label class="form-label" for="username">Username</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 position-relative">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="password" id="password" class="form-control" name="password" autocomplete="off" required>
                                        <label class="form-label" for="password">Password</label>
                                        <span class="toggle-btn position-absolute end-0 top-0 bottom-0 m-2 me-4" onclick="togglePassword()"><i class="fas fa-eye"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="useremail" name="email" class="form-control" autocomplete="off" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                                <label class="form-label" for="useremail">Email address</label>
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="number" id="referral-code" name="referral-code" class="form-control no-spinner" placeholder="Enter a referral code number">
                                <label class="form-label" for="referral-code">Referral code</label>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-sm-8 mb-2 text-center">
                                    <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-block mb-2" value="Register" name="administrator-register" autocomplete="off">
                                </div>
                            </div>
                        </form>
                        <!-- End of form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="../js/password-toggler.js"></script>
</body>
</html>
