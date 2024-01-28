<?php      
    include('dbconn.php');  

    $query = "SELECT * FROM test_pastor";
    $resultquery = mysqli_query($conn, $query);

     
    if (isset($_POST['submit']))
    {
        $child = $_POST['child'];
        $father = $_POST['father'];
        $mother =  $_POST['mother'];
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

        $checkquery = "SELECT * from test_wedding WHERE DATE = '$bapdate'";
        $checkquery1 = "SELECT * from test_baptismal WHERE BAPDATE = '$bapdate'";
        $checkquery2 = "SELECT * from test_confirmation WHERE CONFDATE = '$bapdate'";
        $rs = mysqli_query($conn, $checkquery);
        $rs1 = mysqli_query($conn, $checkquery1);
        $rs2 = mysqli_query($conn, $checkquery2);
            
        $data = mysqli_fetch_array($rs, MYSQLI_NUM);

        if ($rs2)
        {
            if ($rs)
            {
                if ($rs1)
                {
                    if (mysqli_num_rows($rs2) > 0)
                        {
                            echo '<script type="text/javascript">';
                            echo 'alert("Data Entry Unsuccessful! That date is already reserved.")';  
                            echo '</script>';  
                            echo "<script>location.href = 'SBUserBaptismalInsert.php';</script>";
                            
                        }

                    else 
                    {
                        if (mysqli_num_rows($rs) > 0)
                        {
                        echo '<script type="text/javascript">';
                        echo 'alert("Data Entry Unsuccessful! That date is already reserved.")';  
                        echo '</script>';  
                        echo "<script>location.href = 'SBUserBaptismalInsert.php';</script>";
                            
                        }

                        else 
                        {
                            if (mysqli_num_rows($rs1) > 0)
                            {
                            echo '<script type="text/javascript">';
                            echo 'alert("Data Entry Unsuccessful! That date is already reserved.")';  
                            echo '</script>';  
                            echo "<script>location.href = 'SBUserBaptismalInsert.php';</script>";
                                
                            }
                            else 
                            {
                                $sql = "INSERT into test_baptismal(child, father, mother, birthdate, bapdate, priest, godfather, godmother, contact) 
                                VALUES('$child', '$father', '$mother', '$birthdate', '$bapdate', '$priest', '$ninong', '$ninang', '$contact')";
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
                                    echo "<script>location.href = 'SBWeddingInsert.php';</script>";
                                }
                            }
                        }
                    }
                }
            }
        }
        

        else 
        {
            echo '<script type="text/javascript">';
            echo 'alert("Database Connection Error")';  
            echo '</script>';  
        }
        
        /*
        if ($rs2 && $rs1 && $rs)
        {
            if (mysqli_num_rows($rs2) > 0)
            {
            echo '<script type="text/javascript">';
            echo 'alert("Data Entry Unsuccessful! That date is already reserved.")';  
            echo '</script>';  
            echo "<script>location.href = 'SBUserBaptismalInsert.php';</script>";
                
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



            $sql = "INSERT into test_baptismal(child, father, mother, birthdate, bapdate, priest, godfather, godmother, contact) 
            VALUES('$child', '$father', '$mother', '$birthdate', '$bapdate', '$priest', '$ninong', '$ninang', '$contact')";
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
                echo "<script>location.href = 'SBWeddingInsert.php';</script>";
            }

            }
        }

        else
        {
            echo '<script type="text/javascript">';
            echo 'alert("Database Connection Error")';  
            echo '</script>';  
        }
        */
    }

?>  