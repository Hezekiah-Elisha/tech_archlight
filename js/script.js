function copy(){
  let copyText = document.getElementsByTagName('code');

  copyText.select();
  copyText.setSectionRange(0,99999);

  document.execCommand("copy");

  alert("Copied the text : "+copyText.value);
  console.log("working");
}

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
