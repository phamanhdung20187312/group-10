
<head>
    <title>Snow's House</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="aStar Fashion Template Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<?php
include("include/open.php");
?>
<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_content d-flex flex-row align-items-center justify-content-start">

            <!-- Hamburger -->
            <div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

            <!-- Logo -->
            <div class="header_logo">
                <a href="#"><div>a<span>star</span></div></a>
            </div>

            <!-- Navigation -->
            <nav class="header_nav">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="index.html">home</a></li>
                    <li><a href="#">woman</a></li>
                    <li><a href="#">man</a></li>
                    <li><a href="#">lookbook</a></li>
                    <li><a href="#">blog</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>

            <!-- Header Extra -->
            <div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

                <!-- Language -->
                <div class="info_languages has_children">
                    <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                    <div class="dropdown_text">english</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                    <!-- Language Dropdown Menu -->
                    <ul>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">french</div>
                            </a></li>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">japanese</div>
                            </a></li>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">russian</div>
                            </a></li>
                        <li><a href="#">
                                <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                <div class="dropdown_text">spanish</div>
                            </a></li>
                    </ul>

                </div>
                <!-- Cart -->
                <div class="cart d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_icon"><a href="cart.html">
                            <img src="images/bag.png" alt="">
                            <div class="cart_num">2</div>
                        </a></div>
                </div>

            </div>

        </div>
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="menu_top d-flex flex-row align-items-center justify-content-start">
        </div>
        <div class="menu_search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="index.html">home</a></li>
                <li class="menu_mm"><a href="#">woman</a></li>
                <li class="menu_mm"><a href="#">man</a></li>
                <li class="menu_mm"><a href="#">lookbook</a></li>
                <li class="menu_mm"><a href="blog.html">blog</a></li>
                <li class="menu_mm"><a href="contact.html">contact</a></li>
            </ul>
        </nav>
        <div class="menu_extra">
            <div class="menu_social">
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Sidebar -->

    <div class="sidebar">

        <!-- Info -->
        <div class="info">
            <div class="info_content d-flex flex-row align-items-center justify-content-start">
            </div>
        </div>

        <!-- Logo -->
        <div class="sidebar_logo">
            <a href="#"><div>a<span>star</span></div></a>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar_nav">
            <ul>
                <li><a href="index.html">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">woman<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">man<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <!-- Search -->
        <div class="search">
            <form action="#" class="search_form" id="sidebar_search_form">
                <input type="text" class="search_input" placeholder="Search" required="required">
                <button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <!-- Cart -->
        <div class="cart d-flex flex-row align-items-center justify-content-start">
            <div class="cart_icon"><a href="cart.html">
                    <img src="images/bag.png" alt="">
                    <div class="cart_num">2</div>
                </a></div>
            <div class="cart_text">bag</div>
            <div class="cart_price">$39.99 (1)</div>
        </div>
    </div>

    <!-- Home -->

    <div class="home">

        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_content_container">
                        <div class="home_content">
                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                <div class="home_discount_num">20</div>
                                <div class="home_discount_text">Discount on the</div>
                            </div>
                            <div class="home_title">New Collection</div>
                            <div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_content_container">
                        <div class="home_content">
                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                <div class="home_discount_num">20</div>
                                <div class="home_discount_text">Discount on the</div>
                            </div>
                            <div class="home_title">New Collection</div>
                            <div class="button button_1 home_button trans_200"><a href="categories.php">Shop NOW!</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_content_container">
                        <div class="home_content">
                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                <div class="home_discount_num">20</div>
                                <div class="home_discount_text">Discount on the</div>
                            </div>
                            <div class="home_title">New Collection</div>
                            <div class="button button_1 home_button trans_200"><a href="categories.php">Shop NOW!</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Home Slider Navigation -->
            <div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/prev.png" alt=""></div></div>
            <div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/next.png" alt=""></div></div>

        </div>
    </div>

    <!-- Categories -->

    <div class="categories">
        <div class="section_container">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="categories_list_container">
                            <ul class="categories_list d-flex flex-row align-items-center justify-content-start">
                                <?php
                                $queryLoai = "select * from danh_muc";
                                $resultLoai = mysqli_query($conn,$queryLoai);
                                while ($rowLoai = mysqli_fetch_array($resultLoai)) {
                                    ?>
                                    <li><a href="?maloai=<?php echo $rowLoai["ma_danh_muc"]; ?>"> <?php echo $rowLoai["ten_danh_muc"]; ?></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

