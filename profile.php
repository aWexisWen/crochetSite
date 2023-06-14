<?php
session_start();
require "includes/common.php";

if (!isset($_SESSION['username'])) {
    header('location: index.php');
    exit();
}

// Assuming you have retrieved the user's first name and last name from the database and stored them in variables
$first_name = "";
$last_name = "";

// Retrieve the user's first name and last name from the database
$user_id = $_SESSION['user_id'];
$query = "SELECT first_name, last_name FROM users WHERE id = '$user_id'";
$result = mysqli_query($con, $query);
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Prepare an update statement
    $query = "UPDATE users SET first_name = ?, last_name = ? WHERE id = ?";
    $statement = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($statement, "ssi", $first_name, $last_name, $user_id);

    // Execute the update statement
    if (mysqli_stmt_execute($statement)) {
        // Profile update successful
        header("Location: profile.php?profile_updated=true");
        exit();
    } else {
        // Profile update failed
        echo "Error updating profile: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hooked | Online Shopping Site for Crochet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: linear-gradient(-45deg, #86E3CE, #D0E6A5, #FFDD94, #FA897B, #CCABD8);
            background-size: 400% 400%;
            animation: gradient 5s ease infinite;
            height: fit-content;
        }

        .product-image {
            height: 225px;
        }

        .success-notification {
            background-color: #bbd4aa;
            color: black;
            padding: 10px;
            width: 380px;
            text-align: center;
        }
    </style>
</head>

<body style="margin-bottom:200px">
    <!--Header-->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>

    <!--Profile Edit Form-->
    <div id="content">
        <div id="" class="">
            <div class="container" style="padding-top:150px">
                <div id="notification">
                    <?php if (isset($_GET['profile_updated'])) : ?>
                        <div class="success-notification" style="border-radius: 0.5rem;">
                            Your account has been updated succesfully
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;">
                    <h1>Edit Profile</h1>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <label for="first_name">First Name:</label>
                        <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>"><br>

                        <label for="last_name">Last Name:</label>
                        <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>"><br>

                        <input type="submit" value="Save Changes">
                    </form>
                </div>
            </div>

        </div>
    </div>
    <?php include 'includes/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>