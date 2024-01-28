<?php

include('dbconn.php'); 
$query = "SELECT * FROM test_pastor";
$resultquery = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Insert Baptismal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Dropdown-List-Item.css">
</head>

<body id="page-top">
    <form action="SBBaptismalInsertProcess.php" method="POST" enctype="multipart/form-data"> 
    <div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><i class="fas fa-church" style="font-size: 23px;width: 30px;height: 20px;"></i>
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>SAN BARTOLOME</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" href="index.html" id="accordionSidebar" style="padding-bottom: 104px;margin-bottom: -2px;">
                    <li class="nav-item"><a class="nav-link active" href="SBDash.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item dropdown menu_links"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" style="margin-right: 10px;color: var(--bs-accordion-bg);border-color: rgba(0,0,0,0);">Wedding</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="SBWeddingDisplay.php">Display Wedding Details</a><a class="dropdown-item" href="SBWeddingInsert.php">Add Wedding Details<br></a></div>
                    </li>
                    <li class="nav-item dropdown menu_links"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" style="margin-right: 10px;color: var(--bs-accordion-bg);border-color: rgba(0,0,0,0);">Baptismal</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="SBBaptismalDisplay.php">Display Baptismal Details</a><a class="dropdown-item" href="SBBaptismalInsert.php">Add Baptismal Details<br></a></div>
                    </li>
                    <li class="nav-item dropdown menu_links"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" style="margin-right: 10px;color: var(--bs-accordion-bg);border-color: rgba(0,0,0,0);">Confirmation</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="SBConfirmationDisplay.php">Display Confirmation Details</a><a class="dropdown-item" href="SBConfirmationInsert.php">Add Confirmation Details<br></a></div>
                    </li>
                    <li class="nav-item dropdown menu_links"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" style="margin-right: 10px;color: var(--bs-accordion-bg);border-color: rgba(0,0,0,0);">Pastors</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="SBPastorDisplay.php">Display Pastoral Details</a><a class="dropdown-item" href="SBPastorInsert.php">Add Pastor<br></a></div>
                    </li>
                    <li class="nav-item dropdown menu_links"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" style="margin-right: 10px;color: var(--bs-accordion-bg);border-color: rgba(0,0,0,0);">Users</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="SBRegistrationDisplay.php">Display User Details</a><a class="dropdown-item" href="SBRegistrationInsert.php">Add User<br></a></div>
                    </li>
                    
                    <li class="nav-item"><a class="nav-link active" href="Mapping.php"><i class="fas fa-map-marked-alt"></i><span>San Bartolome Map</span></a><a class="nav-link active" onclick="return confirm('Are you sure you want to log out?')"  href="index.php"><i class="fab fa-dyalog"></i><span>Logout</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1"></li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Ishmael Ramirez</span><img class="border rounded-circle img-profile" src="assets/img/avatars/id%20white%20bg.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" onclick="return confirm('Are you sure you want to log out?')"  href="index.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Baptismal Service</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4 col-xl-3">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/san%20bartolome.jpg" width="160" height="160">
                                    <div class="mb-3"></div><strong>San Bartolome Baptismal</strong>
                                </div>
                            </div>
                            <div class="card"><img class="card-img-top w-100 d-block" src="img/baptismal%20logo.jpg" width="289" height="155">
                                <div class="card-body">
                                    <h4 class="card-title">What is Baptism</h4>
                                    <p class="card-text">Baptism is a Christian sacrament of initiation and adoption, almost invariably with the use of water. It may be performed by sprinkling or pouring water on the head, or by immersing in water either partially or completely, traditionally three times, once for each person of the Trinity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Baptismal Details</p>
                                        </div>
                                        <div class="card-body">
                                            
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="username"><strong>Child name</strong></label><input class="form-control" type="text" id="username-1" placeholder="Ex. Juan Dela Cruz" pattern="[A-Za-z ]{1,}" name="child" required></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="email"><strong>Father's name</strong></label><input class="form-control" type="text" id="email-1" placeholder="Ex. Juan Dela Cruz" pattern="[A-Za-z ]{1,}"  name="father" required></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Mother's name</strong></label><input class="form-control" type="text" id="first_name-1" placeholder="Ex. Maria Dela Cruz" pattern="[A-Za-z ]{1,}" name="mother" required></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Date of Birth</strong></label><input class="form-control" type="date" id="date" name="birthdate" min="<?= date('Y-m-d'); ?>" required></div>
                                                    </div>
                                                </div>
                                                
                                            
                                        </div>
                                        <div class="card-body">
                                            
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Date of Baptismal</strong></label><input class="form-control" type="date" id="date" name="bapdate" min="<?= date('Y-m-d', strtotime('+1 month')); ?>" required></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="username"><strong>Name of Priest</strong></label><select class="form-select" name="priest" id="priest">
                                                        <optgroup label="Choose your Priest">
                                                        <?php while ($row = mysqli_fetch_array($resultquery)) { ?>
                                                                                
                                                                                    <option value="<?php echo $row['PASTOR'] ?>"><?php echo $row['PASTOR'] ?></option>
                                                                                <?php } ?>
                                                        </optgroup>
                                                                            </select></div>
                                                    </div>
                                                </div>
                                                </div>
                                        <div class="card-body">
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="last_name"><strong>Name of Godfather</strong></label><input class="form-control" type="text" id="date" placeholder="Ex. Juan Dela Cruz" pattern="[A-Za-z ]{1,}" name="ninong" required></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>Name of Godmother</strong></label><input class="form-control" type="text" id="birthcertbaby" placeholder="Ex. Maria Dela Cruz" pattern="[A-Za-z ]{1,}" name="ninang" required></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>Contact Number</strong></label><input class="form-control" type="text" id="birthcertbaby" placeholder="Ex. 09123456789" pattern="[0-9]{11}" name="contact" required></div>
                                                </div>
                                            </div>
                                            <div class="mb-3"></div>
                                            <button class="btn btn-primary btn-sm" type="submit" name="submit" onclick="return confirm('Are all the information correct?')">Insert</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Team Gaspar, 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>