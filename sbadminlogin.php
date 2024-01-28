<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body class="bg-gradient-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/dogs/san%20bartolome.jpg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                    <form name="frmLogin" action = "SBAdminLoginAuth.php" onsubmit = "return validation()" method = "POST"> 
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    <form class="user">
                                        <div class="mb-3"><input class="form-control form-control-user" type="text" id="username" aria-describedby="emailHelp" pattern="[A-Za-z]{1,}" placeholder="Admin Username" name="username" required></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password" required></div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                        <hr>
                                    </form>
                                    <!-- <div class="text-center"><a class="small" href="SBRegistrationInsert.php">Create an Account!</a></div> -->
                                    <script>  
                                        function validation()  
                                        {  
                                            var id=document.frmLogin.username.value;  
                                            var ps=document.frmLogin.password .value;  
                                            if(id.length=="" && ps.length=="") {  
                                                alert("User Name and Password fields are empty");  
                                                return false;  
                                            }  
                                            else  
                                            {  
                                                if(id.length=="") {  
                                                    alert("User Name is empty");  
                                                    return false;  
                                                }   
                                                if (ps.length=="") {  
                                                alert("Password field is empty");  
                                                return false;  
                                                }  
                                            }                             
                                        }  
                                    </script>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>