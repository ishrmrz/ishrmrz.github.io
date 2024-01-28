<?php      
    include('dbconn.php');  
     
    if (isset($_POST['submit']))
    {
        $pastor =  $_POST['pastor'];
        $age = $_POST['age'];
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
        
        $checkquery = "SELECT * from test_pastor WHERE PASTOR = '$pastor'";
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
                echo "<script>location.href = 'SBPastorInsert.php';</script>";
            }
            else
            {
                $sql = "INSERT into test_pastor(pastor, age, contact) 
            VALUES('$pastor', '$age', '$contact')";
            $result = mysqli_query($conn, $sql);

            if ($result)
            {
                echo '<script type="text/javascript">';
                echo 'alert("Data Entry Successful!")';  
                echo '</script>';
                echo "<script>location.href = 'SBPastorDisplay.php';</script>";

            }
            else
            {
                echo '<script type="text/javascript">';
                echo 'alert("Data Entry Unsuccessful")';  
                echo '</script>';  
                echo "<script>location.href = 'SBPastorInsert.php';</script>";
            }
            }

           

        }

        else
        {
            echo '<script type="text/javascript">';
            echo 'alert("Database Connection Error")';  
            echo '</script>';
        }
    }

?>  