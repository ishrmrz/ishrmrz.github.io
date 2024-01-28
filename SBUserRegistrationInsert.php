<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Navbar-Dropdown-List-Item.css">
</head>

<body class="bg-gradient-primary">
    <form action="SBUserRegistrationInsertProcess.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex" style="height: 500px;">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;img/san bartolome panel bg.jpg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="first" required></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleLastName" placeholder="Last Name" name="last" required></div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="user" required></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password" required></div>
                                    
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit" name="submit">Register Account</button>
                                <hr>
                                <hr>
                             
                            <div class="text-center"></div>
                            <div class="text-center"><a class="small" href="index.php">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
    </form>
</body>

</html>