<?php      
    include('dbconn.php');  
     
    if (isset($_POST['submit']))
    {
        $bride =  $_POST['bride'];
        if (!preg_match ("/^[a-zA-z ]*$/", $bride) ) {  
            echo '<script type="text/javascript">';
            echo 'alert("In the text field bride, letters and whitespaces are only allowed!")';  
            echo '</script>';  
            echo "<script>location.href = 'SBWeddingInsert.php';</script>"; 
        } else {  
            $groom = $_POST['groom'];
            if (!preg_match ("/^[a-zA-z ]*$/", $groom) ) {  
                echo '<script type="text/javascript">';
                echo 'alert("In the text field groom, letters and whitespaces are only allowed!")';  
                echo '</script>';  
                echo "<script>location.href = 'SBWeddingInsert.php';</script>";   
            } else {  
                $date = $_POST['date'];
                $package = $_POST['package'];
                $cenomarfile = $_FILES['cenomar'];
                $bapbridefile = $_FILES['baptismalbride'];
                $bapgroomfile = $_FILES['baptismalgroom'];
                $confbridefile = $_FILES['confbride'];
                $confgroomfile = $_FILES['confgroom'];
                $birthbride = $_FILES['birthcertbride'];
                $birthgroom = $_FILES['birthcertgroom'];
                $marriagecertfile = $_FILES['marriagecert'];
                $contact = $_POST['contact'];

            //FILE UPLOAD
            //cenomar
            $cfilename = $cenomarfile["name"];
            $cfilepath = $cenomarfile["tmp_name"];
            $cfileerror = $cenomarfile["error"];
            //baptismal bride
            $bapbridefilename = $bapbridefile["name"];
            $bapbridefilepath = $bapbridefile["tmp_name"];
            $bapbridefileerror = $bapbridefile["error"];
            //baptismal groom
            $bapgroomfilename = $bapgroomfile["name"];
            $bapgroomfilepath = $bapgroomfile["tmp_name"];
            $bapgroomfileerror = $bapgroomfile["error"];
            //confirmation bride
            $confbridefilename = $confbridefile["name"];
            $confbridefilepath = $confbridefile["tmp_name"];
            $confbridefileerror = $confbridefile["error"];
            //confirmation groom
            $confgroomfilename = $confgroomfile["name"];
            $confgroomfilepath = $confgroomfile["tmp_name"];
            $confgroomfileerror = $confgroomfile["error"];
            //birth cert bride
            $birthbridefilename = $birthbride["name"];
            $birthbridefilepath = $birthbride["tmp_name"];
            $birthbridefileerror = $birthbride["error"];
            //birth cert groom
            $birthgroomfilename = $birthgroom["name"];
            $birthgroomfilepath = $birthgroom["tmp_name"];
            $birthgroomfileerror = $birthgroom["error"];
            //birth cert groom
            $marriagefilename = $marriagecertfile["name"];
            $marriagefilepath = $marriagecertfile["tmp_name"];
            $marriagefileerror = $marriagecertfile["error"];
 


            
            // //bride pic
            // // $bridepicfilename = $bridepic["name"];
            // // $bridepicfilepath = $bridepic["tmp_name"];
            // // $bridepicfileerror = $bridepic["error"];
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
            $checkquery1 = "SELECT * from test_baptismal WHERE BAPDATE = '$date'";
            $checkquery2 = "SELECT * from test_confirmation WHERE CONFDATE = '$date'";
            $namecheck = "SELECT * from test_wedding WHERE BRIDE = '$bride' AND GROOM = '$groom'";


            $rs = mysqli_query($conn, $checkquery);
            $rs1 = mysqli_query($conn, $checkquery1);
            $rs2 = mysqli_query($conn, $checkquery2);
            $rsName = mysqli_query($conn, $namecheck);
            
            $data = mysqli_fetch_array($rs, MYSQLI_NUM);
            $data1 = mysqli_fetch_array($rs1, MYSQLI_NUM);
            $data2 = mysqli_fetch_array($rs2, MYSQLI_NUM);    
            

            if ($rsName)
            {
                if (mysqli_num_rows($rsName) > 0)
                {
                    echo '<script type="text/javascript">';
                    echo 'alert("Data Entry Unsuccessful! Names match in our system.")';  
                    echo '</script>';  
                    echo "<script>location.href = 'SBWeddingInsert.php';</script>";
                }
                
                else
                {
                    if ($rs2)
            {
                if ($rs1) 
                {
                    if ($rs)
                    {
                        if (mysqli_num_rows($rs2) > 0)
                        {
                            echo '<script type="text/javascript">';
                            echo 'alert("Data Entry Unsuccessful! Date is already reserved.")';  
                            echo '</script>';  
                            echo "<script>location.href = 'SBWeddingInsert.php';</script>";
                        }
                        else
                        {
                            if (mysqli_num_rows($rs1) > 0)
                            {
                                echo '<script type="text/javascript">';
                                echo 'alert("Data Entry Unsuccessful! Date is already reserved.")';  
                                echo '</script>';  
                                echo "<script>location.href = 'SBWeddingInsert.php';</script>";
                            }
                            else 
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
                                    //baptismal bride file to SBWedding Folder
                                    $bridebapfile = 'SBWedding/' .$bapbridefilename;
                                    //baptismal groom file to SBWedding Folder
                                    $groombapfile = 'SBWedding/' .$bapgroomfilename;
                                    //confirmation bride file to SBWedding Folder
                                    $brideconffile = 'SBWedding/' .$confbridefilename;
                                    //confirmation groom file to SBWedding Folder
                                    $groomconffile = 'SBWedding/' .$confgroomfilename;
                                    //birth certificate bride to SBWedding Folder
                                    $birthbridefile = 'SBWedding/' .$birthbridefilename;
                                    //birth certificate groom to SBWedding Folder
                                    $birthgroomfile = 'SBWedding/' .$birthgroomfilename;
                                    //marriage certificate file to SBWedding Folder
                                    $marriagefile = 'SBWedding/' .$marriagefilename;


                                    //echo
                                    move_uploaded_file($cfilepath, $cfile);
                                    move_uploaded_file($bapbridefilepath, $bridebapfile);
                                    move_uploaded_file($bapgroomfilepath, $groombapfile);
                                    move_uploaded_file($confbridefilepath, $brideconffile);
                                    move_uploaded_file($confgroomfilepath, $groomconffile);
                                    move_uploaded_file($birthbridefilepath, $birthbridefile);
                                    move_uploaded_file($birthgroomfilepath, $birthgroomfile);
                                    move_uploaded_file($marriagefilepath, $marriagefile);



                                    $sql = "INSERT into test_wedding(bride, groom, date, cenomar, bapbride, bapgroom, confbride, confgroom, birthcertbride, birthcertgroom, marriagecert, contact, package) 
                                    VALUES('$bride', '$groom', '$date', '$cfile', '$bridebapfile', '$groombapfile', '$brideconffile', '$groomconffile', '$birthbridefile', '$birthgroomfile', '$marriagefile', '$contact', '$package')";
                                    $result = mysqli_query($conn, $sql);

                                    if ($result)
                                    {
                                        echo '<script type="text/javascript">';
                                        echo 'alert("Data Entry Successful!")';  
                                        echo '</script>';
                                        echo "<script>location.href = 'SBDash.php';</script>";
                                        

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
                }
            }    

 
            else
            {
                echo '<script type="text/javascript">';
                echo 'alert("Database Connection Error")';  
                echo '</script>';
            }    
            }  
            
        }  
        
    }

?>  