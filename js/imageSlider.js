var index = 0;
var images = document.getElementsByClassName("slide");
display_current();
function next() {
    index++;
    if (index >= images.length) {
        index = 0;
    }
    display_current();
}
function pre() {
    index--;
    if (index < 0) {
        index = images.length - 1;
    }
    display_current();
}
var t;
function display_current() {
    for (var i = 0; i < images.length; i++) {
        images[i].style = "display:none";
    }
    images[index].style.display = "block";
    clearTimeout(t);
     t=setTimeout(next, 10000);

}