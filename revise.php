<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
		<title>Revise an employee record</title>
	</head>
	<body>


<img style="border-width: 0px;" src="http://www.bonder.com/images/under-construction.gif" width="452" height="478" />

<table cellpadding="10">
<tr>
<td>ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>E-mail</td>
<td>Phone</td>
</tr>

<?php

$username="Crosshill";
$password="WJB@Crosshill4";
$database="Crosshill";

mysql_connect("Crosshill.db.4683335.hostedresource.com",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM Employees";
$result=mysql_query($query);
mysql_close();

while ($row=mysql_fetch_array($result)){
echo ("<tr><td>$row[employeeid]</td>");
echo ("<td>$row[firstname]</td>");
echo ("<td>$row[lastname]</td>");
echo ("<td>$row[department]</td>");
echo ("<td><a href=\"EmployeeEdit.php?id=$row[id]\">Edit</a></td></tr>");
}
echo "</table>";

?>	

<br><br>
<a href="http://www.crosshillmarket.com/index.php">Return Home</a>
	</body>
</html>
