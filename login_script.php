<?php
require("includes/common.php");
session_start();

if (isset($_POST['lusername']) && isset($_POST['lpassword'])) {
    $username = $_POST['lusername'];
    $password = $_POST['lpassword'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement using a prepared statement
    $query = "SELECT id, username, password, user_type FROM users WHERE username=?";
    $stmt = mysqli_prepare($con, $query);

    // Bind the parameters and execute the query
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    // Get the results and set session variables
    $result = mysqli_stmt_get_result($stmt);
    $num = mysqli_num_rows($result);

    if ($num == 0) {
        $m = "Please enter correct E-mail id and Password";
        header('location: index.php?errorl=' . $m);
    } else {
        $row = mysqli_fetch_array($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_type'] = $row['user_type'];
            header('location: products.php');
        } else {
            $m = "Please enter correct E-mail id and Password";
            header('location: index.php?errorl=' . $m);
        }
    }
} else {
    // Handle if username or password is not set
    // Redirect or display an error message
}
?>
