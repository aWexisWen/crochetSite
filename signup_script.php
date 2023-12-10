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

$userType = $_POST['userType']; // New field for user type selection

$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);

if ($num != 0) {
    $m = "Username Already Exists";
    header('location: index.php?error=' . $m);
} else {
    $quer = "INSERT INTO users (username, first_name, last_name, password, user_type) VALUES ('$username', '$first', '$last', '$pass', '$userType')";
    mysqli_query($con, $quer);

    $user_id = mysqli_insert_id($con);
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $user_id;

    if ($userType == 'customer') {
        $_SESSION['user_type'] = 'customer'; // Set the user type to 'customer'
        header('location: products.php');
    } elseif ($userType == 'seller') {
        $_SESSION['user_type'] = 'seller'; // Set the user type to 'seller'
        header('location: seller_dashboard.php');
    } elseif ($userType == 'admin') {
        $_SESSION['user_type'] = 'admin'; // Set the user type to 'admin'
        header('location: admin_dashboard.php');
    }
}
?>
