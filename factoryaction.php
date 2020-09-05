<?php
$mysqli = new mysqli("localhost","root","","testvkreate");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$name = $_POST['name'];
$num = $_POST['num'];

$ins = "Insert into factory(Company_name,Contact_no)
Value('$name', '$num')";
echo "<br>";
if ($mysqli->query($ins) == True){
header("Location: index.php");
}
else
echo "Error: ".$ins."<br>".$mysqli->error;
$mysqli->close();
?>
