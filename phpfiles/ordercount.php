<?php
include "dbconnect.php";
$sqlplaced="SELECT * from place_order where  ord_status='0'";
$sqlinitiated="SELECT * from place_order where  ord_status='1'";
$sqlcompleted="SELECT * from place_order where  ord_status='2'";
$result0=mysqli_query($conn,$sqlplaced);
$result1=mysqli_query($conn,$sqlinitiated);
$result2=mysqli_query($conn,$sqlcompleted);

if ($result=mysqli_query($conn,$sqlplaced))
  {
 
$sqlplacednum = mysqli_num_rows($result0);


$sqlinitiatednum = mysqli_num_rows($result1);

$sqlcompleted = mysqli_num_rows($result2);



}
else{
echo "Wrong";
}
$conn->close();
?>
