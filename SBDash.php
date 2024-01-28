<?php

include 'dbconn.php';

$sql = "SELECT * FROM test_wedding";
$sql2 = "SELECT * FROM test_baptismal";
$sql3 = "SELECT * FROM test_confirmation";
$sql4 = "SELECT * FROM test_pastor";
$sql5 = "SELECT * FROM test_login";

$sqlcomm = mysqli_query($conn, $sql);
$sqlcomm2 = mysqli_query($conn, $sql2);
$sqlcomm3 = mysqli_query($conn, $sql3);
$sqlcomm4 = mysqli_query($conn, $sql4);
$sqlcomm5 = mysqli_query($conn, $sql5);

$countrow = mysqli_num_rows($sqlcomm);
$countrow2 = mysqli_num_rows($sqlcomm2);
$countrow3 = mysqli_num_rows($sqlcomm3);
$countrow4 = mysqli_num_rows($sqlcomm4);
$countrow5 = mysqli_num_rows($sqlcomm5);

$totalcount = $countrow + $countrow2 + $countrow3;


// if ($category_total = mysqli_num_rows($sqlcomm))
// {
//     $test = array();
//     $test2 = array();
//     $count = 0;
//     $count2 = 0;
//     //$count2 = 0;
//     while($row=mysqli_fetch_array($sqlcomm))
//     {
//         $test[$count]["label"]="TOTAL NUMBER OF WEDDINGS";
//         $test[$count]["y"]=$category_total;      
//     }
// }

// if ($category_total2 = mysqli_num_rows($sqlcomm2))
// {
//     $test2 = array();
//     $count = 0;
//     while($row=mysqli_fetch_array($sqlcomm2))
//     {
//         $test2[$count]["label"]="TOTAL NUMBER OF BAPTISMAL";
//         $test2[$count]["y"]=$category_total2;

//     }
// }

// if ($category_total3 = mysqli_num_rows($sqlcomm3))
// {
//     $test3 = array();
//     $count = 0;
//     while($row=mysqli_fetch_array($sqlcomm3))
//     {
//         $test3[$count]["label"]="TOTAL NUMBER OF CONFIRMATION";
//         $test3[$count]["y"]=$category_total3;

//     }
// }
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Dropdown-List-Item.css">

    <script>
        window.onload = function() {
        //WEDDING CHART
        // var chart = new CanvasJS.Chart("chartContainer", {
        //     animationEnabled: true,
        //     theme: "light1", // "light1", "light2", "dark1", "dark2"
        //     title:{
        //         text: "Weddings in San Bartolome"
        //     },
        //     axisY: {
        //         title: "Number of Weddings"
        //     },
        //     data: [{        
        //         type: "column",  
        //         showInLegend: false, 
        //         legendMarkerColor: "grey",
        //         legendText: "",
        //         dataPoints: <?php //echo json_encode($test, JSON_NUMERIC_CHECK); ?>
        //     }]
        // });
        // chart.render();
        var chart = new CanvasJS.Chart("chartContainer", { //column
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Services in the San Bartolome Church"
            },
            axisY: {
                title: "Total Number of Services"
            },
            data: [{        
                type: "column",  
                showInLegend: false, 
                legendMarkerColor: "grey",
                legendText: "Total Number of Services",
                dataPoints: [      
                    { y: <?php echo json_encode($countrow) ?>, label: "Weddings" },
                    { y: <?php echo json_encode($countrow2) ?>,  label: "Baptismal" },
                    { y: <?php echo json_encode($countrow3) ?>,  label: "Confirmation" }

                ]
            }]
        });
        chart.render();

        var chart2 = new CanvasJS.Chart("chartContainer2", { //bar
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Services in the San Bartolome Church"
            },
            axisY: {
                title: "Total Number of Services"
            },
            data: [{        
                type: "bar",  
                showInLegend: false, 
                legendMarkerColor: "grey",
                legendText: "Total Number of Services",
                dataPoints: [      
                    { y: <?php echo json_encode($countrow) ?>, label: "Weddings" },
                    { y: <?php echo json_encode($countrow2) ?>,  label: "Baptismal" },
                    { y: <?php echo json_encode($countrow3) ?>,  label: "Confirmation" }

                ]
            }]
        });
        chart2.render();

        var chart3 = new CanvasJS.Chart("chartContainer3", { // pie
            animationEnabled: true,
            title: {
                text: "Services in the San Bartolome Church"
            },
            data: [{
                type: "pie",
                startAngle: 240,
                indexLabel: "{label} {y}",
                dataPoints: [
                    { y: <?php echo json_encode($countrow4) ?>, label: "Pastors" },
                    { y: <?php echo json_encode($countrow5) ?>,  label: "Users" },
                ]
            }]
        });
        chart3.render();
        // //BAPTISMAL CHART
        // var chart2 = new CanvasJS.Chart("chartContainer2", {
        //     animationEnabled: true,
        //     theme: "light2", // "light1", "light2", "dark1", "dark2"
        //     title:{
        //         text: "Baptismals in San Bartolome"
        //     },
        //     axisY: {
        //         title: "Number of Baptismals"
        //     },
        //     data: [{        
        //         type: "column",  
        //         showInLegend: false, 
        //         legendMarkerColor: "grey",
        //         legendText: "",
        //         dataPoints: 
        //     }]
        // });
        // chart2.render();
        // //CONFIRMATION CHART
        // var chart3 = new CanvasJS.Chart("chartContainer3", {
        //     animationEnabled: true,
        //     theme: "light1", // "light1", "light2", "dark1", "dark2"
        //     title:{
        //         text: "Confirmations in San Bartolome"
        //     },
        //     axisY: {
        //         title: "Number of Confirmations"
        //     },
        //     data: [{        
        //         type: "column",  
        //         color: "red",
        //         showInLegend: false, 
        //         legendMarkerColor: "red",
        //         legendText: "",
        //         dataPoints: 
        //     }]
        // });
        // chart3.render();

        }

        
    </script>
</head>

<body id="page-top">
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
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span style="font-size: 30px">TOTAL SERVICES</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $totalcount ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-4x text-gray-500"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span style="font-size: 30px">TOTAL PASTORS</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo mysqli_num_rows($sqlcomm4) ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-4x text-gray-500"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 mb-4">
                            <div class="card shadow border-start-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span style="font-size: 30px">TOTAL USERS</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span><?php echo mysqli_num_rows($sqlcomm5) ?></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-4x text-gray-500"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                        <p></p>
                        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    </div>
                    <hr><hr><hr><hr>
                    <div class="row">
                        <div id="chartContainer3" style="height: 370px; width: 100%;"></div>
                        <p></p>
                        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    </div>
                    <hr><hr><hr><hr>
                    <div class="row">
                        <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
                        <p></p>
                        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-xl-8">
                            
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
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>