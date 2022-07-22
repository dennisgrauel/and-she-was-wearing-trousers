const events = document.querySelectorAll('.event-row');

events.forEach((eventRow) => {
  eventRow.addEventListener('click', function() {
    this.classList.toggle('active');
    console.log('event row toggled');
  })
});
