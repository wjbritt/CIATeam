<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
		<title>Record Added - Thank You!</title>
	</head>
	<body>
<?php
// Create connection
$con=mysql_connect("Crosshill.db.4683335.hostedresource.com","Crosshill","WJB@Crosshill4","Employees");

// Check connection
if (!$con)
  {
  die ("Failed to connect to MySQL: " . mysql_connect_error());
  }
mysql_select_db("Crosshill", $con);

$sql="INSERT INTO Employees (employeeid, firstname, lastname, department)
VALUES
('$_POST[employeeid]','$_POST[firstname]','$_POST[lastname]','$_POST[department]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error($con));
  }
echo "1 record added - Thank you!";

mysql_close($con);
?>
<br><br>
<a href="http://www.crosshillmarket.com/index.php">Add another?</a>

	</body>
</html>
