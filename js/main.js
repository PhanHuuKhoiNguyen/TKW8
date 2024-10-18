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
  const header = document.querySelector("header");
  const headerBot = document.querySelector(".header_bot");
  let lastScrollTop = 0;
  let headerBotVisible = false;

  window.addEventListener("scroll", function () {
    const scrollTop = document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      header.style.top = "-150px";
      if (headerBotVisible) {
        headerBot.style.height = "0";
      }
    } else {
      header.style.top = "0";
    }

    lastScrollTop = scrollTop;

    header.style.transition = "top 0.5s";
  });

  const toggleButton = document.querySelector(".header_middle .a");
  const toggleButtonIcon = toggleButton.querySelector("i");

  toggleButton.addEventListener("click", function () {
    headerBotVisible = !headerBotVisible;
    if (headerBotVisible) {
      headerBot.style.height = "315px";
      toggleButtonIcon.style.transform = "rotate(180deg)";
    } else {
      headerBot.style.height = "0";
      toggleButtonIcon.style.transform = "rotate(0deg)";
    }

    toggleButtonIcon.style.transition = "transform 0.5s";
  });
});

// slider-----------------------------------
let list = document.querySelector(".slider .list");
let item = document.querySelectorAll(".slider .list .item");
let dots = document.querySelectorAll(".slider .dots li");
let prev = document.querySelector(".slider .buttons .prev");
let next = document.querySelector(".slider .buttons .next");

let active = 0;
let lengthitem = item.length - 1;
next.onclick = function () {
  if (active + 1 > lengthitem) {
    active = 0;
  } else {
    active = active + 1;
  }
  reloadSlider();
};
prev.onclick = function () {
  if (active - 1 < 0) {
    active = lengthitem;
  } else {
    active = active - 1;
  }
  reloadSlider();
};
let refreshSlider = setInterval(() => {
  next.click();
}, 5000);
function reloadSlider() {
  let itemWidth = item[active].offsetWidth;
  list.style.left = -itemWidth * active + "px";

  let lastActiveDot = document.querySelector(".slider .dots li.active");
  lastActiveDot.classList.remove("active");
  dots[active].classList.add("active");
  clearInterval(refreshSlider);
  refreshSlider = setInterval(() => {
    next.click();
  }, 5000);
}
dots.forEach((li, key) => {
  li.addEventListener("click", function () {
    active = key;
    reloadSlider();
  });
});
document.querySelector(".prev").addEventListener("click", function () {
  this.classList.add("prev-clicked");
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

