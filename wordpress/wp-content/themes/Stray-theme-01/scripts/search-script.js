
var searchButton = document.querySelector(".fa-search");


searchButton.addEventListener("click", function(){
  var e = document.querySelector("#search input");
  if(e.style.display =="inline")
    e.style.display ="none";
  else
    e.style.display="inline";
});

searchButton.addEventListener("click", function(){
  var d = document.querySelector("#mySearch");
  if(d.style.display =="inline")
    d.focus();
  else
    d.blur();
});
