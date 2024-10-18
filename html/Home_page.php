<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>

    <link
      rel="stylesheet"
      href="./../css/homepage-mobile.css"
      media="(max-width: 700px)"
    />

    <link
      rel="stylesheet"
      href="./../css/homepage-tablet.css"
      media="(min-width: 701px) and (max-width: 1024px)"
    />

    <link
      rel="stylesheet"
      href="./../css/style.css"
      media="(min-width: 1025px)"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
  </head>
  <body>

    <?php
      include("menu.php");
    ?>

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

      <div class="buttons">
        <button class="prev">
          <i id="prev" class="fa-solid fa-chevron-left"></i>
        </button>
        <button class="next">
          <i id="next" class="fa-solid fa-chevron-right"></i>
        </button>
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
        <div>
          <i class="fa-solid fa-location-dot"></i>
          <p>Nơi đến ?</p>
          <select name="" id="">
            <option value="" check>Tìm nơi bạn muốn trải nghiệm...</option>
            <option value="">Bà Nà Hills</option>
            <option value="">Núi thần tài</option>
            <option value=""></option>
            <option value=""></option>
          </select>
        </div>
        <div>
          <i class="fa-regular fa-calendar"></i>
          <p>Thời gian ?</p>
          <select name="" id="">
            <option value="">Vui lòng chọn...</option>
          </select>
        </div>
        <i id="timkiem" class="fa-solid fa-magnifying-glass"></i>
      </div>
      <span class="span1">Trải nghiệm du lịch.</span
      ><span class="span2">Với nhiều chương trình hấp dẫn</span>
    </div>
    <div class="diemden">
      <h1>Điểm đến ưa thích</h1>
      <div class="scroll-container">
        <ul>
          <li>
            <a href="./banahills.html"
              ><img src="./../img/banahill/ba-na-1hills.jpg" alt="Bà Nà Hills"
            /></a>
            <h2>Bà Nà Hills</h2>
            <p>12 Tour</p>
          </li>
          <li>
            <a href="./bandaosontra.html"
              ><img
                src="./../img/bandaosontra/095907_son-tra-da-nang.jpg"
                alt="Bán đảo Sơn Trà"
            /></a>
            <h2>Bán đảo Sơn Trà</h2>
            <p>12 Tour</p>
          </li>
          <li>
            <a href="./nguhanhson.html"
              ><img
                src="./../img/nguhanhson/Bãi-biển-Non-Nước5.jpg"
                alt="Ngũ Hành Sơn"
            /></a>
            <h2>Ngũ Hành Sơn</h2>
            <p>12 Tour</p>
          </li>
          <li>
            <a href="./nuithantai.html"
              ><img
                src="./../img/Núi thần tài/14934312475544 (1).jpg"
                alt="Núi Thần Tài"
            /></a>
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
        <img
          src="./../img/Núi thần tài/cong-vien-nuoc-nui-than-tai-4.jpg"
          alt=""
        />
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
              <strong>Location:</strong
              ><span>470 Đ. Trần Đại Nghĩa Ngũ Hành Sơn Đà Nẵng,Việt Nam</span>
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
            </li>
          </ul>
        </div>
        <div class="column">
          <!-- column2 -->
          <h3 class="tittle">Về chúng tôi</h3>
          <ul class="list">
            <li>
              <a href="#!"
                ><i class="fa-solid fa-angle-right"></i>Sản phẩm nổi bật</a
              >
            </li>
            <li>
              <a href="#!"
                ><i class="fa-solid fa-angle-right"></i>Sản phẩm khuyến mãi</a
              >
            </li>
            <li>
              <a href="#!"
                ><i class="fa-solid fa-angle-right"></i>Tất cả sản phẩm</a
              >
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
              <a href="#!"
                ><i class="fa-solid fa-angle-right"></i>Bạn muốn đi đâu</a
              >
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
    <script src="./../js/main.js"></script>
  </body>
</html>
