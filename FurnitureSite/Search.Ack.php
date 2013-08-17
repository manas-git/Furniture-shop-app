<!--Name:Manas Anand Koni..
ID:211147668..SIT774
 Assignment 1-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-bz" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>About us</title>
</head>


<body bgcolor="#FFFF99">

<?php

$select1 =$_POST['select1'];
$select2 =$_POST['select2'];



/* Set oracle user login and password info */
$dbuser = "root"; /* your deakin login */
$dbpass = "admin"; /* your oracle access password */
//$db = "test"; 
$connect = mysqli_connect("localhost:3306",$dbuser, $dbpass); 

if (mysqli_connect_errno($connect)) {
echo "An error occurred connecting to the database"; 
exit; 
}
if($select2 =='between 500 and 1000'){

	$query='select * from furniture where FURN_NAME =  '$select1' and FURN_PRICE_$ $select2';}

else if($select2 =='between 1000 and 2000'){

	$query='select * from furniture where  FURN_NAME = '$select1' and  FURN_PRICE_$ $select2';}

	else if($select2 =='between 2000 and 3000'){

	$query='select * from furniture where  FURN_NAME = '$select1' and  FURN_PRICE_$ $select2';}
	
	else if($select2 =='3000'){

	$query='select * from furniture where  FURN_NAME = '$select1' and  FURN_PRICE_$ > $select2';}
	

mysql_select_db('test');
	


/* build sql statement using form data */
//$query = "SELECT * FROM Furniture where furn_name= '$select1'"; 

/* check the sql statement for errors and if errors report them */
$stmt = mysql_query($query,$connect); 
//echo "SQL: $query<br>";
if(!$stmt) {
echo "An error occurred in parsing the sql string.\n"; 
exit; 
}
mysqli_stmt_execute($stmt);


?>

<h1>Decor Home Solutions</h1>
<h4>Use Furniture Code for Ordering  <em></em></h4>
<h3>Your Current Search is for Furniture Type: <?php echo($select1) ?> for Price Range <?php if($select2 =='3000'){echo("Above 3000");}else{echo($select2);} ?> </h3>
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
echo ($fg3['Furn_Price']);
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
mysql_close($connect); 
?>




</table>
</div>




<h1>Search Results..</h1>

<p>&nbsp;</p>
<h3>&nbsp;</h3>
<p>&nbsp;</p>

</body>

</html>
