<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ================= Favicon ================== -->
    <link rel="icon" href="{{url('/')}}/favicon.ico"/>
    <title>Huơng Bài Cao Cấp</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/style.css" type="text/css">
    <style>

    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="./index.html">TRANG CHỦ</a></li>
                <li><a href="#">SẢN PHẨM</a></li>
                <li><a href="#">TIN TỨC</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
                <li class="dropdown"><a href="#">THÔNG TIN</a>
                    <ul class="dropdown__menu">
                        <li><a href="./categories-grid.html">SẢN PHẨM MỚI</a></li>
                        <li><a href="./categories-list.html">TIN TỨC MỚI</a></li>
                        <li><a href="./single-post.html">CHUƠNG TRÌNH KHUYẾN MÃI</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="humberger__menu__about">
            <div class="humberger__menu__title sidebar__item__title">
                <h6>Về chúng tôi</h6>
            </div>
            <img src="img/background.jpg" alt="">
            <h6>Xin chào tất cả mọi nguời !</h6>
            <p>Cảm ơn bạn đã ghé thăm shop của chúng tôi. Hãy tin dùng và lựa chọn sản phẩm của chúng tôi nhé.</p>
            <div class="humberger__menu__about__social sidebar__item__follow__links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-envelope-o"></i></a>
            </div>
        </div>
        <div class="humberger__menu__subscribe">
            <div class="humberger__menu__title sidebar__item__title">
                <h6>Đăng ký</h6>
            </div>
            <p>Đăng ký nhận bản tin của chúng tôi và nhận các cập nhật mới nhất của chúng tôi ngay trong hộp thư đến của bạn.</p>
            <form action="#">
                <input type="text" class="email-input" placeholder="Nhập email của bạn">
                <button type="submit" class="site-btn">Đăng ký</button>
            </form>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                        <div class="header__humberger">
                            <i class="fa fa-bars humberger__open"></i>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-10 order-md-2 order-3">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.html">TRANG CHỦ</a></li>
                                <li><a href="#">SẢN PHẨM</a>
                                    <div class="header__megamenu__wrapper">
                                        <div class="header__megamenu">
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-1.jpg">
                                                    <div class="label">Nhang thẻ</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">Sản phẩm đuợc sử dụng rộng rãi và nhiều nhất</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-2.jpg">
                                                    <div class="label">Nhang bài</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">Nhang sạch - Giá tốt - Chất luợng</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-3.jpg">
                                                    <div class="label">Huơng nén</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">San pham huong cao cap</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-4.jpg">
                                                    <div class="label">Huơng cao cấp</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">San pham huong cao cap</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-5.jpg">
                                                    <div class="label">Nhang sào</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">Hương sào hay còn gọi là “hương cây” có cấu tạo tương tự hương nén nhưng lớn hơn ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">TIN TỨC</a></li>
                                <li><a href="#">LIÊN HỆ</a></li>
                                <li class="dropdown"><a href="#">THÔNG TIN</a>
                                    <ul class="dropdown__menu">
                                        <li><a href="./categories-grid.html">SẢN PHẨM MỚI</a></li>
                                        <li><a href="./categories-list.html">TIN TỨC MỚI</a></li>
                                        <li><a href="./single-post.html">CHUƠNG TRÌNH KHUYẾN MÃI</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                        <div class="header__search">
                            <i class="fa fa-search search-switch"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__btn">
                        <a href="./signin.html" class="primary-btn">HOTLINE: 0982.564.212</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="background-img">
                            <img src="img/background.jpg" style="height: 550px;" alt="Nhang bai cao cap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-1.jpg">
                        <div class="categories__hover__text text-center">
                            <div>
                                <h5>Huơng nén</h5>
                                <p>Sản phẩm cao cấp</p>
                                <p>Giá SP: <b style="color:red">40,000 VND</b></p>
                            </div>
                            <div style="margin-top:20px">
                                <button class="btn btn-outline-primary btn-sm">Chi tiết</button>
                                <button class="btn btn-outline-success btn-sm">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-2.jpg">
                        <div class="categories__hover__text text-center">
                            <div>
                                <h5>Nhang sào</h5>
                                <p>Sản phẩm khuyến mãi</p>
                                <p>Giá SP: <b style="color:red">30,000 VND</b></p>
                            </div>
                            <div style="margin-top:20px">
                                <button class="btn btn-outline-primary btn-sm">Chi tiết</button>
                                <button class="btn btn-outline-success btn-sm">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-3.jpg">
                        <div class="categories__hover__text text-center">
                            <div>
                                <h5>Huơng nén</h5>
                                <p>Sản phẩm khuyến mãi</p>
                                <p>Giá SP: <b style="color:red">25,000 VND</b></p>
                            </div>
                            <div style="margin-top:20px">
                                <button class="btn btn-outline-primary btn-sm">Chi tiết</button>
                                <button class="btn btn-outline-success btn-sm">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-4.jpg">
                        <div class="categories__hover__text text-center">
                            <div>
                                <h5>Sản phẩm cao cấp</h5>
                                <p>Sản phẩm mới</p>
                                <p>Giá SP: <b style="color:red">40,000 VND</b></p>
                            </div>
                            <div style="margin-top:20px">
                                <button class="btn btn-outline-primary btn-sm">Chi tiết</button>
                                <button class="btn btn-outline-success btn-sm">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-5.jpg">
                        <div class="categories__hover__text text-center">
                            <div>
                                <h5>Huơng cao cấp</h5>
                                <p>Sản phẩm mới</p>
                                <p>Giá SP: <b style="color:red">50,000 VND</b></p>
                            </div>
                            <div style="margin-top:20px">
                                <button class="btn btn-outline-primary btn-sm">Chi tiết</button>
                                <button class="btn btn-outline-success btn-sm">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-6.jpg">
                        <div class="categories__hover__text text-center">
                            <div>
                                <h5>Huơng nén</h5>
                                <p>Sản phẩm mới</p>
                                <p>Giá SP: <b style="color:red">40,000 VND</b></p>
                            </div>
                            <div style="margin-top:20px">
                                <button class="btn btn-outline-primary btn-sm">Chi tiết</button>
                                <button class="btn btn-outline-success btn-sm">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-7.jpg">
                        <div class="categories__hover__text text-center">
                            <div>
                                <h5>Nhang bài</h5>
                                <p>Sản phẩm mới</p>
                                <p>Giá SP: <b style="color:red">40,000 VND</b></p>
                            </div>
                            <div style="margin-top:20px">
                                <button class="btn btn-outline-primary btn-sm">Chi tiết</button>
                                <button class="btn btn-outline-success btn-sm">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-3.jpg">
                        <div class="categories__hover__text text-center">
                            <div>
                                <h5>Nhang sào</h5>
                                <p>Sản phẩm khuyến mãi</p>
                                <p>Giá SP: <b style="color:red">20,000 VND</b></p>
                            </div>
                            <div style="margin-top:20px">
                                <button class="btn btn-outline-primary btn-sm">Chi tiết</button>
                                <button class="btn btn-outline-success btn-sm">Mua hàng</button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="text-center">
              <a href="#" class="primary-btn">Xem thêm</a>
            </div>
        </div>
        <div class="categories__post">
            <div class="text-center">
                <h6>About me</h6>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="categories__post__item categories__post__item--large">
                            <div class="categories__post__item__pic set-bg"
                                data-setbg="img/categories/hero-4.jpg">
                                <div class="post__meta">
                                    <h4>08</h4>
                                    <span>Th.08</span>
                                </div>
                            </div>
                            <div class="categories__post__item__text">
                                <ul class="post__label--large">
                                    <li>ADMIN</li>
                                    <li>Desserts</li>
                                </ul>
                                <h3><a href="#">Hương sào hay còn gọi là “hương cây” có cấu tạo tương tự hương nén nhưng lớn hơn. </a></h3>
                                <ul class="post__widget">
                                    <li>by <span>Admin</span></li>
                                    <li>3 min read</li>
                                </ul>
                                <p>Vì kích thước lớn cũng như không phải là sản phẩm hương nhang được sử dụng thường xuyên nên hương sào ít phổ biến. Mỗi thẻ hương sào thường được đóng gói từ 3 đến 5 cây.Hương sào thường được sử dụng vào việc tế lễ các đàn lễ lớn, tạ mộ, ma chay, cúng lễ cần thắp hương thời gian dài, giúp người dùng có thể căn được giờ thay hương. Tùy vào độ dài của cây hương, hương sào có thời gian cháy từ 6/8/12/24 tiếng.</p>
                                <a href="#" class="primary-btn">Xem thêm</a>
                                <div class="post__social">
                                    <span>Share</span>
                                    <a href="#"><i class="fa fa-facebook"></i> <span>82</span></a>
                                    <a href="#"><i class="fa fa-twitter"></i> <span>24</span></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i> <span>08</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar__item">
                            <div class="sidebar__about__item">
                                <img src="img/categories/hero-4.jpg" alt="">
                                <h6>Hi every one! I,m <span>Lena Mollein.</span></h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="primary-btn">Read more</a>
                            </div>
                            <div class="sidebar__follow__item">
                                <div class="sidebar__item__title">
                                    <h6>Follow me</h6>
                                </div>
                                <div class="sidebar__item__follow__links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="footer__instagram">
                <div class="footer__instagram__avatar">
                    <div class="footer__instagram__avatar--pic">
                        <img src="img/footer/ip-1.jpg" alt="">
                    </div>
                    <div class="footer__instagram__avatar--text">
                        <h5>@nhangbaicaocap</h5>
                        <span>23,7k follower</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-2.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-3.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-4.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-5.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-6.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__text">
                        <div class="footer__logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Hãy chuẩn bị những nén hương thơm, những tinh hoa của nghệ thuật truyền thống và </br>thắp lên cho ước nguyện bình an, cho hương thơm lan tỏa khắp không gian nồng ấm bạn nhé ! </p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                    <div class="footer__copyright">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://fb.com" target="_blank">Facebook</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{url('/')}}/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('/')}}/frontend/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/frontend/js/jquery.slicknav.js"></script>
    <script src="{{url('/')}}/frontend/js/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/frontend/js/main.js"></script>
</body>

</html>