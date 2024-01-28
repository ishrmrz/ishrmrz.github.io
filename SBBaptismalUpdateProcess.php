<?php 
	include 'dbconn.php';
	$id=$_GET['updateuser'];
	$sql = "SELECT * FROM test_baptismal WHERE WID = '$id'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);

	$motherrow =  $row['MOTHER'];
    $fatherrow = $row['FATHER'];
    $babyrow = $row['BABYNAME'];
    $daterow = $row['DATE'];
    // $baptismalrow = $row['BAPTISMAL'];
    // $confirmationrow = $row['CONFIRMATION'];
    // $birthbriderow = $row['BIRTHCERTBRIDE'];
    // $birthgroomrow = $row['BIRTHCERTGROOM'];
    // $bridepicrow = $row['BRIDEPIC'];
    // $groompicrow = $row['GROOMPIC'];



	if (isset($_POST['update'])) {

        $mother =  $_POST['mother'];
        $father = $_POST['father'];
        $baby = $_POST['baby'];
        $date = $_POST['date'];
        $birthcertbaby = $_FILES['birthcertbaby'];
        $marriagecert = $_FILES['marriagecert'];
        $babypic = $_FILES['babypic'];

        //FILE UPLOAD
        //birth certificate baby
        $birthbabyfilename = $birthcertbaby["name"];
        $birthbabyfilepath = $birthcertbaby["tmp_name"];
        $birthbabyfileerror = $birthcertbaby["error"];
        //marriage certificate
        $marriagecertfilename = $marriagecert["name"];
        $marriagecertfilepath = $marriagecert["tmp_name"];
        $marriagecertfileerror = $marriagecert["error"];
        
        //baby pic
        $filepath = "SBWedding/";
		$filename = $_FILES['babypic']['name'];
		$tmpname = $_FILES['babypic']['tmp_name'];
		$filetmp = addslashes(file_get_contents($tmpname));
		$filetarget = $filepath . basename($_FILES["babypic"]["name"]);
		$uploadCheck = 1;
		$imageFileType = strtolower(pathinfo($filetarget,PATHINFO_EXTENSION));
        
        $final_img = "SBWedding/" .$filename;
 

        if ($birthbabyfileerror == 0)
        {
            //birth certificate file to SBWedding Folder
            $babyfile = 'SBWedding/' .$birthbabyfilename;
            //marriage file to SBWedding Folder
            $marriagefile = 'SBWedding/' .$marriagecertfilename;



            //echo
            move_uploaded_file($birthbabyfilepath, $babyfile);
            move_uploaded_file($marriagecertfilepath, $marriagefile);
            move_uploaded_file($tmpname, $final_img);


            $sql = "UPDATE test_baptismal SET  
            MOTHER = '$mother',
            FATHER = '$father', 
            BABYNAME = '$baby',
            DATE = '$date',
            BIRTHCERTBABY = '$birthcertbaby',
            MARRIAGECERT = '$marriagecert',
            BABYPIC = '$filetmp',
            WHERE bid = '$id'";


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
