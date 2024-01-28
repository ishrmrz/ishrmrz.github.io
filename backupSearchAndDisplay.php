<?php

    function displayWedding()
    {
        include "dbconn.php";
        if (isset($_POST['search'])) {
            $search = $_POST['searchname'];
            $sqlresult = mysqli_query($conn, "select * from test_wedding WHERE BRIDE LIKE '%$search%'");
        } else {
            $sqlresult = mysqli_query($conn, "select * from test_wedding");
        }

        while ($row = mysqli_fetch_array($sqlresult)) {
            echo "<td>$row[0]</td>"; 
            echo "<td>$row[1]</td>"; 
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>"; 
            echo "<td>$row[4]</td>"; 
            ?>
            
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
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Dropdown-List-Item.css">
</head>

<body id="page-top">
    <form action = "SBWeddingDisplay.php" method="POST" enctype="multipart/form-data"> 
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
                        <div class="dropdown-menu"><a class="dropdown-item" href="SBWeddingInsert.php">Insert Wedding</a><a class="dropdown-item" href="SBWeddingDisplay.php">Display Wedding<br></a><a class="dropdown-item" href="#">Update Wedding<br></a><a class="dropdown-item" href="#">Delete Wedding</a></div>
                    </li>
                    <li class="nav-item dropdown menu_links"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" style="margin-right: 10px;color: var(--bs-accordion-bg);border-color: rgba(0,0,0,0);">Baptismal</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Albercas Estructurales</a><a class="dropdown-item" href="#">Albercas Inflables<br></a><a class="dropdown-item" href="#">Bombas</a></div>
                    </li>
                    <li class="nav-item dropdown menu_links"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" style="margin-right: 10px;color: var(--bs-accordion-bg);border-color: rgba(0,0,0,0);">Confirmation</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Albercas Estructurales</a><a class="dropdown-item" href="#">Albercas Inflables<br></a><a class="dropdown-item" href="#">Bombas</a></div>
                    </li>
                    <li class="nav-item dropdown menu_links"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" style="margin-right: 10px;color: var(--bs-accordion-bg);border-color: rgba(0,0,0,0);">Cemetery</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Insert Deceased Details</a><a class="dropdown-item" href="#">Update Deceased Details<br></a><a class="dropdown-item" href="#">Delete Deceased Details<br></a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="index.html"><i class="fas fa-map-marked-alt"></i><span>San Bartolome Map</span></a><a class="nav-link active" href="index.html"><i class="fas fa-registered"></i><span>Register</span></a><a class="nav-link active" href="index.html"><i class="fab fa-dyalog"></i><span>Logout</span></a></li>
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
                        
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    
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
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Wedding Information</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Wedding Display</p>
                        </div>
                        <div class="container">
	<div class="row shadow-custom p-5 mx-5">
		<h2>Records List</h2>

	<div class="input-group mt-3">
		<input type="text" class="form-control w-80" 
		placeholder="Enter username to search" name="searchname">

		<button type="submit" class="btn btn-secondary btn-lg w-60 h-30" name="search">Search 
 		</button> &nbsp;&nbsp;
 		<a class="btn btn-danger"href="Act6_records.php" style="font-size: 20px">Refresh</a>
	</div>

	<div class="input-group mt-3"> 
		  
	</div>


	<table class="table">
		<thread>
			<tr>
			<th>ID</th>
			<th>Bride</th>
			<th>Groom</th>
			<th>Date of Wedding</th>
			<th>Cenomar</th>
			<th>Action</th>
			</tr>
		</thread>

		<tbody>
			<?php

			displayWedding();

			?>

		</tbody>
	</table>
	<div class="d-flex justify-content-center">
		<a class="btn btn-danger w-10"href="Act6_login.php" style="font-size: 20px">Logout</a>
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