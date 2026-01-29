document.addEventListener("DOMContentLoaded", function () {

  const images = [
    BASE_URL + "assets/image/ind1.jpg",
    BASE_URL + "assets/image/ind2.jpg",
    BASE_URL + "assets/image/ind3.jpg"
  ];

  let index = 0;
  const slider = document.getElementById("sliderImage");

  function changeImage() {
    slider.style.opacity = 0;

    setTimeout(() => {
      index = (index + 1) % images.length;
      slider.src = images[index];
      slider.style.opacity = 1;
    }, 500);
  }

  setInterval(changeImage, 3000);

});




document.addEventListener("DOMContentLoaded", () => {

  const faqQuestions = document.querySelectorAll(".faq-question");

  faqQuestions.forEach((btn) => {

    btn.addEventListener("click", () => {

      const parent = btn.parentElement; // faq-item
      const icon = btn.querySelector("span");

      // ✅ Close all other FAQs
      document.querySelectorAll(".faq-item").forEach((item) => {
        if (item !== parent) {
          item.classList.remove("active");
          item.querySelector("span").innerHTML = "+";
        }
      });

      // ✅ Toggle current FAQ
      parent.classList.toggle("active");

      // ✅ Icon Change + to ×
      if (parent.classList.contains("active")) {
        icon.innerHTML = "×";
      } else {
        icon.innerHTML = "+";
      }

    });

  });

});


