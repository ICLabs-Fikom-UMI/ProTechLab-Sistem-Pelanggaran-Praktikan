<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">

    <style>
        body {
            background-image: url("<?= BASEURL; ?>/img/pelataran.svg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            width: 100%;
        }

        .login-form {
            background-color: #fff;
            margin-left: 10vw;
            padding: 6vh 1vw;
            max-width: 23vw;
        }

        .logo {
            margin-bottom: 20px;
            text-align: center;
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

        .lebar{
            width: 20vw;
        }
    </style> 
</head>

<body>

<div class="d-flex vh-100 align-items-center justify-content-center">
    <div style="width: 60%" class="d-flex align-items-center justify-content-center">
        <img src="<?= BASEURL; ?>/img/logoFikom.png" alt="" width="500px" style="padding: 10px">
    </div>
    <div style="width: 60%; padding: 10px" class=" d-flex align-items-center justify-content-center">
        <div class="p-2">
            <div class="row justify-content-center">
                <div class="login-form rounded-4 border border-5">
                    <div class="d-flex align-items-center ms-5">
                        <img src="<?= BASEURL; ?>/img/logo.png" alt="" width="70px" class="mr-2">
                        <h5 class="ms-2">ProTechLab <br>Observer</h5>
                    </div>
                    <h3 class="login-title">Login</h3>
                    <p></p>
                    <form action="<?= BASEURL; ?>/login/authenticate" class="lebar" method="post">
                        <div class="mb-3 ">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mt-4">
                            <button class="btn btn-outline-info" type="submit" name="login">Login</button>
                        </div>
                        <p></p>
                        <a href="<?= BASEURL; ?>/home ">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
