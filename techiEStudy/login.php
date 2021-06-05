<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
$conn=mysqli_connect('localhost','root','','techiestudy');
mysqli_select_db($conn,'techiestudy');
if(isset($_POST['email'])){
$email=$_POST['email'];
$_SESSION["email"]=$email;
$pw=$_POST['psw'];
$_SESSION["pass"]=$pw;
$sql="SELECT * FROM student WHERE EMAIL='$email' AND PASSWORD='$pw'";
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num==1){ 
echo '<script>alert("Logged In Successfully");</script>';
header("refresh:0.1; url=home2.html");
//header("Location:home2.html");
}
else{
echo '<script>("Your email or password is incorrect.");</script>';
}
}
}
?>	