document.addEventListener("DOMContentLoaded", () => {

  const toggle = document.querySelector(".ms-toggle");
  const menu   = document.querySelector(".ms-menu");

  /* Toggle mobile menu */
  toggle.addEventListener("click", () => {
    menu.classList.toggle("active");
  });

  /* Close menu after clicking any link (mobile) */
  document.querySelectorAll(".ms-menu a").forEach(link => {
    link.addEventListener("click", () => {
      if (window.innerWidth <= 991) {
        menu.classList.remove("active");
      }
    });
  });

});
