<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['username'])) {
    header('location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect checkout form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $paymentMethod = $_POST['payment_method'];

    // Retrieve the logged-in user's ID (assuming they're logged in) from the session or via your authentication process
    $userId = $_SESSION['user_id']; // Get the user's ID from the session

    // Insert checkout details along with the user's ID into the checkout table
    $sql = "INSERT INTO checkout (user_id, name, address, email, phone, payment_method) 
            VALUES ('$userId', '$name', '$address', '$email', '$phone', '$paymentMethod')";
    // Execute the SQL statement to insert the checkout details into the database
    $result = mysqli_query($con, $sql);

    if ($result) {
        // If the insertion was successful, redirect or display a success message
        // For example:
        header('location: checkout_success.php'); // Redirect to a success page
    } else {
        // If there was an error, handle it accordingly
        // For example:
        echo "Error: " . mysqli_error($con); // Display the MySQL error message
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout | Hooked</title>
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

        textarea {
            resize: none;
        }
    </style>
</head>

<body>
    <?php include 'includes/header_menu.php'; ?>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="mb-0">Checkout</h4>
                    </div>
                    <div class="card-body">
                        <form action="process_payment.php" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" id="address" name="address" required cols="30" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="payment_method">Payment Method</label>
                                <select class="form-control" id="payment_method" name="payment_method" required>
                                    <option value="paypal">PayPal</option>
                                    <option value="stripe">Stripe</option>
                                    <!-- Add more payment methods as needed -->
                                </select>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Place Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php' ?>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>
