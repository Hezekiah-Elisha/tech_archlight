function copy(){
  let copyText = document.getElementsByTagName('code');

  copyText.select();
  copyText.setSectionRange(0,99999);

  document.execCommand("copy");

  alert("Copied the text : "+copyText.value);
  console.log("working");
}
