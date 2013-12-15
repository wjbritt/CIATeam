<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Delete an Employee</title>
</head>
<body>

<h3>Enter the Employee ID Number below to delete a record</h3>
<br>
<p>If you need to look up an Employee ID Number please use the <a href="http://www.crosshillmarket.com/display.php">Employee Directory</a>
<br><br>
<?php
if(isset($_POST['delete']))
{
$dbhost = 'Crosshill.db.4683335.hostedresource.com';
$dbuser = 'Crosshill';
$dbpass = 'WJB@Crosshill4';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$employeeid = $_POST['employeeid'];

$sql = "DELETE FROM Employees ".
       "WHERE employeeid = $employeeid" ;

mysql_select_db('Crosshill');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Employee ID</td>
<td><input name="employeeid" type="number" id="employeeid"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="delete" type="submit" id="delete" value="Delete">
</td>
</tr>
</table>
</form>
<?php
}
?>

<br><br>
<a href="http://www.crosshillmarket.com/index.php">Return Home?</a>
</body>
</html>
