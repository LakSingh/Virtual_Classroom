<?php 
$conn=mysqli_connect('localhost','root','','techiestudy');
if($conn){
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$eml=$_POST['email'];
$pw=$_POST['pass'];
$query="INSERT INTO STUDENT VALUES('$fn','$ln','$eml','$pw')";
$exe=mysqli_query($conn,$query);
if($exe)
{echo '<script>alert("Registered Successfully");</script>';}
//header("refresh:1; url=login.html");
history.go(-1);
}
else{
echo "connection failed";}
?>