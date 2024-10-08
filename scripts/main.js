// sticky header /
window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  if (window.scrollY > 0) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
});

// sticky header  //

// menu
function toggleNav() {
  if (window.innerWidth <= 1024) {
    const nav = document.querySelector(".main-menu");
    nav.classList.toggle("active");
  }
}

function closeNav() {
  if (window.innerWidth <= 1024) {
    const nav = document.querySelector(".main-menu");
    nav.classList.remove("active");
  }
}

const menuItems = document.querySelectorAll(".main-menu li a");

menuItems.forEach((item) => {
  item.addEventListener("click", (e) => {
    const submenu = item.nextElementSibling;
    if (
      window.innerWidth <= 1024 &&
      submenu &&
      submenu.classList.contains("submenu")
    ) {
      e.preventDefault(); // Prevent anchor link from navigating
      item.parentElement.classList.toggle("active");
    }
  });
});

window.addEventListener("resize", () => {
  // Optional: Close the menu if resizing above 1024px
  if (window.innerWidth > 1024) {
    closeNav();
  }
});

// testimonia slider
document.addEventListener("DOMContentLoaded", function () {
  // Swiper configuration for .brands (Single slide at all breakpoints)
  const brandsSwiper = new Swiper(".brands .content-swiper", {
    slidesPerView: 1, // Always show 1 slide
    loop: true,
    draggable: true,
    autoplay: false,
    pagination: false,
    spaceBetween: 40,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
  });

  // Swiper configuration for .our-studies (Responsive - 1 slide on mobile, 3 on desktop)
  const caseStudiesSwiper = new Swiper(".our-studies .content-swiper", {
    slidesPerView: 1, // Default to 1 slide for mobile
    loop: true,
    draggable: true,
    autoplay: false,
    pagination: false,
    spaceBetween: 40,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2, // 2 slides on tablets
      },
      1024: {
        slidesPerView: 3, // 3 slides on desktop
      },
    },
  });
});

// multi-tab on service page
document.querySelectorAll(".tab-name").forEach((tab) => {
  tab.addEventListener("click", () => {
    // Remove active class from all tabs and contents
    document
      .querySelectorAll(".tab-name")
      .forEach((item) => item.classList.remove("active"));
    document
      .querySelectorAll(".content")
      .forEach((content) => content.classList.remove("active"));

    // Add active class to the clicked tab
    tab.classList.add("active");

    // Show the corresponding content
    const tabId = tab.getAttribute("data-tab");
    const activeContent = document.getElementById(tabId);
    activeContent.classList.add("active");
  });
});

// FAQ ///
document.querySelectorAll(".faq-question").forEach((button) => {
  button.addEventListener("click", () => {
    const answer = button.nextElementSibling;
    const isExpanded = button.getAttribute("aria-expanded") === "true";

    document.querySelectorAll(".faq-answer").forEach((el) => {
      el.style.maxHeight = null;
      el.previousElementSibling.setAttribute("aria-expanded", "false");
      el.setAttribute("aria-hidden", "true");
    });

    if (!isExpanded) {
      button.setAttribute("aria-expanded", "true");
      answer.setAttribute("aria-hidden", "false");
      answer.style.maxHeight = answer.scrollHeight + "px";
    }
  });
});

// ---------------------About-us-owl-carousel---------------------
var owl = $(".owl-carousel");
owl.owlCarousel({
  items: 4,
  loop: true,
  // margin:10,
  autoplay: true,
  autoplayTimeout: 3000,
  // autoplayHoverPause:true
  responsive: {
    0: {
      items: 2,
      nav: true,
    },
    480: {
      items: 2,
      nav: false,
    },
    768: {
      items: 3,
      nav: true,
      loop: false,
    },
    1024: {
      items: 6,
      nav: true,
      loop: false,
    },
  },
});
