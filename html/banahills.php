<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website du lịch</title>
    <link rel="shortcut icon" type="" href="./img/icons8-tourism-20.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <link rel="stylesheet" href="./../css/banahills-mobile.css" media="(max-width: 700px)" />

    <link rel="stylesheet" href="./../css/banahills-tablet.css" media="(min-width: 701px) and (max-width: 1024px)" />

    <link rel="stylesheet" href="./../css/banahills.css" media="(min-width: 1025px)" />
</head>

<body>
    <header>
        <div class="header_top">
            <div>
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
            <li>
                <a href="./gio_hang.php">Giỏ hàng</a>
            </li>
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
            <p>Sun World Bà Nà Hills</p>
            <span class="span1"><i class="fa-sharp fa-solid fa-location-dot"></i> Đà Nẵng,
                VIETNAM</span>
            <span class="span2">Nằm trên đỉnh Núi Chúa,bạn chỉ có thể đến Sun World Bà Nà Hills bằng
                hệ thống cáp treo ấn tượng,bản thân nó đã là một điểm thu hút.Từ
                trong...</span>

            <a href="#!"><u>Xem thêm</u> </a>
            <i id="triangle" class="fa-solid fa-caret-left"></i>
            <span class="span3">Thời gian tuyệt nhất <br />để đến</span>
            <span class="span4">Thời lượng lý tưởng</span>
            <span class="span5">THG 5</span>
            <span class="span6">3 ngày</span>
            <span class="span7">Lễ hội Khinh khí cầu Quốc tế</span>
        </div>
        <div class="list1">
            <div class="item">
                <img src="./../img/banahill/banahill.jpg" alt="" />
            </div>
            <div class="item">
                <img src="./..//img/banahill/cauvangbanahills.jpg" alt="" />
            </div>
            <div class="item">
                <img src="./..//img/banahill/banahills3.jpg" alt="" />
            </div>
            <div class="item">
                <img src="./../img/banahill/banahills4.png" alt="" />
            </div>
            <div class="item">
                <img src="./../img/banahill/Ba-Na-Hills-Luxury-Group-Tour-1-Day-Linh-Ung-pagoda.jpg" alt="" />
            </div>
        </div>
        <div class="slider">
            <div class="list">
                <div class="item">
                    <img src="./../img/banahill/banahill.jpg" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/banahill/cauvangbanahills.jpg" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/banahill/banahills3.jpg" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/banahill/banahills4.png" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/banahill/Ba-Na-Hills-Luxury-Group-Tour-1-Day-Linh-Ung-pagoda.jpg" alt="" />
                </div>
            </div>
            <div class="buttons">
                <button class="prev"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="next">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
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
            <p>
                Nằm trên đỉnh Núi Chúa, bạn chỉ có thể đến Sun World Bà Nà Hills bằng
                hệ thống cáp treo ấn tượng, bản thân nó đã là một điểm thu hút. Từ
                trong xe, bạn có thể nhìn thấy toàn bộ vùng núi - từ những thác nước
                cao và những đỉnh núi đầy sương mù đến những khu rừng nhiệt đới rậm
                rạp. Xuống ga Sun World Bà Nà Hills và gặp tượng Phật Thích Ca Mâu Ni
                cao 27m ngồi bên vườn hoa.
            </p>
        </div>
    </div>
    <h1 class="h1">12 Địa điểm du lịch Bà Nà Hills</h1>
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
            <img src="./../img/banahill/kham-pha-bi-mat-100-nam-tuoi-chua-ke-ve-ba-na-hills-longphutravel-1.jpg"
                alt="" />
            <p>Tour ngày Sun World Bà Nà Hills</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(3,181) 30k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 3,932,500</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/banahill/lang-phap-ba-na-hills-nguoc-thoi-gian-ve-chau-au-trung-co-2-2.jpg" alt="" />
            <p>Ba Na Hills Sidecar Private Tour from Hoi An</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(3,181) 30k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 1,156,500</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/banahill/sunworld-ba-na-hills-danang-vietnam-entrance-1.jpg" alt="" />
            <p>Tour Ngày Tùy Chọn Tham Quan Bà Nà Hills và Cầu...</p>
            <span>Bán chạy</span><span>Hoàn tiền dễ dàng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.6</span>(316) 8k+ Đã được đặt
            </p>
            <p><u>đ</u> 722,500</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/banahill/golden-bridge-bana-hillsvietnamgoldenbridge-8354.jpg" alt="" />
            <p>Private Check-out Tour:Ba Na Hills,Da Nang & Air...</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.9</span>(200)+ Đã được đặt
            </p>
            <p><u>đ</u> 1,519,000</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/banahill/ba-na-1hills.jpg" alt="" />
            <p>Tour Trong Ngày Cao Cấp Cầu Vàng,Bà Nà Hills...</p>
            <span>Bán chạy</span><span>Xác nhận tức thời</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.4</span>(459) 5k+ Đã được đặt
            </p>
            <p><u>đ</u> 1,608,400</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/banahill/banahills2.jpg" alt="" />
            <p>Ba Na Hills and Golden Bridge Small Group...</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(53) 1k+ Đã được đặt
            </p>
            <p><u>đ</u> 1,759,000</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/banahill/banahills3.jpg" alt="" />
            <p>Tour Ngày Tùy Chỉnh Đi Bà Nà Hill và Cầu Vàng...</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.4</span>(19) 900+ Đã được đặt
            </p>
            <p><u>đ</u> 2,714,800</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/banahill/banahills4.png" alt="" />
            <p>Vé Cáp Treo Sun World Ba Na Hills Đà Nẵng</p>
            <span>Bán chạy</span><span>Xác nhận tức thời</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.7</span>(23k+) 700k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 840,000</p>
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
    <h1>Top điểm du lịch Sun World Ba Na Hills</h1>

    <div class="diadiemdulich">
        <div>
            <img src="./../img/banahill/vuonhoa.jpg" alt="" />
            <p>Chùa Linh Ứng</p>
            <span>Chùa Linh Ứng Bà Nà là một trong ba ngôi chùa Linh Ứng nổi tiếng của
                thành phố Đà Nẵng hay còn được gọi là “tam giác tâm linh Linh Ứng”
                (cùng với chùa Linh Ứng Ngũ Hành Sơn, chùa Linh...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/banahill/Le-Jardin-DAmour-Gardens-overview.jpg" alt="" />
            <p>Vườn hoa Le Jardin D'Amour</p>
            <span>Vườn hoa Le Jardin D’Amour bao gồm 9 khu vườn gắn với 9 câu chuyện
                thú vị và mang phong cách kiến trúc độc đáo khác nhau và là một trong
                những địa điểm du lịch ở Bà Nà hấp dẫn...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/banahill/lang-phap-ba-na-hills-nguoc-thoi-gian-ve-chau-au-trung-co-2-2.jpg" alt="" />
            <p>Khu làng Pháp</p>
            <span>Được mệnh danh là “Châu Âu trên đỉnh Bà Nà”, đến khu làng Pháp, bạn
                sẽ phải trầm trộ kinh ngạc trước kiến trúc mang phong cách châu Âu thế
                kỉ XIX như tòa nhà cổ kính, lâu đài nguy nga, hàng rào...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/banahill/ham-ruou-de-bay-ba-na-hill.jpg" alt="" />
            <p>Hầm rượu Debay</p>
            <span style="text-align: justify">Hầm rượu cổ Debay là công trình độc đáo được người Pháp xây dựng từ
                năm 1923, với mục đích cất giữ các loại rượu, đặc biệt là các loại
                rượu vang. Hầm rượu đậm chất Pháp...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/banahill/sun-world-ba-na-hills-quang-truong-nhat-thuc-chinh-thuc-don-khach-tu-14-7-2022-7.jpg"
                alt="" />
            <p>Quảng trường Nhật Thực</p>
            <span>Một địa điểm du lịch Bà Nà Hills cũng mới, cũng hot không kém đó
                chính là Quảng trường Nhật Thực. Đây là nơi kết nối Vương quốc Mặt
                Trăng với Vương quốc Mặt Trời trên diện tích rộng tới ...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/banahill/golden-bridge-bana-hillsvietnamgoldenbridge-8354.jpg" alt="" />
            <p>Cầu Vàng Bà Nà Hills</p>
            <span>Cầu Vàng hay còn gọi là cầu VàngĐà Nẵng là một trong những công trình
                kiến trúc tiêu biểu của Việt Nam khiến thế giới phải trầm trồ. Nằm ở
                độ cao 1400m so với với mực nước...
            </span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
    </div>
    <h1>Đánh giá của khách hàng</h1>
    <div class="feedback">
        <div class="list-feedback">
            <div class="item">
                <div class="item1">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <p>
                        Đánh giá cho:
                        <a href="">Tour Ngày Tham Quan Bà Nà Hills Từ Đà Nẵng</a>
                    </p>
                    <p>Angielou ****** Đăng 11 ngày trước</p>
                    <p>
                        Hành trình tốt. Xe bán tải gọn gàng. Hướng dẫn viên du lịch, ông
                        Chai, rất lôi cuốn, xen vào đó là những câu chuyện cười. Anh ấy đã
                        cố gắng hết sức để tập hợp và phân nhóm mọi người, nhưng mỗi nhóm
                        nên làm theo hướng dẫn và đi cùng nhóm. Món quà lưu niệm của anh
                        vào cuối chuyến đi thật bất ngờ. Nhìn chung, đáng đồng tiền bát
                        gạo.
                    </p>
                </div>
                <div class="item2">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <p>
                        Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a>
                    </p>
                    <p>Người dùng TRAVELS Đăng 7 ngày trước</p>
                    <p>
                        Những ngọn đồi thật tuyệt vời! Có quá nhiều việc phải làm trong
                        thời gian ngắn như vậy. Nơi tuyệt vời và cũng đáng để ghé thăm.
                        Chúng tôi đã đặt một chuyến du lịch riêng với hy vọng tối đa hóa
                        thời gian cho 3 đứa con của mình. Có vẻ hơi vội vã khi vượt qua
                        mọi thứ nhưng nơi này quá lớn nên phải mất một thời gian để đi
                        lại. Thật không may, hướng dẫn của chúng tôi không thú vị như
                        chúng tôi mong đợi. Có lẽ việc đặt phòng cần hiển thị độ tuổi của
                        khách vì cô ấy dự kiến sẽ có 4 người lớn và 1 trẻ em thay vì 2
                        người lớn và 3 trẻ em. Hướng dẫn của chúng tôi không quá hướng
                        ngoại và không cung cấp nhiều chi tiết khi chúng tôi hỏi các lựa
                        chọn của chúng tôi là gì. Chúng tôi hy vọng cô ấy sẽ có thêm thông
                        tin dựa trên kinh nghiệm của mình nhưng dường như cô ấy còn thiếu
                        kiến thức. Tốt hơn hết là chúng ta nên đi tham quan theo nhóm nhỏ
                        và được tự mình đi dạo xung quanh. Chúng tôi đã chọn mua bữa trưa
                        cho riêng mình và đây là một lựa chọn tốt cho chúng tôi vì chúng
                        tôi không cần tiệc buffet. Việc chuyển giao tư nhân cũng tốt nhưng
                        một phương tiện chung cũng sẽ ổn ở Đà Nẵng. Nếu bạn chưa quyết
                        định tham gia một chuyến du lịch riêng, tôi sẽ khuyên bạn nên đi
                        cùng một nhóm nhỏ. Dù sao đi nữa, chuyến thăm thật tuyệt vời và
                        bọn trẻ đã vui vẻ và chúng tôi đã thấy những gì chúng tôi muốn
                        thấy.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item3">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <p>Đánh giá cho: <a href="">Tour Ngày Sun World Bà Nà Hills</a></p>
                    <p>Người dùng TRAVELS Đăng 7 ngày trước</p>
                    <p>
                        Hướng dẫn viên Long của chúng tôi thật tuyệt vời, anh ấy có kinh
                        nghiệm và đưa chúng tôi di chuyển để tránh đám đông. Hành trình
                        thực sự có giá trị đồng tiền. Giải thích dài dòng và lập kế hoạch
                        vượt xa sự mong đợi của chúng tôi! Nhóm 9 người của chúng tôi thực
                        sự thích thú. Cảm ơn
                    </p>
                </div>
                <div class="item4">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <p>
                        Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a>
                    </p>
                    <p>Cleopatra ****** Đăng 58 ngày trước</p>
                    <p>
                        Bà Nà Hills đẹp mê hồn. Nơi này rất rộng lớn và là một nơi huyền
                        diệu như Disneyland và tôi thực sự đã yêu. Tôi không nghĩ chúng
                        tôi đã khám phá mọi nơi vì chúng tôi chỉ dành một ngày. Lời khuyên
                        của mình là nên đi xe riêng để có nhiều thời gian rảnh. Phong cảnh
                        rất đẹp và may mắn là thời tiết tốt nên chúng tôi đã chụp được rất
                        nhiều ảnh. Chắc chắn đáng để ghé thăm và rất khuyến khích khi bạn
                        ghé thăm Đà Nẵng.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="item5">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <p>
                        Đánh giá cho:<a href="">Private Check-out Tour:Bà Nà Hills,Da Nang Airport Drop-off</a>
                    </p>
                    <p>Người dùng TRAVELS Đăng 40 ngày trước</p>
                    <p>
                        Buổi sáng đón khách suôn sẻ,không cần lo lắng về hành lý, ra vào
                        thuận tiện vì tôi đã nhận được vé điện tử đi Bà Nà Hills,dịch vụ
                        mát-xa tốt, bữa tối là bữa ăn Việt Nam tự nấu và tôi cũng rất
                        thích bia.
                    </p>
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
                <div>
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <p>
                        Đánh giá cho:
                        <a href="">Tour Ngày Tham Quan Bà Nà Hills Từ Đà Nẵng</a>
                    </p>
                    <p>Angielou ****** Đăng 11 ngày trước</p>
                    <p>
                        Hành trình tốt. Xe bán tải gọn gàng. Hướng dẫn viên du lịch, ông
                        Chai, rất lôi cuốn, xen vào đó là những câu chuyện cười. Anh ấy đã
                        cố gắng hết sức để tập hợp và phân nhóm mọi người, nhưng mỗi nhóm
                        nên làm theo hướng dẫn và đi cùng nhóm. Món quà lưu niệm của anh
                        vào cuối chuyến đi thật bất ngờ. Nhìn chung, đáng đồng tiền bát
                        gạo.
                    </p>
                </div>
            </div>
            <div class="item">
                <div>
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <p>
                        Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a>
                    </p>
                    <p>Người dùng TRAVELS Đăng 7 ngày trước</p>
                    <p>
                        Những ngọn đồi thật tuyệt vời! Có quá nhiều việc phải làm trong
                        thời gian ngắn như vậy. Nơi tuyệt vời và cũng đáng để ghé thăm.
                        Chúng tôi đã đặt một chuyến du lịch riêng với hy vọng tối đa hóa
                        thời gian cho 3 đứa con của mình. Có vẻ hơi vội vã khi vượt qua
                        mọi thứ nhưng nơi này quá lớn nên phải mất một thời gian để đi
                        lại. Thật không may, hướng dẫn của chúng tôi không thú vị như
                        chúng tôi mong đợi. Có lẽ việc đặt phòng cần hiển thị độ tuổi của
                        khách vì cô ấy dự kiến sẽ có 4 người lớn và 1 trẻ em thay vì 2
                        người lớn và 3 trẻ em. Hướng dẫn của chúng tôi không quá hướng
                        ngoại và không cung cấp nhiều chi tiết khi chúng tôi hỏi các lựa
                        chọn của chúng tôi là gì. Chúng tôi hy vọng cô ấy sẽ có thêm thông
                        tin dựa trên kinh nghiệm của mình nhưng dường như cô ấy còn thiếu
                        kiến thức. Tốt hơn hết là chúng ta nên đi tham quan theo nhóm nhỏ
                        và được tự mình đi dạo xung quanh. Chúng tôi đã chọn mua bữa trưa
                        cho riêng mình và đây là một lựa chọn tốt cho chúng tôi vì chúng
                        tôi không cần tiệc buffet. Việc chuyển giao tư nhân cũng tốt nhưng
                        một phương tiện chung cũng sẽ ổn ở Đà Nẵng. Nếu bạn chưa quyết
                        định tham gia một chuyến du lịch riêng, tôi sẽ khuyên bạn nên đi
                        cùng một nhóm nhỏ. Dù sao đi nữa, chuyến thăm thật tuyệt vời và
                        bọn trẻ đã vui vẻ và chúng tôi đã thấy những gì chúng tôi muốn
                        thấy.
                    </p>
                </div>
            </div>
            <div class="item">
                <div>
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <p>Đánh giá cho: <a href="">Tour Ngày Sun World Bà Nà Hills</a></p>
                    <p>Người dùng TRAVELS Đăng 7 ngày trước</p>
                    <p>
                        Hướng dẫn viên Long của chúng tôi thật tuyệt vời, anh ấy có kinh
                        nghiệm và đưa chúng tôi di chuyển để tránh đám đông. Hành trình
                        thực sự có giá trị đồng tiền. Giải thích dài dòng và lập kế hoạch
                        vượt xa sự mong đợi của chúng tôi! Nhóm 9 người của chúng tôi thực
                        sự thích thú. Cảm ơn
                    </p>
                </div>
            </div>
            <div class="item">
                <div>
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <p>
                        Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a>
                    </p>
                    <p>Cleopatra ****** Đăng 58 ngày trước</p>
                    <p>
                        Bà Nà Hills đẹp mê hồn. Nơi này rất rộng lớn và là một nơi huyền
                        diệu như Disneyland và tôi thực sự đã yêu. Tôi không nghĩ chúng
                        tôi đã khám phá mọi nơi vì chúng tôi chỉ dành một ngày. Lời khuyên
                        của mình là nên đi xe riêng để có nhiều thời gian rảnh. Phong cảnh
                        rất đẹp và may mắn là thời tiết tốt nên chúng tôi đã chụp được rất
                        nhiều ảnh. Chắc chắn đáng để ghé thăm và rất khuyến khích khi bạn
                        ghé thăm Đà Nẵng.
                    </p>
                </div>
            </div>
            <div class="item">
                <div>
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <p>
                        Đánh giá cho:<a href="">Private Check-out Tour:Bà Nà Hills,Da Nang Airport Drop-off</a>
                    </p>
                    <p>Người dùng TRAVELS Đăng 40 ngày trước</p>
                    <p>
                        Buổi sáng đón khách suôn sẻ,không cần lo lắng về hành lý, ra vào
                        thuận tiện vì tôi đã nhận được vé điện tử đi Bà Nà Hills,dịch vụ
                        mát-xa tốt, bữa tối là bữa ăn Việt Nam tự nấu và tôi cũng rất
                        thích bia.
                    </p>
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
                    <div class="item1">
                        <img src="./../img/Núi thần tài/14934312475544 (1).jpg" alt="" /><a>Núi thần tài</a>
                    </div>
                    <div class="item2">
                        <img src="./../img/ban-dao-son-tra-3-1024x550.webp" alt="" /><a>Bán Đảo Sơn Trà</a>
                    </div>
                    <div class="item3">
                        <img src="./../img/ngũ hành sơn.jpg" alt="" /><a>Ngũ Hành Sơn</a>
                    </div>
                    <div class="item4">
                        <img src="./../img/culaocham.jpg" alt="" /><a>Hội An</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonsss">
            <button class="prev2"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="next2"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="content1">
            <p>
                Sun World Bà Nà Hills là một trong những điểm thu hút du lịch nổi
                tiếng tại Đà Nẵng, Việt Nam. Nằm tại vùng núi Bà Nà, đây là một khu du
                lịch độc đáo với cảnh quan thiên nhiên tuyệt đẹp và các hoạt động thú
                vị.
            </p>
            <p>
                Khi đến Sun World Bà Nà Hills, du khách sẽ được trải nghiệm những hoạt
                động đa dạng và thú vị. Có thể tham gia các trò chơi giải trí tại công
                viên, như trượt cáp treo, đi xe lửa trên không, hay tham gia các trò
                chơi mạo hiểm như lướt ván trên không. Ngoài ra, du khách cũng có thể
                tham quan các điểm tham quan nổi tiếng như Chùa Linh Ứng, Cầu Vàng hay
                Làng Pháp.
            </p>
            <p>
                Sun World Bà Nà Hills là một điểm đến lý tưởng cho những ai muốn khám
                phá vẻ đẹp thiên nhiên và tham gia vào những hoạt động thú vị. Hãy đến
                và trải nghiệm những trải nghiệm tuyệt vời tại đây!
            </p>
        </div>
        <a href="#!" class="xemthem"><u>Xem thêm</u></a>
        <a href="#!" class="xemithon"><u>Xem ít hơn</u></a>
    </div>
    <h1>Những câu hỏi phổ biến về Bà Nà Hills</h1>
    <div class="thongtin">
        <div>
            <h2>Sun World Bà Nà Hills nổi tiếng vì điều gì?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>
                Sun World Bà Nà Hills nổi tiếng với khung cảnh thiên nhiên tuyệt đẹp
                và kiến trúc độc đáo. Nằm tại Đà Nẵng, Việt Nam, nơi này được biết đến
                với những cảnh quan tự nhiên tuyệt vời, bao gồm cảnh sông núi hùng vĩ
                và khí hậu mát mẻ quanh năm. Bên cạnh đó, Sun World Bà Nà Hills còn có
                kiến trúc độc đáo với các công trình xây dựng được lấy cảm hứng từ
                kiến trúc Pháp cổ điển. Du khách có thể khám phá các công trình nổi
                tiếng như Cầu Vàng, Chùa Linh Ứng, và Công viên Châu Âu. Sun World Bà
                Nà Hills là điểm đến lý tưởng cho những ai muốn tận hưởng không gian
                thiên nhiên tuyệt đẹp và khám phá kiến trúc độc đáo của Đà Nẵng.
            </p>
        </div>
        <div>
            <h2>Có phù hợp cho trẻ em và gia đình không?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>
                Sun World Bà Nà Hills là một điểm đến tuyệt vời cho trẻ em và gia
                đình. Công viên có nhiều hoạt động thú vị và phù hợp với mọi lứa tuổi.
                Trẻ em sẽ thích thú với các trò chơi và vui chơi trong công viên, như
                trượt tuyết, trượt ván, và trò chơi nước. Ngoài ra, công viên còn có
                các khu vui chơi giáo dục, nơi trẻ em có thể học hỏi và khám phá về
                thiên nhiên và văn hóa. Đối với gia đình, Sun World Bà Nà Hills cung
                cấp nhiều hoạt động giải trí như tham quan các điểm tham quan, thưởng
                thức ẩm thực đặc sản và tham gia các sự kiện và lễ hội. Với không gian
                xanh mát và khung cảnh đẹp, đây là một điểm đến lý tưởng để cả gia
                đình tận hưởng kỳ nghỉ vui vẻ và ý nghĩa.
            </p>
        </div>
        <div>
            <h2>Cách tốt nhất để trải nghiệm Sun World Bà Nà Hills là gì?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>
                Để trải nghiệm tốt nhất Sun World Bà Nà Hills, bạn nên bắt đầu bằng
                việc lên đỉnh bằng cáp treo. Từ đó, bạn có thể tận hưởng khung cảnh
                tuyệt đẹp của núi Bà Nà và vùng đất Đà Nẵng từ trên cao. Sau đó, hãy
                khám phá các điểm tham quan và hoạt động tại khu du lịch. Bạn có thể
                tham gia các trò chơi giải trí, thăm các công trình kiến trúc độc đáo
                như Cầu Vàng và Chùa Linh Ứng, hay thưởng thức ẩm thực đặc sản tại các
                nhà hàng và quán cà phê trên đỉnh núi. Đừng quên dành thời gian để
                tham quan các khu vườn hoa và tham gia các hoạt động giải trí như
                trượt tuyết và lướt sóng trên không. Bằng cách tận hưởng mọi điểm đặc
                sắc của Sun World Bà Nà Hills, bạn sẽ có một trải nghiệm đáng nhớ tại
                địa điểm này.
            </p>
        </div>
        <div>
            <h2>Có phù hợp cho du khách có ngân sách hạn chế không?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>
                Sun World Bà Nà Hills là một điểm đến tuyệt vời cho du khách có ngân
                sách hạn chế. Công viên giải trí này cung cấp nhiều hoạt động thú vị
                và trải nghiệm độc đáo mà không làm tốn quá nhiều tiền. Du khách có
                thể tham gia các hoạt động như đi cáp treo, thăm các khu vườn hoa đẹp
                mắt, tham quan các công trình kiến trúc độc đáo và thưởng thức ẩm thực
                đặc sản. Với mức giá vé hợp lý và nhiều ưu đãi đặc biệt, du khách có
                thể trải nghiệm một ngày vui chơi tuyệt vời tại Sun World Bà Nà Hills
                mà không cần phải lo lắng về ngân sách. Đây là một điểm đến lý tưởng
                cho những ai muốn khám phá và trải nghiệm văn hóa địa phương mà không
                làm tốn quá nhiều tiền.
            </p>
        </div>
        <div>
            <h2>
                Thời điểm nào trong năm là thích hợp nhất để tham quan Sun World Bà Nà
                Hills?
            </h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>
                Sun World Bà Nà Hills là một điểm đến hấp dẫn quanh năm, tuy nhiên, có
                một số thời điểm trong năm được coi là thích hợp nhất để tham quan.
                Tháng 3 đến tháng 9 là mùa hè ở Đà Nẵng, và đây là thời gian tốt nhất
                để trải nghiệm Sun World Sun World Bà Nà Hills. Trong khoảng thời gian
                này, thời tiết ấm áp và mát mẻ, không quá nóng hoặc lạnh. Ngoài ra, từ
                tháng 10 đến tháng 12 cũng là một thời điểm tốt để tham quan, vì thời
                tiết mát mẻ và không quá đông. Tuy nhiên, nếu bạn muốn tránh đông đúc
                và muốn tận hưởng không gian yên tĩnh hơn, bạn có thể xem xét tham
                quan vào các tháng khác trong năm. Dù bạn đến vào thời điểm nào, Sun
                World Bà Nà Hills sẽ mang đến cho bạn những trải nghiệm tuyệt vời với
                cảnh quan tuyệt đẹp và các hoạt động thú vị.
            </p>
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
                    <li><strong>Phone:</strong><span>0879636334</span></li>
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
                    <li>
                        <a href="#!"><i class="fa-solid fa-angle-right"></i>Sản phẩm nổi bật</a>
                    </li>
                    <li>
                        <a href="#!"><i class="fa-solid fa-angle-right"></i>Sản phẩm khuyến mãi</a>
                    </li>
                    <li>
                        <a href="#!"><i class="fa-solid fa-angle-right"></i>Tất cả sản phẩm</a>
                    </li>
                </ul>
            </div>
            <!-- column3 -->
            <div class="column">
                <h3 class="tittle">Chính sách dịch vụ</h3>
                <ul class="list">
                    <li>
                        <a href="#!"><i class="fa-solid fa-angle-right"></i>Trang chủ </a>
                    </li>
                    <li>
                        <a href="#!"><i class="fa-solid fa-angle-right"></i>Bạn muốn đi đâu</a>
                    </li>
                    <li>
                        <a href="#!"><i class="fa-solid fa-angle-right"></i>Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#!"><i class="fa-solid fa-angle-right"></i>Blogs</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-angle-right"></i>Liên hệ</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-angle-right"></i>Khách sạn</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="./../js/banahills.js"></script>
</body>

</html>