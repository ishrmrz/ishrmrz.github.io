<?php

include ('Mapping2.php');
include 'scripts.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Map of San Bartolome</title>
    <link rel="stylesheet" href="assets2/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
    <div class="container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor" style="padding-right: 0px;margin-right: 10px;width: 30px;height: 30px;">
                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                <path d="M344 48H376C389.3 48 400 58.75 400 72C400 85.25 389.3 96 376 96H344V142.4L456.7 210C471.2 218.7 480 234.3 480 251.2V512H384V416C384 380.7 355.3 352 320 352C284.7 352 256 380.7 256 416V512H160V251.2C160 234.3 168.8 218.7 183.3 210L296 142.4V96H264C250.7 96 240 85.25 240 72C240 58.75 250.7 48 264 48H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V48zM24.87 330.3L128 273.6V512H48C21.49 512 0 490.5 0 464V372.4C0 354.9 9.53 338.8 24.87 330.3V330.3zM592 512H512V273.6L615.1 330.3C630.5 338.8 640 354.9 640 372.4V464C640 490.5 618.5 512 592 512V512z"></path>
            </svg><a class="navbar-brand d-flex align-items-center" href="SBUserDash.php"><span>San Bartolome</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="SBUserDash.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="SBUserWedding.php">Weddings</a></li>
                    <li class="nav-item"><a class="nav-link" href="SBUserBaptismal.php">Baptismals</a></li>
                    <li class="nav-item"><a class="nav-link" href="SBUserConfirmation.php">Confirmations</a></li>
                    <li class="nav-item"><a class="nav-link active" href="SBUserMap.php">Map of San Bartolome</a></li>
                    <li class="nav-item"><a class="nav-link" href="SBUserContact.php">Contact Us!</a></li>
                    <li class="nav-item"><a class="nav-link" onclick="return confirm('Are you sure you want to log out?')"  href="index.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-5 mt-5">
        <div class="container py-4 py-xl-5">
            <div class="row gy-2 gy-md-0">
                <div class="col-md-2 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div style="max-width: 250px; max-height: 250px;">
                        <div class="display-5 fw-bold mb-4"></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/startup-modern.js"></script>
</body>

</html>