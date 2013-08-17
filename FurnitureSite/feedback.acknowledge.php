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

<h1>Thank You!!</h1>
<?php









/* Set oracle user login and password info */
$dbuser = "root"; /* your deakin login */
$dbpass = "admin"; /* your oracle access password */
$db = "test"; 
$connect = mysqli_connect("localhost",$dbuser, $dbpass, $db); 

if (mysqli_connect_errno($connect)) {
echo "An error occurred connecting to the database"; 
exit; 
}
$Text1 =$_POST['Text1'];
$Text2 =$_POST['Text2'];
$TextArea1 =$_POST['TextArea1'];
$Text3 =$_POST['Text3'];

$query="INSERT INTO Poll (CUST_NAME,ORDER_NO,COMMENTS,E_MAIL) VALUES ('$Text1','$Text2','$TextArea1','$Text3')";




	


/* build sql statement using form data */
//$query = "SELECT * FROM Furniture where furn_name= '$select1'"; 

/* check the sql statement for errors and if errors report them */
$stmt = mysqli_query($connect, $query); 
//echo "SQL: $query<br>";
if(!$stmt) {
echo "An error occurred in parsing the sql string.\n"; 
exit; 
}
mysqli_stmt_execute($stmt);


?>


<p>&nbsp;</p>
<h3>Thanks for your valuable Feedback.</h3>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>

</html>
