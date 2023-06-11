<?php
$con=mysqli_connect("localhost","root","","crochetsite");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
