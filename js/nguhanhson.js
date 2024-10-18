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
// slider-----------------------------------
let list = document.querySelector(".slider .list");
let item = document.querySelectorAll(".slider .list .item");
let dots = document.querySelectorAll(".slider .dots li");
let prev = document.querySelector(".slider .buttons .prev");
let next = document.querySelector(".slider .buttons .next");
let list1 = document.querySelector(".anh .list1");
let item1 = document.querySelectorAll(".anh .list1 .item");

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
  let item1Width = item1[active].offsetWidth;
  list.style.left = -itemWidth * active + "px";
  list1.style.left = -item1Width * active + "px";

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

//infomation----------------------------
document.addEventListener("DOMContentLoaded", function () {
  const link = document.querySelector(".content a");
  const info = document.querySelector(".infomation");

  link.addEventListener("mouseover", function () {
    info.style.display = "block";
  });

  link.addEventListener("mouseout", function () {
    info.style.display = "none";
  });
});

// feedback----------------------------------
let listfeedback = document.querySelector(".feedback .list-feedback");
let item3 = document.querySelectorAll(".feedback .list-feedback .item ");
let prev1 = document.querySelector(".feedback .buttonss .prev1");
let next1 = document.querySelector(".feedback .buttonss .next1");

let active1 = 0;
let lengthitem1 = item3.length - 1;

prev1.style.display = "none";

next1.onclick = function () {
  if (active1 < lengthitem1) {
    active1++;
    prev1.style.display = "block";
    reloadSlider1();
  }
  if (active1 === lengthitem1) {
    next1.style.display = "none";
  }
};

prev1.onclick = function () {
  if (active1 > 0) {
    active1--;
    next1.style.display = "block";
    reloadSlider1();
  }
  if (active1 === 0) {
    prev1.style.display = "none";
  }
};

function reloadSlider1() {
  let itemWidth1 = item3[active1].offsetWidth;
  listfeedback.style.left = -itemWidth1 * active1 + "px";

  if (active1 === 0) {
    prev1.style.display = "none";
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const xuhuong = document.querySelector(".xuhuong");
  const content1 = document.querySelector(".xuhuong .content1");
  const xemthem = document.querySelector(".xuhuong .xemthem");
  const xemithon = document.querySelector(".xuhuong .xemithon");

  xemthem.addEventListener("click", function () {
    content1.style.height = "max-content";
    xemthem.style.display = "none";
    xemithon.style.display = "block";
    xuhuong.style.height = "450px";
  });

  xemithon.addEventListener("click", function () {
    content1.style.height = "135px";
    xemithon.style.display = "none";
    xemthem.style.display = "block";
    xuhuong.style.height = "300px";
  });
});
//thongtin----------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
  const thongtinDivs = document.querySelectorAll(".thongtin div");

  thongtinDivs.forEach(function (div) {
    const upIcon = div.querySelector(".fa-chevron-up");
    const downIcon = div.querySelector(".fa-chevron-down");

    downIcon.style.display = "none";

    div.addEventListener("click", function () {
      if (
        this.style.height === `${this.scrollHeight}px` ||
        this.style.height === "max-content"
      ) {
        this.style.height = "62px";
        upIcon.style.display = "block";
        downIcon.style.display = "none";
      } else {
        this.style.height = `${this.scrollHeight}px`;

        thongtinDivs.forEach(function (otherDiv) {
          if (otherDiv !== div) {
            otherDiv.style.height = "62px";
            otherDiv.querySelector(".fa-chevron-up").style.display = "block";
            otherDiv.querySelector(".fa-chevron-down").style.display = "none";
          }
        });

        upIcon.style.display = "none";
        downIcon.style.display = "block";
      }
    });
  });
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

//feedback-mobile----------------------------------------------------------------------------------
let listfeedback_mobile = document.querySelector(
  ".feedback-mobile .list-feedback"
);
let item3_mobile = document.querySelectorAll(
  ".feedback-mobile .list-feedback .item"
);
let prev1_mobile = document.querySelector(".feedback-mobile .buttonss .prev1");
let next1_mobile = document.querySelector(".feedback-mobile .buttonss .next1");

let active1_mobile = 0;
let lengthitem1_mobile = item3_mobile.length - 1;

prev1_mobile.style.display = "none";

next1_mobile.onclick = function () {
  if (active1_mobile < lengthitem1_mobile) {
    active1_mobile++;
    prev1_mobile.style.display = "block";
    reloadSlider1_mobile();
  }
  if (active1_mobile === lengthitem1_mobile) {
    next1_mobile.style.display = "none";
  }
};

prev1_mobile.onclick = function () {
  if (active1_mobile > 0) {
    active1_mobile--;
    next1_mobile.style.display = "block";
    reloadSlider1_mobile();
  }
  if (active1_mobile === 0) {
    prev1_mobile.style.display = "none";
  }
};

function reloadSlider1_mobile() {
  let itemWidth1_mobile = item3_mobile[active1_mobile].offsetWidth;
  listfeedback_mobile.style.left = -itemWidth1_mobile * active1_mobile + "px";

  if (active1_mobile === 0) {
    prev1_mobile.style.display = "none";
  }
}
