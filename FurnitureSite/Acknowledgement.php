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

<h1>Acknowledgement</h1>

<p>&nbsp;</p>
<h3>Thanks for Ordering Online. Your Order will be processed within 24 hours and 
you will be contacted for Shipping confirmation.!!!</h3>
<p>&nbsp;</p>
<p>&nbsp;</p>

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
$select1 =$_POST['select1'];
$select2 =$_POST['select2'];
$text10 =$_POST['Text10'];
$text1 =$_POST['Text1'];
$text2 =$_POST['Text2'];
$text4 =$_POST['Text4'];
$text6 =$_POST['Text6'];
$text7 =$_POST['Text7'];
$text8 =$_POST['Text8'];
$text9 =$_POST['Text9'];
$text5 =$_POST['Text5'];

/*$query="INSERT INTO Orderon (Order_id,Furn_name,Price ,Furn_code,Cust_name,AddrL1,AddrL2,Suburb,City,Post_code ,Country,Phone ,Date_Of_Order) VALUES ('Orderon_seq.nextval','$select1','$select2','$text10','$text1','$text2','$text4','$text6','$text7','$text8','$text9','$text5','SYSDATE')";*/
$query="INSERT INTO Orderon (Order_id,Furn_name,Furn_code,Cust_name,AddrL1,AddrL2,Suburb,City,Post_code ,Country,Phone ,Date_Of_Order) VALUES (Orderon_seq.nextval,'$select1','$text10','$text1','$text2','$text4','$text6','$text7','$text8','$text9','$text5',SYSDATE)";



	


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


</body>

</html>
