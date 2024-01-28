<?php      
    include('dbconn.php');  
     
    if (isset($_POST['submit']))
    {
        $mother =  $_POST['mother'];
        $father = $_POST['father'];
        $child = $_POST['child'];
        $birthdate = $_POST['birthdate'];
        $bapdate = $_POST['bapdate'];
        $priest = $_POST['priest'];
        $ninong = $_POST['ninong'];
        $ninang = $_POST['ninang'];
        $contact = $_POST['contact'];


        // //FILE UPLOAD
        // //birth certificate baby
        // $birthbabyfilename = $birthcertbaby["name"];
        // $birthbabyfilepath = $birthcertbaby["tmp_name"];
        // $birthbabyfileerror = $birthcertbaby["error"];
        // //marriage certificate
        // $marriagecertfilename = $marriagecert["name"];
        // $marriagecertfilepath = $marriagecert["tmp_name"];
        // $marriagecertfileerror = $marriagecert["error"];
        
        // //baby pic
        // $filepath = "SBWedding/";
		// $filename = $_FILES['babypic']['name'];
		// $tmpname = $_FILES['babypic']['tmp_name'];
		// $filetmp = addslashes(file_get_contents($tmpname));
		// $filetarget = $filepath . basename($_FILES["babypic"]["name"]);
		// $uploadCheck = 1;
		// $imageFileType = strtolower(pathinfo($filetarget,PATHINFO_EXTENSION));
        
        // $final_img = "SBWedding/" .$filename;
        
        $checkquery = "SELECT * from test_baptismal WHERE BAPDATE = '$bapdate'";
        $rs = mysqli_query($conn, $checkquery);
        $data = mysqli_fetch_array($rs, MYSQLI_NUM);

        if ($rs)
        {
            // //birth certificate file to SBWedding Folder
            // $babyfile = 'SBWedding/' .$birthbabyfilename;
            // //marriage file to SBWedding Folder
            // $marriagefile = 'SBWedding/' .$marriagecertfilename;



            // //echo
            // move_uploaded_file($birthbabyfilepath, $babyfile);
            // move_uploaded_file($marriagecertfilepath, $marriagefile);
            // move_uploaded_file($tmpname, $final_img);

            if (mysqli_num_rows($rs) > 0)
            {
                echo '<script type="text/javascript">';
                echo 'alert("Data Entry Unsuccessful! Date is already reserved.")';  
                echo '</script>';  
                echo "<script>location.href = 'SBBaptismalInsert.php';</script>";
            }
            else
            {
                $sql = "INSERT into test_baptismal(child, father, mother, birthdate, bapdate, priest, godfather, godmother, contact) 
                VALUES('$child', '$father', '$mother', '$birthdate', '$bapdate', '$priest', '$ninong', '$ninang', '$contact')";
                $result = mysqli_query($conn, $sql);

                if ($result)
                {
                    echo '<script type="text/javascript">';
                    echo 'alert("Data Entry Successful!")';  
                    echo '</script>';
                    echo "<script>location.href = 'SBBaptismalDisplay.php';</script>";

                }
                else
                {
                    echo '<script type="text/javascript">';
                    echo 'alert("Data Entry Unsuccessful")';  
                    echo '</script>';  
                    echo "<script>location.href = 'SBBaptismalInsert.php';</script>";
                }
            }
        }
            

        }

        else
        {
            
    }

?>  