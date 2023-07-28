window.onload = function () {
    var x = document.getElementById("contactanos");
    var y = document.getElementById("quienes");
    var selectLineaQuienes = document.getElementById("linea-select-quienes");
    var selectLineaContactanos = document.getElementById("linea-select-contactanos");

    x.style.display = "none";
    y.style.display = "block";
    selectLineaQuienes.style.display = "block";
    selectLineaContactanos.style.display = "none";
}
function contactanos() {
    var x = document.getElementById("quienes");
    var y = document.getElementById("contactanos");
    var selectLineaQuienes = document.getElementById("linea-select-quienes");
    var selectLineaContactanos = document.getElementById("linea-select-contactanos");

    x.style.display = "none";
    y.style.display = "block";
    selectLineaQuienes.style.display = "none";
    selectLineaContactanos.style.display = "block";
}
function quienes_somos() {
    var x = document.getElementById("contactanos");
    var y = document.getElementById("quienes");
    var selectLineaQuienes = document.getElementById("linea-select-quienes");
    var selectLineaContactanos = document.getElementById("linea-select-contactanos");

    x.style.display = "none";
    y.style.display = "block";
    selectLineaQuienes.style.display = "block";
    selectLineaContactanos.style.display = "none";
}
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
/*-------------------------Start ocultar y mostrar icono contactanos-----------------------*/
const circles = document.querySelectorAll('.icono-contac');
let activeTooltip = null;

circles.forEach(circle => {
    const event = circle.parentNode;
    const tooltip = event.querySelector('.hide');

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

/*-------------------------Start ocultar y mostrar icono contactanos-----------------------*/