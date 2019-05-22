<?php
header('Access-Control-Allow-Origin: *');  
include "../config.php";
$title=$_POST['videourl'];
$sql = "SELECT source FROM video WHERE name='$title'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "".$row["source"]."";
    }
} else {
    echo "0 results";
}
$con->close();
?>