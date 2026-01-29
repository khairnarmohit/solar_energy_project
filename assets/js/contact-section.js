// Contact section JS: switch background image with a short fade
(function(){
  function changeBg(url){
    const bg = document.querySelector('.contact-section .bg-img');
    if(!bg) return;
    bg.classList.add('fade-out');
    setTimeout(function(){
      bg.style.backgroundImage = 'url(' + url + ')';
      bg.classList.remove('fade-out');
    }, 320);
  }

  document.addEventListener('click', function(e){
    const btn = e.target.closest && e.target.closest('.switch-btn');
    if(!btn) return;
    const img = btn.getAttribute('data-img');
    if(img) changeBg(img);
  });
})();
