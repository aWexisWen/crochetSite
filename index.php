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

    .product-image {
        height: 150px;
    }
</style>

<body style="margin-bottom:200px">
    <!--Header-->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>
    <!--Header ends-->
    <div id="content">
        <div id="" class="">
            <div class="container" style="padding-top:150px">
                <div class="mx-auto p-4 text-white" id="banner_content" style="border-radius: 0.5rem;">
                    <h1>We Sell All Things Crochet</h1>
                    <p>Shop Till You Drop In Our Crochet Marketplace</p>
                    <a href="products.php" class="btn btn-warning btn-lg text-white">Shop Now</a>

                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-4 h3">
        Crochets
    </div>
    <!--menu highlights start-->
    <div class="container pt-3" style="align-content: center;">
        <div class="row text-center">
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#crochetgoods">
                    <img src="https://careerilluminate.com/wp-content/uploads/2020/02/knitting-1614283_1920-1024x683.jpg" class="img-fluid product-image" alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        Crochet Goods
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3 ">
                <a href="products.php#crochetitems">
                    <img src="https://img.ehowcdn.com/375/cme-data/getty%2Fc05664dcd61f4e1b95ef997a8aa946a4.jpg" class="img-fluid zoom product-image" alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        Crochet Items
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#classes">
                    <img src="https://s3.amazonaws.com/coursesity-blog/2021/08/Crocheting_classes.png" class="img-fluid product-image" alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        Crocheting Classes
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--menu highlights end-->
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
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>

<?php if (isset($_GET['errorl'])) {
    $z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>

</html>