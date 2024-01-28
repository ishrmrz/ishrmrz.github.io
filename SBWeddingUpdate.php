<?php 
	include 'dbconn.php';
	$id=$_GET['updateuser'];
	$sql = "SELECT * FROM test_wedding WHERE wid = '$id'";
	$result=mysqli_query($conn, $sql);
	
    while ($row=mysqli_fetch_array($result))
    {
        $briderow =  $row['BRIDE'];
        $groomrow = $row['GROOM'];
        $daterow = $row['DATE'];
        $cenomarrow = $row['CENOMAR'];
        $packagerow = $row['PACKAGE'];
        $contactrow = $row['CONTACT'];
    }
    
	
    // $baprow = $row['BAPTISMAL'];
    // $confrow = $row['CONFIRMATION'];
    // $birthbriderow = $row['BIRTHCERTBRIDE'];
    // $birthgroomrow = $row['BIRTHCERTGROOM'];
    // $bridepicrow = $row['BRIDEPIC'];
    // $groompicrow = $row['GROOMPIC'];




	if (isset($_POST['submit'])) {

        $bride =  $_POST['up_bride'];
        $groom = $_POST['up_groom'];
        $date = $_POST['up_date'];
        $cenomarfile = $_FILES['cenomar'];
        $baptismalbridefile = $_FILES['baptismalbride'];
        $baptismalgroomfile = $_FILES['baptismalgroom'];
        $confirmationbridefile = $_FILES['confbride'];
        $confirmationgroomfile = $_FILES['confgroom'];
        $birthbride = $_FILES['birthcertbride'];
        $birthgroom = $_FILES['birthcertgroom'];
        $marriagecertfile = $_FILES['marriagecert'];
        $package = $_POST['up_package'];
        $contact = $_POST['up_contact'];

        //FILE UPLOAD
        //cenomar
        // $cfilename = $cenomarfile["name"];
        // $cfilepath = $cenomarfile["tmp_name"];
        $cfileerror = $cenomarfile["error"];
        $cfilepath = "SBWedding/";
		$cfilename = $_FILES['cenomar']['name'];
		$ctmpname = $_FILES['cenomar']['tmp_name'];
		$cfiletmp = addslashes(file_get_contents($ctmpname));
		$cfiletarget = $cfilepath . basename($_FILES["cenomar"]["name"]);
		$buploadCheck = 1;
		$cimageFileType = strtolower(pathinfo($cfiletarget,PATHINFO_EXTENSION));

        $cfinal_file = "SBWedding/" .$cfilename;

        //baptismal bride
        $bapbfilepath = "SBWedding/";
		$bapbfilename = $_FILES['baptismalbride']['name'];
		$bapbtmpname = $_FILES['baptismalbride']['tmp_name'];
		$bapbfiletmp = addslashes(file_get_contents($bapbtmpname));
		$bapbfiletarget = $bapbfilepath . basename($_FILES["baptismalbride"]["name"]);
		$bapbuploadCheck = 1;
		$bapbimageFileType = strtolower(pathinfo($bapbfiletarget,PATHINFO_EXTENSION));
        $bapbfinal_file = "SBWedding/" .$bapbfilename;

        //baptismal groom
        $bapgfilepath = "SBWedding/";
		$bapgfilename = $_FILES['baptismalgroom']['name'];
		$bapgtmpname = $_FILES['baptismalgroom']['tmp_name'];
		$bapgfiletmp = addslashes(file_get_contents($bapgtmpname));
		$bapgfiletarget = $bapgfilepath . basename($_FILES["baptismalgroom"]["name"]);
		$bapguploadCheck = 1;
		$bapgimageFileType = strtolower(pathinfo($bapgfiletarget,PATHINFO_EXTENSION));
        $bapgfinal_file = "SBWedding/" .$bapgfilename;

        //confirmation bride
        // $conffilename = $confirmationfile["name"];
        // $conffilepath = $confirmationfile["tmp_name"];
        // $conffileerror = $confirmationfile["error"];
        $confbfilepath = "SBWedding/";
		$confbfilename = $_FILES['confbride']['name'];
		$confbtmpname = $_FILES['confbride']['tmp_name'];
		$confbfiletmp = addslashes(file_get_contents($confbtmpname));
		$confbfiletarget = $confbfilepath . basename($_FILES["confbride"]["name"]);
		$confbuploadCheck = 1;
		$confbimageFileType = strtolower(pathinfo($confbfiletarget,PATHINFO_EXTENSION));
        $confbfinal_file = "SBWedding/" .$confbfilename;

        //confirmation groom
        // $conffilename = $confirmationfile["name"];
        // $conffilepath = $confirmationfile["tmp_name"];
        // $conffileerror = $confirmationfile["error"];
        $confgfilepath = "SBWedding/";
		$confgfilename = $_FILES['confgroom']['name'];
		$confgtmpname = $_FILES['confgroom']['tmp_name'];
		$confgfiletmp = addslashes(file_get_contents($confgtmpname));
		$confgfiletarget = $confgfilepath . basename($_FILES["confgroom"]["name"]);
		$confguploadCheck = 1;
		$confgimageFileType = strtolower(pathinfo($confgfiletarget,PATHINFO_EXTENSION));
        $confgfinal_file = "SBWedding/" .$confgfilename;

        //birth cert bride
        $birthbridefilepath = "SBWedding/";
		$birthbridefilename = $_FILES['birthcertbride']['name'];
		$birthbridetmpname = $_FILES['birthcertbride']['tmp_name'];
		$birthbridefiletmp = addslashes(file_get_contents($birthbridetmpname));
		$birthbridefiletarget = $birthbridefilepath . basename($_FILES["birthcertbride"]["name"]);
		$birthbrideuploadCheck = 1;
		$birthbrideimageFileType = strtolower(pathinfo($birthbridefiletarget,PATHINFO_EXTENSION));
        $birthbridefinal_file = "SBWedding/" .$birthbridefilename;

        //birth cert groom
        // $birthgroomfilename = $birthgroom["name"];
        // $birthgroomfilepath = $birthgroom["tmp_name"];
        // $birthgroomfileerror = $birthgroom["error"];
        $birthgroomfilepath = "SBWedding/";
		$birthgroomfilename = $_FILES['birthcertgroom']['name'];
		$birthgroomtmpname = $_FILES['birthcertgroom']['tmp_name'];
		$birthgroomfiletmp = addslashes(file_get_contents($birthgroomtmpname));
		$birthgroomfiletarget = $birthgroomfilepath . basename($_FILES["birthcertgroom"]["name"]);
		$birthgroomuploadCheck = 1;
		$birthgroomimageFileType = strtolower(pathinfo($birthgroomfiletarget,PATHINFO_EXTENSION));
        $birthgroomfinal_file = "SBWedding/" .$birthgroomfilename;

        //marriage cert
        $marcertfilepath = "SBWedding/";
		$marcertfilename = $_FILES['marriagecert']['name'];
		$marcerttmpname = $_FILES['marriagecert']['tmp_name'];
		$marcertfiletmp = addslashes(file_get_contents($marcerttmpname));
		$marcertfiletarget = $marcertfilepath . basename($_FILES["marriagecert"]["name"]);
		$marcertuploadCheck = 1;
		$marcertimageFileType = strtolower(pathinfo($marcertfiletarget,PATHINFO_EXTENSION));
        $marcertfinal_file = "SBWedding/" .$marcertfilename;

        // //bride pic
        // $filepath = "SBWedding/";
		// $filename = $_FILES['bridepic']['name'];
		// $tmpname = $_FILES['bridepic']['tmp_name'];
		// $filetmp = addslashes(file_get_contents($tmpname));
		// $filetarget = $filepath . basename($_FILES["bridepic"]["name"]);
		// $uploadCheck = 1;
		// $imageFileType = strtolower(pathinfo($filetarget,PATHINFO_EXTENSION));
        
        // $final_img = "SBWedding/" .$filename;
        // //groom pic
        // $gfilepath = "SBWedding/";
		// $gfilename = $_FILES['groompic']['name'];
		// $gtmpname = $_FILES['groompic']['tmp_name'];
		// $gfiletmp = addslashes(file_get_contents($gtmpname));
		// $gfiletarget = $gfilepath . basename($_FILES["groompic"]["name"]);
		// $guploadCheck = 1;
		// $gimageFileType = strtolower(pathinfo($gfiletarget,PATHINFO_EXTENSION));
        
        // $gfinal_img = "SBWedding/" .$gfilename;

        $checkquery = "SELECT * from test_wedding WHERE DATE = '$date'";
        $rs = mysqli_query($conn, $checkquery);
        $data = mysqli_fetch_array($rs, MYSQLI_NUM);

        if ($rs)
        {
            if (mysqli_num_rows($rs) > 0)
            {
                echo '<script type="text/javascript">';
                echo 'alert("Data Entry Unsuccessful! Date is already reserved.")';  
                echo '</script>';  
                echo "<script>location.href = 'SBWeddingInsert.php';</script>";
            }
            else
            {
                //cenomar file to SBWedding Folder
                $cfile = 'SBWedding/' .$cfilename;
                //baptismal file to SBWedding Folder
                $bapbfile = 'SBWedding/' .$bapbfilename;
                //baptismal file to SBWedding Folder
                $bapgfile = 'SBWedding/' .$bapgfilename;
                //confirmation file to SBWedding Folder
                $confbfile = 'SBWedding/' .$confbfilename;
                //confirmation file to SBWedding Folder
                $confgfile = 'SBWedding/' .$confgfilename;
                //birth certificate bride to SBWedding Folder
                $birthbridefile = 'SBWedding/' .$birthbridefilename;
                //birth certificate groom to SBWedding Folder
                $birthgroomfile = 'SBWedding/' .$birthgroomfilename;
                //marriagecert file to SBWedding Folder
                $marcertfile = 'SBWedding/' .$marcertfilename;


                //echo
                move_uploaded_file($ctmpname, $cfinal_file); //cenomar
                move_uploaded_file($bapbtmpname, $bapbfinal_file); //baptismal bride
                move_uploaded_file($bapgtmpname, $bapgfinal_file); //baptismal groom
                move_uploaded_file($confbtmpname, $confbfinal_file); //confirmation bride
                move_uploaded_file($confgtmpname, $confgfinal_file); //confirmation groom
                move_uploaded_file($birthbridetmpname, $birthbridefinal_file); //birth cert bride
                move_uploaded_file($birthgroomtmpname, $birthgroomfinal_file); //birth cert groom
                move_uploaded_file($marcerttmpname, $marcertfinal_file); //confirmation bride


                // if (file_exists($cfilename) || file_exists($bfilename) || file_exists($conffilename) || file_exists($birthbridefilename) || file_exists($birthgroomfilename))
                // {
                //     echo '<script type="text/javascript">';
                //     echo 'alert("Data Update Successful!")';  
                //     echo '</script>';
                //     echo "<script>location.href = 'SBWeddingInsert.php';</script>";
                // }


                $sql = "UPDATE test_wedding SET WID = '$id',
                BRIDE = '$bride',
                GROOM = '$groom', 
                DATE = '$date',
                CENOMAR = '$cfinal_file',
                BAPBRIDE = '$bapbfinal_file',
                BAPGROOM = '$bapgfinal_file',
                CONFBRIDE = '$confbfinal_file',
                CONFGROOM = '$confgfinal_file',
                BIRTHCERTBRIDE = '$birthbridefinal_file',
                BIRTHCERTGROOM = '$birthgroomfinal_file',
                MARRIAGECERT = '$marcertfinal_file',
                CONTACT = '$contact',
                PACKAGE = '$package'
                WHERE wid = '$id'";

                $result = mysqli_query($conn,$sql);

                if ($result)
                {
                    echo '<script type="text/javascript">';
                    echo 'alert("Data Update Successful!")';  
                    echo '</script>';
                    echo "<script>location.href = 'SBWeddingDisplay.php';</script>";


                }
                else
                {
                    echo '<script type="text/javascript">';
                    echo 'alert("Data Entry Unsuccessful")';  
                    echo '</script>';  
                    echo "<script>location.href = 'SBWeddingInsert.php';</script>";
                }
            }
            
            
        }

        else
        {
            echo '<script type="text/javascript">';
            echo 'alert("Database Connnection Error!")';  
            echo '</script>';  
                    
        }
	}											
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update Wedding</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Dropdown-List-Item.css">
</head>

<body id="page-top">
    <form method="POST" enctype="multipart/form-data"> 
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
                        <h3 class="text-dark mb-4">Wedding Services</h3>
                        <div class="row mb-3">
                        <div class="col-lg-4 col-xl-3">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/san%20bartolome.jpg" width="160" height="160">
                                    <div class="mb-3"></div><strong>San Bartolome Wedding</strong>
                                </div>
                            </div>
                            <div class="card"><img class="card-img-top w-100 d-block" src="img/wedding%20logo.png" width="289" height="155">
                                <div class="card-body">
                                    <h4 class="card-title">What is a Wedding</h4>
                                    <p class="card-text">Marriage in the Catholic Church, also known as holy matrimony, is the "covenant by which a man and woman establish between themselves a partnership of the whole of life and which is ordered by its nature to the good of the spouses and the procreation and education of offspring", and which "has been raised by Christ the Lord to the dignity of a sacrament between the baptised.</p>
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
                                                <p class="text-primary m-0 fw-bold">Wedding Details</p>
                                            </div>
                                            <div class="card-body" style="padding-bottom: 239px;margin-bottom: -161px;">   
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="bride name"><strong>Bride Name</strong></label><input class="form-control" type="text" id="bride" pattern="[A-Za-z ]{1,}" placeholder="Ex: Maria Dela Cruz" name="up_bride" value="<?php echo $briderow ?>" required></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="groom name"><strong>Groom Name</strong></label><input class="form-control" type="text" id="groom" pattern="[A-Za-z ]{1,}" placeholder="Ex: Juan Dela Cruz" name="up_groom" value="<?php echo $groomrow ?>" required></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3"><label class="form-label" for="wedding date"><strong>Date of Wedding</strong><br></label></div><input class="form-control" type="date" id="date" name="up_date" min="<?php echo date("Y-m-d"); ?>" value="<?php echo $daterow ?>"  required>
                                                        </div>
                                                        <div class="col">
                                                            <label class="form-label" for="cenomar"><strong>Certificate of No Marriage</strong></label>
                                                            <input class="form-control" type="file" id="cenomar" name="cenomar" accept="image/*" required onchange="previewImage('cenomar', 'cenomarPreview')">    
                                                            <img id="cenomarPreview" src="" alt="View Uploaded Image Here" style="max-width: 100%; max-height: 200px; margin-top: 10px;">
                                                        </div>
                                                    </div>

                                                                                            
                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="form-label" for="marriagecert"><strong>Marriage License</strong></label>
                                                            <input class="form-control" type="file" id="marriagecert" name="marriagecert" accept="image/*" required onchange="previewImage('marriagecert', 'marriagecertPreview')">
                                                            <img id="marriagecertPreview" src="" alt="View Uploaded Image Here" style="max-width: 100%; max-height: 200px; margin-top: 10px;">                                                        </div>
                                                        <div class="col" style="padding: 10px;">
                                                            <label class="form-label" for="email"><strong>Baptismal Certificate for Groom</strong></label>
                                                            <input class="form-control" type="file" id="bapgroom" name="baptismalgroom" accept="image/*" required onchange="previewImage('bapgroom', 'bapgroomPreview')" required>
                                                            <img id="bapgroomPreview" src="" alt="View Uploaded Image Here" style="max-width: 100%; max-height: 200px; margin-top: 10px;">                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col" style="padding: 10px;">
                                                            <label class="form-label" for="username"><strong>Confirmation Certificate for Bride</strong></label>
                                                            <input class="form-control" type="file" id="confirmation" name="confbride" accept="image/*" required onchange="previewImage('confirmation', 'confirmationPreview')" required>
                                                            <img id="confirmationPreview" src="" alt="View Uploaded Image Here" style="max-width: 100%; max-height: 200px; margin-top: 10px;">                                                        </div>
                                                        <div class="col" style="padding: 10px;">
                                                            <label class="form-label" for="email"><strong>Confirmation Certificate for Groom</strong></label>
                                                            <input class="form-control" type="file" id="confgroom" name="confgroom" accept="image/*" required onchange="previewImage('confgroom', 'confgroomPreview')" required>
                                                            <img id="confgroomPreview" src="" alt="View Uploaded Image Here" style="max-width: 100%; max-height: 200px; margin-top: 10px;">                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col" style="padding: 10px;">
                                                            <label class="form-label" for="username"><strong>Birth Certificate for Bride</strong></label>
                                                            <input class="form-control" type="file" id="birthbride" name="birthcertbride" accept="image/*" required onchange="previewImage('birthbride', 'birthbridePreview')" required>
                                                            <img id="birthbridePreview" src="" alt="View Uploaded Image Here" style="max-width: 100%; max-height: 200px; margin-top: 10px;">                                                        </div>
                                                        <div class="col" style="padding: 10px;">
                                                            <label class="form-label" for="email"><strong>Birth Certificate for Groom</strong></label>
                                                            <input class="form-control" type="file" id="birthcertgroom" name="birthcertgroom" accept="image/*" required onchange="previewImage('birthcertgroom', 'birthcertgroomPreview')" required>
                                                            <img id="birthcertgroomPreview" src="" alt="View Uploaded Image Here" style="max-width: 100%; max-height: 200px; margin-top: 10px;">                                                        </div>   
                                                    </div>
                                                    <div class="row">
                                                    
                                                    <div class="col" style="padding: 10px;">
                                                            <div class="mb-3"><label class="form-label" for="email"><strong>Contact Number</strong></label><input class="form-control" type="text" id="first_name-1" placeholder="Ex. 09123456789" pattern="[0-9]{11}" name="up_contact" value="<?php echo $contactrow ?>" required></div>
                                                    </div>
                                                    </div>
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>Package Type for Wedding</strong></label><select class="form-select" name="package" value="<?php echo $packagerow ?>" id="package">
                                                                <optgroup label="This is a group">
                                                                    <option value="Package 1">Package 1: Php 16,500</option>
                                                                    <option value="Package 2">Package 2: Php 12,500</option>
                                                                    <option value="Package 3">Package 3: Php 6,500</option>
                                                                </optgroup>
                                                            </select></div>
                                                    <div class="mb-3"><button class="btn btn-primary" type="submit" name="submit" onclick="return confirm('Are all the information correct?')">Submit</button></div>
                                                </div>   
                                            </div>
                                        <div class="card shadow" style="margin-right: 288px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-5"></div>
                    </div>
                </div>
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright"><span>Copyright © Team Gaspar 2023</span></div>
                    </div>
                </footer>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>
    </form>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>

    <script>
        function previewImage(inputId, previewId) {
        var input = document.getElementById(inputId);
        var preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = "";
        }
    }
        document.addEventListener("DOMContentLoaded", function () {
            // Get the date input element
            var dateInput = document.getElementById("date");

            // Calculate the first day of the next month
            var today = new Date();
            var nextMonth = new Date(today);
            nextMonth.setMonth(today.getMonth() + 1);
            var firstDayOfNextMonth = new Date(nextMonth.getFullYear(), nextMonth.getMonth(), 1);

            // Format the date to be set in the input
            var formattedDate = formatDate(firstDayOfNextMonth);

            // Set the minimum attribute of the date input
            dateInput.setAttribute("min", formattedDate);
        });

        function formatDate(date) {
            var year = date.getFullYear();
            var month = (date.getMonth() + 1).toString().padStart(2, '0');
            var day = date.getDate().toString().padStart(2, '0');
            return year + '-' + month + '-' + day;
        }
    </script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/startup-modern.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Get the first form's package select element
                var firstFormPackageSelect = document.getElementById("firstFormPackage");

                // Get the second form's selectedPackage input
                var selectedPackageInput = document.getElementById("selectedPackage");

                // Add an event listener to update the second form's input when the user selects a package
                firstFormPackageSelect.addEventListener("change", function () {
                    selectedPackageInput.value = firstFormPackageSelect.value;
                });
            });
        </script> 

</body>

</html>