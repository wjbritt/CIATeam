<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

        <head>
                <title>Updated Company XYZ Employee Record</title>
        </head>
        <body>


 <?php
    mysql_connect('Crosshill.db.4683335.hostedresource.com', 'Crosshill', 'WJB@Crosshill4') or die(mysql_error());
    mysql_select_db("Employees") or die(mysql_error());

    $ud_ID = (int)$_POST["ID"];

    $ud_firstname = mysql_real_escape_string($_POST["ud_firstname"]);
    $ud_surname = mysql_real_escape_string($_POST["ud_lastname"]);
    $ud_FBID = mysql_real_escape_string($_POST["ud_department"]);


    $query="UPDATE Employees
            SET firstname = '$ud_firstname', lastname = '$ud_lastname', department = '$ud_department' 
            WHERE ID='$ud_ID'";


mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
    echo "<p>($ud_ID) Record Updated<p>";
}else{
    echo "<p>($ud_ID) Not Updated<p>";
}
?>

<HR WIDTH="100% SIZE="4">
<br><br>
<h4>Additional Services:</h4>
<a href="http://www.crosshillmarket.com/display.php">Employee Directory</a>
<br>
<a href="http://www.crosshillmarket.com/revise.php">Revise an Employee Record</a>
<br>
<a href="http://www.crosshillmarket.com/delete.php">Remove Employee</a>

<br><br><br>

        </body>
</html>
