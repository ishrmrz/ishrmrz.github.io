<?php      
    include('dbconn.php');  
     
    if (isset($_POST['submit']))
    {
        $child = $_POST['child'];
        $father = $_POST['father'];
        $mother =  $_POST['mother'];
        $birthdate = $_POST['birthdate'];
        $confdate = $_POST['confdate'];
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

        $confdate_month = date('m', strtotime($confdate));
        if ($confdate_month != '08') {
            echo '<script type="text/javascript">';
            echo 'alert("Data Entry Unsuccessful! Reservations are only allowed for the month of August.")';
            echo '</script>';
            echo "<script>location.href = 'SBUserConfirmationInsert.php';</script>";
            exit(); // Stop further execution if not in August
        }

        $checkquery = "SELECT * from test_wedding WHERE DATE = '$confdate'";
        $checkquery1 = "SELECT * from test_baptismal WHERE BAPDATE = '$confdate'";
        $checkquery2 = "SELECT * from test_confirmation WHERE CONFDATE = '$confdate'";
        $rs = mysqli_query($conn, $checkquery);
        $rs1 = mysqli_query($conn, $checkquery1);
        $rs2 = mysqli_query($conn, $checkquery2);
            
        $data = mysqli_fetch_array($rs, MYSQLI_NUM);



        if ($rs1)
        {
            if ($rs)
            {
                if ($rs2)
                {
                    if (mysqli_num_rows($rs1) > 0)
                    {
                        echo '<script type="text/javascript">';
                        echo 'alert("Data Entry Unsuccessful!")';  
                        echo '</script>';  
                        echo "<script>location.href = 'SBUserConfirmationInsert.php';</script>";
                    }

                    else
                    {
                        if (mysqli_num_rows($rs) > 0)
                        {
                            echo '<script type="text/javascript">';
                            echo 'alert("Data Entry Unsuccessful!")';  
                            echo '</script>';  
                            echo "<script>location.href = 'SBUserConfirmationInsert.php';</script>";
                        }

                        else 
                        {
                            if (mysqli_num_rows($rs2) > 0)
                            {
                                echo '<script type="text/javascript">';
                                echo 'alert("Data Entry Unsuccessful!")';  
                                echo '</script>';  
                                echo "<script>location.href = 'SBUserConfirmationInsert.php';</script>";
                                
                            }
                            else 
                            {
                                $sql = "INSERT into test_confirmation(child, father, mother, birthdate, confdate, priest, godfather, godmother, contact) 
                                VALUES('$child', '$father', '$mother', '$birthdate', '$confdate', '$priest', '$ninong', '$ninang', '$contact')";
                                $result = mysqli_query($conn, $sql);

                                if ($result)
                                {
                                    echo '<script type="text/javascript">';
                                    echo 'alert("Data Entry Successful! Thank you for reserving your special day with us!")'; 
                                    echo '</script>';
                                    echo "<script>location.href = 'SBUserDash.php';</script>";


                                }
                                else
                                {
                                    echo '<script type="text/javascript">';
                                    echo 'alert("Data Entry Unsuccessful")';  
                                    echo '</script>';  
                                    echo "<script>location.href = 'SBUserConfirmationInsert.php';</script>";
                                }
                            }
                        }
                    }
                }
            }
        }


        /*
        if ($confdate == $birthdate)
        {
            echo '<script type="text/javascript">';
            echo 'alert("Data Entry Unsuccessful!")';  
            echo '</script>';  
            echo "<script>location.href = 'SBUserConfirmationInsert.php';</script>";
        }

        else
        {
  
            if (mysqli_num_rows($rs) > 0)
            {
                echo '<script type="text/javascript">';
                echo 'alert("Data Entry Unsuccessful! That date is already reserved.")';  
                echo '</script>';  
                echo "<script>location.href = 'SBUserConfirmationInsert.php';</script>";
            }
            else
            {
                // //birth certificate file to SBWedding Folder
            // $babyfile = 'SBWedding/' .$birthbabyfilename;
            // //marriage file to SBWedding Folder
            // $marriagefile = 'SBWedding/' .$marriagecertfilename;



            // //echo
            // move_uploaded_file($birthbabyfilepath, $babyfile);
            // move_uploaded_file($marriagecertfilepath, $marriagefile);
            // move_uploaded_file($tmpname, $final_img);



            $sql = "INSERT into test_confirmation(child, father, mother, birthdate, confdate, priest, godfather, godmother, contact) 
            VALUES('$child', '$father', '$mother', '$birthdate', '$confdate', '$priest', '$ninong', '$ninang', '$contact')";
            $result = mysqli_query($conn, $sql);

            if ($result)
            {
                echo '<script type="text/javascript">';
                echo 'alert("Data Entry Successful! Thank you for reserving your special day with us!")'; 
                echo '</script>';
                echo "<script>location.href = 'SBUserDash.php';</script>";


            }
            else
            {
                echo '<script type="text/javascript">';
                echo 'alert("Data Entry Unsuccessful")';  
                echo '</script>';  
                echo "<script>location.href = 'SBUserConfirmationInsert.php';</script>";
            }
            }
        }   
        */
    }

?>  