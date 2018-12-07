/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function getval(sel)
{

    document.getElementById("ta1").style.visibility = "visible";

}



var time = 0;
var running = 0;
function startPause() {
    if (running == 0) {
        running = 1;
        increment();
        document.getElementById("start").innerHTML = "Pause";
        document.getElementById("startPause").style.backgroundColor = "red";
        document.getElementById("startPause").style.borderColor = "red";
    } else {
        running = 0;
        document.getElementById("start").innerHTML = "Resume";
        document.getElementById("startPause").style.backgroundColor = "green";
        document.getElementById("startPause").style.borderColor = "green";
    }
}
function reset() {
    running = 0;
    time = 0;
    document.getElementById("start").innerHTML = "Start";
    document.getElementById("output").innerHTML = "0:00:00:00";
    document.getElementById("startPause").style.backgroundColor = "green";
    document.getElementById("startPause").style.borderColor = "green";
}
function increment() {
    if (running == 1) {
        setTimeout(function () {
            time++;
            var mins = Math.floor(time / 10 / 60);
            var secs = Math.floor(time / 10 % 60);
            var hours = Math.floor(time / 10 / 60 / 60);
            var tenths = time % 10;
            if (hours > 0) {
                mins = mins % 60;
            }
            if (mins < 10) {
                mins = "0" + mins;
            }
            if (secs < 10) {
                secs = "0" + secs;
            }
            document.getElementById("output").innerHTML = hours + ":" + mins + ":" + secs + ":" + tenths + "0";
            increment();
        }, 100)
    }
}
function get_total_time() {
    document.getElementById("time").value = time;
    if(document.getElementById("a").value=="")
{
alert("Please Enter details on what you are working");
document.getElementById("a").focus();
return false;
}
    document.getElementById("myForm").submit();

}

