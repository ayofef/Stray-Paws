
var donateButton = document.querySelector("#donation");


var option = document.querySelector("#donate-option");


donateButton.addEventListener("click", function(){
  option.style.display ="block";
  donateButton.style.display ="none";
});
