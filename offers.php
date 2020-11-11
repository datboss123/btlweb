<!DOCTYPE html>
<!-- <?php
    session_start();//Khai báo sử dụng session
        //include("datatable_list.php");
        //include("datatable_insert.php");
    ?> -->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>carrental.com</title>

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
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Trang chủ
                      <span class="sr-only">(current)</span>
                    </a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="fleet.php">Cho thuê</a></li>
                        <li class="nav-item active"><a class="nav-link" href="offers.php">Gía xe ô tô</a></li>

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

                        <li class="nav-item"><a class="nav-link" href="contact.php">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Giá xe trong tầm tay bạn</h4>
                        <h2>Giá xe</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                
                <?php
                include("webdataconnect.php");
                $sql = "Select * from product where status ='bán mới'" ;
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="offers.php"><img src="<?php echo $row["linkimage"] ;?>" alt=""></a>
                            <div class="down-content">
                                <div class="wappp">
                                    <a href=" ">
                                        <h4><?php echo $row["name"]; ?></h4>
                                    </a>
                                    <h6><small>Gía từ :</small><?php echo $row["price"];?><small>/Khuyến mãi</small></h6>
                                    <p><?php echo $row["description"];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }   
                    } ?>
                <div class="col-md-12">
                    <ul class="pages">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <form action="#" id="contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Pick-up location" required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Return location" required="">
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Return date/time" required="">
                                    </fieldset>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter full name" required="">

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Enter email address" required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Enter phone" required="">
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
</body>

</html>