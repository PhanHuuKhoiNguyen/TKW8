<?php 
session_start();
  $mess_username=isset($_SESSION["mess_username"]) ? $_SESSION["mess_username"] : "";
  $mess_email=isset($_SESSION["mess_email"]) ? $_SESSION["mess_email"] : "";
  $mess_password=isset($_SESSION["mess_password"]) ? $_SESSION["mess_password"] : "";

  $mess_username_login=isset($_SESSION["mess_username_login"]) ? $_SESSION["mess_username_login"] : "";
  $mess_password_login=isset($_SESSION["mess_password_login"]) ? $_SESSION["mess_password_login"] : "";

  $username=isset($_SESSION["input_username"]) ? $_SESSION["input_username"] : "";
  $password=isset($_SESSION["password"]) ? $_SESSION["password"] : "";
  $confirm_password=isset($_SESSION["confirm_password"]) ? $_SESSION["confirm_password"] : "";
  $email=isset($_SESSION["input_email"]) ? $_SESSION["input_email"] : "" ;
  unset($_SESSION["mess_username"]);
  unset($_SESSION["mess_email"]);
  unset($_SESSION["mess_password"]);

  unset($_SESSION["mess_username_login"]);
  unset($_SESSION["mess_password_login"]);
  
  unset($_SESSION["input_username"]);
  unset( $_SESSION["password"]);
  unset( $_SESSION["confirm_password"]);
  unset( $_SESSION["input_email"]);

  ?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./../css/login-form-mobile.css" media="(max-width: 600px)" />

    <link rel="stylesheet" href="./../css/loginstd.css" media="(min-width: 601px)" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form id="signUpForm" method="post" action="./../model/index.php" enctype="multipart/form-data">
                <h1>Tạo tài khoản</h1>
                <div class="social-icons">
                    <a href="" class="icon"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-github"></i></a>
                </div>
                <input type="hidden" name="action" value="sign_up">
                <input type="text" name="username" placeholder="Tên tài khoản" value="<?php echo $username ?>" />
                <label for=""><?php echo $mess_username  ?></label>
                <input type="email" name="email" placeholder="Email" id="" value="<?php echo $email ?>">
                <label for=""><?php echo $mess_email ?></label>
                <input type="password" name="password" placeholder="Mật khẩu" value="<?php echo $password ?>" />
                <label for=""><?php echo $mess_password ?></label>
                <input type="password" name="confirmPassword" placeholder="Xác nhận mật khẩu"
                    value="<?php echo $confirm_password?>" />
                <label for=""><?php echo $mess_password ?></label>
                <button type="submit" id="registerBtn">Đăng Ký</button>
                <a href="./Home_page.php">Quay lại trang chủ</a>
            </form>
        </div>
        <div class="form-container sign-in">
            <form id="signInForm" method="post" action="./../model/index.php">
                <h1>Đăng Nhập</h1>
                <div class="social-icons">
                    <a href="" class="icon"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-github"></i></a>
                </div>
                <input type="hidden" name="action" value="login">
                <input type="text" name="username" placeholder="Tên tài khoản" value="<?php echo $username ?>" />
                <label for=""><?php echo $mess_username_login ?></label>
                <input type="password" name="password" placeholder="Mật khẩu" value="<?php echo $password?>" />
                <label for=""><?php echo $mess_password_login ?></label>
                <a href="#!">Quên mật khẩu?</a>
                <button type="submit" id="loginBtn">Đăng Nhập</button>
                <a href="./Home_page.php">Quay lại trang chủ</a>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Xin Chào, Bạn!</h1>
                    <p>Đăng ký với thông tin cá nhân để sử dụng tất cả các tính năng</p>
                    <button class="hidden" id="register">Đăng Ký</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Chào Mừng Trở Lại!</h1>
                    <p>Nhập thông tin cá nhân để sử dụng tất cả các tính năng</p>
                    <button class="hidden" id="login">Đăng nhập</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./../js/signup.js"></script>

</body>

</html>