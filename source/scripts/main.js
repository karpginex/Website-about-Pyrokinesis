function updateConcertClock() {
    let time = document.querySelector(".time p");
    time.textContent = timeBeforeConcert();
}
updateConcertClock();
setInterval(() => {
    updateConcertClock();
}, 1000);