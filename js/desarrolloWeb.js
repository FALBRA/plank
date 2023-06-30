/*------------------------Start slider trabajos anteriores-----------------------------*/
document.addEventListener("DOMContentLoaded", function() {
  var slides = document.querySelectorAll(".slide");
  var currentSlide = 0;

  function showSlide(n) {
    // Remover las clases "active", "prev" y "next" de todos los slides
    slides.forEach(function(slide) {
      slide.classList.remove("active", "prev", "next");
    });

    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].classList.add("active");

    // Obtener los índices de los slides adyacentes
    var prevSlide = (currentSlide - 1 + slides.length) % slides.length;
    var nextSlide = (currentSlide + 1) % slides.length;

    // Agregar las clases "prev" y "next" a los slides adyacentes
    slides[prevSlide].classList.add("prev");
    slides[nextSlide].classList.add("next");
  }

  showSlide(0); // Mostrar la primera imagen inicialmente

  var prevBtn = document.querySelector(".prev");
  var nextBtn = document.querySelector(".next");

  prevBtn.addEventListener("click", function() {
    showSlide(currentSlide - 1);
  });

  nextBtn.addEventListener("click", function() {
    showSlide(currentSlide + 1);
  });
});


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