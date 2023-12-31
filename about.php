<?php
require("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hooked | Online Shopping Site for Crochet</title>
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
</style>

<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
  include 'includes/header_menu.php';
  ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="" style="color: brown;">Who Are We ?</h3>
          <hr />
          <img src="images/Logo.png" class="img-fluid d-block rounded mx-auto image-thumbnail">
          <p class="mt-2" style="text-align: justify;">Hooked is a platform that connects crochet enthusiasts and makers of handmade goods, offering a diverse collection of exquisite products and providing courses and tutorials for all skill levels.</p>
          <h3>Marketplace offerings:</h3>
          <ul style="text-align: justify;">
            <li>Diverse collection of handmade crochet goods</li>
            <li>Exquisite products crafted with love and attention to detail</li>
            <li>Courses and tutorials for all skill levels</li>
            <li>Learning center for learning essential stitches and exploring advanced techniques</li>
            <li>Exceptional user experience on an intuitive website</li>
            <li>Vibrant community of like-minded individuals</li>
            <li>Opportunity to discover the magic of crochet and indulge in the beauty of handmade creations.</li>
          </ul>
        </div>
        <div class="col-md-5 mt-3">
          <span class="" style="color: brown;">
            <h1 class="title" style="color: brown;">LIVE SUPPORT</h1>
            <div style="background-color: #F5F5F5; padding: 10px; border-radius: 0.5rem;">
              <h3 style="color: brown;">24 hours | 7 days a week | 365 days a year Live Technical Support</h3>
            </div>
          </span>
          <hr>
          <p style="text-align: justify;">We understand the importance of providing timely assistance to our valued customers.
            That's why we offer round-the-clock live technical support, 365 days a year.
            Our dedicated team of experts is always available to address any queries or concerns you may have.
            At our website, we prioritize customer satisfaction and aim to provide a seamless experience.
            Whether you need help with placing an order, navigating our platform, or have any other inquiries, our friendly support staff is just a click away.
            Rest assured, we are committed to ensuring your satisfaction and making your journey with us as smooth as possible.
            Experience the convenience of our 24/7 live customer support and let us assist you every step of the way.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-5">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Form</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Username</label>
        <input type="username" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Username" name="username">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  </div>
  <!--footer -->
  <?php include 'includes/footer.php' ?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function() {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if (isset($_GET['error'])) {
  $z = $_GET['error'];
  echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
  echo "
<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>
<?php if (isset($_GET['errorl'])) {
  $z = $_GET['errorl'];
  echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
  echo "
<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>

</html>