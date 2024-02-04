<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            width: 100%;
            overflow-x: hidden;
        }

        #carouselExampleAutoplaying {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .carousel-inner {
            height: 100%;
        }

        .carousel-item {
            height: 100%;
        }

        .login-form {
            background-color: white;
            border-radius: 15px;
            margin: 10vh auto; /* Center the form vertically */
            padding: 6vh 1vw;
            max-width: 23vw;
            position: relative;
            z-index: 1;
        }

        .login-form img {
            width: 70px; /* Adjust the width of the logo */
            margin-right: 10px; /* Add margin to the right of the logo */
        }

        .login-title {
            text-align: center;
            margin-top: 10px;
        }

        .btn-login {
            font-weight: bold;
            background-color: #000;
            color: #fff;
            border-radius: 5px;
        }

        .lebar {
            width: 20vw;
        }
    </style>
</head>

<body>

    <!-- Carousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Ganti src dan alt sesuai kebutuhan -->
            <div class="carousel-item active">
                <img src="<?= BASEURL; ?>/img/ds.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="<?= BASEURL; ?>/img/ds1.jpeg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="<?= BASEURL; ?>/img/iot.png" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <!-- Tombol navigasi carousel -->
        <a class="carousel-control-prev" href="#carouselExampleAutoplaying" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleAutoplaying" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    

    <!-- Form login -->
    
    <div class="d-flex vh-100 align-items-center justify-content-center">
        <div class="p-2">
            <div class="row justify-content-center">
                <div class="login-form">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="<?= BASEURL; ?>/img/logo.png" alt="" width="70px" class="mr-2">
                        <h5 class="ms-2">ProTechLab <br>Observer</h5>
                    </div>
                    <br>
                    <h3 class="login-title">Login</h3>
                    <p></p>
                    <form action="<?= BASEURL; ?>/login/authenticate" class="lebar" method="post">
                    
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mt-4 text-center">
                            <button class="btn btn-outline-dark" type="submit" name="login">Login</button>
                        </div>

                    </form>
                    <a href="<?= BASEURL; ?>/home/index">back</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap dan JavaScript lainnya -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
