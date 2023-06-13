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
        background: linear-gradient(45deg, #bdc3c7, #2c3e50);
    }

    .product-image {
        height: 225px;
    }
</style>

<body>
    <!--header -->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>
    <!--header ends -->

    <div class="container" style="margin-top:65px">
        <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>Welcome to Hooked</h1>
            <p>We have a wide range of products for your needs of crochet from bags to toys. There are also crochet materials if you want to do it yourself</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
        <hr />
        <!--menu list-->
        <div class="row text-center" id="crochetgoods">
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="https://i0.wp.com/mirrymascrafts.com/wp-content/uploads/2022/06/IMG-20220624-WA0016.jpg?fit=1280%2C719&ssl=1" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Bag</h6>
                        <h6>Price :RM 150</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(1)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                                <p>
                            <?php
                            }
                        }
                            ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="https://jeaninegabrielle.files.wordpress.com/2021/06/il_794xn.3061715833_iqsq.jpg?w=794" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Toy Bunny</h6>
                        <h6>Price :RM 100</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(2)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="https://jewelsandjones.com/wp-content/uploads/2020/07/Lotus-Stitch-Laptop-Case-Jewels-and-Jones.jpg" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Laptop Sleeve</h6>
                        <h6>Price :RM 130</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(3)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="https://doradoes.co.uk/wp-content/uploads/2021/09/any-time-crochet-cardigan-pattern-tutorial-13.jpg" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Cardigan</h6>
                        <h6>Price :RM 200</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(4)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://cdn-0.knottednest.com/wp-content/uploads/2020/12/IMG_3537-1160x1004.jpg" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Scarf</h6>
                        <h6>Price :RM 90</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(5)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://apicms.thestar.com.my/uploads/images/2022/11/03/1803051.jpg" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Flowers</h6>
                        <h6>Price :RM 150</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(6)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://www.yarnspirations.com/dw/image/v2/BBZD_PRD/on/demandware.static/-/Sites-master-catalog-spinrite/default/dw0b480c69/images/hi-res/RHC0116-029552M-2.jpg?sw=2000&sh=2000&sm=fit&q=60" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Balaclava</h6>
                        <h6>Price :RM 150</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(7)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://easycrochet.com/wp-content/uploads/2020/12/20201223_154323-02-851x1024.jpeg" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Blanket</h6>
                        <h6>Price :RM 150</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(8)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="crochetitems">
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://www.korbond.co.uk/prodimg/dk-yarn.jpg" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Yarn</h6>
                        <h6>Price :RM 3</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(9)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://www.jimmybeanswool.com/secure-html/productExtraImages/60000/64717Large_5e37.jpg" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Crochet Hook</h6>
                        <h6>Price :RM 5</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://irepo.primecp.com/2019/05/410904/How-to-Use-Stitch-Markers-safety-pins-horizontal_Large600_ID-3210740.png?v=3210740" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Stitch Markers</h6>
                        <h6>Price :RM 3</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(7)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://i5.walmartimages.com/asr/2047c283-c165-4c3a-989c-624f490423d3.1a85c3d4db4a5949aa1b74d285c49565.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Measuring Tape</h6>
                        <h6>Price :RM 7</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(8)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="classes">
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://4.bp.blogspot.com/-mCLcnYkbT0c/WQBwQ_7BwPI/AAAAAAAAGCM/w3CNhvITzbgPGo0WTGhmy8hdkqLg1XIlwCEw/s640/14.gif" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Novice Classes</h6>
                        <h6>Price :RM 50</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(9)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://ml70gvfswpfq.i.optimole.com/w:194/h:194/q:mauto/f:avif/https://i0.wp.com/media.giphy.com/media/LkOFq30fWyyxYAX5It/giphy.gif" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Experienced Classes</h6>
                        <h6>Price :RM 70</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://www.knitfreedom.com/wp-content/uploads/2021/11/Single-Crochet-GIF-111321.gif" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Casual Classes</h6>
                        <h6>Price :RM 70</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(11)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://media.tenor.com/TtZ8pZ5bQFEAAAAC/maymayentrata-knitting.gif" alt="" class="img-fluid pb-1 product-image">
                    <div class="figure-caption">
                        <h6>Enthusiastic Community Members</h6>
                        <h6>Price :RM 30</h6>
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(12)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                </p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--menu list ends-->
    <!-- footer-->
    <?php include 'includes/footer.php' ?>
    <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
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