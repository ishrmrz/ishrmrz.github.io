<?php

    function displayWedding()
    {
        include "dbconn.php";
        if (isset($_POST['search'])) {
            $search = $_POST['searchname'];
            $sqlresult = mysqli_query($conn, "select * from test_wedding WHERE bride LIKE '%$search%'");
        } else {
            $sqlresult = mysqli_query($conn, "select * from test_wedding");
        }

        while ($row = mysqli_fetch_array($sqlresult)) {
            echo "<td>$row[0]</td>"; 
            echo "<td>$row[1]</td>"; 
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>"; 
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td>$row[6]</td>";
            echo "<td>$row[7]</td>";
            echo "<td>$row[8]</td>";
            echo '<td><img src="data:image/jpg; base64,' . base64_encode($row['bridepic']) . '"height="100"width="100"/></td>'; 
            echo '<td><img src="data:image/jpg; base64,' . base64_encode($row['groompic']) . '"height="100"width="100"/></td>'; 
            ?>
                <td><a class="btn btn-primary" href="#">Edit</a>&nbsp;
					<a class="btn btn-secondary"href="#">Delete</a></td>
            <?php
            echo "<tr>";
        }
        mysqli_close($conn);
    }
?>