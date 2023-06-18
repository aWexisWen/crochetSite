<!-- Navigation bar start -->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color: rgba(0, 0, 0, 0.5)">
    <div class="container">
        <div class="d-flex align-items-center">
            <a href="index.php" class="navbar-brand mx-auto" style="font-family: 'Delius Swash Caps';">HOOKED</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
                        Products
                    </a>
                    <div class="dropdown-menu" style="text-align: left;">
                        <a href="products.php#crochetgoods" class="dropdown-item">Crochet Goods</a>
                        <a href="products.php#crochetitems" class="dropdown-item">Crochet Items</a>
                        <a href="products.php#classes" class="dropdown-item">Crocheting Classes</a>
                    </div>
                </li>
                <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['username'])) { ?>
                        <a href="forum.php" class="nav-link">Forum</a>
                    <?php } ?>
                </li>
                <?php if (isset($_SESSION['username'])) { ?>
                    <?php if ($_SESSION['user_type'] == 'seller') { ?>
                        <li class="nav-item">
                            <a href="addproducts.php" class="nav-link">Add Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seller_dashboard.php" data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['username'] ?>"><i class="fa fa-user-circle"></i></a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a href="cart.php" class="nav-link">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customer_dashboard.php" data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['username'] ?>"><i class="fa fa-user-circle"></i></a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i>Logout</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="#signup" class="nav-link" data-toggle="modal"><i class="fa fa-user"></i>Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in"></i>Login</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation bar end -->
<!--Login trigger Modal-->
<div class="modal fade" id="login">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="login_script.php" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="username" class="form-control" name="lusername" placeholder="Enter username" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="lpassword" placeholder="Password" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label for="checkbox" class="form-check-label">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-block" name="Submit">Login</button>
                </form>
                <a href="http://">forgot password ?</a>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">Don't have an account yet?<a href="#signup" data-toggle="modal" data-dismiss="modal">Sign up here</a></p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Login trigger Model ends-->
<!--Signup model start-->
<div class="modal fade" id="signup">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">
            <div class="modal-header">
                <h5 class="modal-title">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="signup_script.php" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="username" class="form-control" name="username" placeholder="Enter username" required>
                        <?php if (isset($_GET['error'])) {
                            echo "<span class='text-danger'>" . $_GET['error'] . "</span>";
                        }  ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="validation1">First Name</label>
                            <input type="text" class="form-control" id="validation1" name="firstName" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="validation2">Last Name</label>
                            <input type="text" class="form-control" id="validation2" name="lastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user-type">Sign up as:</label>
                        <select class="form-control" id="user-type" name="userType" required>
                            <option value="customer">Customer</option>
                            <option value="seller">Seller</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" required>
                        <label for="checkbox" class="form-check-label">Agree to terms and conditions</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="Submit">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">Already have an account?<a href="#login" data-toggle="modal" data-dismiss="modal">Login here</a></p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Signup trigger model ends-->