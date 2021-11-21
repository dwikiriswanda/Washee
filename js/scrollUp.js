window.onscroll = function() {scrollUp()};

function scrollUp() {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        document.getElementById("btn-to-top").style.display = "block";
    } else {
        document.getElementById("btn-to-top").style.display = "none";
    }
}
function topUp() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}