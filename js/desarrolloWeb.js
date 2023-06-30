const circles = document.querySelectorAll('.circle');
circles.forEach(circle => {
  const event = circle.parentNode;
  const tooltip = event.querySelector('.tooltip');
  
  circle.addEventListener('click', (event) => {
    event.stopPropagation();
    tooltip.style.display = 'block';
  });
  
  tooltip.addEventListener('click', (event) => {
    event.stopPropagation();
  });
  
  document.addEventListener('click', () => {
    tooltip.style.display = 'none';
  });
});
