<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="./../css/bandaosontra-mobile.css" media="(max-width: 700px)" />

    <link rel="stylesheet" href="./../css/bandaosontra-tablet.css" media="(min-width: 701px) and (max-width: 1024px)" />

    <link rel="stylesheet" href="./../css/bandaosontra.css" media="(min-width: 1025px)" />

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
            <p>Bán Đảo Sơn Trà</p>
            <span class="span1"><i class="fa-sharp fa-solid fa-location-dot"></i> Đà Nẵng,
                VIETNAM</span>
            <span class="span2">Với sự hoà quyện của phong cảnh thiên nhiên tuyệt đẹp, không khí
                thanh bình, và hệ sinh thái động thực vật đa dạng, bán đảo Sơn Trà
                thực sự là...</span>

            <a href=""><u>Xem thêm</u> </a>
            <i id="triangle" class="fa-solid fa-caret-left"></i>
            <span class="span3">Thời gian tuyệt nhất <br />để đến</span>
            <span class="span4">Thời lượng lý tưởng</span>
            <span class="span5">THG 2</span>
            <span class="span6">3 ngày</span>
            <span class="span7">Lễ hội Cầu Ngư </span>
        </div>
        <div class="list1">
            <div class="item">
                <img src="./../img/bandaosontra/mattronmoc.jpg" alt="" />
            </div>
            <div class="item">
                <img src="./../img/bandaosontra/ma2flmh7fal5visbuiy3.webp" alt="" />
            </div>
            <div class="item">
                <img src="./../img/bandaosontra/nmhfgljirsuyikkmhodl.webp" alt="" />
            </div>
            <div class="item">
                <img src="./../img/bandaosontra/nukmbza93ykzeecoxd21.webp" alt="" />
            </div>
            <div class="item">
                <img src="./../img/bandaosontra/po4mg5mmint3rhqt9qc8.webp" alt="" />
            </div>
        </div>
        <div class="slider">
            <div class="list">
                <div class="item">
                    <img src="./../img/bandaosontra/mattronmoc.jpg" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/bandaosontra/ma2flmh7fal5visbuiy3.webp" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/bandaosontra/nmhfgljirsuyikkmhodl.webp" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/bandaosontra/nukmbza93ykzeecoxd21.webp" alt="" />
                </div>
                <div class="item">
                    <img src="./../img/bandaosontra/po4mg5mmint3rhqt9qc8.webp" alt="" />
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
                Với sự hoà quyện của phong cảnh thiên nhiên tuyệt đẹp, không khí thanh
                bình, và hệ sinh thái động thực vật đa dạng, bán đảo Sơn Trà thực sự
                là điểm đến mà bạn không thể bỏ lỡ khi đặt chân đến thành phố Đà Nẵng.
                Hãy chuẩn bị tinh thần cho một chuyến du ngoạn bán đảo Sơn Trà đầy màu
                sắc, nơi bạn có thể hòa mình vào thiên nhiên hoang sơ, đắm chìm trong
                dòng nước mát lạnh của biển cả
            </p>
        </div>
    </div>
    <h1 class="h1">12 hoạt động ở Bán đảo Sơn Trà</h1>

    <div class="dichvu">
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
            <img src="./../img/bandaosontra/uce3uq8s0kwnlv6oukko.webp" alt="" />
            <p>Half-day Son Tra Penisula Snorkeling & Fishing Tour</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(3,181) 30k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 3,932,500</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/bandaosontra/t8nq4sdopdnwk5lffqpp.webp" alt="" />
            <p>Vé tham quan Bán Đảo Sơn Trà Đà Nẵng</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(3,181) 30k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 1,156,500</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/bandaosontra/po4mg5mmint3rhqt9qc8.webp" alt="" />
            <p>Tour Ngày Tùy Chọn Tham Quan Bán Đảo Sơn Trà...</p>
            <span>Bán chạy</span><span>Hoàn tiền dễ dàng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.6</span>(316) 8k+ Đã được đặt
            </p>
            <p><u>đ</u> 722,500</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/bandaosontra/nukmbza93ykzeecoxd21.webp" alt="" />
            <p>Private Check-out Tour:Son Tra Peninsula...</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.9</span>(200)+ Đã được đặt
            </p>
            <p><u>đ</u> 1,519,000</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/ban-dao-son-tra-3-1024x550.webp" alt="" />
            <p>Tour Trong Ngày Cao Cấp Núi Sơn Trà Đà Nẵng...</p>
            <span>Bán chạy</span><span>Xác nhận tức thời</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.4</span>(459) 5k+ Đã được đặt
            </p>
            <p><u>đ</u> 1,608,400</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/bandaosontra/nmhfgljirsuyikkmhodl.webp" alt="" />
            <p>Tour hướng dẫn tham quan Bán Đảo Sơn Trà...</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.5</span>(53) 1k+ Đã được đặt
            </p>
            <p><u>đ</u> 1,759,000</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/bandaosontra/ma2flmh7fal5visbuiy3.webp" alt="" />
            <p>Tour tham quan lăn biển Sơn Trà Đà Nẵng</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.4</span>(19) 900+ Đã được đặt
            </p>
            <p><u>đ</u> 2,714,800</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/bandaosontra/du-lich-ban-dao-son-tra-da-nang-vietnam-04.jpg" alt="" />
            <p>Vé tham quan Chùa Linh Ưng Bán Đảo Sơn Trà</p>
            <span>Bán chạy</span><span>Xác nhận tức thời</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.7</span>(23k+) 700k+ Đã được
                đặt
            </p>
            <p><u>đ</u> 840,000</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/bandaosontra/1565707949-ban-dao-son-tra.jpg" alt="" />
            <p>Trải nghiệm"Bán Đaỏ Sơn Trà Đà Nẵng</p>
            <span>Bán chạy</span><span>Tour riêng</span>
            <p>
                <i class="fa-solid fa-star"></i><span>4.4</span>(414) 10k+ Đã được đặt
            </p>
            <p><u>đ</u> 840,000</p>
            <button class="btn">Mua ngay</button>
        </div>
        <div>
            <img src="./../img/bandaosontra/095907_son-tra-da-nang.jpg" alt="" />
            <p>3D2N Cắm trại ở Bán Đảo Sơn Trà</p>
            <span>Bán chạy</span><span>Hướng dẫn tiếng việt</span>
            <p><i class="fa-solid fa-star"></i><span>5.0</span> 50+ Đã được đặt</p>
            <p><u>đ</u> 4,294,000</p>
            <button class="btn">Mua ngay</button>
        </div>
    </div>
    <h1>Top điểm du lịch Bán đảo Sơn Trà Đà Nẵng</h1>
    <div class="diadiemdulich">
        <div>
            <img src="./../img/bandaosontra/chùa-linh-ứng.jpg" alt="" />
            <p>Chùa Linh Ứng</p>
            <span>Đây chính là địa điểm du lịch Đà Nẵng nổi tiếng nhất mà bạn có dịp
                ghé đến đầu tiên nếu xuất phát từ đường Hoàng Sa.Vì nằm gần Bãi
                Bụt,nên ngôi chùa này còn được gọi là chùa Linh Ứng Bãi Bụt...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/bandaosontra/1462869700_cay-da-ngan-nam-tuoi-1.jpg" alt="" />
            <p>Cây đa Ngàn Năm</p>
            <span>Trên đường check in đỉnh Bàn Cờ, bạn sẽ có dịp đi ngang qua vị trí
                cây đa ngàn năm tuổi rất nổi tiếng ở đây. Không chỉ có tuổi thọ lên
                đến ngàn năm, cây đa này còn có hình thù kỳ lạ, với nhiều gốc...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/bandaosontra/dinhbanco.jpg" alt="" />
            <p>Đỉnh bàn cờ</p>
            <span>Ở trên đỉnh của bán đảo Sơn Trà, có một địa điểm rất thu hút giới trẻ
                đó chính là đỉnh Bàn Cờ. Ở đây không chỉ nổi tiếng với khung cảnh
                thiên nhiên hùng vĩ, tựa chốn bồng lai tiên cảnh mà còn xuất...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/bandaosontra/ngonhaidang.jpg" alt="" />
            <p>Ngọn Hải Đăng Sơn Trà</p>
            <span>Còn được gọi là hải đăng Tiên Sa, ngọn hải đăng Sơn Trà nằm ở độ cao
                223m so với mực nước biển, được biết đến là một trong những ngọn hải
                đăng cổ đẹp nhất Việt Nam. Được Pháp xây dựng...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/bandaosontra/ghềnh bàng.jpg" alt="" />
            <p>Ghềnh Bàng</p>
            <span>Du lịch bán đảo Sơn Trà vốn nổi tiếng với Bãi Bụt, chùa Linh Ứng,
                đỉnh Bàn Cờ, Bãi Tiên Sa song có một điểm đến vẫn chưa được khai sáng,
                đó là Ghềnh Bàng. Dù là một địa điểm tuyệt đẹp...</span>
            <a href="">Khám phá <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
        <div>
            <img src="./../img/bandaosontra/hoxanhbuctranhsonthuyhuutinhgiualongdanang.webp" alt="" />
            <p>Hồ Xanh</p>
            <span>Nằm gần với vị trí Bãi Bụt có một địa điểm mang tên Hồ Xanh, một địa
                điểm du lịch Sơn Trà mới nổi lên gần đây. Hồ Xanh là hồ tự nhiên, bao
                bọc xung quanh nó là những hòn đá lớn nhỏ và cây...
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
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 7 ngày trước</p>
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
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 7 ngày trước</p>
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
                            Bán Đảo Sơn Trà đẹp mê hồn. Nơi này rất rộng lớn và là một nơi
                            huyền diệu như Disneyland và tôi thực sự đã yêu. Tôi không nghĩ
                            chúng tôi đã khám phá mọi nơi vì chúng tôi chỉ dành một ngày. Lời
                            khuyên của mình là nên đi xe riêng để có nhiều thời gian rảnh.
                            Phong cảnh rất đẹp và may mắn là thời tiết tốt nên chúng tôi đã
                            chụp được rất nhiều ảnh. Chắc chắn đáng để ghé thăm và rất khuyến
                            khích khi bạn ghé thăm Đà Nẵng.
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
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 40 ngày trước</p>
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
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 7 ngày trước</p>
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
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 7 ngày trước</p>
                        <p class="item-comment">
                            Hướng dẫn viên Long của chúng tôi thật tuyệt vời, anh ấy có kinh
                            nghiệm và đưa chúng tôi di chuyển để tránh đám đông. Hành trình
                            thực sự có giá trị đồng tiền. Giải thích dài dòng và lập kế hoạch
                            vượt xa sự mong đợi của chúng tôi! Nhóm 9 người của chúng tôi thực
                            sự thích thú. Cảm ơn
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
                        <p class="item-ten-khach">Người dùng TRAVELS Đăng 40 ngày trước</p>
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
                        <img src="./../img/Núi thần tài/14934312475544 (1).jpg" alt="" /><a>Núi thần tài</a>
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
            <h2>1. Địa điểm du lịch bán đảo Sơn Trà hấp dẫn</h2>
            <strong>1.1. Chùa Linh Ứng - Biểu tượng thiêng liêng và thanh khiết</strong>
            <p>
                Chùa Linh Ứng tại bán đảo Sơn Trà, là biểu tượng văn hóa và tâm linh
                nổi tiếng của thành phố Đà Nẵng. Đến với đảo, du khách có cơ hội đắm
                mình trong không gian tĩnh lặng và tâm linh tại chùa, nơi độ cao 693m
                so với mực nước biển tạo nên một khung cảnh tráng lệ. Đây cũng là nơi
                đặt bức tượng Phật Quan Thế m cao nhất Việt Nam, vươn cao tới 67m,
                hướng về phía đất liền nô nức.
            </p>
            <strong>1.2. Đỉnh Bàn Cờ</strong>
            <p>
                Được mệnh danh là “mắt thần Đông Dương” hay “viên ngọc quý của Đà
                Nẵng”, bán Đảo Sơn Trà nổi bật với ba mặt tiếp xúc với biển cả và mặt
                còn lại giáp với trung tâm thành phố. Từ đỉnh Bàn Cờ, du khách có thể
                chiêm ngưỡng toàn bộ khung cảnh hùng vĩ nơi đây, từ những toà nhà trọc
                trời trong khu phố sầm uất đến những rừng cây xanh mát và bãi biển cát
                trắng mịn màng dọc thành phố.
            </p>
            <strong>1.3. Hải Đăng Tiên Sa - Một trong những hải đăng cổ và đẹp nhất Việt
                Nam</strong>
            <p>
                Nằm ở độ cao 223 mét so với mực nước biển, ngọn hải đăng Sơn Trà là
                biểu tượng thể hiện sự hòa quyện giữa thiên nhiên và kiến trúc, tạo
                nên bức tranh hòa quyện tuyệt vời bên bờ đảo. Tại đây, du khách có thể
                tận hưởng tầm nhìn toàn cảnh của biển cả và cảm giác yên bình giữa
                những thảm cỏ xanh tươi.
            </p>
            <strong>1.4. Cây Đa Ngàn Năm Tuổi - Linh hồn bất tử trong rừng Sơn
                Trà</strong>
            <p>
                Nằm trong khu rừng nguyên sinh Sơn Trà, cây đa trở thành điểm dừng
                chân thú vị cho những chuyến du lịch sinh thái. Với khoảng 800 năm
                tuổi, cây đa trên bán đảo Sơn Trà là một chứng nhân sống về sự mãnh
                liệt và bền bỉ của thiên nhiên. Cùng thân cây to lớn, rễ phụ phát
                triển mạnh mẽ và tán lá rộng lớn, cây đa ngàn năm tuổi này là biểu
                tượng của sự kết nối giữa con người và thiên nhiên, mang trong mình
                hàng thế kỷ lịch sử.
            </p>
            <strong>1.5. Những bãi biển đẹp trên bán đảo Sơn Trà</strong>
            <p>
                Bán Đảo Sơn Trà không chỉ nổi tiếng với phong cảnh hữu tình mà còn có
                những bãi biển đẹp như tranh vẽ như Bãi Tiên Sa, Bãi Bụt và Bãi Đá
                Đen. Bạn có thể thả mình vào làn nước biển trong xanh, hay tắm nắng
                trên bãi cát trắng mịn màng và nhâm nhi một ly cocktail để tận hưởng
                những khoảnh khắc thư giãn và bình yên.
            </p>
            <h2>2. Hoạt động vui chơi HOT nhất trên bán đảo Sơn Trà</h2>
            <strong>Lặn ngắm san hô</strong>
            <p>
                Bán Đảo Sơn Trà không chỉ là vẻ đẹp trên cạn, mà còn hứa hẹn những
                trải nghiệm tuyệt vời dưới biển. Dưới sự hướng dẫn của những chuyên
                gia lặn biển, bạn sẽ được đắm chìm vào dòng nước biển trong vắt và
                những rạn san hô đầy màu sắc, tận hưởng cảm giác đặt chân vào thế giới
                tự do dưới đáy biển.
            </p>
            <strong>Du ngoạn trên du thuyền bán đảo Sơn Trà</strong>
            <p>
                Trải nghiệm du thuyền sang trọng xuyên qua làn nước biển xanh ngút
                ngàn và ngắm nhìn Bán Đảo Sơn Trà từ một góc nhìn hoàn toàn khác! Cảm
                nhận sự hùng vĩ của những đỉnh núi, thảm rừng xanh bát ngát, và bãi
                biển tuyệt đẹp trải dài, tạo nên một hành trình trên biển thú vị.
                Chuyến thưởng ngoạn trên du thuyền sẽ đưa bạn đến những địa điểm nổi
                tiếng như hải đăng Tiên Sa và các bãi biển tuyệt đẹp như Bãi Tiên Sa,
                Bãi Bụt, nơi bạn có thể thả mình vào làn nước biển trong xanh và tận
                hưởng sự thư thái của không gian biển xanh bao la.
            </p>
            <strong>Trải nghiệm dù lượn</strong>
            <p>
                Nếu bạn là người thích mạo hiểm, hãy thử trải nghiệm dù lượn trên bán
                đảo Sơn Trà. Bạn sẽ được bay trên đỉnh cao, tận hưởng cảm giác tự do
                và bay lượn giữa không trung. Từ độ cao này, bạn có thể ngắm nhìn toàn
                cảnh thành phố Đà Nẵng, bán đảo Sơn Trà, và biển xanh bao la dưới
                chân**
            </p>
            <strong>Thưởng thức hải sản tươi ngon</strong>
            <p>
                Không thể thiếu trong danh sách trải nghiệm tại bán đảo Sơn Trà là
                việc thưởng thức hải sản đậm đà bị miền Trung. Với bãi biển xung
                quanh, bạn sẽ được thoả mãn vị giác với những món hải sản thơm lừng và
                những bữa tiệc ẩm thực đáng nhớ bên bờ biển.
            </p>
        </div>
        <a href="#!" class="xemthem"><u>Xem thêm</u></a>
        <a href="#!" class="xemithon"><u>Xem ít hơn</u></a>
    </div>
    <h1>Những câu hỏi phổ biến về Bán Đảo Sơn Trà Đà Nẵng</h1>

    <div class="thongtin">
        <div>
            <h2>Bán Đảo Sơn Trà Thành Phố Đà Nẵng ở đâu?</h2>
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
            <h2>Cách di chuyển đến Bán Đảo Sơn Trà từ Đà Nẵng?</h2>
            <i id="up" class="fa-solid fa-chevron-up"></i>
            <i id="down" class="fa-solid fa-chevron-down"></i>
            <p>
                Bán đảo Sơn Trà nằm ở phía đông bắc thành phố Đà Nẵng, cách trung tâm
                thành phố khoảng 10 kilomét. Bạn có thể đến Bán Đảo Sơn Trà bằng xe ô
                tô hoặc xe máy từ trung tâm thành phố Đà Nẵng. Khi chọn các tour du
                lịch bán đảo Sơn Trà trên TRAVELS, bạn sẽ được cung cấp dịch vụ đưa
                đón miễn phí từ khách sạn đến đảo. Tham khảo thêm thông tin ở mục “Chi
                tiết gói dịch vụ” của các tour bên trên.
            </p>
        </div>
        <div>
            <h2>Tham quan Núi Sơn Trà mùa nào đẹp nhất?</h2>
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
            <h2>Ăn gì ở bán đảo Sơn Trà thành phố Đà Nẵng?</h2>
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
            <h2>Cần chuẩn bị những gì cho chuyến du lịch bán đảo Sơn Trà?</h2>
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

    <script src="./../js/bandaosontra.js"></script>
</body>

</html>