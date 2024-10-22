
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    document.getElementById("navbar").style.padding = "0 0";
    document.getElementById("logo").style.fontSize = "0";
  } else {
    document.getElementById("navbar").style.padding = "0";
    document.getElementById("logo").style.fontSize = "0";
  }
}

