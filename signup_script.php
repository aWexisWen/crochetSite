<?php
require "includes/common.php";
session_start();

$username = $_POST['username'];
$username = mysqli_real_escape_string($con, $username);

$pass = $_POST['password'];
$pass = mysqli_real_escape_string($con, $pass);
$pass = md5($pass);

$first = $_POST['firstName'];
$first = mysqli_real_escape_string($con, $first);

$last = $_POST['lastName'];
$last = mysqli_real_escape_string($con, $last);

$query = "SELECT * from users where username='$username'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);
if ($num != 0) {

    $m = "Username Already Exists";
    header('location: index.php?error=' . $m);

} else {
    $quer = "INSERT INTO users(username,first_name,last_name,password) values('$username','$first','$last','$pass')";
    mysqli_query($con, $quer);

    echo "New record has id: " . mysqli_insert_id($con);
    $user_id = mysqli_insert_id($con);
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $user_id;
    header('location:products.php');
}
?>