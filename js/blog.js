// header-----------------------------------
document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("searchInput");
  if (!searchInput) return;

  const placeholderText = "Bạn cần tìm gì?";
  let currentIndex = 0;

  function typePlaceholder() {
    if (currentIndex < placeholderText.length) {
      searchInput.setAttribute(
        "placeholder",
        placeholderText.substring(0, currentIndex + 1)
      );
      currentIndex++;
      setTimeout(typePlaceholder, 100);
    } else {
      setTimeout(() => {
        currentIndex = 0;
        searchInput.setAttribute("placeholder", "");
        setTimeout(typePlaceholder, 500);
      }, 2000);
    }
  }

  typePlaceholder();
});
document.addEventListener("DOMContentLoaded", function () {
  var dropdown = document.querySelector(".dropbtn");
  var dropdownContent = dropdown.nextElementSibling;

  // Xử lý sự kiện khi nhấn vào nút dropdown
  dropdown.addEventListener("click", function (event) {
    event.preventDefault();
    dropdownContent.style.display =
      dropdownContent.style.display === "block" ? "none" : "block";
  });

  // Xử lý sự kiện khi nhấn ra ngoài dropdown
  document.addEventListener("click", function (event) {
    // Nếu nhấn vào bất cứ đâu mà không phải là nút dropdown hoặc menu con
    if (
      !dropdown.contains(event.target) &&
      !dropdownContent.contains(event.target)
    ) {
      dropdownContent.style.display = "none"; // Ẩn dropdown
    }
  });
});


// Cuộn header
let lastScrollTop = 0;
const delta = 10; // Độ nhạy của cuộn

window.addEventListener("scroll", function () {
  const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  const menu = document.querySelector(".header_top");

  if (Math.abs(lastScrollTop - currentScroll) <= delta) return; // Bỏ qua nếu cuộn không đủ lớn

  if (currentScroll > lastScrollTop) {
    menu.style.top = "-100px"; // Ẩn menu khi cuộn xuống
  } else {
    menu.style.top = "0"; // Hiện menu khi cuộn lên
  }

  lastScrollTop = currentScroll;
});

//header-Mobile------------------------------
document.addEventListener("DOMContentLoaded", function () {
  const headerMobile = document.querySelector(".headermobile");
  let lastScrollTop = 0;

  window.addEventListener("scroll", function () {
    const scrollTop = document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      headerMobile.style.top = "-50px";
    } else {
      headerMobile.style.top = "0";
    }

    lastScrollTop = scrollTop;

    headerMobile.style.transition = "top 0.5s";
  });
});
//
const openmenu = document.getElementById("openmenu");
const menu = document.querySelector(".headermobile .menu");
const closemenu = document.getElementById("closemenu");
const headerMobile = document.querySelector(".headermobile ul");
const body = document.body;
openmenu.addEventListener("click", function () {
  menu.style.width = "70%";
  menu.style.transition = "width 0.3s ease";
  body.style.background = "rgba(128, 128, 128, 0.235)";
  headerMobile.style.display = "none";
});
closemenu.addEventListener("click", function () {
  menu.style.width = "0";
  body.style.background = "white";
  menu.style.transition = "width 0.3s ease";
  headerMobile.style.display = "flex";
});

//
const banmuondidau = document.querySelector(".menu .menubot .banmuondidau");
const diadiem = document.querySelectorAll(".menu .menubot .banmuondidau div");
banmuondidau.addEventListener("click", function () {
  banmuondidau.style.height = "max-content";
  diadiem.forEach((diadiem) => {
    diadiem.style.display = diadiem.style.display === "none" ? "block" : "none";
  });
});
