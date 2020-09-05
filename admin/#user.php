<head>
<style>
td{
  border-radius: 4px;
  background-color: #ffe6e6;
  border: none;
  color: #000000;
  text-align: center;
  font-size: 16px;
  padding: 10px;

  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  
}

.button {
  border-radius: 4px;
  background-color: #FFFAFA;
  border: none;
  color: #8B0000;
  text-align: center;
  font-size: 14px;
  padding: 10px;
padding-right:0px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  margin-right:0px;
}
</style>
</head>

<?php
$i=1;
echo "<table border=0><tr><th class=\"button\"><input type=\"button\" value=\"Delete\"></th><th class=\"button\">Id</th><th class=\"button\">First Name</th><th class=\"button\">Last Name</th><th class=\"button\">Email-Id</th><th class=\"button\">Status</th></tr>";

function printResultSet(&$rowset, $i) {
    //print "Result set $i:\n";
    foreach ($rowset as $row) {
    	echo "<tr><td style=\"width: 40px;\"><input type=\"checkbox\"></td>";
        foreach ($row as $col) {
            // echo "<tr><td style=\"width: 40px;\"><input type=\"checkbox\"></td><td style=\"width: 250px;\">".$col."</td><td>".$col."</td><td style=\"width: 850px;\">".$col."</td></tr>";
            echo "<td style=\"width: 250px;\">".$col."</td>";
        }
        echo "</tr>";
        
    }
    print "\n";
}
try
{
	require("../connection.php");
	$sql="SELECT id,first_name,last_name,email,status from user_table";
	$stmt = $pdo->query($sql); 
	
{


do {
    $rowset = $stmt->fetchAll(PDO::FETCH_NUM);
    if ($rowset) {
        printResultSet($rowset, $i);
        //echo $rowset['id'];

    }
    $i++;
} while ($stmt->nextRowset());


//echo "hi";
		die;


	while($res->nextRowset())
	{

		
	}
	





	echo "<table border=0><tr><th class=\"button\"><input type=\"button\" value=\"Delete\"></th><th class=\"button\">To</th><th class=\"button\">Subject</th><th class=\"button\">Message</th></tr>";
	while($res->nextRowset())
	{
echo "hello";
die;
	echo "<tr><td style=\"width: 40px;\"><input type=\"checkbox\"></td><td style=\"width: 250px;\">".$item."</td><td>".$row['id']."</td><td style=\"width: 850px;\">".$row['id']."</td></tr>";
	}
	echo "</table>";
}

}
catch(Exception $e)
{
	echo $e;
	die;
}

?>

