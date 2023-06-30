const events = document.querySelectorAll('.event');
    events.forEach(event => {
      const tooltip = event.querySelector('.tooltip');
      event.addEventListener('mouseenter', () => {
        tooltip.style.display = 'block';
      });
      event.addEventListener('mouseleave', () => {
        tooltip.style.display = 'none';
      });
    });