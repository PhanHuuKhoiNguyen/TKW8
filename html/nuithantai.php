<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./../css/nuithantai-mobile.css" media="(max-width: 700px)" />

    <link rel="stylesheet" href="./../css/nuithantai-tablet.css" media="(min-width: 701px) and (max-width: 1024px)" />

    <link rel="stylesheet" href="./../css/nuithantai.css" media="(min-width: 1025px)" />
    <link rel="shortcut icon" type="" href="./img/icons8-tourism-20.png" />
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
    <div class="anh">
        <div class="content">
            <p>Núi thần tài</p>
            <span class="span1"><i class="fa-sharp fa-solid fa-location-dot"></i> Đà Nẵng,
                VIETNAM</span>
            <span class="span2">Núi Thần Tài (hay Công Viên Suối Khoáng Nóng Thần Tài) toạ lạc tại
                thôn Phú Túc, xã Hoà Phú, huyện Hoà Vang, thành phố...</span>

            <a href=""><u>Xem thêm</u> </a>
            <i id="triangle" class="fa-solid fa-caret-left"></i>
            <span class="span3">Thời gian tuyệt nhất <br />
                để đến</span>
            <span class="span4">Thời lượng lý tưởng</span>
            <span class="span5">THG 2</span>
            <span class="span6">3 ngày</span>
            <span class="span7">Lễ hội pháo hoa quốc tế Đà Nẵng </span>
        </div>
        <div class="list1">
            <div class="item">
                <img src="./../img/Núi thần tài/14934312475544.jpg" alt="" />
            </div>
            <div class="item">
                <img src="./../img/Núi thần tài/cong-vien-nuoc-nui-than-tai-4.jpg" alt="" />
            </div>
            <div class="item">
                <img src="./../img/Núi thần tài/gioi-thieu-ve-nui-than-tai-12.jpg" alt="" />
            </div>
            <div class="item">
                <img src="./../img/Núi thần tài/IMG_9358(1).jpg" alt="" />
            </div>
            <div class="item">
                <img src="./../img/Núi thần tài/png.png" alt="" />
            </div>
        </div>
        <div class="slider">
            <div class="list">
                <div class="item">
                    <img src="./../img/Núi thần tài/14934312475544.jpg" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/Núi thần tài/cong-vien-nuoc-nui-than-tai-4.jpg" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/Núi thần tài/gioi-thieu-ve-nui-than-tai-12.jpg" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/Núi thần tài/IMG_9358(1).jpg" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/Núi thần tài/png.png" alt="" />
                </div>
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
            <p>
                Núi Thần Tài (hay Công Viên Suối Khoáng Nóng Thần Tài) toạ lạc tại
                thôn Phú Túc, xã Hoà Phú, huyện Hoà Vang, thành phố Đà Nẵng. Đây là
                khu du lịch sinh thái nổi tiếng ở Đà Nẵng, trực thuộc khu bảo tồn
                thiên nhiên Bà Nà Núi Chúa. Với tổng diện tích hơn 60 héc-ta, có thể
                miêu tả Công Viên Suối Khoáng Nóng Thần Tài như một “ốc đảo nghỉ
                dưỡng” giữa không gian rừng nguyên sinh bạt ngàn.
            </p>
        </div>
    </div>
    <h1 class="h1">8 hoạt động ở Sun World Bà Nà Hills</h1>
    <div class="dichvu">
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
            <img src="./../img/Núi thần tài/14934312475544.jpg" alt="" />
            <p>Tour du lịch Núi Thần Tài Đà Nẵng 3N2Đ</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(3,181) 30k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 3,932,500</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/Núi thần tài/Cong-Vien-Suoi-Khoang-Nong-Nui-Than-Tai-7.jpg" alt="" />
            <p>Vé tham quan Núi thần tài Đà Nẵng</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(3,181) 30k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 1,156,500</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/Núi thần tài/danang_tam-onsen-nui-than-tai.jpg" alt="" />
            <p>Tour Ngày Tùy Chọn Tham Quan Núi thần tài Đà Nẵng</p>
            <span>Bán chạy</span><span>Hoàn tiền dễ dàng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.6</span>(316) 8k+ Đã được đặt
            </p>
            <p><u>đ</u> 722,500</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/Núi thần tài/gia-ve-nui-than-tai-da-nang-2020.1.jpg" alt="" />
            <p>Private Check-out Thần Tài Moutain</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.9</span>(200)+ Đã được đặt
            </p>
            <p><u>đ</u> 1,519,000</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/Núi thần tài//huyetlongho.jpg" alt="" />
            <p>Tour Trong Ngày Cao Cấp Núi thần tài Đà Nẵng</p>
            <span>Bán chạy</span><span>Xác nhận tức thời</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.4</span>(459) 5k+ Đã được đặt
            </p>
            <p><u>đ</u> 1,608,400</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/Núi thần tài/khach-san-ebisu-nui-than-tai-da-nang.jpg" alt="" />
            <p>Tour hướng dẫn tham quan Núi thần tài</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(53) 1k+ Đã được đặt
            </p>
            <p><u>đ</u> 1,759,000</p>
            <button class="btn">Mua ngay</button>
        </div>
    </div>
    <h1>Top điểm du lịch Sun World Ba Na Hills</h1>
    <div class="diadiemdulich">
        <div>
            <img src="./../img/Núi thần tài/dongsongtinhyeu.jpg" alt="" />
            <p>Dòng sông tình yêu</p>
            <span>Dòng sông tình yêu là một trong những điểm du lịch nổi bật tại núi
                Thần Tài. Đây là dòng suối trong vắt uốn lượn, tạo thành những khúc
                quanh đầy lãng mạn. Nơi đây trở thành điểm hẹn lý tưởng cho các cặp
                đôi, với khung...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/Núi thần tài/huyetlongho.jpg" alt="" />
            <p>Huyệt Long Hồ</p>
            <span>Huyệt Long Hồ được mệnh danh là "Vịnh Hạ Long thu nhỏ" với những hòn
                đá lởm chởm, uốn lượn như rồng quấn quýt trên mặt hồ. Khung cảnh yên
                tĩnh, thoáng đãng tạo nên một bầu không khí tĩnh lặng....</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/Núi thần tài/denthantai.jpg" alt="" />
            <p>Đền thần tài</p>
            <span>Đền Thần Tài là một trong những điểm tham quan tâm linh quan trọng
                tại núi Thần Tài. Đây là nơi thờ phụng vị thần bảo hộ, mang ý nghĩa
                tâm linh sâu sắc với người dân địa phương...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/Núi thần tài/congviennuoc.jpg" alt="" />
            <p>Công viên nước</p>
            <span>Công viên nước tại núi Thần Tài là điểm đến lý tưởng cho gia đình và
                trẻ em. Nơi đây có nhiều trò chơi nước, như trượt ống, bể bơi, và các
                hoạt động vui chơi dưới nước sôi động...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/Núi thần tài/khunglong.jpg" alt="" />
            <p>Công viên khủng long</p>
            <span>Công viên khủng long là một điểm nhấn độc đáo của núi Thần Tài. Tại
                đây, du khách sẽ được "du ngoạn" trong khu vực trưng bày các mô hình
                khủng long sống động, mang lại cảm giác như được quay trở về thời kỳ
                tiền sử ...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/Núi thần tài/truongtruongtho.jpg" alt="" />
            <p>Trứng trường thọ</p>
            <span>Trướng Trường Thọ là một khu vực độc đáo tại núi Thần Tài, nơi du
                khách có thể chiêm ngưỡng những tác phẩm điêu khắc hoành tráng. Các
                bức tượng, hình ảnh linh vật được chạm trổ cầu kỳ, thể hiện nét văn
                hóa độc...
            </span>
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
                    <p class="item-danh-gia">
                        Đánh giá cho:
                        <a href="">Tour Ngày Tham Quan Bà Nà Hills Từ Đà Nẵng</a>
                    </p>
                    <p class="item-ten-khach">Angielou ****** Đăng 11 ngày trước</p>
                    <p class="item-comment">
                        Hành trình tốt. Xe bán tải gọn gàng. Hướng dẫn viên du lịch, ông
                        Chai, rất lôi cuốn, xen vào đó là những câu chuyện cười. Anh ấy đã
                        cố gắng hết sức để tập hợp và phân nhóm mọi người, nhưng mỗi nhóm
                        nên làm theo hướng dẫn và đi cùng nhóm. Món quà lưu niệm của anh
                        vào cuối chuyến đi thật bất ngờ. Nhìn chung, đáng đồng tiền bát
                        gạo.
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
                    <p class="item-danh-gia">
                        Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a>
                    </p>
                    <p class="item-ten-khach">Người dùng TRAVLES Đăng 7 ngày trước</p>
                    <p class="item-comment">
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
                    <p class="item-ten-khach">Người dùng TRAVLES Đăng 7 ngày trước</p>
                    <p class="item-comment">
                        Hướng dẫn viên Long của chúng tôi thật tuyệt vời, anh ấy có kinh
                        nghiệm và đưa chúng tôi di chuyển để tránh đám đông. Hành trình
                        thực sự có giá trị đồng tiền. Giải thích dài dòng và lập kế hoạch
                        vượt xa sự mong đợi của chúng tôi! Nhóm 9 người của chúng tôi thực
                        sự thích thú. Cảm ơn
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
                    <p class="item-danh-gia">
                        Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a>
                    </p>
                    <p class="item-ten-khach">Cleopatra ****** Đăng 58 ngày trước</p>
                    <p class="item-comment">
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
                    <p class="item-danh-gia">
                        Đánh giá cho:<a href="">Private Check-out Tour:Bà Nà Hills,Da Nang Airport Drop-off</a>
                    </p>
                    <p class="item-ten-khach">Người dùng TRAVLES Đăng 40 ngày trước</p>
                    <p class="item-comment">
                        Buổi sáng đón khách suôn sẻ,không cần lo lắng về hành lý, ra vào
                        thuận tiện vì tôi đã nhận được vé điện tử đi Bà Nà Hills,dịch vụ
                        mát-xa tốt, bữa tối là bữa ăn Việt Nam tự nấu và tôi cũng rất
                        thích bia.
                    </p>
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
                    <p class="item-danh-gia">
                        Đánh giá cho:
                        <a href="">Tour Ngày Tham Quan Bà Nà Hills Từ Đà Nẵng</a>
                    </p>
                    <p class="item-ten-khach">Angielou ****** Đăng 11 ngày trước</p>
                    <p class="item-comment">
                        Hành trình tốt. Xe bán tải gọn gàng. Hướng dẫn viên du lịch, ông
                        Chai, rất lôi cuốn, xen vào đó là những câu chuyện cười. Anh ấy đã
                        cố gắng hết sức để tập hợp và phân nhóm mọi người, nhưng mỗi nhóm
                        nên làm theo hướng dẫn và đi cùng nhóm. Món quà lưu niệm của anh
                        vào cuối chuyến đi thật bất ngờ. Nhìn chung, đáng đồng tiền bát
                        gạo.
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
                    <p class="item-danh-gia">
                        Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a>
                    </p>
                    <p class="item-ten-khach">Người dùng TRAVLES Đăng 7 ngày trước</p>
                    <p class="item-comment">
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
                    <p class="item-ten-khach">Người dùng TRAVLES Đăng 7 ngày trước</p>
                    <p class="item-comment">
                        Hướng dẫn viên Long của chúng tôi thật tuyệt vời, anh ấy có kinh
                        nghiệm và đưa chúng tôi di chuyển để tránh đám đông. Hành trình
                        thực sự có giá trị đồng tiền. Giải thích dài dòng và lập kế hoạch
                        vượt xa sự mong đợi của chúng tôi! Nhóm 9 người của chúng tôi thực
                        sự thích thú. Cảm ơn
                    </p>
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
                    <p class="item-danh-gia">
                        Đánh giá cho: <a href="">Tour Bà Nà Hills 1 Ngày Từ Đà Nẵng</a>
                    </p>
                    <p class="item-ten-khach">Cleopatra ****** Đăng 58 ngày trước</p>
                    <p class="item-comment">
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
                    <p class="item-danh-gia">
                        Đánh giá cho:<a href="">Private Check-out Tour:Bà Nà Hills,Da Nang Airport Drop-off</a>
                    </p>
                    <p class="item-ten-khach">Người dùng TRAVLES Đăng 40 ngày trước</p>
                    <p class="item-comment">
                        Buổi sáng đón khách suôn sẻ,không cần lo lắng về hành lý, ra vào
                        thuận tiện vì tôi đã nhận được vé điện tử đi Bà Nà Hills,dịch vụ
                        mát-xa tốt, bữa tối là bữa ăn Việt Nam tự nấu và tôi cũng rất
                        thích bia.
                    </p>
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
                    <div class="item1">
                        <img src="./../img/banahill/ba-na-1hills.jpg" alt="" /><a>Bà Nà Hills</a>
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
                Núi Thần Tài (hay Công Viên Suối Khoáng Nóng Thần Tài) toạ lạc tại
                thôn Phú Túc, xã Hoà Phú, huyện Hoà Vang, thành phố Đà Nẵng. Đây là
                khu du lịch sinh thái nổi tiếng ở Đà Nẵng, trực thuộc khu bảo tồn
                thiên nhiên Bà Nà Núi Chúa. Với tổng diện tích hơn 60 héc-ta, có thể
                miêu tả Công Viên Suối Khoáng Nóng Thần Tài như một “ốc đảo nghỉ
                dưỡng” giữa không gian rừng nguyên sinh bạt ngàn, với khí hậu quanh
                năm ôn hoà khác hẳn với thời tiết miền Trung khắc nghiệt. Tận dụng
                nguồn suối khoáng nóng tự nhiên, nhiều hoạt động chăm sóc sắc đẹp, sức
                khoẻ, vui chơi và giải trí ở Núi Thần Tài đang rất “được lòng” du
                khách lẫn người dân địa phương; đơn cử như spa, dịch vụ tắm nước
                khoáng nóng, tắm bùn, tắm trà, công viên nước,…
            </p>
        </div>
        <a href="#!" class="xemthem"><u>Xem thêm</u></a>
        <a href="#!" class="xemithon"><u>Xem ít hơn</u></a>
    </div>
    <h1>Những câu hỏi phổ biến về Núi Thần Tài</h1>

    <div class="thongtin">
        <div>
            <h2>Núi Thần Tài thành phố Đà Nẵng ở đâu ?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>
                Bán Đảo Sơn Trà là một bán đảo nằm ở phường Thọ Quang, quận Sơn Trà,
                phía bắc thành phố Đà Nẵng, tỉnh Quảng Nam, miền Trung Việt Nam. Bản
                Đảo này nằm giữa biển Đông và thành phố Đà Nẵng, tạo ra một vùng đất
                nằm ngay tại cửa ngõ biển của thành phố.
            </p>
        </div>
        <div>
            <h2>Cách di chuyển đến Núi thần tài từ Đà Nẵng?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>
                Bán đảo Sơn Trà nằm ở phía đông bắc thành phố Đà Nẵng, cách trung tâm
                thành phố khoảng 10 kilomét. Bạn có thể đến Bán Đảo Sơn Trà bằng xe ô
                tô hoặc xe máy từ trung tâm thành phố Đà Nẵng. Khi chọn các tour du
                lịch bán đảo Sơn Trà trên TRAVLES, bạn sẽ được cung cấp dịch vụ đưa
                đón miễn phí từ khách sạn đến đảo. Tham khảo thêm thông tin ở mục “Chi
                tiết gói dịch vụ” của các tour bên trên.
            </p>
        </div>
        <div>
            <h2>Tham quan Núi thần tài mùa nào đẹp nhất?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>
                Thời gian lý tưởng để đi du lịch đảo Sơn Trà là vào mùa khô, khoảng từ
                tháng 2 đến tháng 8. Lúc này thời tiết khô ráo, tạo điều kiện thuận
                lợi cho việc di chuyển và tham quan đảo. Tuy nhiên, tránh thời gian từ
                tháng 10 đến tháng 11, khi bão có thể ảnh hưởng đến kỳ nghỉ của bạn.
                Đảm bảo kiểm tra dự báo thời tiết trước khi bạn đến để có một trải
                nghiệm tốt nhất tại Núi Sơn Trà.
            </p>
        </div>
        <div>
            <h2>Ăn gì ở Núi thần tài thành phố Đà Nẵng?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>
                Bán đảo Sơn Trà ở Đà Nẵng nổi tiếng với ẩm thực phong phú như hải sản
                tươi ngon và đa dạng như tôm hùm, tôm sú, cá mú, bạch tuộc, cá lá,
                cua, ghẹ, cá chình. Ngoài ra, du khách cũng có thể thưởng thức thịt
                thú rừng và các loại rau rừng tự nhiên tại đảo. Một đặc sản khác của
                Núi Sơn Trà là rượu dừa, được làm từ nếp cái và men ủ trong trái dừa
                nhỏ, giữ nguyên được vị thanh ngọt dễ chịu của nước dừa.
            </p>
        </div>
        <div>
            <h2>Cần chuẩn bị những gì cho chuyến du lịch Núi thần tài?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>
                Bạn nên chuẩn bị quần áo thoải mái và phù hợp thời tiết, mũ, kính râm,
                kem chống nắng, thuốc cá nhân và đồ bơi nếu bạn muốn tham gia chèo
                kayak hoặc tắm biển. Vì nhiều nơi ở đây không chấp nhận thanh toán
                bằng thẻ, bạn nên cầm theo một ít tiền mặt cho các chi phí cá nhân như
                mua sắm hoặc tham gia các trò chơi ngoài. *Đừng quên lưu voucher đặt
                tour hay hoạt động trên điện thoại và mang giấy tờ cá nhân như CCCD để
                tham gia.
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

    <script src="./../js/nuithantai.js"></script>
</body>

</html>