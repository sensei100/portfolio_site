var time = new Date();
var ticker;

console.log(time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds());

document.getElementById("time").innerHTML = time;