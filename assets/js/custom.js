$(document).ready(function() {
    $(".menu-4").click(function() {
        $(".menu-2").slideToggle();
    });

    $(".gh").click(function() {
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 2000);
    });

    $(".gq").click(function() {
        $('html, body').animate({
            scrollTop: $("#quotes").offset().top
        }, 2000);
    });

    $(".gr").click(function() {
        $('html, body').animate({
            scrollTop: $("#reception").offset().top
        }, 2000);
    });

    $(".gl").click(function() {
        $('html, body').animate({
            scrollTop: $("#location").offset().top
        }, 2000);
    });

    $(".gs").click(function() {
        $('html, body').animate({
            scrollTop: $("#story").offset().top
        }, 2000);
    });

    $(".gg").click(function() {
        $('html, body').animate({
            scrollTop: $("#gallery").offset().top
        }, 2000);
    });

    $(".ggb").click(function() {
        $('html, body').animate({
            scrollTop: $("#guestbook").offset().top
        }, 2000);
    });
});



$("#pertama").fadeIn(500);

$(".hide").click(function() {
    $("#pertama").fadeOut(500);
    $("#kedua").fadeIn(1000);
    $("body").css("overflow-y", "scroll");
});

var audio = document.getElementById('audio');

function play() {
    audio.play();
    //player.playVideo();
    $("#on").css("display", "none")
    $("#off").css("display", "block");
}

function pause() {
    audio.pause();
    //player.pauseVideo();
    $("#off").css("display", "none");
    $("#on").css("display", "block")
}
// COUNT DOWN
var countDownDate = new Date("Oct, 10 2020 08:00:00").getTime();

var x = setInterval(function() {

    var now = new Date().getTime();

    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("day").innerHTML = days + "<br><span class='slide-2-3-2'> Days</span>";
    document.getElementById("hour").innerHTML = hours + "<br><span class='slide-2-3-2'> Hours</span>";
    document.getElementById("minute").innerHTML = minutes + "<br> <span class='slide-2-3-2'>Minutes</span>";
    document.getElementById("second").innerHTML = seconds +
        "<br><span class='slide-2-3-2'> Seconds</span>";;


    if (distance < 0) {
        clearInterval(x);
        document.getElementById("count").innerHTML = "Happy Wedding";
    }
}, 1000);