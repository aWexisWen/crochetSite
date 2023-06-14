<?php
session_start();
require "includes/common.php";

if (!isset($_SESSION['username'])) {
    header('location: index.php');
    exit();
}

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postContent = $_POST['post_content'];

    // Validate input
    if (empty($postContent)) {
        $error = "Please enter your post content.";
    } else {
        // Save the post to the database
        $userId = $_SESSION['user_id'];
        $query = "INSERT INTO forum_posts (user_id, post_content) VALUES ('$userId', '$postContent')";
        mysqli_query($con, $query) or die(mysqli_error($con));

        // Redirect to the forum page
        header('Location: forum.php');
        exit();
    }
}

// Retrieve forum posts from the database
$query = "SELECT forum_posts.post_id, forum_posts.post_content, forum_posts.created_at, users.username 
          FROM forum_posts 
          INNER JOIN users ON forum_posts.user_id = users.id 
          ORDER BY forum_posts.created_at DESC";
$result = mysqli_query($con, $query) or die(mysqli_error($con));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum | Online Crochet Community</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        background: linear-gradient(-45deg, #86E3CE, #D0E6A5, #FFDD94, #FA897B, #CCABD8);
        background-size: 400% 400%;
        animation: gradient 5s ease infinite;
        height: fit-content;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }
</style>

<body>
    <!-- Header -->
    <?php include 'includes/header_menu.php'; ?>

    <!-- Forum Content -->
    <div id="content" style="text-align: left;">
        <div class="container" style="padding-top:150px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;">
                <h1 class="forum-title">Public Forum</h1>
                <?php if (isset($error)) { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $error; ?></div>
                <?php } ?>
                <div class="post-form">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="post_content">Write Your Thoughts Here:</label>
                            <textarea class="form-control" id="post_content" name="post_content" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
                <hr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="post">
                        <div class="post-header">
                            <strong><?php echo $row['username']; ?></strong>
                            <span class="post-date"><?php echo $row['created_at']; ?></span>
                        </div>
                        <div class="post-content"><?php echo $row['post_content']; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>