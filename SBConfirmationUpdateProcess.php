<?php 
	include 'dbconn.php';
	$id=$_GET['updateuser'];
	$sql = "SELECT * FROM test_confirmation WHERE CID = '$id'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);

	$personrow =  $row['PERSON'];
    $sponsorrow = $row['SPONSOR'];
    $motherrow = $row['MOTHER'];
    $fatherrow = $row['FATHER'];
    $daterow = $row['DATE'];
    // $baptismalrow = $row['BAPTISMAL'];
    // $confirmationrow = $row['CONFIRMATION'];
    // $birthbriderow = $row['BIRTHCERTBRIDE'];
    // $birthgroomrow = $row['BIRTHCERTGROOM'];
    // $bridepicrow = $row['BRIDEPIC'];
    // $groompicrow = $row['GROOMPIC'];


	if (isset($_POST['submit'])) {

        $person =  $_POST['person'];
        $sponsor = $_POST['sponsor'];
        $mother = $_POST['mother'];
        $father = $_POST['father'];
        $date = $_POST['date'];
        $bapcert = $_FILES['bapcert'];
        $personpic = $_FILES['personpic'];

        //FILE UPLOAD
        //baptismal certificate
        $bapcertfilename = $bapcert["name"];
        $bapcertfilepath = $bapcert["tmp_name"];
        $bapcertfileerror = $bapcert["error"];

        $bapcertfilepath = "SBWedding/";
		$bapcertfilename = $_FILES['bapcert']['name'];
		$bapcerttmpname = $_FILES['bapcert']['tmp_name'];
		$bapcertfiletmp = addslashes(file_get_contents($bapcerttmpname));
		$bapcertfiletarget = $bapcertfilepath . basename($_FILES["bapcert"]["name"]);
		$buploadCheck = 1;
		$bapcertimageFileType = strtolower(pathinfo($bapcertfiletarget,PATHINFO_EXTENSION));

        $bapfinal_file = "SBWedding/" .$bapcertfilename;
        
        //person pic
        $filepath = "SBWedding/";
		$filename = $_FILES['personpic']['name'];
		$tmpname = $_FILES['personpic']['tmp_name'];
		$filetmp = addslashes(file_get_contents($tmpname));
		$filetarget = $filepath . basename($_FILES["personpic"]["name"]);
		$uploadCheck = 1;
		$imageFileType = strtolower(pathinfo($filetarget,PATHINFO_EXTENSION));
        
        $final_img = "SBWedding/" .$filename;
 

        if ($bapcertfileerror == 0)
        {
            //baptismal certificate file to SBWedding Folder
            $bapfile = 'SBWedding/' .$bapcertfilename;

            //echo
            move_uploaded_file($bapcertfilepath, $bapfile);
            move_uploaded_file($tmpname, $final_img);


            $sql = "UPDATE test_confirmation SET CID = '$id',
            PERSON = '$person',
            SPONSOR = '$sponsor', 
            MOTHER = '$mother',
            FATHER = '$father',
            DATE = '$date',
            BAPCERT = '$bapfinal_file',
            CONFPIC = '$filetmp'
            WHERE CID = '$id'";

            $result = mysqli_query($conn,$sql);

            if ($result)
            {
                echo '<script type="text/javascript">';
                echo 'alert("Data Update Successful!")';  
                echo '</script>';
                echo "<script>location.href = 'SBConfirmationDisplay.php';</script>";

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
