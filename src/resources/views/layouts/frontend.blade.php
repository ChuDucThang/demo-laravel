<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ================= Favicon ================== -->
    <link rel="icon" href="{{url('/')}}img/frontend.ico'"  />
    <title>Nhang Bai Hai Phong</title>

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
                <li><a href="./index.html">TRANG CHU</a></li>
                <li><a href="#">SAN PHAM</a></li>
                <li><a href="#">TIN TUC</a></li>
                <li><a href="#">LIEN HE</a></li>
                <li class="dropdown"><a href="#">THONG TIN</a>
                    <ul class="dropdown__menu">
                        <li><a href="./categories-grid.html">SAN PHAM MOI</a></li>
                        <li><a href="./categories-list.html">TIN TUC MOI</a></li>
                        <li><a href="./single-post.html">DOWJ KHUYEN MAI MOI</a></li>
                        <li><a href="./signin.html">Sign In</a></li>
                        <li><a href="./404.html">404</a></li>
                        <li><a href="./typography.html">Typography</a></li>
                    </ul>
                </li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="humberger__menu__about">
            <div class="humberger__menu__title sidebar__item__title">
                <h6>About me</h6>
            </div>
            <img src="img/humberger/humberger-about.jpg" alt="">
            <h6>Hi every one! I,m Lena Mollein.</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
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
                <h6>Subscribe</h6>
            </div>
            <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
            <form action="#">
                <input type="text" class="email-input" placeholder="Your email">
                <label for="agree-check">
                    I agree to the terms & conditions
                    <input type="checkbox" id="agree-check">
                    <span class="checkmark"></span>
                </label>
                <button type="submit" class="site-btn">Subscribe</button>
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
                                <li class="active"><a href="./index.html">TRANG CHU</a></li>
                                <li><a href="#">SAN PHAM</a>
                                    <div class="header__megamenu__wrapper">
                                        <div class="header__megamenu">
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-1.jpg">
                                                    <div class="label">LOAI 1</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">San pham huong cao cap</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-1.jpg">
                                                    <div class="label">LOAI 2</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">San pham huong cao cap</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-1.jpg">
                                                    <div class="label">LOAI 3</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">San pham huong cao cap</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-1.jpg">
                                                    <div class="label">LOAI 4</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">San pham huong cao cap</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-1.jpg">
                                                    <div class="label">LOAI 5</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">San pham huong cao cap</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">TIN TUC</a></li>
                                <li><a href="#">LIEN HE</a></li>
                                <li class="dropdown"><a href="#">THONG TIN</a>
                                    <ul class="dropdown__menu">
                                        <li><a href="./categories-grid.html">DANH SACH SAN PHAM</a></li>
                                        <li><a href="./categories-list.html">DANH SACH TIN TUC</a></li>
                                        <li><a href="./single-post.html">CHUONG TRINH SALE</a></li>
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
                        <a href="./signin.html" class="primary-btn">Subscribe</a>
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
                        <div class="col-lg-6 p-0">
                            <div class="hero__inside__item hero__inside__item--wide set-bg"
                                data-setbg="img/hero/hero-1.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h4>Vegan White Peach Mug Cobbler With CardamomVegan<br /> White Peach Mug
                                            Cobbler With Cardamom</h4>
                                        <ul class="widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6  p-0">
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="img/hero/hero-2.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>How to Make a Milkshake With Any <br />Ice Cream, Any Toppings...</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="img/hero/hero-2.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Vintage Copper Preserve Pan with <br />Brass Handles, Mid 19th Century</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6  p-0">
                            <div class="hero__inside__item set-bg" data-setbg="img/hero/hero-4.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Marinated Lentil Salad with Zucch <br />ini and Tomatoes</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="hero__inside__item hero__inside__item--wide set-bg"
                                data-setbg="img/hero/hero-1.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h4>Vegan White Peach Mug Cobbler With CardamomVegan<br /> White Peach Mug
                                            Cobbler With Cardamom</h4>
                                        <ul class="widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-0">
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="img/hero/hero-2.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>How to Make a Milkshake With Any <br />Ice Cream, Any Toppings...</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="img/hero/hero-2.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Vintage Copper Preserve Pan with <br />Brass Handles, Mid 19th Century</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 p-0">
                            <div class="hero__inside__item set-bg" data-setbg="img/hero/hero-2.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Marinated Lentil Salad with Zucch <br />ini and Tomatoes</h5>
                                    </div>
                                </div>
                            </div>
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
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-4.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-4.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-4.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-4.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-4.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-4.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-4.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/hero-4.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="text-center">
              <a href="#" class="primary-btn">Read more</a>
            </div>
        </div>
        <div class="categories__post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="categories__post__item categories__post__item--large">
                            <div class="categories__post__item__pic set-bg"
                                data-setbg="img/categories/hero-4.jpg">
                                <div class="post__meta">
                                    <h4>08</h4>
                                    <span>Aug</span>
                                </div>
                            </div>
                            <div class="categories__post__item__text">
                                <ul class="post__label--large">
                                    <li>Vegan</li>
                                    <li>Desserts</li>
                                </ul>
                                <h3><a href="#">The Absolute Best Way to Cook Steak Perfectly, According to Wayyy Too
                                        Many Tests</a></h3>
                                <ul class="post__widget">
                                    <li>by <span>Admin</span></li>
                                    <li>3 min read</li>
                                    <li>20 Comment</li>
                                </ul>
                                <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    excepteur sint ...</p>
                                <a href="#" class="primary-btn">Read more</a>
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
                                <div class="sidebar__item__title">
                                    <h6>About me</h6>
                                </div>
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
                            <div class="sidebar__subscribe__item">
                                <div class="sidebar__item__title">
                                    <h6>Subscribe</h6>
                                </div>
                                <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                                <form action="#">
                                    <input type="text" class="email-input" placeholder="Your email">
                                    <label for="s-agree-check">
                                        I agree to the terms & conditions
                                        <input type="checkbox" id="s-agree-check">
                                        <span class="checkmark"></span>
                                    </label>
                                    <button type="submit" class="site-btn">Subscribe</button>
                                </form>
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
                        <h5>@nhangbaihaiphong</h5>
                        <span>23,7k follower</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.jpg"></div>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut<br /> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                            commodo viverra<br /> maecenas accumsan lacus vel facilisis. </p>
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