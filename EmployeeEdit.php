<?php

$username="Crosshill";
$password="WJB@Crosshill4";
$database="Crosshill";

mysql_connect("Crosshill.db.4683335.hostedresource.com",$username,$password);
@mysql_select_db($database) or die ("Unable to select database");
$employeeid = $_GET[employeeid]; 
$query = "SELECT * FROM Employees WHERE id = 'employeeid'"; 
$result = mysql_query($query);
$row = mysql_fetch_array($result);

?>

<form method="post" action="EditEmployeeData.php" />

<table>

<tr>
<td><input type="hidden" name="employeeid" value="<? echo "$row[employeeid]" ?>"></td>
</tr>

<tr>
<td>First Name:</td>
<td><input type="text" name="firstname" value="<? echo "$row[firstname]" ?>"></td>
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text" name="lastname" value="<? echo "$row[lastname]" ?>"></td>
</tr>

<tr>
<td>Department:</td>
<td><input type="text" name="department" value="<? echo "$row[department]" ?>"></td>
</tr>


</table>

</form>
