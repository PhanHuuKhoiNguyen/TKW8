<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./../css/nguhanhson-mobile.css" media="(max-width: 700px)" />


    <link rel="stylesheet" href="./../css/nguhanhson-tablet.css" media="(min-width: 701px) and (max-width: 1024px)" />

    <link rel="stylesheet" href="./../css/nguhanhson.css" media="(min-width: 1025px)" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="shortcut icon" type="" href="./img/icons8-tourism-20.png" />
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
    <div class="anh">
        <div class="content">
            <p>Ngũ Hành Sơn</p>
            <span class="span1"><i class="fa-sharp fa-solid fa-location-dot"></i> Đà Nẵng, VIETNAM</span>
            <span class="span2">Ngũ Hành Sơn, còn được gọi là Non Nước, là một điểm du lịch nổi tiếng ở Đà Nẵng, Việt
                Nam. Ngũ Hành Sơn...</span>

            <a href=""><u>Xem thêm</u> </a>
            <i id="triangle" class="fa-solid fa-caret-left"></i>
            <span class="span3">Thời gian tuyệt nhất <br> để đến</span>
            <span class="span4">Thời lượng lý tưởng</span>
            <span class="span5">THG 4</span>
            <span class="span6">1 ngày</span>
            <span class="span7">Lễ hội Phật Đản Ngũ Hành Sơn (Vesak)</span>
        </div>
        <div class="list1">

            <div class="item"><img src="./../img/nguhanhson/chua-tam-thai-danh-thang-ngu-hanh-son-da-nang-01.jpg"
                    alt=""></div>
            <div class="item"><img src="./../img/nguhanhson/Hinh-anh-nui-Ngu-Hanh-Son-troi-nhieu-may.jpg" alt=""></div>
            <div class="item"><img
                    src="./../img/nguhanhson/kinh-nghiem-tham-quan-ngu-hanh-son-cho-du-khach-du-lich-da-nang.jpg"
                    alt=""></div>
            <div class="item"><img
                    src="./../img/nguhanhson/tham-quan-chua-linh-ung-non-nuoc-ngu-hanh-son-o-da-nang-h1.jpg  " alt="">
            </div>
            <div class="item"><img src="./../img/nguhanhson/14618056925_ec897d954f_b.jpg" alt=""></div>
        </div>
        <div class="slider">

            <div class="list">
                <div class="item"><img src="./../img/nguhanhson/chua-tam-thai-danh-thang-ngu-hanh-son-da-nang-01.jpg"
                        alt=""></div>
                <div class="item"><img src="./../img/nguhanhson/Hinh-anh-nui-Ngu-Hanh-Son-troi-nhieu-may.jpg" alt="">
                </div>
                <div class="item"><img
                        src="./../img/nguhanhson/kinh-nghiem-tham-quan-ngu-hanh-son-cho-du-khach-du-lich-da-nang.jpg"
                        alt=""></div>
                <div class="item"><img
                        src="./../img/nguhanhson/tham-quan-chua-linh-ung-non-nuoc-ngu-hanh-son-o-da-nang-h1.jpg  "
                        alt=""></div>
                <div class="item"><img src="./../img/nguhanhson/14618056925_ec897d954f_b.jpg" alt=""></div>
            </div>
            <div class="buttons">
                <button class="prev"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <ul class="dots">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="infomation">
            <p>Ngũ Hành Sơn, còn được gọi là Non Nước, là một điểm du lịch nổi tiếng ở Đà Nẵng, Việt Nam. Ngũ Hành Sơn
                nổi tiếng với những ngọn núi đá vôi đẹp mắt và các hang động huyền bí. Điểm đặc biệt của Ngũ Hành Sơn là
                mỗi ngọn núi đại diện cho một nguyên tố trong ngũ hành: Kim, Mộc, Thủy, Hỏa và Thổ.</p>
        </div>
    </div>

    <h1 class="h1">12 Địa điểm du lịch Bà Nà Hills </h1>
    <div class="dichvu">
        <div><img src="./../img/nguhanhson/bbd5fyz0ieyvc30bw9bh (1).webp" alt="">
            <p>Tour Ngày Tham Quan Ngũ Hành Sơn và Hội An</p><span>Bán chạy</span><span>Hoàn tiền dễ dàng</span>
            <p><i class="fa-solid fa-star"></i><span>4.3</span> (278) 3K+ Đã được đặt</p>
            <p><u>đ</u> 773,591</p><button class="btn">Mua ngay</button>
        </div>
        <div><img src="./../img/nguhanhson/fqztkesssfgmmd6k2fxu.webp" alt="">
            <p>Tour Đi Bán Đảo Sơn Trà Ngũ Hành Sơn và Hội An </p><span>Tour riêng</span><span>Xác nhận tức thời</span>
            <p><i class="fa-solid fa-star"></i><span>4.5</span> (28) 400+ Đã được đặt</p>
            <p><u>đ</u> 1,337,500</p><button class="btn">Mua ngay</button>
        </div>
        <div><img src="./../img/nguhanhson/1462862982_lang-nghe-non-nuoc-da-nang-5.jpg" alt="">
            <p>Vé Ngũ Hành Sơn và bảo tàng ký ức điêu khắc Đá...</p><span>Bán chạy</span><span>Hướng dẫn tiếng
                việt</span>
            <p><i class="fa-solid fa-star"></i><span>4.2</span> (339) 1K+ Đã được đặt </p>
            <p><u>đ</u> 2,161,476</p><button class="btn">Mua ngay</button>
        </div>
        <div><img src="./../img/nguhanhson/14618056925_ec897d954f_b.jpg" alt="">
            <p>Tour ngày tham quan Ngũ Hành Sơn</p><span>Bán chạy</span><span>Hoàn tiền dễ dàng</span>
            <p><i class="fa-solid fa-star"></i><span>4.6</span> (192) 2K+ Đã được đặt</p>
            <p><u>đ</u> 437,500</p><button class="btn">Mua ngay</button>
        </div>
        <div><img src="./../img/nguhanhson/Hon Thuy Son_edit (1).jpg" alt="">
            <p>Tour Trek Ngũ Hành Sơn từ Hội An</p><span>Tour riêng</span><span>Xác nhận tức thời</span>
            <p><i class="fa-solid fa-star"></i><span>4.5</span> (1,091) 10K+ Đã được đặt</p>
            <p><u>đ</u> 3,435,357</p><button class="btn">Mua ngay</button>
        </div>
        <div><img src="./../img/nguhanhson/photo-4-1619666214998164457269.webp" alt="">
            <p>Vé tham quan núi Ngũ Hành Sơn Đà nẵng</p><span>Hướng dẫn tiếng việt</span><span></span>
            <p><i class="fa-solid fa-star"></i><span>4.4</span> (457) 4K+ Đã được đặt</p>
            <p><u>đ</u> 950,000</p><button class="btn">Mua ngay</button>
        </div>
        <div><img src="./../img/nguhanhson/Hinh-anh-nui-Ngu-Hanh-Son-troi-nhieu-may.jpg" alt="">
            <p>Tour 2N1Đ Ngũ Hành Sơn Đà Nẵng</p><span>Hoàn tiền dễ dàng</span><span></span>
            <p><i class="fa-solid fa-star"></i><span>4.4</span> (59) 1K Đã được đặt </p>
            <p><u>đ</u> 4,294,000</p><button class="btn">Mua ngay</button>
        </div>
        <div><img src="./../img/nguhanhson/Bãi-biển-Non-Nước5.jpg" alt="">
            <p>Tour tham quan bãi biển Non Nước Ngũ Hành Sơn </p><span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p><i class="fa-solid fa-star"></i><span>4.6</span> (453) Đã được đặt</p>
            <p><u>đ</u> 400,000</p><button class="btn">Mua ngay</button>
        </div>
        <div><img src="./../img/nguhanhson/ngu-hanh-son-da-nang...jpg" alt="">
            <p>Tour ngày tham quan Vọng Giang Đài Ngũ Hành Sơn...</p><span>Tour riêng</span><span>Xác nhận tức
                thời</span>
            <p><i class="fa-solid fa-star"></i><span>4.3</span> 200+ Đã được đặt</p>
            <p><u>đ</u> 1,823,500</p><button class="btn">Mua ngay</button>
        </div>
        <div><img src="./../img/nguhanhson/tham-quan-chua-linh-ung-non-nuoc-ngu-hanh-son-o-da-nang-h1.jpg" alt="">
            <p>Vé tham quan chùa Tam Thai Ngũ Hành Sơn </p><span>Tour riêng</span><span>Hoàn tiền dễ dàng</span>
            <p><i class="fa-solid fa-star"></i><span>4.5</span> 300+ Đã được đặt</p>
            <p><u>đ</u> 1,441,000</p><button class="btn">Mua ngay</button>
        </div>
        <div><img src="./../img/nguhanhson/EYOyuRdc-lang-da-my-nghe-non-nuoc-2 (2).jpg" alt="">
            <p>Tour đi làng đá Non Nước Ngũ Hành Sơn Đà Nẵng</p><span>Hướng dẫn tiếng việt</span><span> </span>
            <p><i class="fa-solid fa-star"></i><span>4.5</span> 100+ Đã được đặt</p>
            <p><u>đ</u> 3,265,000</p><button class="btn">Mua ngay</button>
        </div>
        <div><img src="./../img/nguhanhson/anh-hang-dong-nui-ngu-hanh-son_094938369.jpg" alt="">
            <p> Tour tham quan động âm phủ Ngũ Hành Sơn</p><span>Tour riêng</span><span>Xác nhận tức thời</span>
            <p><i class="fa-solid fa-star"></i><span>4.4</span>400+ Đã được đặt</p>
            <p><u>đ</u>359,313</p><button class="btn">Mua ngay</button>
        </div>
    </div>
    <h1>Top điểm du lịch Ngũ Hành Sơn</h1>
    <div class="diadiemdulich">

        <div>
            <img src="./../img/nguhanhson/thuyson.jpg" alt="">
            <p>Thủy Sơn</p>
            <span>Núi Thủy Sơn cao khoảng 160m và nằm trên một bãi đất rộng đến 15ha theo hướng Đông Bắc. Núi Thủy Sơn
                còn có tên là núi Tam Thai vì có 3 đỉnh nằm ở 3 tầng, nhìn giống như 3 ngôi sao...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>

        </div>
        <div>
            <img src="./../img/nguhanhson/mocson.jpg" alt="">
            <p> Mộc Sơn</p>
            <span>Núi Mộc Sơn nằm ở phía Đông Nam Ngũ Hành Sơn, song song với núi Thủy Sơn. Tại núi, du khách sẽ được
                chiêm ngưỡng khối đá cẩm thạch Bà Quan Âm trắng muốt cực kỳ ấn tượng.</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>

        </div>
        <div>
            <img src="./../img/nguhanhson/kimson.jpg" alt="">
            <p> Kim Sơn</p>
            <span>Ngọn núi Kim Sơn nằm ở phía bắc của hai ngọn Hỏa Sơn. Nhìn từ xa, bạn sẽ thấy núi Kim Sơn như một
                chiếc chuông khổng lồ nằm úp sấp. Tựa lưng vào núi là ngôi chùa Quan Thế Âm linh thiêng...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>

        </div>
        <div>
            <img src="./../img/nguhanhson/thoson.jpg" alt="">
            <p>Thổ Sơn</p>
            <span>Thổ Sơn hay còn được biết đến là núi Đá Chồng – ngọn núi thấp nhất và cũng là ngọn núi dài nhất trong
                quần thể Ngũ Hành Sơn. Nhìn từ xa, núi Thổ Sơn giống như con rồng nằm ngủ trên...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>

        </div>
        <div>
            <img src="./../img/nguhanhson/chuatamthai.jpg" alt="">
            <p>Chùa Tam Thai</p>
            <span>Chùa Tam Thai là ngôi cổ tự xuất hiện từ đầu thế kỉ XVII, nằm trên ngọn Thủy Sơn. Chùa thờ 4 vị thần:
                Văn Thù Bồ Tát, Phật A Di Đà, Phật Thích Ca, Quan Thế Âm Bồ Tát.</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>

        </div>
        <div>
            <img src="./../img/nguhanhson/chua-linh-ung-11-ngũ-hành-sơn.jpg" alt="">
            <p>Chùa Linh Ứng Ngũ Hành Sơn </p>
            <span>Chùa Linh Ứng Đà Nẵng Ngũ Hành Sơn là ngôi chùa có rất nhiều bức tượng Phật cổ xưa. Trong khuôn viên
                chùa là bức tượng Phật trắng muốt cao đến 10m. Tháp xá lợi 7 tầng </span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>

        </div>
    </div>
    <h1>Đánh giá của khách hàng</h1>
    <div class="feedback">
        <div class="list-feedback">
            <div class="item">
                <div class="item-page item1">
                    <div class="circle-image">
                        <img src="https://via.placeholder.com/150" alt="Hình tròn">
                    </div>
                    <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="item-danh-gia">Đánh giá cho: <a href="">Tour Ngày Tham Quan Bà Nà Hills Từ Đà Nẵng</a></p>
                        <p class="item-ten-khach">Angielou ****** Đăng 11 ngày trước</p>
                        <p class="item-comment">Hành trình tốt. Xe bán tải gọn gàng. Hướng dẫn viên du lịch, ông Chai, rất lôi cuốn, xen vào đó
                            là những câu chuyện cười. Anh ấy đã cố gắng hết sức để tập hợp và phân nhóm mọi người, nhưng mỗi
                            nhóm nên làm theo hướng dẫn và đi cùng nhóm. Món quà lưu niệm của anh vào cuối chuyến đi thật
                            bất ngờ. Nhìn chung, đáng đồng tiền bát gạo.
                        </p>
                    </div>
                </div>
                <div class="item-page item2">
                    <div class="circle-image">
                        <img src="https://via.placeholder.com/150" alt="Hình tròn">
                    </div>
                    <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="item-danh-gia">Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a> </p>
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 7 ngày trước</p>
                        <p class="item-comment">Những ngọn đồi thật tuyệt vời! Có quá nhiều việc phải làm trong thời gian ngắn như vậy. Nơi tuyệt
                            vời và cũng đáng để ghé thăm. Chúng tôi đã đặt một chuyến du lịch riêng với hy vọng tối đa hóa
                            thời gian cho 3 đứa con của mình. Có vẻ hơi vội vã khi vượt qua mọi thứ nhưng nơi này quá lớn
                            nên phải mất một thời gian để đi lại. Thật không may, hướng dẫn của chúng tôi không thú vị như
                            chúng tôi mong đợi. Có lẽ việc đặt phòng cần hiển thị độ tuổi của khách vì cô ấy dự kiến sẽ có 4
                            người lớn và 1 trẻ em thay vì 2 người lớn và 3 trẻ em. Hướng dẫn của chúng tôi không quá hướng
                            ngoại và không cung cấp nhiều chi tiết khi chúng tôi hỏi các lựa chọn của chúng tôi là gì. Chúng
                            tôi hy vọng cô ấy sẽ có thêm thông tin dựa trên kinh nghiệm của mình nhưng dường như cô ấy còn
                            thiếu kiến thức. Tốt hơn hết là chúng ta nên đi tham quan theo nhóm nhỏ và được tự mình đi dạo
                            xung quanh. Chúng tôi đã chọn mua bữa trưa cho riêng mình và đây là một lựa chọn tốt cho chúng
                            tôi vì chúng tôi không cần tiệc buffet. Việc chuyển giao tư nhân cũng tốt nhưng một phương tiện
                            chung cũng sẽ ổn ở Đà Nẵng. Nếu bạn chưa quyết định tham gia một chuyến du lịch riêng, tôi sẽ
                            khuyên bạn nên đi cùng một nhóm nhỏ. Dù sao đi nữa, chuyến thăm thật tuyệt vời và bọn trẻ đã vui
                            vẻ và chúng tôi đã thấy những gì chúng tôi muốn thấy.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-page item3">
                    <div class="circle-image">
                        <img src="https://via.placeholder.com/150" alt="Hình tròn">
                    </div>
                    <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="item-danh-gia">Đánh giá cho: <a href="">Tour Ngày Sun World Bà Nà Hills</a></p>
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 7 ngày trước</p>
                        <p class="item-comment">Hướng dẫn viên Long của chúng tôi thật tuyệt vời, anh ấy có kinh nghiệm và đưa chúng tôi di
                            chuyển để tránh đám đông. Hành trình thực sự có giá trị đồng tiền. Giải thích dài dòng và lập kế
                            hoạch vượt xa sự mong đợi của chúng tôi! Nhóm 9 người của chúng tôi thực sự thích thú. Cảm ơn
                        </p>
                    </div>
                </div>
                <div class="item-page item4">
                    <div class="circle-image">
                        <img src="https://via.placeholder.com/150" alt="Hình tròn">
                    </div>
                    <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="item-danh-gia">Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a></p>
                        <p class="item-ten-khach">Cleopatra ****** Đăng 58 ngày trước</p>
                        <p class="item-comment">Bà Nà Hills đẹp mê hồn. Nơi này rất rộng lớn và là một nơi huyền diệu như Disneyland và tôi thực
                            sự đã yêu. Tôi không nghĩ chúng tôi đã khám phá mọi nơi vì chúng tôi chỉ dành một ngày. Lời
                            khuyên của mình là nên đi xe riêng để có nhiều thời gian rảnh. Phong cảnh rất đẹp và may mắn là
                            thời tiết tốt nên chúng tôi đã chụp được rất nhiều ảnh. Chắc chắn đáng để ghé thăm và rất khuyến
                            khích khi bạn ghé thăm Đà Nẵng.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-page item5">
                    <div class="circle-image">
                        <img src="https://via.placeholder.com/150" alt="Hình tròn">
                    </div>
                    <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="item-danh-gia">Đánh giá cho:<a href="">Private Check-out Tour:Bà Nà Hills,Da Nang Airport Drop-off</a></p>
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 40 ngày trước</p>
                        <p class="item-comment">Buổi sáng đón khách suôn sẻ,không cần lo lắng về hành lý, ra vào thuận tiện vì tôi đã nhận được
                            vé điện tử đi Bà Nà Hills,dịch vụ mát-xa tốt, bữa tối là bữa ăn Việt Nam tự nấu và tôi cũng rất
                            thích bia.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonss">
            <button class="prev1"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="next1"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
    <div class="feedback-mobile">
        <div class="list-feedback">
            <div class="item">
                <div class="item-page">
                    <div class="circle-image">
                        <img src="https://via.placeholder.com/150" alt="Hình tròn">
                    </div>
                    <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="item-danh-gia">Đánh giá cho: <a href="">Tour Ngày Tham Quan Bà Nà Hills Từ Đà Nẵng</a></p>
                        <p class="item-ten-khach">Angielou ****** Đăng 11 ngày trước</p>
                        <p class="item-comment">Hành trình tốt. Xe bán tải gọn gàng. Hướng dẫn viên du lịch, ông Chai, rất lôi cuốn, xen vào đó
                            là những câu chuyện cười. Anh ấy đã cố gắng hết sức để tập hợp và phân nhóm mọi người, nhưng mỗi
                            nhóm nên làm theo hướng dẫn và đi cùng nhóm. Món quà lưu niệm của anh vào cuối chuyến đi thật
                            bất ngờ. Nhìn chung, đáng đồng tiền bát gạo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-page">
                    <div class="circle-image">
                        <img src="https://via.placeholder.com/150" alt="Hình tròn">
                    </div>
                    <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="item-danh-gia">Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a> </p>
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 7 ngày trước</p>
                        <p class="item-comment">Những ngọn đồi thật tuyệt vời! Có quá nhiều việc phải làm trong thời gian ngắn như vậy. Nơi tuyệt
                            vời và cũng đáng để ghé thăm. Chúng tôi đã đặt một chuyến du lịch riêng với hy vọng tối đa hóa
                            thời gian cho 3 đứa con của mình. Có vẻ hơi vội vã khi vượt qua mọi thứ nhưng nơi này quá lớn
                            nên phải mất một thời gian để đi lại. Thật không may, hướng dẫn của chúng tôi không thú vị như
                            chúng tôi mong đợi. Có lẽ việc đặt phòng cần hiển thị độ tuổi của khách vì cô ấy dự kiến sẽ có 4
                            người lớn và 1 trẻ em thay vì 2 người lớn và 3 trẻ em. Hướng dẫn của chúng tôi không quá hướng
                            ngoại và không cung cấp nhiều chi tiết khi chúng tôi hỏi các lựa chọn của chúng tôi là gì. Chúng
                            tôi hy vọng cô ấy sẽ có thêm thông tin dựa trên kinh nghiệm của mình nhưng dường như cô ấy còn
                            thiếu kiến thức. Tốt hơn hết là chúng ta nên đi tham quan theo nhóm nhỏ và được tự mình đi dạo
                            xung quanh. Chúng tôi đã chọn mua bữa trưa cho riêng mình và đây là một lựa chọn tốt cho chúng
                            tôi vì chúng tôi không cần tiệc buffet. Việc chuyển giao tư nhân cũng tốt nhưng một phương tiện
                            chung cũng sẽ ổn ở Đà Nẵng. Nếu bạn chưa quyết định tham gia một chuyến du lịch riêng, tôi sẽ
                            khuyên bạn nên đi cùng một nhóm nhỏ. Dù sao đi nữa, chuyến thăm thật tuyệt vời và bọn trẻ đã vui
                            vẻ và chúng tôi đã thấy những gì chúng tôi muốn thấy.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-page">
                    <div class="circle-image">
                        <img src="https://via.placeholder.com/150" alt="Hình tròn">
                    </div>
                    <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="item-danh-gia">Đánh giá cho: <a href="">Tour Ngày Sun World Bà Nà Hills</a></p>
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 7 ngày trước</p>
                        <p class="item-comment">Hướng dẫn viên Long của chúng tôi thật tuyệt vời, anh ấy có kinh nghiệm và đưa chúng tôi di
                            chuyển để tránh đám đông. Hành trình thực sự có giá trị đồng tiền. Giải thích dài dòng và lập kế
                            hoạch vượt xa sự mong đợi của chúng tôi! Nhóm 9 người của chúng tôi thực sự thích thú. Cảm ơn
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-page">
                    <div class="circle-image">
                        <img src="https://via.placeholder.com/150" alt="Hình tròn">
                    </div>
                    <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="item-danh-gia">Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a></p>
                        <p class="item-ten-khach">Cleopatra ****** Đăng 58 ngày trước</p>
                        <p class="item-comment">Bà Nà Hills đẹp mê hồn. Nơi này rất rộng lớn và là một nơi huyền diệu như Disneyland và tôi thực
                            sự đã yêu. Tôi không nghĩ chúng tôi đã khám phá mọi nơi vì chúng tôi chỉ dành một ngày. Lời
                            khuyên của mình là nên đi xe riêng để có nhiều thời gian rảnh. Phong cảnh rất đẹp và may mắn là
                            thời tiết tốt nên chúng tôi đã chụp được rất nhiều ảnh. Chắc chắn đáng để ghé thăm và rất khuyến
                            khích khi bạn ghé thăm Đà Nẵng.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-page">
                    <div class="circle-image">
                        <img src="https://via.placeholder.com/150" alt="Hình tròn">
                    </div>
                    <div>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="item-danh-gia">Đánh giá cho:<a href="">Private Check-out Tour:Bà Nà Hills,Da Nang Airport Drop-off</a></p>
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 40 ngày trước</p>
                        <p class="item-comment">Buổi sáng đón khách suôn sẻ,không cần lo lắng về hành lý, ra vào thuận tiện vì tôi đã nhận được
                            vé điện tử đi Bà Nà Hills,dịch vụ mát-xa tốt, bữa tối là bữa ăn Việt Nam tự nấu và tôi cũng rất
                            thích bia.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonss">
            <button class="prev1"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="next1"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
    <h1 class="h1xuhuong">Xu hướng</h1>
    <div class="xuhuong">
        <div class="slider-img">
            <div class="list-item">
                <div class="item">
                    <div class="item1"><img src="./../img/4-Cau-Rong-Han-Cau-Thuan-Phuoc-6049-1654169673.jpg"
                            alt=""><a>Cầu Rồng</a></div>
                    <div class="item2"><img src="./../img/ban-dao-son-tra-3-1024x550.webp" alt=""><a>Bán Đảo Sơn Trà</a>
                    </div>
                    <div class="item3"><img src="./../img/ngũ hành sơn.jpg" alt=""><a>Ngũ Hành Sơn</a></div>
                    <div class="item4"><img src="./../img/culaocham.jpg" alt=""><a>Cù Lao Chàm</a></div>
                </div>
                <div class="item">
                    <div class="item1"><img src="./../img/ran-nam-o-da-nang.jpg" alt=""><a>Nam Ô</a></div>
                    <div class="item2"><img
                            src="./../img/To-hop-cong-vien-nuoc-am-trong-nha-mikazuki-water-park-365-Da-Nang-Mikazuki-Japanese-resort-spa.jpg"
                            alt=""><a>Mikazuki</a></div>
                    <div class="item3"><img src="./../img/hoi-an-1024x615.png" alt=""><a>Hội An</a></div>
                    <div class="item4"><img
                            src="./../img/bao-tang-dieu-khac-cham-da-nang-noi-luu-giu-di-san-cham-pa-06-1636330975.jpg"
                            alt=""><a>Bảo tàng Chăm</a></div>
                </div>
                <div class="item">
                    <div class="item1"><img src="./../img/chợ hàn.webp" alt=""><a>Chợ Hàn</a></div>
                    <div class="item2"><img src="./../img/suoithantai.jpg" alt=""><a>Suối Thần Tài</a></div>
                    <div class="item3"><img src="./../img/Le-hoi-long-den-o-Cong-Vien-Chau-A-Da-Nang.jpg" alt=""><a>Công
                            viên Châu Á</a></div>
                    <div class="item4"><img src="./../img/cho-dem-da-nang-4582-1654169674.jpg" alt=""><a>Sông Hàn</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonsss">
            <button class="prev2"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="next2"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="content1">
            <p>Ngũ Hành Sơn, còn được gọi là Non Nước, là một trong những điểm thu hút du lịch nổi tiếng tại Đà Nẵng,
                Việt Nam. Với vẻ đẹp tự nhiên tuyệt vời và không gian yên bình, Ngũ Hành Sơn thu hút hàng nghìn du khách
                mỗi năm.</p>
            <p>Ngũ Hành Sơn nổi tiếng với những ngọn núi đá vôi độc đáo và hình dáng độc đáo của chúng. Mỗi ngọn núi đại
                diện cho một nguyên tố tự nhiên khác nhau, bao gồm Kim, Mộc, Thủy, Hỏa và Thổ. Du khách có thể khám phá
                các hang động và đỉnh núi đá vôi, ngắm nhìn cảnh quan tuyệt đẹp từ trên cao và tham gia các hoạt động
                thể thao ngoài trời như leo núi và đi bộ đường dài.</p>
            <p>Ngũ Hành Sơn cũng nổi tiếng với các ngôi chùa và đền thờ tại khu vực. Du khách có thể tìm hiểu về văn hóa
                và tín ngưỡng địa phương, tham gia các nghi lễ và cầu nguyện tại các đền thờ.</p>
            <p>Hãy đến Ngũ Hành Sơn để trải nghiệm vẻ đẹp thiên nhiên tuyệt vời và khám phá những hoạt động thú vị tại
                địa điểm này. Đừng bỏ lỡ cơ hội khám phá một trong những điểm đến hấp dẫn nhất ở Đà Nẵng, Việt Nam.</p>
        </div>
        <a href="#!" class="xemthem"><u>Xem thêm</u></a>
        <a href="#!" class="xemithon"><u>Xem ít hơn</u></a>
    </div>
    <div class="h1">
        <h1>Những câu hỏi phổ biến về Ngũ Hành Sơn</h1>
    </div>
    <div class="thongtin">
        <div>
            <h2>Ngũ Hành Sơn Đà Nẵng nổi tiếng vì điều gì?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>Ngũ Hành Sơn, còn được gọi là Non Nước, là một nhóm núi đá vôi nằm ở thành phố Đà Nẵng, Việt Nam. Nó nổi
                tiếng với cảnh quan thiên nhiên tuyệt đẹp và giá trị tâm linh sâu sắc. Ngũ Hành Sơn bao gồm năm ngọn núi
                đá với tên gọi theo ngũ hành: Kim Sơn, Mộc Sơn, Thủy Sơn, Hỏa Sơn và Thổ Sơn. Mỗi ngọn núi đều có một vẻ
                đẹp riêng biệt và độc đáo. Du khách đến đây có thể khám phá các hang động, tham quan các đền chùa và tận
                hưởng không gian yên bình của thiên nhiên. Ngũ Hành Sơn cũng là một điểm đến phổ biến cho những người
                tìm kiếm sự tĩnh lặng và tu tập. Với vẻ đẹp tự nhiên tuyệt vời và giá trị tâm linh, Ngũ Hành Sơn là một
                điểm đến không thể bỏ qua khi đến Đà Nẵng.</p>
        </div>
        <div>
            <h2>Có phù hợp cho trẻ em và gia đình không?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>Ngũ Hành Sơn là một điểm đến tuyệt vời cho trẻ em và gia đình. Với cảnh quan thiên nhiên tuyệt đẹp và
                không gian yên tĩnh, đây là nơi lý tưởng để trẻ em khám phá và tận hưởng thiên nhiên. Các đỉnh núi đá và
                hang động tạo ra một không gian thú vị để trẻ em khám phá và chơi đùa. Ngoài ra, khu vực này cũng có
                nhiều hoạt động giải trí phù hợp cho gia đình như đi bộ, leo núi và tham quan hang động. Bên cạnh đó, có
                nhiều nhà hàng và quán cà phê gần đó để gia đình có thể thưởng thức các món ăn ngon và thư giãn sau khi
                khám phá. Vì vậy, Ngũ Hành Sơn là một điểm đến tuyệt vời cho trẻ em và gia đình tận hưởng kỳ nghỉ thú vị
                và ý nghĩa.</p>
        </div>
        <div>
            <h2>Cách tốt nhất để trải nghiệm Ngũ Hành Sơn là gì?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>Để trải nghiệm tốt nhất Ngũ Hành Sơn, bạn nên bắt đầu bằng việc khám phá các ngọn núi đá với các hang
                động và động nước tuyệt đẹp. Hãy dạo chơi trong khu vực và chiêm ngưỡng vẻ đẹp tự nhiên của các ngọn núi
                đá. Sau đó, bạn có thể tham gia vào các hoạt động như leo núi, leo đá, hay thậm chí là tham gia vào các
                buổi hướng dẫn tham quan để tìm hiểu thêm về lịch sử và văn hóa của Ngũ Hành Sơn. Nếu bạn muốn thư giãn,
                hãy tận hưởng không gian yên tĩnh và tĩnh lặng của các ngọn núi đá. Đừng quên mang theo máy ảnh để ghi
                lại những khoảnh khắc đáng nhớ trong chuyến tham quan của bạn tại Ngũ Hành Sơn.</p>
        </div>
        <div>
            <h2>Có phù hợp cho du khách có ngân sách hạn chế không?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>Ngũ Hành Sơn là một điểm đến tuyệt vời cho những du khách có ngân sách hạn chế. Với việc không yêu cầu
                phí vào cửa, du khách có thể khám phá những ngọn núi đá độc đáo và tham quan các hang động tại đây mà
                không tốn nhiều tiền. Ngoài ra, khu vực này cũng có nhiều quán ăn và nhà nghỉ giá rẻ, giúp du khách tiết
                kiệm chi phí lưu trú và ẩm thực. Du khách cũng có thể tận hưởng không gian yên tĩnh và tĩnh lặng của
                ngọn núi để thư giãn mà không cần tốn nhiều tiền. Vì vậy, nếu bạn đang tìm kiếm một trải nghiệm du lịch
                thú vị mà không cần phải chi tiêu quá nhiều, Ngũ Hành Sơn là một lựa chọn tuyệt vời cho bạn.</p>
        </div>
        <div>
            <h2>Thời điểm nào trong năm là thích hợp nhất để tham quan Ngũ Hành Sơn?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>Ngũ Hành Sơn là một điểm du lịch hấp dẫn ở Đà Nẵng, Việt Nam và có thể được tham quan vào bất kỳ thời
                điểm nào trong năm. Tuy nhiên, để có trải nghiệm tốt nhất, nhiều du khách thích đến vào mùa xuân (từ
                tháng 2 đến tháng 4) hoặc mùa thu (từ tháng 9 đến tháng 11). Trong những thời điểm này, thời tiết ở Đà
                Nẵng thường rất dễ chịu và mát mẻ, làm cho việc khám phá Ngũ Hành Sơn trở nên thoải mái hơn. Ngoài ra,
                vào mùa xuân, du khách còn có cơ hội chiêm ngưỡng những cánh đồng hoa anh đào nở rộ tại khu vực này, tạo
                nên một khung cảnh tuyệt đẹp. Tuy nhiên, dù thời điểm nào bạn chọn, hãy kiểm tra thời tiết trước khi đi
                và chuẩn bị phù hợp để có một chuyến tham quan tuyệt vời tại Ngũ Hành Sơn.</p>
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
                                <li>
                                    <a href="#">
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



    <script src="./../js/nguhanhson.js"></script>
</body>

</html>