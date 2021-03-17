<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "student";

$conn = mysqli_connect($host,$user,$pass,$db_name);


if($conn)
{
	echo "connection succesfully connected";
	
}
if(isset($_REQUEST['submit'])){
if(($_REQUEST['name']=="")||($_REQUEST['email'] == "")||($_REQUEST['message'] == "") ||($_REQUEST
['about_yourself'] == "")){
	echo"<small>Fill all fields ...</small><hr>";
}
else{
$n1 = $_REQUEST['name'];
$e1 = $_REQUEST['email'];
$m1 = $_REQUEST['message'];
$abs = $_REQUEST['about_yourself'];

$sql = "INSERT INTO stdata(name,email,message,about_yourself) VALUE('$n1','$e1','$m1','$abs')";
if(mysqli_query($conn,$sql)){
	echo "New Record inserted successfully";
}
else {
	echo "unable to insert data";
}
}
}
?>

<html>
<head>
  <title>form subbimission</title>
  </head>
  <body>
  <form action="" method="POST">
  Name:- <input type="text" name="name" placeholder="enter name"/>
  E-mail:- <input type="email" name="email" placeholder="enter email"/>
  message:-<input type="text" name="message" placeholder="enter message"/>
  about_yourself:-<input type="text" name="about_yourself" placeholder="about yourself"/>
  <input type="submit" name="submit" value="submit">
  
  </form>
  </body>

</html>




