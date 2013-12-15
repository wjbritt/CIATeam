<html>
<head>
<title>Edit an Employee Record</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<table>
  <tr>
    <td align="center">EDIT DATA</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <?
      include"db.inc.php";//database connection
      $order = "SELECT * FROM Employees";
      $result = mysql_query($order);
      while ($row=mysql_fetch_array($result)){
        echo ("<tr><td>$row[employeeid]</td>");
        echo ("<td>$row[firstname]</td>");
        echo ("<td>$row[lastname]</td>");
        echo ("<td>$row[department]</td>");
        echo ("<td><a href=\"edit_form.php?id=$row[employeeid]\">Edit</a></td></tr>");
      }
      ?>
      </table>
    </td>
   </tr>
</table>
</body>
</html>
