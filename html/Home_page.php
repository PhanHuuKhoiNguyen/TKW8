<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="./../css/homepage-mobile.css" media="(max-width: 700px)" />

    <link rel="stylesheet" href="./../css/homepage-tablet.css" media="(min-width: 701px) and (max-width: 1024px)" />

    <link rel="stylesheet" href="./../css/style.css" media="(min-width: 1025px)" />

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
                        <a href="./gio_hang.php">Giỏ hàng</a>
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
    <!-- <div class="booking">
        <form action="./../controller/booktour.php" method="post" id="booktour">
            <ul>
                <li>
                    <input type="text" name="" id="">
                    <input type="number" name="" id="">
                </li>
                <li>
                    <input type="number" name="" id="">
                </li>
                <li><select name="" id="">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select></li>
                <li><input type="text" name="" id=""></li>
                <li><input type="date" name="" id=""></li>
                <li><input type="text" name="" id=""></li>
                <li><textarea name="" id=""></textarea></li>
                <li><input type="submit" value=""> <input type="submit" value=""></li>
            </ul>
        </form>
    </div> -->
    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="./../img/banahill/banahill.jpg" alt="" />
            </div>
            <div class="item">
                <img src="./../img/bandaosontra/mattronmoc.jpg" alt="" />
            </div>
            <div class="item">
                <img src="./../img/chợ hàn/chohanvedem.jpg" alt="" />
            </div>
            <div class="item">
                <img src="./../img/nguhanhson/14618056925_ec897d954f_b.jpg" alt="" />
            </div>
        </div>

        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="search">
            <ul>
                <li><a href="./banahills.php">Bà Nà Hills </a></li>
                <li><a href="./nguhanhson.php">Ngũ Hành Sơn</a></li>
                <li><a href="./nuithantai.php">Núi Thần Tài</a></li>
                <li><a href="./hoian.php">Hội An</a></li>
                <li><a href="./bandaosontra.php">Bán đảo Sơn Trà</a></li>

            </ul>
        </div>

        <span>Trải nghiệm du lịch.</span>
    </div>

    <div class="diemden">
        <h1>Điểm đến ưa thích</h1>
        <div class="scroll-container">
            <ul>
                <li>
                    <a href="./banahills.php"><img src="./../img/banahill/ba-na-1hills.jpg" alt="Bà Nà Hills" /></a>
                    <h2>Bà Nà Hills</h2>
                    <p>12 Tour</p>
                </li>
                <li>
                    <a href="./bandaosontra.php"><img src="./../img/bandaosontra/095907_son-tra-da-nang.jpg"
                            alt="Bán đảo Sơn Trà" /></a>
                    <h2>Bán đảo Sơn Trà</h2>
                    <p>12 Tour</p>
                </li>
                <li>
                    <a href="./nguhanhson.php"><img src="./../img/nguhanhson/Bãi-biển-Non-Nước5.jpg"
                            alt="Ngũ Hành Sơn" /></a>
                    <h2>Ngũ Hành Sơn</h2>
                    <p>12 Tour</p>
                </li>
                <li>
                    <a href="./nuithantai.php"><img src="./../img/Núi thần tài/14934312475544 (1).jpg"
                            alt="Núi Thần Tài" /></a>
                    <h2>Núi Thần Tài</h2>
                    <p>8 Tour</p>
                </li>
                <li>
                    <img src="./../img/Hội An/chua-cau-hoi-an-2.jpg" alt="Hội An" />
                    <h2>Hội An</h2>
                    <p>4 Tour</p>
                </li>
            </ul>
        </div>
    </div>

    <h1>Khám phá các tour hấp dẫn</h1>

    <div class="dichvu">
        <div>
            <img src="./../img/banahill/cau-vang-ba-na-hills.jpg" alt="" />
            <p>Tour ngày tham quan Bà Nà Hills từ Đà Nẵng</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(2,251) 30k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 1,142,900</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/banahill/cauvangbanahills.jpg" alt="" />
            <p>Tour Bà Nà Hills 1 ngày từ Đà Nẵng</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(3,590) 40k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 1,142,900</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/bandaosontra/vhfnsq2dr2d2d94smy67.webp" alt="" />
            <p>Tour ngày tham quan Bán Đảo Sơn Trà từ Đà Nẵng</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(2,251) 30k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 1,142,900</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/bandaosontra/vga6zujzojjapyk2rzyd.webp" alt="" />
            <p>Tour Bán Đảo Sơn Trà 1 ngày từ Đà Nẵng</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(3,590) 40k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 1,142,900</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/Hội An/chua-cau-hoi-an-2.jpg" alt="" />
            <p>Tour ngày tham quan Hội An từ Đà Nẵng</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(2,251) 30k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 1,142,900</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/Hội An/dia-diem-du-lich-hoi-an-1.webp" alt="" />
            <p>Tour Hội An 1 ngày từ Đà Nẵng</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(3,590) 40k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 1,142,900</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/nguhanhson/bbd5fyz0ieyvc30bw9bh (1).webp" alt="" />
            <p>Tour Ngày Tham Quan Ngũ Hành Sơn và Hội An</p>
            <span>Bán chạy</span><span>Hoàn tiền dễ dàng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.3</span> (278) 3K+ Đã được đặt
            </p>
            <p><u>đ</u> 773,591</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/nguhanhson/fqztkesssfgmmd6k2fxu.webp" alt="" />
            <p>Tour Đi Bán Đảo Sơn Trà Ngũ Hành Sơn và Hội An</p>
            <span>Tour riêng</span><span>Xác nhận tức thời</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span> (28) 400+ Đã được đặt
            </p>
            <p><u>đ</u> 1,337,500</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/Núi thần tài/14934312475544 (1).jpg" alt="" />
            <p>Tour ngày tham quan Núi thần tài từ Đà Nẵng</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(2,251) 30k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 1,142,900</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/Núi thần tài/cong-vien-nuoc-nui-than-tai-4.jpg" alt="" />
            <p>Tour Núi thần tài 1 ngày từ Đà Nẵng</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(3,590) 40k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 1,142,900</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/banahill/banahills5.jpg" alt="" />
            <p>Trải nghiệm"Bà Nà By Night"tại Sun World Ba...</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.4</span>(414) 10k+ Đã được đặt
            </p>
            <p><u>đ</u> 840,000</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/banahill/Bana-Hills.jpg" alt="" />
            <p>3D2N Da Nang and Hoi An Tour</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p><i class="fa-solid fa-star"></i><span>5.0</span> 50+ Đã được đặt</p>
            <p><u>đ</u> 4,294,000</p>
            <button class="btn">Mua ngay</button>
        </div>
    </div>

    <div class="gioithieu">
        <h1>Giới thiệu TRAVELS</h1>
        <p>
            Cung cấp các tour chất lượng 4-5 sao ,ấn tượng với nhiều điểm đến Đà
            Nẵng <br />
            Mang đến cho bạn trải nghiệm tuyệt vời .
        </p>
        <img src="./../img/background-removebg-preview.png" alt="" />
        <div class="icon">
            <div class="icon-item">
                <div><i class="fa-solid fa-medal"></i></div>

                <span>Chương trình mới lạ</span>
                <p>
                    Chúng tôi luôn làm mới các chương trình tham quan,điểm đến để mang
                    lại các trải nghiệm đặc biệt cho khách hàng
                </p>
            </div>
            <div class="icon-item">
                <div><i class="fa-solid fa-bullseye"></i></div>
                <span>Cải tiến liên tục</span>
                <p>
                    Chất lượng là ưu tiên hàng đầu của TRAVELS nhằm mang đến ấn tượng
                    tốt đẹp cho bạn
                </p>
            </div>
            <div class="icon-item">
                <div><i class="fa-regular fa-user"></i></div>
                <span>Chuyên gia hàng đầu</span>
                <p>
                    Dẫn tour la các chuyên gia hàng đầu về du lịch với nhiều kiến thức
                    về điểm đến,phục vụ các bạn trong chuyến đi tốt nhất
                </p>
            </div>
        </div>
        <img src="./../img/home_about_banner_1.webp" alt="lloo" class="banner1" />
        <img src="./../img/home_about_banner_2.webp " alt="" class="banner2" />
        <img src="./../img/home_about_banner_3.webp" alt="" class="banner3" />
    </div>
    <div class="info">
        <div class="left">
            <div>
                <span>1000</span>
                <span>CHƯƠNG TRÌNH</span>
            </div>
            <div>
                <span>120</span>
                <span>ĐIỂM ĐẾN</span>
            </div>
            <div>
                <span>12000</span>
                <span>KHÁCH HÀNG</span>
            </div>
        </div>
        <div class="right">
            <h2>Vì sao chọn <span>TRAVELS</span><br />Công ty du lịch hàng đầu!</h2>
            <p>
                Cung cấp các tour du lịch Đà Nẵng chất lượng 4-5 sao, ấn tượng với
                nhiều điểm đến hấp dẫn. Mang đến cho bạn trải nghiệm tuyệt vời. Ngoài
                ra, chúng tôi còn cung cấp các hình thức du lịch cho công ty, doanh
                nghiệp, khách đoàn như: Tour theo chủ đề sự kiện, hội nghị, hội thảo,
                lễ hội, văn hóa, nghỉ dưỡng, du lịch sinh thái, tour trekking,..
            </p>
            <a href="">Xem thêm</a>
        </div>
        <div class="bottom">
            <img src="./../img/home_newsletter_bg.webp" alt="" />
            <h1>
                Đăng ký bản tin <br />
                Để nhận những chương trình du lịch hấp dẫn
            </h1>
            <input type="email" name="" id="email" placeholder="" />
            <a href="">Đăng ký</a>
        </div>
    </div>
    <footer class="footer">
        <div class="row">
            <div class="column">
                <h3>TRAVELS</h3>
                <ul class="list">
                    <li>
                        <strong>Location:</strong><span>470 Đ. Trần Đại Nghĩa <br />
                            Ngũ Hành Sơn Đà Nẵng,Việt Nam</span>
                    </li>
                    <li>
                        <strong>Email:</strong><span>nguyenphk.23itb@vku.udn.vn</span>
                    </li>
                    <li><strong>Phone:</strong><span>0879636334</span></li>
                </ul>
            </div>
            <div class="column">
                <!-- column2 -->
                <h3 class="tittle">Về chúng tôi</h3>
                <ul class="list">
                    <li>
                        <a href="#!">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#!">Blogs</a>
                    </li>
                    <li>
                        <a href="">Liên hệ</a>
                    </li>
                </ul>
            </div>
            <!-- column3 -->
            <div class="column">
                <h3 class="tittle">Chính sách dịch vụ</h3>
                <ul class="list">
                    <li>
                        <a href="#!">Trang chủ </a>
                    </li>
                    <li>
                        <a href="#!">Bạn muốn đi đâu</a>
                    </li>
                    <li>
                        <a href="">Khách sạn</a>
                    </li>
                    <li>
                        <a href="">Booking</a>
                    </li>
                    <li>
                        <a href="">Lịch sử </a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <h3>Kết nối với chúng tôi</h3>
                <div class="social">
                    <ul>
                        <li>
                            <a href="#!">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="./../js/main.js"></script>
</body>

</html>