<?php
require ("includes/common.php");
session_start();

$username=$_POST['lusername'];
$username=mysqli_real_escape_string($con,$username);

$password=$_POST['lpassword'];
$password=mysqli_real_escape_string($con,$password);
$password=md5($password);

$query="SELECT id,username,password from users where username='".$username."' and  password='".$password."'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==0){
    $m = "Please enter correct E-mail id and Password";
    header('location: index.php?errorl='.$m);
}else{
    $row = mysqli_fetch_array($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['user_id'] = $row['id'];
    header('location:products.php');
    

}



?>