<?php

    include "dbconn.php";
 
    // $ceno = $_GET['downl']; 
    // $sql = "SELECT * FROM test_wedding WHERE cenomar = '$ceno'";
	// $result=mysqli_query($conn, $sql);
    // $row=mysqli_fetch_array($result);

    // if (isset($_GET['downloadceno']))
    // {
    //     $filename = basename($_GET['downloadceno']);
    //     if (file_exists($ceno))
    //     {
    //         $mime_type = mime_content_type($filename);

    //         $cfilepath = "SBWedding/";

    //         // $id=$_GET['updateuser'];
    //         // $sql = "SELECT * FROM test_wedding WHERE wid = '$id'";
    //         // $result=mysqli_query($conn, $sql);
    //         // $row=mysqli_fetch_array($result);

    //         // $briderow =  $row['BRIDE'];
    //         // $groomrow = $row['GROOM'];
    //         // $daterow = $row['DATE'];
    //         // $mime_type = mime_content_type($ceno);

    //         // header("Content Type: " . $ceno);
    //         // header("Content-Disposition: attachment; filename='ceno'");

    //         // readfile($cfilepath . $ceno);
    //         // $cfilename = $_FILES["$filename"]['name'];
    //         // $ctmpname = $_FILES["$filename"]['tmp_name'];
    //         // $cfiletmp = addslashes(file_get_contents($ctmpname));
    //         // $cfiletarget = $cfilepath . basename($_FILES["cenomar"]["name"]);
    //         // $cdownload = move_uploaded_file($ctmpname, $cfinal_file);


    //         header("Content-type: ". $mime_type);
    //         header("Content-Disposition: attachment; filename='$filename'");
    //         header("Content-Transfer-Encoding: binary");
    //         readfile("$cfilepath" . "$filename");
    //     }



    // }

    

        
    
    // mysqli_close($conn);

    
    // header("Content-type: image/jpeg");
    // header("Content-Disposition: attachment; filename='newImage.jpg'");
    // readfile("SBWedding/irene.jpg")
    
    // header('Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    // header('Content-Disposition: attachment; filename="myfile.docx"');
    // readfile("SBWedding/Midterm_Act1.docx");


    //baptismal certificate download
    if(!empty($_GET['bapfile']))
    {
        //Define name and path
        $filename = basename($_GET['bapfile']);
        $filepath = "SBWedding/" .$filename;
        $mime_type = mime_content_type($filename);

        if(!empty($filename) && file_exists($filepath))
        {
            //Define headers
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-type: " . $mime_type);
            header("Content-Disposition: attachment; filename=$filename");
            header("Content-Transfer-Encoding: binary");

            readfile($filepath);
        }

    }

 

    

?>