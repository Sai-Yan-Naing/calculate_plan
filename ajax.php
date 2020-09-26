<?php
include "db_connection.php";

$plan = $_REQUEST["plan"];
$month = $_REQUEST["month"];

$sql = "SELECT * FROM plan WHERE id = $plan";
$result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "OK";
//   }
// } else {
//   echo "0 results";
// }
$row = mysqli_fetch_array($result);

switch ($month) {
  case 1:
    echo $row['month1'];
    break;
  case 3:
    echo 3*$row['month3'];
    break;
  case 6:
    echo 6*$row['month6'];
    break;
  case 12:
    echo 12*$row['month12'];
    break;
    
  default:
    echo $row['month1'];
}

mysqli_close($conn);



?>