const toggle = document.querySelector(".ms-toggle");
const menu = document.querySelector(".ms-menu");
const dropdownLinks = document.querySelectorAll(".ms-dropdown > a");

toggle.addEventListener("click", () => {
  menu.classList.toggle("active");
});

dropdownLinks.forEach(link => {
  link.addEventListener("click", e => {
    if (window.innerWidth <= 991) {
      e.preventDefault();
      link.parentElement.classList.toggle("active");
    }
  });
});
