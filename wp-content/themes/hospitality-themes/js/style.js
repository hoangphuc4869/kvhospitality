

// menu mobile

var openMenu = document.getElementsByClassName('icon-bar')[0];


var modalMenu = document.getElementsByClassName('modal-menu')[0];
var stopMenu = document.getElementsByClassName('modal-menu-2')[0];


openMenu.onclick = function() {
	modalMenu.classList.add('action-menu');
}

modalMenu.onclick = function() {
	modalMenu.classList.remove('action-menu');
}

stopMenu.addEventListener('click', function(event) {
  event.stopPropagation();
});



// slider banner

var swiper = new Swiper(".mySwiper", {
  centeredSlides: true,
  autoplay: {
    delay: 15000,
    disableOnInteraction: false,
  },
  loop: true,
  pagination: {
    // el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
});


