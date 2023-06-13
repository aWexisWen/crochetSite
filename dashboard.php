<?php
session_start();
require "includes/common.php";

if (!isset($_SESSION['username'])) {
    header('location: index.php');
    exit();
}

// Retrieve the user's information from the database
$user_id = $_SESSION['user_id'];
$query = "SELECT username, first_name, last_name FROM users WHERE id = '$user_id'";
$result = mysqli_query($con, $query);
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Online Shopping Site for Crochet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 5s ease infinite;
        height: fit-content;
    }

    .product-image {
        height: 225px;
    }
</style>

<body>
    <!--Header-->
    <?php include 'includes/header_menu.php'; ?>

    <!--Dashboard Content-->
    <div id="content" style="text-align: center;">
        <div class="container" style="padding-top:150px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;">
                <h1>User Dashboard</h1>
                <h3>User Information:</h3>
                <p><strong>Username:</strong> <?php echo $username; ?></p>
                <p><strong>First Name:</strong> <?php echo $first_name; ?></p>
                <p><strong>Last Name:</strong> <?php echo $last_name; ?></p>
                <a href="profile.php" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>