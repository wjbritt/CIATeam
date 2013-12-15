<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
		<title>Company XYZ</title>
	</head>
	<body>
<h1>Company XYZ Employee Database<h1>

<?php
echo "Hello CIA Team!";
?>

<!--This is the section of code used to open a database connection -->

<?php
// Create connection
$con=mysql_connect("Crosshill.db.4683335.hostedresource.com","Crosshill","WJB@Crosshill4","Employees");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<!-- End of DB Connection section -->

<! - Form for Employee Submission -->

<html>
<body>
<HR WIDTH="100% SIZE="5">
<h3>Use the form below to enter a new employee:<h3>

<form action="insert.php" method="post">
ID#: <input type="number" name="employeeid">
Firstname: <input type="text" name="firstname">
Lastname: <input type="text" name="lastname">
Department: <input type="text" name="department">

<input type="submit">
</form>

<! - End of form ->

<! - Post form information to DB uses insert.php page


<HR WIDTH="100% SIZE="4">
<br><br>
<h4>Additional Services:</h4>
<a href="http://www.crosshillmarket.com/display.php">Employee Directory</a>
<br>
<a href="http://www.crosshillmarket.com/revise.php">Revise an Employee Record</a>
<br>
<a href="http://www.crosshillmarket.com/delete.php">Remove Employee</a>

<br><br><br>

<a href="mailto:j.britt@wholefoods.com"
><img src="http://i3.kym-cdn.com/entries/icons/original/000/002/252/me-gusta.jpg" width="60" height="60" alt="Click to email me" /></a>




	</body>
</html>
