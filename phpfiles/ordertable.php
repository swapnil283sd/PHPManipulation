<!DOCTYPE html>
<html>
<head>

	<title>Table</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="fonts/css/font-awesome.min.css">

 <link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto" rel="stylesheet">

</head>
<body>

<?

include "dbconnect.php";
$sql = "SELECT * FROM place_order";
$result = $conn->query($sql);
echo"<table><tr><th>Order No</th><th>Customer Name</th><th>Mobile No</th><th>Address</th><th>Amount</th><th>Status</th></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
if($row["ord_status"]==1){
  echo "<tr style=\"background:#FFE853; color:#000;\"><td>" . $row["ord_srno"]. " </td><td>" . $row["cust_name"]. " </td><td>" . $row["ord_mobileno"]. "</td><td>". $row["ord_address"]. "</td><td>". $row["ord_amount"]. "</td><td>". $row["ord_status"]. "</td></tr>";
}

else if($row["ord_status"]==0){
  echo "<tr style=\"background:#F2433D; color:#fff;\"><td>" . $row["ord_srno"]. " </td><td>" . $row["cust_name"]. " </td><td>" . $row["ord_mobileno"]. "</td><td>". $row["ord_address"]. "</td><td>". $row["ord_amount"]. "</td><td>". $row["ord_status"]. "</td></tr>";
}


else if($row["ord_status"]==2){
  echo "<tr style=\"background:#50AC58; color:#fff;\"><td>" . $row["ord_srno"]. " </td><td>" . $row["cust_name"]. " </td><td>" . $row["ord_mobileno"]. "</td><td>". $row["ord_address"]. "</td><td>". $row["ord_amount"]. "</td><td>". $row["ord_status"]. "</td></tr>";
}

      
    }
} else {
    echo "0 results";
}
echo "</table></center>";

$conn->close();
?>

</body>
</html>