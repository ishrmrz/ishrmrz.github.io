<?php      
    include('dbconn.php');  
    session_start();
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from test_login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<script type="text/javascript">';
            echo 'alert("Login Successful")';  
            echo '</script>';  
            echo "<script>location.href = 'SBUserDash.php';</script>";

        }  
        else{  
            echo '<script type="text/javascript">';
            echo ' alert("Login Failed. Credentials did not match")';  //not showing an alert box
            echo '</script>'; 
            echo "<script>location.href = 'index.php';</script>";

        }     
?>  