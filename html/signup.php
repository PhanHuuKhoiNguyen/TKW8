<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="./../css/signup-mobile.css"
      media="(max-width: 600px)"
    />

    <!-- CSS cho máy tính bảng (từ 601px đến 1024px) -->

    <!-- CSS cho máy tính để bàn (từ 1025px trở lên) -->
    <link
      rel="stylesheet"
      href="./../css/signup.css"
      media="(min-width: 601px)"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up">
        <form id="signUpForm">
          <h1>Đăng nhập</h1>
          <div class="social-icons">
            <a href="" class="icon"><i class="fa-brands fa-tiktok"></i></a>
            <a href="" class="icon"><i class="fa-brands fa-instagram"></i></a>
            <a href="" class="icon"><i class="fa-brands fa-facebook"></i></a>
            <a href="" class="icon"><i class="fa-brands fa-github"></i></a>
          </div>
          <input
            type="text"
            name="username"
            placeholder="Tên tài khoản"
            required
          />
          <input
            type="password"
            name="password"
            placeholder="Mật khẩu"
            required
          />
          <a href="#!">Quên mật khẩu?</a>
          <button type="button" id="loginBtn">Đăng Nhập</button>
          <a href="./Home_page.html">Quay lại trang chủ</a>
        </form>
      </div>
      <div class="form-container sign-in">
        <form id="signInForm">
          <h1>Tạo tài khoản</h1>
          <div class="social-icons">
            <a href="" class="icon"><i class="fa-brands fa-tiktok"></i></a>
            <a href="" class="icon"><i class="fa-brands fa-instagram"></i></a>
            <a href="" class="icon"><i class="fa-brands fa-facebook"></i></a>
            <a href="" class="icon"><i class="fa-brands fa-github"></i></a>
          </div>
          <input
            type="text"
            name="username"
            placeholder="Tên tài khoản"
            required
          />
          <input
            type="password"
            name="password"
            placeholder="Mật khẩu"
            required
          />
          <input
            type="password"
            name="confirmPassword"
            placeholder="Xác nhận mật khẩu"
            required
          />
          <button type="button" id="registerBtn">Đăng Ký</button>
          <a href="./Home_page.html">Quay lại trang chủ</a>
        </form>
      </div>
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Xin Chào,Bạn!</h1>
            <p>Đăng ký với thông tin cá nhân để sử dụng tất cả các tính năng</p>
            <button class="hidden" id="login">Đăng Ký</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Chào Mừng Trở Lại!</h1>
            <p>Nhập thông tin cá nhân để sử dụng tất cả các tính năng</p>
            <button class="hidden" id="register">Đăng Nhập</button>
          </div>
        </div>
      </div>
    </div>
    <script src="./../js/signup.js"></script>
  </body>
</html>