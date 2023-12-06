<?php
session_start();
include 'includes/header_menu.php'; // Include your header file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and process the form data
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $productDescription = $_POST['product_description'];
    $productImage = $_FILES['product_image']['name'];
    $productType = $_POST['product_type']; // Retrieve product type from the form

    // Validate the form data (you can add more validation as needed)
    if (empty($productName) || empty($productPrice) || empty($productDescription) || empty($productImage) || empty($productType)) {
        echo "<div class='error'>Please fill in all the fields.</div>";
    } else {
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crochetsite";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into the database
        $sql = "INSERT INTO products (name, price, productImage, description, productType) VALUES ('$productName', '$productPrice', '$productImage', '$productDescription', '$productType')";

        if ($conn->query($sql) === TRUE) {
            // Move the uploaded image to a directory
            $targetDirectory = "uploads/";
            $targetFilePath = $targetDirectory . basename($_FILES["product_image"]["name"]);
            move_uploaded_file($_FILES["product_image"]["tmp_name"], $targetFilePath);

            echo "<div class='message'>Product added successfully!</div>";
        } else {
            echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }

        $conn->close();
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

        textarea {
            resize: none; /* Prevents resizing */
        }
    </style>
</head>

<body>
    <!-- Product Listing Form -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-body">
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
                                <textarea class="form-control" name="product_description" id="product_description" required cols="30" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="product_image">Product Image:</label>
                                <input type="file" class="form-control-file" name="product_image" id="product_image" required>
                            </div>
                            <div class="form-group">
                                <label for="product_type">Product Type:</label>
                                <select class="form-control" name="product_type" id="product_type" required>
                                    <option value="">Select Type</option>
                                    <option value="crochetgood">Crochet Good</option>
                                    <option value="crochetitem">Crochet Item</option>
                                    <option value="classes">Classes</option>
                                    <!-- Add other product types as needed -->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('includes/footer.php'); // Include your footer file ?>
    
    <!-- JavaScript and Bootstrap JS libraries -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>
