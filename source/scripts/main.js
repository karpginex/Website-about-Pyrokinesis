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

