<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./../css/lienhe-mobile.css" media="(max-width: 700px)" />

    <link rel="stylesheet" href="./../css/lienhe-tablet.css" media="(min-width: 701px) and (max-width: 1024px)" />

    <link rel="stylesheet" href="./../css/lienhe.css" media="(min-width: 1025px)" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
    <header>
        <div class="header_top">
            <div style="cursor: pointer;" onclick="window.location.href='./Home_page.php'">
                <h1>TRAVELS</h1>
            </div>
            <div>
                <input type="search" name="" id="searchInput" placeholder="" /><i
                    class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="header-menubar">
                <ul>
                    <li>
                        <a href="./Home_page.php">Trang chủ </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropbtn" href="#">Bạn muốn đi đâu<i class="fa-solid fa-chevron-up"></i></a>
                        <div class="dropdown-content">
                            <a href="./banahills.php">Bà Nà Hills</a>
                            <a href="./bandaosontra.php">Bán đảo Sơn Trà</a>
                            <a href="./nguhanhson.php">Ngũ Hành Sơn</a>
                            <a href="./nuithantai.php">Núi thần tài</a>
                            <a href="./hoian.php">Hội An</a>
                        </div>
                    </li>
                    <li>
                        <a href="./../html/gioithieu.php">Giới thiệu </a>
                    </li>
                    <li>
                        <a href="./../html/blog.php">Blog </a>
                    </li>
                    <li>
                        <a href="./../html/lienhe.php">Liên hệ </a>
                    </li>
                    <li>
                        <a href="gio_hang.php">Giỏ hàng</a>
                    </li>
                </ul>
            </div>

            <a href="./login-form.php" id="dangnhap">Đăng nhập</a>
        </div>
    </header>
    <header class="headermobile">
        <ul>
            <li><i id="openmenu" class="fa-solid fa-bars"></i></li>
            <li>
                <h2>TRAVELS</h2>
            </li>
            <li><a href="./login-form.php" id="dangnhap">Đăng nhập</a></li>
        </ul>
        <div class="menu">
            <div class="menutop">
                <h1>Danh mục</h1>
                <i id="closemenu" class="fa-solid fa-xmark"></i>
            </div>
            <div class="menubot">
                <div><a href="./Home_page.php">Trang chủ</a></div>
                <div class="banmuondidau">
                    <a href="#!">Bạn muốn đi đâu</a>
                    <div><a href="./banahills.php">Bà Nà Hills</a></div>
                    <div><a href="./bandaosontra.php">Bán Đảo Sơn Trà</a></div>
                    <div><a href="./nguhanhson.php">Ngũ Hành Sơn</a></div>
                    <div><a href="./nuithantai.php">Núi Thần Tài</a></div>
                    <div><a href="./hoian.php">Hội An</a></div>
                </div>
                <div><a href="./gioithieu.php">Giới thiệu</a></div>
                <div><a href="./blog.php">Blog</a></div>
                <div><a href="./lienhe.php">Liên hệ</a></div>
            </div>
        </div>
    </header>
    <div class="body">
        <div class="left">
            <div class="thongtin">
                <h2>Thông tin liên hệ</h2>
                <i class="fa-solid fa-location-dot"></i>
                <i class="fa-regular fa-calendar-days"></i>
                <i class="fa-solid fa-phone"></i>
                <i class="fa-regular fa-envelope"></i>
                <p>Địa chỉ</p>
                <p>Thời gian làm việc</p>
                <p>Điện thoại</p>
                <p>Email</p>
                <span>
                    Số 450 Đường Trần Đại Nghĩa, <br />Điện Ngọc,Ngũ Hành Sơn,Đà <br />
                    Nẵng 550000,Việt Nam
                </span>
                <span>Thứ 2 đến Chủ nhật</span>
                <span>0879636334</span>
                <span>nguyen@vku.udn.vn</span>
                <h2>Gửi thắc mắc cho chúng tôi</h2>
                <input type="text" name="" id="" placeholder="Tên của bạn" />
                <input type="text" name="" id="" placeholder="Email của bạn" />
                <input type="text" name="" id="" placeholder="Số điện thoại" />
                <textarea name="" id="" placeholder="Nội dung"></textarea>
                <a href="">Gửi cho chúng tôi</a>
            </div>
        </div>
        <div class="right">
            <img src="./../img/Screenshot (41).png" alt="" />
        </div>
    </div>
    <footer class="footer">

        <div class="row">
            <!-- column1 -->
            <div class="column">
                <h3>TRAVELS</h3>
                <ul class="list">
                    <li>
                        <strong>Location:</strong><span>470 Đ. Trần Đại Nghĩa Ngũ Hành Sơn Đà Nẵng,Việt Nam</span>
                    </li>
                    <li>
                        <strong>Email:</strong><span>nguyenphk.23itb@vku.udn.vn</span>
                    </li>
                    <li>
                        <strong>Phone:</strong><span>0879636334</span>
                    </li>
                    <li>
                        <h3>Kết nối với chúng tôi</h3>
                        <div class="social">
                            <ul>
                                <li style="--clr:#ff0050;">
                                    <a href="#">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                </li>
                                <li style="--clr:#1877F2">
                                    <a href="#!">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li style="--clr: #E4405F">
                                    <a href="#!">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li style="--clr:#333333">
                                    <a href="#!">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="column">
                <!-- column2 -->
                <h3 class="tittle">Về chúng tôi</h3>
                <ul class="list">
                    <li><a href="#!"><i class="fa-solid fa-angle-right"></i>Sản phẩm nổi bật</a></li>
                    <li><a href="#!"><i class="fa-solid fa-angle-right"></i>Sản phẩm khuyến mãi</a></li>
                    <li><a href="#!"><i class="fa-solid fa-angle-right"></i>Tất cả sản phẩm</a></li>
                </ul>
            </div>
            <!-- column3 -->
            <div class="column">
                <h3 class="tittle">Chính sách dịch vụ</h3>
                <ul class="list">
                    <li><a href="#!"><i class="fa-solid fa-angle-right"></i>Trang chủ </a></li>
                    <li><a href="#!"><i class="fa-solid fa-angle-right"></i>Bạn muốn đi đâu</a></li>
                    <li><a href="#!"><i class="fa-solid fa-angle-right"></i>Giới thiệu</a></li>
                    <li><a href="#!"><i class="fa-solid fa-angle-right"></i>Blogs</a></li>
                    <li><a href=""><i class="fa-solid fa-angle-right"></i>Liên hệ</a></li>
                    <li><a href=""><i class="fa-solid fa-angle-right"></i>Khách sạn</a></li>
                </ul>
            </div>

        </div>
        </div>
    </footer>
    <script src="./../js/lienhe.js"></script>
</body>

</html>