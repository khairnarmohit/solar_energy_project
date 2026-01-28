
  function goToProduct(page) {

    const section = document.querySelector('.product-section');

    // trigger side animation
    section.classList.add('active');

    // optional little scroll for effect
    section.scrollIntoView({
      behavior: 'smooth',
      block: 'center'
    });

    // redirect after animation
    setTimeout(() => {
      window.location.href = page;
    }, 900);
}
