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
        background-image: url(https://kaboompics.com/cache/c/3/e/f/b/c3efbe124cec51a3aa55963a4f32b7ce8f2a31c7.jpeg);
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
        <div id="bg" class="">
            <div class="container" style="padding-top:150px">
                <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;">
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
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#watch"> <img src="https://lh4.googleusercontent.com/tGb35PI4Li9vTFZ2hR6rsDFVDLO62s_jKpge6afADfzLzE5ELikuKbGuCYWcVB3TWglS33ybN0CqqFR9UP2nCu-vbWUL34bN2363iVIvzKkyjvYcwXBKyK791ec1KaToXjH6ZbahpXCR1brKlQ" class="img-fluid " alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        Crochet Goods
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3 ">
                <a href="products.php#shirt">
                    <img src="https://img.ehowcdn.com/375/cme-data/getty%2Fc05664dcd61f4e1b95ef997a8aa946a4.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        Crochet Materials
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#shoes">
                    <img src="https://s3.amazonaws.com/coursesity-blog/2021/08/Crocheting_classes.png" class="img-fluid   " alt="" style="border-radius:0.5rem">
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