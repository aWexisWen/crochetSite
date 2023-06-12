<?php
require ("includes/common.php");
session_start();

$first_name=$_POST['first_name'];
$first_name=mysqli_real_escape_string($con,$first_name);

$last_name=$_POST['llast_name'];
$last_name=mysqli_real_escape_string($con,$last_name);

$query="SELECT id,first_name,last_name from users where first_name='".$first_name."' and  last_name='".$last_name."'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
{
    $row = mysqli_fetch_array($result);
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['user_id'] = $row['id'];
    header('location:products.php');
    

}



?>