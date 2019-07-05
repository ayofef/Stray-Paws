
var donateButtonHome = document.querySelector("#donation-home");


var optionHome = document.querySelector("#home-hide");
var optionHome2 = document.querySelector("#home-hide2");

donateButtonHome.addEventListener("click", function(){
  optionHome.style.display ="block";
  optionHome2.style.display ="block";
  donateButtonHome.style.display ="none";
});
