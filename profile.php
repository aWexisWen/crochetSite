<?php
session_start();
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
            background-image: url(https://kaboompics.com/cache/c/3/e/f/b/c3efbe124cec51a3aa55963a4f32b7ce8f2a31c7.jpeg);
        }

        .product-image {
            height: 225px;
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
    <?php
    // Assuming you have retrieved the user's first name and last name from the database and stored them in variables
    $first_name = "John";
    $last_name = "Doe";

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the submitted form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];

        // TODO: Perform validation and update the user's profile in the database
        // ...
        // Redirect back to the profile page or display a success message
        header("Location: profile.php");
        exit();
    }
    ?>
    <div id="content">
        <div id="bg" class="">
            <div class="container" style="padding-top:150px">
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
</body>

</html>