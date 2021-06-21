function updateConcertClock() {
    let time = document.querySelector(".time p");
    time.textContent = timeBeforeConcert();
}

function updateCurrentDate() {
    let currentDate = document.querySelector(".current__date p");
    currentDate.textContent = getCurrentDate();
}

updateCurrentDate();

updateConcertClock();
setInterval(() => {
    updateConcertClock();
}, 1000);


/* Animation with scrolling */
function onEntry(entry) {
    entry.forEach(change => {
      if (change.isIntersecting) {
        change.target.classList.add('element__show');
      }
    });
  }


  let options = { threshold: [0.5] };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.section__header');
  for (let elm of elements) {
    observer.observe(elm);
  }


  let elements__about = document.querySelectorAll('.about');
  for (let elm of elements__about) {
    observer.observe(elm);
  }

  let elements__title = document.querySelectorAll('.intro__title');
  for (let elm of elements__title) {
    observer.observe(elm);
  }