<!-------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="aStar Fashion Template Project" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        rel="stylesheet"
        type="text/css"
        href="styles/bootstrap-4.1.3/bootstrap.css"
    />
    <link
        href="plugins/font-awesome-4.7.0/css/font-awesome.min.css"
        rel="stylesheet"
        type="text/css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="plugins/OwlCarousel2-2.2.1/owl.carousel.css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="plugins/OwlCarousel2-2.2.1/animate.css"
    />
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
    <link rel="stylesheet" type="text/css" href="styles/responsive.css" />
</head>
<body>
<?php
session_start();
require_once 'connect.php';
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $query = "SELECT * FROM kh WHERE email = '$email'";
    $array_kh = mysqli_query($connect, $query);
    $kh = mysqli_fetch_array($array_kh);
}

$query = 'SELECT * FROM danh_muc';
$array_danh_muc = mysqli_query($connect, $query);
$query = 'SELECT * FROM sp';
if(isset($_GET['ma_danh_muc'])){
    $ma_danh_muc = $_GET['ma_danh_muc'];
    $query = "SELECT * FROM sp JOIN danh_muc ON sp.danh_muc = danh_muc.ma_danh_muc WHERE sp.danh_muc = $ma_danh_muc ";
}
$array_san_pham = mysqli_query($connect, $query);
?>
<div class="super_container">
    <!-- Header -->
    <header class="header">
        <div
            class="header_content d-flex flex-row align-items-center justify-content-start"
        >
            <!-- Hamburger -->
            <div class="hamburger menu_mm">
                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="header_logo">
                <a href="index.php"
                ><div>HUST<span>LIBRARY</span></div></a
                >
            </div>
            <!-- Header Extra -->
            <div
                class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start"
            >
                <!-- Cart -->
                <div
                    class="cart d-flex flex-row align-items-center justify-content-start"
                >
                    <div class="cart_icon">
                        <a href="view_gio_hang.php">
                            <img src="images/bag.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div
        class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400"
    >
        <div class="menu_close_container">
            <div class="menu_close">
                <div></div>
                <div></div>
            </div>
        </div>
        <div
            class="menu_top d-flex flex-row align-items-center justify-content-start"
        ></div>
        <div class="menu_search">
            <form action="#" class="header_search_form menu_mm">
                <input
                    type="search"
                    class="search_input menu_mm"
                    placeholder="Search"
                    required="required"
                />
                <button
                    class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm"
                >
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="index.php">home</a></li>
            </ul>
        </nav>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Logo -->
        <div class="sidebar_logo">
            <a href="index.php"
            ><div>HUST <span>library</span></div></a
            >
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar_nav">
            <ul>
                <li>
                    <a href="index.php"
                    >home<i class="fa fa-angle-right" aria-hidden="true"></i
                        ></a>
                </li>
                <?php foreach($array_danh_muc as $danh_muc):?>
                    <li>
                        <a
                            href="index.php?ma_danh_muc=<?php echo $danh_muc['ma_danh_muc'];?>"
                        ><?php echo $danh_muc['ten_danh_muc'];?><i
                                class="fa fa-angle-right"
                                aria-hidden="true"
                            ></i
                            ></a>
                    </li>
                <?php endforeach;?>
            </ul>
        </nav>
        <!-- Search -->
        <div class="search">
            <form action="#" class="search_form" id="sidebar_search_form">
                <input
                    type="text"
                    class="search_input"
                    placeholder="Search"
                    required="required"
                />
                <button class="search_button">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- Cart -->
        <div
            class="cart d-flex flex-row align-items-center justify-content-start"
        >
            <div class="cart_icon">
                <a href="view_gio_hang.php">
                    <img src="images/bag.png" alt="" />
                    <div class="cart_num">2</div>
                </a>
            </div>
            <div class="cart_text">Cart</div>
        </div>
    </div>
    <!-- Home -->

    <div class="home">
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                <!-- Slide -->
                <div class="owl-item">
                    <div
                        class="background_image"
                        style="background-image: url(images/banner1.jpg);"
                    ></div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div
                        class="background_image"
                        style="background-image: url(images/banner2.jpg);"
                    ></div>
                </div>
                <!-- Slide -->
                <div class="owl-item">
                    <div
                        class="background_image"
                        style="background-image: url(images/banner3.jpg);"
                    ></div>
                </div>
            </div>
            <!-- Home Slider Navigation -->
            <div class="home_slider_nav home_slider_prev trans_200">
                <div
                    class="d-flex flex-column align-items-center justify-content-center"
                >
                    <img src="images/prev.png" alt="" />
                </div>
            </div>
            <div class="home_slider_nav home_slider_next trans_200">
                <div
                    class="d-flex flex-column align-items-center justify-content-center"
                >
                    <img src="images/next.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Categories -->

    <div class="categories">
        <div class="section_container">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="categories_list_container">
                            <ul
                                class="categories_list d-flex flex-row align-items-center justify-content-start"
                            >
                                <!-- Buttons -->
                                <?php
                                if(isset($_SESSION['email'])){
                                    ?>
                                    <li>
                                        <a href=""><?php echo $kh['ten_kh']?></a>
                                    </li>
                                    <li><a href="view_gio_hang.php">Cart</a></li>
                                    <li><a href="process_logout.php">Logout</a></li>
                                    <?php
                                }else{
                                    ?>
                                    <li><a href="view_login.php">Login</a></li>
                                    <li><a href="view_sign_up.php">Sign up</a></li>
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
    <!-- Products -->
    <div class="products">
        <div class="section_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php
                        if(isset($_SESSION['gio_hang']) && !empty($_SESSION['gio_hang'])) {
                            $array_gio_hang = $_SESSION['gio_hang'];
                            $tong_tien = 0;
                            foreach($array_gio_hang as $san_pham){
                                $tong_tien += $san_pham['gia'] * $san_pham['so_luong'];
                            }

                            $ma_kh = $_SESSION['ma_kh'];
                            $sql = "SELECT * FROM kh WHERE ma_kh = $ma_kh";
                            $array_kh = mysqli_query($connect, $sql);
                            $kh = mysqli_fetch_array($array_kh);

                            $thoi_gian_mua = date("m-d-Y");
                            $ngay_tra_sach = date('m-d-Y', strtotime($thoi_gian_mua. ' + 7 days'));
                            ?>

                            <table class="table">
                                <tr>
                                    <td>T??n s??ch</td>
                                    <td>???nh </td>
                                    <td>Ng??y m?????n s??ch</td>
                                    <td>Ng??y tr??? s??ch</td>
                                </tr>
                                <?php foreach($array_gio_hang as $ma_san_pham => $san_pham):?>
                                    <tr>
                                        <td>
                                            <?php echo $san_pham['ten_sp'];?>
                                        </td>
                                        <td>
                                            <img src="../admin/modules/img/<?php echo $san_pham['img'];?>" width='100px' height='100px'>
                                        </td>
                                        <td><?php echo $thoi_gian_mua;?></td>
                                        <td><?php echo $ngay_tra_sach;?></td>
                                    </tr>
                                <?php endforeach;?>
                            </table>
                            <?php
                        }
                        ?>

                        <form action="process_dat_hang.php" method="post">
                            <table class="table">
                                <tr>
                                    <td><button class="btn btn-light">M?????n s??ch</button></td>
                                    <td><button class="btn btn-light"><a style="color: black" href="process_xoa_gio_hang.php">X??a</a></button></td>
                                    <td><button class="btn btn-light"><a style="color: black" href="index.php">Ti???p t???c xem s??ch</a></button> </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.3/popper.js"></script>
<script src="styles/bootstrap-4.1.3/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

