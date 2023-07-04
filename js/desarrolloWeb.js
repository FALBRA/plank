/*------------------------Start formulario------------------------------*/
var labels = document.getElementsByClassName('clickable-label');

function toggleLabelAppearance() {
  this.classList.toggle('label-clicked');
}

for (var i = 0; i < labels.length; i++) {
  labels[i].addEventListener('click', toggleLabelAppearance);
}

/*-------------------------End formulario---------------------------------*/
/*------------------------Start slider trabajos anteriores-----------------------------*/
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  loop: true,
  coverflowEffect: {
    depth: 500,
    modifer: 1,
    slidesShadows: true,
    rotate: 0,
    stretch: 0
  }
})
/*------------------------End slider trabajos anteriores-----------------------------*/
/*------------------------------Start proceso de desarrollo--------------------------------*/
const circles = document.querySelectorAll('.circle');
let activeTooltip = null;

circles.forEach(circle => {
  const event = circle.parentNode;
  const tooltip = event.querySelector('.tooltip');

  circle.addEventListener('click', (event) => {
    event.stopPropagation();

    if (activeTooltip !== tooltip) {
      hideTooltip(activeTooltip);
      activeTooltip = tooltip;
    }

    tooltip.style.display = 'block';
  });

  tooltip.addEventListener('click', (event) => {
    event.stopPropagation();
  });

  document.addEventListener('click', () => {
    hideTooltip(activeTooltip);
    activeTooltip = null;
  });
});

function hideTooltip(tooltip) {
  if (tooltip) {
    tooltip.style.display = 'none';
  }
}
/*------------------------------End proceso de desarrollo--------------------------------*/