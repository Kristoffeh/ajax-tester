<?php
require 'require/dbconnect.php';
$result = mysqli_query($conn, "SELECT * FROM wee");
    
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td style='font-family: 'Titillium Web', sans-serif;color: #9a9a9a;'><a>" . $row['name'] . "</a></td>";
        echo "<td style='font-family: 'Titillium Web', sans-serif;color: #9a9a9a;'><a>" . $row['age'] . "</a></td>";
        echo "</tr>";
    }
?>