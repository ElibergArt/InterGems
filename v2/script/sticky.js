// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the header
var menu_bar = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = menu_bar.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    menu_bar.classList.add("sticky");
  } else {
    menu_bar.classList.remove("sticky");
  }
}