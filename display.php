<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
		<title>Company XYZ Employee Directory</title>
	</head>
	<body>
<H2>Employee Directory<h2>	

<br>
<h3>Here is a list of our current employees:<h3>
<HR WIDTH="100% SIZE="5">
<h4>ID---First---Last---Department<h4>
<HR WIDTH="100% SIZE="5">
<?php 

    // connect to the database

    $host = 'Crosshill.db.4683335.hostedresource.com';
    $username = 'Crosshill';
    $pass = 'WJB@Crosshill4';

    mysql_connect($host,$username,$pass) or die(mysql_error());
    mysql_select_db("Crosshill") or die(mysql_error());

    // select everything from the table

    $query = "SELECT * FROM Employees";
    $result = mysql_query($query) or die(mysql_error());

    echo "<table>";
    echo "<tr>";

    while( ($row = mysql_fetch_array($result)))
    {
		 echo "<tr>";
        echo "<td>".$row['employeeid']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['department']."</td>";
		echo "</tr>";
    
	}

 
    echo "<tr>";
    echo "</table>";  

    // disconnect from the database

    mysql_close();


?>

<br><br>
<a href="http://www.crosshillmarket.com/index.php">Return Home</a>
	</body>
</html>
