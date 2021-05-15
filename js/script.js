let x = document.getElementById('bars');

// x.addEventListener("click", openLinks, true);
x.addEventListener("blur", closeLinks, true);

function openLinks(){
  document.getElementById('links').style.display='block';
}
function closeLinks(){
  document.getElementById('links').style.display= 'none';
}


// (function (window) {
//
// })(window);



// window.onscroll = function() {scrollFunction()};
//
// function scrollFunction() {
//   if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
//     document.getElementById("navbar").style.backgroundColor = "#fff";
//     // document.getElementById("logo").style.fontSize = "25px";
//   } else {
//     // document.getElementById("navbar").style.padding = "80px 10px";
//     // document.getElementById("logo").style.fontSize = "35px";
//   }
// }
