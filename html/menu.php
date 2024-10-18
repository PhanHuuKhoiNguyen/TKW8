<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    <header>
        <div class="header_top">
          <div><h1>TRAVELS</h1></div>
          <div>
            <input type="search" name="" id="searchInput" placeholder="" /><i class="fa-solid fa-magnifying-glass"></i>
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
                    <a href="#">Giỏ hàng </a>
                </li>
            </ul>
          </div>

          <a href="./login-form.php" id="dangnhap">Đăng nhập</a>
        </div>
    </header>
    <header class="headermobile">
        <ul>
          <li><i id="openmenu" class="fa-solid fa-bars"></i></li>
          <li><h2>TRAVELS</h2></li>
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

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          var dropdown = document.querySelector('.dropbtn');
          var dropdownContent = dropdown.nextElementSibling;

          // Xử lý sự kiện khi nhấn vào nút dropdown
          dropdown.addEventListener('click', function(event) {
              event.preventDefault();
              dropdownContent.style.display = 
                  dropdownContent.style.display === 'block' ? 'none' : 'block';
          });

          // Xử lý sự kiện khi nhấn ra ngoài dropdown
          document.addEventListener('click', function(event) {
              // Nếu nhấn vào bất cứ đâu mà không phải là nút dropdown hoặc menu con
              if (!dropdown.contains(event.target) && !dropdownContent.contains(event.target)) {
                  dropdownContent.style.display = 'none'; // Ẩn dropdown
              }
          });
      });
    </script>
</body>
</html>