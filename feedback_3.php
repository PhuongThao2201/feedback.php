<?php
require_once "./connect.php";
$error = [];
if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $image = $_FILES['image']['product'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image = time() . '_' . $image;
    try {
        $conn->begin_transaction();
        $sql = "insert into feedback(content) values('$name')";
        $result = $conn->query($sql);


        $conn->commit();

    } catch (Exception $e) {
        echo $e->getMessage();
        $conn->rollback();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./feedback_3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/JNKKKK/MoreToggles.css@0.2.1/output/moretoggles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header_logo">
                        <a href="index.html">Fashion Shop</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header_menu">
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="#">Women's</a></li>
                            <li><a href="#">Men's</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header_right">
                        <div class="header_right_auth">
                            <a href="#"><button class="btn btn-warning">Register</button></a>
                            <a href="#"><button class="btn btn-warning">LogIn</button></a>
                            <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </header>
    
    <div class="headline picture">
        <img class="pic" src="./images/img_1.jpg" alt="">
    </div>
    <div class="title">
        <div class="description">
             <h2>Wed love to hear what you thought of shop.</h2>
        </div>
        <div class="form">
            <form id="form" method="post">
            <label for="name">UserName:</label> <input type="text" name="username" id="name"><br>
            <label for="email">Email:</label> <input type="email" name="email" id="email"><br>
            <label for="product">Product:</label> <input type="file" id="image" alt="Login"><br>
            </form>
        </div>
        <label for="rating">Đánh giá:</label>
		<div class="star-rating">
            <div class="rating">
            <input type="radio" name="rating" id="star1" value="1">
            <label for="star1"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" id="star2" value="2">
            <label for="star2"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" id="star3" value="3">
            <label for="star3"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" id="star4" value="4">
            <label for="star4"><i class="fa fa-star"></i></label>
            <input type="radio" name="rating" id="star5" value="5">
            <label for="star5"><i class="fa fa-star"></i></label>
            </div>
        </div>
        <label for="review">Nhận xét của bạn:</label>
        <textarea id="review" name="review" rows="6" required></textarea>
        <!-- <button type="submit" name="submit">Gửi đánh giá</button> -->
        <button type="submit" name = "submit" class="btn">SUBMIT</button>
        <section class="footer spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer_about">
                            <div class="footer_logo">
                                <a href="index.html">Fashion Shop<span>.</span></a>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry.</p>
                            <div class="footer_social">
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="footer_widget">
                            <h6>Quick Links</h6>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="footer_widget">
                            <h6>Accounts</h6>
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <div class="footer_widget">
                            <h6>Support</h6>
                            <ul>
                                <li><a href="#">Frequently Asked Questions</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Report a Payment Issue</a></li>
                                <li><a href="#">24/7 Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html