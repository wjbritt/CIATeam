<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
		<title>Revise an employee record</title>
	</head>
	<body>


<img style="border-width: 0px;" src="http://www.bonder.com/images/under-construction.gif" width="452" height="478" />

<?php
mysql_connect('Crosshill.db.4683335.hostedresource.com', 'Crosshill', 'WJB@Crosshill4') or die(mysql_error());
mysql_select_db("Crosshill") or die(mysql_error());

$UID = (int)$_GET['employeeid'];
$query = mysql_query("SELECT * FROM Employees WHERE employeeid = '$UID'") or die(mysql_error());

if(mysql_num_rows($query)>=1){
    while($row = mysql_fetch_array($query)) {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $department = $row['department'];
     
    }
?>
<form action="update.php" method="post">
<input type="hidden" name="ID" value="<?=$UID;?>">
First Name: <input type="text" name="ud_firstname" value="<?=$firstname?>"><br>
Last Name: <input type="text" name="ud_lastname" value="<?=$lastname?>"><br>
Department: <input type="text" name="ud_department" value="<?=$department?>"><br>
<input type="Submit">
</form>
<?php

}else{
    echo 'No entry found. <a href="javascript:history.back()">Go back</a>';
}
?>	

<br><br>
<a href="http://www.crosshillmarket.com/index.php">Return Home</a>
	</body>
</html>
