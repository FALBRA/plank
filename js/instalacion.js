const circles = document.querySelectorAll('.fa-exclamation-circle');
let activeTooltip = null;

circles.forEach(circle => {
    const event = circle.parentNode;
    const tooltip = event.querySelector('.p-recordar');

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