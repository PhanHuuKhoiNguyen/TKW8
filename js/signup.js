const registerBtn = document.getElementById("registerBtn");
const loginBtn = document.getElementById("loginBtn");
const container = document.getElementById("container");

registerBtn.addEventListener("click", () => {
  const password = document.querySelector(
    '.sign-in input[name="password"]'
  ).value;
  const confirmPassword = document.querySelector(
    '.sign-in input[name="confirmPassword"]'
  ).value;
  const user = document.querySelector('.sign-in input[name="username"]').value;

  if (password === "" || confirmPassword === "" || user === "") {
    alert("Không để thông tin trống");
  } else if (password !== confirmPassword) {
    alert("Mật khẩu không trùng khớp");
  } else if (
    user.length < 8 ||
    user.length > 13 ||
    user[0] !== user[0].toUpperCase()
  ) {
    alert("Tên đăng nhập từ 8-13 ký tự và chữ cái đầu viết hoa");
  } else if (password.length < 8 || password.length > 13) {
    alert("Mật khẩu từ 8-13 ký tự");
  } else {
    if (confirm("Xác nhận đăng ký")) {
      alert("Đăng ký thành công");
      window.location.href = "./../html/login-form.html";
    }
  }
});

document.getElementById("register").addEventListener("click", () => {
  container.classList.add("active");
});

document.getElementById("login").addEventListener("click", () => {
  container.classList.remove("active");
});
