<?php
$mysqli = new mysqli("localhost","root","","testvkreate");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$name = $_POST['name'];
$num = $_POST['num'];
$hno = $_POST['Hno'];
$street = $_POST['street'];
$locality = $_POST['locality'];
$exchange = $_POST['exchange'];
$bookdate = $_POST['date'];
$slotdate = str_replace('/', '-', $bookdate);
$slotdate = date('Y-m-d', strtotime($slotdate));
$slot = $_POST['slot'];

$ins = "Insert into newpickup(Name,Mobile_No,Hno,Street,Locality,Exchange,Date,Slot)
Value('$name', '$num', '$hno','$street','$locality','$exchange','$slotdate','$slot')";
echo "<br>";
if ($mysqli->query($ins) == True)
header("Location: sell.php");
else
echo "Error: ".$ins."<br>".$mysqli->error;
$mysqli->close();
?>
