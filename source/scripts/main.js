function updateConcertClock() {
    let time = document.querySelector(".time p");
    time.textContent = timeBeforeConcert();
}

setInterval(() => {
    updateConcertClock();
}, 1000);