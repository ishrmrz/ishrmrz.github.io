<?php      
    include('dbconn.php');  
     
    if (isset($_POST['submit']))
    {
        $first =  $_POST['first'];
        $last = $_POST['last'];
        $user = $_POST['user'];
        $password = $_POST['password'];


    
            $sql = "INSERT into test_login(first, last, username, password) 
            VALUES('$first', '$last', '$user', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result)
            {
                echo '<script type="text/javascript">';
                echo 'alert("Registration of Account Successful!")';  
                echo '</script>';
                echo "<script>location.href = 'SBDash.php';</script>";


            }
            else
            {
                echo '<script type="text/javascript">';
                echo 'alert("Registration of Account Unsuccessful")';  
                echo '</script>';  
                echo "<script>location.href = 'SBRegistrationInsert.php';</script>";
            }
        
    }

?>  