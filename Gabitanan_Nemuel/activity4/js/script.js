// docked scrolldown part 1
window.onscroll = function() {myFunction()};

var header = document.getElementById("mynavscroll");
var sticky = header.offsetTop;

// docked scrolldown part 2
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("stickynavbar");
  } else {
    header.classList.remove("stickynavbar");
  }
}