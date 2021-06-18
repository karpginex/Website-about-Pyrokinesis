const concertTime = new Date('December 17, 2021 03:24:00');

function pad(n){
    return n<10 ? '0'+n : n
}

function timeBeforeConcert() {
    let difference = concertTime - Date.now();
    let days = Math.round(difference / (1000*60*60*24));
    let hours = pad(Math.round((difference / (1000*60*60))%24));
    let minutes = pad(Math.round((difference / (1000*60))%60));
    let seconds = pad(Math.round((difference / (1000))%60));
    return `${days}:${hours}:${minutes}:${seconds}`;
}