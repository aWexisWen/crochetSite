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
            background: linear-gradient(-45deg, #86E3CE, #D0E6A5, #FFDD94, #FA897B, #CCABD8);
            background-size: 400% 400%;
            animation: gradient 5s ease infinite;
            height: fit-content;
        }

        .product-image {
            height: 225px;
        }
    </style>
</head>

<body>
    <!-- header -->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validate and process the form data
        $productName = $_POST['product_name'];
        $productPrice = $_POST['product_price'];
        $productDescription = $_POST['product_description'];
        $productImage = $_FILES['product_image']['name']; // Get the uploaded file name

        // Validate the form data (add your own validation logic here)
        if (empty($productName) || empty($productPrice) || empty($productDescription) || empty($productImage)) {
            echo "<div class='error'>Please fill in all the fields.</div>";
        } else {
            // Save the product to the database (or perform any other desired action)
            // Add your own database connection and insertion logic here

            // Move the uploaded image to a directory
            $targetDirectory = "uploads/";
            $targetFilePath = $targetDirectory . basename($_FILES["product_image"]["name"]);
            move_uploaded_file($_FILES["product_image"]["tmp_name"], $targetFilePath);

            // Display success message
            echo "<div class='message'>Product added successfully!</div>";
        }
    }
    ?>
    <!-- header ends -->

    <!-- Product Listing Form -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="form-container">
                        <h2>Add a New Product</h2>
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="product_name">Product Name:</label>
                                <input type="text" class="form-control" name="product_name" id="product_name" required>
                            </div>
                            <div class="form-group">
                                <label for="product_price">Product Price:</label>
                                <input type="number" class="form-control" name="product_price" id="product_price" required>
                            </div>
                            <div class="form-group">
                                <label for="product_description">Product Description:</label>
                                <textarea class="form-control" name="product_description" id="product_description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="product_image">Product Image:</label>
                                <input type="file" class="form-control-file" name="product_image" id="product_image" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    include('includes/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>
