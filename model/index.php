<?php
require("database.php");
require("User.php");
require("User_db.php");
session_start();

$action=filter_input(INPUT_POST,"action");
if($action=="sign_up"){
  $input_username = filter_input(INPUT_POST, "username");
  $password = filter_input(INPUT_POST, "password");
  $confirm_password = filter_input(INPUT_POST, "confirmPassword");
  $input_email = filter_input(INPUT_POST, "email");
  
  // Lưu vào session để hiển thị lại giá trị
  $_SESSION["input_username"] = $input_username;
  $_SESSION["password"] = $password;
  $_SESSION["confirm_password"] = $confirm_password;
  $_SESSION["input_email"] = $input_email;
  
  $users = new UserDB();
  $username = $users->getUser($input_username);
  $email = $users->getEmail($input_email);
  
  $error = false;
  
  if (empty($input_username)) {
      $_SESSION["mess_username"] = "Không để thông tin trống";
      $error = true;
  } else if (strlen($input_username) < 8 || strlen($input_username) > 16) {
      $_SESSION["mess_username"] = "Tên đăng nhập từ 8-16 ký tự";
      $error = true;
  } else if ($username !== null) {
      $_SESSION["mess_username"] = "Tài khoản đã tồn tại";
      $error = true;
  }elseif (strlen($password) < 8 || strlen($password) > 16) {
    $_SESSION["mess_password"] = "Mật khẩu từ 8-16 ký tự";
    $error = true;
  } elseif ($password !== $confirm_password) {
    $_SESSION["mess_password"] = "Mật khẩu không trùng khớp";
    $error = true;
  }elseif (!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["mess_email"] = "Email không đúng định dạng";
    $error = true;
  } elseif ($email !== null) {
    $_SESSION["mess_email"] = "Email đã được đăng ký";
    $error = true;
  }
  
  if (empty($password) || empty($confirm_password)) {
      $_SESSION["mess_password"] = "Không để thông tin trống";
      $has_error = true;
  } 
  
  if (empty($input_email)) {
      $_SESSION["mess_email"] = "Không để thông tin trống";
      $error = true;
  } 
  
  // Nếu có lỗi, quay lại form đăng nhập
  if ($error) {
      header("Location: ./../html/sign_up.php");
      exit();
  }
  
  // Nếu không có lỗi, thêm người dùng vào cơ sở dữ liệu
  $users->insertUser($input_username, $password, $input_email);
  header("Location: ./../html/Home_page.php");
  exit();
}else {  
  $input_username = filter_input(INPUT_POST, "username");
  $input_password = filter_input(INPUT_POST, "password");

  $_SESSION["input_username"]=$input_username;
  $_SESSION["password"]=$input_password;
  $users=new UserDB();
  $user=new User();
  $username=$users->getUser($input_username);
  $error=true;

  if(empty($input_username)){
    $_SESSION["mess_username_login"]="Không để thông tin trống";
    $error=false;
  }else if($username === null){
    $_SESSION["mess_username_login"]="Tài khoản không tồn tại";
    $error=false;
  }
  if(empty($input_password)){
    $_SESSION["mess_password_login"]="Không để thông tin trống";
    $error=false;
  }

  if($error){
    $password=$username->getPassword();
    if($input_password != $password){
      $_SESSION["mess_password_login"]="Mật khẩu không chính xác";
      header("Location: ./../html/login-form.php");
    }else{
      header("Location: ./../html/Home_page.php");
      exit();
    }

  }else{
    header("Location: ./../html/login-form.php");
    exit();
  }

}


?>