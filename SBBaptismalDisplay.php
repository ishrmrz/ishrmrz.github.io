<?php

    function displayBaptismal()
    {
        include "dbconn.php";
        if (isset($_POST['search'])) {
            $search = $_POST['searchname'];
            $sqlresult = mysqli_query($conn, "select * from test_baptismal WHERE CHILD LIKE '%$search%'");
        } else {
            $sqlresult = mysqli_query($conn, "select * from test_baptismal");
        }

        while ($row = mysqli_fetch_array($sqlresult)) {
            echo "<td>$row[0]</td>"; 
            echo "<td>$row[1]</td>"; 
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>"; 
            echo "<td>$row[4]</td>"; 
            echo "<td>$row[5]</td>"; 
            echo "<td>$row[6]</td>"; 
            echo "<td>$row[7]</td>"; 
            echo "<td>$row[8]</td>"; 
            echo "<td>$row[9]</td>";
            ?>

            <!-- <td><a class="btn btn-primary"  href="SBBaptismalDisplayDownload.php?birthbabyfile=<?php // echo $row['BIRTHCERTBABY']; ?>">Download</a></td>         
            <td><a class="btn btn-primary" href="SBBaptismalDisplayDownload.php?marriagefile=<?php // echo $row['MARRIAGECERT']; ?>">Download</a></td> -->

            <?php
            // <td><a class="btn btn-primary" href="#">Download</a></td>
            // <td><a class="btn btn-primary" href="#">Download</a></td>
            // <td><a class="btn btn-primary" href="#">Download</a></td>
            // <td><a class="btn btn-primary" href="#">Download</a></td>

            //echo '<td><img src="data:image/jpg; base64,' . base64_encode($row['BABYPIC']) . '"height="100"width="100"/></td>';  
            ?>

                <td><a class="btn btn-primary" onclick="return confirm('Are you sure you want to update?')" href="SBBaptismalUpdate.php?updateuser=<?php echo $row['BID']; ?>">Edit</a>&nbsp;
					<a class="btn btn-secondary" onclick="return confirm('Are you sure you want to delete?')" href="SBBaptismalDelete.php?deleteuser=<?php echo $row['BID']; ?>">Delete</a></td>
        
            <?php
            echo "<tr>";


            
        }
        mysqli_close($conn);
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Baptismal Table</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Dropdown-List-Item.css">
</head>

<body id="page-top">
    <form action = "SBBaptismalDisplay.php" method="POST" enctype="multipart/form-data"> 
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
                    <h3 class="text-dark mb-4">Baptismal Information</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Baptismal Display</p>
                        </div>
                        <div class="card-body">
                        <div class="row shadow-custom p-5 mx-5" style="margin: 0px">
                            <h2>Records List</h2>

                        <div class="input-group mt-3">
                            <input type="text" class="form-control w-80" 
                            placeholder="Enter name of baby to be baptized" name="searchname">

                            <button type="submit" class="btn btn-primary btn-lg w-60 h-30" name="search">Search 
                            </button> &nbsp;&nbsp;
                            <a class="btn btn-secondary"href="SBBaptismalDisplay.php" style="font-size: 20px">Refresh</a>
                        </div>

                        <div class="input-group mt-3"> 
                            
                        </div>

                        <div style="overflow-x:auto;">
                            <table class="table" >
                                <thread>
                                    <tr>
                                    <th>ID</th>
                                    <th>Child</th>
                                    <th>Father Name</th>
                                    <th>Mother Name</th>
                                    <th>Date of Birth</th>
                                    <th>Date of Baptismal</th>
                                    <th>Priest</th>
                                    <th>Godfather</th>
                                    <th>Godmother</th>
                                    <th>Contact</th>
                                    <th>Action</th>
                                    </tr>
                                </thread>

                                <tbody>
                                    <?php

                                    displayBaptismal();

                                    ?>

                                </tbody>

                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Child</th>
                                    <th>Father Name</th>
                                    <th>Mother Name</th>
                                    <th>Date of Birth</th>
                                    <th>Date of Baptismal</th>
                                    <th>Priest</th>
                                    <th>Godfather</th>
                                    <th>Godmother</th>
                                    <th>Contact</th>
                                    <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
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