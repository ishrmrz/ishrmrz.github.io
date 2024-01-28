<?php 
	include 'dbconn.php';
	$id=$_GET['updateuser'];
	$sql = "SELECT * FROM test_wedding WHERE WID = '$id'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);

	$briderow =  $row['BRIDE'];
    $groomrow = $row['GROOM'];
    $daterow = $row['DATE'];
    $cenomarrow = $row['CENOMAR'];
    $baptismalrow = $row['BAPTISMAL'];
    $confirmationrow = $row['CONFIRMATION'];
    $birthbriderow = $row['BIRTHCERTBRIDE'];
    $birthgroomrow = $row['BIRTHCERTGROOM'];
    $bridepicrow = $row['BRIDEPIC'];
    $groompicrow = $row['GROOMPIC'];



	if (isset($_POST['update'])) {

        $bride =  $_POST['bride'];
        $groom = $_POST['groom'];
        $date = $_POST['date'];
        $cenomarfile = $_FILES['cenomar'];
        $baptismalfile = $_FILES['baptismal'];
        $confirmationfile = $_FILES['confirmation'];
        $birthbride = $_FILES['birthcertbride'];
        $birthgroom = $_FILES['birthcertgroom'];
        $bridepic = $_FILES['bridepic'];
        $groompic = $_FILES['groompic'];

        //FILE UPLOAD
        //cenomar
        $cfilename = $cenomarfile["name"];
        $cfilepath = $cenomarfile["tmp_name"];
        $cfileerror = $cenomarfile["error"];
        //baptismal
        $bfilename = $baptismalfile["name"];
        $bfilepath = $baptismalfile["tmp_name"];
        $bfileerror = $baptismalfile["error"];
        //confirmation
        $conffilename = $confirmationfile["name"];
        $conffilepath = $confirmationfile["tmp_name"];
        $conffileerror = $confirmationfile["error"];
        //birth cert bride
        $birthbridefilename = $birthbride["name"];
        $birthbridefilepath = $birthbride["tmp_name"];
        $birthbridefileerror = $birthbride["error"];
        //birth cert groom
        $birthgroomfilename = $birthgroom["name"];
        $birthgroomfilepath = $birthgroom["tmp_name"];
        $birthgroomfileerror = $birthgroom["error"];

        
        //bride pic
        // $bridepicfilename = $bridepic["name"];
        // $bridepicfilepath = $bridepic["tmp_name"];
        // $bridepicfileerror = $bridepic["error"];
        $filepath = "SBWedding/";
		$filename = $_FILES['bridepic']['name'];
		$tmpname = $_FILES['bridepic']['tmp_name'];
		$filetmp = addslashes(file_get_contents($tmpname));
		$filetarget = $filepath . basename($_FILES["bridepic"]["name"]);
		$uploadCheck = 1;
		$imageFileType = strtolower(pathinfo($filetarget,PATHINFO_EXTENSION));
        
        $final_img = "SBWedding/" .$filename;
        //groom pic
        $gfilepath = "SBWedding/";
		$gfilename = $_FILES['groompic']['name'];
		$gtmpname = $_FILES['groompic']['tmp_name'];
		$gfiletmp = addslashes(file_get_contents($gtmpname));
		$gfiletarget = $gfilepath . basename($_FILES["groompic"]["name"]);
		$guploadCheck = 1;
		$gimageFileType = strtolower(pathinfo($gfiletarget,PATHINFO_EXTENSION));
        
        $gfinal_img = "SBWedding/" .$gfilename;


        if ($cfileerror == 0)
        {
            //cenomar file to SBWedding Folder
            $cfile = 'SBWedding/' .$cfilename;
            //baptismal file to SBWedding Folder
            $bfile = 'SBWedding/' .$bfilename;
            //confirmation file to SBWedding Folder
            $conffile = 'SBWedding/' .$conffilename;
            //birth certificate bride to SBWedding Folder
            $birthbridefile = 'SBWedding/' .$birthbridefilename;
            //birth certificate groom to SBWedding Folder
            $birthgroomfile = 'SBWedding/' .$birthgroomfilename;


            //echo
            move_uploaded_file($cfilepath, $cfile);
            move_uploaded_file($bfilepath, $bfile);
            move_uploaded_file($conffilepath, $cfile);
            move_uploaded_file($birthbridefilepath, $birthbridefile);
            move_uploaded_file($birthgroomfilepath, $birthgroomfile);
            move_uploaded_file($tmpname, $final_img);
            move_uploaded_file($gtmpname, $gfinal_img);


            $sql = "UPDATE records SET  
            BRIDE = '$bride',
            GROOM = '$groom', 
            DATE = '$date',
            CENOMAR = '$cenomarfile',
            BAPTISMAL = '$baptismalfile',
            CONFIRMATION = '$confirmationfile',
            BIRTHCERTBRIDE = '$birthbride',
            BIRTHCERTGROOM = '$birthgroom',
            BRIDEPIC = '$filetmp'.
            GROOMPIC = '$gfiletmp'
            WHERE username = '$id'";


            if ($result)
            {
                echo '<script type="text/javascript">';
                echo 'alert("Data Entry Successful!")';  
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

        else
        {
            echo "No button has been clicked";
        }
	}											
?>
