<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Car rental review</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <h2>Car Rental <em>Review</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Trang chủ
                      <span class="sr-only">(current)</span>
                    </a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="fleet.php">Cho thuê</a></li>
                        <li class="nav-item"><a class="nav-link" href="offers.php">Gía xe ô tô</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Thêm</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="blog.php">Bài viết</a>
                                <a class="dropdown-item" href="team.php">Đội phát triển</a>
                                <a class="dropdown-item" href="testimonials.php">Thử nghiệm</a>
                                <a class="dropdown-item" href="terms.php">Giấy phép</a>
                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="about-us.php">Thông tin</a></li>

                        <li class="nav-item"><a class="nav-link" href="contact.php">Liên hệ </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Tìm ô tô của bạn ngay!</h4>
                    <h2>Uy tín, chất lượng và giá rẻ </h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Tìm ô tô của bạn ngay!</h4>
                    <h2>Siêu nhanh và siêu bền</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Tìm ô tô của bạn ngay!</h4>
                    <h2>Đầy đủ giấy tờ xe</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Giá xe</h2>
                        <a href="offers.php">Hiển thị thêm<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- kết nối -->
                <?php include("index2.php");?> 
                </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
        <?php include("aboutus.php");?> 
        </div>
    </div>

    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Bài đăng mới nhất</h2>
                        <a href="blog.php">Đọc thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <?php include("blognew.php");?> 

            </div>
        </div>
    </div>

    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Cảm nhận khách hàng</h2>

                        <a href="testimonials.php">Xem thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class=" owl-clients owl-carousel text-center">
                        <?php include("testimonialslist3.php") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <footer class="container-fluid bg-grey py-5">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 ">
                    <div class="logo-part">
                        <div class=" logo-footer">
                        <a class="navbar-brand" href="index.php">
                            Car Rental <em>Review</em>
                        </a>
                        </div>  
                        <p><b>Địa chỉ</b> </p>
                        <p>56, Lê Văn Hiến, Phường Đức Thắng, Thành phố Hà Nội</p>
                    </div>
                    </div>
                    <div class="col-md-6 px-4">
                    <h6> Về chúng tôi</h6>
                    <p>Bạn có thể xem thêm thông tin về chúng tôi tại đây</p>
                    <a href="#" class="btn-footer"> Liên hệ </a><br>
                    <a href="#" class="btn-footer"> Thông tin</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 px-4">
                    <h6> Help us</h6>
                    <div class="row ">
                        <div class="col-md-6">
                            <ul>
                                <li> <a href="#"> Home</a> </li>
                                <li> <a href="#"> About</a> </li>
                                <li> <a href="#"> Service</a> </li>
                                <li> <a href="#"> Team</a> </li>
                                <li> <a href="#"> Help</a> </li>
                                <li> <a href="#"> Contact</a> </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 ">
                    <h6> Mạng xã hội</h6>
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                    <form class="form-footer my-3">
                        <input type="text"  placeholder="search here...." name="search">
                        <input type="button" value="Go" >
                    </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
</body>

</html>