<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body bgcolor="#FFFF99">
<?php

/* Set oracle user login and password info */
$dbuser = "root"; /* your deakin login */
$dbpass = "admin"; /* your oracle access password */
//$db = "test"; 
$connect = mysql_connect("localhost:3306",$dbuser, $dbpass); 

if (mysqli_connect_errno($connect)) {
echo "An error occurred connecting to the database"; 
exit; 
}

	$query='select * from furniture';
	

mysql_select_db('test');
	


/* build sql statement using form data */
//$query = "SELECT * FROM Furniture where furn_name= '$select1'"; 

/* check the sql statement for errors and if errors report them */
$stmt = mysql_query( $query,$connect); 
//echo "SQL: $query<br>";
if(!$stmt) {
echo "An error occurred in parsing the sql string.\n"; 
exit; 
}
mysqli_stmt_execute($stmt);


?>
<h3>All products from our database is below..</h3>
<div align="center">
<table border="0" bgcolor="#339933" cellpadding="5" cellspacing="1">
<tr bgcolor="#006633">
<td width="150" style="color:#ffff99">Code</td>
<td width="150" style="color:#ffff99">Furniture Name</td>
<td width="150" style="color:#ffff99">Price($)</td>
<td width="150" style="color:#ffff99">Furniture Pictures</td>
</tr>


<?php

// Display all the values in the retrieved records, one record per row, in a loop
while($fg=mysql_fetch_assoc($stmt)) {
// Start a row for each record
echo("<tr valign=top bgcolor=#ccffcc>");
// Output fields, one per column
// ID value in column one
//$fg1 = mysql_fetch_array($stmt,"FURN_ID"); //"ID";
echo("<td width=150>");
echo ($fg['Furn_ID']);
echo("</td>");
// USERNAME value in column two
//$fg2 = mysql_fetch_array($stmt,"FURN_NAME"); //"USERNAME";
echo("<td width=150>");
echo ($fg['Furn_Name']);
echo("</td>");
// ID value in column one
//$fg3 = mysql_fetch_array($stmt,"FURN_PRICE_$"); //"PASSWORD";
echo("<td width=150>");
echo ($fg['Furn_PRICE']);
echo("</td>");

//$fg4 = mysql_fetch_array($stmt,"IMAGE_SRC"); //"PASSWORD";
echo("<td width=150>");
if($fg['Image_SRC']!=""){
echo ("<img alt='' height='163' src='");
echo($fg['Image_SRC']);
echo("' width='242'/>");}else{
echo("Sorry No pictures Available");
}
echo("</td>");

// End the row 
echo("</tr>");
} 
// Close the connection
mysql_close ($connect); 
?>




</table>
</div>


</body>

</html>
